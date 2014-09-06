<?php

/* ::base.html.twig */
class __TwigTemplate_067139bf5ea7be1de19881d9a9f5c18c2cb1c047edf970db95d8202fcfc10ffa extends Twig_Template
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
        // line 233
        echo "        ";
        $this->displayBlock('dashboard', $context, $blocks);
        // line 236
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
        // line 250
        $this->displayBlock('content', $context, $blocks);
        // line 252
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
        // line 278
        $this->displayBlock('delete', $context, $blocks);
        // line 280
        echo "
        <hr>
        <footer>
            <p class=\"center\"><strong>National Volunteering Secretariat, Sri Lanka </strong>&copy; 2014
        </footer>

        </div>
        
        <!------------------------JavaScripts --------------------------------!>
           <!-- jQuery -->
        <script src=";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "></script>
        <!-- jQuery UI -->
        <script src=";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "></script>
        <!-- transition / effect library -->
        <script src=";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-transition.js"), "html", null, true);
        echo "></script>
        <!-- alert enhancer library -->
        <script src=";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-alert.js"), "html", null, true);
        echo "></script>
        <!-- modal / dialog library -->
        <script src=";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-modal.js"), "html", null, true);
        echo "></script>
        <!-- custom dropdown library -->
        <script src=";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-dropdown.js"), "html", null, true);
        echo "></script>
        <!-- scrolspy library -->
        <script src=";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "></script>
        <!-- library for creating tabs -->
        <script src=";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tab.js"), "html", null, true);
        echo "></script>
        <!-- library for advanced tooltip -->
        <script src=";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tooltip.js"), "html", null, true);
        echo "></script>
        <!-- popover effect library -->
        <script src=";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-popover.js"), "html", null, true);
        echo "></script>
        <!-- button enhancer library -->
        <script src=";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-button.js"), "html", null, true);
        echo "></script>
        <!-- accordion library (optional, not used in demo) -->
        <script src=";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-collapse.js"), "html", null, true);
        echo "></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src=";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-carousel.js"), "html", null, true);
        echo "></script>
        <!-- autocomplete library -->
        <script src=";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-typeahead.js"), "html", null, true);
        echo "></script>
        <!-- tour library -->
        <script src=";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tour.js"), "html", null, true);
        echo "></script>
        <!-- library for cookie management -->
        <script src=";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.cookie.js"), "html", null, true);
        echo "></script>
        <!-- calander plugin -->
        <script src=";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/fullcalendar.min.js"), "html", null, true);
        echo "></script>
        <!-- data table plugin -->
        <script src=";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.dataTables.min.js"), "html", null, true);
        echo "></script>

        <!-- chart libraries start -->
        <script src=";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/excanvas.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "></script>
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src=";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.chosen.min.js"), "html", null, true);
        echo "></script>
        <!-- checkbox, radio, and file input styler -->
        <script src=";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.uniform.min.js"), "html", null, true);
        echo "></script>
        <!-- plugin for gallery image view -->
        <script src=";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.colorbox.min.js"), "html", null, true);
        echo "></script>
        <!-- rich text editor library -->
        <script src=";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.cleditor.min.js"), "html", null, true);
        echo "></script>
        <!-- notification plugin -->
        <script src=";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.noty.js"), "html", null, true);
        echo "></script>
        <!-- file manager library -->
        <script src=";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.elfinder.min.js"), "html", null, true);
        echo "></script>
        <!-- star rating plugin -->
        <script src=";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.raty.min.js"), "html", null, true);
        echo "></script>
        <!-- for iOS style toggle switch -->
        <script src=";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "></script>
        <!-- autogrowing textarea plugin -->
        <script src=";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "></script>
        <!-- multiple file upload plugin -->
        <script src=";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src=";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.history.js"), "html", null, true);
        echo "></script>
        <!-- application script for Charisma demo -->
        <script src=";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/charisma.js"), "html", null, true);
        echo "></script>

        <!--Additional Java Scripts for extending pages-->
        ";
        // line 360
        $this->displayBlock('javascripts', $context, $blocks);
        // line 363
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
                                                <button class=\"btn btn-mini btn-success\"><i class=\"icon-user\"></i><span class=\"hidden-phone\"> &nbsp;&nbsp;";
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
            echo "\">Account</a></li>
                                            </ul>

                                        </div>

                                        ";
            // line 119
            if (array_key_exists("Notifications", $context)) {
                // line 120
                echo "                                        <div class=\"btn-group pull-right\" >
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
            }
            // line 221
            echo "
                                    ";
        }
        // line 223
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

    // line 233
    public function block_dashboard($context, array $blocks = array())
    {
        // line 234
        echo "
        ";
    }

    // line 250
    public function block_content($context, array $blocks = array())
    {
        // line 251
        echo "                ";
    }

    // line 278
    public function block_delete($context, array $blocks = array())
    {
        // line 279
        echo "        ";
    }

    // line 360
    public function block_javascripts($context, array $blocks = array())
    {
        echo "        

        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 360,  780 => 279,  777 => 278,  773 => 251,  770 => 250,  765 => 234,  762 => 233,  749 => 223,  745 => 221,  737 => 216,  731 => 212,  725 => 208,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  585 => 148,  581 => 146,  575 => 143,  572 => 142,  566 => 139,  563 => 138,  560 => 137,  556 => 136,  553 => 135,  551 => 134,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 124,  515 => 120,  513 => 119,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 88,  452 => 75,  449 => 74,  445 => 45,  442 => 44,  436 => 13,  431 => 2,  428 => 1,  422 => 363,  420 => 360,  414 => 357,  409 => 355,  404 => 353,  399 => 351,  394 => 349,  389 => 347,  384 => 345,  379 => 343,  374 => 341,  369 => 339,  364 => 337,  359 => 335,  352 => 331,  348 => 330,  344 => 329,  340 => 328,  336 => 327,  330 => 324,  325 => 322,  320 => 320,  315 => 318,  310 => 316,  305 => 314,  300 => 312,  295 => 310,  290 => 308,  285 => 306,  280 => 304,  275 => 302,  270 => 300,  265 => 298,  260 => 296,  255 => 294,  250 => 292,  245 => 290,  233 => 280,  231 => 278,  203 => 252,  201 => 250,  185 => 236,  182 => 233,  180 => 74,  176 => 72,  173 => 71,  165 => 66,  161 => 64,  159 => 63,  156 => 62,  148 => 57,  144 => 55,  141 => 54,  139 => 53,  130 => 46,  128 => 44,  122 => 41,  118 => 40,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  62 => 26,  50 => 17,  44 => 14,  40 => 13,  29 => 4,  27 => 1,);
    }
}
