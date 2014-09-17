<?php

namespace Ridwan\OpportunityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ridwan\EntityBundle\Form\AccountType;
use Ridwan\EntityBundle\Entity\Account;


class AssignmentController extends Controller {

    public function indexAction(Request $request){
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('ridwan_site_loginpage'));
        }
        $userRole = $user->getRoles()[0];
        if ($userRole == 'ADMINISTRATOR' || $userRole = 'NVS'){

            $em = $this->getDoctrine()->getManager();
            //Find all Opportunities that need volunteers to be assigned
            $opportunities = $em->getRepository('RidwanEntityBundle:Opportunities')->findBy(array('status'=>1));

            return $this->render('RidwanOpportunityBundle:Assignment:index.html.twig', array('Opportunities' => $opportunities));
        }
        return $this->render('RidwanSiteBundle:Error:permission.html.twig');
    }

    public function detailsAction(Request $request,$opportunityID){
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('ridwan_site_loginpage'));
        }
        $userRole = $user->getRoles()[0];
        if ($userRole == 'ADMINISTRATOR' || $userRole = 'NVS'){

            $em = $this->getDoctrine()->getManager();
            //Find the Opportunity that need volunteers to be assigned
            $opportunity = $em->getRepository('RidwanEntityBundle:Opportunities')->find($opportunityID);
            $systemMatch = $opportunity->getSystemmatch();
            if ($systemMatch = null){
                $systemMatch = $this->generateVolunteers($opportunity);
            }
            return $this->render('RidwanOpportunityBundle:Assignment:details.html.twig', array('Opportunity' => $opportunity, 'volunteers' => $this->generateVolunteers($opportunity)));
        }
        return $this->render('RidwanSiteBundle:Error:permission.html.twig');
    }

    private function generateVolunteers($opportunity){
        $volunteers = array();
        $em = $this->getDoctrine()->getManager();
        $repositoryVolunteers = $em->getRepository('RidwanEntityBundle:Volunteerpersonal');
        $repositorySkills = $em->getRepository('RidwanEntityBundle:Skills');
        $repositoryAvailability = $em->getRepository('RidwanEntityBundle:Availability');
        $primarySkillMatch = $repositorySkills->findBy(array('primary' => $opportunity->getRole()));
        $secondarySkillMatch = $repositorySkills->findBy(array('secondary' => $opportunity->getRole()));

        foreach ($primarySkillMatch as $member){
            if ($em->getRepository('RidwanEntityBundle:Profile')->findOneBy(array('user'=>$member->getUser()))->getCurrent() == 0)
            $volunteers[] = $repositoryVolunteers->findOneBy(array('user'=>$member->getUser()));

        }
        foreach ($secondarySkillMatch as $member){
            if ($em->getRepository('RidwanEntityBundle:Profile')->findOneBy(array('user'=>$member->getUser()))->getCurrent() == 0)
            $volunteers[] = $repositoryVolunteers->findOneBy(array('user'=>$member->getUser()));
        }

        return $this->filterSuggestion($volunteers, $opportunity->getId());

    }

    private function filterSuggestion($volunteers, $opID){
        if ($volunteers != null){
            foreach ($volunteers as $volunteer){
                $userID = $volunteer->getUser()->getId();
                $em = $this->getDoctrine()->getManager();
                $opportunity = $em->getRepository('RidwanEntityBundle:Opportunities')->find($opID);
                $profile = $em->getRepository('RidwanEntityBundle:Profile')->findOneBy(array('user'=>$userID));
                $rejected = $opportunity->getInterested();
                $accepted = $opportunity->getEnrolled();
                $suggested = $opportunity->getSystemmatch();

                if($profile->getCurrent() != 0){
                    $volunteer = null;
                }
                if ($rejected != null){
                    foreach ($rejected as $reject){
                        if ($reject == $userID){
                            $volunteer = null;
                        }
                    }
                }

                if ($accepted != null){
                    foreach ($accepted as $accept){
                        if ($accept == $userID){
                            $volunteer = null;
                        }
                    }
                }


                if ($suggested != null){

                    foreach ($suggested as $suggest){
                        if ($suggest == $userID){
                            $volunteer->setUser(null);
                        }
                    }
                }

            }
            return $volunteers;
        }
        return null;
    }

    public function suggestAction($userID, $opID){

        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('ridwan_site_loginpage'));
        }
        $userRole = $user->getRoles()[0];
        if ($userRole == 'ADMINISTRATOR' || $userRole = 'NVS'){

            $em = $this->getDoctrine()->getManager();
            //Find all Opportunities that need volunteers to be assigned
            $opportunity = $em->getRepository('RidwanEntityBundle:Opportunities')->find($opID);
            $volunteerProfile = $em->getRepository('RidwanEntityBundle:Profile')->findOneBy(array('user' => $userID));

            $systemMatch = $opportunity->getSystemmatch();
            if ($systemMatch == null){
                $systemMatch = array();
            }

            $systemMatch[] = $userID;
            $opportunity->setSystemmatch($systemMatch);

            $volunteerOpportunities = $volunteerProfile->getOpportunities();
            if ($volunteerOpportunities == null){
                $volunteerOpportunities = array();
            }
            $volunteerOpportunities[] = $opID;
            $volunteerProfile->setOpportunities($volunteerOpportunities);

            $em->persist($opportunity);
            $em->persist($volunteerProfile);
            $em->flush();

            return $this->redirect($this->generateUrl('ridwan_opportunity_assignment_details', array('opportunityID'=>$opID)));


        }
        return $this->render('RidwanSiteBundle:Error:permission.html.twig');


    }



}
