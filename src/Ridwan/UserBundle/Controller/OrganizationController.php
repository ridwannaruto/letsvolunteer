<?php

namespace Ridwan\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OrganizationController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RidwanUserBundle:Default:message.html.twig', array('name' => $name));
    }
}
