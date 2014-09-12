<?php

/* RidwanUserBundle:Profile:profile.html.twig */
class __TwigTemplate_20d6fd5649031512ce0036fc4128dec28fe1c2e2c9d4d7ef3abc5e4ba46893cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MoraspiritStyleBundle:basic:basic.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        echo "<div class=\"container-fluid\">
    <div class=\"row-fluid\">

        <noscript>
        <div class=\"alert alert-block span12\">
            <h4 class=\"alert-heading\">Warning!</h4>
            <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
        </div>
        </noscript>
         <div id=\"content\" class=\"span10 \">
\t\t\t<!-- content starts -->
\t\t\t
                        <div class=\"row-fluid\">
      
<div class=\"box span4\">                                
        
        <div class=\"box-content \">
             
           <p align=\"center\">
                        ";
        // line 24
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path") != null)) {
            // line 25
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path"), "html", null, true);
            echo "\" width=\"300px\" height=\"300px\" style=\"border: 2px\">
                        ";
        } else {
            // line 27
            echo "                        <img src=\"/web/bundles/User/Photo/default.jpg\" width=\"300px\" height=\"300px\" style=\"border: 2px\">
                        ";
        }
        // line 29
        echo "           </p>
        </div>
    </div>
                           
   
<div class=\"box span8\">                                
        
        <div class=\"box-content \">
            <div id=\"content\" class=\"span12\">
               
                ";
        // line 39
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
            // line 40
            echo "                    <div class=\"pull-right\"> 
                        <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("moraspirit_profile_edit");
            echo " \"><button  class=\"btn btn-small btn-account\">edit profile</button></a>
                         <a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("moraspirit_profile_picture");
            echo " \"><button  class=\"btn btn-small btn-account\">change profile picture</button></a>
                        
                         
                    </div>
                ";
        }
        // line 47
        echo "                ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") == "Head")) {
            echo "   
             <h2 align=\"center\">Pillar Head</h2><br>
             ";
        } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") == "Admin")) {
            // line 49
            echo "  
             <h2 align=\"center\">CXO</h2><br><br>
                    ";
        }
        // line 52
        echo "             
             ";
        // line 53
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Head") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin"))) {
            echo "   
             <br><br>
             ";
        }
        // line 56
        echo "                <table>
                    
                    
                    <tr>
                        
                        <td width=\"40%\">
                            
                    <p align=\"right\">
                        <strong>Full Name</strong>: <br>
                         <strong>Gender</strong>: <br>
                          <strong>Batch</strong>: <br>
                           <strong>Department</strong>: <br>
                           <strong>NIC</strong>: <br>
                           
                           <br>
                           <strong>Address</strong>:<br>
                           <strong>City</strong>:<br>
                           <strong>Country</strong>:<br>
                           <strong>Email</strong>:<br>
                           <strong>Mobile Number</strong>:<br>
                           <strong>Phone Number</strong>:<br>                          
                           ";
        // line 77
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin")) {
            echo "  
                            <strong>Pillar</strong><br><br>
                            ";
        }
        // line 80
        echo "                            ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") == "Admin")) {
            echo "  
                            <br>
                            ";
        }
        // line 83
        echo "                             ";
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Head") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin"))) {
            echo "    
                            <strong>Rating</strong><br>
                            ";
        }
        // line 86
        echo "                    </p>
                        </td>
                        <td width=\"1%\">
                        </td>
                            <td width=\"40%\">
                                
                    <p align=\"left\">
                        ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "<br>
                       ";
        // line 94
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender") == "M")) {
            // line 95
            echo "                        Male
                        ";
        } else {
            // line 97
            echo "                        Female
                        ";
        }
        // line 99
        echo "                        <br>
                         ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "batch"), "html", null, true);
        echo "<br>
                         ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "department"), "html", null, true);
        echo "<br>
                         ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic"), "html", null, true);
        echo "<br>
                        <br>
                    
                          ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "<br>
                          ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city"), "html", null, true);
        echo " <br>
                          ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
        echo " <br>
                           ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo " <br>
                          ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobilenumber"), "html", null, true);
        echo " <br>
                          ";
        // line 110
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber") == null)) {
            // line 111
            echo "                        null
                        ";
        } else {
            // line 113
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phonenumber"), "html", null, true);
            echo "
                        ";
        }
        // line 114
        echo "<br>     
                           
                           ";
        // line 116
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin")) {
            echo "  
                        <span class=\"label label-inverse\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pillar"), "html", null, true);
            echo "</span> <br><br>  
                             ";
        }
        // line 119
        echo "                         
                          ";
        // line 120
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") == "Admin")) {
            echo "  
                            <br>
                            ";
        }
        // line 123
        echo "                             ";
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Head") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin"))) {
            echo "   
                          <span class=\"label label-important\">";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating")), "html", null, true);
            echo "</span><br>
                           ";
        }
        // line 126
        echo "                         </p>
                        </td>
                         <td width=\"3%\">
                        </td>
                        
                       
                </tr>
                </table>
                
              
                
            </div>
        </div>
    </div>
                                               
    ";
        // line 141
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Head") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "accesslevel") != "Admin"))) {
            echo "       
                           
                            
                            <div class=\"row-fluid\">
                            <div class=\"box span12\">                                
       
\t\t\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-list\"></i> Skills </h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
  
            <div id=\"content\" class=\"span12\">
          
                ";
            // line 155
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "skills"));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 156
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "html", null, true);
                echo "
                <br>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                <br><br>
            </div>
                                        
                                        </div>
                            </div></div>
        <div class=\"row-fluid\">
              <div class=\"box span12\">                                
       
\t\t\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-list\"></i> Projects </h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
  
            <div id=\"content\" class=\"span12\">
             
                 <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                        <tr>
                            <th width=\"15%\">Project</th>
                            <th width=\"30%\">Objectives</th>
                            <th width=\"40%\">Description</th>
                            <th width=\"15%\">Expected End Date</th> 

                        </tr>
                    </thead>   

                    <tbody>
\t\t\t\t\t\t\t   ";
            // line 188
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 189
                echo "                        <tr>
                            <td>
                                <a href=\"";
                // line 191
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details", array("projectID" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id"))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name"), "html", null, true);
                echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "objectives"), "html", null, true);
                echo "
                            </td>
                            <td class=\"center\"> 
                                ";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "description"), "html", null, true);
                echo "
                            </td>
                            
                            <td class=\"center\"> 
                                ";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "due"), "html", null, true);
                echo "
                            </td>
                                                                 
                        </tr>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                    </tbody>
                </table>  
            </div></div></div></div>
        <div class=\"row-fluid\">
          <div class=\"box span12\">                                
       
\t\t\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-list\"></i> Ongoing Tasks </h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
  
            <div id=\"content\" class=\"span12\">
                
                  <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                        <tr>
                            <th width=\"15%\">Task</th>
                            <th width=\"10%\">Due Date</th>
                            <th width=\"60%\">Details</th>
                            <th width=\"15%\">Type</th> 

                        </tr>
                    </thead>   

                    <tbody>
\t\t\t\t\t\t\t   ";
            // line 234
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 235
                echo "                                                           ";
                if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "completed") == 0)) {
                    // line 236
                    echo "                        <tr>
                            <td>
                                <a href=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name"), "html", null, true);
                    echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
                    // line 241
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "duetimestamp"), "html", null, true);
                    echo "
                            </td>
                            <td class=\"center\"> 
                                ";
                    // line 244
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
                    echo "
                            </td>
                            <td class=\"center\"> 
                                ";
                    // line 247
                    if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 1)) {
                        // line 248
                        echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 2)) {
                        // line 250
                        echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 3)) {
                        // line 252
                        echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 4)) {
                        // line 254
                        echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
                    }
                    // line 256
                    echo "
                            </td>                                       
                        </tr>
                            ";
                }
                // line 260
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "                    </tbody>
                </table>          
            </div></div></div></div>
        <div class=\"row-fluid\">
          <div class=\"box span12\">                                
       
\t\t\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-list\"></i> Completed Tasks </h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
  
            <div id=\"content\" class=\"span12\">
               
                  <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                        <tr>
                            <th width=\"15%\">Task</th>
                            <th width=\"10%\">Due Date</th>
                            <th width=\"60%\">Details</th>
                            <th width=\"15%\">Type</th> 

                        </tr>
                    </thead>   

                    <tbody>
\t\t\t\t\t\t\t   ";
            // line 288
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 289
                echo "                                                            ";
                if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "completed") == 1)) {
                    // line 290
                    echo "                        <tr>
                            <td>
                                <a href=\"";
                    // line 292
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details", array("taskID" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id"))), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "name"), "html", null, true);
                    echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
                    // line 295
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "duetimestamp"), "html", null, true);
                    echo "
                            </td>
                            <td class=\"center\"> 
                                ";
                    // line 298
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description"), "html", null, true);
                    echo "
                            </td>
                            <td class=\"center\"> 
                                ";
                    // line 301
                    if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 1)) {
                        // line 302
                        echo "                                <span class=\"label label-info\">Normal</span>   
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 2)) {
                        // line 304
                        echo "                                <span class=\"label label-warning\">Important</span>  
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 3)) {
                        // line 306
                        echo "                                <span class=\"label label-inverse\">Can Wait</span>  
                                ";
                    } elseif (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "type") == 4)) {
                        // line 308
                        echo "                                <span class=\"label label-important\">Urgent</span>  
                                ";
                    }
                    // line 310
                    echo "
                            </td>                                       
                        </tr>
                            ";
                }
                // line 314
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            echo "                    </tbody>
                </table>          
                
            </div>
        </div>
    </div>
    </div></div>
  
\t\t<div class=\"row-fluid\">
<div class=\"box span12\">
\t\t\t\t\t<div class=\"box-header well\" data-original-title>
\t\t\t\t\t\t<h2><i class=\"icon-list\"></i> Feedbacks </h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t <ul class=\"dashboard-list\">
                    ";
            // line 331
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["feedbacks"]) ? $context["feedbacks"] : $this->getContext($context, "feedbacks")));
            foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
                // line 332
                echo "                    <li>
                        <a href=\"";
                // line 333
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_profile", array("userID" => $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), 0, array(), "array"))), "html", null, true);
                echo "\">
                              ";
                // line 334
                if (($this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), 2, array(), "array") != null)) {
                    // line 335
                    echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), 2, array(), "array"), "html", null, true);
                    echo "\">  

                        ";
                } else {
                    // line 338
                    echo "                            <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">  

                        ";
                }
                // line 340
                echo "   
                        <strong>";
                // line 341
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), 1, array(), "array"), "html", null, true);
                echo "</strong>
                        </a>
                        <br>
                        ";
                // line 344
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feedback"]) ? $context["feedback"] : $this->getContext($context, "feedback")), 3, array(), "array"), "html", null, true);
                echo "<br>
                        <br>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedback'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            echo "                    
                    
                </ul>

\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->
                                
                </div>
                        
                           ";
        }
        // line 358
        echo "</div>



";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Profile:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 344,  606 => 340,  601 => 338,  594 => 335,  585 => 332,  581 => 331,  563 => 315,  551 => 310,  543 => 306,  539 => 304,  535 => 302,  533 => 301,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  416 => 235,  412 => 234,  383 => 207,  371 => 201,  358 => 194,  350 => 191,  346 => 189,  342 => 188,  297 => 155,  280 => 141,  239 => 117,  225 => 113,  23 => 3,  194 => 88,  152 => 67,  231 => 114,  200 => 111,  188 => 85,  174 => 95,  150 => 83,  137 => 77,  222 => 101,  211 => 108,  205 => 93,  175 => 90,  197 => 88,  172 => 94,  160 => 81,  470 => 246,  449 => 250,  445 => 248,  441 => 226,  433 => 224,  419 => 236,  406 => 214,  399 => 212,  391 => 211,  389 => 210,  382 => 208,  378 => 206,  373 => 204,  366 => 201,  364 => 197,  357 => 198,  327 => 173,  308 => 165,  303 => 163,  290 => 158,  287 => 157,  228 => 104,  206 => 108,  192 => 104,  216 => 113,  191 => 102,  184 => 99,  178 => 97,  126 => 53,  100 => 49,  124 => 54,  20 => 1,  153 => 60,  146 => 64,  104 => 43,  97 => 42,  134 => 58,  127 => 63,  81 => 41,  76 => 39,  872 => 572,  868 => 571,  864 => 570,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 487,  701 => 485,  689 => 478,  680 => 476,  676 => 475,  645 => 452,  640 => 450,  635 => 448,  628 => 446,  603 => 423,  592 => 334,  583 => 415,  578 => 413,  575 => 412,  571 => 411,  546 => 389,  534 => 380,  510 => 362,  494 => 349,  473 => 261,  452 => 313,  431 => 241,  396 => 266,  334 => 210,  292 => 173,  288 => 171,  284 => 169,  282 => 168,  263 => 126,  255 => 147,  186 => 93,  170 => 76,  155 => 70,  129 => 67,  113 => 52,  84 => 30,  248 => 169,  236 => 109,  212 => 111,  198 => 89,  181 => 76,  58 => 19,  828 => 388,  824 => 545,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 28,  65 => 23,  34 => 11,  826 => 383,  822 => 302,  819 => 543,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 484,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 458,  655 => 179,  652 => 178,  642 => 171,  637 => 358,  632 => 447,  625 => 348,  622 => 164,  620 => 163,  617 => 162,  609 => 341,  604 => 155,  598 => 152,  591 => 150,  588 => 333,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 314,  554 => 135,  552 => 134,  547 => 308,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 371,  516 => 120,  514 => 119,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 247,  432 => 2,  429 => 223,  421 => 388,  415 => 217,  410 => 383,  405 => 381,  400 => 379,  395 => 377,  390 => 375,  385 => 373,  380 => 371,  375 => 369,  370 => 367,  353 => 197,  349 => 358,  345 => 357,  331 => 352,  326 => 350,  316 => 168,  311 => 159,  306 => 342,  301 => 156,  296 => 160,  291 => 336,  286 => 334,  281 => 332,  276 => 330,  266 => 326,  261 => 125,  251 => 149,  234 => 107,  232 => 108,  185 => 100,  180 => 80,  165 => 84,  161 => 70,  148 => 78,  118 => 58,  114 => 56,  110 => 54,  90 => 43,  70 => 26,  343 => 217,  321 => 348,  315 => 195,  313 => 194,  295 => 182,  271 => 328,  265 => 158,  259 => 120,  256 => 322,  253 => 123,  244 => 119,  237 => 144,  226 => 105,  218 => 100,  215 => 109,  210 => 112,  207 => 107,  202 => 278,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 149,  440 => 148,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 238,  413 => 280,  409 => 132,  407 => 131,  402 => 213,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 365,  362 => 110,  360 => 199,  355 => 106,  341 => 356,  337 => 355,  322 => 101,  314 => 99,  312 => 167,  309 => 97,  305 => 189,  298 => 91,  294 => 159,  285 => 89,  283 => 156,  278 => 86,  268 => 85,  264 => 84,  258 => 124,  252 => 116,  247 => 120,  241 => 126,  229 => 134,  220 => 115,  214 => 99,  177 => 65,  169 => 90,  140 => 61,  132 => 66,  128 => 68,  107 => 52,  61 => 35,  273 => 96,  269 => 94,  254 => 121,  243 => 113,  240 => 145,  238 => 138,  235 => 116,  230 => 82,  227 => 157,  224 => 156,  221 => 111,  219 => 110,  217 => 75,  208 => 96,  204 => 280,  179 => 92,  159 => 63,  143 => 80,  135 => 59,  119 => 48,  102 => 48,  71 => 25,  67 => 20,  63 => 22,  59 => 22,  93 => 47,  88 => 38,  78 => 40,  38 => 12,  28 => 4,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 93,  163 => 87,  158 => 70,  156 => 79,  151 => 66,  142 => 63,  138 => 54,  136 => 60,  121 => 57,  117 => 47,  105 => 52,  91 => 27,  62 => 19,  49 => 15,  26 => 2,  87 => 25,  46 => 14,  44 => 13,  31 => 5,  94 => 45,  89 => 34,  85 => 42,  75 => 25,  68 => 25,  56 => 21,  24 => 6,  27 => 4,  25 => 5,  21 => 2,  19 => 1,  79 => 32,  72 => 28,  69 => 24,  47 => 14,  40 => 11,  37 => 7,  22 => 2,  246 => 113,  157 => 86,  145 => 63,  139 => 69,  131 => 64,  123 => 53,  120 => 58,  115 => 48,  111 => 53,  108 => 53,  101 => 49,  98 => 40,  96 => 39,  83 => 35,  74 => 29,  66 => 37,  55 => 17,  52 => 24,  50 => 15,  43 => 13,  41 => 7,  35 => 8,  32 => 5,  29 => 8,  209 => 88,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  187 => 84,  182 => 99,  176 => 79,  173 => 71,  168 => 77,  164 => 99,  162 => 71,  154 => 78,  149 => 63,  147 => 74,  144 => 62,  141 => 71,  133 => 57,  130 => 66,  125 => 52,  122 => 52,  116 => 49,  112 => 45,  109 => 45,  106 => 51,  103 => 50,  99 => 41,  95 => 43,  92 => 38,  86 => 34,  82 => 42,  80 => 29,  73 => 39,  64 => 29,  60 => 27,  57 => 24,  54 => 25,  51 => 20,  48 => 11,  45 => 15,  42 => 13,  39 => 6,  36 => 5,  33 => 3,  30 => 10,);
    }
}
