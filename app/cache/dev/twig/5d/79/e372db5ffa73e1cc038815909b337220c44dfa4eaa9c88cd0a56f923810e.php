<?php

/* RidwanSiteBundle:Error:error.html.twig */
class __TwigTemplate_5d79e372db5ffa73e1cc038815909b337220c44dfa4eaa9c88cd0a56f923810e extends Twig_Template
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
        echo "<br><br><br><br><br><br>
<div class=\"alert alert-error center span8\">

    <h3 style=\"color: darkred\"> <strong>Error</strong></h3> <br><h6>Ops! Something went wrong. Please contact admin if problem persists.</h6> <br><br>
    <h6>Message</h6>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
</div>
<br>
<br><br><br><br><br><br>


";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Error:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 594,  871 => 592,  869 => 591,  863 => 588,  851 => 582,  845 => 579,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 552,  788 => 549,  773 => 536,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 511,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 276,  389 => 260,  367 => 241,  347 => 223,  339 => 219,  318 => 201,  310 => 197,  308 => 196,  289 => 182,  260 => 155,  250 => 151,  248 => 150,  239 => 143,  233 => 141,  213 => 126,  181 => 110,  127 => 71,  84 => 42,  77 => 39,  205 => 135,  191 => 124,  174 => 110,  58 => 18,  65 => 21,  34 => 4,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 267,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 244,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 222,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 455,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 153,  595 => 151,  592 => 150,  590 => 149,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 1,  421 => 398,  415 => 395,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 369,  349 => 368,  345 => 367,  331 => 362,  326 => 360,  316 => 356,  311 => 354,  306 => 352,  301 => 350,  296 => 348,  291 => 346,  286 => 344,  281 => 342,  276 => 340,  266 => 336,  261 => 334,  251 => 330,  234 => 318,  232 => 316,  185 => 273,  180 => 74,  165 => 97,  161 => 64,  148 => 57,  118 => 64,  114 => 39,  110 => 38,  90 => 33,  70 => 23,  343 => 221,  321 => 358,  315 => 195,  313 => 194,  295 => 182,  271 => 338,  265 => 158,  259 => 155,  256 => 332,  253 => 153,  244 => 147,  237 => 144,  226 => 137,  218 => 131,  215 => 130,  210 => 128,  207 => 124,  202 => 288,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 13,  435 => 146,  430 => 144,  427 => 143,  423 => 401,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 375,  362 => 110,  360 => 373,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 98,  309 => 97,  305 => 189,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 162,  229 => 139,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 44,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 153,  243 => 88,  240 => 145,  238 => 85,  235 => 143,  230 => 82,  227 => 138,  224 => 71,  221 => 77,  219 => 76,  217 => 144,  208 => 68,  204 => 290,  179 => 69,  159 => 63,  143 => 56,  135 => 53,  119 => 42,  102 => 36,  71 => 37,  67 => 15,  63 => 20,  59 => 14,  93 => 34,  88 => 6,  78 => 30,  38 => 9,  28 => 4,  201 => 121,  196 => 90,  183 => 111,  171 => 61,  166 => 71,  163 => 62,  158 => 97,  156 => 62,  151 => 89,  142 => 84,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 47,  62 => 26,  49 => 7,  26 => 6,  87 => 25,  46 => 11,  44 => 14,  31 => 5,  94 => 45,  89 => 20,  85 => 28,  75 => 25,  68 => 22,  56 => 9,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 36,  47 => 9,  40 => 11,  37 => 5,  22 => 1,  246 => 328,  157 => 91,  145 => 86,  139 => 53,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 60,  101 => 36,  98 => 35,  96 => 35,  83 => 25,  74 => 29,  66 => 27,  55 => 15,  52 => 21,  50 => 12,  43 => 9,  41 => 5,  35 => 7,  32 => 4,  29 => 2,  209 => 82,  203 => 122,  199 => 124,  193 => 115,  189 => 71,  187 => 113,  182 => 234,  176 => 72,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 87,  144 => 55,  141 => 54,  133 => 55,  130 => 46,  125 => 70,  122 => 41,  116 => 41,  112 => 62,  109 => 57,  106 => 59,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 31,  80 => 41,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 16,  51 => 14,  48 => 14,  45 => 17,  42 => 12,  39 => 9,  36 => 3,  33 => 7,  30 => 7,);
    }
}
