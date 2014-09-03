<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

        // ridwan_user_volunteer_welcome
        if ($pathinfo === '/volunteer/welcome') {
            return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\VolunteerController::welcomeAction',  '_route' => 'ridwan_user_volunteer_welcome',);
        }

        if (0 === strpos($pathinfo, '/welcome')) {
            if (0 === strpos($pathinfo, '/welcome/e')) {
                // ridwan_user_volunteer_education
                if ($pathinfo === '/welcome/education') {
                    return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\VolunteerController::educationAction',  '_route' => 'ridwan_user_volunteer_education',);
                }

                // ridwan_user_volunteer_employment
                if ($pathinfo === '/welcome/employment') {
                    return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\VolunteerController::employmentAction',  '_route' => 'ridwan_user_volunteer_employment',);
                }

            }

            // ridwan_user_volunteer_personal
            if ($pathinfo === '/welcome/personal') {
                return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\VolunteerController::personalAction',  '_route' => 'ridwan_user_volunteer_personal',);
            }

            // ridwan_user_volunteer_skills
            if ($pathinfo === '/welcome/skills') {
                return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\VolunteerController::skillsAction',  '_route' => 'ridwan_user_volunteer_skills',);
            }

            // ridwan_user_volunteer_contacts
            if ($pathinfo === '/welcome/contacts') {
                return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\VolunteerController::contactAction',  '_route' => 'ridwan_user_volunteer_contacts',);
            }

            if (0 === strpos($pathinfo, '/welcome/referee')) {
                // ridwan_user_volunteer_referees
                if ($pathinfo === '/welcome/referees') {
                    return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\VolunteerController::refereesAction',  '_route' => 'ridwan_user_volunteer_referees',);
                }

                // ridwan_user_volunteer_referee_add
                if ($pathinfo === '/welcome/referee/add') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ridwan_user_volunteer_referee_add;
                    }

                    return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\VolunteerController::AddrefereeAction',  '_route' => 'ridwan_user_volunteer_referee_add',);
                }
                not_ridwan_user_volunteer_referee_add:

            }

        }

        if (0 === strpos($pathinfo, '/organization')) {
            // ridwan_organization_welcome
            if ($pathinfo === '/organization/welcome') {
                return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\OrganizationController::welcomeAction',  '_route' => 'ridwan_organization_welcome',);
            }

            // ridwan_organization_details
            if ($pathinfo === '/organization/details') {
                return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\OrganizationController::detailsAction',  '_route' => 'ridwan_organization_details',);
            }

            // ridwan_organization_contact
            if ($pathinfo === '/organization/contact') {
                return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\OrganizationController::contactAction',  '_route' => 'ridwan_organization_contact',);
            }

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

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/education')) {
                // ridwan_education_index
                if ($pathinfo === '/education') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EducationController::indexAction',  '_route' => 'ridwan_education_index',);
                }

                // ridwan_education_new
                if ($pathinfo === '/education/new') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EducationController::newAction',  '_route' => 'ridwan_education_new',);
                }

                // ridwan_education_create
                if ($pathinfo === '/education/create') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EducationController::createAction',  '_route' => 'ridwan_education_create',);
                }

                // ridwan_education_show
                if ($pathinfo === '/education/show') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EducationController::showAction',  '_route' => 'ridwan_education_show',);
                }

                // ridwan_education_edit
                if ($pathinfo === '/education/edit') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EducationController::editAction',  '_route' => 'ridwan_education_edit',);
                }

                // ridwan_education_delete
                if ($pathinfo === '/education/delete') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EducationController::deleteAction',  '_route' => 'ridwan_education_delete',);
                }

            }

            if (0 === strpos($pathinfo, '/employment')) {
                // ridwan_employment_index
                if ($pathinfo === '/employment') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EmploymentController::indexAction',  '_route' => 'ridwan_employment_index',);
                }

                // ridwan_employment_new
                if ($pathinfo === '/employment/new') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EmploymentController::newAction',  '_route' => 'ridwan_employment_new',);
                }

                // ridwan_employment_create
                if ($pathinfo === '/employment/create') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EmploymentController::createAction',  '_route' => 'ridwan_employment_create',);
                }

                // ridwan_employment_show
                if ($pathinfo === '/employment/show') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EmploymentController::showAction',  '_route' => 'ridwan_employment_show',);
                }

                // ridwan_employment_edit
                if ($pathinfo === '/employment/edit') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EmploymentController::editAction',  '_route' => 'ridwan_employment_edit',);
                }

                // ridwan_employment_delete
                if ($pathinfo === '/employment/delete') {
                    return array (  '_controller' => 'Ridwan\\EntityBundle\\Controller\\EmploymentController::deleteAction',  '_route' => 'ridwan_employment_delete',);
                }

            }

        }

        // ridwan_site_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\HomeController::homeAction',  '_route' => 'ridwan_site_home',);
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

        // ridwan_auth_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Ridwan\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'ridwan_auth_register',);
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
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ridwan_auth_checkUserName;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_auth_checkUserName')), array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\AuthenticationController::checkUserNameAction',));
            }
            not_ridwan_auth_checkUserName:

            // ridwan_auth_checkEmail
            if (0 === strpos($pathinfo, '/checkEmail') && preg_match('#^/checkEmail/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ridwan_auth_checkEmail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ridwan_auth_checkEmail')), array (  '_controller' => 'Ridwan\\SiteBundle\\Controller\\AuthenticationController::checkEmailAction',));
            }
            not_ridwan_auth_checkEmail:

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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
