<?php

namespace Ridwan\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ridwan\EntityBundle\Entity\Volunteerpersonal;
use Ridwan\EntityBundle\Form\VolunteerpersonalType;
use Ridwan\EntityBundle\Entity\Education;
use Ridwan\EntityBundle\Form\EducationType;
use Ridwan\EntityBundle\Entity\Volunteercontactdetails;
use Ridwan\EntityBundle\Form\VolunteercontactdetailsType;
use Ridwan\EntityBundle\Entity\Employment;
use Ridwan\EntityBundle\Form\EmploymentType;
use Ridwan\EntityBundle\Entity\Skills;
use Ridwan\EntityBundle\Form\SkillsType;
use Ridwan\EntityBundle\Entity\Organization;
use Ridwan\EntityBundle\Form\OrganizationType;
use Ridwan\EntityBundle\Entity\Organizationcontactdetails;
use Ridwan\EntityBundle\Form\OrganizationcontactdetailsType;


use Symfony\Component\HttpFoundation\Request;


class VolunteerController extends Controller
{

    public function welcomeAction(Request $request)
    {

        if ($this->check('RidwanEntityBundle:Volunteerpersonal') == null){
            return $this->PersonalAction(new Request());
        }

        if ($this->check('RidwanEntityBundle:Volunteercontactdetails') == null){
            return $this->ContactAction(new Request());
        }
        if ($this->check('RidwanEntityBundle:Education') == null){
            return $this->EducationAction(new Request());
        }
        if ($this->check('RidwanEntityBundle:Employment') == null){

        }
        if ($this->check('RidwanEntityBundle:Skills') == null){

        }
        if ($this->check('RidwanEntityBundle:Referees') == null){

        }
        return $this->render('RidwanUserBundle:Welcome:volunteer.html.twig');
    }

    private function check($repositoryname)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository($repositoryname);
        return $repository->findOneBy(array("user" => $this->getUser()->getId()));
    }



    public  function PersonalAction (Request $request){
        if ($this->check('RidwanEntityBundle:Volunteerpersonal') != null){
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }
        $volunteer = new Volunteerpersonal();
        $form = $this->createForm(new VolunteerpersonalType(), $volunteer, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_personal'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            ));
        $form->handleRequest($request);
        if ($form->isValid()) {
            $volunteer = $form->getData();
            $volunteer->setStatus(0);
            $volunteer->setUserId($this->getUser()->getId());
            $em = $this->getDoctrine()->getManager();

            try {
                $em->persist($volunteer);
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

    private function EducationAction(Request $request){
        $education = new Education();
        $form = $this->createForm(new EducationType(), $education, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_education'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            ));
        $form->handleRequest($request);
        if ($form->isValid()) {
            $education = $form->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                $em->persist($education);
                $em->flush();
            } catch (\Exception $e) {
                return $this->render('RidwanUserBundle:Welcome:education.html.twig', array(
                        'form' =>$form->createView(),
                        'type' => 'E',
                        'message' => 'opz! something is wrong!',
                        'details' => $e->getMessage()
                    ));
            }
            return $this->skillsAction($request);
        }

        return $this->render('RidwanUserBundle:Welcome:education.html.twig', array(
                'form' =>$form->createView()
            ));



    }

    public function contactAction(Request $request){

        if ($this->check('RidwanEntityBundle:Volunteercontactdetails') != null){
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }

        $contacts = new Volunteercontactdetails();

        $form = $this->createForm(new VolunteercontactdetailsType(), $contacts, array(
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

    private function skillsAction(Request $request){
        $skills = new Skills();
        $form = $this->createForm(new SkillsType(), $skills, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_skills'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            ));
        $form->handleRequest($request);
        if ($form->isValid()) {
            $skills = $form->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                $em->persist($skills);
                $em->flush();
            } catch (\Exception $e) {
                return $this->render('RidwanUserBundle:Welcome:volunteer.html.twig', array(
                        'form' =>$form->createView(),
                        'type' => 'E',
                        'message' => $e->getMessage(),
                        'details' => $e->getMessage()

                    ));

            }



        }

        return $this->render('RidwanUserBundle:Welcome:volunteer.html.twig', array(
                'form' =>$form->createView()
            ));



    }
}
