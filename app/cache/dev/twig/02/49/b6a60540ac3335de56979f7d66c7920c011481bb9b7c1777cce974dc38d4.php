<?php

/* RidwanSiteBundle:Default:index.html.twig */
class __TwigTemplate_0249b6a60540ac3335de56979f7d66c7920c011481bb9b7c1777cce974dc38d4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>

    <link type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/js-image-slider.css"), "html", null, true);
        echo "\"/>
    <link type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/generic.css"), "html", null, true);
        echo "\"/>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/js-image-slider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <style type=\"text/css\">
        .cap  {width:190px;height:240px;display:inline-block;background:white url(";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/caption1.gif"), "html", null, true);
        echo ") no-repeat 0 0;border-radius:4px;}
        .cap2 {background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/caption2.gif"), "html", null, true);
        echo ")}
        .cap3 {background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/caption3.gif"), "html", null, true);
        echo ")}
        .cap4 {background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/caption4.gif"), "html", null, true);
        echo ")}
    </style>
</head>
<body>


<div id=\"sliderFrame\">
    <div id=\"slider\">
        <a href=\"http://www.menucool.com/\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/slider-1.jpg"), "html", null, true);
        echo "\" alt=\"#htmlcaption1\" /></a>
        <a class=\"lazyImage\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/slider-2.jpg"), "html", null, true);
        echo "\" title=\"#htmlcaption2\">slide 2</a>
        <a href=\"http://www.menucool.com/javascript-image-slider\">
            <b data-src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/slider-3.jpg"), "html", null, true);
        echo "\" data-alt=\"#htmlcaption3\">Image Slider</b>
        </a>
        <a class=\"lazyImage\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/slider-4.jpg"), "html", null, true);
        echo "\" title=\"#htmlcaption4\">slide 4</a>
    </div>

    <!--captions-->
    <div style=\"display: none;\">
        <div id=\"htmlcaption1\">
            <div class=\"cap\"></div>
        </div>
        <div id=\"htmlcaption2\">
            <div class=\"cap cap2\"></div>
        </div>
        <div id=\"htmlcaption3\">
            <div class=\"cap cap3\"></div>
        </div>
        <div id=\"htmlcaption4\">
            <div class=\"cap cap4\"></div>
        </div>
    </div>
</div>



</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 146,  575 => 143,  572 => 142,  566 => 139,  563 => 138,  556 => 136,  553 => 135,  551 => 134,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 124,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 44,  421 => 390,  419 => 387,  408 => 382,  403 => 380,  388 => 374,  383 => 372,  378 => 370,  373 => 368,  363 => 364,  358 => 362,  351 => 358,  347 => 357,  343 => 356,  339 => 355,  335 => 354,  329 => 351,  324 => 349,  319 => 347,  299 => 339,  289 => 335,  284 => 333,  279 => 331,  274 => 329,  259 => 323,  249 => 319,  244 => 317,  232 => 307,  200 => 277,  184 => 263,  181 => 235,  175 => 71,  172 => 70,  160 => 63,  155 => 61,  65 => 21,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 165,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 153,  594 => 151,  591 => 150,  589 => 149,  585 => 148,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 136,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 128,  532 => 127,  527 => 126,  525 => 125,  519 => 121,  517 => 120,  509 => 115,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 88,  452 => 75,  449 => 74,  445 => 45,  442 => 44,  436 => 13,  431 => 2,  428 => 1,  422 => 393,  420 => 390,  414 => 387,  404 => 383,  399 => 381,  394 => 379,  389 => 377,  369 => 369,  364 => 367,  359 => 365,  352 => 361,  348 => 360,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 352,  315 => 348,  310 => 346,  300 => 342,  295 => 340,  290 => 338,  280 => 334,  275 => 332,  265 => 328,  260 => 326,  250 => 322,  245 => 320,  233 => 310,  231 => 308,  185 => 266,  180 => 74,  165 => 66,  161 => 64,  148 => 57,  118 => 40,  114 => 39,  110 => 38,  90 => 33,  70 => 23,  342 => 216,  320 => 350,  304 => 341,  270 => 330,  255 => 324,  239 => 144,  236 => 143,  234 => 142,  225 => 136,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 279,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 45,  440 => 148,  437 => 147,  435 => 13,  430 => 2,  427 => 1,  423 => 142,  413 => 384,  409 => 385,  407 => 131,  402 => 130,  398 => 378,  393 => 376,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 366,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 345,  312 => 193,  309 => 343,  305 => 344,  298 => 91,  294 => 337,  285 => 336,  283 => 88,  278 => 86,  268 => 85,  264 => 325,  258 => 154,  252 => 152,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 53,  132 => 51,  128 => 44,  107 => 36,  61 => 20,  273 => 96,  269 => 327,  254 => 321,  243 => 146,  240 => 86,  238 => 85,  235 => 74,  230 => 305,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 73,  159 => 63,  143 => 54,  135 => 53,  119 => 42,  102 => 36,  71 => 20,  67 => 15,  63 => 15,  59 => 24,  93 => 34,  88 => 6,  78 => 30,  38 => 9,  28 => 3,  201 => 280,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 62,  151 => 63,  142 => 59,  138 => 52,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 27,  62 => 26,  49 => 7,  26 => 6,  87 => 25,  46 => 11,  44 => 14,  31 => 11,  94 => 34,  89 => 20,  85 => 28,  75 => 25,  68 => 14,  56 => 9,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 28,  47 => 9,  40 => 13,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 53,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 36,  98 => 35,  96 => 35,  83 => 25,  74 => 29,  66 => 27,  55 => 15,  52 => 20,  50 => 12,  43 => 9,  41 => 5,  35 => 12,  32 => 4,  29 => 6,  209 => 82,  203 => 282,  199 => 124,  193 => 73,  189 => 71,  187 => 84,  182 => 234,  176 => 72,  173 => 71,  168 => 72,  164 => 65,  162 => 57,  154 => 58,  149 => 51,  147 => 56,  144 => 55,  141 => 54,  133 => 55,  130 => 46,  125 => 44,  122 => 41,  116 => 41,  112 => 42,  109 => 38,  106 => 37,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 31,  80 => 41,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 10,  39 => 13,  36 => 3,  33 => 7,  30 => 7,);
    }
}
