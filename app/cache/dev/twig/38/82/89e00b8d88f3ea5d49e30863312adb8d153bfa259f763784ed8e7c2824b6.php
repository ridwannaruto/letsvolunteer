<?php

/* RidwanEntityBundle:Opportunities:show.html.twig */
class __TwigTemplate_388289e00b8d88f3ea5d49e30863312adb8d153bfa259f763784ed8e7c2824b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Opportunities</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Title</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Shortdescription</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "shortdescription"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Startdate</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startdate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enddate</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enddate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numberofvolunteers</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numberofvolunteers"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agegroup</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agegroup"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Training</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "training"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expenses</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expenses"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Difficulty</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "difficulty"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Systemmatch</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "systemmatch"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Interested</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "interested"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enrolled</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enrolled"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("opportunities");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunities_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "RidwanEntityBundle:Opportunities:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 78,  292 => 135,  279 => 130,  267 => 124,  249 => 115,  223 => 101,  211 => 95,  197 => 87,  175 => 77,  104 => 42,  134 => 54,  152 => 63,  113 => 45,  76 => 29,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 302,  425 => 289,  406 => 273,  364 => 236,  356 => 232,  354 => 231,  335 => 214,  327 => 210,  325 => 209,  263 => 161,  242 => 149,  236 => 146,  222 => 134,  216 => 132,  192 => 119,  160 => 97,  100 => 55,  257 => 158,  190 => 118,  124 => 57,  97 => 38,  81 => 34,  348 => 173,  338 => 169,  334 => 168,  329 => 166,  324 => 151,  319 => 162,  299 => 156,  245 => 160,  228 => 119,  212 => 130,  167 => 82,  137 => 67,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 276,  389 => 260,  367 => 241,  347 => 223,  339 => 219,  318 => 201,  310 => 197,  308 => 196,  289 => 134,  260 => 155,  250 => 151,  248 => 151,  239 => 143,  233 => 105,  213 => 126,  181 => 110,  127 => 49,  84 => 31,  77 => 33,  205 => 92,  191 => 81,  174 => 105,  58 => 18,  65 => 21,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 150,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 1,  421 => 398,  415 => 395,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 369,  349 => 368,  345 => 367,  331 => 155,  326 => 360,  316 => 161,  311 => 354,  306 => 195,  301 => 350,  296 => 136,  291 => 346,  286 => 344,  281 => 342,  276 => 340,  266 => 133,  261 => 121,  251 => 330,  234 => 318,  232 => 121,  185 => 273,  180 => 74,  165 => 97,  161 => 69,  148 => 74,  118 => 47,  114 => 46,  110 => 52,  90 => 33,  70 => 28,  343 => 221,  321 => 358,  315 => 195,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 159,  256 => 129,  253 => 116,  244 => 147,  237 => 144,  226 => 137,  218 => 131,  215 => 96,  210 => 129,  207 => 131,  202 => 123,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 13,  435 => 146,  430 => 144,  427 => 143,  423 => 401,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 375,  362 => 110,  360 => 234,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 159,  309 => 97,  305 => 139,  298 => 91,  294 => 154,  285 => 133,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 128,  247 => 78,  241 => 162,  229 => 104,  220 => 70,  214 => 69,  177 => 65,  169 => 74,  140 => 69,  132 => 51,  128 => 59,  107 => 42,  61 => 30,  273 => 96,  269 => 163,  254 => 153,  243 => 112,  240 => 124,  238 => 147,  235 => 122,  230 => 82,  227 => 138,  224 => 71,  221 => 142,  219 => 76,  217 => 95,  208 => 89,  204 => 88,  179 => 78,  159 => 71,  143 => 60,  135 => 55,  119 => 57,  102 => 46,  71 => 24,  67 => 26,  63 => 20,  59 => 14,  93 => 50,  88 => 38,  78 => 30,  38 => 9,  28 => 3,  201 => 110,  196 => 121,  183 => 111,  171 => 83,  166 => 99,  163 => 81,  158 => 91,  156 => 64,  151 => 65,  142 => 84,  138 => 64,  136 => 79,  121 => 50,  117 => 68,  105 => 40,  91 => 41,  62 => 21,  49 => 20,  26 => 6,  87 => 25,  46 => 14,  44 => 12,  31 => 4,  94 => 34,  89 => 33,  85 => 32,  75 => 25,  68 => 24,  56 => 22,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 29,  72 => 25,  69 => 36,  47 => 18,  40 => 8,  37 => 6,  22 => 1,  246 => 328,  157 => 68,  145 => 66,  139 => 59,  131 => 60,  123 => 58,  120 => 40,  115 => 47,  111 => 54,  108 => 53,  101 => 39,  98 => 35,  96 => 37,  83 => 31,  74 => 30,  66 => 27,  55 => 27,  52 => 16,  50 => 15,  43 => 11,  41 => 5,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 122,  199 => 86,  193 => 86,  189 => 71,  187 => 83,  182 => 78,  176 => 72,  173 => 72,  168 => 72,  164 => 69,  162 => 57,  154 => 94,  149 => 67,  147 => 61,  144 => 55,  141 => 77,  133 => 56,  130 => 62,  125 => 51,  122 => 48,  116 => 54,  112 => 62,  109 => 50,  106 => 50,  103 => 41,  99 => 46,  95 => 42,  92 => 42,  86 => 32,  82 => 31,  80 => 45,  73 => 28,  64 => 22,  60 => 22,  57 => 25,  54 => 16,  51 => 19,  48 => 14,  45 => 13,  42 => 10,  39 => 10,  36 => 7,  33 => 7,  30 => 7,);
    }
}
