<?php

/* RidwanUserBundle:Group:new_content.html.twig */
class __TwigTemplate_4cc05ec9658d86b67dbe6b05676bf24937ddbe25ceedcb4068600da553614add extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 88,  152 => 67,  231 => 135,  200 => 111,  188 => 85,  174 => 93,  150 => 75,  137 => 69,  222 => 101,  211 => 96,  205 => 93,  175 => 90,  197 => 88,  172 => 102,  160 => 81,  470 => 246,  449 => 228,  445 => 227,  441 => 226,  433 => 224,  419 => 219,  406 => 214,  399 => 212,  391 => 211,  389 => 210,  382 => 208,  378 => 206,  373 => 204,  366 => 201,  364 => 200,  357 => 198,  327 => 173,  308 => 165,  303 => 163,  290 => 158,  287 => 157,  228 => 104,  206 => 108,  192 => 104,  216 => 113,  191 => 102,  184 => 99,  178 => 105,  126 => 53,  100 => 27,  124 => 54,  20 => 1,  153 => 60,  146 => 64,  104 => 43,  97 => 42,  134 => 58,  127 => 63,  81 => 24,  76 => 30,  872 => 572,  868 => 571,  864 => 570,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 487,  701 => 485,  689 => 478,  680 => 476,  676 => 475,  645 => 452,  640 => 450,  635 => 448,  628 => 446,  603 => 423,  592 => 418,  583 => 415,  578 => 413,  575 => 412,  571 => 411,  546 => 389,  534 => 380,  510 => 362,  494 => 349,  473 => 247,  452 => 313,  431 => 295,  396 => 266,  334 => 210,  292 => 173,  288 => 171,  284 => 169,  282 => 168,  263 => 151,  255 => 147,  186 => 93,  170 => 76,  155 => 70,  129 => 67,  113 => 52,  84 => 30,  248 => 169,  236 => 109,  212 => 111,  198 => 89,  181 => 76,  58 => 18,  828 => 388,  824 => 545,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 28,  65 => 23,  34 => 6,  826 => 383,  822 => 302,  819 => 543,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 484,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 458,  655 => 179,  652 => 178,  642 => 171,  637 => 169,  632 => 447,  625 => 165,  622 => 164,  620 => 163,  617 => 162,  609 => 157,  604 => 155,  598 => 152,  591 => 150,  588 => 417,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 136,  554 => 135,  552 => 134,  547 => 131,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 371,  516 => 120,  514 => 119,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 388,  415 => 217,  410 => 383,  405 => 381,  400 => 379,  395 => 377,  390 => 375,  385 => 373,  380 => 371,  375 => 369,  370 => 367,  353 => 197,  349 => 358,  345 => 357,  331 => 352,  326 => 350,  316 => 168,  311 => 344,  306 => 342,  301 => 340,  296 => 160,  291 => 336,  286 => 334,  281 => 332,  276 => 330,  266 => 326,  261 => 125,  251 => 149,  234 => 107,  232 => 108,  185 => 109,  180 => 80,  165 => 84,  161 => 70,  148 => 78,  118 => 58,  114 => 56,  110 => 54,  90 => 35,  70 => 26,  343 => 217,  321 => 348,  315 => 195,  313 => 194,  295 => 182,  271 => 328,  265 => 158,  259 => 120,  256 => 322,  253 => 146,  244 => 147,  237 => 144,  226 => 105,  218 => 100,  215 => 97,  210 => 112,  207 => 127,  202 => 278,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 225,  435 => 146,  430 => 144,  427 => 143,  423 => 220,  413 => 280,  409 => 132,  407 => 131,  402 => 213,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 365,  362 => 110,  360 => 199,  355 => 106,  341 => 356,  337 => 355,  322 => 101,  314 => 99,  312 => 167,  309 => 97,  305 => 189,  298 => 91,  294 => 159,  285 => 89,  283 => 156,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 116,  247 => 129,  241 => 126,  229 => 134,  220 => 115,  214 => 99,  177 => 65,  169 => 90,  140 => 61,  132 => 66,  128 => 68,  107 => 43,  61 => 21,  273 => 96,  269 => 94,  254 => 121,  243 => 113,  240 => 145,  238 => 138,  235 => 137,  230 => 82,  227 => 157,  224 => 156,  221 => 77,  219 => 76,  217 => 75,  208 => 96,  204 => 280,  179 => 92,  159 => 63,  143 => 61,  135 => 59,  119 => 48,  102 => 36,  71 => 25,  67 => 20,  63 => 22,  59 => 22,  93 => 29,  88 => 38,  78 => 30,  38 => 10,  28 => 3,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 85,  163 => 87,  158 => 70,  156 => 79,  151 => 66,  142 => 63,  138 => 54,  136 => 60,  121 => 57,  117 => 47,  105 => 47,  91 => 27,  62 => 19,  49 => 15,  26 => 2,  87 => 25,  46 => 14,  44 => 13,  31 => 4,  94 => 34,  89 => 34,  85 => 33,  75 => 25,  68 => 25,  56 => 21,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 32,  72 => 21,  69 => 30,  47 => 15,  40 => 11,  37 => 7,  22 => 1,  246 => 113,  157 => 69,  145 => 63,  139 => 69,  131 => 64,  123 => 53,  120 => 58,  115 => 48,  111 => 46,  108 => 44,  101 => 37,  98 => 40,  96 => 39,  83 => 35,  74 => 29,  66 => 25,  55 => 23,  52 => 20,  50 => 16,  43 => 14,  41 => 9,  35 => 6,  32 => 5,  29 => 8,  209 => 88,  203 => 78,  199 => 107,  193 => 87,  189 => 71,  187 => 84,  182 => 91,  176 => 79,  173 => 71,  168 => 77,  164 => 99,  162 => 71,  154 => 78,  149 => 63,  147 => 74,  144 => 62,  141 => 71,  133 => 57,  130 => 66,  125 => 52,  122 => 52,  116 => 49,  112 => 45,  109 => 45,  106 => 51,  103 => 28,  99 => 41,  95 => 43,  92 => 38,  86 => 34,  82 => 42,  80 => 31,  73 => 26,  64 => 26,  60 => 26,  57 => 24,  54 => 16,  51 => 20,  48 => 16,  45 => 15,  42 => 10,  39 => 10,  36 => 10,  33 => 7,  30 => 4,);
    }
}
