<?php

/* RidwanUserBundle:Registration:register.html.twig */
class __TwigTemplate_2bf632e133188a320d1fdb45a71272f4917635362f1aa0d67256c4b33bb442f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Let's Volunteer Register</title>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/normalize.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/demo.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/component.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/notification/css/ns-default.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/notification/css/ns-style-bar.css"), "html", null, true);
        echo "\"/>

    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

</head>
<body>

";
        // line 22
        if (array_key_exists("message", $context)) {
            // line 23
            echo "    <script type=\"text/javascript\">
        window.onload = function() {

            // create the notification
            var notification = new NotificationFx({
                message : '<span class=\"icon icon-megaphone\"></span><p>";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>',
                layout : 'bar',
                effect : 'slidetop',
                type : 'notice', // notice, warning or error
                onClose : function() {
                    bttn.disabled = false;
                }
            });

            // show the notification
            notification.show();

        }
    </script>
";
        }
        // line 43
        echo "<div class=\"container\">
    <header class=\"codrops-header\" style=\"margin-bottom: -100px\">
        <img class=\"center\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/Logo.jpg"), "html", null, true);
        echo " \" width=\"250px\"/><br><br>

    </header>
    <section>
        ";
        // line 49
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        // line 50
        echo "    </section>
</div>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/stepsForm.js"), "html", null, true);
        echo "\"></script>
<script>
    var theForm = document.getElementById( 'theForm' );

    new stepsForm( theForm, {
        onSubmit : function( form ) {
            // hide form
            classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

            /*

             or
             AJAX request (maybe show loading indicator while we don't have an answer..)
             */

            // let's just simulate something...
            var messageEl = theForm.querySelector( '.final-message' );
            messageEl.innerHTML = 'Thank you! Check email for instructions.';
            classie.addClass( messageEl, 'show' );
            form.submit();
        }
    } );
</script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/notification/js/notificationFx.js"), "html", null, true);
        echo "\"></script>
<hr>
<footer>
    <p align=\"center\"><strong>National Volunteering Secretariat, Sri Lanka </strong>&copy; 2014
</footer>
</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  307 => 176,  231 => 107,  225 => 104,  195 => 89,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 250,  428 => 247,  412 => 236,  403 => 231,  352 => 199,  344 => 194,  333 => 186,  317 => 176,  300 => 168,  284 => 155,  277 => 150,  255 => 119,  359 => 209,  346 => 198,  304 => 173,  297 => 171,  200 => 110,  198 => 109,  172 => 102,  473 => 276,  470 => 246,  449 => 259,  445 => 227,  433 => 224,  419 => 219,  399 => 212,  391 => 211,  382 => 208,  378 => 216,  373 => 204,  366 => 201,  357 => 198,  303 => 169,  290 => 158,  287 => 136,  206 => 110,  170 => 97,  188 => 87,  178 => 96,  150 => 75,  184 => 105,  129 => 66,  126 => 51,  20 => 1,  153 => 68,  146 => 64,  155 => 79,  292 => 135,  279 => 130,  267 => 145,  249 => 115,  223 => 123,  211 => 124,  197 => 88,  175 => 100,  104 => 46,  134 => 69,  152 => 87,  113 => 57,  76 => 30,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 226,  425 => 289,  406 => 214,  364 => 200,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 181,  263 => 124,  242 => 149,  236 => 131,  222 => 101,  216 => 113,  192 => 102,  160 => 82,  100 => 27,  257 => 152,  190 => 101,  124 => 63,  97 => 42,  81 => 24,  348 => 173,  338 => 169,  334 => 159,  329 => 166,  324 => 151,  319 => 162,  299 => 173,  245 => 115,  228 => 104,  212 => 111,  167 => 82,  137 => 76,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 234,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 185,  310 => 197,  308 => 175,  289 => 134,  260 => 155,  250 => 147,  248 => 137,  239 => 143,  233 => 105,  213 => 98,  181 => 81,  127 => 54,  84 => 30,  77 => 28,  205 => 110,  191 => 105,  174 => 90,  58 => 21,  65 => 23,  34 => 11,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 150,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 293,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 197,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 172,  306 => 195,  301 => 172,  296 => 160,  291 => 137,  286 => 344,  281 => 163,  276 => 340,  266 => 147,  261 => 153,  251 => 118,  234 => 107,  232 => 121,  185 => 109,  180 => 103,  165 => 94,  161 => 92,  148 => 78,  118 => 58,  114 => 53,  110 => 54,  90 => 43,  70 => 26,  343 => 221,  321 => 358,  315 => 146,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 120,  256 => 129,  253 => 116,  244 => 144,  237 => 144,  226 => 95,  218 => 126,  215 => 125,  210 => 113,  207 => 95,  202 => 123,  53 => 16,  480 => 280,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 261,  444 => 256,  440 => 148,  437 => 225,  435 => 146,  430 => 248,  427 => 143,  423 => 220,  413 => 134,  409 => 132,  407 => 131,  402 => 213,  398 => 228,  393 => 225,  387 => 222,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 209,  365 => 375,  362 => 210,  360 => 204,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 176,  309 => 97,  305 => 139,  298 => 139,  294 => 138,  285 => 164,  283 => 162,  278 => 86,  268 => 85,  264 => 154,  258 => 142,  252 => 116,  247 => 129,  241 => 126,  229 => 104,  220 => 119,  214 => 118,  177 => 80,  169 => 88,  140 => 70,  132 => 66,  128 => 68,  107 => 52,  61 => 21,  273 => 158,  269 => 157,  254 => 143,  243 => 138,  240 => 124,  238 => 108,  235 => 108,  230 => 82,  227 => 129,  224 => 121,  221 => 142,  219 => 121,  217 => 99,  208 => 109,  204 => 120,  179 => 94,  159 => 91,  143 => 80,  135 => 59,  119 => 60,  102 => 41,  71 => 25,  67 => 20,  63 => 22,  59 => 22,  93 => 29,  88 => 36,  78 => 30,  38 => 12,  28 => 3,  201 => 107,  196 => 115,  183 => 97,  171 => 77,  166 => 85,  163 => 72,  158 => 82,  156 => 79,  151 => 77,  142 => 63,  138 => 71,  136 => 60,  121 => 57,  117 => 65,  105 => 44,  91 => 36,  62 => 22,  49 => 15,  26 => 11,  87 => 25,  46 => 14,  44 => 13,  31 => 4,  94 => 45,  89 => 34,  85 => 33,  75 => 29,  68 => 25,  56 => 21,  24 => 6,  27 => 4,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 28,  69 => 26,  47 => 19,  40 => 11,  37 => 8,  22 => 1,  246 => 145,  157 => 84,  145 => 63,  139 => 78,  131 => 64,  123 => 53,  120 => 52,  115 => 58,  111 => 53,  108 => 59,  101 => 49,  98 => 40,  96 => 41,  83 => 43,  74 => 37,  66 => 25,  55 => 17,  52 => 18,  50 => 15,  43 => 11,  41 => 7,  35 => 10,  32 => 5,  29 => 4,  209 => 115,  203 => 93,  199 => 90,  193 => 87,  189 => 86,  187 => 84,  182 => 98,  176 => 72,  173 => 93,  168 => 90,  164 => 85,  162 => 74,  154 => 78,  149 => 76,  147 => 75,  144 => 61,  141 => 62,  133 => 57,  130 => 63,  125 => 52,  122 => 58,  116 => 57,  112 => 45,  109 => 45,  106 => 48,  103 => 50,  99 => 41,  95 => 48,  92 => 38,  86 => 43,  82 => 42,  80 => 31,  73 => 26,  64 => 23,  60 => 26,  57 => 24,  54 => 16,  51 => 20,  48 => 11,  45 => 14,  42 => 13,  39 => 6,  36 => 5,  33 => 3,  30 => 10,);
    }
}
