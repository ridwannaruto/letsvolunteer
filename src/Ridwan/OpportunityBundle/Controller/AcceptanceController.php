<?php

namespace Ridwan\OpportunityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ridwan\EntityBundle\Form\AccountType;
use Ridwan\EntityBundle\Entity\Account;


class AcceptanceController extends Controller
{

    public function acceptAction($opID)
    {
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('ridwan_site_loginpage'));
        }
        $em = $this->getDoctrine()->getManager();
        $opportunity = $em->getRepository('RidwanEntityBundle:Opportunities')->find($opID);
        $profile = $em->getRepository('RidwanEntityBundle:Profile')->findOneBy(array('user' => $user->getId()));

        $profile->setCurrent($opID);
        $profile->setOpportunities(null);

        $enrollments = $opportunity->getEnrolled();
        if ($enrollments == null){
            $enrollments = array();
        }

        $count = count($enrollments ) + 1;
        if ($count == $opportunity->getNumberofvolunteers()){
            $opportunity->setStatus(2);
        }

        $enrollments[] = $user->getId();
        $opportunity->setEnrolled($enrollments);

        $em->persist($profile);
        $em->persist($opportunity);
        $em->flush();

        return $this->redirect(
            $this->generateUrl(
                'ridwan_opportunity_index',
                array('message' => 'you will be contacted by the organization soon', 'type' => 'S')
            )
        );

        return $this->render('RidwanSiteBundle:Error:permission.html.twig');
    }

    public function denyAction($opID)
    {
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('ridwan_site_loginpage'));
        }

        $em = $this->getDoctrine()->getManager();
        $opportunity = $em->getRepository('RidwanEntityBundle:Opportunities')->find($opID);
        $profile = $em->getRepository('RidwanEntityBundle:Profile')->findOneBy(array('user' => $user->getId()));

        $opportunities = $profile->getOpportunities();
        $newOpportunities = array();
        foreach ($opportunities as $op){
            if ($op != $opID){
                $newOpportunities[] = $op;
            }
        }
        $profile->setOpportunities($newOpportunities);
        $rejected = $opportunity->getInterested();
        if ($rejected == null){
            $rejected = array();
        }

        $rejected[] = $user->getId();
        $opportunity->setInterested($rejected);
        $em->persist($profile);
        $em->persist($opportunity);
        $em->flush();

        return $this->redirect($this->generateUrl('ridwan_opportunity_index'));

        return $this->render('RidwanSiteBundle:Error:permission.html.twig');
    }


}
