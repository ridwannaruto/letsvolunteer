<?php

/* RidwanSiteBundle:Authentication:register.html.twig */
class __TwigTemplate_9c5bdcc516975b17a07afdc021ed9deea3bd62030f1546640e75b8d8a76e8de9 extends Twig_Template
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

    <link rel=\"shortcut icon\" href=\"../favicon.ico\">
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
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

</head>
<body>
<div class=\"container\">
    <header class=\"codrops-header\">
        <img class=\"center\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/logo3.png"), "html", null, true);
        echo " \" width=\"400px\"/><br><br>

    </header>
                <section>
                ";
        // line 24
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_registration_register"), array());
        // line 25
        echo "                </section>
</div>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
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
<hr>
<footer>
    <p align=\"center\"><strong>Computer Science & Engineering Department, University of Moratuwa </strong>&copy; 2014
</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Authentication:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 244,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 207,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 165,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 153,  594 => 151,  591 => 150,  589 => 149,  585 => 147,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 136,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 128,  532 => 127,  527 => 126,  525 => 125,  519 => 121,  517 => 120,  509 => 115,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 88,  452 => 75,  449 => 74,  445 => 45,  442 => 44,  436 => 13,  431 => 2,  428 => 1,  422 => 393,  420 => 390,  414 => 387,  404 => 383,  399 => 381,  394 => 379,  389 => 377,  369 => 369,  364 => 367,  359 => 365,  352 => 361,  348 => 360,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 352,  320 => 350,  310 => 346,  300 => 342,  290 => 338,  280 => 334,  275 => 332,  270 => 330,  260 => 326,  255 => 324,  250 => 322,  245 => 320,  233 => 310,  231 => 308,  185 => 266,  180 => 74,  165 => 66,  161 => 64,  148 => 57,  118 => 40,  114 => 39,  110 => 38,  90 => 33,  70 => 28,  343 => 217,  321 => 197,  315 => 348,  313 => 194,  295 => 340,  271 => 161,  265 => 328,  259 => 155,  256 => 154,  253 => 153,  244 => 147,  237 => 144,  225 => 136,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 125,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 385,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 344,  298 => 91,  294 => 90,  285 => 336,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 44,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 145,  238 => 85,  235 => 143,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 63,  143 => 56,  135 => 53,  119 => 42,  102 => 36,  71 => 20,  67 => 15,  63 => 15,  59 => 24,  93 => 34,  88 => 6,  78 => 30,  38 => 6,  28 => 3,  201 => 280,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 62,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 27,  62 => 26,  49 => 7,  26 => 6,  87 => 25,  46 => 7,  44 => 14,  31 => 11,  94 => 34,  89 => 20,  85 => 28,  75 => 17,  68 => 14,  56 => 9,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 28,  47 => 9,  40 => 13,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 53,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 36,  98 => 35,  96 => 35,  83 => 25,  74 => 29,  66 => 27,  55 => 15,  52 => 20,  50 => 17,  43 => 14,  41 => 5,  35 => 12,  32 => 4,  29 => 4,  209 => 82,  203 => 282,  199 => 124,  193 => 73,  189 => 71,  187 => 84,  182 => 234,  176 => 72,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 55,  141 => 54,  133 => 55,  130 => 46,  125 => 44,  122 => 41,  116 => 41,  112 => 42,  109 => 38,  106 => 37,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 31,  80 => 41,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 13,  36 => 3,  33 => 2,  30 => 7,);
    }
}
