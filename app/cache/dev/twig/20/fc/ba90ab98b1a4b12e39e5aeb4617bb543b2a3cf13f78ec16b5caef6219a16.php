<?php

/* RidwanEntityBundle:Organizationcontactdetails:edit.html.twig */
class __TwigTemplate_20fcba90ab98b1a4b12e39e5aeb4617bb543b2a3cf13f78ec16b5caef6219a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"content\" class=\"span10\">
    <div class=\"row-fluid\">

        <br>
        <h2>Organization Contact Information</h2>
        <hr><br>
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

        <div class=\"control-group primary\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "
            <div class=\"controls\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "website"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Website"));
        echo "
            <div class=\"controls\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "website"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "website"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fax"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Fax Number"));
        echo "
            <div class=\"controls\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fax"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fax"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Phone Number"));
        echo "
            <div class=\"controls\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "streetnumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Street Number"));
        echo "
            <div class=\"controls\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "streetnumber"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "streetnumber"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "street"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Street Name"));
        echo "
            <div class=\"controls\">
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "street"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "street"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "city"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "City"));
        echo "
            <div class=\"controls\">
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "city"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "city"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "divisionalsecretary"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Divisional Secretary"));
        echo "
            <div class=\"controls\">
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "divisionalsecretary"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "divisionalsecretary"), 'widget');
        echo "</span>
            </div>
        </div>


        <div class=\"control-group primary\">
            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Country"));
        echo "
            <div class=\"controls\">
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "
            <div class=\"controls\">
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
                <span class=\"help-inline\">";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'widget');
        echo "</span>
            </div>
        </div>

        <br><br>

        ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RidwanEntityBundle:Organizationcontactdetails:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 63,  113 => 45,  76 => 29,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 302,  425 => 289,  406 => 273,  364 => 236,  356 => 232,  354 => 231,  335 => 214,  327 => 210,  325 => 209,  263 => 161,  242 => 149,  236 => 146,  222 => 134,  216 => 132,  192 => 119,  160 => 97,  100 => 55,  257 => 158,  190 => 118,  124 => 57,  97 => 48,  81 => 34,  348 => 173,  338 => 169,  334 => 168,  329 => 166,  324 => 164,  319 => 162,  299 => 156,  245 => 160,  228 => 119,  212 => 130,  167 => 82,  137 => 67,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 276,  389 => 260,  367 => 241,  347 => 223,  339 => 219,  318 => 201,  310 => 197,  308 => 196,  289 => 151,  260 => 155,  250 => 151,  248 => 151,  239 => 143,  233 => 151,  213 => 126,  181 => 110,  127 => 72,  84 => 31,  77 => 39,  205 => 111,  191 => 81,  174 => 105,  58 => 18,  65 => 21,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 150,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 1,  421 => 398,  415 => 395,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 369,  349 => 368,  345 => 367,  331 => 212,  326 => 360,  316 => 161,  311 => 354,  306 => 195,  301 => 350,  296 => 155,  291 => 346,  286 => 344,  281 => 342,  276 => 340,  266 => 133,  261 => 334,  251 => 330,  234 => 318,  232 => 121,  185 => 273,  180 => 74,  165 => 97,  161 => 64,  148 => 57,  118 => 47,  114 => 46,  110 => 52,  90 => 33,  70 => 25,  343 => 221,  321 => 358,  315 => 195,  313 => 194,  295 => 182,  271 => 338,  265 => 158,  259 => 159,  256 => 129,  253 => 153,  244 => 147,  237 => 144,  226 => 137,  218 => 131,  215 => 116,  210 => 129,  207 => 131,  202 => 123,  53 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 13,  435 => 146,  430 => 144,  427 => 143,  423 => 401,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 375,  362 => 110,  360 => 234,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 159,  309 => 97,  305 => 157,  298 => 91,  294 => 154,  285 => 177,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 128,  247 => 78,  241 => 162,  229 => 139,  220 => 70,  214 => 69,  177 => 65,  169 => 71,  140 => 55,  132 => 51,  128 => 59,  107 => 41,  61 => 30,  273 => 96,  269 => 163,  254 => 153,  243 => 88,  240 => 124,  238 => 147,  235 => 122,  230 => 82,  227 => 138,  224 => 71,  221 => 142,  219 => 76,  217 => 95,  208 => 89,  204 => 88,  179 => 69,  159 => 71,  143 => 56,  135 => 55,  119 => 42,  102 => 36,  71 => 24,  67 => 23,  63 => 20,  59 => 14,  93 => 50,  88 => 32,  78 => 27,  38 => 9,  28 => 3,  201 => 110,  196 => 121,  183 => 111,  171 => 83,  166 => 99,  163 => 81,  158 => 91,  156 => 64,  151 => 89,  142 => 84,  138 => 64,  136 => 79,  121 => 70,  117 => 68,  105 => 40,  91 => 41,  62 => 21,  49 => 20,  26 => 6,  87 => 25,  46 => 14,  44 => 12,  31 => 4,  94 => 45,  89 => 32,  85 => 28,  75 => 25,  68 => 22,  56 => 22,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 29,  72 => 16,  69 => 36,  47 => 9,  40 => 8,  37 => 6,  22 => 1,  246 => 328,  157 => 91,  145 => 66,  139 => 56,  131 => 60,  123 => 47,  120 => 40,  115 => 67,  111 => 54,  108 => 53,  101 => 39,  98 => 35,  96 => 37,  83 => 31,  74 => 26,  66 => 24,  55 => 27,  52 => 16,  50 => 15,  43 => 9,  41 => 5,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 122,  199 => 86,  193 => 115,  189 => 71,  187 => 80,  182 => 78,  176 => 72,  173 => 72,  168 => 72,  164 => 69,  162 => 57,  154 => 94,  149 => 67,  147 => 61,  144 => 55,  141 => 77,  133 => 66,  130 => 53,  125 => 64,  122 => 48,  116 => 41,  112 => 62,  109 => 57,  106 => 50,  103 => 32,  99 => 46,  95 => 35,  92 => 37,  86 => 47,  82 => 28,  80 => 45,  73 => 28,  64 => 20,  60 => 22,  57 => 11,  54 => 16,  51 => 14,  48 => 14,  45 => 13,  42 => 10,  39 => 10,  36 => 7,  33 => 7,  30 => 7,);
    }
}
