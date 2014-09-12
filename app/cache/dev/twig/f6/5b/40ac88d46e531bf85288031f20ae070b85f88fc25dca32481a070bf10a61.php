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
        return array (  792 => 488,  775 => 485,  749 => 479,  727 => 476,  706 => 473,  694 => 470,  679 => 466,  649 => 462,  634 => 456,  629 => 454,  549 => 411,  517 => 404,  386 => 159,  340 => 145,  307 => 128,  302 => 125,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  724 => 484,  718 => 482,  705 => 480,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  671 => 465,  668 => 464,  664 => 463,  646 => 451,  636 => 446,  626 => 443,  616 => 440,  587 => 434,  574 => 431,  565 => 430,  559 => 427,  553 => 425,  542 => 421,  536 => 419,  530 => 417,  377 => 129,  359 => 123,  356 => 122,  347 => 119,  328 => 139,  324 => 112,  293 => 120,  462 => 202,  439 => 195,  422 => 184,  408 => 176,  401 => 172,  394 => 168,  361 => 152,  351 => 141,  338 => 116,  335 => 134,  323 => 128,  320 => 127,  300 => 121,  275 => 105,  270 => 102,  267 => 101,  262 => 188,  233 => 87,  213 => 78,  367 => 155,  245 => 134,  167 => 71,  223 => 124,  438 => 89,  434 => 45,  425 => 13,  420 => 2,  417 => 143,  411 => 140,  403 => 196,  388 => 134,  363 => 153,  348 => 140,  333 => 115,  329 => 131,  325 => 129,  319 => 163,  304 => 157,  299 => 155,  289 => 196,  279 => 147,  274 => 110,  249 => 181,  190 => 89,  615 => 344,  606 => 449,  601 => 446,  594 => 335,  585 => 332,  581 => 331,  563 => 429,  551 => 424,  543 => 306,  539 => 304,  535 => 302,  533 => 301,  527 => 408,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  416 => 235,  412 => 234,  383 => 188,  371 => 156,  358 => 151,  350 => 120,  346 => 189,  342 => 137,  297 => 200,  280 => 194,  239 => 131,  225 => 125,  23 => 3,  194 => 68,  152 => 46,  231 => 129,  200 => 72,  188 => 90,  174 => 74,  150 => 55,  137 => 74,  222 => 83,  211 => 108,  205 => 104,  175 => 58,  197 => 69,  172 => 57,  160 => 71,  470 => 246,  449 => 198,  445 => 117,  441 => 196,  433 => 224,  419 => 236,  406 => 214,  399 => 212,  391 => 211,  389 => 160,  382 => 131,  378 => 157,  373 => 156,  366 => 201,  364 => 197,  357 => 198,  327 => 173,  308 => 109,  303 => 122,  290 => 119,  287 => 157,  228 => 126,  206 => 108,  192 => 91,  216 => 79,  191 => 67,  184 => 63,  178 => 59,  126 => 69,  100 => 36,  124 => 53,  20 => 1,  153 => 77,  146 => 60,  104 => 31,  97 => 41,  134 => 39,  127 => 35,  81 => 24,  76 => 25,  872 => 572,  868 => 571,  864 => 558,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 475,  701 => 485,  689 => 478,  680 => 476,  676 => 467,  645 => 452,  640 => 448,  635 => 448,  628 => 444,  603 => 439,  592 => 334,  583 => 415,  578 => 432,  575 => 412,  571 => 411,  546 => 423,  534 => 418,  510 => 362,  494 => 349,  473 => 261,  452 => 313,  431 => 189,  396 => 266,  334 => 141,  292 => 173,  288 => 118,  284 => 149,  282 => 168,  263 => 126,  255 => 101,  186 => 72,  170 => 84,  155 => 47,  129 => 58,  113 => 48,  84 => 25,  248 => 97,  236 => 128,  212 => 111,  198 => 89,  181 => 65,  58 => 14,  828 => 538,  824 => 537,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 20,  65 => 11,  34 => 5,  826 => 383,  822 => 302,  819 => 543,  815 => 531,  812 => 530,  799 => 249,  795 => 248,  786 => 243,  780 => 513,  774 => 509,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 478,  738 => 216,  732 => 487,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 472,  697 => 484,  690 => 469,  687 => 192,  684 => 191,  677 => 465,  672 => 185,  667 => 183,  660 => 464,  657 => 458,  655 => 457,  652 => 178,  642 => 449,  637 => 358,  632 => 447,  625 => 453,  622 => 452,  620 => 451,  617 => 162,  609 => 341,  604 => 155,  598 => 152,  591 => 436,  588 => 333,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 414,  564 => 138,  561 => 137,  557 => 314,  554 => 135,  552 => 134,  547 => 308,  541 => 129,  538 => 128,  532 => 410,  529 => 409,  524 => 125,  522 => 406,  516 => 120,  514 => 415,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 199,  446 => 197,  443 => 247,  432 => 2,  429 => 188,  421 => 388,  415 => 180,  410 => 383,  405 => 137,  400 => 379,  395 => 135,  390 => 375,  385 => 373,  380 => 158,  375 => 369,  370 => 367,  353 => 149,  349 => 358,  345 => 147,  331 => 140,  326 => 138,  316 => 168,  311 => 159,  306 => 286,  301 => 156,  296 => 121,  291 => 336,  286 => 112,  281 => 114,  276 => 111,  266 => 326,  261 => 125,  251 => 182,  234 => 90,  232 => 88,  185 => 75,  180 => 70,  165 => 83,  161 => 58,  148 => 65,  118 => 49,  114 => 36,  110 => 22,  90 => 27,  70 => 15,  343 => 146,  321 => 135,  315 => 131,  313 => 110,  295 => 182,  271 => 190,  265 => 105,  259 => 103,  256 => 96,  253 => 100,  244 => 133,  237 => 91,  226 => 84,  218 => 123,  215 => 123,  210 => 77,  207 => 76,  202 => 94,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 199,  444 => 149,  440 => 148,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 238,  413 => 280,  409 => 199,  407 => 138,  402 => 213,  398 => 136,  393 => 192,  387 => 164,  384 => 132,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 199,  355 => 150,  341 => 117,  337 => 169,  322 => 101,  314 => 161,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 153,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 141,  258 => 187,  252 => 136,  247 => 120,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 69,  169 => 90,  140 => 72,  132 => 58,  128 => 42,  107 => 53,  61 => 17,  273 => 96,  269 => 107,  254 => 137,  243 => 137,  240 => 145,  238 => 138,  235 => 89,  230 => 82,  227 => 86,  224 => 156,  221 => 80,  219 => 110,  217 => 75,  208 => 76,  204 => 78,  179 => 92,  159 => 57,  143 => 80,  135 => 46,  119 => 40,  102 => 30,  71 => 13,  67 => 16,  63 => 18,  59 => 13,  93 => 28,  88 => 32,  78 => 19,  38 => 7,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 66,  142 => 65,  138 => 56,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 33,  62 => 14,  49 => 14,  26 => 3,  87 => 26,  46 => 10,  44 => 10,  31 => 5,  94 => 21,  89 => 30,  85 => 23,  75 => 18,  68 => 30,  56 => 12,  24 => 2,  27 => 3,  25 => 35,  21 => 2,  19 => 1,  79 => 18,  72 => 18,  69 => 16,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 136,  157 => 80,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 31,  115 => 54,  111 => 47,  108 => 33,  101 => 30,  98 => 29,  96 => 37,  83 => 33,  74 => 27,  66 => 25,  55 => 13,  52 => 13,  50 => 22,  43 => 9,  41 => 7,  35 => 6,  32 => 6,  29 => 4,  209 => 113,  203 => 73,  199 => 93,  193 => 100,  189 => 66,  187 => 95,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 82,  149 => 79,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 51,  122 => 52,  116 => 57,  112 => 47,  109 => 52,  106 => 51,  103 => 50,  99 => 23,  95 => 27,  92 => 43,  86 => 34,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 20,  57 => 39,  54 => 19,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
