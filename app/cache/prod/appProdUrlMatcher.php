<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // ridwan_profile
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<userID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_profile')), array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\ProfileController::indexAction',));
        }

        // ridwan_account
        if ($pathinfo === '/account') {
            return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\AccountController::indexAction',  '_route' => 'ridwan_account',);
        }

        // ridwan_profile_edit
        if ($pathinfo === '/editprofile') {
            return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'ridwan_profile_edit',);
        }

        // ridwan_profile_picture
        if ($pathinfo === '/profilepicture') {
            return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\ProfileController::pictureAction',  '_route' => 'ridwan_profile_picture',);
        }

        if (0 === strpos($pathinfo, '/task')) {
            // ridwan_task_index
            if ($pathinfo === '/tasks') {
                return array (  '_controller' => 'RidwanTaskBundle:Task:index',  '_route' => 'ridwan_task_index',);
            }

            if (0 === strpos($pathinfo, '/taskdetails')) {
                // ridwan_task_details
                if (preg_match('#^/taskdetails/(?P<taskID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_task_details')), array (  '_controller' => 'RidwanTaskBundle:Task:detail',));
                }

                // ridwan_task_details_notification
                if (preg_match('#^/taskdetails/(?P<taskID>[^/]++)/(?P<notificationID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_task_details_notification')), array (  '_controller' => 'RidwanTaskBundle:Task:notification',));
                }

            }

        }

        // ridwan_task_new
        if ($pathinfo === '/newTask') {
            return array (  '_controller' => 'RidwanTaskBundle:Task:newTask',  '_route' => 'ridwan_task_new',);
        }

        // ridwan_task_edit
        if (0 === strpos($pathinfo, '/editTask') && preg_match('#^/editTask/(?P<taskID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_task_edit')), array (  '_controller' => 'RidwanTaskBundle:Task:editTask',));
        }

        // ridwan_task_delete
        if (0 === strpos($pathinfo, '/deleteTask') && preg_match('#^/deleteTask/(?P<taskID>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ridwan_task_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_task_delete')), array (  '_controller' => 'RidwanTaskBundle:Task:deleteTask',));
        }
        not_ridwan_task_delete:

        // ridwan_task_completePage
        if (0 === strpos($pathinfo, '/feedbackTask') && preg_match('#^/feedbackTask/(?P<taskID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_task_completePage')), array (  '_controller' => 'RidwanTaskBundle:Task:completePage',));
        }

        // ridwan_task_complete
        if (0 === strpos($pathinfo, '/completeTask') && preg_match('#^/completeTask/(?P<taskID>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ridwan_task_complete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_task_complete')), array (  '_controller' => 'RidwanTaskBundle:Task:completeTask',));
        }
        not_ridwan_task_complete:

        if (0 === strpos($pathinfo, '/project')) {
            // ridwan_project_index
            if ($pathinfo === '/projects') {
                return array (  '_controller' => 'Ridwan\\ProjectBundle\\Controller\\ProjectController::indexAction',  '_route' => 'ridwan_project_index',);
            }

            // ridwan_project_details
            if (0 === strpos($pathinfo, '/projectdetails') && preg_match('#^/projectdetails/(?P<projectID>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_project_details')), array (  '_controller' => 'Ridwan\\ProjectBundle\\Controller\\ProjectController::detailsAction',));
            }

        }

        // ridwan_project_new
        if ($pathinfo === '/newProject') {
            return array (  '_controller' => 'Ridwan\\ProjectBundle\\Controller\\ProjectController::newProjectAction',  '_route' => 'ridwan_project_new',);
        }

        // ridwan_project_edit
        if (0 === strpos($pathinfo, '/editProject') && preg_match('#^/editProject/(?P<projectID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_project_edit')), array (  '_controller' => 'Ridwan\\ProjectBundle\\Controller\\ProjectController::editProjectAction',));
        }

        // ridwan_project_delete
        if (0 === strpos($pathinfo, '/deleteProject') && preg_match('#^/deleteProject/(?P<projectID>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ridwan_project_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_project_delete')), array (  '_controller' => 'Ridwan\\ProjectBundle\\Controller\\ProjectController::deleteProjectAction',));
        }
        not_ridwan_project_delete:

        // ridwan_project_complete
        if (0 === strpos($pathinfo, '/completeProject') && preg_match('#^/completeProject/(?P<projectID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_project_complete')), array (  '_controller' => 'Ridwan\\ProjectBundle\\Controller\\ProjectController::completeAction',));
        }

        // ridwan_project_details_notification
        if (0 === strpos($pathinfo, '/projectdetails') && preg_match('#^/projectdetails/(?P<projectID>[^/]++)/(?P<notificationID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_project_details_notification')), array (  '_controller' => 'Ridwan\\ProjectBundle\\Controller\\ProjectController::notificationAction',));
        }

        // ridwan_checkRegisterEmail
        if ($pathinfo === '/check') {
            return array (  '_controller' => 'Ridwan\\NotificationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ridwan_checkRegisterEmail',);
        }

        // ridwan_notification_see
        if (0 === strpos($pathinfo, '/home') && preg_match('#^/home/(?P<notificationID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_notification_see')), array (  '_controller' => 'Ridwan\\NotificationBundle\\Controller\\NotificationController::seenAction',));
        }

        // ridwan_allnotification
        if ($pathinfo === '/allnotifications') {
            return array (  '_controller' => 'Ridwan\\NotificationBundle\\Controller\\NotificationController::showAllAction',  '_route' => 'ridwan_allnotification',);
        }

        // ridwan_auth_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\HomeController::homeAction',  '_route' => 'ridwan_auth_homepage',);
        }

        // ridwan_site_loginpage
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\SigningController::loginAction',  '_route' => 'ridwan_site_loginpage',);
        }

        // ridwan_auth_login
        if ($pathinfo === '/Authlogin') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ridwan_auth_login;
            }

            return array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\SigningController::checkAction',  '_route' => 'ridwan_auth_login',);
        }
        not_ridwan_auth_login:

        // ridwan_auth_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\AuthenticationController::logoutAction',  '_route' => 'ridwan_auth_logout',);
        }

        // ridwan_auth_registerpage
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\SigningController::registerAction',  '_route' => 'ridwan_auth_registerpage',);
        }

        // ridwan_auth_Emailverification
        if (0 === strpos($pathinfo, '/activate') && preg_match('#^/activate/(?P<verification>[^/]++)/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_auth_Emailverification')), array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\AuthenticationController::verifyAction',));
        }

        // ridwan_auth_deleteConfirmation
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<verification>[^/]++)/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_auth_deleteConfirmation')), array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\AuthenticationController::deleteConfirmationAction',));
        }

        // ridwan_auth_Activate
        if (0 === strpos($pathinfo, '/activate') && preg_match('#^/activate/(?P<userID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_auth_Activate')), array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\AuthenticationController::activateAction',));
        }

        // ridwan_auth_Reject
        if (0 === strpos($pathinfo, '/reject') && preg_match('#^/reject/(?P<userID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_auth_Reject')), array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\AuthenticationController::rejectAction',));
        }

        if (0 === strpos($pathinfo, '/check')) {
            // ridwan_auth_checkUserName
            if (0 === strpos($pathinfo, '/checkUserName') && preg_match('#^/checkUserName/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_auth_checkUserName')), array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\AuthenticationController::checkUserNameAction',));
            }

            // ridwan_auth_checkEmail
            if (0 === strpos($pathinfo, '/checkEmail') && preg_match('#^/checkEmail/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_auth_checkEmail')), array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\AuthenticationController::checkEmailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
