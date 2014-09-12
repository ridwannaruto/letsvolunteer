<?php

/* RidwanOpportunityBundle:Opportunities:complete.html.twig */
class __TwigTemplate_7502accfc358c94a968639b09df92a1e396527996313d7c51edcd62d9c35a133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'delete' => array($this, 'block_delete'),
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
        return array (  197 => 115,  172 => 102,  160 => 97,  470 => 246,  449 => 228,  445 => 227,  441 => 226,  433 => 224,  419 => 219,  406 => 214,  399 => 212,  391 => 211,  389 => 210,  382 => 208,  378 => 206,  373 => 204,  366 => 201,  364 => 200,  357 => 198,  327 => 173,  308 => 165,  303 => 163,  290 => 158,  287 => 157,  228 => 119,  206 => 108,  192 => 104,  216 => 113,  191 => 79,  184 => 121,  178 => 105,  126 => 51,  100 => 43,  124 => 54,  20 => 1,  153 => 60,  146 => 64,  104 => 42,  97 => 51,  134 => 54,  127 => 51,  81 => 45,  76 => 30,  872 => 572,  868 => 571,  864 => 570,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 487,  701 => 485,  689 => 478,  680 => 476,  676 => 475,  645 => 452,  640 => 450,  635 => 448,  628 => 446,  603 => 423,  592 => 418,  583 => 415,  578 => 413,  575 => 412,  571 => 411,  546 => 389,  534 => 380,  510 => 362,  494 => 349,  473 => 247,  452 => 313,  431 => 295,  396 => 266,  334 => 210,  292 => 173,  288 => 171,  284 => 169,  282 => 168,  263 => 151,  255 => 147,  186 => 93,  170 => 87,  155 => 70,  129 => 67,  113 => 54,  84 => 30,  248 => 169,  236 => 160,  212 => 111,  198 => 131,  181 => 76,  58 => 21,  828 => 388,  824 => 545,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 34,  65 => 28,  34 => 6,  826 => 383,  822 => 302,  819 => 543,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 484,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 458,  655 => 179,  652 => 178,  642 => 171,  637 => 169,  632 => 447,  625 => 165,  622 => 164,  620 => 163,  617 => 162,  609 => 157,  604 => 155,  598 => 152,  591 => 150,  588 => 417,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 136,  554 => 135,  552 => 134,  547 => 131,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 371,  516 => 120,  514 => 119,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 388,  415 => 217,  410 => 383,  405 => 381,  400 => 379,  395 => 377,  390 => 375,  385 => 373,  380 => 371,  375 => 369,  370 => 367,  353 => 197,  349 => 358,  345 => 357,  331 => 352,  326 => 350,  316 => 168,  311 => 344,  306 => 342,  301 => 340,  296 => 160,  291 => 336,  286 => 334,  281 => 332,  276 => 330,  266 => 326,  261 => 136,  251 => 320,  234 => 122,  232 => 306,  185 => 109,  180 => 74,  165 => 104,  161 => 73,  148 => 74,  118 => 51,  114 => 47,  110 => 58,  90 => 35,  70 => 27,  343 => 217,  321 => 348,  315 => 195,  313 => 194,  295 => 182,  271 => 328,  265 => 158,  259 => 149,  256 => 322,  253 => 146,  244 => 147,  237 => 144,  226 => 95,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 278,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 225,  435 => 146,  430 => 144,  427 => 143,  423 => 220,  413 => 280,  409 => 132,  407 => 131,  402 => 213,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 365,  362 => 110,  360 => 199,  355 => 106,  341 => 356,  337 => 355,  322 => 101,  314 => 99,  312 => 167,  309 => 97,  305 => 189,  298 => 91,  294 => 159,  285 => 89,  283 => 156,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 132,  247 => 129,  241 => 126,  229 => 73,  220 => 115,  214 => 69,  177 => 65,  169 => 78,  140 => 69,  132 => 54,  128 => 68,  107 => 41,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 127,  240 => 145,  238 => 85,  235 => 143,  230 => 82,  227 => 157,  224 => 156,  221 => 77,  219 => 76,  217 => 75,  208 => 109,  204 => 280,  179 => 69,  159 => 63,  143 => 56,  135 => 59,  119 => 48,  102 => 36,  71 => 24,  67 => 26,  63 => 22,  59 => 20,  93 => 30,  88 => 38,  78 => 30,  38 => 10,  28 => 4,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 85,  163 => 62,  158 => 67,  156 => 71,  151 => 64,  142 => 63,  138 => 54,  136 => 60,  121 => 42,  117 => 47,  105 => 44,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 36,  46 => 18,  44 => 13,  31 => 5,  94 => 34,  89 => 48,  85 => 46,  75 => 25,  68 => 25,  56 => 24,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 27,  72 => 26,  69 => 30,  47 => 15,  40 => 17,  37 => 8,  22 => 1,  246 => 318,  157 => 56,  145 => 63,  139 => 72,  131 => 53,  123 => 53,  120 => 58,  115 => 43,  111 => 46,  108 => 44,  101 => 37,  98 => 39,  96 => 39,  83 => 35,  74 => 29,  66 => 27,  55 => 23,  52 => 20,  50 => 21,  43 => 14,  41 => 10,  35 => 7,  32 => 5,  29 => 4,  209 => 88,  203 => 78,  199 => 106,  193 => 97,  189 => 71,  187 => 84,  182 => 91,  176 => 89,  173 => 71,  168 => 77,  164 => 99,  162 => 74,  154 => 65,  149 => 63,  147 => 58,  144 => 55,  141 => 62,  133 => 69,  130 => 62,  125 => 48,  122 => 64,  116 => 48,  112 => 45,  109 => 45,  106 => 38,  103 => 54,  99 => 41,  95 => 42,  92 => 38,  86 => 34,  82 => 33,  80 => 31,  73 => 32,  64 => 26,  60 => 26,  57 => 24,  54 => 17,  51 => 20,  48 => 16,  45 => 15,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
