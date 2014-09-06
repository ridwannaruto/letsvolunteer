<?php

namespace Ridwan\SiteBundle\Controller;

use Ridwan\SiteBundlle\Controller\AuthenticationController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ridwan\EntityBundle\Entity\Organization;
use Ridwan\EntityBundle\Entity\Availability;
use Ridwan\EntityBundle\Form\AvailabilityType;
class HomeController extends Controller
{
    public function homeAction()
    {
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('ridwan_site_loginpage'));
        }
        $userRole = $user->getRoles()[0];
        switch ($userRole) {
        case 'VOLUNTEER':
            return $this->volunteerHome();
        case 'ORGANIZATION':
            return $this->organizationHome();
        case 'NVS':
            return $this->NVSHome();
        case 'ADMIN':
            return $this->adminHome();
        default:
            return $this->errorHome();
        }

    }

    private function volunteerHome()
    {
        $volunteer = $this->getVolunteer();
        if ($volunteer) {
            $status = $volunteer->getStatus();
            if ($status == 1) { //Email Verified
                return $this->render('RidwanUserBundle:Welcome:volunteer.html.twig');
            }

            if ($status == 2) { //Profile Completed
                return $this->render('RidwanUserBundle:Welcome:completed.html.twig');
            }

            return $this->render('RidwanSiteBundle:Home:volunteer.html.twig', $this->generateVolunteerHome());

        }
        return $this->render('RidwanUserBundle:Welcome:volunteer.html.twig');

    }

    private function generateVolunteerHome(){

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $personalDetails = $em->getRepository('RidwanEntityBundle:Volunteerpersonal')->findOneBy(array('user'=>$user));
        $contactDetails = $em->getRepository('RidwanEntityBundle:Volunteercontactdetails')->findOneBy(array('user'=>$user));
        $eudcation = $em->getRepository('RidwanEntityBundle:Education')->findBy(array('user'=>$user));
        $employment = $em->getRepository('RidwanEntityBundle:Employment')->findBy(array('user'=>$user));
        $skills = $em->getRepository('RidwanEntityBundle:Skills')->findOneBy(array('user'=>$user));
        $availability = $em->getRepository('RidwanEntityBundle:Availability')->findOneBy(array('user'=>$user));
        $form = $this->createForm(
            new AvailabilityType(), $availability, array(
                'method' => 'POST',
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            )
        );
        return array ('personal' => $personalDetails, 'education' => $eudcation, 'employment' => $employment, 'contact' => $contactDetails, 'skills'=> $skills, 'availability'=>$form->createView());
    }

    private function getVolunteer()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('RidwanEntityBundle:Volunteerpersonal');
        return $repository->findOneBy(array("user" => $this->getUser()->getId()));
    }

    private function getOrganization()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('RidwanEntityBundle:Organization');
        return $repository->findOneBy(array("user" => $this->getUser()->getId()));
    }

    private function organizationHome()
    {
        $organization = $this->getOrganization();
        if ($organization) {
            $status = $organization->getStatus();
            if ($status == 1) { //Email Verified
                return $this->render('RidwanUserBundle:Welcome:organization.html.twig');
            }

            if ($status == 2) { //Profile Completed
                return $this->render('RidwanUserBundle:Welcome:completed.html.twig');
            }

            return $this->render('RidwanSiteBundle:Home:organization.html.twig');
        }


    }

    private function NVSHome()
    {
        return $this->render('RidwanSiteBundle:Home:NVS.html.twig');
    }

    private function adminHome()
    {
        return $this->render('RidwanSiteBundle:Home:admin.html.twig');
    }


}
