<?php

/* RidwanProjectBundle:Projects:details.html.twig */
class __TwigTemplate_bbed36d2c90a047d6823628df14eb6dfc1a2b982204672dd1b8cb24d27ebe95c extends Twig_Template
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
        return array (  473 => 247,  470 => 246,  433 => 224,  429 => 223,  415 => 217,  406 => 214,  391 => 211,  382 => 208,  366 => 201,  357 => 198,  353 => 197,  327 => 173,  316 => 168,  308 => 165,  303 => 163,  296 => 160,  287 => 157,  261 => 136,  228 => 119,  212 => 111,  206 => 108,  192 => 104,  170 => 87,  226 => 95,  216 => 113,  191 => 79,  178 => 92,  126 => 51,  100 => 43,  124 => 47,  58 => 21,  84 => 30,  76 => 30,  20 => 1,  153 => 60,  146 => 62,  113 => 54,  104 => 42,  97 => 36,  77 => 26,  134 => 54,  127 => 51,  81 => 33,  34 => 6,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 146,  575 => 143,  572 => 142,  566 => 139,  563 => 138,  556 => 136,  553 => 135,  551 => 134,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 124,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 226,  421 => 390,  419 => 219,  408 => 382,  403 => 380,  388 => 374,  383 => 372,  378 => 206,  373 => 204,  363 => 364,  358 => 362,  351 => 358,  347 => 357,  343 => 356,  339 => 355,  335 => 354,  329 => 351,  324 => 349,  319 => 347,  299 => 339,  289 => 335,  284 => 333,  279 => 331,  274 => 329,  259 => 323,  249 => 319,  244 => 317,  232 => 307,  200 => 277,  184 => 77,  181 => 76,  175 => 71,  172 => 70,  160 => 63,  155 => 70,  65 => 23,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 165,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 153,  594 => 151,  591 => 150,  589 => 149,  585 => 148,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 136,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 128,  532 => 127,  527 => 126,  525 => 125,  519 => 121,  517 => 120,  509 => 115,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 88,  452 => 75,  449 => 228,  445 => 227,  442 => 44,  436 => 13,  431 => 2,  428 => 1,  422 => 393,  420 => 390,  414 => 387,  404 => 383,  399 => 212,  394 => 379,  389 => 210,  369 => 369,  364 => 200,  359 => 365,  352 => 361,  348 => 360,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 352,  315 => 348,  310 => 346,  300 => 342,  295 => 340,  290 => 158,  280 => 334,  275 => 332,  265 => 328,  260 => 326,  250 => 322,  245 => 320,  233 => 310,  231 => 308,  185 => 266,  180 => 74,  165 => 66,  161 => 73,  148 => 74,  118 => 43,  114 => 47,  110 => 38,  90 => 33,  70 => 27,  342 => 216,  320 => 350,  304 => 341,  270 => 330,  255 => 324,  239 => 144,  236 => 143,  234 => 122,  225 => 136,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 279,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 45,  440 => 148,  437 => 225,  435 => 13,  430 => 2,  427 => 1,  423 => 220,  413 => 384,  409 => 385,  407 => 131,  402 => 213,  398 => 378,  393 => 376,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 366,  365 => 111,  362 => 110,  360 => 199,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 345,  312 => 167,  309 => 343,  305 => 344,  298 => 91,  294 => 159,  285 => 336,  283 => 156,  278 => 86,  268 => 85,  264 => 325,  258 => 154,  252 => 132,  247 => 129,  241 => 126,  229 => 73,  220 => 115,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 54,  128 => 46,  107 => 41,  61 => 23,  273 => 96,  269 => 327,  254 => 321,  243 => 127,  240 => 86,  238 => 85,  235 => 74,  230 => 305,  227 => 81,  224 => 117,  221 => 77,  219 => 76,  217 => 75,  208 => 109,  204 => 72,  179 => 73,  159 => 63,  143 => 54,  135 => 59,  119 => 48,  102 => 36,  71 => 24,  67 => 26,  63 => 22,  59 => 20,  93 => 30,  88 => 38,  78 => 30,  38 => 10,  28 => 4,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 85,  163 => 62,  158 => 62,  156 => 62,  151 => 64,  142 => 59,  138 => 52,  136 => 55,  121 => 42,  117 => 47,  105 => 44,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 35,  46 => 18,  44 => 15,  31 => 5,  94 => 34,  89 => 35,  85 => 34,  75 => 25,  68 => 25,  56 => 24,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 27,  72 => 26,  69 => 24,  47 => 15,  40 => 17,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 63,  139 => 53,  131 => 53,  123 => 53,  120 => 58,  115 => 43,  111 => 46,  108 => 44,  101 => 37,  98 => 39,  96 => 37,  83 => 30,  74 => 29,  66 => 27,  55 => 21,  52 => 20,  50 => 17,  43 => 14,  41 => 10,  35 => 6,  32 => 5,  29 => 4,  209 => 88,  203 => 282,  199 => 106,  193 => 73,  189 => 71,  187 => 84,  182 => 234,  176 => 72,  173 => 71,  168 => 77,  164 => 84,  162 => 57,  154 => 65,  149 => 63,  147 => 56,  144 => 55,  141 => 62,  133 => 55,  130 => 62,  125 => 48,  122 => 49,  116 => 48,  112 => 45,  109 => 45,  106 => 38,  103 => 41,  99 => 41,  95 => 42,  92 => 36,  86 => 32,  82 => 33,  80 => 32,  73 => 27,  64 => 26,  60 => 26,  57 => 25,  54 => 22,  51 => 20,  48 => 16,  45 => 15,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
