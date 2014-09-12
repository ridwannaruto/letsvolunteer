<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b3ae7603557bb69f788ba83c9bcb2a8286ae7f1a3396df0a80d1d07502deee6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 339,  245 => 134,  167 => 89,  223 => 124,  438 => 89,  434 => 45,  425 => 13,  420 => 2,  417 => 1,  411 => 202,  403 => 196,  388 => 190,  363 => 180,  348 => 174,  333 => 168,  329 => 167,  325 => 166,  319 => 163,  304 => 157,  299 => 155,  289 => 151,  279 => 147,  274 => 145,  249 => 135,  190 => 89,  615 => 344,  606 => 340,  601 => 338,  594 => 335,  585 => 332,  581 => 331,  563 => 315,  551 => 310,  543 => 306,  539 => 304,  535 => 302,  533 => 301,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  416 => 235,  412 => 234,  383 => 188,  371 => 201,  358 => 178,  350 => 327,  346 => 189,  342 => 188,  297 => 155,  280 => 141,  239 => 131,  225 => 125,  23 => 3,  194 => 88,  152 => 72,  231 => 129,  200 => 111,  188 => 104,  174 => 88,  150 => 81,  137 => 74,  222 => 124,  211 => 108,  205 => 104,  175 => 90,  197 => 88,  172 => 77,  160 => 71,  470 => 246,  449 => 250,  445 => 117,  441 => 90,  433 => 224,  419 => 236,  406 => 214,  399 => 212,  391 => 211,  389 => 210,  382 => 208,  378 => 186,  373 => 184,  366 => 201,  364 => 197,  357 => 198,  327 => 173,  308 => 287,  303 => 163,  290 => 158,  287 => 157,  228 => 126,  206 => 108,  192 => 91,  216 => 113,  191 => 96,  184 => 99,  178 => 97,  126 => 69,  100 => 36,  124 => 53,  20 => 1,  153 => 62,  146 => 60,  104 => 37,  97 => 41,  134 => 64,  127 => 60,  81 => 31,  76 => 27,  872 => 572,  868 => 571,  864 => 570,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 487,  701 => 485,  689 => 478,  680 => 476,  676 => 475,  645 => 452,  640 => 450,  635 => 448,  628 => 446,  603 => 423,  592 => 334,  583 => 415,  578 => 413,  575 => 412,  571 => 411,  546 => 389,  534 => 380,  510 => 362,  494 => 349,  473 => 261,  452 => 313,  431 => 44,  396 => 266,  334 => 210,  292 => 173,  288 => 171,  284 => 149,  282 => 168,  263 => 126,  255 => 147,  186 => 98,  170 => 78,  155 => 83,  129 => 58,  113 => 40,  84 => 27,  248 => 169,  236 => 128,  212 => 111,  198 => 89,  181 => 92,  58 => 18,  828 => 388,  824 => 545,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 25,  65 => 22,  34 => 10,  826 => 383,  822 => 302,  819 => 543,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 484,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 458,  655 => 179,  652 => 178,  642 => 171,  637 => 358,  632 => 447,  625 => 348,  622 => 164,  620 => 163,  617 => 162,  609 => 341,  604 => 155,  598 => 152,  591 => 150,  588 => 333,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 314,  554 => 135,  552 => 134,  547 => 308,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 371,  516 => 120,  514 => 119,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 199,  446 => 45,  443 => 247,  432 => 2,  429 => 223,  421 => 388,  415 => 217,  410 => 383,  405 => 381,  400 => 379,  395 => 377,  390 => 375,  385 => 373,  380 => 371,  375 => 369,  370 => 367,  353 => 328,  349 => 358,  345 => 357,  331 => 352,  326 => 350,  316 => 168,  311 => 159,  306 => 286,  301 => 156,  296 => 160,  291 => 336,  286 => 334,  281 => 332,  276 => 330,  266 => 326,  261 => 125,  251 => 149,  234 => 129,  232 => 127,  185 => 100,  180 => 80,  165 => 84,  161 => 86,  148 => 65,  118 => 56,  114 => 55,  110 => 22,  90 => 37,  70 => 24,  343 => 217,  321 => 348,  315 => 195,  313 => 194,  295 => 182,  271 => 328,  265 => 158,  259 => 139,  256 => 322,  253 => 123,  244 => 133,  237 => 144,  226 => 105,  218 => 123,  215 => 123,  210 => 120,  207 => 107,  202 => 115,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 200,  444 => 149,  440 => 148,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 238,  413 => 280,  409 => 199,  407 => 131,  402 => 213,  398 => 194,  393 => 192,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 182,  365 => 365,  362 => 110,  360 => 199,  355 => 329,  341 => 170,  337 => 169,  322 => 101,  314 => 161,  312 => 167,  309 => 159,  305 => 189,  298 => 91,  294 => 153,  285 => 89,  283 => 156,  278 => 86,  268 => 85,  264 => 141,  258 => 124,  252 => 136,  247 => 120,  241 => 126,  229 => 134,  220 => 117,  214 => 99,  177 => 92,  169 => 90,  140 => 72,  132 => 58,  128 => 46,  107 => 53,  61 => 23,  273 => 96,  269 => 143,  254 => 137,  243 => 137,  240 => 145,  238 => 138,  235 => 116,  230 => 82,  227 => 157,  224 => 156,  221 => 111,  219 => 110,  217 => 75,  208 => 96,  204 => 116,  179 => 92,  159 => 87,  143 => 80,  135 => 62,  119 => 55,  102 => 17,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  93 => 38,  88 => 31,  78 => 26,  38 => 6,  28 => 3,  201 => 83,  196 => 105,  183 => 96,  171 => 90,  166 => 89,  163 => 88,  158 => 79,  156 => 70,  151 => 66,  142 => 65,  138 => 64,  136 => 59,  121 => 67,  117 => 19,  105 => 18,  91 => 34,  62 => 21,  49 => 10,  26 => 6,  87 => 32,  46 => 12,  44 => 12,  31 => 8,  94 => 34,  89 => 30,  85 => 32,  75 => 24,  68 => 34,  56 => 11,  24 => 3,  27 => 7,  25 => 35,  21 => 2,  19 => 1,  79 => 32,  72 => 27,  69 => 26,  47 => 15,  40 => 8,  37 => 7,  22 => 2,  246 => 113,  157 => 80,  145 => 78,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 54,  111 => 46,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 31,  74 => 27,  66 => 37,  55 => 15,  52 => 10,  50 => 18,  43 => 7,  41 => 10,  35 => 5,  32 => 7,  29 => 3,  209 => 113,  203 => 106,  199 => 101,  193 => 100,  189 => 99,  187 => 95,  182 => 84,  176 => 92,  173 => 91,  168 => 76,  164 => 72,  162 => 66,  154 => 82,  149 => 79,  147 => 76,  144 => 64,  141 => 55,  133 => 73,  130 => 56,  125 => 57,  122 => 52,  116 => 51,  112 => 47,  109 => 55,  106 => 45,  103 => 50,  99 => 40,  95 => 34,  92 => 36,  86 => 34,  82 => 28,  80 => 29,  73 => 23,  64 => 21,  60 => 20,  57 => 20,  54 => 19,  51 => 16,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 10,  33 => 9,  30 => 7,);
    }
}
