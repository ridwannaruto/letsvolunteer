<?php

/* RidwanUserBundle:Users:nvs.html.twig */
class __TwigTemplate_a06c91ae1b7184eb789fa0e6b049703053967c501bd14bf3e22f23817ab8d269 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\" class=\"span10\">
        <div class=\"row-fluid\">
            <div class=\"box span12\">

                <div class=\"box-header well\" data-original-title>

                    <h2><i class=\"icon-users\"></i> NVS Staff</h2>

                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                    </div>
                </div>
                <div class=\"box-content\">
                    <div class=\"pull-right\">
                        <button class=\"btn btn-small btn-success\"> Add New User</button>
                    </div>
                    <table class=\"table bootstrap-datatable datatable\">

                        <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Last Login</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["staff"]) ? $context["staff"] : $this->getContext($context, "staff")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "                            ";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles"), 0, array(), "array") == "NVS")) {
                // line 34
                echo "                                <tr>
                                    <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
                echo "</td>
                                    <td class=\"center\"> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
                echo "</td>
                                    <td class=\"center\">";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastlogin"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                                    <td class=\"center \">
                                        <a class=\"btn btn-primary\" href=\"#\">
                                            <i class=\"icon-zoom-in icon-white\"></i>
                                            View
                                        </a>

                                        <a class=\"btn btn-danger\" href=\"#\">
                                            <i class=\"icon-trash icon-white\"></i>
                                            Delete
                                        </a>
                                    </td>

                                </tr>

                            ";
            }
            // line 53
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class=\"row-fluid\">

            <div class=\"box span12\">
                <div class=\"box-header well\" data-original-title>

                    <h2><i class=\"icon-users\"></i> Volunteers</h2>

                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                    </div>
                </div>

                <div class=\"box-content\">
                    <div class=\"pull-right\">
                        <button class=\"btn btn-small btn-success\"> Add New Volunteer</button>
                    </div>
                    <table class=\"table bootstrap-datatable datatable\">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Nationality</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 91
            echo "                            <tr>
                                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname"), "html", null, true);
            echo "</td>
                                <td class=\"center\"> ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nationality"), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category"), "html", null, true);
            echo "</td>
                                <td class=\"center \">
                                    <a class=\"btn btn-primary\" href=\"#\">
                                        <i class=\"icon-zoom-in icon-white\"></i>
                                        View
                                    </a>

                                    <a class=\"btn btn-danger\" href=\"#\">
                                        <i class=\"icon-trash icon-white\"></i>
                                        Delete
                                    </a>
                                </td>

                            </tr>


                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row-fluid\">

            <div class=\"box span12\">
                <div class=\"box-header well\" data-original-title>

                    <h2><i class=\"icon-users\"></i> Organizations</h2>

                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                    </div>
                </div>


                <div class=\"box-content\">
                    <div class=\"pull-right\">
                        <button class=\"btn btn-small btn-success\"> Add New Organization</button>
                    </div>
                    <table class=\"table bootstrap-datatable datatable\">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 146
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 147
            echo "                            <tr>
                                <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</td>
                                <td class=\"center\"> ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "branch"), "html", null, true);
            echo "</td>
                                <td class=\"center\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
            echo "</td>
                                <td class=\"center \">
                                    <a class=\"btn btn-primary\" href=\"#\">
                                        <i class=\"icon-zoom-in icon-white\"></i>
                                        View
                                    </a>

                                    <a class=\"btn btn-danger\" href=\"#\">
                                        <i class=\"icon-trash icon-white\"></i>
                                        Delete
                                    </a>
                                </td>

                            </tr>


                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    <div class=\"row-fluid\">

        <div class=\"box span12\">
            <div class=\"box-header well\" data-original-title>

                <h2><i class=\"icon-users\"></i> Referees</h2>

                <div class=\"box-icon\">
                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>


            <div class=\"box-content\">
                <div class=\"pull-right\">
                    <button class=\"btn btn-small btn-success\"> Add New Referee</button>
                </div>
                <table class=\"table bootstrap-datatable datatable\">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 205
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 206
            echo "                        <tr>
                            <td>";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</td>
                            <td class=\"center\"> ";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                            <td class=\"center\">";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mobilenumber"), "html", null, true);
            echo "</td>
                            <td class=\"center\">";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactnumber"), "html", null, true);
            echo "</td>
                            <td class=\"center \">
                                <a class=\"btn btn-primary\" href=\"#\">
                                    <i class=\"icon-zoom-in icon-white\"></i>
                                    View
                                </a>

                                <a class=\"btn btn-danger\" href=\"#\">
                                    <i class=\"icon-trash icon-white\"></i>
                                    Delete
                                </a>
                            </td>

                        </tr>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Users:nvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 227,  316 => 210,  312 => 209,  308 => 208,  304 => 207,  301 => 206,  297 => 205,  257 => 167,  234 => 150,  230 => 149,  226 => 148,  223 => 147,  219 => 146,  182 => 111,  159 => 94,  155 => 93,  149 => 92,  146 => 91,  142 => 90,  105 => 55,  98 => 53,  79 => 37,  75 => 36,  71 => 35,  68 => 34,  65 => 33,  61 => 32,  31 => 4,  28 => 3,);
    }
}
