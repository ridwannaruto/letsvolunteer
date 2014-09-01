<?php

namespace Ridwan\OpportunityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RidwanOpportunityBundle:Default:message.html.twig', array('name' => $name));
    }
}
