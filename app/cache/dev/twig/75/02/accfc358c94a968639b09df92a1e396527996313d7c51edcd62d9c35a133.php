<?php

/* RidwanOpportunityBundle:Opportunities:complete.html.twig */
class __TwigTemplate_7502accfc358c94a968639b09df92a1e396527996313d7c51edcd62d9c35a133 extends Twig_Template
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
        return "RidwanOpportunityBundle:Opportunities:complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 115,  473 => 247,  470 => 246,  433 => 224,  429 => 223,  415 => 217,  406 => 214,  391 => 211,  382 => 208,  366 => 201,  357 => 198,  353 => 197,  327 => 173,  316 => 168,  308 => 165,  303 => 163,  296 => 160,  287 => 157,  261 => 136,  228 => 119,  212 => 111,  206 => 108,  192 => 104,  170 => 87,  226 => 95,  216 => 113,  191 => 79,  178 => 105,  126 => 51,  100 => 43,  124 => 47,  58 => 21,  84 => 30,  76 => 30,  20 => 1,  153 => 60,  146 => 62,  113 => 54,  104 => 42,  97 => 51,  77 => 34,  134 => 54,  127 => 54,  81 => 32,  34 => 6,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 146,  575 => 143,  572 => 142,  566 => 139,  563 => 138,  556 => 136,  553 => 135,  551 => 134,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 124,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 226,  421 => 390,  419 => 219,  408 => 382,  403 => 380,  388 => 374,  383 => 372,  378 => 206,  373 => 204,  363 => 364,  358 => 362,  351 => 358,  347 => 357,  343 => 356,  339 => 355,  335 => 354,  329 => 351,  324 => 349,  319 => 347,  299 => 339,  289 => 335,  284 => 333,  279 => 331,  274 => 329,  259 => 323,  249 => 319,  244 => 317,  232 => 307,  200 => 277,  184 => 121,  181 => 76,  175 => 71,  172 => 102,  160 => 97,  155 => 70,  65 => 28,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 165,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 153,  594 => 151,  591 => 150,  589 => 149,  585 => 148,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 136,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 128,  532 => 127,  527 => 126,  525 => 125,  519 => 121,  517 => 120,  509 => 115,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 88,  452 => 75,  449 => 228,  445 => 227,  442 => 44,  436 => 13,  431 => 2,  428 => 1,  422 => 393,  420 => 390,  414 => 387,  404 => 383,  399 => 212,  394 => 379,  389 => 210,  369 => 369,  364 => 200,  359 => 365,  352 => 361,  348 => 360,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 352,  315 => 348,  310 => 346,  300 => 342,  295 => 340,  290 => 158,  280 => 334,  275 => 332,  265 => 328,  260 => 326,  250 => 322,  245 => 320,  233 => 310,  231 => 308,  185 => 109,  180 => 74,  165 => 66,  161 => 73,  148 => 74,  118 => 43,  114 => 47,  110 => 58,  90 => 33,  70 => 27,  342 => 216,  320 => 350,  304 => 341,  270 => 330,  255 => 324,  239 => 144,  236 => 143,  234 => 122,  225 => 136,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 279,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 45,  440 => 148,  437 => 225,  435 => 13,  430 => 2,  427 => 1,  423 => 220,  413 => 384,  409 => 385,  407 => 131,  402 => 213,  398 => 378,  393 => 376,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 366,  365 => 111,  362 => 110,  360 => 199,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 345,  312 => 167,  309 => 343,  305 => 344,  298 => 91,  294 => 159,  285 => 336,  283 => 156,  278 => 86,  268 => 85,  264 => 325,  258 => 154,  252 => 132,  247 => 129,  241 => 126,  229 => 73,  220 => 115,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 54,  128 => 68,  107 => 41,  61 => 26,  273 => 96,  269 => 327,  254 => 321,  243 => 127,  240 => 86,  238 => 85,  235 => 74,  230 => 305,  227 => 157,  224 => 156,  221 => 77,  219 => 76,  217 => 75,  208 => 109,  204 => 72,  179 => 73,  159 => 63,  143 => 54,  135 => 59,  119 => 48,  102 => 36,  71 => 24,  67 => 26,  63 => 22,  59 => 20,  93 => 30,  88 => 38,  78 => 30,  38 => 10,  28 => 4,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 85,  163 => 62,  158 => 62,  156 => 96,  151 => 64,  142 => 59,  138 => 52,  136 => 55,  121 => 42,  117 => 50,  105 => 44,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 36,  46 => 18,  44 => 15,  31 => 5,  94 => 34,  89 => 48,  85 => 46,  75 => 25,  68 => 25,  56 => 24,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 27,  72 => 26,  69 => 30,  47 => 15,  40 => 17,  37 => 8,  22 => 1,  246 => 90,  157 => 56,  145 => 63,  139 => 53,  131 => 53,  123 => 53,  120 => 58,  115 => 43,  111 => 46,  108 => 44,  101 => 37,  98 => 39,  96 => 39,  83 => 35,  74 => 29,  66 => 27,  55 => 23,  52 => 20,  50 => 21,  43 => 12,  41 => 10,  35 => 7,  32 => 5,  29 => 4,  209 => 88,  203 => 282,  199 => 106,  193 => 73,  189 => 71,  187 => 84,  182 => 234,  176 => 72,  173 => 71,  168 => 77,  164 => 99,  162 => 57,  154 => 65,  149 => 63,  147 => 56,  144 => 55,  141 => 62,  133 => 55,  130 => 62,  125 => 48,  122 => 64,  116 => 48,  112 => 45,  109 => 45,  106 => 38,  103 => 54,  99 => 41,  95 => 42,  92 => 38,  86 => 32,  82 => 33,  80 => 32,  73 => 32,  64 => 26,  60 => 26,  57 => 24,  54 => 22,  51 => 20,  48 => 16,  45 => 15,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
