<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_b80f1fddd07a1e529f5efeeebe6dcd02df3482dec0ad7d05a77db52b2c8fe2ee extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 289,  612 => 287,  587 => 283,  566 => 264,  522 => 255,  516 => 251,  505 => 249,  501 => 248,  494 => 244,  454 => 220,  332 => 176,  186 => 88,  438 => 89,  420 => 2,  417 => 1,  411 => 202,  388 => 190,  363 => 180,  274 => 145,  194 => 63,  637 => 358,  625 => 348,  615 => 344,  609 => 286,  606 => 340,  594 => 335,  588 => 333,  585 => 332,  581 => 331,  563 => 315,  557 => 314,  547 => 259,  543 => 306,  539 => 256,  535 => 302,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  431 => 44,  416 => 235,  383 => 188,  371 => 201,  358 => 178,  350 => 191,  342 => 188,  280 => 141,  23 => 3,  307 => 176,  231 => 129,  225 => 146,  195 => 91,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 45,  428 => 247,  412 => 210,  403 => 196,  352 => 199,  344 => 194,  333 => 168,  317 => 208,  300 => 168,  284 => 149,  277 => 150,  255 => 119,  359 => 209,  346 => 189,  304 => 157,  297 => 155,  200 => 104,  198 => 92,  172 => 77,  473 => 225,  470 => 246,  449 => 218,  445 => 117,  433 => 224,  419 => 236,  399 => 212,  391 => 211,  382 => 208,  378 => 186,  373 => 184,  366 => 201,  357 => 180,  303 => 169,  290 => 158,  287 => 136,  206 => 68,  170 => 78,  188 => 111,  178 => 81,  150 => 48,  184 => 96,  129 => 43,  126 => 42,  20 => 1,  153 => 49,  146 => 79,  155 => 50,  292 => 135,  279 => 147,  267 => 145,  249 => 135,  223 => 118,  211 => 99,  197 => 64,  175 => 91,  104 => 37,  134 => 73,  152 => 92,  113 => 40,  76 => 28,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 90,  425 => 13,  406 => 214,  364 => 197,  356 => 232,  354 => 179,  335 => 214,  327 => 173,  325 => 210,  263 => 126,  242 => 149,  236 => 80,  222 => 128,  216 => 103,  192 => 91,  160 => 71,  100 => 36,  257 => 152,  190 => 89,  124 => 53,  97 => 41,  81 => 34,  348 => 227,  338 => 169,  334 => 159,  329 => 167,  324 => 151,  319 => 163,  299 => 155,  245 => 152,  228 => 130,  212 => 71,  167 => 54,  137 => 82,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 338,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 209,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 185,  310 => 156,  308 => 175,  289 => 151,  260 => 144,  250 => 147,  248 => 137,  239 => 131,  233 => 112,  213 => 101,  181 => 84,  127 => 60,  84 => 29,  77 => 25,  205 => 96,  191 => 62,  174 => 80,  58 => 17,  65 => 22,  34 => 6,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 318,  661 => 317,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 294,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 285,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 310,  545 => 130,  542 => 257,  536 => 128,  533 => 301,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 199,  446 => 217,  443 => 247,  432 => 2,  429 => 216,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 176,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 159,  306 => 205,  301 => 156,  296 => 160,  291 => 151,  286 => 149,  281 => 163,  276 => 340,  266 => 147,  261 => 153,  251 => 141,  234 => 129,  232 => 148,  185 => 60,  180 => 95,  165 => 87,  161 => 86,  148 => 65,  118 => 53,  114 => 47,  110 => 22,  90 => 32,  70 => 34,  343 => 221,  321 => 209,  315 => 146,  313 => 207,  295 => 182,  271 => 125,  265 => 158,  259 => 139,  256 => 129,  253 => 123,  244 => 133,  237 => 144,  226 => 77,  218 => 126,  215 => 72,  210 => 108,  207 => 98,  202 => 107,  53 => 17,  480 => 280,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 200,  444 => 256,  440 => 148,  437 => 244,  435 => 146,  430 => 248,  427 => 143,  423 => 212,  413 => 134,  409 => 199,  407 => 131,  402 => 206,  398 => 194,  393 => 192,  387 => 222,  384 => 254,  381 => 187,  379 => 119,  374 => 116,  368 => 182,  365 => 375,  362 => 182,  360 => 204,  355 => 106,  341 => 170,  337 => 178,  322 => 101,  314 => 161,  312 => 176,  309 => 159,  305 => 139,  298 => 139,  294 => 153,  285 => 164,  283 => 148,  278 => 86,  268 => 85,  264 => 141,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 147,  220 => 117,  214 => 114,  177 => 100,  169 => 88,  140 => 76,  132 => 58,  128 => 53,  107 => 45,  61 => 12,  273 => 158,  269 => 143,  254 => 137,  243 => 137,  240 => 150,  238 => 108,  235 => 116,  230 => 79,  227 => 129,  224 => 76,  221 => 75,  219 => 110,  217 => 73,  208 => 69,  204 => 97,  179 => 94,  159 => 73,  143 => 76,  135 => 62,  119 => 55,  102 => 17,  71 => 35,  67 => 26,  63 => 19,  59 => 13,  93 => 31,  88 => 31,  78 => 26,  38 => 6,  28 => 6,  201 => 104,  196 => 92,  183 => 96,  171 => 90,  166 => 98,  163 => 87,  158 => 79,  156 => 94,  151 => 77,  142 => 76,  138 => 75,  136 => 59,  121 => 67,  117 => 19,  105 => 18,  91 => 34,  62 => 21,  49 => 10,  26 => 9,  87 => 33,  46 => 8,  44 => 12,  31 => 3,  94 => 34,  89 => 36,  85 => 32,  75 => 36,  68 => 23,  56 => 11,  24 => 6,  27 => 4,  25 => 35,  21 => 2,  19 => 1,  79 => 47,  72 => 24,  69 => 25,  47 => 15,  40 => 11,  37 => 5,  22 => 1,  246 => 145,  157 => 84,  145 => 90,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 54,  111 => 37,  108 => 19,  101 => 43,  98 => 42,  96 => 35,  83 => 33,  74 => 27,  66 => 33,  55 => 20,  52 => 10,  50 => 16,  43 => 7,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 99,  203 => 67,  199 => 65,  193 => 100,  189 => 99,  187 => 84,  182 => 59,  176 => 57,  173 => 56,  168 => 77,  164 => 53,  162 => 97,  154 => 82,  149 => 91,  147 => 47,  144 => 84,  141 => 64,  133 => 72,  130 => 59,  125 => 68,  122 => 73,  116 => 51,  112 => 47,  109 => 45,  106 => 45,  103 => 64,  99 => 33,  95 => 39,  92 => 39,  86 => 43,  82 => 28,  80 => 30,  73 => 23,  64 => 13,  60 => 20,  57 => 19,  54 => 20,  51 => 13,  48 => 9,  45 => 14,  42 => 7,  39 => 6,  36 => 9,  33 => 4,  30 => 7,);
    }
}
