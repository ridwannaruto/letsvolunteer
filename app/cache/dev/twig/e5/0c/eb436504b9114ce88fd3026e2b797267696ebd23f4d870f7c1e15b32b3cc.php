<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_e50ceb436504b9114ce88fd3026e2b797267696ebd23f4d870f7c1e15b32b3cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 72,  129 => 58,  167 => 89,  223 => 124,  450 => 199,  438 => 89,  434 => 45,  425 => 13,  417 => 1,  411 => 202,  333 => 168,  190 => 89,  637 => 358,  615 => 344,  609 => 341,  606 => 340,  592 => 334,  588 => 333,  547 => 308,  543 => 306,  539 => 304,  533 => 301,  513 => 292,  506 => 289,  502 => 288,  443 => 247,  416 => 235,  412 => 234,  371 => 201,  350 => 191,  346 => 189,  311 => 159,  297 => 155,  253 => 123,  174 => 88,  150 => 81,  137 => 74,  23 => 3,  198 => 111,  345 => 165,  321 => 146,  317 => 145,  313 => 144,  301 => 156,  291 => 137,  271 => 130,  263 => 126,  188 => 104,  222 => 128,  211 => 108,  205 => 104,  197 => 88,  473 => 261,  470 => 246,  433 => 224,  429 => 223,  415 => 217,  406 => 214,  391 => 211,  382 => 208,  366 => 201,  357 => 198,  353 => 176,  327 => 173,  316 => 168,  308 => 165,  303 => 163,  296 => 160,  287 => 135,  261 => 127,  228 => 104,  212 => 111,  206 => 108,  192 => 91,  170 => 78,  226 => 95,  216 => 113,  191 => 96,  178 => 97,  126 => 69,  100 => 36,  124 => 53,  58 => 17,  84 => 27,  76 => 28,  20 => 1,  153 => 62,  146 => 60,  113 => 40,  104 => 37,  97 => 41,  77 => 25,  134 => 57,  127 => 60,  81 => 31,  34 => 10,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 331,  575 => 143,  572 => 142,  566 => 139,  563 => 315,  556 => 136,  553 => 135,  551 => 310,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 295,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 90,  421 => 390,  419 => 236,  408 => 382,  403 => 196,  388 => 190,  383 => 188,  378 => 186,  373 => 184,  363 => 180,  358 => 178,  351 => 358,  347 => 357,  343 => 356,  339 => 355,  335 => 354,  329 => 167,  324 => 349,  319 => 163,  299 => 155,  289 => 151,  284 => 149,  279 => 147,  274 => 145,  259 => 139,  249 => 135,  244 => 133,  232 => 307,  200 => 277,  184 => 105,  181 => 92,  175 => 78,  172 => 77,  160 => 71,  155 => 83,  65 => 22,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 348,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 338,  594 => 335,  591 => 150,  589 => 149,  585 => 332,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 314,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 302,  532 => 127,  527 => 298,  525 => 125,  519 => 121,  517 => 120,  509 => 290,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 260,  452 => 75,  449 => 250,  445 => 117,  442 => 44,  436 => 13,  431 => 44,  428 => 1,  422 => 393,  420 => 2,  414 => 387,  404 => 383,  399 => 212,  394 => 379,  389 => 210,  369 => 369,  364 => 197,  359 => 365,  352 => 361,  348 => 174,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 166,  315 => 348,  310 => 346,  300 => 342,  295 => 138,  290 => 158,  280 => 141,  275 => 332,  265 => 328,  260 => 326,  250 => 322,  245 => 320,  233 => 109,  231 => 129,  185 => 100,  180 => 77,  165 => 66,  161 => 86,  148 => 65,  118 => 61,  114 => 57,  110 => 22,  90 => 37,  70 => 29,  342 => 188,  320 => 350,  304 => 157,  270 => 330,  255 => 126,  239 => 131,  236 => 132,  234 => 129,  225 => 125,  218 => 131,  215 => 123,  210 => 120,  207 => 107,  202 => 115,  53 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 200,  444 => 45,  440 => 148,  437 => 244,  435 => 13,  430 => 2,  427 => 1,  423 => 238,  413 => 384,  409 => 199,  407 => 131,  402 => 213,  398 => 194,  393 => 192,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 182,  365 => 111,  362 => 110,  360 => 199,  355 => 106,  341 => 170,  337 => 169,  322 => 101,  314 => 161,  312 => 167,  309 => 159,  305 => 142,  298 => 91,  294 => 153,  285 => 336,  283 => 156,  278 => 132,  268 => 85,  264 => 141,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 73,  220 => 117,  214 => 69,  177 => 65,  169 => 75,  140 => 72,  132 => 58,  128 => 46,  107 => 45,  61 => 23,  273 => 96,  269 => 143,  254 => 137,  243 => 137,  240 => 113,  238 => 119,  235 => 116,  230 => 305,  227 => 116,  224 => 156,  221 => 111,  219 => 110,  217 => 75,  208 => 109,  204 => 116,  179 => 79,  159 => 84,  143 => 80,  135 => 62,  119 => 55,  102 => 17,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  93 => 38,  88 => 31,  78 => 26,  38 => 6,  28 => 3,  201 => 83,  196 => 105,  183 => 96,  171 => 90,  166 => 88,  163 => 67,  158 => 79,  156 => 70,  151 => 66,  142 => 65,  138 => 64,  136 => 59,  121 => 67,  117 => 19,  105 => 18,  91 => 34,  62 => 21,  49 => 10,  26 => 9,  87 => 33,  46 => 12,  44 => 15,  31 => 4,  94 => 34,  89 => 30,  85 => 32,  75 => 24,  68 => 34,  56 => 11,  24 => 3,  27 => 4,  25 => 35,  21 => 2,  19 => 1,  79 => 30,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 113,  157 => 80,  145 => 78,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 54,  111 => 46,  108 => 47,  101 => 43,  98 => 49,  96 => 35,  83 => 35,  74 => 27,  66 => 37,  55 => 16,  52 => 10,  50 => 18,  43 => 7,  41 => 10,  35 => 6,  32 => 7,  29 => 3,  209 => 113,  203 => 106,  199 => 101,  193 => 100,  189 => 99,  187 => 95,  182 => 84,  176 => 92,  173 => 78,  168 => 76,  164 => 72,  162 => 66,  154 => 82,  149 => 79,  147 => 76,  144 => 64,  141 => 55,  133 => 73,  130 => 56,  125 => 57,  122 => 64,  116 => 51,  112 => 47,  109 => 55,  106 => 45,  103 => 28,  99 => 40,  95 => 34,  92 => 36,  86 => 47,  82 => 28,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 20,  54 => 19,  51 => 16,  48 => 9,  45 => 14,  42 => 11,  39 => 6,  36 => 8,  33 => 4,  30 => 7,);
    }
}
