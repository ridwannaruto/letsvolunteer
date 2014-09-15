<?php

namespace Ridwan\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ridwan\EntityBundle\Form\AccountType;
use Ridwan\EntityBundle\Entity\Account;


class ApprovalController extends Controller {

    public function volunteerAction(Request $request, $userID){
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('ridwan_site_loginpage'));
        }
        $userRole = $user->getRoles()[0];
        if ($userRole == 'ADMINISTRATOR' || $userRole = 'NVS'){

            $em = $this->getDoctrine()->getManager();
            $volunteer = $em->getRepository('RidwanEntityBundle:Volunteerpersonal')->find($userID);
            $volunteer->setStatus(3);
            $em->persist($volunteer);
            $em->flush();
            return $this->redirect($this->generateUrl('ridwan_site_home', array('type' => 'S', 'message' => 'successfully approved the volunteer')));
        }
        return $this->render('RidwanSiteBundle:Error:permission.html.twig');
    }

    public function opportunityAction(Request $request, $opID){
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('ridwan_site_loginpage'));
        }
        $userRole = $user->getRoles()[0];
        if ($userRole == 'ADMINISTRATOR' || $userRole = 'NVS'){
            echo $opID;
            $opportunity = $this->getDoctrine()->getManager()->getRepository('RidwanEntityBundle:Opportunities')->find($opID);
            $opportunity->setStatus(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($opportunity);
            $em->flush();
            return $this->redirect($this->generateUrl('ridwan_opportunity_index', array('type' => 'S', 'message' => 'successfully added the opportunity')));
        }
        return $this->render('RidwanSiteBundle:Error:permission.html.twig');
    }

    public function organizationAction(Request $request, $userID){
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('ridwan_site_loginpage'));
        }
        $userRole = $user->getRoles()[0];
        if ($userRole == 'ADMINISTRATOR' || $userRole = 'NVS'){
            $em = $this->getDoctrine()->getManager();
            $organization = $em->getRepository('RidwanEntityBundle:Organization')->find($userID);
            $organization->setStatus(3);
            $em->persist($organization);
            $em->flush();
            return $this->redirect($this->generateUrl('ridwan_site_home', array('type' => 'S', 'message' => 'successfully approved the organization')));

        }
        return $this->render('RidwanSiteBundle:Error:permission.html.twig');
    }


    public function refereeAction(Request $request){
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('ridwan_site_loginpage'));
        }
        $userRole = $user->getRoles()[0];
        if ($userRole == 'ADMINISTRATOR' || $userRole = 'NVS'){

        }
        return $this->render('RidwanSiteBundle:Error:permission.html.twig');
    }
}
