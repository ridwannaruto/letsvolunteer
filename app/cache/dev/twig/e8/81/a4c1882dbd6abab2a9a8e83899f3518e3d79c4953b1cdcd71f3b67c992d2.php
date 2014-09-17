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
        return array (  438 => 89,  420 => 2,  417 => 1,  411 => 202,  388 => 190,  363 => 180,  274 => 145,  194 => 91,  637 => 358,  625 => 348,  615 => 344,  609 => 341,  606 => 340,  594 => 335,  588 => 333,  585 => 332,  581 => 331,  563 => 315,  557 => 314,  547 => 308,  543 => 306,  539 => 304,  535 => 302,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  431 => 44,  416 => 235,  383 => 188,  371 => 201,  358 => 178,  350 => 191,  342 => 188,  280 => 141,  23 => 3,  307 => 176,  231 => 129,  225 => 125,  195 => 89,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 45,  428 => 247,  412 => 234,  403 => 196,  352 => 199,  344 => 194,  333 => 168,  317 => 176,  300 => 168,  284 => 149,  277 => 150,  255 => 119,  359 => 209,  346 => 189,  304 => 157,  297 => 155,  200 => 110,  198 => 92,  172 => 91,  473 => 261,  470 => 246,  449 => 250,  445 => 117,  433 => 224,  419 => 236,  399 => 212,  391 => 211,  382 => 208,  378 => 186,  373 => 184,  366 => 201,  357 => 198,  303 => 169,  290 => 158,  287 => 136,  206 => 110,  170 => 97,  188 => 88,  178 => 97,  150 => 80,  184 => 96,  129 => 66,  126 => 44,  20 => 1,  153 => 62,  146 => 79,  155 => 83,  292 => 135,  279 => 147,  267 => 145,  249 => 135,  223 => 124,  211 => 99,  197 => 103,  175 => 100,  104 => 37,  134 => 73,  152 => 87,  113 => 54,  76 => 30,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 90,  425 => 13,  406 => 214,  364 => 197,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 166,  263 => 126,  242 => 149,  236 => 132,  222 => 119,  216 => 113,  192 => 91,  160 => 75,  100 => 36,  257 => 152,  190 => 89,  124 => 61,  97 => 42,  81 => 42,  348 => 174,  338 => 169,  334 => 159,  329 => 167,  324 => 151,  319 => 163,  299 => 155,  245 => 115,  228 => 104,  212 => 111,  167 => 88,  137 => 53,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 338,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 234,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 185,  310 => 197,  308 => 175,  289 => 151,  260 => 155,  250 => 147,  248 => 137,  239 => 131,  233 => 129,  213 => 98,  181 => 84,  127 => 54,  84 => 32,  77 => 28,  205 => 96,  191 => 100,  174 => 92,  58 => 31,  65 => 33,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 334,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 310,  545 => 130,  542 => 129,  536 => 128,  533 => 301,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 199,  446 => 45,  443 => 247,  432 => 2,  429 => 223,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 176,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 159,  306 => 195,  301 => 156,  296 => 160,  291 => 137,  286 => 344,  281 => 163,  276 => 340,  266 => 147,  261 => 153,  251 => 141,  234 => 129,  232 => 121,  185 => 100,  180 => 95,  165 => 94,  161 => 92,  148 => 78,  118 => 51,  114 => 57,  110 => 54,  90 => 43,  70 => 37,  343 => 221,  321 => 358,  315 => 146,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 139,  256 => 129,  253 => 123,  244 => 133,  237 => 144,  226 => 95,  218 => 126,  215 => 100,  210 => 113,  207 => 107,  202 => 123,  53 => 19,  480 => 280,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 200,  444 => 256,  440 => 148,  437 => 244,  435 => 146,  430 => 248,  427 => 143,  423 => 238,  413 => 134,  409 => 199,  407 => 131,  402 => 213,  398 => 194,  393 => 192,  387 => 222,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 182,  365 => 375,  362 => 210,  360 => 204,  355 => 106,  341 => 170,  337 => 169,  322 => 101,  314 => 161,  312 => 176,  309 => 159,  305 => 139,  298 => 139,  294 => 153,  285 => 164,  283 => 162,  278 => 86,  268 => 85,  264 => 141,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 108,  220 => 117,  214 => 118,  177 => 83,  169 => 88,  140 => 76,  132 => 72,  128 => 46,  107 => 52,  61 => 32,  273 => 158,  269 => 143,  254 => 137,  243 => 137,  240 => 124,  238 => 108,  235 => 116,  230 => 82,  227 => 129,  224 => 121,  221 => 111,  219 => 110,  217 => 117,  208 => 109,  204 => 120,  179 => 94,  159 => 84,  143 => 66,  135 => 59,  119 => 59,  102 => 48,  71 => 28,  67 => 27,  63 => 36,  59 => 22,  93 => 44,  88 => 33,  78 => 32,  38 => 13,  28 => 3,  201 => 104,  196 => 115,  183 => 96,  171 => 72,  166 => 88,  163 => 87,  158 => 64,  156 => 63,  151 => 77,  142 => 76,  138 => 75,  136 => 60,  121 => 57,  117 => 65,  105 => 50,  91 => 46,  62 => 22,  49 => 15,  26 => 2,  87 => 41,  46 => 9,  44 => 13,  31 => 4,  94 => 45,  89 => 36,  85 => 35,  75 => 40,  68 => 28,  56 => 21,  24 => 6,  27 => 4,  25 => 1,  21 => 2,  19 => 1,  79 => 30,  72 => 29,  69 => 36,  47 => 14,  40 => 9,  37 => 6,  22 => 1,  246 => 145,  157 => 84,  145 => 57,  139 => 54,  131 => 64,  123 => 53,  120 => 41,  115 => 50,  111 => 49,  108 => 38,  101 => 48,  98 => 40,  96 => 35,  83 => 43,  74 => 38,  66 => 25,  55 => 12,  52 => 17,  50 => 15,  43 => 13,  41 => 12,  35 => 8,  32 => 5,  29 => 2,  209 => 113,  203 => 106,  199 => 105,  193 => 100,  189 => 99,  187 => 84,  182 => 99,  176 => 92,  173 => 93,  168 => 90,  164 => 76,  162 => 66,  154 => 72,  149 => 80,  147 => 75,  144 => 61,  141 => 55,  133 => 57,  130 => 59,  125 => 52,  122 => 52,  116 => 40,  112 => 39,  109 => 55,  106 => 48,  103 => 44,  99 => 43,  95 => 45,  92 => 34,  86 => 43,  82 => 42,  80 => 31,  73 => 37,  64 => 27,  60 => 26,  57 => 24,  54 => 25,  51 => 11,  48 => 17,  45 => 14,  42 => 14,  39 => 6,  36 => 11,  33 => 6,  30 => 1,);
    }
}
