<?php

namespace Ridwan\SiteBundle\Controller;

use Ridwan\SiteBundlle\Controller\AuthenticationController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ridwan\EntityBundle\Entity\Organization;

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
            if ($status == 1) {
                return $this->render('RidwanSiteBundle:Home:volunteer.html.twig');
            }
        }
        return $this->render('RidwanUserBundle:Welcome:volunteer.html.twig');
    }

    private function getVolunteer()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('RidwanEntityBundle:Volunteerpersonal');
        return $repository->findOneBy(array("user" => $this->getUser()->getId()));
    }



    private function organizationHome()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('RidwanEntityBundle:Organization');
        $organization = $repository->findOneBy(array("id" => $user->getUserId()));
        if ($organization) {
            $status = $organization->getStatus();
            switch ($status) {
            case 0:
            case 1:
            case 2:
            default:

            }
            return $this->render('RidwanSiteBundle:Home:organization.html.twig');
        }

        return $this->forward('RidwanSiteBundle:Welcome:organization');
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
