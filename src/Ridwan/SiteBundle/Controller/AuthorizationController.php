<?php

namespace Ridwan\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ridwan\EntityBundle\Entity\Authentication;



class AuthorizationController extends Controller {

    private function authenticateAction(Request $request) {
        return FALSE;
        $accessToken = $this->getRequest()->getSession()->get('authToken');
        if ($accessToken) {
            $this->authenticateSessionAction($accessToken);
        };

        $requestUser = $request->get('userID');
        $verification = $request->get('password');
        $this->authenticateUserAction($requestUser, $verification);
    }

    private function authenticateSessionAction($accessToken) {
        $em = $this->getDoctrine()->getManager('privileged');
        $repository = $em->getRepository('RidwanEntityBundle:Authentication');
        $access = $repository->findOneBy(array('token' => $accessToken));
        if ($access) {
            return $access;
        } else {
            return false;
        }
    }

    private function authenticateUserAction($requestUser, $verification) {
        $em = $this->getDoctrine()->getManager('privileged');
        $repository = $em->getRepository('RidwanEntityBundle:Authentication');
        $access = $repository->findOneBy(array('$requestingUser' => substr($requestUser, 3), 'type' => substr($requestUser, 0, 3)));
        $verification = $verification . $access->getSalt();
        $success = assert($access->getVerification() == hash('sha256', $verification));
        if ($success) {
            return $access;
        }
        return false;
    }

    private function createSession($user) {
        $session = $this->getRequest()->getSession();
        $session->start();
        $session->set('name', $name);
        $session->set('fullname', $user->getFirstname() . " " . $user->getLastname());
        $session->set('user', $id);
        $session->set('access', $access);
        $session->set('pillar', $user->getPillar());
        $path = '/web/bundles/User/Photo/default.jpg';
        if ($user->getPath() != null) {
            $path = $user->getPath();
        }
        $session->set('photo', $path);
    }

    private function deleteSession($user) {
        $session = $this->getRequest()->getSession();
        $session->start();
        $session->set('name', $name);
        $session->set('fullname', $user->getFirstname() . " " . $user->getLastname());
        $session->set('user', $id);
        $session->set('access', $access);
        $session->set('pillar', $user->getPillar());
        $path = '/web/bundles/User/Photo/default.jpg';
        if ($user->getPath() != null) {
            $path = $user->getPath();
        }
        $session->set('photo', $path);
    }

    private function enterLog($user) {
        $session = $this->getRequest()->getSession();
        $session->start();
        $session->set('name', $name);
        $session->set('fullname', $user->getFirstname() . " " . $user->getLastname());
        $session->set('user', $id);
        $session->set('access', $access);
        $session->set('pillar', $user->getPillar());
        $path = '/web/bundles/User/Photo/default.jpg';
        if ($user->getPath() != null) {
            $path = $user->getPath();
        }
        $session->set('photo', $path);
    }

    public function loginAction(Request $request) {
        $access = $this->authenticateAction($request);
        if ($access) {
            if ($access->getStatus() == 1 || $access->getStatus() == 0 ) {
                return $this->render('MoraspiritSiteBundle:Authentication:login.html.twig', array('type' => 'E','message' => 'Account Not Activated','status' => '$access->getStatus()'));
            }
            return $this->redirect('home');
        }else if ($request->getMethod() == 'POST') {
            return $this->render('RidwanSiteBundle:Authentication:login.html.twig', array('type' => 'E', 'message' => 'Invalid Login'));
        }
        return $this->render('RidwanSiteBundle:Authentication:login.html.twig');
    }

    public function logoutAction() {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('MoraspiritSiteBundle:Authentication:login.html.twig');
    }

    public function activateAction($userID) {

        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            if ($access == 'Head' || $access == 'Admin') {
                //echo ($userID);
                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository('MoraspiritEntityBundle:User')->find($userID);

                $user->setStatus(2);

                try {
                    $em->persist($user);
                    $em->flush();
                } catch (\Exception $e) {
                    return $this->render('MoraspiritStyleBundle:Error:error.html.twig', array(
                                'message' => ' either this account is already activated or this account does not exists'
                    ));
                }

                return $this->render('MoraspiritStyleBundle:Success:success.html.twig', array(
                            'message' => ' successfully activated the account'
                ));
            } else {
                return $this->render('MoraspiritStyleBundle:Error:permission.html.twig');
            }
        }
        return $this->redirect($this->generateUrl('moraspirit_site_login'));
    }

    public function deleteConfirmationAction($verification, $email) {


        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('MoraspiritEntityBundle:User')->findOneBy(array('email' => $email));
        $confirmations = $em->getRepository('MoraspiritEntityBundle:Confirmation');
        $confirmation = $confirmations->findOneBy(array('email' => $email));
        if ($confirmation != null) {
            if ($confirmation->getVerification() == $verification) {
                $em->remove($user);
                $em->remove($confirmation);
                $em->flush();

                return $this->render('MoraspiritStyleBundle:Success:success.html.twig', array(
                            'message' => 'account was deleted'
                ));
            } else {
                return $this->render('MoraspiritStyleBundle:Error:permission.html.twig');
            }
        } else {
            return $this->render('MoraspiritStyleBundle:Error:error.html.twig', array(
                        'message' => 'Expired Token'
            ));
        }
    }

    public function rejectAction($userID) {


        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('MoraspiritEntityBundle:User')->find($userID);
        $em->remove($user);
        $em->flush();
        return $this->render('MoraspiritStyleBundle:Success:success.html.twig', array(
                    'message' => ' successfully rejected the account'
        ));
    }

    public function verifyAction($verification, $email) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('MoraspiritEntityBundle:User')->findOneBy(array('email' => $email));
        if ($user != null) {
            $user->setStatus(1);
            $confirmations = $em->getRepository('MoraspiritEntityBundle:Confirmation');
            $confirmation = $confirmations->findOneBy(array('email' => $email));
            if ($confirmation != null) {
                if ($confirmation->getVerification() == $verification) {
                    $em->remove($confirmation);
                    $em->flush();

                    return $this->render('MoraspiritStyleBundle:Success:success.html.twig', array(
                                'message' => 'Email confirmation is done. Please contact Pillar Head to activate your Account'
                    ));
                } else {
                    return $this->render('MoraspiritStyleBundle:Error:permission.html.twig');
                }
            } else {
                return $this->render('MoraspiritStyleBundle:Error:error.html.twig', array(
                            'message' => 'Your account is being processed'
                ));
            }
        } else {
            return $this->render('MoraspiritStyleBundle:Error:error.html.twig', array(
                        'message' => 'User not FOUND'
            ));
        }
    }

}
