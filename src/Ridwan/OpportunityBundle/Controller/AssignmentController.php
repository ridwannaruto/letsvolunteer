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
            return $this->render('RidwanOpportunityBundle:Assignment:details.html.twig', array('Opportunity' => $opportunity));
        }
        return $this->render('RidwanSiteBundle:Error:permission.html.twig');
    }

    private function generateVolunteers($opportunity){

    }



}
