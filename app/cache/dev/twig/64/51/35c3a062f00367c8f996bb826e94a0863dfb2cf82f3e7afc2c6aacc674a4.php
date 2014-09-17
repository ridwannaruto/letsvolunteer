<?php

/* RidwanUserBundle:Welcome:personal.html.twig */
class __TwigTemplate_645135c3a062f00367c8f996bb826e94a0863dfb2cf82f3e7afc2c6aacc674a4 extends Twig_Template
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

    // line 3
    public function block_dashboard($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <br>
    <div id=\"content\" class=\"span10\">
        <div class=\"row-fluid\">

            <h1>Personal Information</h1>
            <hr>



    <br><br>
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "myform", "class" => "form-horizontal center fs-form fs-form-full", "autocomplete" => "off")));
        echo "



            <div class=\"control-group primary\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "First Name"));
        echo "

                <div class=\"controls\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'errors');
        echo "</span>
                </div>
            </div>

            <div class=\"control-group primary\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Last Name"));
        echo "

                <div class=\"controls\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'errors');
        echo "</span>
                </div>
            </div>


            <div class=\"control-group primary\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Category"));
        echo "

                <div class=\"controls\">
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'errors');
        echo "</span>
                </div>
            </div>

            <div class=\"control-group primary\">
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nationality"));
        echo "

                <div class=\"controls\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality"), 'errors');
        echo "</span>
                </div>
            </div>


            <div class=\"control-group primary\">
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nicorpassport"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Identification"));
        echo "

                <div class=\"controls\">
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nicorpassport"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q4", "placeholder" => "NIC or Passport Number")));
        echo "
                    <span class=\"help-inline\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nicorpassport"), 'errors');
        echo "</span>
                </div>
            </div>

            <div class=\"control-group primary\">
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date of Birth"));
        echo "

                <div class=\"controls\">
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                    <span class=\"help-inline\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'errors');
        echo "</span>
                </div>
            </div>

            <div class=\"control-group primary\">
                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Sex"));
        echo "

                <div class=\"controls\">
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'errors');
        echo "</span>
                </div>
            </div>


            <div class=\"control-group primary\">
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Civilstatus"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Civil Status"));
        echo "

                <div class=\"controls\">
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Civilstatus"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Civilstatus"), 'errors');
        echo "</span>
                </div>
            </div>


            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
            <div class=\"control-group primary\">
                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Civilstatus"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "

                <div class=\"controls\">
                    <button class=\"btn btn-success\" type=\"submit\">Submit</button>
                    <span class=\"help-inline\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Civilstatus"), 'errors');
        echo "</span>
                </div>
            </div>


    </form>

</div></div>


";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:personal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 88,  438 => 89,  420 => 2,  417 => 1,  411 => 202,  388 => 190,  363 => 180,  274 => 145,  194 => 106,  637 => 358,  625 => 348,  615 => 344,  609 => 341,  606 => 340,  594 => 335,  588 => 333,  585 => 332,  581 => 331,  563 => 315,  557 => 314,  547 => 308,  543 => 306,  539 => 304,  535 => 302,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  431 => 44,  416 => 235,  383 => 188,  371 => 201,  358 => 178,  350 => 191,  342 => 188,  280 => 141,  23 => 3,  307 => 176,  231 => 129,  225 => 125,  195 => 89,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 45,  428 => 247,  412 => 234,  403 => 196,  352 => 199,  344 => 194,  333 => 168,  317 => 176,  300 => 168,  284 => 149,  277 => 150,  255 => 119,  359 => 209,  346 => 189,  304 => 157,  297 => 155,  200 => 104,  198 => 92,  172 => 77,  473 => 261,  470 => 246,  449 => 250,  445 => 117,  433 => 224,  419 => 236,  399 => 212,  391 => 211,  382 => 208,  378 => 186,  373 => 184,  366 => 201,  357 => 198,  303 => 169,  290 => 158,  287 => 136,  206 => 107,  170 => 49,  188 => 98,  178 => 81,  150 => 80,  184 => 96,  129 => 56,  126 => 44,  20 => 1,  153 => 62,  146 => 79,  155 => 72,  292 => 135,  279 => 147,  267 => 145,  249 => 135,  223 => 118,  211 => 99,  197 => 103,  175 => 91,  104 => 45,  134 => 73,  152 => 87,  113 => 54,  76 => 25,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 90,  425 => 13,  406 => 214,  364 => 197,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 166,  263 => 126,  242 => 149,  236 => 132,  222 => 128,  216 => 103,  192 => 91,  160 => 84,  100 => 44,  257 => 152,  190 => 89,  124 => 53,  97 => 39,  81 => 34,  348 => 174,  338 => 169,  334 => 159,  329 => 167,  324 => 151,  319 => 163,  299 => 155,  245 => 115,  228 => 130,  212 => 111,  167 => 78,  137 => 63,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 338,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 234,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 185,  310 => 197,  308 => 175,  289 => 151,  260 => 155,  250 => 147,  248 => 137,  239 => 131,  233 => 112,  213 => 101,  181 => 84,  127 => 69,  84 => 38,  77 => 34,  205 => 96,  191 => 100,  174 => 80,  58 => 29,  65 => 31,  34 => 6,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 334,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 310,  545 => 130,  542 => 129,  536 => 128,  533 => 301,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 199,  446 => 45,  443 => 247,  432 => 2,  429 => 223,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 176,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 159,  306 => 195,  301 => 156,  296 => 160,  291 => 137,  286 => 344,  281 => 163,  276 => 340,  266 => 147,  261 => 153,  251 => 141,  234 => 129,  232 => 121,  185 => 100,  180 => 95,  165 => 87,  161 => 86,  148 => 79,  118 => 53,  114 => 47,  110 => 46,  90 => 41,  70 => 34,  343 => 221,  321 => 358,  315 => 146,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 139,  256 => 129,  253 => 123,  244 => 133,  237 => 144,  226 => 95,  218 => 126,  215 => 123,  210 => 108,  207 => 98,  202 => 115,  53 => 16,  480 => 280,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 200,  444 => 256,  440 => 148,  437 => 244,  435 => 146,  430 => 248,  427 => 143,  423 => 238,  413 => 134,  409 => 199,  407 => 131,  402 => 213,  398 => 194,  393 => 192,  387 => 222,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 182,  365 => 375,  362 => 210,  360 => 204,  355 => 106,  341 => 170,  337 => 169,  322 => 101,  314 => 161,  312 => 176,  309 => 159,  305 => 139,  298 => 139,  294 => 153,  285 => 164,  283 => 162,  278 => 86,  268 => 85,  264 => 141,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 108,  220 => 117,  214 => 118,  177 => 82,  169 => 88,  140 => 76,  132 => 58,  128 => 53,  107 => 45,  61 => 20,  273 => 158,  269 => 143,  254 => 137,  243 => 137,  240 => 116,  238 => 108,  235 => 116,  230 => 82,  227 => 129,  224 => 121,  221 => 125,  219 => 110,  217 => 102,  208 => 117,  204 => 97,  179 => 94,  159 => 73,  143 => 76,  135 => 59,  119 => 55,  102 => 47,  71 => 34,  67 => 26,  63 => 25,  59 => 19,  93 => 44,  88 => 41,  78 => 29,  38 => 11,  28 => 3,  201 => 104,  196 => 92,  183 => 96,  171 => 90,  166 => 88,  163 => 87,  158 => 83,  156 => 83,  151 => 77,  142 => 76,  138 => 75,  136 => 59,  121 => 67,  117 => 65,  105 => 50,  91 => 33,  62 => 30,  49 => 17,  26 => 2,  87 => 31,  46 => 13,  44 => 13,  31 => 4,  94 => 41,  89 => 36,  85 => 35,  75 => 31,  68 => 28,  56 => 21,  24 => 6,  27 => 4,  25 => 1,  21 => 2,  19 => 1,  79 => 30,  72 => 24,  69 => 32,  47 => 13,  40 => 11,  37 => 7,  22 => 1,  246 => 145,  157 => 84,  145 => 78,  139 => 75,  131 => 60,  123 => 53,  120 => 48,  115 => 54,  111 => 42,  108 => 38,  101 => 40,  98 => 40,  96 => 35,  83 => 30,  74 => 25,  66 => 33,  55 => 18,  52 => 15,  50 => 14,  43 => 13,  41 => 9,  35 => 8,  32 => 5,  29 => 3,  209 => 99,  203 => 106,  199 => 105,  193 => 100,  189 => 99,  187 => 84,  182 => 95,  176 => 92,  173 => 81,  168 => 77,  164 => 76,  162 => 66,  154 => 82,  149 => 69,  147 => 75,  144 => 78,  141 => 64,  133 => 72,  130 => 59,  125 => 68,  122 => 54,  116 => 49,  112 => 50,  109 => 45,  106 => 50,  103 => 44,  99 => 45,  95 => 34,  92 => 34,  86 => 43,  82 => 39,  80 => 31,  73 => 33,  64 => 32,  60 => 31,  57 => 22,  54 => 19,  51 => 13,  48 => 14,  45 => 13,  42 => 12,  39 => 6,  36 => 11,  33 => 10,  30 => 9,);
    }
}
