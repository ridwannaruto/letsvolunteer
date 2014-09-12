<?php

/* ::nvs.html.twig */
class __TwigTemplate_7f239c1ff4ebf9c52dfcc6c6e666baca695e3272e3dcd5c00e15c420cb21bc7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageInfo' => array($this, 'block_pageInfo'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'dashboard' => array($this, 'block_dashboard'),
            'content' => array($this, 'block_content'),
            'delete' => array($this, 'block_delete'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('pageInfo', $context, $blocks);
        // line 4
        echo "<html>
    <head>

        <!------------------Meta Data ------------------------->
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Volunteer Management System for National Volunteer Secretariat\">
        <meta name=\"author\" content=\"Ridwan Shariffdeen\">

        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-------------------------StyleSheets------------------->
            <link id=\"bs-css\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/bootstrap-simplex.css"), "html", null, true);
        echo " rel=\"stylesheet\">
            <style type=\"text/css\">
                body {
                    padding-bottom: 40px;
                }
                .sidebar-nav {
                    padding: 9px 0;
                }
            </style>
            <link href=";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/bootstrap-responsive.css"), "html", null, true);
        echo " rel=\"stylesheet\">
            <link href=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/charisma-app.css"), "html", null, true);
        echo " rel=\"stylesheet\">
            <link href=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/jquery-ui-1.8.21.custom.css"), "html", null, true);
        echo " rel=\"stylesheet\">
            <link href=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/fullcalendar.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/fullcalendar.print.css"), "html", null, true);
        echo " rel='stylesheet'  media='print'>
            <link href=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/chosen.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/uniform.default.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/colorbox.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/jquery.cleditor.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/jquery.noty.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/noty_theme_default.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/elfinder.min.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/elfinder.theme.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/jquery.iphone.toggle.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/opa-icons.css"), "html", null, true);
        echo " rel='stylesheet'>
            <link href=";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/uploadify.css"), "html", null, true);
        echo " rel='stylesheet'>

        <!--Additional Styles Sheets for extending pages-->
        ";
        // line 44
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "
    </head>
    <body>

        <!---------------Content --------------------------------->
        <!-- messages -->
      
        ";
        // line 53
        if (array_key_exists("type", $context)) {
            // line 54
            echo "        ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "E")) {
                // line 55
                echo "            <script type=\"text/javascript\">
                window.onload = function() {
                    noty(jQuery.parseJSON('{\"text\":\"";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"error\"}'));

                }
            </script>
        ";
            }
            // line 62
            echo "
        ";
            // line 63
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "S")) {
                // line 64
                echo "            <script type=\"text/javascript\">
                window.onload = function() {
                    noty(jQuery.parseJSON('{\"text\":\"";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"success\"}'));

                }
            </script>
        ";
            }
            // line 71
            echo "        ";
        }
        // line 72
        echo "
        <!-- topbar starts -->
        ";
        // line 74
        $this->displayBlock('header', $context, $blocks);
        // line 234
        echo "        ";
        $this->displayBlock('dashboard', $context, $blocks);
        // line 257
        echo "
        <!-- left menu ends -->

        <div class=\"container-fluid\">
            <div class=\"row-fluid\">


                <noscript>
                    <div class=\"alert alert-block span10\">
                        <h4 class=\"alert-heading\">Warning!</h4>
                        <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
                    </div>
                </noscript>


                ";
        // line 272
        $this->displayBlock('content', $context, $blocks);
        // line 274
        echo "
                <div class=\"modal hide fade\" id=\"comment\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                        <h3>Confirm</h3>
                    </div>
                    <div class=\"modal-body\">
                        <p align=\"center\">Are you sure you want to delete this Notification?
                        </p>


                    </div>
                    <div class=\"modal-footer\">

                        <form action=\"empty\" id = \"continue-form\" method=\"POST\">
                            <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
                            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
                        </form>

                    </div>
                </div>

            </div>
        </div>

        ";
        // line 300
        $this->displayBlock('delete', $context, $blocks);
        // line 302
        echo "
        <hr>
        <footer>
            <p class=\"center\"><strong>National Volunteering Secretariat, Sri Lanka </strong>&copy; 2014
        </footer>

        </div>
        
        <!------------------------JavaScripts --------------------------------!>
           <!-- jQuery -->
        <script src=";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "></script>
        <!-- jQuery UI -->
        <script src=";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "></script>
        <!-- transition / effect library -->
        <script src=";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-transition.js"), "html", null, true);
        echo "></script>
        <!-- alert enhancer library -->
        <script src=";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-alert.js"), "html", null, true);
        echo "></script>
        <!-- modal / dialog library -->
        <script src=";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-modal.js"), "html", null, true);
        echo "></script>
        <!-- custom dropdown library -->
        <script src=";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-dropdown.js"), "html", null, true);
        echo "></script>
        <!-- scrolspy library -->
        <script src=";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "></script>
        <!-- library for creating tabs -->
        <script src=";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tab.js"), "html", null, true);
        echo "></script>
        <!-- library for advanced tooltip -->
        <script src=";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tooltip.js"), "html", null, true);
        echo "></script>
        <!-- popover effect library -->
        <script src=";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-popover.js"), "html", null, true);
        echo "></script>
        <!-- button enhancer library -->
        <script src=";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-button.js"), "html", null, true);
        echo "></script>
        <!-- accordion library (optional, not used in demo) -->
        <script src=";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-collapse.js"), "html", null, true);
        echo "></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src=";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-carousel.js"), "html", null, true);
        echo "></script>
        <!-- autocomplete library -->
        <script src=";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-typeahead.js"), "html", null, true);
        echo "></script>
        <!-- tour library -->
        <script src=";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tour.js"), "html", null, true);
        echo "></script>
        <!-- library for cookie management -->
        <script src=";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.cookie.js"), "html", null, true);
        echo "></script>
        <!-- calander plugin -->
        <script src=";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/fullcalendar.min.js"), "html", null, true);
        echo "></script>
        <!-- data table plugin -->
        <script src=";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.dataTables.min.js"), "html", null, true);
        echo "></script>

        <!-- chart libraries start -->
        <script src=";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/excanvas.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "></script>
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src=";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.chosen.min.js"), "html", null, true);
        echo "></script>
        <!-- checkbox, radio, and file input styler -->
        <script src=";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.uniform.min.js"), "html", null, true);
        echo "></script>
        <!-- plugin for gallery image view -->
        <script src=";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.colorbox.min.js"), "html", null, true);
        echo "></script>
        <!-- rich text editor library -->
        <script src=";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.cleditor.min.js"), "html", null, true);
        echo "></script>
        <!-- notification plugin -->
        <script src=";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.noty.js"), "html", null, true);
        echo "></script>
        <!-- file manager library -->
        <script src=";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.elfinder.min.js"), "html", null, true);
        echo "></script>
        <!-- star rating plugin -->
        <script src=";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.raty.min.js"), "html", null, true);
        echo "></script>
        <!-- for iOS style toggle switch -->
        <script src=";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "></script>
        <!-- autogrowing textarea plugin -->
        <script src=";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "></script>
        <!-- multiple file upload plugin -->
        <script src=";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src=";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.history.js"), "html", null, true);
        echo "></script>
        <!-- application script for Charisma demo -->
        <script src=";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/charisma.js"), "html", null, true);
        echo "></script>

        <!--Additional Java Scripts for extending pages-->
        ";
        // line 382
        $this->displayBlock('javascripts', $context, $blocks);
        // line 385
        echo "    </body>
</html>
";
    }

    // line 1
    public function block_pageInfo($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "National Volunteer Hub";
    }

    // line 44
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 45
        echo "        ";
    }

    // line 74
    public function block_header($context, array $blocks = array())
    {
        // line 75
        echo "        <div class=\"navbar\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">


                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    <table width=\"100%\"><tr>
                            <td width=\"5%\">
                                <img class=\"center\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/icon.png"), "html", null, true);
        echo " \" width = \"40px\"/>

                            </td>
                            <td width=\"64%\">
                                <div class=\"top-nav nav-collapse\">
                                    <ul class=\"nav\">
                                        <li>
                                            <form class=\"navbar-search pull-left\">
                                                <input placeholder=\"type your keyword to search\" class=\"search-query span7\" name=\"query\" type=\"text\">&nbsp;&nbsp;&nbsp;<i class=\"icon-search\"></i>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                             <!--/.nav-collapse -->
                            </td>
                            <td width=\"22%\">
                                <div class=\"pull-right\" >
                                    ";
        // line 105
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 106
            echo "
                                        <div class=\"btn-group pull-right\" >
                                            <a data-toggle=\"dropdown\" href=\"#\">
                                                <button class=\"btn btn-mini btn-round btn-info\"><i class=\"icon-user\"></i><span class=\"hidden-phone\"> &nbsp;&nbsp;";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</span></button>

                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a></li>
                                                <li><a href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Change Password</a></li>
                                                <li><a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Account Settings</a></li>
                                            </ul>

                                        </div>

                                        ";
            // line 120
            if (array_key_exists("Notifications", $context)) {
                // line 121
                echo "                                        <div class=\"btn-group pull-right\" >
                                            <a data-toggle=\"dropdown\" href=\"#\">
                                                <button class=\"btn btn-mini btn-round btn-info\"><i class=\"icon-bell\"></i> Notifications<span class=\"hidden-phone\"> </span>\t</button>

                                                ";
                // line 125
                $context["noOfNotification"] = 0;
                // line 126
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 127
                    echo "                                                    ";
                    $context["noOfNotification"] = ((isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")) + 1);
                    // line 128
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                                                ";
                if (((isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")) > 0)) {
                    // line 130
                    echo "                                                    <span class=\"notification red\">";
                    echo twig_escape_filter($this->env, (isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")), "html", null, true);
                    echo "</span>
                                                ";
                }
                // line 132
                echo "                                            </a>
                                            <ul class=\"dropdown-menu span6 center\">
                                                <div class=\"row-fluid\">
                                                    ";
                // line 135
                if (((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")) != null)) {
                    // line 136
                    echo "                                                        <div class=\"box-content alerts\">
                                                            ";
                    // line 137
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")));
                    foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                        // line 138
                        echo "                                                            ";
                        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task") == 0)) {
                            // line 139
                            echo "
                                                            <a href=\"";
                            // line 140
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details_notification", array("projectID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "project"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\"><li>

                                                                    ";
                        } else {
                            // line 143
                            echo "
                                                                    <a href=\"";
                            // line 144
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details_notification", array("taskID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\"> <li>

                                                                            ";
                        }
                        // line 147
                        echo "

                                                                            ";
                        // line 149
                        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 4)) {
                            // line 150
                            echo "                                                                                <div class=\"alert alert-error\">
                                                                                    <button url=\"";
                            // line 151
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                            echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                                    <div class = \"pull-right\">
                                                                                        ";
                            // line 153
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                            echo "
                                                                                    </div>

                                                                                    <strong><h5>";
                            // line 156
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                            echo "</h5></strong>

                                                                                    ";
                            // line 158
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                            echo "
                                                                                    <br>
                                                                                </div>

                                                                            ";
                        }
                        // line 163
                        echo "
                                                                            ";
                        // line 164
                        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 3)) {
                            // line 165
                            echo "                                                                                <div class=\"alert alert-success\">
                                                                                    <button url=\"";
                            // line 166
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                            echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                                    <div class = \"pull-right\">
                                                                                        ";
                            // line 168
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                            echo "
                                                                                    </div>
                                                                                    <strong><h5>";
                            // line 170
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                            echo "</h5></strong>

                                                                                    ";
                            // line 172
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                            echo "<br>



                                                                                </div>

                                                                            ";
                        }
                        // line 179
                        echo "
                                                                            ";
                        // line 180
                        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 2)) {
                            // line 181
                            echo "                                                                                <div class=\"alert alert-heading\">
                                                                                    <button url=\"";
                            // line 182
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                            echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                                    <div class = \"pull-right\">
                                                                                        ";
                            // line 184
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                            echo "
                                                                                    </div>
                                                                                    <strong><h5>";
                            // line 186
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                            echo "</h5></strong>

                                                                                    ";
                            // line 188
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                            echo "<br>
                                                                                </div>

                                                                            ";
                        }
                        // line 192
                        echo "                                                                            ";
                        if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 1)) {
                            // line 193
                            echo "                                                                                <div class=\"alert alert-info\">
                                                                                    <button url=\"";
                            // line 194
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                            echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                                    <div class = \"pull-right\">
                                                                                        ";
                            // line 196
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                            echo "
                                                                                    </div>
                                                                                    <strong><h5>";
                            // line 198
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                            echo "</h5></strong>

                                                                                    ";
                            // line 200
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                            echo "<br>

                                                                                </div>

                                                                            ";
                        }
                        // line 205
                        echo "                                                                        </li>
                                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 207
                    echo "                                                        </div>
                                                    ";
                } else {
                    // line 209
                    echo "                                                        <li align =\"center\">
                                                            no new notifications
                                                        </li></a>
                                                    ";
                }
                // line 213
                echo "

                                                </div><!--/span-->
                                                <li class=\"divider\"></li>
                                                <li align=\"center\"><a href=\"";
                // line 217
                echo $this->env->getExtension('routing')->getPath("ridwan_allnotification");
                echo "\">see all</a></li>

                                            </ul>
                                        </div>
                                            ";
            }
            // line 222
            echo "
                                    ";
        }
        // line 224
        echo "                                </div>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- topbar ends -->
        ";
    }

    // line 234
    public function block_dashboard($context, array $blocks = array())
    {
        // line 235
        echo "
            <div class=\"span2 main-menu-span\">
                <div class=\"well nav-collapse sidebar-nav\">
                    <p align=\"center\">
                        ";
        // line 239
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 240
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                        ";
        } else {
            // line 242
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                        ";
        }
        // line 244
        echo "                        <br><br><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</strong>
                    </p>
                    <ul class=\"nav nav-tabs nav-stacked main-menu\">
                        <li class=\"nav-header hidden-tablet\">Dashboard</li>
                        <li><a class=\"ajax-link\" href=\"";
        // line 248
        echo $this->env->getExtension('routing')->getPath("ridwan_site_home");
        echo "\"><i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Home</span></a></li>
                        <li><a class=\"ajax-link\" href=\"";
        // line 249
        echo $this->env->getExtension('routing')->getPath("ridwan_opportunity_index");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Opportunities</span></a></li>
                        <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> Assignments</span></a></li>
                        <li><a class=\"ajax-link\" href=\"";
        // line 251
        echo $this->env->getExtension('routing')->getPath("ridwan_admin_users");
        echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Users</span></a></li>
                        <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> Statistics</span></a></li>
                    </ul>
                </div><!--/.well -->
            </div><!--/span-->
        ";
    }

    // line 272
    public function block_content($context, array $blocks = array())
    {
        // line 273
        echo "                ";
    }

    // line 300
    public function block_delete($context, array $blocks = array())
    {
        // line 301
        echo "        ";
    }

    // line 382
    public function block_javascripts($context, array $blocks = array())
    {
        echo "        

        ";
    }

    public function getTemplateName()
    {
        return "::nvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  831 => 382,  827 => 301,  824 => 300,  820 => 273,  817 => 272,  807 => 251,  802 => 249,  798 => 248,  790 => 244,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 222,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 166,  626 => 165,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 153,  595 => 151,  592 => 150,  590 => 149,  586 => 147,  580 => 144,  577 => 143,  571 => 140,  568 => 139,  565 => 138,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 126,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  453 => 75,  450 => 74,  446 => 45,  443 => 44,  437 => 13,  432 => 2,  429 => 1,  423 => 385,  421 => 382,  415 => 379,  410 => 377,  405 => 375,  400 => 373,  395 => 371,  390 => 369,  385 => 367,  380 => 365,  375 => 363,  370 => 361,  365 => 359,  360 => 357,  353 => 353,  349 => 352,  345 => 351,  341 => 350,  337 => 349,  331 => 346,  326 => 344,  321 => 342,  316 => 340,  311 => 338,  306 => 336,  296 => 332,  291 => 330,  286 => 328,  276 => 324,  271 => 322,  266 => 320,  256 => 316,  251 => 314,  246 => 312,  234 => 302,  232 => 300,  204 => 274,  202 => 272,  185 => 257,  182 => 234,  176 => 72,  173 => 71,  165 => 66,  161 => 64,  159 => 63,  156 => 62,  148 => 57,  144 => 55,  141 => 54,  139 => 53,  130 => 46,  128 => 44,  122 => 41,  118 => 40,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  70 => 28,  66 => 27,  62 => 26,  50 => 17,  44 => 14,  29 => 4,  27 => 1,  315 => 174,  305 => 170,  301 => 334,  294 => 167,  289 => 165,  284 => 163,  281 => 326,  277 => 160,  270 => 158,  264 => 157,  261 => 318,  259 => 155,  254 => 152,  250 => 151,  231 => 134,  221 => 130,  217 => 129,  210 => 127,  205 => 125,  200 => 123,  197 => 122,  193 => 120,  186 => 118,  180 => 74,  177 => 116,  175 => 115,  170 => 112,  166 => 111,  84 => 32,  79 => 30,  74 => 29,  69 => 26,  65 => 24,  59 => 22,  53 => 20,  51 => 19,  40 => 13,  31 => 4,  28 => 3,);
    }
}
