<?php

/* RidwanOpportunityBundle:Opportunities:details.html.twig */
class __TwigTemplate_c6902d5f96e59bbc6ecef1f85081d6edab4bfbb495e3bdefb39dcc5a311f501f extends Twig_Template
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
        <div class=\"box span8\">

            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h2>Opportunity Details</h2>
                    <hr>
                    ";
        // line 14
        if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "organization") == (isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")))) {
            // line 15
            echo "                        <div class=\"pull-right\">
                            ";
            // line 16
            if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 2)) {
                // line 17
                echo "                                <a href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_opportunity_completePage", array("opportunityID" => $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"))), "html", null, true);
                echo "\">
                                    <button class=\"btn btn-small btn-success\">complete</button>
                                </a>
                            ";
            }
            // line 21
            echo "                            <a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_opportunity_edit", array("id" => $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"))), "html", null, true);
            echo "\">
                                <button class=\"btn btn-small btn-inverse\">edit</button>
                            </a>
                            <button class=\"btn btn-small btn-danger btn-delete\"
                                    url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_opportunity_delete", array("id" => $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"))), "html", null, true);
            echo "\"
                                    id=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"), "html", null, true);
            echo "\"> delete
                            </button>

                            <br>
                        </div>
                    ";
        }
        // line 32
        echo "
                    <br>

                    <div style=\"margin-left: 10%\">
                        <h6>Title</h6>

                        <h3>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "title"), "html", null, true);
        echo "</h3>
                        <br>

                        <h6>Volunteer Role</h6>

                        <p align=\"justify\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "role"), "html", null, true);
        echo "</p>
                        <br>

                        <h6>Description</h6>

                        <p align=\"justify\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "description"), "html", null, true);
        echo "</p>
                        <br>

                        <table width='100%'>
                            <tr>
                                <td width='40%'>
                                    <h6>Location</h6>

                                    <p align=\"justify\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "location"), "html", null, true);
        echo "</p>
                                    <br>

                                    <h6>Start Date</h6>

                                    <p align=\"justify\">";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "startdate"), "Y-m-d"), "html", null, true);
        echo "</p>
                                    <br>

                                    <h6>Expected End Date</h6>

                                    <p align=\"justify\">";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "enddate"), "Y-m-d"), "html", null, true);
        echo "</p>
                                    <br>

                                    <h6>Number of Volunteers</h6>

                                    <p align=\"justify\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "numberofvolunteers"), "html", null, true);
        echo "</p>
                                    <br>
                                </td>
                                <td width='10%'></td>
                                <td width='40%'>
                                    <h6>Age Group</h6>

                                    <p align=\"justify\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "agegroup"), "html", null, true);
        echo "</p>
                                    <br>

                                    <h6>Difficulty</h6>

                                    <p align=\"justify\">
                                        ";
        // line 84
        if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 8)) {
            // line 85
            echo "                                    <h3><span class=\"label label-important\"> Extreme</span></h3>
                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 6)) {
            // line 87
            echo "                                        <h3><span class=\"label label-warning\"> Hard</span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 4)) {
            // line 90
            echo "                                        <h3><span class=\"label label-inverse\"> Normal</span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 2)) {
            // line 93
            echo "                                        <h3><span class=\"label label-inverse\"> Easy </span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 0)) {
            // line 96
            echo "                                        <h3><span class=\"label label-info\"> Very Easy</span></h3>
                                    ";
        }
        // line 98
        echo "

                                    </p>
                                    <br>

                                    <h6>Cause</h6>

                                    <p align=\"justify\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "cause"), "html", null, true);
        echo "</p>
                                    <br>

                                    <h6>Status</h6>
                                    ";
        // line 109
        if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == (-1))) {
            // line 110
            echo "                                        <h3><span class=\"label label-important\"> Rejected</span></h3>
                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 0)) {
            // line 112
            echo "                                        <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 1)) {
            // line 115
            echo "                                        <h3><span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 2)) {
            // line 118
            echo "                                        <h3><span class=\"label label-inverse\"> On going</span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 3)) {
            // line 121
            echo "                                        <h3><span class=\"label label-info\">Completed</span></h3>
                                    ";
        }
        // line 123
        echo "                                    <br>
                                </td>
                                <td width='10%'></td>
                            </tr>

                        </table>


                        <h6>Training</h6>

                        <p align=\"justify\">";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "training"), "html", null, true);
        echo "</p>
                        <br>

                        <h6>Expenses</h6>

                        <p align=\"justify\">";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "expenses"), "html", null, true);
        echo "</p>
                        <br>

                        <h6>Volunteer Hours</h6>
                        ";
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "time"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 143
            echo "                            <label>
                                ";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "html", null, true);
            echo "
                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                        <br><br>

                    </div>


                </div>
            </div>
        </div>

        <div class=\"box span4\">
            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h6>Volunteers List</h6>

                        ";
        // line 162
        if (((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")) == null)) {
            // line 163
            echo "
                            <hr>
                            <p align=\"center\">list not generated</p>
                        ";
        } else {
            // line 167
            echo "                            <br>
                            <table class=\"table\" width=\"100%\">

                                <tbody>
                                ";
            // line 171
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 172
                echo "                                    ";
                if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 20) && ($this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "user") != null))) {
                    // line 173
                    echo "                                        <tr>
                                            <td class=\"center\">
                                                <a href=\"";
                    // line 175
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_profile", array("ID" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "user"), "id"))), "html", null, true);
                    echo "\">
                                                    ";
                    // line 176
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "firstname"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "lastname"), "html", null, true);
                    echo "</a>
                                                </a>


                                            </td>


                                        </tr>
                                    ";
                }
                // line 185
                echo "

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "

                                </tbody>
                            </table><hr>
                            <p align=\"center\"><a href=\"#\"><button class=\"btn btn-info btn-small\">see full list</button></a></p>




                    ";
        }
        // line 198
        echo "                    <br>
                </div>


            </div>

        </div>


        ";
    }

    // line 209
    public function block_delete($context, array $blocks = array())
    {
        // line 210
        echo "        <div class=\"modal hide fade\" id=\"delete\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                <h3>Confirm</h3>
            </div>
            <div class=\"modal-body\">
                <p align=\"center\">Are you sure you want to delete this Opportunity?
                </p>


            </div>
            <div class=\"modal-footer\">

                <form action=\"empty\" id=\"continue-form\" method=\"POST\">
                    <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\"/>
                    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
                </form>

            </div>
        </div>

</div>

";
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
        return array (  362 => 210,  359 => 209,  346 => 198,  334 => 188,  326 => 185,  312 => 176,  308 => 175,  304 => 173,  301 => 172,  297 => 171,  291 => 167,  285 => 163,  283 => 162,  266 => 147,  257 => 144,  254 => 143,  250 => 142,  243 => 138,  235 => 133,  223 => 123,  219 => 121,  214 => 118,  209 => 115,  204 => 112,  200 => 110,  198 => 109,  191 => 105,  182 => 98,  178 => 96,  173 => 93,  168 => 90,  163 => 87,  159 => 85,  157 => 84,  148 => 78,  138 => 71,  130 => 66,  122 => 61,  114 => 56,  103 => 48,  95 => 43,  87 => 38,  79 => 32,  70 => 26,  66 => 25,  58 => 21,  50 => 17,  48 => 16,  45 => 15,  43 => 14,  32 => 5,  29 => 4,);
    }
}
