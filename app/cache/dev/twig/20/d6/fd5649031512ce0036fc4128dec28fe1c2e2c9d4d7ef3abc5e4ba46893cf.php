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
        return array (  637 => 358,  625 => 348,  615 => 344,  609 => 341,  606 => 340,  594 => 335,  588 => 333,  585 => 332,  581 => 331,  563 => 315,  557 => 314,  547 => 308,  543 => 306,  539 => 304,  535 => 302,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  431 => 241,  416 => 235,  383 => 207,  371 => 201,  358 => 194,  350 => 191,  342 => 188,  280 => 141,  23 => 3,  307 => 176,  231 => 114,  225 => 113,  195 => 89,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 250,  428 => 247,  412 => 234,  403 => 231,  352 => 199,  344 => 194,  333 => 186,  317 => 176,  300 => 168,  284 => 155,  277 => 150,  255 => 119,  359 => 209,  346 => 189,  304 => 173,  297 => 155,  200 => 110,  198 => 109,  172 => 94,  473 => 261,  470 => 246,  449 => 250,  445 => 248,  433 => 224,  419 => 236,  399 => 212,  391 => 211,  382 => 208,  378 => 216,  373 => 204,  366 => 201,  357 => 198,  303 => 169,  290 => 158,  287 => 136,  206 => 110,  170 => 97,  188 => 87,  178 => 97,  150 => 83,  184 => 105,  129 => 66,  126 => 51,  20 => 1,  153 => 68,  146 => 64,  155 => 79,  292 => 135,  279 => 130,  267 => 145,  249 => 115,  223 => 123,  211 => 108,  197 => 88,  175 => 100,  104 => 46,  134 => 69,  152 => 87,  113 => 57,  76 => 39,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 226,  425 => 289,  406 => 214,  364 => 197,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 181,  263 => 126,  242 => 149,  236 => 131,  222 => 101,  216 => 113,  192 => 102,  160 => 82,  100 => 49,  257 => 152,  190 => 101,  124 => 63,  97 => 42,  81 => 41,  348 => 173,  338 => 169,  334 => 159,  329 => 166,  324 => 151,  319 => 162,  299 => 173,  245 => 115,  228 => 104,  212 => 111,  167 => 82,  137 => 77,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 338,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 234,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 185,  310 => 197,  308 => 175,  289 => 134,  260 => 155,  250 => 147,  248 => 137,  239 => 117,  233 => 105,  213 => 98,  181 => 81,  127 => 54,  84 => 30,  77 => 28,  205 => 110,  191 => 105,  174 => 95,  58 => 19,  65 => 23,  34 => 7,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 334,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 310,  545 => 130,  542 => 129,  536 => 128,  533 => 301,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 247,  432 => 2,  429 => 223,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 197,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 159,  306 => 195,  301 => 156,  296 => 160,  291 => 137,  286 => 344,  281 => 163,  276 => 340,  266 => 147,  261 => 153,  251 => 118,  234 => 107,  232 => 121,  185 => 100,  180 => 103,  165 => 94,  161 => 92,  148 => 78,  118 => 58,  114 => 56,  110 => 54,  90 => 43,  70 => 27,  343 => 221,  321 => 358,  315 => 146,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 120,  256 => 129,  253 => 123,  244 => 119,  237 => 144,  226 => 95,  218 => 126,  215 => 109,  210 => 113,  207 => 107,  202 => 123,  53 => 19,  480 => 280,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 256,  440 => 148,  437 => 244,  435 => 146,  430 => 248,  427 => 143,  423 => 238,  413 => 134,  409 => 132,  407 => 131,  402 => 213,  398 => 228,  393 => 225,  387 => 222,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 209,  365 => 375,  362 => 210,  360 => 204,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 176,  309 => 97,  305 => 139,  298 => 139,  294 => 138,  285 => 164,  283 => 162,  278 => 86,  268 => 85,  264 => 154,  258 => 124,  252 => 116,  247 => 120,  241 => 126,  229 => 104,  220 => 119,  214 => 118,  177 => 80,  169 => 88,  140 => 70,  132 => 66,  128 => 68,  107 => 52,  61 => 35,  273 => 158,  269 => 157,  254 => 143,  243 => 138,  240 => 124,  238 => 108,  235 => 116,  230 => 82,  227 => 129,  224 => 121,  221 => 111,  219 => 110,  217 => 99,  208 => 109,  204 => 120,  179 => 94,  159 => 91,  143 => 80,  135 => 59,  119 => 60,  102 => 48,  71 => 25,  67 => 20,  63 => 36,  59 => 22,  93 => 47,  88 => 36,  78 => 40,  38 => 12,  28 => 4,  201 => 107,  196 => 115,  183 => 97,  171 => 77,  166 => 93,  163 => 72,  158 => 82,  156 => 79,  151 => 77,  142 => 63,  138 => 71,  136 => 60,  121 => 57,  117 => 65,  105 => 52,  91 => 36,  62 => 22,  49 => 15,  26 => 11,  87 => 25,  46 => 15,  44 => 13,  31 => 5,  94 => 45,  89 => 34,  85 => 42,  75 => 40,  68 => 25,  56 => 21,  24 => 6,  27 => 4,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 28,  69 => 38,  47 => 14,  40 => 9,  37 => 8,  22 => 2,  246 => 145,  157 => 86,  145 => 63,  139 => 78,  131 => 64,  123 => 53,  120 => 52,  115 => 58,  111 => 53,  108 => 53,  101 => 49,  98 => 40,  96 => 41,  83 => 43,  74 => 37,  66 => 25,  55 => 17,  52 => 24,  50 => 15,  43 => 13,  41 => 7,  35 => 8,  32 => 5,  29 => 4,  209 => 115,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  187 => 84,  182 => 99,  176 => 72,  173 => 93,  168 => 90,  164 => 85,  162 => 74,  154 => 78,  149 => 76,  147 => 75,  144 => 61,  141 => 62,  133 => 57,  130 => 63,  125 => 52,  122 => 58,  116 => 57,  112 => 45,  109 => 45,  106 => 48,  103 => 50,  99 => 41,  95 => 48,  92 => 38,  86 => 43,  82 => 42,  80 => 29,  73 => 26,  64 => 29,  60 => 27,  57 => 24,  54 => 25,  51 => 20,  48 => 11,  45 => 14,  42 => 10,  39 => 6,  36 => 11,  33 => 3,  30 => 10,);
    }
}
