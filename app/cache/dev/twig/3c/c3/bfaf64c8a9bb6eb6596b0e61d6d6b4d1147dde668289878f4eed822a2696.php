<?php

/* IsuruStatBundle:Reports:district.html.twig */
class __TwigTemplate_3cc3bfaf64c8a9bb6eb6596b0e61d6d6b4d1147dde668289878f4eed822a2696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<style>
        #panel{
            margin-top: 30px;
            margin-left: 20px;
            margin-right: 20px;
        }
    </style>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
    <div id=\"panel\" class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h2 class=\"panel-title\">Individual Volunteer</h2>
        </div>
        <div class=\"panel-body\">
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 21
            echo "        ";
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == 1)) {
                // line 22
                echo "                <p>Name             : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "lastname"), "html", null, true);
                echo "</p>
                <p>Gender           : ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "gender"), "html", null, true);
                echo "</p>
                <p>Date of Birth    : ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "dateofbirth"), "html", null, true);
                echo "</p>
                <p>Nationality      : ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "nationality"), "html", null, true);
                echo "</p>
                <p>Civil Status     : ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "civilstatus"), "html", null, true);
                echo "</p>
          ";
            }
            // line 28
            echo "                
          ";
            // line 29
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == 2)) {
                // line 30
                echo "                ";
                if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mobile") != null)) {
                    // line 31
                    echo "                    <p>Mobile           : ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mobile"), "html", null, true);
                    echo "</p>
                ";
                }
                // line 33
                echo "                ";
                if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email") != null)) {
                    // line 34
                    echo "                <p>Email            : ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email"), "html", null, true);
                    echo "</p>
                ";
                }
                // line 36
                echo "                ";
                if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "fax") != null)) {
                    // line 37
                    echo "                <p>Fax              : ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "fax"), "html", null, true);
                    echo "</p>
                ";
                }
                // line 39
                echo "                ";
                if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone") != null)) {
                    // line 40
                    echo "                <p>Landline         : ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone"), "html", null, true);
                    echo "</p>
                ";
                }
                // line 42
                echo "                ";
                if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "streetnumber") != null)) {
                    // line 43
                    echo "                <p>Address          : ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "streetnumber"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "street"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "city"), "html", null, true);
                    echo "</p>
                ";
                } else {
                    // line 45
                    echo "                <p>Address          : ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "street"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "city"), "html", null, true);
                    echo "</p>
                ";
                }
                // line 47
                echo "          ";
            }
            // line 48
            echo "                
                ";
            // line 49
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == 3)) {
                // line 50
                echo "                    ";
                if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "intro") != null)) {
                    // line 51
                    echo "                <p>Introduction     : ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "intro"), "html", null, true);
                    echo "</p>
                ";
                }
                // line 53
                echo "                ";
                if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "experience") != null)) {
                    // line 54
                    echo "                <p>Experience       : ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "experience"), "html", null, true);
                    echo "</p>
                ";
                }
                // line 56
                echo "                ";
                if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "health") != null)) {
                    // line 57
                    echo "                <p>Health           : ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "health"), "html", null, true);
                    echo "</p>
                ";
                }
                // line 59
                echo "                ";
                if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "aggregatedrating") != null)) {
                    // line 60
                    echo "                <p>Aggregated Rating: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "aggregatedrating"), "html", null, true);
                    echo "</p>
                ";
                }
                // line 62
                echo "                ";
            }
            // line 63
            echo "                
                ";
            // line 64
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == 4)) {
                // line 65
                echo "                
                ";
            }
            // line 67
            echo "                
                ";
            // line 68
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == 5)) {
                // line 69
                echo "                
                ";
            }
            // line 71
            echo "                
                ";
            // line 72
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == 6)) {
                // line 73
                echo "                
                ";
            }
            // line 75
            echo "                
                ";
            // line 76
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == 7)) {
                // line 77
                echo "                
                ";
            }
            // line 79
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </div>
        </div>   

";
    }

    public function getTemplateName()
    {
        return "IsuruStatBundle:Reports:district.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 289,  612 => 287,  587 => 283,  566 => 264,  522 => 255,  516 => 251,  505 => 249,  501 => 248,  494 => 244,  454 => 220,  332 => 176,  186 => 88,  438 => 89,  420 => 2,  417 => 1,  411 => 202,  388 => 190,  363 => 180,  274 => 145,  194 => 63,  637 => 358,  625 => 348,  615 => 344,  609 => 286,  606 => 340,  594 => 335,  588 => 333,  585 => 332,  581 => 331,  563 => 315,  557 => 314,  547 => 259,  543 => 306,  539 => 256,  535 => 302,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  431 => 44,  416 => 235,  383 => 188,  371 => 201,  358 => 178,  350 => 191,  342 => 188,  280 => 141,  23 => 3,  307 => 176,  231 => 129,  225 => 146,  195 => 91,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 45,  428 => 247,  412 => 210,  403 => 196,  352 => 199,  344 => 194,  333 => 168,  317 => 208,  300 => 168,  284 => 149,  277 => 150,  255 => 119,  359 => 209,  346 => 189,  304 => 157,  297 => 155,  200 => 104,  198 => 92,  172 => 77,  473 => 225,  470 => 246,  449 => 218,  445 => 117,  433 => 224,  419 => 236,  399 => 212,  391 => 211,  382 => 208,  378 => 186,  373 => 184,  366 => 201,  357 => 180,  303 => 169,  290 => 158,  287 => 136,  206 => 68,  170 => 78,  188 => 111,  178 => 81,  150 => 48,  184 => 96,  129 => 43,  126 => 42,  20 => 1,  153 => 49,  146 => 79,  155 => 50,  292 => 135,  279 => 147,  267 => 145,  249 => 135,  223 => 118,  211 => 99,  197 => 64,  175 => 91,  104 => 45,  134 => 73,  152 => 92,  113 => 54,  76 => 25,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 90,  425 => 13,  406 => 214,  364 => 197,  356 => 232,  354 => 179,  335 => 214,  327 => 173,  325 => 210,  263 => 126,  242 => 149,  236 => 80,  222 => 128,  216 => 103,  192 => 91,  160 => 71,  100 => 44,  257 => 152,  190 => 89,  124 => 53,  97 => 39,  81 => 34,  348 => 227,  338 => 169,  334 => 159,  329 => 167,  324 => 151,  319 => 163,  299 => 155,  245 => 152,  228 => 130,  212 => 71,  167 => 54,  137 => 82,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 338,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 209,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 185,  310 => 156,  308 => 175,  289 => 151,  260 => 144,  250 => 147,  248 => 137,  239 => 131,  233 => 112,  213 => 101,  181 => 84,  127 => 69,  84 => 39,  77 => 32,  205 => 96,  191 => 62,  174 => 80,  58 => 21,  65 => 33,  34 => 6,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 318,  661 => 317,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 294,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 285,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 310,  545 => 130,  542 => 257,  536 => 128,  533 => 301,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 199,  446 => 217,  443 => 247,  432 => 2,  429 => 216,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 176,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 159,  306 => 205,  301 => 156,  296 => 160,  291 => 151,  286 => 149,  281 => 163,  276 => 340,  266 => 147,  261 => 153,  251 => 141,  234 => 129,  232 => 148,  185 => 60,  180 => 95,  165 => 87,  161 => 86,  148 => 65,  118 => 53,  114 => 47,  110 => 66,  90 => 30,  70 => 34,  343 => 221,  321 => 209,  315 => 146,  313 => 207,  295 => 182,  271 => 125,  265 => 158,  259 => 139,  256 => 129,  253 => 123,  244 => 133,  237 => 144,  226 => 77,  218 => 126,  215 => 72,  210 => 108,  207 => 98,  202 => 107,  53 => 16,  480 => 280,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 200,  444 => 256,  440 => 148,  437 => 244,  435 => 146,  430 => 248,  427 => 143,  423 => 212,  413 => 134,  409 => 199,  407 => 131,  402 => 206,  398 => 194,  393 => 192,  387 => 222,  384 => 254,  381 => 187,  379 => 119,  374 => 116,  368 => 182,  365 => 375,  362 => 182,  360 => 204,  355 => 106,  341 => 170,  337 => 178,  322 => 101,  314 => 161,  312 => 176,  309 => 159,  305 => 139,  298 => 139,  294 => 153,  285 => 164,  283 => 148,  278 => 86,  268 => 85,  264 => 141,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 147,  220 => 117,  214 => 114,  177 => 100,  169 => 88,  140 => 76,  132 => 58,  128 => 53,  107 => 45,  61 => 22,  273 => 158,  269 => 143,  254 => 137,  243 => 137,  240 => 150,  238 => 108,  235 => 116,  230 => 79,  227 => 129,  224 => 76,  221 => 75,  219 => 110,  217 => 73,  208 => 69,  204 => 97,  179 => 94,  159 => 73,  143 => 76,  135 => 61,  119 => 55,  102 => 34,  71 => 35,  67 => 26,  63 => 25,  59 => 19,  93 => 31,  88 => 29,  78 => 29,  38 => 9,  28 => 3,  201 => 104,  196 => 92,  183 => 96,  171 => 90,  166 => 98,  163 => 87,  158 => 51,  156 => 94,  151 => 77,  142 => 76,  138 => 75,  136 => 59,  121 => 67,  117 => 39,  105 => 50,  91 => 33,  62 => 30,  49 => 14,  26 => 2,  87 => 34,  46 => 14,  44 => 12,  31 => 4,  94 => 41,  89 => 36,  85 => 28,  75 => 36,  68 => 23,  56 => 16,  24 => 6,  27 => 4,  25 => 1,  21 => 2,  19 => 1,  79 => 47,  72 => 24,  69 => 25,  47 => 15,  40 => 11,  37 => 7,  22 => 1,  246 => 145,  157 => 84,  145 => 90,  139 => 45,  131 => 60,  123 => 53,  120 => 40,  115 => 54,  111 => 37,  108 => 36,  101 => 53,  98 => 42,  96 => 35,  83 => 33,  74 => 25,  66 => 33,  55 => 20,  52 => 15,  50 => 14,  43 => 13,  41 => 12,  35 => 8,  32 => 4,  29 => 3,  209 => 99,  203 => 67,  199 => 65,  193 => 100,  189 => 99,  187 => 84,  182 => 59,  176 => 57,  173 => 56,  168 => 77,  164 => 53,  162 => 97,  154 => 82,  149 => 91,  147 => 47,  144 => 84,  141 => 64,  133 => 72,  130 => 59,  125 => 68,  122 => 73,  116 => 51,  112 => 47,  109 => 45,  106 => 65,  103 => 64,  99 => 33,  95 => 39,  92 => 39,  86 => 43,  82 => 48,  80 => 26,  73 => 29,  64 => 32,  60 => 31,  57 => 19,  54 => 20,  51 => 13,  48 => 14,  45 => 13,  42 => 11,  39 => 6,  36 => 11,  33 => 4,  30 => 3,);
    }
}
