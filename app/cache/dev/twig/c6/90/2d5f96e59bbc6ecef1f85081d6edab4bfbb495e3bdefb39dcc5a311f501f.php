<?php

/* RidwanOpportunityBundle:Opportunities:details.html.twig */
class __TwigTemplate_c6902d5f96e59bbc6ecef1f85081d6edab4bfbb495e3bdefb39dcc5a311f501f extends Twig_Template
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
        <div class=\"box span12\">                               

            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h2>Task Details</h2>
                    <hr>
                     ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method") == $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "leader"))) {
            // line 15
            echo "                    <div class=\"pull-right\">
                        ";
            // line 16
            if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "completed") == 0)) {
                // line 17
                echo "                        <a href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_completePage", array("taskID" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"))), "html", null, true);
                echo "\"><button  class=\"btn btn-small btn-success\">complete</button></a>
                         ";
            }
            // line 19
            echo "                        <a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_edit", array("taskID" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"))), "html", null, true);
            echo "\"><button  class=\"btn btn-small btn-inverse\">edit</button></a>
                        <button class=\"btn btn-small btn-danger btn-delete\" url=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_delete", array("taskID" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"))), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id"), "html", null, true);
            echo "\" > delete </button>
                       
                        <br>
                    </div>
                ";
        }
        // line 25
        echo "
                    <br>
                    <table>
                        <tr>
                            <td width =\"5%\"></td>
                            <td width =\"55%\">
                                <h3>Task</h3>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "name"), "html", null, true);
        echo "<br><br>
                                <h3>Type</h3>
                                ";
        // line 33
        if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 1)) {
            // line 34
            echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 2)) {
            // line 36
            echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 3)) {
            // line 38
            echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
        } elseif (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "type") == 4)) {
            // line 40
            echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
        }
        // line 42
        echo "                                <br><br>
                                <h3>Goal</h3>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "goals"), "html", null, true);
        echo "<br><br>
                                <h3>Description</h3>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "description"), "html", null, true);
        echo "<br><br>
                            </td>
                            <td width=\"5%\">

                            </td>
                            <td width =\"35%\">
                                <h3>Project</h3><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details", array("projectID" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "name"), "html", null, true);
        echo "</a><br><br>
                                <h3>Manager</h3><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "firstname"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "lastname"), "html", null, true);
        echo "</a><br><br>
                                <h3>Assigned To</h3><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "firstname"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "lastname"), "html", null, true);
        echo "</a><br><br>
                                <h3>Pillar</h3>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "pillar"), "html", null, true);
        echo "<br><br>
                                <h3>Due</h3>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "duetimestamp"), "html", null, true);
        echo "<br><br>

                            </td>
                        </tr>
                        <tr><td width=\"5%\">

                            </td>
                            <td width=\"20%\">
                                <h3>Status</h3>
                                ";
        // line 63
        if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "completed") == 1)) {
            // line 64
            echo "                                <span class=\"label label-success\">Completed</span>   
                                 <br><br>
                                 <h3>Rating</h3>
                                <span class=\"label label-info\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "rate"), "html", null, true);
            echo "</span> /10  
                                ";
        } else {
            // line 69
            echo "                                <span class=\"label label-warning\">Not Completed</span>  

                                ";
        }
        // line 72
        echo "                                
                               
                            </td>
                            
                                
                                ";
        // line 77
        if (($this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "completed") == 1)) {
            // line 78
            echo "                                  <td width=\"5%\">

                            </td><td>
                                <h3>Ended</h3>
                                ";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "endtimestamp"), "Y-m-d"), "html", null, true);
            echo "
                              
                              
                            </td>
                         
                                ";
        }
        // line 88
        echo "                                <br>
                          

                        </tr>
                    </table>
                    <br>


                </div>
            </div>
        </div>



    </div>
    <div class=\"row-fluid \">
        <div class=\"box span12\">                               
               <div class=\"box-header well\">
                <h2><i class=\"icon-user\"></i> Comments</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content \">
            
                <ul class=\"dashboard-list\">
                    ";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Comments"]) ? $context["Comments"] : $this->getContext($context, "Comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 117
            echo "                    <li>
                        <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 119
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "path") != null)) {
                // line 120
                echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "path"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 123
                echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 125
            echo "   
                        <strong>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "lastname"), "html", null, true);
            echo "</strong>
                        </a>";
            // line 127
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"))) {
                // line 128
                echo "                        <button url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_comment_delete", array("commentID" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                        ";
            }
            // line 130
            echo "                        <br>
                        ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment"), "html", null, true);
            echo "<br>
                         <span class=\"pull-right\"><h6>";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
            echo "</h6></span><br>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                    
                    <li>
                         <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"))), "html", null, true);
        echo "\">
                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "photo"), "method"), "html", null, true);
        echo "\">     
                            
                        </a>
                        ";
        // line 141
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), 'form_start');
        echo "
                        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "comment"), 'widget');
        echo "<br><br>
                        ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "task"), 'widget', array("type" => "hidden", "value" => $this->getAttribute((isset($context["Task"]) ? $context["Task"] : $this->getContext($context, "Task")), "id")));
        echo "
                        ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "project"), 'widget', array("type" => "hidden"));
        echo "
                        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary span2 pull-right")));
        echo "
                         ";
        // line 146
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), 'form_end');
        echo "
                        <br>
                        </li>
                    
                </ul>


            </div>
        </div>



    </div>
</div>


";
    }

    // line 164
    public function block_delete($context, array $blocks = array())
    {
        // line 165
        echo "<div class=\"modal hide fade\" id=\"delete\">
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

<div class=\"modal hide fade\" id=\"comment\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure you want to delete this Comment?                          \t\t
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
        return "RidwanOpportunityBundle:Opportunities:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 165,  321 => 146,  317 => 145,  313 => 144,  301 => 141,  291 => 137,  271 => 130,  263 => 128,  188 => 82,  222 => 101,  211 => 96,  205 => 93,  197 => 88,  473 => 247,  470 => 246,  433 => 224,  429 => 223,  415 => 217,  406 => 214,  391 => 211,  382 => 208,  366 => 201,  357 => 198,  353 => 197,  327 => 173,  316 => 168,  308 => 165,  303 => 163,  296 => 160,  287 => 135,  261 => 127,  228 => 104,  212 => 111,  206 => 108,  192 => 104,  170 => 87,  226 => 95,  216 => 113,  191 => 79,  178 => 105,  126 => 51,  100 => 43,  124 => 51,  58 => 21,  84 => 33,  76 => 30,  20 => 1,  153 => 60,  146 => 62,  113 => 54,  104 => 42,  97 => 39,  77 => 34,  134 => 54,  127 => 54,  81 => 32,  34 => 6,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 146,  575 => 143,  572 => 142,  566 => 139,  563 => 138,  556 => 136,  553 => 135,  551 => 134,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 124,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 226,  421 => 390,  419 => 219,  408 => 382,  403 => 380,  388 => 374,  383 => 372,  378 => 206,  373 => 204,  363 => 364,  358 => 362,  351 => 358,  347 => 357,  343 => 356,  339 => 355,  335 => 354,  329 => 351,  324 => 349,  319 => 347,  299 => 339,  289 => 335,  284 => 333,  279 => 331,  274 => 131,  259 => 120,  249 => 319,  244 => 317,  232 => 307,  200 => 277,  184 => 121,  181 => 76,  175 => 78,  172 => 102,  160 => 97,  155 => 70,  65 => 28,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 165,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 153,  594 => 151,  591 => 150,  589 => 149,  585 => 148,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 136,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 128,  532 => 127,  527 => 126,  525 => 125,  519 => 121,  517 => 120,  509 => 115,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 88,  452 => 75,  449 => 228,  445 => 227,  442 => 44,  436 => 13,  431 => 2,  428 => 1,  422 => 393,  420 => 390,  414 => 387,  404 => 383,  399 => 212,  394 => 379,  389 => 210,  369 => 369,  364 => 200,  359 => 365,  352 => 361,  348 => 360,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 352,  315 => 348,  310 => 346,  300 => 342,  295 => 138,  290 => 158,  280 => 334,  275 => 332,  265 => 328,  260 => 326,  250 => 322,  245 => 320,  233 => 310,  231 => 117,  185 => 109,  180 => 77,  165 => 66,  161 => 70,  148 => 74,  118 => 50,  114 => 47,  110 => 58,  90 => 36,  70 => 27,  342 => 164,  320 => 350,  304 => 341,  270 => 330,  255 => 126,  239 => 144,  236 => 143,  234 => 118,  225 => 136,  218 => 131,  215 => 97,  210 => 128,  207 => 127,  202 => 279,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 45,  440 => 148,  437 => 225,  435 => 13,  430 => 2,  427 => 1,  423 => 220,  413 => 384,  409 => 385,  407 => 131,  402 => 213,  398 => 378,  393 => 376,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 366,  365 => 111,  362 => 110,  360 => 199,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 345,  312 => 167,  309 => 143,  305 => 142,  298 => 91,  294 => 159,  285 => 336,  283 => 156,  278 => 132,  268 => 85,  264 => 325,  258 => 154,  252 => 125,  247 => 123,  241 => 126,  229 => 73,  220 => 115,  214 => 69,  177 => 65,  169 => 75,  140 => 53,  132 => 52,  128 => 68,  107 => 43,  61 => 20,  273 => 96,  269 => 327,  254 => 321,  243 => 127,  240 => 120,  238 => 119,  235 => 74,  230 => 305,  227 => 116,  224 => 156,  221 => 77,  219 => 76,  217 => 75,  208 => 109,  204 => 72,  179 => 79,  159 => 63,  143 => 61,  135 => 59,  119 => 48,  102 => 42,  71 => 25,  67 => 24,  63 => 22,  59 => 20,  93 => 30,  88 => 38,  78 => 30,  38 => 10,  28 => 4,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 85,  163 => 67,  158 => 64,  156 => 63,  151 => 66,  142 => 59,  138 => 52,  136 => 55,  121 => 51,  117 => 50,  105 => 43,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 36,  46 => 18,  44 => 15,  31 => 5,  94 => 38,  89 => 34,  85 => 33,  75 => 25,  68 => 25,  56 => 19,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 31,  72 => 26,  69 => 30,  47 => 15,  40 => 17,  37 => 8,  22 => 1,  246 => 113,  157 => 69,  145 => 63,  139 => 60,  131 => 53,  123 => 53,  120 => 58,  115 => 48,  111 => 46,  108 => 44,  101 => 37,  98 => 40,  96 => 39,  83 => 35,  74 => 29,  66 => 27,  55 => 23,  52 => 20,  50 => 17,  43 => 14,  41 => 10,  35 => 7,  32 => 5,  29 => 4,  209 => 88,  203 => 282,  199 => 106,  193 => 87,  189 => 71,  187 => 84,  182 => 78,  176 => 72,  173 => 72,  168 => 69,  164 => 99,  162 => 57,  154 => 65,  149 => 63,  147 => 56,  144 => 54,  141 => 62,  133 => 57,  130 => 62,  125 => 52,  122 => 64,  116 => 48,  112 => 45,  109 => 44,  106 => 38,  103 => 42,  99 => 41,  95 => 42,  92 => 38,  86 => 34,  82 => 33,  80 => 32,  73 => 32,  64 => 26,  60 => 26,  57 => 24,  54 => 22,  51 => 20,  48 => 16,  45 => 15,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
