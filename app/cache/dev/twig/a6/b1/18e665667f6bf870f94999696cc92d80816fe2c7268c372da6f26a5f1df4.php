<?php

/* RidwanOpportunityBundle:Assignment:details.html.twig */
class __TwigTemplate_a6b118e665667f6bf870f94999696cc92d80816fe2c7268c372da6f26a5f1df4 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"content\" class=\"span10\">
        <div class=\"row-fluid\">
            <div class=\"box span8\">

                <div class=\"box-content \">

                    <div id=\"content\" class=\"span12\">
                        <h2>Opportunity Details</h2>
                        <hr>
                        <br>

                        <div style=\"margin-left: 10%\">
                            <h6>Title</h6>

                            <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "title"), "html", null, true);
        echo "</h3>
                            <br>

                            <h6>Volunteer Role</h6>

                            <p align=\"justify\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "role"), "html", null, true);
        echo "</p>
                            <br>

                            <h6>Description</h6>

                            <p align=\"justify\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "description"), "html", null, true);
        echo "</p>
                            <br>

                            <table width='100%'>
                                <tr>
                                    <td width='40%'>
                                        <h6>Location</h6>

                                        <p align=\"justify\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "location"), "html", null, true);
        echo "</p>
                                        <br>

                                        <h6>Start Date</h6>

                                        <p align=\"justify\">";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "startdate"), "Y-m-d"), "html", null, true);
        echo "</p>
                                        <br>

                                        <h6>Expected End Date</h6>

                                        <p align=\"justify\">";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "enddate"), "Y-m-d"), "html", null, true);
        echo "</p>
                                        <br>

                                        <h6>Number of Volunteers</h6>

                                        <p align=\"justify\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "numberofvolunteers"), "html", null, true);
        echo "</p>
                                        <br>
                                    </td>
                                    <td width='10%'></td>
                                    <td width='40%'>
                                        <h6>Age Group</h6>

                                        <p align=\"justify\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "agegroup"), "html", null, true);
        echo "</p>
                                        <br>

                                        <h6>Difficulty</h6>

                                        <p align=\"justify\">
                                            ";
        // line 65
        if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 8)) {
            // line 66
            echo "
                                        <h3><span class=\"label label-important\"> Extreme</span></h3>
                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 6)) {
            // line 69
            echo "                                            <h3><span class=\"label label-warning\"> Hard</span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 4)) {
            // line 72
            echo "                                            <h3><span class=\"label label-inverse\"> Normal</span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 2)) {
            // line 75
            echo "                                            <h3><span class=\"label label-inverse\"> Easy </span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 0)) {
            // line 78
            echo "                                            <h3><span class=\"label label-info\"> Very Easy</span></h3>
                                        ";
        }
        // line 80
        echo "

                                        </p>
                                        <br>

                                        <h6>Cause</h6>

                                        <p align=\"justify\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "cause"), "html", null, true);
        echo "</p>
                                        <br>

                                        <h6>Status</h6>
                                        ";
        // line 91
        if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == (-1))) {
            // line 92
            echo "                                            <h3><span class=\"label label-important\"> Rejected</span></h3>
                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 0)) {
            // line 94
            echo "                                            <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 1)) {
            // line 97
            echo "                                            <h3><span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 2)) {
            // line 100
            echo "                                            <h3><span class=\"label label-inverse\"> On going</span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 3)) {
            // line 103
            echo "                                            <h3><span class=\"label label-info\">Completed</span></h3>
                                        ";
        }
        // line 105
        echo "                                        <br>
                                    </td>
                                    <td width='10%'></td>
                                </tr>

                            </table>


                            <h6>Training</h6>

                            <p align=\"justify\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "training"), "html", null, true);
        echo "</p>
                            <br>

                            <h6>Expenses</h6>

                            <p align=\"justify\">";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "expenses"), "html", null, true);
        echo "</p>
                            <br>

                            <h6>Volunteer Hours</h6>
                            ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "time"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 125
            echo "                                <label>
                                    ";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "html", null, true);
            echo "
                                </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                            <br><br>

                        </div>


                    </div>
                </div>
            </div>

            <div class=\"box span4\">
                <div class=\"box-content \">

                    <div id=\"content\" class=\"span12\">
                        <h6>Volunteers List</h6>

                        ";
        // line 144
        if (((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")) == null)) {
            // line 145
            echo "                            <p align=\"center\">list not generated</p>
                        ";
        } else {
            // line 147
            echo "

                            <table class=\"table\" width=\"100%\">
                                <br>
                                <tbody>
                                ";
            // line 152
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 153
                echo "                                    ";
                if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 20) && ($this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "user") != null))) {
                    // line 154
                    echo "                                    <tr>
                                        <td class=\"center\">
                                            <div class=\"pull-right\">
                                                <a href='#' url=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_opportunity_suggest", array("opID" => $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"), "userID" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "user"), "id"))), "html", null, true);
                    echo "\"
                                                        id=\"";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                    echo "\"
                                                        class=\"btn btn-complete btn-mini btn-success\">suggest
                                                </a>

                                            </div>
                                            <a href=\"";
                    // line 163
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_profile", array("ID" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "user"), "id"))), "html", null, true);
                    echo "\">
                                                ";
                    // line 164
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "firstname"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "lastname"), "html", null, true);
                    echo "</a>
                                            </a>


                                        </td>


                                    </tr>
                                        ";
                }
                // line 173
                echo "

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "

                                </tbody>
                            </table><hr>
                            <p align=\"center\"><a href=\"#\"><button class=\"btn btn-info btn-small\">see full list</button></a></p>



                        ";
        }
        // line 185
        echo "
                    </div>


                </div>

            </div>


        </div>
    </div>

    <div class=\"modal hide fade\" id=\"complete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirmation</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure this volunteer is suitable?
            </p>


        </div>
        <div class=\"modal-footer\">

            <form action=\"empty\" id=\"continue-form\" method=\"POST\">
                <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\"/>
                <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
            </form>

        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "RidwanOpportunityBundle:Assignment:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 176,  231 => 107,  225 => 104,  195 => 89,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 250,  428 => 247,  412 => 236,  403 => 231,  352 => 199,  344 => 194,  333 => 186,  317 => 176,  300 => 168,  284 => 155,  277 => 150,  255 => 119,  359 => 209,  346 => 198,  304 => 173,  297 => 171,  200 => 110,  198 => 109,  172 => 102,  473 => 276,  470 => 246,  449 => 259,  445 => 227,  433 => 224,  419 => 219,  399 => 212,  391 => 211,  382 => 208,  378 => 216,  373 => 204,  366 => 201,  357 => 198,  303 => 169,  290 => 158,  287 => 136,  206 => 110,  170 => 97,  188 => 87,  178 => 96,  150 => 75,  184 => 105,  129 => 72,  126 => 51,  20 => 1,  153 => 68,  146 => 64,  155 => 79,  292 => 135,  279 => 130,  267 => 145,  249 => 115,  223 => 123,  211 => 124,  197 => 88,  175 => 100,  104 => 46,  134 => 75,  152 => 87,  113 => 52,  76 => 30,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 226,  425 => 289,  406 => 214,  364 => 200,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 181,  263 => 124,  242 => 149,  236 => 131,  222 => 101,  216 => 113,  192 => 102,  160 => 82,  100 => 43,  257 => 152,  190 => 101,  124 => 69,  97 => 42,  81 => 32,  348 => 173,  338 => 169,  334 => 159,  329 => 166,  324 => 151,  319 => 162,  299 => 173,  245 => 115,  228 => 104,  212 => 111,  167 => 82,  137 => 69,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 234,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 185,  310 => 197,  308 => 175,  289 => 134,  260 => 155,  250 => 147,  248 => 137,  239 => 143,  233 => 105,  213 => 98,  181 => 81,  127 => 54,  84 => 30,  77 => 28,  205 => 110,  191 => 105,  174 => 90,  58 => 21,  65 => 23,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 150,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 293,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 197,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 172,  306 => 195,  301 => 172,  296 => 160,  291 => 137,  286 => 344,  281 => 163,  276 => 340,  266 => 147,  261 => 153,  251 => 118,  234 => 107,  232 => 121,  185 => 109,  180 => 103,  165 => 94,  161 => 92,  148 => 78,  118 => 58,  114 => 53,  110 => 54,  90 => 47,  70 => 26,  343 => 221,  321 => 358,  315 => 146,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 120,  256 => 129,  253 => 116,  244 => 144,  237 => 144,  226 => 95,  218 => 126,  215 => 125,  210 => 113,  207 => 95,  202 => 123,  53 => 16,  480 => 280,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 261,  444 => 256,  440 => 148,  437 => 225,  435 => 146,  430 => 248,  427 => 143,  423 => 220,  413 => 134,  409 => 132,  407 => 131,  402 => 213,  398 => 228,  393 => 225,  387 => 222,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 209,  365 => 375,  362 => 210,  360 => 204,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 176,  309 => 97,  305 => 139,  298 => 139,  294 => 138,  285 => 164,  283 => 162,  278 => 86,  268 => 85,  264 => 154,  258 => 142,  252 => 116,  247 => 129,  241 => 126,  229 => 104,  220 => 119,  214 => 118,  177 => 80,  169 => 88,  140 => 70,  132 => 66,  128 => 68,  107 => 43,  61 => 21,  273 => 158,  269 => 157,  254 => 143,  243 => 138,  240 => 124,  238 => 108,  235 => 108,  230 => 82,  227 => 129,  224 => 121,  221 => 142,  219 => 121,  217 => 99,  208 => 109,  204 => 120,  179 => 94,  159 => 91,  143 => 80,  135 => 59,  119 => 66,  102 => 36,  71 => 25,  67 => 24,  63 => 29,  59 => 22,  93 => 37,  88 => 36,  78 => 30,  38 => 10,  28 => 4,  201 => 107,  196 => 115,  183 => 97,  171 => 77,  166 => 85,  163 => 72,  158 => 82,  156 => 79,  151 => 77,  142 => 63,  138 => 71,  136 => 60,  121 => 57,  117 => 65,  105 => 44,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 35,  46 => 17,  44 => 13,  31 => 5,  94 => 34,  89 => 34,  85 => 33,  75 => 31,  68 => 25,  56 => 21,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 26,  69 => 30,  47 => 19,  40 => 11,  37 => 7,  22 => 1,  246 => 145,  157 => 84,  145 => 63,  139 => 78,  131 => 64,  123 => 53,  120 => 52,  115 => 54,  111 => 76,  108 => 59,  101 => 42,  98 => 52,  96 => 41,  83 => 35,  74 => 37,  66 => 25,  55 => 24,  52 => 17,  50 => 16,  43 => 14,  41 => 11,  35 => 6,  32 => 5,  29 => 4,  209 => 115,  203 => 93,  199 => 90,  193 => 87,  189 => 86,  187 => 84,  182 => 98,  176 => 72,  173 => 93,  168 => 90,  164 => 85,  162 => 74,  154 => 78,  149 => 76,  147 => 74,  144 => 61,  141 => 62,  133 => 57,  130 => 63,  125 => 52,  122 => 58,  116 => 57,  112 => 45,  109 => 45,  106 => 48,  103 => 48,  99 => 41,  95 => 40,  92 => 38,  86 => 43,  82 => 42,  80 => 31,  73 => 26,  64 => 23,  60 => 26,  57 => 24,  54 => 17,  51 => 20,  48 => 16,  45 => 15,  42 => 13,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
