<?php

namespace Ridwan\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ridwan\EntityBundle\Entity\Profile;
use Ridwan\EntityBundle\Entity\Photo;
use Ridwan\EntityBundle\Form\ProfileType;
use Symfony\Component\HttpFoundation\Session\Session;
use Ridwan\EntityBundle\Entity\Availability;
use Ridwan\EntityBundle\Form\AvailabilityType;
class ProfileController extends Controller {

    public function profileAction($ID, Request $request) {
        $authenticatedUser = $this->getUser();
        if ($authenticatedUser) {
	    $type = $authenticatedUser->getRoles()[0];
 	    if ($type == 'NVS' || $type == 'Administrator'){
            $em = $this->getDoctrine()->getManager();
            $profile = $this->getProfile($ID);
            if ($profile == null){
                return $this->render('RidwanSiteBundle:Error:error.html.twig', array('message'=>" user doesn't exists"));
            }

            if ($profile[0] == 'VOLUNTEER'){

		    return $this->render('RidwanSiteBundle:Profile:volunteer.html.twig', $profile[1]);
            }
            if ($profile[0] == 'ORGANIZATION'){

                return $this->render('RidwanSiteBundle:Profile:organization.html.twig', $profile[1]);
            }
	    }
            return $this->render('RidwanSiteBundle:Error:permission.html.twig');
        }
        return $this->redirect($this->generateUrl('ridwan_site_home'));
    }

    private function getProfile($ID) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('RidwanEntityBundle:Authentication');
        $profile = $repository->find($ID);
        if ($profile == null){
            return null;
        }
        $profileType = $profile->getRoles()[0];
        $profileInfo = null;
        switch ($profileType){
        case 'VOLUNTEER':
            $profileInfo = $this->getVolunteerInformation($profile);
            break;
        case 'ORGANIZATION':
            $profileInfo = $this->getOrganizationInformation($profile);
            break;

            default:
        }
        return array($profileType, $profileInfo);
    }



    private function getVolunteerInformation($authProfile){
        $em = $this->getDoctrine()->getManager();
        $personalDetails = $em->getRepository('RidwanEntityBundle:Volunteerpersonal')->findOneBy(array('user'=>$authProfile));
        $contactDetails = $em->getRepository('RidwanEntityBundle:Volunteercontactdetails')->findOneBy(array('user'=>$authProfile));
        $education = $em->getRepository('RidwanEntityBundle:Education')->findBy(array('user'=>$authProfile));
        $employment = $em->getRepository('RidwanEntityBundle:Employment')->findBy(array('user'=>$authProfile));
        $skills = $em->getRepository('RidwanEntityBundle:Skills')->findOneBy(array('user'=>$authProfile));
        $profile = $em->getRepository('RidwanEntityBundle:Profile')->findOneBy(array('user'=>$authProfile));
        $availability = $em->getRepository('RidwanEntityBundle:Availability')->findOneBy(array('user'=>$authProfile));

        $form = $this->createForm(
            new AvailabilityType(), $availability, array(
                'method' => 'POST',
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            )
        );
        return array ('authProfile'=>$authProfile,'personal' => $personalDetails, 'education' => $education, 'employment' => $employment, 'contact' => $contactDetails, 'skills'=> $skills, 'profile' => $profile,'availability'=>$form->createView());
    }

    private function getOrganizationInformation($authProfile){
        $em = $this->getDoctrine()->getManager();
        $generalDetails = $em->getRepository('RidwanEntityBundle:Organization')->findOneBy(array('user'=>$authProfile));
        $contactDetails = $em->getRepository('RidwanEntityBundle:Organizationcontactdetails')->findOneBy(array('user'=>$authProfile));

        return array ('authProfile'=>$authProfile,'details' => $generalDetails,'contact' => $contactDetails);
    }


}