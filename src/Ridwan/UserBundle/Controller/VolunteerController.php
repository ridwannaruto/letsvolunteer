<?php

namespace Ridwan\UserBundle\Controller;


use Ridwan\EntityBundle\Entity\RefereeAndUser;
use Ridwan\EntityBundle\Form\RefereeAndUserType;
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
use Ridwan\EntityBundle\Entity\Referees;
use Ridwan\EntityBundle\Form\RefereesType;
use Ridwan\EntityBundle\Entity\Profile;
use Ridwan\EntityBundle\Entity\Availability;
use Symfony\Component\HttpFoundation\Request;


class VolunteerController extends Controller
{

    public function welcomeAction(Request $request)
    {

        if ($this->check('RidwanEntityBundle:Volunteerpersonal') == null) {
            return $this->PersonalAction(new Request());
        }

        if ($this->check('RidwanEntityBundle:Volunteercontactdetails') == null) {
            return $this->ContactAction(new Request());
        }
        if ($this->check('RidwanEntityBundle:Education') == null) {
            return $this->EducationAction(new Request());
        }
        if ($this->check('RidwanEntityBundle:Employment') == null) {
            return $this->EmploymentAction(new Request());
        }
        if ($this->check('RidwanEntityBundle:Skills') == null) {
            return $this->SkillsAction(new Request());
        }
        if ($this->check('RidwanEntityBundle:RefereeAndUser') == null) {
            return $this->RefereesAction(new Request());
        }


        return $this->render('RidwanUserBundle:Welcome:completed.html.twig');

    }

    private function check($repositoryname)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository($repositoryname);
        return $repository->findOneBy(array("user" => $this->getUser()));
    }


    public function PersonalAction(Request $request)
    {
        if ($this->check('RidwanEntityBundle:Volunteerpersonal') != null) {
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }
        $volunteer = new Volunteerpersonal();
        $form = $this->createForm(
            new VolunteerpersonalType(), $volunteer, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_personal'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            )
        );
        $form->handleRequest($request);
        if ($form->isValid()) {
            $volunteer = $form->getData();
            $volunteer->setStatus(0);
            $volunteer->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();

            try {
                $em->persist($volunteer);
                $em->flush();
            } catch (\Exception $e) {
               // echo $e;
                return $this->render(
                    'RidwanUserBundle:Welcome:personal.html.twig', array(
                        'form' => $form->createView(),
                        'type' => 'E',
                        'message' => 'opz! something is wrong!',
                        'details' => $e->getMessage()
                    )
                );

            }

            return $this->contactAction(new Request());

        }

        return $this->render(
            'RidwanUserBundle:Welcome:personal.html.twig', array(
                'form' => $form->createView()
            )
        );


    }

    public function EducationAction(Request $request)
    {
        if ($this->check('RidwanEntityBundle:Education') != null) {
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }

        $em = $this->getDoctrine()->getManager();
        $qualifications = $em->getRepository('RidwanEntityBundle:Education')->findBy(array('user'=>$this->getUser()->getId()));
        $education = new Education();
        $form = $this->createForm(
            new EducationType(), $education, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_education'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            )
        );

        $form->handleRequest($request);
        if ($form->isValid()) {
            $education = $form->getData();
            $education->setUser($this->getUser());
            try {
                $em->persist($education);
                $em->flush();
            } catch (\Exception $e) {
                return $this->render(
                    'RidwanUserBundle:Welcome:education.html.twig', array(
                        'form' => $form->createView(),
                        'type' => 'E',
                        'message' => 'opz! something is wrong!',
                        'details' => $e->getMessage(),
                        'qualifications' => $qualifications
                    )
                );
            }
            $qualifications = $em->getRepository('RidwanEntityBundle:Education')->findBy(array('user'=>$this->getUser()->getId()));

            return $this->render(
                'RidwanUserBundle:Welcome:education.html.twig', array(
                    'form' => $form->createView(),
                    'qualifications' => $qualifications
                )
            );

        }

        return $this->render(
            'RidwanUserBundle:Welcome:education.html.twig', array(
                'form' => $form->createView(),
                'qualifications' => $qualifications
            )
        );


    }

    public function EmploymentAction(Request $request)
    {
        if ($this->check('RidwanEntityBundle:Employment') != null) {
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }

        $em = $this->getDoctrine()->getManager();
        $history = $em->getRepository('RidwanEntityBundle:Employment')->findBy(array('user'=>$this->getUser()->getId()));
        $employment = new Employment();
        $form = $this->createForm(
            new EmploymentType(), $employment, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_employment'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            )
        );

        $form->handleRequest($request);
        if ($form->isValid()) {
            $employment = $form->getData();
            $employment->setUser($this->getUser());
            try {
                $em->persist($employment);
                $em->flush();
            } catch (\Exception $e) {
                return $this->render(
                    'RidwanUserBundle:Welcome:employment.html.twig', array(
                        'form' => $form->createView(),
                        'type' => 'E',
                        'message' => 'opz! something is wrong!',
                        'details' => $e->getMessage(),
                        'history' => $history
                    )
                );
            }
            $history = $em->getRepository('RidwanEntityBundle:Employment')->findBy(array('user'=>$this->getUser()->getId()));

            return $this->render(
                'RidwanUserBundle:Welcome:employment.html.twig', array(
                    'form' => $form->createView(),
                    'history' => $history
                )
            );

        }

        return $this->render(
            'RidwanUserBundle:Welcome:employment.html.twig', array(
                'form' => $form->createView(),
                'history' => $history
            )
        );


    }

    public function contactAction(Request $request)
    {

        if ($this->check('RidwanEntityBundle:Volunteercontactdetails') != null) {
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }

        $contacts = new Volunteercontactdetails();

        $form = $this->createForm(
            new VolunteercontactdetailsType(), $contacts, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_contacts'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            )
        );

        $form->handleRequest($request);

        if ($form->isValid()) {
            $contacts = $form->getData();
            $contacts->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            try {
                $em->persist($contacts);
                $em->flush();
            } catch (\Exception $e) {
                return $this->render(
                    'RidwanUserBundle:Welcome:contact.html.twig', array(
                        'form' => $form->createView(),
                        'type' => 'E',
                        'message' => 'opz! something is wrong!',
                        'details' => $e->getMessage()

                    )
                );

            }

            return $this->educationAction($request);

        }


        return $this->render(
            'RidwanUserBundle:Welcome:contact.html.twig', array(
                "form" => $form->createView()
            )
        );


    }

    public function SkillsAction(Request $request)
    {
        if ($this->check('RidwanEntityBundle:Skills') != null) {
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }
        $skills = new Skills();
        $form = $this->createForm(
            new SkillsType(), $skills, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_skills'),
                'attr' => array(
                    'class' => 'ac-custom ac-checkbox ac-cross  ac-fill'
                )
            )
        );
        $form->handleRequest($request);
        if ($form->isValid()) {
            $skills = $form->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                $strprimary = $skills->getPrimary()->getSelection();
                //echo $strprimary;
                $skills->setPrimary($strprimary);
                $strsecondary = $skills->getSecondary()->getSelection();
                //echo $strsecondary;
                $skills->setSecondary($strsecondary);
                $skills->setUser($this->getUser());
                $em->persist($skills);
                $em->flush();
            } catch (\Exception $e) {
                //echo $e->getMessage();
                return $this->render(
                    'RidwanUserBundle:Welcome:skills.html.twig', array(
                        'form' => $form->createView(),
                        'type' => 'E',
                        'message' => $e->getMessage(),
                        'details' => $e->getMessage()

                    )
                );
            }

            return $this->RefereesAction($request);
        }

        return $this->render(
            'RidwanUserBundle:Welcome:skills.html.twig', array(
                'form' => $form->createView()
            )
        );
    }

    public function RefereesAction(Request $request)
    {
        if ($this->check('RidwanEntityBundle:Referees') != null) {
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }

        $em = $this->getDoctrine()->getManager();
        $database = $em->getRepository('RidwanEntityBundle:Referees')->findBy(array('user'=>$this->getUser()->getId()));

        $referee1 = new Referees();
        $referee2 = new Referees();

        $entity = new RefereeAndUser();
        $entity->getReferees()->add($referee1);
        $entity->getReferees()->add($referee2);

        $form = $this->createForm(
            new RefereeAndUserType(), $entity, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_referees'),
                'method' => 'POST',
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            )
        );


        $form->handleRequest($request);
        if ($form->isValid()) {
            $entity = $form->getData();
            $entity->setUser($this->getUser());
            $referee1 = $entity->getReferees()[0];
            $referee2 = $entity->getReferees()[1];
            $referee1->setUser($this->getUser()->getId());
            $referee2->setUser($this->getUser()->getId());
            $volunteer = $em->getRepository('RidwanEntityBundle:Volunteerpersonal')->findOneBy(array('user'=>$this->getUser()->getId()));
            $volunteer->setStatus(1);
            $em->persist($volunteer);


            $profile = new Profile();
            $profile->setUser($this->getUser());

            $availability = new Availability();
            $availability->setUser($this->getUser());
           // $em->persist($availability);
            $em->persist($referee1);
            $em->persist($referee2);
           // $em->persist($profile);
            $em->flush();


            return $this->render('RidwanUserBundle:Welcome:completed.html.twig');
        }

        return $this->render(
            'RidwanUserBundle:Welcome:referees.html.twig', array(
                'database' => $database,
                'form' => $form->createView()
            )
        );

    }



}
