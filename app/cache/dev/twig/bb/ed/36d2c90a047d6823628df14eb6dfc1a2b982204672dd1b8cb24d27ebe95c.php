<?php

/* RidwanProjectBundle:Projects:details.html.twig */
class __TwigTemplate_bbed36d2c90a047d6823628df14eb6dfc1a2b982204672dd1b8cb24d27ebe95c extends Twig_Template
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
        <div class=\"box span12\">                               

            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h2>Project Details</h2>
                    <hr>
                     ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method") == $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "manager"))) {
            // line 15
            echo "                    <div class=\"pull-right\">
                        ";
            // line 16
            if (($this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "status") == 0)) {
                // line 17
                echo "                         <button class=\"btn btn-small btn-complete btn-success\" url=\"\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"), "html", null, true);
                echo "\" >complete </button>

                        
                         ";
            }
            // line 21
            echo "                        <a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_edit", array("projectID" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"))), "html", null, true);
            echo "\"><button  class=\"btn btn-small btn-inverse\">edit</button></a>
                        <button class=\"btn btn-small btn-danger btn-delete\" url=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_delete", array("projectID" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"))), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id"), "html", null, true);
            echo "\" > delete </button>

                        <br>
                    </div>
                ";
        }
        // line 27
        echo "
                    <br>
                    <table>
                        <tr>
                            <td width =\"5%\"></td>
                            <td width =\"55%\" align=\"justify\">
                                <h3>Project</h3>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "name"), "html", null, true);
        echo "<br><br>                                
                                <h3>Objectives</h3>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "objectives"), "html", null, true);
        echo "<br><br>
                                <h3>Description</h3>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "description"), "html", null, true);
        echo "<br><br>
                                
                                
                            </td>
                            <td width=\"5%\">

                            </td>
                            <td width =\"35%\">
                                <h3>Manager</h3><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Manager"]) ? $context["Manager"] : $this->getContext($context, "Manager")), "lastname"), "html", null, true);
        echo "</a><br><br>
                                <h3>Started</h3>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "start"), "html", null, true);
        echo "<br><br>
                                <h3>Due</h3>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "due"), "html", null, true);
        echo "<br><br>
                                 <h3>Status</h3>
                                ";
        // line 47
        if (($this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "status") == 1)) {
            // line 48
            echo "                                 <span class=\"label label-success\">Completed</span>   <br><br>
                                 <h3>Ended</h3>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "end"), "Y-m-d"), "html", null, true);
            echo "<br><br>
                                ";
        } else {
            // line 51
            echo "                                <span class=\"label label-warning\">Not Completed</span>  <br>

                                ";
        }
        // line 54
        echo "                            

                            </td>
                        </tr>
                       
                    </table>
                    <br>


                </div>
            </div>
        </div>



    </div>

    <div class=\"row-fluid\">
        <div class=\"box span12\">
            <div class=\"box-header well\">
                <h2><i class=\"icon-list-alt\"></i> Project Tasks</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                       ";
        // line 84
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "access"), "method") == "Head") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method") == $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "manager")))) {
            // line 85
            echo "                        <div class=\"row-fluid\">
                            <div class=\"pull-right\">
                                <a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("moraspirit_task_new");
            echo "\"><button class=\"btn btn-round btn-success\"><i class=\"icon-plus\"></i> Add Task </button></a>

                            </div>
                        </div><br>
                       ";
        }
        // line 92
        echo "                        <table class=\"records_list\" width=\"100%\">
                            <thead>
                                <tr>
                                    <th>Task</th>
                                    <th>Type</th>
                                    <th>Assigned To</th>
                                    <th>Manager</th>
                                    <th>Status </th>                              
                               
                                </tr>
                            </thead>
                            <tbody>
                                    ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tasks"]) ? $context["Tasks"] : $this->getContext($context, "Tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 105
            echo "  <tr>
                                    <td align=\"center\"><a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 0, array(), "array"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 2, array(), "array"), "html", null, true);
            echo "</a></td>
                                    <td align=\"center\">
                                         ";
            // line 108
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 1)) {
                // line 109
                echo "                                        <span class=\"label label-info\">Normal</span>   
                                ";
            } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 2)) {
                // line 111
                echo "                                        <span class=\"label label-warning\">Important</span>  
                                ";
            } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 3)) {
                // line 113
                echo "                                        <span class=\"label label-inverse\">Can Wait</span>  
                                ";
            } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 3, array(), "array") == 4)) {
                // line 115
                echo "                                        <span class=\"label label-important\">Urgent</span>  
                                ";
            }
            // line 117
            echo "
                                    </td>
                                    <td align=\"center\"><a href=\"\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 5, array(), "array"), "html", null, true);
            echo "</a>

                                    </td>   
                                    <td align=\"center\"><a href=\"\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 7, array(), "array"), "html", null, true);
            echo "</a>

                                    </td> 
                                    <td align=\"center\">
                                    ";
            // line 126
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), 1, array(), "array") == 1)) {
                // line 127
                echo "                                        <span class=\"label label-success\">Completed</span>   
                                ";
            } else {
                // line 129
                echo "                                        <span class=\"label label-warning\">Not Completed</span>  

                                ";
            }
            // line 132
            echo "                                    </td> 
                                  
                                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                            </tbody>
                        </table>
                    </ul>

                </div></div>
        </div>
    </div>
    
    <div class=\"row-fluid \">
        <div class=\"box span12\">                               
             <div class=\"box-header well\">
                <h2><i class=\"icon-user\"></i> Members Involved</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content \">              
                <ul class=\"dashboard-list\">
                    ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Members"]) ? $context["Members"] : $this->getContext($context, "Members")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 157
            echo "                    <li>
                        <a href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 0, array(), "array"))), "html", null, true);
            echo "\">
                             ";
            // line 159
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 3, array(), "array") != null)) {
                // line 160
                echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 3, array(), "array"), "html", null, true);
                echo "\">  

                        ";
            } else {
                // line 163
                echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 165
            echo " 
                     
                        <strong>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 1, array(), "array"), "html", null, true);
            echo "</strong></a><br>
                        <span class=\"label label-inverse\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 2, array(), "array"), "html", null, true);
            echo "</span>  
                        <br>
                        <br>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                    
                </ul>


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
        // line 197
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Comments"]) ? $context["Comments"] : $this->getContext($context, "Comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 198
            echo "                    <li>
                        <a href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user"))), "html", null, true);
            echo "\">
                              ";
            // line 200
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "path") != null)) {
                // line 201
                echo "                            <img class=\"dashboard-avatar\" alt=\"Usman\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "path"), "html", null, true);
                echo "\">  
                            
                        ";
            } else {
                // line 204
                echo "                            <img class=\"dashboard-avatar\" alt=\"Usman\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
            }
            // line 206
            echo " 
             
                        <strong>";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "lastname"), "html", null, true);
            echo "</strong>
                        </a>         
                        ";
            // line 210
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"))) {
                // line 211
                echo "                        <button url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_comment_delete", array("commentID" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                        ";
            }
            // line 212
            echo " <br> 
                        ";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment"), "html", null, true);
            echo "<br>
                         <span class=\"pull-right\"><h6>";
            // line 214
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
            echo "</h6></span><br>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                    
                    <li>
                         <a href=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"))), "html", null, true);
        echo "\">
                            <img class=\"dashboard-avatar\" alt=\"Usman\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "photo"), "method"), "html", null, true);
        echo "\">
                     
                        </a>
                        ";
        // line 223
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), 'form_start');
        echo "
                        ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "comment"), 'widget');
        echo "<br>
                        ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "task"), 'widget', array("type" => "hidden"));
        echo "
                        ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "project"), 'widget', array("type" => "hidden", "value" => $this->getAttribute((isset($context["Project"]) ? $context["Project"] : $this->getContext($context, "Project")), "id")));
        echo "
                        ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary span2 pull-right")));
        echo "
                        ";
        // line 228
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["NewComment"]) ? $context["NewComment"] : $this->getContext($context, "NewComment")), 'form_end');
        echo "
                        <br> <br>
                        </li>
                    
                </ul>


            </div>
        </div>



    </div>
</div>


";
    }

    // line 246
    public function block_delete($context, array $blocks = array())
    {
        // line 247
        echo "<div class=\"modal hide fade\" id=\"delete\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure you want to delete this Project? <br>This will delete all tasks and comments related to this project.                          \t\t
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

<div class=\"modal hide fade\" id=\"complete\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Confirm</h3>
    </div>
    <div class=\"modal-body\">
        <p align=\"center\">Are you sure you want to complete this Project? <br>Once completed you cannot undo or assign new task under this project.                          \t\t
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
        return "RidwanProjectBundle:Projects:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 247,  470 => 246,  449 => 228,  445 => 227,  433 => 224,  419 => 219,  399 => 212,  391 => 211,  382 => 208,  378 => 206,  373 => 204,  366 => 201,  357 => 198,  303 => 163,  290 => 158,  287 => 157,  206 => 108,  170 => 87,  188 => 87,  178 => 92,  150 => 67,  184 => 77,  129 => 55,  126 => 51,  20 => 1,  153 => 60,  146 => 62,  155 => 70,  292 => 135,  279 => 130,  267 => 124,  249 => 115,  223 => 101,  211 => 98,  197 => 90,  175 => 77,  104 => 39,  134 => 54,  152 => 66,  113 => 54,  76 => 30,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 226,  425 => 289,  406 => 214,  364 => 200,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 209,  263 => 161,  242 => 149,  236 => 146,  222 => 134,  216 => 113,  192 => 104,  160 => 97,  100 => 43,  257 => 158,  190 => 118,  124 => 47,  97 => 36,  81 => 33,  348 => 173,  338 => 169,  334 => 168,  329 => 166,  324 => 151,  319 => 162,  299 => 156,  245 => 160,  228 => 119,  212 => 111,  167 => 82,  137 => 60,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 276,  389 => 210,  367 => 241,  347 => 223,  339 => 219,  318 => 201,  310 => 197,  308 => 165,  289 => 134,  260 => 155,  250 => 151,  248 => 151,  239 => 143,  233 => 105,  213 => 126,  181 => 76,  127 => 51,  84 => 30,  77 => 26,  205 => 92,  191 => 79,  174 => 79,  58 => 21,  65 => 23,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 150,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 398,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 197,  349 => 368,  345 => 367,  331 => 155,  326 => 360,  316 => 168,  311 => 354,  306 => 195,  301 => 350,  296 => 160,  291 => 346,  286 => 344,  281 => 342,  276 => 340,  266 => 133,  261 => 136,  251 => 330,  234 => 122,  232 => 121,  185 => 273,  180 => 82,  165 => 76,  161 => 73,  148 => 74,  118 => 50,  114 => 47,  110 => 42,  90 => 33,  70 => 27,  343 => 221,  321 => 358,  315 => 195,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 159,  256 => 129,  253 => 116,  244 => 147,  237 => 144,  226 => 95,  218 => 102,  215 => 99,  210 => 129,  207 => 97,  202 => 123,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 225,  435 => 146,  430 => 144,  427 => 143,  423 => 220,  413 => 134,  409 => 132,  407 => 131,  402 => 213,  398 => 129,  393 => 126,  387 => 122,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 375,  362 => 110,  360 => 199,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 167,  309 => 97,  305 => 139,  298 => 91,  294 => 159,  285 => 133,  283 => 156,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 132,  247 => 129,  241 => 126,  229 => 104,  220 => 115,  214 => 69,  177 => 65,  169 => 77,  140 => 63,  132 => 54,  128 => 46,  107 => 45,  61 => 23,  273 => 96,  269 => 163,  254 => 153,  243 => 127,  240 => 124,  238 => 147,  235 => 122,  230 => 82,  227 => 138,  224 => 117,  221 => 142,  219 => 76,  217 => 95,  208 => 109,  204 => 88,  179 => 78,  159 => 73,  143 => 63,  135 => 59,  119 => 48,  102 => 36,  71 => 24,  67 => 26,  63 => 22,  59 => 20,  93 => 37,  88 => 38,  78 => 30,  38 => 10,  28 => 4,  201 => 83,  196 => 105,  183 => 111,  171 => 71,  166 => 85,  163 => 81,  158 => 69,  156 => 64,  151 => 64,  142 => 84,  138 => 64,  136 => 55,  121 => 42,  117 => 47,  105 => 44,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 35,  46 => 18,  44 => 12,  31 => 5,  94 => 34,  89 => 35,  85 => 34,  75 => 25,  68 => 25,  56 => 18,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 29,  72 => 26,  69 => 24,  47 => 15,  40 => 11,  37 => 6,  22 => 1,  246 => 328,  157 => 68,  145 => 63,  139 => 59,  131 => 53,  123 => 53,  120 => 52,  115 => 43,  111 => 46,  108 => 44,  101 => 42,  98 => 39,  96 => 37,  83 => 33,  74 => 29,  66 => 27,  55 => 21,  52 => 17,  50 => 17,  43 => 14,  41 => 5,  35 => 6,  32 => 5,  29 => 4,  209 => 88,  203 => 93,  199 => 106,  193 => 86,  189 => 71,  187 => 83,  182 => 78,  176 => 72,  173 => 72,  168 => 77,  164 => 84,  162 => 70,  154 => 65,  149 => 63,  147 => 64,  144 => 61,  141 => 62,  133 => 56,  130 => 56,  125 => 51,  122 => 49,  116 => 48,  112 => 45,  109 => 45,  106 => 38,  103 => 41,  99 => 41,  95 => 42,  92 => 36,  86 => 32,  82 => 33,  80 => 32,  73 => 27,  64 => 23,  60 => 26,  57 => 25,  54 => 22,  51 => 20,  48 => 16,  45 => 15,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
