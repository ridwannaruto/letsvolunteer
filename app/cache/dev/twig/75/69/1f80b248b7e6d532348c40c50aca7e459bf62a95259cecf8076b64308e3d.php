<?php

/* RidwanOpportunityBundle:feedback:organization.html.twig */
class __TwigTemplate_75691f80b248b7e6d532348c40c50aca7e459bf62a95259cecf8076b64308e3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MoraspiritStyleBundle:basic:basic.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'delete' => array($this, 'block_delete'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoraspiritStyleBundle:basic:basic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"content\" class=\"span10\">
    <div class=\"row-fluid\">
        <div class=\"box span6\">                               

            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h2>Task</h2>
                    <hr>


                    <br>
                    <table>
                        <tr>
                            <td width =\"5%\"></td>
                            <td >
                                <h3>Task</h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "name"), "html", null, true);
        echo "<br><br>
                                <h3>Type</h3>
                                ";
        // line 23
        if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 1)) {
            // line 24
            echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 2)) {
            // line 26
            echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 3)) {
            // line 28
            echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 4)) {
            // line 30
            echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
        }
        // line 32
        echo "                                <br><br>

                                <h3>Assigned To</h3><a href=\"\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "firstname"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "lastname"), "html", null, true);
        echo "</a><br><br>
                                <h3>Pillar</h3>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "pillar"), "html", null, true);
        echo "<br><br>
                                <h3>Due Date</h3>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "duetimestamp"), "html", null, true);
        echo "<br><br>

                                 <h3>Goal</h3>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "goals"), "html", null, true);
        echo "<br><br>
                                <h3>Description</h3>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "description"), "html", null, true);
        echo "<br><br>


                            </td>
                        </tr>

                    </table>
                    <br>


                </div>
            </div>
        </div>

        <div class=\"box span6\">                               

            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h2>Feedback</h2>
                    <hr>


                    <br>
                    <table>
                        <tr>

                            <td width =\"5%\"></td>
                            <td >
                                <form name=\"moraspirit_feedback\" method=\"POST\" action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_complete", array("taskID" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"))), "html", null, true);
        echo "\" class=\"form-horizontal center\">

                                    <div class=\"control-group\">
                                        <h3>Rate</h3>Please provide a rating from 1-10 for this specific task<br><br>

                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating1\" value=\"1\" required >
                                            Dissapointed
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating2\" value=\"2\">
                                            Very Poor
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating3\" value=\"3\">
                                            Poor
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating4\" value=\"4\">
                                            Average
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating5\" value=\"5\" >
                                            Normal
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating6\" value=\"6\">
                                            Satisfied
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating7\" value=\"7\" >
                                            Good
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating8\" value=\"8\">
                                            Very Good
                                        </label><br>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating9\" value=\"9\">
                                            Excellent
                                        </label><br>
                                        <div style=\"clear:both\"></div>
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"rating\" id=\"rating10\" value=\"10\">
                                            Marvelous
                                        </label><br>

                                    </div>
                                    <h3>Feedack</h3>
                                    Please provide a valuable feedback on the work carried out by ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "firstname"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "lastname"), "html", null, true);
        echo ". ( Work quality, professional behaviour, efficiency etc )

                                    <br><br>
                                    <div class=\"control-group primary\">                                      

                                        <textarea id=\"moraspirit_entitybundle_task_description\" name=\"feedback\" required=\"required\" placeholder=\"type your feedback here..\" class=\"span12\"></textarea>

                                    </div>

                                    <br><div class=\"controls\">
                                        <button type=\"submit\" id=\"moraspirit_submit\" name=\"complete\" class=\"btn btn-success span6\">Complete Task</button>
                                    </div>

                                </form>

                            </td>

                        </tr>

                    </table>
                    <br>


                </div>
            </div>
        </div>



    </div>



";
    }

    // line 156
    public function block_delete($context, array $blocks = array())
    {
        // line 157
        echo "    <div class=\"modal hide fade\" id=\"delete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirm</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure you want to delete this Task?                          \t\t
            </p>


        </div>
        <div class=\"modal-footer\">

            <form action=\"empty\" id = \"continue-form\" method=\"POST\">
                <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
                <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
            </form>

        </div>
    </div>

\t";
    }

    public function getTemplateName()
    {
        return "RidwanOpportunityBundle:feedback:organization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 102,  473 => 247,  470 => 246,  449 => 228,  445 => 227,  433 => 224,  419 => 219,  399 => 212,  391 => 211,  382 => 208,  378 => 206,  373 => 204,  366 => 201,  357 => 198,  303 => 163,  290 => 158,  287 => 157,  206 => 108,  170 => 87,  188 => 87,  178 => 105,  150 => 67,  184 => 121,  129 => 55,  126 => 51,  20 => 1,  153 => 60,  146 => 64,  155 => 70,  292 => 135,  279 => 130,  267 => 124,  249 => 115,  223 => 101,  211 => 98,  197 => 115,  175 => 77,  104 => 39,  134 => 54,  152 => 66,  113 => 54,  76 => 30,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 226,  425 => 289,  406 => 214,  364 => 200,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 209,  263 => 161,  242 => 149,  236 => 146,  222 => 134,  216 => 113,  192 => 104,  160 => 97,  100 => 43,  257 => 158,  190 => 118,  124 => 54,  97 => 51,  81 => 45,  348 => 173,  338 => 169,  334 => 168,  329 => 166,  324 => 151,  319 => 162,  299 => 156,  245 => 160,  228 => 119,  212 => 111,  167 => 82,  137 => 60,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 276,  389 => 210,  367 => 241,  347 => 223,  339 => 219,  318 => 201,  310 => 197,  308 => 165,  289 => 134,  260 => 155,  250 => 151,  248 => 151,  239 => 143,  233 => 105,  213 => 126,  181 => 76,  127 => 51,  84 => 30,  77 => 34,  205 => 92,  191 => 79,  174 => 79,  58 => 21,  65 => 28,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 150,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 398,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 197,  349 => 368,  345 => 367,  331 => 155,  326 => 360,  316 => 168,  311 => 354,  306 => 195,  301 => 350,  296 => 160,  291 => 346,  286 => 344,  281 => 342,  276 => 340,  266 => 133,  261 => 136,  251 => 330,  234 => 122,  232 => 121,  185 => 109,  180 => 82,  165 => 76,  161 => 73,  148 => 74,  118 => 51,  114 => 47,  110 => 58,  90 => 35,  70 => 27,  343 => 221,  321 => 358,  315 => 195,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 159,  256 => 129,  253 => 116,  244 => 147,  237 => 144,  226 => 95,  218 => 102,  215 => 99,  210 => 129,  207 => 97,  202 => 123,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 225,  435 => 146,  430 => 144,  427 => 143,  423 => 220,  413 => 134,  409 => 132,  407 => 131,  402 => 213,  398 => 129,  393 => 126,  387 => 122,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 375,  362 => 110,  360 => 199,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 167,  309 => 97,  305 => 139,  298 => 91,  294 => 159,  285 => 133,  283 => 156,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 132,  247 => 129,  241 => 126,  229 => 104,  220 => 115,  214 => 69,  177 => 65,  169 => 78,  140 => 63,  132 => 54,  128 => 68,  107 => 45,  61 => 26,  273 => 96,  269 => 163,  254 => 153,  243 => 127,  240 => 124,  238 => 147,  235 => 122,  230 => 82,  227 => 157,  224 => 156,  221 => 142,  219 => 76,  217 => 95,  208 => 109,  204 => 88,  179 => 78,  159 => 73,  143 => 63,  135 => 59,  119 => 48,  102 => 36,  71 => 24,  67 => 26,  63 => 22,  59 => 20,  93 => 37,  88 => 38,  78 => 30,  38 => 10,  28 => 4,  201 => 83,  196 => 105,  183 => 111,  171 => 71,  166 => 85,  163 => 81,  158 => 69,  156 => 71,  151 => 64,  142 => 63,  138 => 64,  136 => 60,  121 => 42,  117 => 47,  105 => 44,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 36,  46 => 18,  44 => 13,  31 => 5,  94 => 34,  89 => 48,  85 => 46,  75 => 25,  68 => 25,  56 => 18,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 29,  72 => 26,  69 => 30,  47 => 15,  40 => 11,  37 => 8,  22 => 1,  246 => 328,  157 => 68,  145 => 63,  139 => 59,  131 => 53,  123 => 53,  120 => 52,  115 => 43,  111 => 46,  108 => 44,  101 => 42,  98 => 39,  96 => 39,  83 => 35,  74 => 29,  66 => 27,  55 => 23,  52 => 17,  50 => 21,  43 => 14,  41 => 10,  35 => 7,  32 => 5,  29 => 4,  209 => 88,  203 => 93,  199 => 106,  193 => 86,  189 => 71,  187 => 83,  182 => 78,  176 => 72,  173 => 72,  168 => 77,  164 => 99,  162 => 74,  154 => 65,  149 => 63,  147 => 64,  144 => 61,  141 => 62,  133 => 56,  130 => 56,  125 => 51,  122 => 64,  116 => 48,  112 => 45,  109 => 45,  106 => 38,  103 => 54,  99 => 41,  95 => 42,  92 => 38,  86 => 34,  82 => 33,  80 => 31,  73 => 32,  64 => 23,  60 => 26,  57 => 24,  54 => 17,  51 => 20,  48 => 16,  45 => 15,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
