<?php

/* RidwanSiteBundle:Success:success.html.twig */
class __TwigTemplate_d3824ac6c6e13f581183f67135950aeed01f057a50932bcddff7fe1a72794b04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MoraspiritStyleBundle:basic:basic.html.twig");

        $this->blocks = array(
            'dashboard' => array($this, 'block_dashboard'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoraspiritStyleBundle:basic:basic.html.twig";
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
<div class=\"alert alert-success center span8\">
    
    <strong>Success!</strong> <br><br>
    <strong>Message:</strong>";
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
        return "RidwanSiteBundle:Success:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  826 => 383,  822 => 302,  819 => 301,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 195,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 180,  655 => 179,  652 => 178,  642 => 171,  637 => 169,  632 => 167,  625 => 165,  622 => 164,  620 => 163,  617 => 162,  609 => 157,  604 => 155,  598 => 152,  591 => 150,  588 => 149,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 136,  554 => 135,  552 => 134,  547 => 131,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 124,  516 => 120,  514 => 119,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 1,  421 => 383,  415 => 380,  410 => 378,  405 => 376,  400 => 374,  395 => 372,  390 => 370,  385 => 368,  380 => 366,  375 => 364,  370 => 362,  353 => 354,  349 => 353,  345 => 352,  331 => 347,  326 => 345,  316 => 341,  311 => 339,  306 => 337,  301 => 335,  296 => 333,  291 => 331,  286 => 329,  281 => 327,  276 => 325,  266 => 321,  261 => 319,  251 => 315,  234 => 303,  232 => 301,  185 => 258,  180 => 74,  165 => 66,  161 => 64,  148 => 57,  118 => 40,  114 => 39,  110 => 38,  90 => 33,  70 => 28,  343 => 217,  321 => 343,  315 => 195,  313 => 194,  295 => 182,  271 => 323,  265 => 158,  259 => 155,  256 => 317,  253 => 153,  244 => 147,  237 => 144,  226 => 137,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 273,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 13,  435 => 146,  430 => 144,  427 => 143,  423 => 386,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 360,  362 => 110,  360 => 358,  355 => 106,  341 => 351,  337 => 350,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 189,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 44,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 145,  238 => 85,  235 => 143,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 275,  179 => 69,  159 => 63,  143 => 56,  135 => 53,  119 => 42,  102 => 36,  71 => 20,  67 => 15,  63 => 15,  59 => 14,  93 => 34,  88 => 6,  78 => 30,  38 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 62,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 27,  62 => 26,  49 => 7,  26 => 6,  87 => 25,  46 => 7,  44 => 14,  31 => 4,  94 => 34,  89 => 20,  85 => 28,  75 => 17,  68 => 14,  56 => 9,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 13,  37 => 5,  22 => 1,  246 => 313,  157 => 56,  145 => 46,  139 => 53,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 36,  98 => 35,  96 => 35,  83 => 25,  74 => 29,  66 => 27,  55 => 15,  52 => 21,  50 => 17,  43 => 9,  41 => 5,  35 => 5,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 124,  193 => 73,  189 => 71,  187 => 84,  182 => 233,  176 => 72,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 55,  141 => 54,  133 => 55,  130 => 46,  125 => 44,  122 => 41,  116 => 41,  112 => 42,  109 => 38,  106 => 37,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 31,  80 => 41,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 3,  33 => 2,  30 => 7,);
    }
}
