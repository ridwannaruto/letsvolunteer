<?php

/* RidwanUserBundle:Welcome:Organizationcontact.html.twig */
class __TwigTemplate_025fa4d869e075437e65c7ee419e92cd83d742d7b60755c80d95287548a6db41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'dashboard' => array($this, 'block_dashboard'),
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

    // line 2
    public function block_dashboard($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<br>
<div id=\"content\" class=\"span10\">
    <div class=\"row-fluid\">
        <h1>Contact Information</h1>
        <hr>


        <br><br>
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "myform", "class" => "form-horizontal center", "autocomplete" => "off")));
        echo "
        <div class=\"control-group primary\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Website URL"));
        echo "

            <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website"), 'errors');
        echo "</span>
            </div>

        </div>

        <div class=\"control-group primary\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Public email"));
        echo "

            <div class=\"controls\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "</span>
            </div>

        </div>


        <div class=\"control-group primary\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Landline"));
        echo "

            <div class=\"controls\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors');
        echo "</span>
            </div>

        </div>

        <div class=\"control-group primary\">
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Fax Number"));
        echo "

            <div class=\"controls\">
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'errors');
        echo "</span>
            </div>

        </div>

        <div class=\"control-group primary\">
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "streetnumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Street Number"));
        echo "

            <div class=\"controls\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "streetnumber"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "streetnumber"), 'errors');
        echo "</span>
            </div>

        </div>


        <div class=\"control-group primary\">
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Street"));
        echo "

            <div class=\"controls\">
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'errors');
        echo "</span>
            </div>

        </div>

        <div class=\"control-group primary\">
            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "City "));
        echo "

            <div class=\"controls\">
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "</span>
            </div>

        </div>


        <div class=\"control-group primary\">
            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "divisionalsecretary"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Divisional Secretary"));
        echo "

            <div class=\"controls\">
                ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "divisionalsecretary"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "divisionalsecretary"), 'errors');
        echo "</span>
            </div>

        </div>

        <div class=\"control-group primary\">
            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Country"));
        echo "

            <div class=\"controls\">
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'errors');
        echo "</span>
            </div>

        </div>




        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <div class=\"control-group primary\">
            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "

            <div class=\"controls\">
                <button class=\"btn btn-success\" type=\"submit\">Submit</button>
                <span class=\"help-inline\">";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'errors');
        echo "</span>
            </div>

        </div>

        </form><!-- /fs-form -->

    </div>

";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:Organizationcontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 89,  420 => 2,  417 => 1,  411 => 202,  388 => 190,  363 => 180,  274 => 145,  194 => 91,  637 => 358,  625 => 348,  615 => 344,  609 => 341,  606 => 340,  594 => 335,  588 => 333,  585 => 332,  581 => 331,  563 => 315,  557 => 314,  547 => 308,  543 => 306,  539 => 304,  535 => 302,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  431 => 44,  416 => 235,  383 => 188,  371 => 201,  358 => 178,  350 => 191,  342 => 188,  280 => 141,  23 => 3,  307 => 176,  231 => 129,  225 => 125,  195 => 89,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 45,  428 => 247,  412 => 234,  403 => 196,  352 => 199,  344 => 194,  333 => 168,  317 => 176,  300 => 168,  284 => 149,  277 => 150,  255 => 119,  359 => 209,  346 => 189,  304 => 157,  297 => 155,  200 => 110,  198 => 92,  172 => 77,  473 => 261,  470 => 246,  449 => 250,  445 => 117,  433 => 224,  419 => 236,  399 => 212,  391 => 211,  382 => 208,  378 => 186,  373 => 184,  366 => 201,  357 => 198,  303 => 169,  290 => 158,  287 => 136,  206 => 110,  170 => 49,  188 => 88,  178 => 81,  150 => 80,  184 => 96,  129 => 56,  126 => 44,  20 => 1,  153 => 62,  146 => 79,  155 => 70,  292 => 135,  279 => 147,  267 => 145,  249 => 135,  223 => 124,  211 => 99,  197 => 103,  175 => 100,  104 => 48,  134 => 73,  152 => 87,  113 => 54,  76 => 30,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 90,  425 => 13,  406 => 214,  364 => 197,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 166,  263 => 126,  242 => 149,  236 => 132,  222 => 119,  216 => 113,  192 => 91,  160 => 71,  100 => 36,  257 => 152,  190 => 89,  124 => 53,  97 => 39,  81 => 29,  348 => 174,  338 => 169,  334 => 159,  329 => 167,  324 => 151,  319 => 163,  299 => 155,  245 => 115,  228 => 110,  212 => 111,  167 => 48,  137 => 53,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 338,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 234,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 185,  310 => 197,  308 => 175,  289 => 151,  260 => 155,  250 => 147,  248 => 137,  239 => 131,  233 => 112,  213 => 101,  181 => 84,  127 => 54,  84 => 34,  77 => 28,  205 => 96,  191 => 100,  174 => 80,  58 => 18,  65 => 20,  34 => 4,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 334,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 310,  545 => 130,  542 => 129,  536 => 128,  533 => 301,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 199,  446 => 45,  443 => 247,  432 => 2,  429 => 223,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 176,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 159,  306 => 195,  301 => 156,  296 => 160,  291 => 137,  286 => 344,  281 => 163,  276 => 340,  266 => 147,  261 => 153,  251 => 141,  234 => 129,  232 => 121,  185 => 100,  180 => 95,  165 => 94,  161 => 92,  148 => 65,  118 => 51,  114 => 47,  110 => 46,  90 => 43,  70 => 37,  343 => 221,  321 => 358,  315 => 146,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 139,  256 => 129,  253 => 123,  244 => 133,  237 => 144,  226 => 95,  218 => 126,  215 => 100,  210 => 113,  207 => 98,  202 => 123,  53 => 16,  480 => 280,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 200,  444 => 256,  440 => 148,  437 => 244,  435 => 146,  430 => 248,  427 => 143,  423 => 238,  413 => 134,  409 => 199,  407 => 131,  402 => 213,  398 => 194,  393 => 192,  387 => 222,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 182,  365 => 375,  362 => 210,  360 => 204,  355 => 106,  341 => 170,  337 => 169,  322 => 101,  314 => 161,  312 => 176,  309 => 159,  305 => 139,  298 => 139,  294 => 153,  285 => 164,  283 => 162,  278 => 86,  268 => 85,  264 => 141,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 108,  220 => 117,  214 => 118,  177 => 83,  169 => 88,  140 => 76,  132 => 58,  128 => 46,  107 => 45,  61 => 20,  273 => 158,  269 => 143,  254 => 137,  243 => 137,  240 => 116,  238 => 108,  235 => 116,  230 => 82,  227 => 129,  224 => 121,  221 => 111,  219 => 110,  217 => 102,  208 => 109,  204 => 120,  179 => 94,  159 => 71,  143 => 66,  135 => 59,  119 => 55,  102 => 48,  71 => 25,  67 => 27,  63 => 22,  59 => 21,  93 => 44,  88 => 33,  78 => 29,  38 => 11,  28 => 3,  201 => 104,  196 => 115,  183 => 96,  171 => 72,  166 => 88,  163 => 87,  158 => 64,  156 => 70,  151 => 77,  142 => 76,  138 => 75,  136 => 59,  121 => 51,  117 => 65,  105 => 50,  91 => 36,  62 => 19,  49 => 14,  26 => 2,  87 => 41,  46 => 13,  44 => 13,  31 => 4,  94 => 45,  89 => 36,  85 => 32,  75 => 28,  68 => 28,  56 => 21,  24 => 6,  27 => 4,  25 => 1,  21 => 2,  19 => 1,  79 => 30,  72 => 24,  69 => 25,  47 => 13,  40 => 11,  37 => 5,  22 => 1,  246 => 145,  157 => 84,  145 => 78,  139 => 60,  131 => 64,  123 => 53,  120 => 50,  115 => 54,  111 => 53,  108 => 38,  101 => 40,  98 => 40,  96 => 35,  83 => 43,  74 => 25,  66 => 25,  55 => 16,  52 => 15,  50 => 14,  43 => 13,  41 => 9,  35 => 8,  32 => 5,  29 => 2,  209 => 113,  203 => 106,  199 => 105,  193 => 100,  189 => 99,  187 => 84,  182 => 84,  176 => 92,  173 => 93,  168 => 77,  164 => 76,  162 => 66,  154 => 72,  149 => 67,  147 => 75,  144 => 64,  141 => 55,  133 => 57,  130 => 59,  125 => 52,  122 => 52,  116 => 49,  112 => 39,  109 => 45,  106 => 50,  103 => 44,  99 => 45,  95 => 39,  92 => 34,  86 => 43,  82 => 30,  80 => 31,  73 => 26,  64 => 23,  60 => 22,  57 => 19,  54 => 19,  51 => 13,  48 => 17,  45 => 13,  42 => 12,  39 => 6,  36 => 11,  33 => 10,  30 => 9,);
    }
}
