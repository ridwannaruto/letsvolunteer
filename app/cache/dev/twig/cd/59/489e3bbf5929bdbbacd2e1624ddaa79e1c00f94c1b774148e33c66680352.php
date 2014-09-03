<?php

/* RidwanSiteBundle:basic:basic.html.twig */
class __TwigTemplate_cd59489e3bbf5929bdbbacd2e1624ddaa79e1c00f94c1b774148e33c66680352 extends Twig_Template
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
        // line 52
        if (array_key_exists("type", $context)) {
            // line 53
            echo "        ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "E")) {
                // line 54
                echo "            <script type=\"text/javascript\">
                window.onload = function() {
                    noty(jQuery.parseJSON('{\"text\":\"";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"error\"}'));

                }
            </script>
        ";
            }
            // line 61
            echo "
        ";
            // line 62
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "S")) {
                // line 63
                echo "            <script type=\"text/javascript\">
                window.onload = function() {
                    noty(jQuery.parseJSON('{\"text\":\"";
                // line 65
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"success\"}'));

                }
            </script>
        ";
            }
            // line 70
            echo "        ";
        }
        // line 71
        echo "
        <!-- topbar starts -->
        ";
        // line 73
        $this->displayBlock('header', $context, $blocks);
        // line 235
        echo "        ";
        $this->displayBlock('dashboard', $context, $blocks);
        // line 263
        echo "        <!-- left menu ends -->

        <div class=\"container-fluid\">
            <div class=\"row-fluid\">


                <noscript>
                    <div class=\"alert alert-block span10\">
                        <h4 class=\"alert-heading\">Warning!</h4>
                        <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
                    </div>
                </noscript>


                ";
        // line 277
        $this->displayBlock('content', $context, $blocks);
        // line 279
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
        // line 305
        $this->displayBlock('delete', $context, $blocks);
        // line 307
        echo "
        <hr>
        <footer>
            <p class=\"center\"><strong>Computer Science & Engineering Department, University of Moratuwa </strong>&copy; 2014
        </footer>

        </div>
        
        <!------------------------JavaScripts --------------------------------!>
           <!-- jQuery -->
        <script src=";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "></script>
        <!-- jQuery UI -->
        <script src=";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "></script>
        <!-- transition / effect library -->
        <script src=";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-transition.js"), "html", null, true);
        echo "></script>
        <!-- alert enhancer library -->
        <script src=";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-alert.js"), "html", null, true);
        echo "></script>
        <!-- modal / dialog library -->
        <script src=";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-modal.js"), "html", null, true);
        echo "></script>
        <!-- custom dropdown library -->
        <script src=";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-dropdown.js"), "html", null, true);
        echo "></script>
        <!-- scrolspy library -->
        <script src=";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "></script>
        <!-- library for creating tabs -->
        <script src=";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tab.js"), "html", null, true);
        echo "></script>
        <!-- library for advanced tooltip -->
        <script src=";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tooltip.js"), "html", null, true);
        echo "></script>
        <!-- popover effect library -->
        <script src=";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-popover.js"), "html", null, true);
        echo "></script>
        <!-- button enhancer library -->
        <script src=";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-button.js"), "html", null, true);
        echo "></script>
        <!-- accordion library (optional, not used in demo) -->
        <script src=";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-collapse.js"), "html", null, true);
        echo "></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src=";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-carousel.js"), "html", null, true);
        echo "></script>
        <!-- autocomplete library -->
        <script src=";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-typeahead.js"), "html", null, true);
        echo "></script>
        <!-- tour library -->
        <script src=";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tour.js"), "html", null, true);
        echo "></script>
        <!-- library for cookie management -->
        <script src=";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.cookie.js"), "html", null, true);
        echo "></script>
        <!-- calander plugin -->
        <script src=";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/fullcalendar.min.js"), "html", null, true);
        echo "></script>
        <!-- data table plugin -->
        <script src=";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.dataTables.min.js"), "html", null, true);
        echo "></script>

        <!-- chart libraries start -->
        <script src=";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/excanvas.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "></script>
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src=";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.chosen.min.js"), "html", null, true);
        echo "></script>
        <!-- checkbox, radio, and file input styler -->
        <script src=";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.uniform.min.js"), "html", null, true);
        echo "></script>
        <!-- plugin for gallery image view -->
        <script src=";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.colorbox.min.js"), "html", null, true);
        echo "></script>
        <!-- rich text editor library -->
        <script src=";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.cleditor.min.js"), "html", null, true);
        echo "></script>
        <!-- notification plugin -->
        <script src=";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.noty.js"), "html", null, true);
        echo "></script>
        <!-- file manager library -->
        <script src=";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.elfinder.min.js"), "html", null, true);
        echo "></script>
        <!-- star rating plugin -->
        <script src=";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.raty.min.js"), "html", null, true);
        echo "></script>
        <!-- for iOS style toggle switch -->
        <script src=";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "></script>
        <!-- autogrowing textarea plugin -->
        <script src=";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "></script>
        <!-- multiple file upload plugin -->
        <script src=";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src=";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.history.js"), "html", null, true);
        echo "></script>
        <!-- application script for Charisma demo -->
        <script src=";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/charisma.js"), "html", null, true);
        echo "></script>

        <!--Additional Java Scripts for extending pages-->
        ";
        // line 387
        $this->displayBlock('javascripts', $context, $blocks);
        // line 390
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

    // line 73
    public function block_header($context, array $blocks = array())
    {
        // line 74
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
        // line 87
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
        // line 104
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "has", array(0 => "user"), "method")) {
            // line 105
            echo "                                        <br>
                                        <div class=\"btn-group pull-right\" >
                                            <a data-toggle=\"dropdown\" href=\"#\">
                                                <button class=\"btn btn-mini btn-success\"><i class=\"icon-user\"></i><span class=\"hidden-phone\"> &nbsp;&nbsp;";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
            echo "</span></button>

                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a class=\"ajax-link\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"))), "html", null, true);
            echo "\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Profile</span></a></li>
                                                <li><a class=\"ajax-link\" href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("moraspirit_account");
            echo "\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Account Settings</span></a></li>

                                                <li class=\"divider\"></li>
                                                <li><a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("moraspirit_site_logout");
            echo "\">Logout</a></li>
                                            </ul>
                                        </div>

                                        <div class=\"btn-group pull-right\" >
                                            <a data-toggle=\"dropdown\" href=\"#\">
                                                <button class=\"btn btn-mini btn-round btn-info\"><i class=\"icon-bell\"></i> Notifications<span class=\"hidden-phone\"> </span>\t</button>

                                                ";
            // line 124
            $context["noOfNotification"] = 0;
            // line 125
            echo "                                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 126
                echo "                                                    ";
                $context["noOfNotification"] = ((isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")) + 1);
                // line 127
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                                                ";
            if (((isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")) > 0)) {
                // line 129
                echo "                                                    <span class=\"notification red\">";
                echo twig_escape_filter($this->env, (isset($context["noOfNotification"]) ? $context["noOfNotification"] : $this->getContext($context, "noOfNotification")), "html", null, true);
                echo "</span>
                                                ";
            }
            // line 131
            echo "                                            </a>
                                            <ul class=\"dropdown-menu span6 center\">
                                                <div class=\"row-fluid\">
                                                    ";
            // line 134
            if (((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")) != null)) {
                // line 135
                echo "                                                        <div class=\"box-content alerts\">
                                                            ";
                // line 136
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["Notifications"]) ? $context["Notifications"] : $this->getContext($context, "Notifications")));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 137
                    echo "                                                            ";
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task") == 0)) {
                        // line 138
                        echo "
                                                            <a href=\"";
                        // line 139
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details_notification", array("projectID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "project"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\"><li>

                                                                    ";
                    } else {
                        // line 142
                        echo "
                                                                    <a href=\"";
                        // line 143
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details_notification", array("taskID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\"> <li>

                                                                            ";
                    }
                    // line 146
                    echo "

                                                                            ";
                    // line 148
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 4)) {
                        // line 149
                        echo "                                                                                <div class=\"alert alert-error\">
                                                                                    <button url=\"";
                        // line 150
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                                    <div class = \"pull-right\">
                                                                                        ";
                        // line 152
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                                                                    </div>

                                                                                    <strong><h5>";
                        // line 155
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>

                                                                                    ";
                        // line 157
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "
                                                                                    <br>
                                                                                </div>

                                                                            ";
                    }
                    // line 162
                    echo "
                                                                            ";
                    // line 163
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 3)) {
                        // line 164
                        echo "                                                                                <div class=\"alert alert-success\">
                                                                                    <button url=\"";
                        // line 165
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                                    <div class = \"pull-right\">
                                                                                        ";
                        // line 167
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                                                                    </div>
                                                                                    <strong><h5>";
                        // line 169
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>

                                                                                    ";
                        // line 171
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "<br>



                                                                                </div>

                                                                            ";
                    }
                    // line 178
                    echo "
                                                                            ";
                    // line 179
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 2)) {
                        // line 180
                        echo "                                                                                <div class=\"alert alert-heading\">
                                                                                    <button url=\"";
                        // line 181
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                                    <div class = \"pull-right\">
                                                                                        ";
                        // line 183
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                                                                    </div>
                                                                                    <strong><h5>";
                        // line 185
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>

                                                                                    ";
                        // line 187
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "<br>
                                                                                </div>

                                                                            ";
                    }
                    // line 191
                    echo "                                                                            ";
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 1)) {
                        // line 192
                        echo "                                                                                <div class=\"alert alert-info\">
                                                                                    <button url=\"";
                        // line 193
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                        echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                                                                    <div class = \"pull-right\">
                                                                                        ";
                        // line 195
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                                                                                    </div>
                                                                                    <strong><h5>";
                        // line 197
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                        echo "</h5></strong>

                                                                                    ";
                        // line 199
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                        echo "<br>

                                                                                </div>

                                                                            ";
                    }
                    // line 204
                    echo "                                                                        </li>
                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "                                                        </div>
                                                    ";
            } else {
                // line 208
                echo "                                                        <li align =\"center\">
                                                            no new notifications
                                                        </li></a>
                                                    ";
            }
            // line 212
            echo "

                                                </div><!--/span-->
                                                <li class=\"divider\"></li>
                                                <li align=\"center\"><a href=\"";
            // line 216
            echo $this->env->getExtension('routing')->getPath("moraspirit_allnotification");
            echo "\">see all</a></li>

                                            </ul>
                                        </div>

                                    ";
        } else {
            // line 222
            echo "                                        <a href=\"\"><button class=\"btn btn-mini btn-success\"> Login</button></a>

                                    ";
        }
        // line 225
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

    // line 235
    public function block_dashboard($context, array $blocks = array())
    {
        // line 236
        echo "
            <div class=\"span2 main-menu-span\">




                <div class=\"well nav-collapse sidebar-nav\">
                    <p align=\"center\">
                        <img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "photo"), "method"), "html", null, true);
        echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                        <br><br><strong>";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</strong>
                    </p>
                    <ul class=\"nav nav-tabs nav-stacked main-menu\">

                        <li class=\"nav-header hidden-tablet\">Dashboard</li>
                        <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Home</span></a></li>

                        <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> Opportunities</span></a></li>

                        <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Projects</span></a></li>
                        <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> Tasks</span></a></li>
                        <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Spiriters</span></a></li>


                    </ul>
                </div><!--/.well -->
            </div><!--/span-->
        ";
    }

    // line 277
    public function block_content($context, array $blocks = array())
    {
        // line 278
        echo "                ";
    }

    // line 305
    public function block_delete($context, array $blocks = array())
    {
        // line 306
        echo "        ";
    }

    // line 387
    public function block_javascripts($context, array $blocks = array())
    {
        echo "        

        ";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:basic:basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 146,  575 => 143,  572 => 142,  566 => 139,  563 => 138,  556 => 136,  553 => 135,  551 => 134,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 124,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 44,  421 => 390,  419 => 387,  408 => 382,  403 => 380,  388 => 374,  383 => 372,  378 => 370,  373 => 368,  363 => 364,  358 => 362,  351 => 358,  347 => 357,  339 => 355,  335 => 354,  329 => 351,  324 => 349,  319 => 347,  304 => 341,  299 => 339,  289 => 335,  284 => 333,  279 => 331,  274 => 329,  249 => 319,  232 => 307,  200 => 277,  184 => 263,  181 => 235,  175 => 71,  172 => 70,  160 => 63,  155 => 61,  65 => 27,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 165,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 153,  594 => 151,  591 => 150,  589 => 149,  585 => 148,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 136,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 128,  532 => 127,  527 => 126,  525 => 125,  519 => 121,  517 => 120,  509 => 115,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 88,  452 => 75,  449 => 74,  445 => 45,  442 => 44,  436 => 13,  431 => 2,  428 => 1,  422 => 393,  420 => 390,  414 => 387,  404 => 383,  399 => 381,  394 => 379,  389 => 377,  369 => 369,  364 => 367,  359 => 365,  352 => 361,  348 => 360,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 352,  320 => 350,  310 => 346,  300 => 342,  290 => 338,  280 => 334,  275 => 332,  270 => 330,  260 => 326,  255 => 324,  250 => 322,  245 => 320,  233 => 310,  231 => 308,  185 => 266,  180 => 74,  165 => 66,  161 => 64,  148 => 57,  118 => 40,  114 => 39,  110 => 38,  90 => 33,  70 => 28,  343 => 356,  321 => 197,  315 => 348,  313 => 194,  295 => 340,  271 => 161,  265 => 328,  259 => 323,  256 => 154,  253 => 153,  244 => 317,  237 => 144,  225 => 136,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 279,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 45,  440 => 148,  437 => 147,  435 => 13,  430 => 2,  427 => 1,  423 => 142,  413 => 384,  409 => 385,  407 => 131,  402 => 130,  398 => 378,  393 => 376,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 366,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 345,  312 => 98,  309 => 343,  305 => 344,  298 => 91,  294 => 337,  285 => 336,  283 => 88,  278 => 86,  268 => 85,  264 => 325,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 53,  132 => 51,  128 => 44,  107 => 36,  61 => 25,  273 => 96,  269 => 327,  254 => 321,  243 => 88,  240 => 145,  238 => 85,  235 => 143,  230 => 305,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 73,  159 => 63,  143 => 54,  135 => 53,  119 => 42,  102 => 36,  71 => 20,  67 => 15,  63 => 15,  59 => 24,  93 => 34,  88 => 6,  78 => 30,  38 => 6,  28 => 3,  201 => 280,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 62,  151 => 63,  142 => 59,  138 => 52,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 27,  62 => 26,  49 => 7,  26 => 6,  87 => 25,  46 => 7,  44 => 14,  31 => 11,  94 => 34,  89 => 20,  85 => 28,  75 => 17,  68 => 14,  56 => 9,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 28,  47 => 9,  40 => 13,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 53,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 36,  98 => 35,  96 => 35,  83 => 25,  74 => 29,  66 => 27,  55 => 15,  52 => 20,  50 => 17,  43 => 14,  41 => 5,  35 => 12,  32 => 4,  29 => 4,  209 => 82,  203 => 282,  199 => 124,  193 => 73,  189 => 71,  187 => 84,  182 => 234,  176 => 72,  173 => 71,  168 => 72,  164 => 65,  162 => 57,  154 => 58,  149 => 51,  147 => 56,  144 => 55,  141 => 54,  133 => 55,  130 => 46,  125 => 44,  122 => 41,  116 => 41,  112 => 42,  109 => 38,  106 => 37,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 31,  80 => 41,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 13,  36 => 3,  33 => 2,  30 => 7,);
    }
}
