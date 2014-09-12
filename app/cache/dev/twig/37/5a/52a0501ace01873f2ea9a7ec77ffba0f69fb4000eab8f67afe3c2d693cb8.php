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
        return array (  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  971 => 304,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  808 => 235,  806 => 234,  804 => 233,  793 => 227,  791 => 226,  782 => 221,  779 => 216,  751 => 206,  748 => 205,  739 => 200,  735 => 198,  728 => 192,  723 => 190,  719 => 187,  714 => 185,  704 => 182,  699 => 179,  683 => 170,  681 => 169,  673 => 165,  663 => 160,  661 => 159,  658 => 158,  654 => 155,  643 => 149,  633 => 144,  627 => 140,  624 => 139,  614 => 133,  599 => 128,  589 => 124,  584 => 122,  579 => 118,  577 => 116,  570 => 112,  562 => 108,  556 => 104,  550 => 101,  548 => 100,  544 => 99,  519 => 91,  505 => 88,  477 => 82,  472 => 79,  465 => 77,  463 => 76,  397 => 55,  339 => 28,  330 => 23,  317 => 17,  260 => 293,  257 => 291,  250 => 274,  242 => 269,  792 => 488,  775 => 485,  749 => 479,  727 => 476,  706 => 473,  694 => 470,  679 => 466,  649 => 153,  634 => 456,  629 => 141,  549 => 411,  517 => 404,  386 => 159,  340 => 145,  307 => 128,  302 => 125,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 334,  1055 => 648,  1051 => 332,  1048 => 331,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 305,  972 => 608,  970 => 607,  967 => 303,  963 => 302,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 287,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 271,  888 => 270,  884 => 267,  880 => 566,  874 => 562,  870 => 560,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 250,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  770 => 507,  764 => 505,  762 => 504,  754 => 208,  745 => 203,  742 => 202,  740 => 491,  737 => 199,  724 => 484,  718 => 482,  705 => 480,  698 => 471,  696 => 178,  692 => 175,  686 => 468,  682 => 467,  678 => 168,  671 => 164,  668 => 163,  664 => 463,  646 => 451,  636 => 145,  626 => 443,  616 => 440,  587 => 123,  574 => 113,  565 => 109,  559 => 427,  553 => 425,  542 => 421,  536 => 95,  530 => 417,  377 => 47,  359 => 123,  356 => 122,  347 => 119,  328 => 22,  324 => 112,  293 => 120,  462 => 202,  439 => 71,  422 => 184,  408 => 176,  401 => 172,  394 => 54,  361 => 152,  351 => 141,  338 => 116,  335 => 134,  323 => 19,  320 => 127,  300 => 13,  275 => 330,  270 => 316,  267 => 101,  262 => 188,  233 => 87,  213 => 78,  367 => 155,  245 => 270,  167 => 71,  223 => 124,  438 => 89,  434 => 45,  425 => 64,  420 => 2,  417 => 143,  411 => 140,  403 => 196,  388 => 134,  363 => 153,  348 => 140,  333 => 115,  329 => 131,  325 => 129,  319 => 163,  304 => 157,  299 => 155,  289 => 196,  279 => 147,  274 => 110,  249 => 181,  190 => 89,  615 => 344,  606 => 449,  601 => 446,  594 => 127,  585 => 332,  581 => 331,  563 => 429,  551 => 424,  543 => 306,  539 => 96,  535 => 302,  533 => 301,  527 => 408,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  416 => 235,  412 => 60,  383 => 49,  371 => 156,  358 => 151,  350 => 120,  346 => 33,  342 => 30,  297 => 200,  280 => 194,  239 => 131,  225 => 125,  23 => 3,  194 => 197,  152 => 46,  231 => 129,  200 => 72,  188 => 194,  174 => 74,  150 => 55,  137 => 74,  222 => 238,  211 => 108,  205 => 104,  175 => 58,  197 => 69,  172 => 57,  160 => 71,  470 => 78,  449 => 198,  445 => 117,  441 => 196,  433 => 224,  419 => 236,  406 => 214,  399 => 56,  391 => 211,  389 => 51,  382 => 131,  378 => 157,  373 => 46,  366 => 201,  364 => 197,  357 => 37,  327 => 173,  308 => 109,  303 => 122,  290 => 7,  287 => 5,  228 => 126,  206 => 108,  192 => 91,  216 => 79,  191 => 196,  184 => 63,  178 => 184,  126 => 121,  100 => 36,  124 => 108,  20 => 1,  153 => 77,  146 => 147,  104 => 74,  97 => 41,  134 => 133,  127 => 35,  81 => 30,  76 => 25,  872 => 572,  868 => 571,  864 => 558,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 229,  789 => 225,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 186,  710 => 475,  701 => 180,  689 => 478,  680 => 476,  676 => 467,  645 => 150,  640 => 148,  635 => 448,  628 => 444,  603 => 439,  592 => 126,  583 => 415,  578 => 432,  575 => 114,  571 => 411,  546 => 423,  534 => 418,  510 => 362,  494 => 349,  473 => 261,  452 => 313,  431 => 189,  396 => 266,  334 => 26,  292 => 173,  288 => 118,  284 => 149,  282 => 3,  263 => 294,  255 => 284,  186 => 190,  170 => 84,  155 => 47,  129 => 122,  113 => 48,  84 => 33,  248 => 97,  236 => 128,  212 => 224,  198 => 89,  181 => 185,  58 => 14,  828 => 538,  824 => 246,  821 => 306,  817 => 279,  814 => 541,  801 => 232,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 20,  65 => 17,  34 => 5,  826 => 247,  822 => 245,  819 => 244,  815 => 239,  812 => 238,  799 => 249,  795 => 228,  786 => 224,  780 => 513,  774 => 212,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 478,  738 => 216,  732 => 197,  726 => 191,  722 => 206,  715 => 204,  707 => 199,  702 => 472,  697 => 484,  690 => 174,  687 => 173,  684 => 191,  677 => 465,  672 => 185,  667 => 183,  660 => 464,  657 => 458,  655 => 457,  652 => 154,  642 => 449,  637 => 358,  632 => 447,  625 => 453,  622 => 452,  620 => 136,  617 => 135,  609 => 129,  604 => 155,  598 => 152,  591 => 436,  588 => 333,  586 => 148,  582 => 146,  576 => 115,  573 => 142,  567 => 110,  564 => 138,  561 => 137,  557 => 314,  554 => 103,  552 => 102,  547 => 308,  541 => 97,  538 => 128,  532 => 410,  529 => 409,  524 => 125,  522 => 92,  516 => 120,  514 => 415,  506 => 289,  502 => 87,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 199,  446 => 75,  443 => 74,  432 => 2,  429 => 66,  421 => 62,  415 => 180,  410 => 59,  405 => 137,  400 => 379,  395 => 135,  390 => 375,  385 => 373,  380 => 158,  375 => 369,  370 => 45,  353 => 149,  349 => 34,  345 => 147,  331 => 140,  326 => 21,  316 => 168,  311 => 159,  306 => 286,  301 => 156,  296 => 121,  291 => 336,  286 => 112,  281 => 114,  276 => 111,  266 => 326,  261 => 125,  251 => 182,  234 => 90,  232 => 249,  185 => 75,  180 => 70,  165 => 83,  161 => 162,  148 => 65,  118 => 49,  114 => 91,  110 => 38,  90 => 27,  70 => 19,  343 => 146,  321 => 18,  315 => 131,  313 => 110,  295 => 11,  271 => 190,  265 => 299,  259 => 103,  256 => 96,  253 => 100,  244 => 133,  237 => 262,  226 => 84,  218 => 123,  215 => 123,  210 => 77,  207 => 216,  202 => 94,  53 => 11,  480 => 162,  474 => 80,  469 => 158,  461 => 256,  457 => 254,  453 => 199,  444 => 149,  440 => 148,  437 => 70,  435 => 69,  430 => 144,  427 => 65,  423 => 63,  413 => 280,  409 => 199,  407 => 138,  402 => 58,  398 => 136,  393 => 192,  387 => 164,  384 => 132,  381 => 48,  379 => 119,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 150,  341 => 117,  337 => 27,  322 => 101,  314 => 16,  312 => 130,  309 => 129,  305 => 108,  298 => 12,  294 => 153,  285 => 4,  283 => 115,  278 => 331,  268 => 300,  264 => 141,  258 => 187,  252 => 283,  247 => 273,  241 => 93,  229 => 87,  220 => 81,  214 => 231,  177 => 69,  169 => 168,  140 => 72,  132 => 58,  128 => 42,  107 => 37,  61 => 2,  273 => 317,  269 => 107,  254 => 137,  243 => 137,  240 => 263,  238 => 138,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 80,  219 => 237,  217 => 232,  208 => 76,  204 => 215,  179 => 92,  159 => 158,  143 => 80,  135 => 46,  119 => 95,  102 => 30,  71 => 15,  67 => 18,  63 => 18,  59 => 17,  93 => 28,  88 => 28,  78 => 24,  38 => 6,  28 => 3,  201 => 213,  196 => 211,  183 => 189,  171 => 173,  166 => 167,  163 => 82,  158 => 80,  156 => 157,  151 => 152,  142 => 65,  138 => 56,  136 => 138,  121 => 107,  117 => 37,  105 => 25,  91 => 29,  62 => 16,  49 => 12,  26 => 3,  87 => 26,  46 => 10,  44 => 8,  31 => 4,  94 => 45,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  24 => 2,  27 => 3,  25 => 35,  21 => 2,  19 => 1,  79 => 26,  72 => 21,  69 => 21,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 136,  157 => 80,  145 => 74,  139 => 139,  131 => 132,  123 => 61,  120 => 31,  115 => 40,  111 => 90,  108 => 33,  101 => 33,  98 => 29,  96 => 53,  83 => 33,  74 => 22,  66 => 10,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 223,  203 => 73,  199 => 212,  193 => 100,  189 => 66,  187 => 95,  182 => 87,  176 => 178,  173 => 177,  168 => 61,  164 => 163,  162 => 59,  154 => 153,  149 => 148,  147 => 75,  144 => 144,  141 => 143,  133 => 45,  130 => 46,  125 => 51,  122 => 52,  116 => 94,  112 => 39,  109 => 87,  106 => 86,  103 => 50,  99 => 54,  95 => 27,  92 => 31,  86 => 36,  82 => 25,  80 => 24,  73 => 24,  64 => 19,  60 => 20,  57 => 39,  54 => 15,  51 => 13,  48 => 10,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
