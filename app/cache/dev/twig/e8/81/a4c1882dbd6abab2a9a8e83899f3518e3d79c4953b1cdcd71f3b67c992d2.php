<?php

/* RidwanUserBundle:Welcome:index2.html.twig */
class __TwigTemplate_e881a4c1882dbd6abab2a9a8e83899f3518e3d79c4953b1cdcd71f3b67c992d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageInfo' => array($this, 'block_pageInfo'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/bootstrap-slate.css"), "html", null, true);
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
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "E")) {
                // line 55
                echo "    <script type=\"text/javascript\">
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
                echo "    <script type=\"text/javascript\">
        window.onload = function() {
            noty(jQuery.parseJSON('{\"text\":\"";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"success\"}'));

        }
    </script>
";
            }
        }
        // line 72
        echo "
<!-- topbar starts -->

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
        // line 89
        $this->displayBlock('content', $context, $blocks);
        // line 91
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
        // line 117
        $this->displayBlock('delete', $context, $blocks);
        // line 119
        echo "
<hr>
<footer>
    <p class=\"center\"><strong>National Volunteering Secretariat, Sri Lanka</strong>&copy; 2014
</footer>

</div>

<!------------------------JavaScripts --------------------------------!>
   <!-- jQuery -->
<script src=";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "></script>
<!-- jQuery UI -->
<script src=";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "></script>
<!-- transition / effect library -->
<script src=";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-transition.js"), "html", null, true);
        echo "></script>
<!-- alert enhancer library -->
<script src=";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-alert.js"), "html", null, true);
        echo "></script>
<!-- modal / dialog library -->
<script src=";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-modal.js"), "html", null, true);
        echo "></script>
<!-- custom dropdown library -->
<script src=";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-dropdown.js"), "html", null, true);
        echo "></script>
<!-- scrolspy library -->
<script src=";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "></script>
<!-- library for creating tabs -->
<script src=";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tab.js"), "html", null, true);
        echo "></script>
<!-- library for advanced tooltip -->
<script src=";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tooltip.js"), "html", null, true);
        echo "></script>
<!-- popover effect library -->
<script src=";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-popover.js"), "html", null, true);
        echo "></script>
<!-- button enhancer library -->
<script src=";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-button.js"), "html", null, true);
        echo "></script>
<!-- accordion library (optional, not used in demo) -->
<script src=";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-collapse.js"), "html", null, true);
        echo "></script>
<!-- carousel slideshow library (optional, not used in demo) -->
<script src=";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-carousel.js"), "html", null, true);
        echo "></script>
<!-- autocomplete library -->
<script src=";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-typeahead.js"), "html", null, true);
        echo "></script>
<!-- tour library -->
<script src=";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/bootstrap-tour.js"), "html", null, true);
        echo "></script>
<!-- library for cookie management -->
<script src=";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.cookie.js"), "html", null, true);
        echo "></script>
<!-- calander plugin -->
<script src=";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/fullcalendar.min.js"), "html", null, true);
        echo "></script>
<!-- data table plugin -->
<script src=";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.dataTables.min.js"), "html", null, true);
        echo "></script>

<!-- chart libraries start -->
<script src=";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/excanvas.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "></script>
<!-- chart libraries end -->

<!-- select or dropdown enhancer -->
<script src=";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.chosen.min.js"), "html", null, true);
        echo "></script>
<!-- checkbox, radio, and file input styler -->
<script src=";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.uniform.min.js"), "html", null, true);
        echo "></script>
<!-- plugin for gallery image view -->
<script src=";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.colorbox.min.js"), "html", null, true);
        echo "></script>
<!-- rich text editor library -->
<script src=";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.cleditor.min.js"), "html", null, true);
        echo "></script>
<!-- notification plugin -->
<script src=";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.noty.js"), "html", null, true);
        echo "></script>
<!-- file manager library -->
<script src=";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.elfinder.min.js"), "html", null, true);
        echo "></script>
<!-- star rating plugin -->
<script src=";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.raty.min.js"), "html", null, true);
        echo "></script>
<!-- for iOS style toggle switch -->
<script src=";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "></script>
<!-- autogrowing textarea plugin -->
<script src=";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "></script>
<!-- multiple file upload plugin -->
<script src=";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "></script>
<!-- history.js for cross-browser state change on ajax -->
<script src=";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/jquery.history.js"), "html", null, true);
        echo "></script>
<!-- application script for Charisma demo -->
<script src=";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/charisma.js"), "html", null, true);
        echo "></script>

<!--Additional Java Scripts for extending pages-->
";
        // line 199
        $this->displayBlock('javascripts', $context, $blocks);
        // line 202
        echo "</body>
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
        echo "    ";
    }

    // line 89
    public function block_content($context, array $blocks = array())
    {
        // line 90
        echo "        ";
    }

    // line 117
    public function block_delete($context, array $blocks = array())
    {
    }

    // line 199
    public function block_javascripts($context, array $blocks = array())
    {
        // line 200
        echo "
";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 200,  450 => 199,  445 => 117,  441 => 90,  438 => 89,  434 => 45,  431 => 44,  425 => 13,  420 => 2,  417 => 1,  411 => 202,  409 => 199,  403 => 196,  398 => 194,  393 => 192,  388 => 190,  383 => 188,  378 => 186,  373 => 184,  368 => 182,  363 => 180,  358 => 178,  353 => 176,  348 => 174,  341 => 170,  337 => 169,  333 => 168,  329 => 167,  325 => 166,  319 => 163,  314 => 161,  309 => 159,  304 => 157,  299 => 155,  294 => 153,  289 => 151,  284 => 149,  279 => 147,  274 => 145,  269 => 143,  264 => 141,  259 => 139,  254 => 137,  249 => 135,  244 => 133,  239 => 131,  234 => 129,  220 => 117,  192 => 91,  190 => 89,  171 => 72,  162 => 66,  158 => 64,  156 => 63,  145 => 57,  141 => 55,  139 => 54,  137 => 53,  128 => 46,  126 => 44,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  100 => 36,  96 => 35,  92 => 34,  88 => 33,  84 => 32,  72 => 29,  68 => 28,  64 => 27,  60 => 26,  48 => 17,  42 => 14,  38 => 13,  27 => 4,  25 => 1,  222 => 119,  209 => 105,  205 => 104,  199 => 101,  191 => 96,  187 => 95,  181 => 92,  174 => 88,  170 => 87,  164 => 84,  157 => 80,  153 => 62,  147 => 76,  140 => 72,  136 => 71,  130 => 68,  124 => 65,  101 => 45,  94 => 41,  87 => 37,  80 => 31,  76 => 30,  70 => 29,  63 => 25,  59 => 24,  53 => 21,  47 => 18,  31 => 4,  28 => 3,);
    }
}
