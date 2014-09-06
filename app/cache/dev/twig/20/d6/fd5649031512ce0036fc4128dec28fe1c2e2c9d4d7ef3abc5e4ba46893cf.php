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
        return array (  637 => 358,  615 => 344,  609 => 341,  606 => 340,  592 => 334,  588 => 333,  547 => 308,  543 => 306,  539 => 304,  533 => 301,  513 => 292,  506 => 289,  502 => 288,  443 => 247,  416 => 235,  412 => 234,  371 => 201,  350 => 191,  346 => 189,  311 => 159,  297 => 155,  253 => 123,  174 => 95,  150 => 83,  137 => 77,  23 => 3,  198 => 111,  345 => 165,  321 => 146,  317 => 145,  313 => 144,  301 => 156,  291 => 137,  271 => 130,  263 => 126,  188 => 82,  222 => 101,  211 => 108,  205 => 93,  197 => 88,  473 => 261,  470 => 246,  433 => 224,  429 => 223,  415 => 217,  406 => 214,  391 => 211,  382 => 208,  366 => 201,  357 => 198,  353 => 197,  327 => 173,  316 => 168,  308 => 165,  303 => 163,  296 => 160,  287 => 135,  261 => 127,  228 => 104,  212 => 111,  206 => 108,  192 => 108,  170 => 87,  226 => 95,  216 => 113,  191 => 79,  178 => 97,  126 => 51,  100 => 49,  124 => 51,  58 => 19,  84 => 33,  76 => 39,  20 => 1,  153 => 60,  146 => 62,  113 => 54,  104 => 52,  97 => 39,  77 => 34,  134 => 76,  127 => 54,  81 => 41,  34 => 6,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 331,  575 => 143,  572 => 142,  566 => 139,  563 => 315,  556 => 136,  553 => 135,  551 => 310,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 295,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 226,  421 => 390,  419 => 236,  408 => 382,  403 => 380,  388 => 374,  383 => 207,  378 => 206,  373 => 204,  363 => 364,  358 => 194,  351 => 358,  347 => 357,  343 => 356,  339 => 355,  335 => 354,  329 => 351,  324 => 349,  319 => 347,  299 => 339,  289 => 335,  284 => 333,  279 => 331,  274 => 131,  259 => 120,  249 => 319,  244 => 119,  232 => 307,  200 => 277,  184 => 105,  181 => 76,  175 => 78,  172 => 94,  160 => 97,  155 => 70,  65 => 23,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 348,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 338,  594 => 335,  591 => 150,  589 => 149,  585 => 332,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 314,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 302,  532 => 127,  527 => 298,  525 => 125,  519 => 121,  517 => 120,  509 => 290,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 260,  452 => 75,  449 => 250,  445 => 248,  442 => 44,  436 => 13,  431 => 241,  428 => 1,  422 => 393,  420 => 390,  414 => 387,  404 => 383,  399 => 212,  394 => 379,  389 => 210,  369 => 369,  364 => 197,  359 => 365,  352 => 361,  348 => 360,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 352,  315 => 348,  310 => 346,  300 => 342,  295 => 138,  290 => 158,  280 => 141,  275 => 332,  265 => 328,  260 => 326,  250 => 322,  245 => 320,  233 => 109,  231 => 114,  185 => 100,  180 => 77,  165 => 66,  161 => 70,  148 => 74,  118 => 61,  114 => 56,  110 => 58,  90 => 49,  70 => 27,  342 => 188,  320 => 350,  304 => 341,  270 => 330,  255 => 126,  239 => 117,  236 => 143,  234 => 118,  225 => 113,  218 => 131,  215 => 109,  210 => 128,  207 => 107,  202 => 279,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 45,  440 => 148,  437 => 244,  435 => 13,  430 => 2,  427 => 1,  423 => 238,  413 => 384,  409 => 385,  407 => 131,  402 => 213,  398 => 378,  393 => 376,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 366,  365 => 111,  362 => 110,  360 => 199,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 345,  312 => 167,  309 => 143,  305 => 142,  298 => 91,  294 => 159,  285 => 336,  283 => 156,  278 => 132,  268 => 85,  264 => 325,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 73,  220 => 120,  214 => 69,  177 => 65,  169 => 75,  140 => 53,  132 => 52,  128 => 68,  107 => 43,  61 => 35,  273 => 96,  269 => 327,  254 => 321,  243 => 127,  240 => 113,  238 => 119,  235 => 116,  230 => 305,  227 => 116,  224 => 156,  221 => 111,  219 => 110,  217 => 75,  208 => 109,  204 => 114,  179 => 79,  159 => 63,  143 => 80,  135 => 59,  119 => 48,  102 => 48,  71 => 25,  67 => 20,  63 => 22,  59 => 20,  93 => 47,  88 => 38,  78 => 40,  38 => 6,  28 => 4,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 93,  163 => 67,  158 => 64,  156 => 63,  151 => 66,  142 => 59,  138 => 52,  136 => 55,  121 => 51,  117 => 50,  105 => 52,  91 => 45,  62 => 23,  49 => 15,  26 => 2,  87 => 43,  46 => 14,  44 => 15,  31 => 5,  94 => 38,  89 => 34,  85 => 42,  75 => 25,  68 => 25,  56 => 19,  24 => 6,  27 => 4,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 21,  69 => 24,  47 => 14,  40 => 11,  37 => 8,  22 => 2,  246 => 113,  157 => 86,  145 => 63,  139 => 60,  131 => 53,  123 => 53,  120 => 58,  115 => 48,  111 => 46,  108 => 53,  101 => 37,  98 => 49,  96 => 39,  83 => 35,  74 => 29,  66 => 37,  55 => 23,  52 => 24,  50 => 8,  43 => 13,  41 => 7,  35 => 8,  32 => 5,  29 => 8,  209 => 88,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  187 => 84,  182 => 99,  176 => 102,  173 => 72,  168 => 99,  164 => 99,  162 => 57,  154 => 65,  149 => 63,  147 => 56,  144 => 54,  141 => 62,  133 => 57,  130 => 62,  125 => 52,  122 => 64,  116 => 48,  112 => 58,  109 => 44,  106 => 55,  103 => 28,  99 => 41,  95 => 42,  92 => 38,  86 => 47,  82 => 46,  80 => 29,  73 => 39,  64 => 29,  60 => 27,  57 => 24,  54 => 25,  51 => 20,  48 => 11,  45 => 15,  42 => 8,  39 => 13,  36 => 5,  33 => 3,  30 => 1,);
    }
}
