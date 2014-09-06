<?php

/* RidwanEntityBundle:Skills:message.html.twig */
class __TwigTemplate_a4eb9aa51a3b01e4fda792127c60374dd2b8d647b3049fa4d0f67c4b419a72c3 extends Twig_Template
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
        echo "<h1>Skills list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Skills</th>
                <th>Causes</th>
                <th>Other</th>
                <th>Languages</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("skills_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "skills"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "causes"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "other"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "languages"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("skills_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("skills_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("skills_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "RidwanEntityBundle:Skills:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  97 => 37,  77 => 33,  134 => 54,  127 => 49,  81 => 34,  34 => 5,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 146,  575 => 143,  572 => 142,  566 => 139,  563 => 138,  556 => 136,  553 => 135,  551 => 134,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 124,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 44,  421 => 390,  419 => 387,  408 => 382,  403 => 380,  388 => 374,  383 => 372,  378 => 370,  373 => 368,  363 => 364,  358 => 362,  351 => 358,  347 => 357,  343 => 356,  339 => 355,  335 => 354,  329 => 351,  324 => 349,  319 => 347,  299 => 339,  289 => 335,  284 => 333,  279 => 331,  274 => 329,  259 => 323,  249 => 319,  244 => 317,  232 => 307,  200 => 277,  184 => 263,  181 => 235,  175 => 71,  172 => 70,  160 => 63,  155 => 61,  65 => 21,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 165,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 153,  594 => 151,  591 => 150,  589 => 149,  585 => 148,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 136,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 128,  532 => 127,  527 => 126,  525 => 125,  519 => 121,  517 => 120,  509 => 115,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 88,  452 => 75,  449 => 74,  445 => 45,  442 => 44,  436 => 13,  431 => 2,  428 => 1,  422 => 393,  420 => 390,  414 => 387,  404 => 383,  399 => 381,  394 => 379,  389 => 377,  369 => 369,  364 => 367,  359 => 365,  352 => 361,  348 => 360,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 352,  315 => 348,  310 => 346,  300 => 342,  295 => 340,  290 => 338,  280 => 334,  275 => 332,  265 => 328,  260 => 326,  250 => 322,  245 => 320,  233 => 310,  231 => 308,  185 => 266,  180 => 74,  165 => 66,  161 => 64,  148 => 57,  118 => 40,  114 => 46,  110 => 38,  90 => 33,  70 => 28,  342 => 216,  320 => 350,  304 => 341,  270 => 330,  255 => 324,  239 => 144,  236 => 143,  234 => 142,  225 => 136,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 279,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 45,  440 => 148,  437 => 147,  435 => 13,  430 => 2,  427 => 1,  423 => 142,  413 => 384,  409 => 385,  407 => 131,  402 => 130,  398 => 378,  393 => 376,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 366,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 345,  312 => 193,  309 => 343,  305 => 344,  298 => 91,  294 => 337,  285 => 336,  283 => 88,  278 => 86,  268 => 85,  264 => 325,  258 => 154,  252 => 152,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 53,  132 => 51,  128 => 44,  107 => 41,  61 => 20,  273 => 96,  269 => 327,  254 => 321,  243 => 146,  240 => 86,  238 => 85,  235 => 74,  230 => 305,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 73,  159 => 63,  143 => 54,  135 => 53,  119 => 57,  102 => 36,  71 => 20,  67 => 26,  63 => 15,  59 => 24,  93 => 34,  88 => 38,  78 => 30,  38 => 9,  28 => 3,  201 => 280,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 62,  151 => 63,  142 => 59,  138 => 52,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 41,  62 => 23,  49 => 14,  26 => 6,  87 => 25,  46 => 14,  44 => 14,  31 => 4,  94 => 34,  89 => 32,  85 => 31,  75 => 25,  68 => 23,  56 => 22,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 28,  72 => 24,  69 => 28,  47 => 18,  40 => 13,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 53,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 36,  98 => 35,  96 => 35,  83 => 25,  74 => 29,  66 => 27,  55 => 15,  52 => 20,  50 => 12,  43 => 9,  41 => 5,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 282,  199 => 124,  193 => 73,  189 => 71,  187 => 84,  182 => 234,  176 => 72,  173 => 71,  168 => 72,  164 => 65,  162 => 57,  154 => 58,  149 => 51,  147 => 56,  144 => 55,  141 => 54,  133 => 55,  130 => 46,  125 => 44,  122 => 41,  116 => 41,  112 => 42,  109 => 40,  106 => 50,  103 => 32,  99 => 46,  95 => 42,  92 => 42,  86 => 32,  82 => 31,  80 => 41,  73 => 19,  64 => 22,  60 => 21,  57 => 25,  54 => 20,  51 => 19,  48 => 8,  45 => 17,  42 => 10,  39 => 10,  36 => 3,  33 => 7,  30 => 7,);
    }
}
