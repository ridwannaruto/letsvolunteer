<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_f65b40ac88d46e531bf85288031f20ae070b85f88fc25dca32481a070bf10a61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 485,  771 => 481,  723 => 472,  690 => 466,  673 => 461,  645 => 458,  630 => 452,  618 => 448,  597 => 442,  525 => 405,  523 => 404,  386 => 159,  340 => 145,  302 => 125,  288 => 118,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  896 => 573,  893 => 572,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  862 => 557,  848 => 548,  844 => 546,  830 => 539,  810 => 529,  796 => 521,  780 => 513,  774 => 509,  762 => 504,  745 => 475,  740 => 491,  737 => 490,  724 => 484,  718 => 482,  705 => 480,  702 => 469,  698 => 468,  696 => 476,  686 => 465,  678 => 463,  668 => 464,  642 => 449,  640 => 448,  628 => 444,  616 => 447,  603 => 439,  591 => 436,  578 => 432,  559 => 427,  546 => 423,  534 => 418,  530 => 417,  514 => 415,  377 => 129,  328 => 139,  293 => 120,  462 => 202,  422 => 184,  401 => 172,  394 => 168,  361 => 152,  323 => 128,  320 => 127,  275 => 105,  270 => 102,  262 => 188,  351 => 141,  617 => 289,  612 => 287,  587 => 434,  566 => 264,  522 => 255,  516 => 251,  505 => 249,  501 => 248,  494 => 244,  454 => 220,  332 => 176,  186 => 72,  438 => 89,  420 => 2,  417 => 143,  411 => 140,  388 => 134,  363 => 153,  274 => 110,  194 => 68,  637 => 358,  625 => 450,  615 => 344,  609 => 286,  606 => 340,  594 => 335,  588 => 333,  585 => 332,  581 => 331,  563 => 410,  557 => 314,  547 => 259,  543 => 306,  539 => 256,  535 => 302,  527 => 416,  521 => 295,  513 => 400,  509 => 290,  467 => 260,  431 => 189,  416 => 235,  383 => 188,  371 => 156,  358 => 151,  350 => 120,  342 => 137,  280 => 194,  23 => 3,  307 => 128,  231 => 129,  225 => 146,  195 => 91,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 195,  434 => 45,  428 => 247,  412 => 210,  403 => 196,  352 => 199,  344 => 194,  333 => 115,  317 => 208,  300 => 121,  284 => 149,  277 => 150,  255 => 101,  359 => 123,  346 => 189,  304 => 157,  297 => 200,  200 => 72,  198 => 92,  172 => 57,  473 => 225,  470 => 246,  449 => 198,  445 => 117,  433 => 224,  419 => 236,  399 => 212,  391 => 211,  382 => 131,  378 => 157,  373 => 156,  366 => 201,  357 => 180,  303 => 122,  290 => 119,  287 => 136,  206 => 68,  170 => 84,  188 => 90,  178 => 59,  150 => 55,  184 => 63,  129 => 43,  126 => 42,  20 => 1,  153 => 77,  146 => 79,  155 => 47,  292 => 135,  279 => 147,  267 => 101,  249 => 181,  223 => 118,  211 => 99,  197 => 69,  175 => 58,  104 => 31,  134 => 39,  152 => 46,  113 => 48,  76 => 25,  903 => 622,  891 => 571,  882 => 609,  878 => 608,  854 => 552,  838 => 544,  834 => 585,  821 => 575,  803 => 487,  782 => 550,  769 => 547,  759 => 540,  732 => 487,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 457,  652 => 474,  648 => 473,  614 => 445,  574 => 431,  553 => 425,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 196,  425 => 13,  406 => 214,  364 => 197,  356 => 122,  354 => 329,  335 => 134,  327 => 173,  325 => 129,  263 => 126,  242 => 149,  236 => 80,  222 => 83,  216 => 79,  192 => 91,  160 => 71,  100 => 36,  257 => 152,  190 => 89,  124 => 53,  97 => 41,  81 => 24,  348 => 140,  338 => 116,  334 => 141,  329 => 131,  324 => 112,  319 => 163,  299 => 155,  245 => 152,  228 => 130,  212 => 71,  167 => 71,  137 => 82,  975 => 609,  966 => 652,  962 => 651,  959 => 602,  955 => 600,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 579,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 538,  824 => 537,  818 => 564,  812 => 530,  806 => 488,  794 => 557,  788 => 484,  773 => 548,  764 => 505,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 474,  687 => 489,  682 => 464,  679 => 486,  675 => 462,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 442,  601 => 338,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 176,  389 => 160,  367 => 155,  347 => 119,  339 => 219,  318 => 185,  310 => 156,  308 => 109,  289 => 196,  260 => 144,  250 => 147,  248 => 97,  239 => 131,  233 => 87,  213 => 78,  181 => 65,  127 => 35,  84 => 25,  77 => 20,  205 => 96,  191 => 67,  174 => 74,  58 => 14,  65 => 11,  34 => 5,  864 => 558,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 543,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 531,  811 => 256,  807 => 528,  800 => 523,  798 => 248,  790 => 519,  784 => 482,  778 => 240,  776 => 239,  770 => 507,  767 => 234,  754 => 499,  750 => 534,  742 => 474,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 471,  701 => 196,  694 => 467,  691 => 193,  688 => 192,  681 => 188,  676 => 467,  671 => 465,  664 => 463,  661 => 317,  659 => 180,  656 => 460,  646 => 451,  641 => 170,  636 => 446,  629 => 456,  626 => 443,  624 => 164,  621 => 449,  613 => 158,  608 => 156,  602 => 445,  595 => 151,  592 => 285,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 430,  561 => 137,  558 => 136,  556 => 135,  551 => 424,  545 => 407,  542 => 421,  536 => 419,  533 => 301,  528 => 406,  526 => 125,  520 => 121,  518 => 402,  510 => 115,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 199,  446 => 197,  443 => 247,  432 => 2,  429 => 188,  421 => 243,  415 => 180,  410 => 393,  405 => 137,  400 => 389,  395 => 135,  390 => 385,  385 => 383,  380 => 158,  375 => 379,  370 => 377,  353 => 149,  349 => 368,  345 => 147,  331 => 140,  326 => 138,  316 => 168,  311 => 159,  306 => 205,  301 => 156,  296 => 121,  291 => 151,  286 => 112,  281 => 114,  276 => 111,  266 => 147,  261 => 153,  251 => 182,  234 => 90,  232 => 88,  185 => 75,  180 => 70,  165 => 83,  161 => 58,  148 => 65,  118 => 49,  114 => 36,  110 => 22,  90 => 27,  70 => 15,  343 => 146,  321 => 135,  315 => 131,  313 => 110,  295 => 182,  271 => 190,  265 => 105,  259 => 103,  256 => 96,  253 => 100,  244 => 133,  237 => 91,  226 => 84,  218 => 126,  215 => 72,  210 => 77,  207 => 76,  202 => 94,  53 => 12,  480 => 280,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 199,  444 => 256,  440 => 148,  437 => 244,  435 => 146,  430 => 248,  427 => 143,  423 => 212,  413 => 134,  409 => 199,  407 => 138,  402 => 206,  398 => 136,  393 => 192,  387 => 164,  384 => 132,  381 => 187,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 204,  355 => 150,  341 => 117,  337 => 178,  322 => 101,  314 => 161,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 153,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 141,  258 => 187,  252 => 125,  247 => 120,  241 => 93,  229 => 87,  220 => 81,  214 => 114,  177 => 69,  169 => 88,  140 => 76,  132 => 58,  128 => 42,  107 => 45,  61 => 17,  273 => 158,  269 => 107,  254 => 137,  243 => 137,  240 => 150,  238 => 108,  235 => 89,  230 => 79,  227 => 86,  224 => 76,  221 => 80,  219 => 110,  217 => 73,  208 => 76,  204 => 78,  179 => 94,  159 => 57,  143 => 76,  135 => 46,  119 => 40,  102 => 30,  71 => 13,  67 => 16,  63 => 18,  59 => 13,  93 => 28,  88 => 32,  78 => 19,  38 => 7,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 77,  142 => 76,  138 => 56,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 33,  62 => 14,  49 => 14,  26 => 3,  87 => 26,  46 => 10,  44 => 10,  31 => 5,  94 => 21,  89 => 30,  85 => 23,  75 => 18,  68 => 30,  56 => 12,  24 => 2,  27 => 3,  25 => 35,  21 => 2,  19 => 1,  79 => 18,  72 => 18,  69 => 16,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 136,  157 => 84,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 31,  115 => 54,  111 => 47,  108 => 33,  101 => 30,  98 => 29,  96 => 37,  83 => 33,  74 => 27,  66 => 25,  55 => 13,  52 => 13,  50 => 22,  43 => 9,  41 => 7,  35 => 6,  32 => 6,  29 => 4,  209 => 99,  203 => 73,  199 => 93,  193 => 100,  189 => 66,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 82,  149 => 91,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 51,  122 => 73,  116 => 57,  112 => 47,  109 => 52,  106 => 51,  103 => 64,  99 => 23,  95 => 27,  92 => 43,  86 => 43,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 20,  57 => 39,  54 => 19,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
