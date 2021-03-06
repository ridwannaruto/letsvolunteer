<?php

/* RidwanOpportunityBundle:Opportunities:organization.html.twig */
class __TwigTemplate_e1e565768a33e8681f066d08b6b10abe65ddc287c8b2380beace261611479939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\" class=\"span10\">

    ";
        // line 6
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"), 0, array(), "array") == "ORGANIZATION")) {
            // line 7
            echo "        <div class=\"row-fluid\">
            <div class=\"pull-right\">
                <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("ridwan_opportunity_new");
            echo "\">
                    <button class=\"btn btn-round btn-success\"><i class=\"icon-plus\"></i> Create Opportunity</button>
                </a>
            </div>
        </div><br>
    ";
        }
        // line 15
        echo "
    <div class=\"row-fluid\">

        <div class=\"box span12\">

            <div class=\"box-header well\" data-original-title>

                <h2><i class=\"icon-list-alt\"></i> Volunteering Opportunities by ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "html", null, true);
        echo "</h2>

            </div>
            <div class=\"box-content\">
                <br>

                <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                    <tr>
                        <th width=\"15%\">Title</th>
                        <th width=\"45%\">Details</th>
                        <th width=\"10%\">Type</th>
                        <th width=\"10%\">Location</th>
                        <th width=\"10%\">Status</th>

                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Opportunities"]) ? $context["Opportunities"] : $this->getContext($context, "Opportunities")));
        foreach ($context['_seq'] as $context["_key"] => $context["op"]) {
            // line 43
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_opportunity_details", array("opportunityID" => $this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "title"), "html", null, true);
            echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "description"), "html", null, true);
            echo "
                            </td>
                            <td class=\"center\">
                                ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "cause"), "html", null, true);
            echo "
                            </td>
                            <td class=\"center\">
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "location"), "html", null, true);
            echo "
                            </td>
                            <td class=\"center\">
                                ";
            // line 57
            if (($this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "status") == (-1))) {
                // line 58
                echo "                                    <h3> <span class=\"label label-important\"> Rejected </span></h3>
                                ";
            } elseif (($this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "status") == 0)) {
                // line 60
                echo "                                    <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                ";
            } elseif (($this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "status") == 1)) {
                // line 63
                echo "                                    <h3> <span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                ";
            } elseif (($this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "status") == 2)) {
                // line 66
                echo "                                    <h3><span class=\"label label-inverse\">On going</span></h3>

                                ";
            } elseif (($this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "status") == 3)) {
                // line 69
                echo "                                    <h3><span class=\"label label-info\">Completed</span></h3>
                                ";
            }
            // line 71
            echo "                            </td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['op'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                </table>
            </div>

        </div>


    </div>

";
    }

    public function getTemplateName()
    {
        return "RidwanOpportunityBundle:Opportunities:organization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 102,  473 => 247,  470 => 246,  449 => 228,  445 => 227,  433 => 224,  419 => 219,  399 => 212,  391 => 211,  382 => 208,  378 => 206,  373 => 204,  366 => 201,  357 => 198,  303 => 163,  290 => 158,  287 => 157,  206 => 108,  170 => 87,  188 => 87,  178 => 105,  150 => 75,  184 => 121,  129 => 55,  126 => 51,  20 => 1,  153 => 60,  146 => 64,  155 => 70,  292 => 135,  279 => 130,  267 => 124,  249 => 115,  223 => 101,  211 => 96,  197 => 88,  175 => 90,  104 => 51,  134 => 54,  152 => 66,  113 => 52,  76 => 30,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 226,  425 => 289,  406 => 214,  364 => 200,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 209,  263 => 161,  242 => 149,  236 => 146,  222 => 101,  216 => 113,  192 => 104,  160 => 81,  100 => 43,  257 => 158,  190 => 118,  124 => 54,  97 => 42,  81 => 45,  348 => 173,  338 => 169,  334 => 168,  329 => 166,  324 => 151,  319 => 162,  299 => 156,  245 => 160,  228 => 104,  212 => 111,  167 => 82,  137 => 69,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 276,  389 => 210,  367 => 241,  347 => 223,  339 => 219,  318 => 201,  310 => 197,  308 => 165,  289 => 134,  260 => 155,  250 => 151,  248 => 151,  239 => 143,  233 => 105,  213 => 126,  181 => 76,  127 => 63,  84 => 30,  77 => 28,  205 => 93,  191 => 102,  174 => 79,  58 => 22,  65 => 23,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 150,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 398,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 197,  349 => 368,  345 => 367,  331 => 155,  326 => 360,  316 => 168,  311 => 354,  306 => 195,  301 => 350,  296 => 160,  291 => 346,  286 => 344,  281 => 342,  276 => 340,  266 => 133,  261 => 136,  251 => 330,  234 => 107,  232 => 121,  185 => 109,  180 => 82,  165 => 84,  161 => 70,  148 => 74,  118 => 58,  114 => 47,  110 => 54,  90 => 45,  70 => 27,  343 => 221,  321 => 358,  315 => 195,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 120,  256 => 129,  253 => 116,  244 => 147,  237 => 144,  226 => 95,  218 => 102,  215 => 97,  210 => 112,  207 => 97,  202 => 123,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 225,  435 => 146,  430 => 144,  427 => 143,  423 => 220,  413 => 134,  409 => 132,  407 => 131,  402 => 213,  398 => 129,  393 => 126,  387 => 122,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 375,  362 => 110,  360 => 199,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 167,  309 => 97,  305 => 139,  298 => 91,  294 => 159,  285 => 133,  283 => 156,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 116,  247 => 129,  241 => 126,  229 => 104,  220 => 115,  214 => 69,  177 => 65,  169 => 75,  140 => 63,  132 => 66,  128 => 68,  107 => 43,  61 => 21,  273 => 96,  269 => 163,  254 => 153,  243 => 127,  240 => 124,  238 => 108,  235 => 122,  230 => 82,  227 => 157,  224 => 156,  221 => 142,  219 => 76,  217 => 95,  208 => 109,  204 => 88,  179 => 92,  159 => 73,  143 => 61,  135 => 59,  119 => 48,  102 => 36,  71 => 25,  67 => 24,  63 => 22,  59 => 22,  93 => 37,  88 => 38,  78 => 30,  38 => 10,  28 => 3,  201 => 83,  196 => 105,  183 => 111,  171 => 71,  166 => 85,  163 => 81,  158 => 69,  156 => 79,  151 => 66,  142 => 63,  138 => 64,  136 => 60,  121 => 57,  117 => 47,  105 => 47,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 36,  46 => 17,  44 => 13,  31 => 4,  94 => 34,  89 => 34,  85 => 33,  75 => 31,  68 => 25,  56 => 21,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 26,  69 => 30,  47 => 15,  40 => 11,  37 => 7,  22 => 1,  246 => 113,  157 => 69,  145 => 63,  139 => 69,  131 => 64,  123 => 53,  120 => 52,  115 => 48,  111 => 76,  108 => 44,  101 => 42,  98 => 48,  96 => 39,  83 => 35,  74 => 29,  66 => 27,  55 => 23,  52 => 17,  50 => 15,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 4,  209 => 88,  203 => 93,  199 => 107,  193 => 87,  189 => 71,  187 => 84,  182 => 78,  176 => 72,  173 => 72,  168 => 77,  164 => 99,  162 => 74,  154 => 78,  149 => 63,  147 => 74,  144 => 61,  141 => 71,  133 => 57,  130 => 56,  125 => 52,  122 => 60,  116 => 57,  112 => 45,  109 => 45,  106 => 38,  103 => 42,  99 => 41,  95 => 42,  92 => 38,  86 => 43,  82 => 42,  80 => 31,  73 => 26,  64 => 23,  60 => 26,  57 => 24,  54 => 20,  51 => 20,  48 => 16,  45 => 15,  42 => 13,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
