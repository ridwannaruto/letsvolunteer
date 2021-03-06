<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_375a52a0501ace01873f2ea9a7ec77ffba0f69fb4000eab8f67afe3c2d693cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  971 => 304,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  881 => 265,  876 => 263,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  826 => 247,  819 => 244,  808 => 235,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 227,  791 => 226,  789 => 225,  786 => 224,  779 => 216,  751 => 206,  748 => 205,  735 => 198,  728 => 192,  717 => 186,  714 => 185,  699 => 179,  683 => 170,  663 => 160,  658 => 158,  649 => 153,  633 => 144,  627 => 140,  620 => 136,  599 => 128,  584 => 122,  579 => 118,  576 => 115,  575 => 114,  570 => 112,  567 => 110,  562 => 108,  554 => 103,  552 => 102,  550 => 101,  548 => 100,  544 => 99,  541 => 97,  519 => 91,  477 => 82,  472 => 79,  463 => 76,  397 => 55,  330 => 23,  282 => 3,  792 => 485,  771 => 481,  723 => 190,  690 => 174,  673 => 165,  645 => 150,  630 => 452,  618 => 448,  597 => 442,  525 => 405,  523 => 404,  386 => 159,  340 => 145,  302 => 125,  288 => 118,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 334,  1055 => 648,  1051 => 332,  1048 => 331,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  972 => 608,  970 => 607,  967 => 303,  963 => 302,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 287,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  896 => 573,  893 => 572,  888 => 270,  884 => 267,  880 => 566,  874 => 562,  870 => 560,  862 => 557,  848 => 548,  844 => 546,  830 => 250,  810 => 529,  796 => 521,  780 => 513,  774 => 212,  762 => 504,  745 => 203,  740 => 491,  737 => 199,  724 => 484,  718 => 482,  705 => 480,  702 => 469,  698 => 468,  696 => 178,  686 => 465,  678 => 168,  668 => 163,  642 => 449,  640 => 148,  628 => 444,  616 => 447,  603 => 439,  591 => 436,  578 => 432,  559 => 427,  546 => 423,  534 => 418,  530 => 417,  514 => 415,  377 => 47,  328 => 22,  293 => 120,  462 => 202,  422 => 184,  401 => 172,  394 => 54,  361 => 152,  323 => 19,  320 => 127,  275 => 330,  270 => 316,  262 => 188,  351 => 141,  617 => 135,  612 => 287,  587 => 123,  566 => 264,  522 => 92,  516 => 251,  505 => 88,  501 => 248,  494 => 244,  454 => 220,  332 => 176,  186 => 190,  438 => 89,  420 => 2,  417 => 143,  411 => 140,  388 => 134,  363 => 153,  274 => 110,  194 => 197,  637 => 358,  625 => 450,  615 => 344,  609 => 129,  606 => 340,  594 => 127,  588 => 333,  585 => 332,  581 => 331,  563 => 410,  557 => 314,  547 => 259,  543 => 306,  539 => 96,  535 => 302,  527 => 416,  521 => 295,  513 => 400,  509 => 290,  467 => 260,  431 => 189,  416 => 235,  383 => 49,  371 => 156,  358 => 151,  350 => 120,  342 => 30,  280 => 194,  23 => 3,  307 => 128,  231 => 129,  225 => 146,  195 => 91,  496 => 285,  487 => 282,  484 => 281,  465 => 77,  439 => 71,  434 => 45,  428 => 247,  412 => 60,  403 => 196,  352 => 199,  344 => 194,  333 => 115,  317 => 17,  300 => 13,  284 => 149,  277 => 150,  255 => 284,  359 => 123,  346 => 33,  304 => 157,  297 => 200,  200 => 72,  198 => 92,  172 => 57,  473 => 225,  470 => 78,  449 => 198,  445 => 117,  433 => 224,  419 => 236,  399 => 56,  391 => 211,  382 => 131,  378 => 157,  373 => 46,  366 => 201,  357 => 37,  303 => 122,  290 => 7,  287 => 5,  206 => 68,  170 => 84,  188 => 194,  178 => 184,  150 => 55,  184 => 63,  129 => 122,  126 => 121,  20 => 1,  153 => 77,  146 => 147,  155 => 47,  292 => 135,  279 => 147,  267 => 101,  249 => 181,  223 => 118,  211 => 99,  197 => 69,  175 => 58,  104 => 74,  134 => 133,  152 => 46,  113 => 48,  76 => 25,  903 => 622,  891 => 271,  882 => 609,  878 => 608,  854 => 552,  838 => 544,  834 => 585,  821 => 575,  803 => 487,  782 => 221,  769 => 547,  759 => 540,  732 => 197,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 457,  652 => 154,  648 => 473,  614 => 133,  574 => 113,  553 => 425,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 196,  425 => 64,  406 => 214,  364 => 197,  356 => 122,  354 => 329,  335 => 134,  327 => 173,  325 => 129,  263 => 294,  242 => 269,  236 => 80,  222 => 238,  216 => 79,  192 => 91,  160 => 71,  100 => 36,  257 => 291,  190 => 89,  124 => 108,  97 => 41,  81 => 30,  348 => 140,  338 => 116,  334 => 26,  329 => 131,  324 => 112,  319 => 163,  299 => 155,  245 => 270,  228 => 130,  212 => 224,  167 => 71,  137 => 82,  975 => 305,  966 => 652,  962 => 651,  959 => 602,  955 => 600,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 579,  883 => 598,  879 => 264,  875 => 607,  871 => 606,  869 => 259,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 538,  824 => 246,  818 => 564,  812 => 238,  806 => 234,  794 => 557,  788 => 484,  773 => 548,  764 => 505,  760 => 533,  752 => 527,  743 => 525,  739 => 200,  729 => 517,  720 => 512,  704 => 182,  692 => 175,  687 => 173,  682 => 464,  679 => 486,  675 => 462,  654 => 155,  643 => 149,  639 => 460,  634 => 458,  622 => 442,  601 => 338,  589 => 124,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 176,  389 => 51,  367 => 155,  347 => 119,  339 => 28,  318 => 185,  310 => 156,  308 => 109,  289 => 196,  260 => 293,  250 => 274,  248 => 97,  239 => 131,  233 => 87,  213 => 78,  181 => 185,  127 => 35,  84 => 33,  77 => 20,  205 => 96,  191 => 196,  174 => 74,  58 => 14,  65 => 17,  34 => 5,  864 => 558,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 543,  831 => 262,  827 => 261,  822 => 245,  820 => 565,  815 => 239,  811 => 256,  807 => 528,  800 => 523,  798 => 248,  790 => 519,  784 => 482,  778 => 240,  776 => 239,  770 => 507,  767 => 234,  754 => 208,  750 => 534,  742 => 202,  736 => 213,  730 => 209,  726 => 191,  719 => 187,  711 => 200,  706 => 471,  701 => 180,  694 => 467,  691 => 193,  688 => 192,  681 => 169,  676 => 467,  671 => 164,  664 => 463,  661 => 159,  659 => 180,  656 => 460,  646 => 451,  641 => 170,  636 => 145,  629 => 141,  626 => 443,  624 => 139,  621 => 449,  613 => 158,  608 => 156,  602 => 445,  595 => 151,  592 => 126,  590 => 427,  586 => 147,  580 => 144,  577 => 116,  571 => 140,  568 => 139,  565 => 109,  561 => 137,  558 => 136,  556 => 104,  551 => 424,  545 => 407,  542 => 421,  536 => 95,  533 => 301,  528 => 406,  526 => 125,  520 => 121,  518 => 402,  510 => 115,  506 => 289,  502 => 87,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 199,  446 => 75,  443 => 74,  432 => 2,  429 => 66,  421 => 62,  415 => 180,  410 => 59,  405 => 137,  400 => 389,  395 => 135,  390 => 385,  385 => 383,  380 => 158,  375 => 379,  370 => 45,  353 => 149,  349 => 34,  345 => 147,  331 => 140,  326 => 21,  316 => 168,  311 => 159,  306 => 205,  301 => 156,  296 => 121,  291 => 151,  286 => 112,  281 => 114,  276 => 111,  266 => 147,  261 => 153,  251 => 182,  234 => 90,  232 => 249,  185 => 75,  180 => 70,  165 => 83,  161 => 162,  148 => 65,  118 => 49,  114 => 91,  110 => 38,  90 => 27,  70 => 19,  343 => 146,  321 => 18,  315 => 131,  313 => 110,  295 => 11,  271 => 190,  265 => 299,  259 => 103,  256 => 96,  253 => 100,  244 => 133,  237 => 262,  226 => 84,  218 => 126,  215 => 72,  210 => 77,  207 => 216,  202 => 94,  53 => 11,  480 => 280,  474 => 80,  469 => 158,  461 => 256,  457 => 254,  453 => 199,  444 => 256,  440 => 148,  437 => 70,  435 => 69,  430 => 248,  427 => 65,  423 => 63,  413 => 134,  409 => 199,  407 => 138,  402 => 58,  398 => 136,  393 => 192,  387 => 164,  384 => 132,  381 => 48,  379 => 119,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 150,  341 => 117,  337 => 27,  322 => 101,  314 => 16,  312 => 130,  309 => 129,  305 => 108,  298 => 12,  294 => 153,  285 => 4,  283 => 115,  278 => 331,  268 => 300,  264 => 141,  258 => 187,  252 => 283,  247 => 273,  241 => 93,  229 => 87,  220 => 81,  214 => 231,  177 => 69,  169 => 168,  140 => 76,  132 => 58,  128 => 42,  107 => 37,  61 => 2,  273 => 317,  269 => 107,  254 => 137,  243 => 137,  240 => 263,  238 => 108,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 80,  219 => 237,  217 => 232,  208 => 76,  204 => 215,  179 => 94,  159 => 158,  143 => 76,  135 => 46,  119 => 95,  102 => 30,  71 => 15,  67 => 18,  63 => 18,  59 => 17,  93 => 28,  88 => 28,  78 => 24,  38 => 6,  28 => 3,  201 => 213,  196 => 211,  183 => 189,  171 => 173,  166 => 167,  163 => 82,  158 => 80,  156 => 157,  151 => 152,  142 => 76,  138 => 56,  136 => 138,  121 => 107,  117 => 37,  105 => 25,  91 => 29,  62 => 16,  49 => 12,  26 => 3,  87 => 26,  46 => 10,  44 => 8,  31 => 4,  94 => 45,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  24 => 2,  27 => 3,  25 => 35,  21 => 2,  19 => 1,  79 => 26,  72 => 21,  69 => 21,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 136,  157 => 84,  145 => 74,  139 => 139,  131 => 132,  123 => 61,  120 => 31,  115 => 40,  111 => 90,  108 => 33,  101 => 33,  98 => 29,  96 => 53,  83 => 33,  74 => 22,  66 => 10,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 223,  203 => 73,  199 => 212,  193 => 100,  189 => 66,  187 => 84,  182 => 87,  176 => 178,  173 => 177,  168 => 61,  164 => 163,  162 => 59,  154 => 153,  149 => 148,  147 => 75,  144 => 144,  141 => 143,  133 => 45,  130 => 46,  125 => 51,  122 => 73,  116 => 94,  112 => 39,  109 => 87,  106 => 86,  103 => 64,  99 => 54,  95 => 27,  92 => 31,  86 => 36,  82 => 25,  80 => 24,  73 => 24,  64 => 19,  60 => 20,  57 => 39,  54 => 15,  51 => 13,  48 => 10,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
