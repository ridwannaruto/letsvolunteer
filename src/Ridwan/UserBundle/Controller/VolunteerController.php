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
use Ridwan\EntityBundle\Entity\Referees;
use Ridwan\EntityBundle\Entity\RefereeAndUser;
use Ridwan\EntityBundle\Form\RefereesType;
use Ridwan\EntityBundle\Form\RefereeAndUserType;


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
        if ($this->check('RidwanEntityBundle:RefereeAndUser') == null) {
            return $this->RefereesAction(new Request());
        }

        return $this->render('RidwanUserBundle:Welcome:completed.html.twig');

    }

    private function check($repositoryname)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository($repositoryname);
        return $repository->findOneBy(array("user" => $this->getUser()->getId()));
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
            $volunteer->setUserId($this->getUser()->getId());
            $em = $this->getDoctrine()->getManager();

            try {
                $em->persist($volunteer);
                $em->flush();
            } catch (\Exception $e) {
                echo $e;
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
        $qualifications = $em->getRepository('RidwanEntityBundle:Education')->findAll();
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
            $qualifications = $em->getRepository('RidwanEntityBundle:Education')->findAll();

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
        $history = $em->getRepository('RidwanEntityBundle:Employment')->findAll();
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
            $history = $em->getRepository('RidwanEntityBundle:Employment')->findAll();

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
                $skills->setUser($this->getUser());
                $em->persist($skills);
                $em->flush();
            } catch (\Exception $e) {
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
        if ($this->check('RidwanEntityBundle:RefereesAndUser') != null) {
            return $this->redirect($this->generateUrl('ridwan_site_home'));
        }
        $user_referee = new RefereeAndUser();
        $referee = new Referees();
        $form = $this->createForm(
            new RefereeAndUserType(), $user_referee, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_referees'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            )
        );

        $form2 = $this->createForm(
            new RefereesType(), $referee, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_referee_add'),
                'method' => 'POST',
                'attr' => array(
                    'class' => 'ac-custom ac-checkbox ac-cross  ac-fill'
                )
            )
        );

        $form->handleRequest($request);
        if ($form->isValid()) {
            $user_referee = $form->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                $user_referee->setUser($this->getUser());
                $em->persist($user_referee);
                $em->flush();
            } catch (\Exception $e) {
                return $this->render(
                    'RidwanUserBundle:Welcome:referees.html.twig', array(
                        'form' => $form->createView(),
                        'type' => 'E',
                        'message' => $e->getMessage(),
                        'details' => $e->getMessage(),
                        'form2' => $form2->createView()

                    )
                );
            }

            return $this->render('RidwanuserBundle:Welcome:completed.html.twig');
        }

        return $this->render(
            'RidwanUserBundle:Welcome:referees.html.twig', array(
                'form' => $form->createView(),
                'form2' => $form2->createView()
            )
        );

    }

    public function AddRefereeAction(Request $request)
    {

        $referee = new Referees();
        $form = $this->createForm(
            new RefereesType(), $referee, array(
                'action' => $this->generateUrl('ridwan_user_volunteer_referee_add'),
                'method' => 'POST',
                'attr' => array(
                    'class' => 'ac-custom ac-checkbox ac-cross  ac-fill'
                )
            )
        );

        $form->handleRequest($request);
        if ($form->isValid()) {
            $referee = $form->getData();
            $em = $this->getDoctrine()->getManager();
            try {
                $em->persist($referee);
                $em->flush();
            } catch (\Exception $e) {

            }


        }

        return $this->RefereesAction(new Request());
    }

}
