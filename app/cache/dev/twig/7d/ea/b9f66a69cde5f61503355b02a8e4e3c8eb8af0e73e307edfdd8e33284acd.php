<?php

/* RidwanUserBundle:Security:login.html.twig */
class __TwigTemplate_7deab9f66a69cde5f61503355b02a8e4e3c8eb8af0e73e307edfdd8e33284acd extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 358,  615 => 344,  609 => 341,  606 => 340,  592 => 334,  588 => 333,  547 => 308,  543 => 306,  539 => 304,  533 => 301,  513 => 292,  506 => 289,  502 => 288,  443 => 247,  416 => 235,  412 => 234,  371 => 201,  350 => 191,  346 => 189,  311 => 159,  297 => 155,  239 => 117,  174 => 95,  150 => 83,  137 => 77,  23 => 3,  198 => 111,  345 => 165,  342 => 188,  317 => 145,  301 => 156,  291 => 137,  263 => 126,  188 => 82,  222 => 101,  211 => 108,  205 => 93,  197 => 88,  473 => 261,  470 => 246,  433 => 224,  429 => 223,  415 => 217,  406 => 214,  391 => 211,  382 => 208,  366 => 201,  357 => 198,  353 => 197,  327 => 173,  316 => 168,  308 => 165,  303 => 163,  296 => 160,  287 => 135,  261 => 127,  234 => 118,  228 => 104,  212 => 111,  206 => 108,  192 => 108,  170 => 87,  226 => 95,  216 => 113,  191 => 79,  178 => 97,  126 => 51,  100 => 49,  124 => 51,  58 => 19,  84 => 33,  76 => 39,  20 => 1,  153 => 60,  146 => 62,  113 => 54,  104 => 52,  97 => 39,  77 => 34,  134 => 76,  127 => 54,  81 => 41,  34 => 6,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 331,  575 => 143,  572 => 142,  566 => 139,  563 => 315,  556 => 136,  553 => 135,  551 => 310,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 295,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 226,  421 => 390,  419 => 236,  408 => 382,  403 => 380,  388 => 374,  383 => 207,  378 => 206,  373 => 204,  363 => 364,  358 => 194,  351 => 358,  347 => 357,  339 => 355,  335 => 354,  329 => 351,  324 => 349,  319 => 347,  304 => 341,  299 => 339,  289 => 335,  284 => 333,  279 => 331,  274 => 131,  249 => 319,  232 => 307,  200 => 277,  184 => 105,  181 => 76,  175 => 78,  172 => 94,  160 => 97,  155 => 70,  65 => 23,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 348,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 338,  594 => 335,  591 => 150,  589 => 149,  585 => 332,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 314,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 302,  532 => 127,  527 => 298,  525 => 125,  519 => 121,  517 => 120,  509 => 290,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 260,  452 => 75,  449 => 250,  445 => 248,  442 => 44,  436 => 13,  431 => 241,  428 => 1,  422 => 393,  420 => 390,  414 => 387,  404 => 383,  399 => 212,  394 => 379,  389 => 210,  369 => 369,  364 => 197,  359 => 365,  352 => 361,  348 => 360,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 352,  320 => 350,  310 => 346,  300 => 342,  290 => 158,  280 => 141,  275 => 332,  270 => 330,  260 => 326,  255 => 126,  250 => 322,  245 => 320,  233 => 109,  231 => 114,  185 => 100,  180 => 77,  165 => 66,  161 => 70,  148 => 74,  118 => 61,  114 => 56,  110 => 58,  90 => 49,  70 => 27,  343 => 356,  321 => 146,  315 => 348,  313 => 144,  295 => 138,  271 => 130,  265 => 328,  259 => 120,  256 => 154,  253 => 123,  244 => 119,  237 => 144,  225 => 113,  218 => 131,  215 => 109,  210 => 128,  207 => 107,  202 => 279,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 45,  440 => 148,  437 => 244,  435 => 13,  430 => 2,  427 => 1,  423 => 238,  413 => 384,  409 => 385,  407 => 131,  402 => 213,  398 => 378,  393 => 376,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 366,  365 => 111,  362 => 110,  360 => 199,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 345,  312 => 167,  309 => 143,  305 => 142,  298 => 91,  294 => 159,  285 => 336,  283 => 156,  278 => 132,  268 => 85,  264 => 325,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 73,  220 => 120,  214 => 69,  177 => 65,  169 => 75,  140 => 53,  132 => 52,  128 => 68,  107 => 43,  61 => 35,  273 => 96,  269 => 327,  254 => 321,  243 => 127,  240 => 113,  238 => 119,  235 => 116,  230 => 305,  227 => 116,  224 => 156,  221 => 111,  219 => 110,  217 => 75,  208 => 109,  204 => 114,  179 => 79,  159 => 63,  143 => 80,  135 => 59,  119 => 48,  102 => 48,  71 => 25,  67 => 18,  63 => 22,  59 => 20,  93 => 47,  88 => 38,  78 => 40,  38 => 6,  28 => 3,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 93,  163 => 67,  158 => 64,  156 => 63,  151 => 66,  142 => 59,  138 => 52,  136 => 55,  121 => 51,  117 => 50,  105 => 52,  91 => 45,  62 => 23,  49 => 15,  26 => 2,  87 => 43,  46 => 9,  44 => 15,  31 => 4,  94 => 38,  89 => 34,  85 => 42,  75 => 25,  68 => 25,  56 => 19,  24 => 6,  27 => 4,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 20,  69 => 24,  47 => 14,  40 => 11,  37 => 8,  22 => 2,  246 => 113,  157 => 86,  145 => 63,  139 => 60,  131 => 53,  123 => 53,  120 => 58,  115 => 48,  111 => 46,  108 => 53,  101 => 37,  98 => 49,  96 => 39,  83 => 35,  74 => 29,  66 => 37,  55 => 12,  52 => 24,  50 => 8,  43 => 13,  41 => 7,  35 => 8,  32 => 5,  29 => 8,  209 => 88,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  187 => 84,  182 => 99,  176 => 102,  173 => 72,  168 => 99,  164 => 99,  162 => 57,  154 => 65,  149 => 63,  147 => 56,  144 => 54,  141 => 62,  133 => 57,  130 => 62,  125 => 52,  122 => 64,  116 => 48,  112 => 58,  109 => 44,  106 => 55,  103 => 28,  99 => 41,  95 => 42,  92 => 38,  86 => 47,  82 => 46,  80 => 29,  73 => 39,  64 => 29,  60 => 14,  57 => 24,  54 => 25,  51 => 11,  48 => 11,  45 => 15,  42 => 8,  39 => 7,  36 => 5,  33 => 5,  30 => 1,);
    }
}
