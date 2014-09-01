<?php

namespace Ridwan\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ridwan\EntityBundle\Form\AccountType;
use Ridwan\EntityBundle\Entity\Account;

class AccountController extends Controller {

    public function indexAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('RidwanEntityBundle:User');
        $id = $session->get('user');
        $user = $repository->findOneBy(array('id' => $id));
        
        $NotificationRepository = $em->getRepository('RidwanEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	$Notifications = $NotificationsQuery->getResult();

        if ($user) {
            $account = new Account();
            $form = $this->createForm(new AccountType(), $account, array(
                'action' => $this->generateUrl('ridwan_account'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            ));
            $form->handleRequest($request);

            if ($form->isValid()) {
		$password = hash('md5',$account->getCurrentpassword());
                $account = $form->getData();
                if ($password == $user->getPassword()) {
                    if ($account->getNewpassword() == $account->getConfirmpassword()) {
                        $user->setPassword(hash('md5',$account->getNewpassword()));
                        try {
                            $em->persist($user);
                            $em->flush();
                        } catch (Exception $ex) {
                            return $this->render('RidwanUserBundle:Account:Settings.html.twig', array(
                                    'form' => $form->createView(),
                                    'type'  => 'E',
                                    'message'   => 'opz! Something went wrong!',
                                    'Notifications' => $Notifications
                        ));
                        }

                        return $this->render('RidwanUserBundle:Account:Settings.html.twig', array(
                                    'form' => $form->createView(),
                                    'type'  => 'S',
                                    'message'   => 'successfully changed your password',
                                    'Notifications' => $Notifications
                        ));
                    } else {
                        return $this->render('RidwanUserBundle:Account:Settings.html.twig', array(
                                    'form' => $form->createView(),
                                    'type'  => 'E',
                                    'message'   => 'new password did not match with its confirmation',
                                    'Notifications' => $Notifications
                        ));
                    }
                } else {
                    return $this->render('RidwanUserBundle:Account:Settings.html.twig', array(
                                    'form' => $form->createView(),
                                    'type'  => 'E',
                                    'message'   => 'please enter the correct password',
                                    'Notifications' => $Notifications
                        ));
                }
            }
            return $this->render('RidwanUserBundle:Account:Settings.html.twig', array(
                        'form' => $form->createView(),
                        'Notifications' => $Notifications
            ));
        }
        return $this->redirect($this->generateUrl('ridwan_site_login'));
    }

}
