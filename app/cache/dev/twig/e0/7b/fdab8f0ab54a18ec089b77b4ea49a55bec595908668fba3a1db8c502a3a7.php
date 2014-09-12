<?php

/* RidwanUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e07bfdab8f0ab54a18ec089b77b4ea49a55bec595908668fba3a1db8c502a3a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 344,  606 => 340,  601 => 338,  594 => 335,  585 => 332,  581 => 331,  563 => 315,  551 => 310,  543 => 306,  539 => 304,  535 => 302,  533 => 301,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  416 => 235,  412 => 234,  383 => 207,  371 => 201,  358 => 194,  350 => 191,  346 => 189,  342 => 188,  297 => 155,  280 => 141,  239 => 117,  225 => 113,  23 => 3,  194 => 88,  152 => 67,  231 => 114,  200 => 111,  188 => 85,  174 => 95,  150 => 83,  137 => 77,  222 => 101,  211 => 108,  205 => 93,  175 => 90,  197 => 88,  172 => 94,  160 => 81,  470 => 246,  449 => 250,  445 => 248,  441 => 226,  433 => 224,  419 => 236,  406 => 214,  399 => 212,  391 => 211,  389 => 210,  382 => 208,  378 => 206,  373 => 204,  366 => 201,  364 => 197,  357 => 198,  327 => 173,  308 => 165,  303 => 163,  290 => 158,  287 => 157,  228 => 104,  206 => 108,  192 => 104,  216 => 113,  191 => 102,  184 => 99,  178 => 97,  126 => 53,  100 => 49,  124 => 61,  20 => 1,  153 => 60,  146 => 64,  104 => 43,  97 => 42,  134 => 58,  127 => 63,  81 => 42,  76 => 39,  872 => 572,  868 => 571,  864 => 570,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 487,  701 => 485,  689 => 478,  680 => 476,  676 => 475,  645 => 452,  640 => 450,  635 => 448,  628 => 446,  603 => 423,  592 => 334,  583 => 415,  578 => 413,  575 => 412,  571 => 411,  546 => 389,  534 => 380,  510 => 362,  494 => 349,  473 => 261,  452 => 313,  431 => 241,  396 => 266,  334 => 210,  292 => 173,  288 => 171,  284 => 169,  282 => 168,  263 => 126,  255 => 147,  186 => 93,  170 => 76,  155 => 70,  129 => 67,  113 => 52,  84 => 30,  248 => 169,  236 => 109,  212 => 111,  198 => 89,  181 => 76,  58 => 31,  828 => 388,  824 => 545,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 28,  65 => 23,  34 => 5,  826 => 383,  822 => 302,  819 => 543,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 484,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 458,  655 => 179,  652 => 178,  642 => 171,  637 => 358,  632 => 447,  625 => 348,  622 => 164,  620 => 163,  617 => 162,  609 => 341,  604 => 155,  598 => 152,  591 => 150,  588 => 333,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 314,  554 => 135,  552 => 134,  547 => 308,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 371,  516 => 120,  514 => 119,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 247,  432 => 2,  429 => 223,  421 => 388,  415 => 217,  410 => 383,  405 => 381,  400 => 379,  395 => 377,  390 => 375,  385 => 373,  380 => 371,  375 => 369,  370 => 367,  353 => 197,  349 => 358,  345 => 357,  331 => 352,  326 => 350,  316 => 168,  311 => 159,  306 => 342,  301 => 156,  296 => 160,  291 => 336,  286 => 334,  281 => 332,  276 => 330,  266 => 326,  261 => 125,  251 => 149,  234 => 107,  232 => 108,  185 => 100,  180 => 80,  165 => 84,  161 => 70,  148 => 78,  118 => 58,  114 => 57,  110 => 54,  90 => 43,  70 => 37,  343 => 217,  321 => 348,  315 => 195,  313 => 194,  295 => 182,  271 => 328,  265 => 158,  259 => 120,  256 => 322,  253 => 123,  244 => 119,  237 => 144,  226 => 105,  218 => 100,  215 => 109,  210 => 112,  207 => 107,  202 => 278,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 149,  440 => 148,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 238,  413 => 280,  409 => 132,  407 => 131,  402 => 213,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 365,  362 => 110,  360 => 199,  355 => 106,  341 => 356,  337 => 355,  322 => 101,  314 => 99,  312 => 167,  309 => 97,  305 => 189,  298 => 91,  294 => 159,  285 => 89,  283 => 156,  278 => 86,  268 => 85,  264 => 84,  258 => 124,  252 => 116,  247 => 120,  241 => 126,  229 => 134,  220 => 115,  214 => 99,  177 => 65,  169 => 90,  140 => 61,  132 => 66,  128 => 68,  107 => 52,  61 => 35,  273 => 96,  269 => 94,  254 => 121,  243 => 113,  240 => 145,  238 => 138,  235 => 116,  230 => 82,  227 => 157,  224 => 156,  221 => 111,  219 => 110,  217 => 75,  208 => 96,  204 => 280,  179 => 92,  159 => 63,  143 => 80,  135 => 59,  119 => 59,  102 => 48,  71 => 25,  67 => 18,  63 => 22,  59 => 22,  93 => 47,  88 => 38,  78 => 40,  38 => 12,  28 => 3,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 93,  163 => 87,  158 => 70,  156 => 79,  151 => 66,  142 => 63,  138 => 54,  136 => 60,  121 => 57,  117 => 47,  105 => 54,  91 => 46,  62 => 19,  49 => 15,  26 => 11,  87 => 45,  46 => 9,  44 => 13,  31 => 4,  94 => 45,  89 => 34,  85 => 42,  75 => 25,  68 => 25,  56 => 21,  24 => 6,  27 => 4,  25 => 3,  21 => 2,  19 => 1,  79 => 32,  72 => 20,  69 => 24,  47 => 14,  40 => 11,  37 => 7,  22 => 1,  246 => 113,  157 => 86,  145 => 63,  139 => 69,  131 => 64,  123 => 53,  120 => 58,  115 => 48,  111 => 53,  108 => 53,  101 => 49,  98 => 40,  96 => 39,  83 => 35,  74 => 38,  66 => 37,  55 => 12,  52 => 24,  50 => 15,  43 => 13,  41 => 10,  35 => 8,  32 => 5,  29 => 8,  209 => 88,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  187 => 84,  182 => 99,  176 => 79,  173 => 71,  168 => 77,  164 => 99,  162 => 71,  154 => 78,  149 => 63,  147 => 74,  144 => 62,  141 => 71,  133 => 57,  130 => 64,  125 => 52,  122 => 52,  116 => 49,  112 => 45,  109 => 55,  106 => 51,  103 => 50,  99 => 51,  95 => 43,  92 => 38,  86 => 34,  82 => 42,  80 => 29,  73 => 39,  64 => 34,  60 => 14,  57 => 24,  54 => 25,  51 => 11,  48 => 11,  45 => 15,  42 => 8,  39 => 6,  36 => 5,  33 => 6,  30 => 1,);
    }
}
