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
        return array (  65 => 21,  34 => 4,  826 => 383,  822 => 302,  819 => 301,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 195,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 180,  655 => 179,  652 => 178,  642 => 171,  637 => 169,  632 => 167,  625 => 165,  622 => 164,  620 => 163,  617 => 162,  609 => 157,  604 => 155,  598 => 152,  591 => 150,  588 => 149,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 136,  554 => 135,  552 => 134,  547 => 131,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 124,  516 => 120,  514 => 119,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 1,  421 => 383,  415 => 380,  410 => 378,  405 => 376,  400 => 374,  395 => 372,  390 => 370,  385 => 368,  380 => 366,  375 => 364,  370 => 362,  353 => 354,  349 => 353,  345 => 352,  331 => 347,  326 => 345,  316 => 341,  311 => 339,  306 => 337,  301 => 335,  296 => 333,  291 => 331,  286 => 329,  281 => 327,  276 => 325,  266 => 321,  261 => 319,  251 => 315,  234 => 303,  232 => 301,  185 => 258,  180 => 74,  165 => 66,  161 => 64,  148 => 57,  118 => 40,  114 => 39,  110 => 38,  90 => 33,  70 => 23,  343 => 217,  321 => 343,  315 => 195,  313 => 194,  295 => 182,  271 => 323,  265 => 158,  259 => 155,  256 => 317,  253 => 153,  244 => 147,  237 => 144,  226 => 137,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 273,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 13,  435 => 146,  430 => 144,  427 => 143,  423 => 386,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 360,  362 => 110,  360 => 358,  355 => 106,  341 => 351,  337 => 350,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 189,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 44,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 145,  238 => 85,  235 => 143,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 275,  179 => 69,  159 => 63,  143 => 56,  135 => 53,  119 => 42,  102 => 36,  71 => 20,  67 => 15,  63 => 15,  59 => 14,  93 => 34,  88 => 6,  78 => 30,  38 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 62,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 27,  62 => 26,  49 => 7,  26 => 6,  87 => 25,  46 => 11,  44 => 14,  31 => 4,  94 => 34,  89 => 20,  85 => 28,  75 => 25,  68 => 14,  56 => 9,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 13,  37 => 5,  22 => 1,  246 => 313,  157 => 56,  145 => 46,  139 => 53,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 36,  98 => 35,  96 => 35,  83 => 25,  74 => 29,  66 => 27,  55 => 15,  52 => 21,  50 => 12,  43 => 9,  41 => 5,  35 => 5,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 124,  193 => 73,  189 => 71,  187 => 84,  182 => 233,  176 => 72,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 55,  141 => 54,  133 => 55,  130 => 46,  125 => 44,  122 => 41,  116 => 41,  112 => 42,  109 => 38,  106 => 37,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 31,  80 => 41,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 10,  39 => 9,  36 => 3,  33 => 7,  30 => 7,);
    }
}
