<?php

namespace Ridwan\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RidwanProjectBundle:Default:message.html.twig', array('name' => $name));
    }
}
