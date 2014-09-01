<?php

namespace Ridwan\NotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RidwanNotificationBundle:Default:message.html.twig', array('name' => $name));
    }
}
