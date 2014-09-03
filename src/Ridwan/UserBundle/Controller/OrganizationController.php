<?php

namespace Ridwan\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ridwan\EntityBundle\Entity\Organization;
use Ridwan\EntityBundle\Entity\Organizationcontactdetails;
use Ridwan\EntityBundle\Form\OrganizationType;
use Ridwan\EntityBundle\Form\OrganizationcontactdetailsType;
use Symfony\Component\HttpFoundation\Request;

class OrganizationController extends Controller
{
    public function welcomeAction(Request $request){

        if ($this->check('RidwanEntityBundle:Organization') == null){
            return $this->DetailsAction(new Request());
        }

        if ($this->check('RidwanEntityBundle:Organizationcontactdetails') == null){
            return $this->ContactAction(new Request());
        }

        return $this->render('RidwanUserBundle:Welcome:completed.html.twig');

    }

    private function check($repositoryname)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository($repositoryname);
        return $repository->findOneBy(array("user" => $this->getUser()->getId()));
    }



    public  function DetailsAction (Request $request){
        if ($this->check('RidwanEntityBundle:Organization') != null){
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }
        $organization = new Organization();
        $form = $this->createForm(new OrganizationType(), $organization, array(
                'action' => $this->generateUrl('ridwan_organization_details'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            ));
        $form->handleRequest($request);
        if ($form->isValid()) {
            $organization = $form->getData();
            $organization->setStatus(0);
            $organization->setUserId($this->getUser()->getId());
            $em = $this->getDoctrine()->getManager();
            try {
                $em->persist($organization);
                $em->flush();
            } catch (\Exception $e) {
                echo $e;
                return $this->render('RidwanUserBundle:Welcome:personal.html.twig', array(
                        'form' =>$form->createView(),
                        'type' => 'E',
                        'message' => 'opz! something is wrong!',
                        'details' => $e->getMessage()

                    ));
            }
            return $this->contactAction(new Request());
        }
        return $this->render('RidwanUserBundle:Welcome:personal.html.twig', array(
                'form' =>$form->createView()
            ));
    }

    public function contactAction(Request $request){

        if ($this->check('RidwanEntityBundle:Organizationcontactdetails') != null){
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }
        $contacts = new Organizationcontactdetails();

        $form = $this->createForm(new OrganizationcontactdetailsType(), $contacts, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_contacts'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            ));

        $form->handleRequest($request);

        if ($form->isValid()) {
            $contacts = $form->getData();
            $contacts->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            try {
                $em->persist($contacts);
                $em->flush();
            } catch (\Exception $e) {
                return $this->render('RidwanUserBundle:Welcome:contact.html.twig', array(
                        'form' =>$form->createView(),
                        'type' => 'E',
                        'message' => 'opz! something is wrong!',
                        'details' => $e->getMessage()

                    ));

            }

            return $this->educationAction($request);

        }


        return $this->render('RidwanUserBundle:Welcome:contact.html.twig', array(
                "form" => $form->createView()
            ));



    }

}
