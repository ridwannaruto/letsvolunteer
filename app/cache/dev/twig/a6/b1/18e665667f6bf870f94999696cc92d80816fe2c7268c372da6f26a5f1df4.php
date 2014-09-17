<?php

/* RidwanOpportunityBundle:Assignment:details.html.twig */
class __TwigTemplate_a6b118e665667f6bf870f94999696cc92d80816fe2c7268c372da6f26a5f1df4 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"content\" class=\"span10\">
        <div class=\"row-fluid\">
            <div class=\"box span8\">

                <div class=\"box-content \">

                    <div id=\"content\" class=\"span12\">
                        <h2>Opportunity Details</h2>
                        <hr>
                        <br>

                        <div style=\"margin-left: 10%\">
                            <h6>Title</h6>

                            <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "title"), "html", null, true);
        echo "</h3>
                            <br>

                            <h6>Volunteer Role</h6>

                            <p align=\"justify\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "role"), "html", null, true);
        echo "</p>
                            <br>

                            <h6>Description</h6>

                            <p align=\"justify\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "description"), "html", null, true);
        echo "</p>
                            <br>

                            <table width='100%'>
                                <tr>
                                    <td width='40%'>
                                        <h6>Location</h6>

                                        <p align=\"justify\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "location"), "html", null, true);
        echo "</p>
                                        <br>

                                        <h6>Start Date</h6>

                                        <p align=\"justify\">";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "startdate"), "Y-m-d"), "html", null, true);
        echo "</p>
                                        <br>

                                        <h6>Expected End Date</h6>

                                        <p align=\"justify\">";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "enddate"), "Y-m-d"), "html", null, true);
        echo "</p>
                                        <br>

                                        <h6>Number of Volunteers</h6>

                                        <p align=\"justify\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "numberofvolunteers"), "html", null, true);
        echo "</p>
                                        <br>
                                    </td>
                                    <td width='10%'></td>
                                    <td width='40%'>
                                        <h6>Age Group</h6>

                                        <p align=\"justify\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "agegroup"), "html", null, true);
        echo "</p>
                                        <br>

                                        <h6>Difficulty</h6>

                                        <p align=\"justify\">
                                            ";
        // line 65
        if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 8)) {
            // line 66
            echo "
                                        <h3><span class=\"label label-important\"> Extreme</span></h3>
                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 6)) {
            // line 69
            echo "                                            <h3><span class=\"label label-warning\"> Hard</span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 4)) {
            // line 72
            echo "                                            <h3><span class=\"label label-inverse\"> Normal</span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 2)) {
            // line 75
            echo "                                            <h3><span class=\"label label-inverse\"> Easy </span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 0)) {
            // line 78
            echo "                                            <h3><span class=\"label label-info\"> Very Easy</span></h3>
                                        ";
        }
        // line 80
        echo "

                                        </p>
                                        <br>

                                        <h6>Cause</h6>

                                        <p align=\"justify\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "cause"), "html", null, true);
        echo "</p>
                                        <br>

                                        <h6>Status</h6>
                                        ";
        // line 91
        if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == (-1))) {
            // line 92
            echo "                                            <h3><span class=\"label label-important\"> Rejected</span></h3>
                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 0)) {
            // line 94
            echo "                                            <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 1)) {
            // line 97
            echo "                                            <h3><span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 2)) {
            // line 100
            echo "                                            <h3><span class=\"label label-inverse\"> On going</span></h3>

                                        ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 3)) {
            // line 103
            echo "                                            <h3><span class=\"label label-info\">Completed</span></h3>
                                        ";
        }
        // line 105
        echo "                                        <br>
                                    </td>
                                    <td width='10%'></td>
                                </tr>

                            </table>


                            <h6>Training</h6>

                            <p align=\"justify\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "training"), "html", null, true);
        echo "</p>
                            <br>

                            <h6>Expenses</h6>

                            <p align=\"justify\">";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "expenses"), "html", null, true);
        echo "</p>
                            <br>

                            <h6>Volunteer Hours</h6>
                            ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "time"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 125
            echo "                                <label>
                                    ";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "html", null, true);
            echo "
                                </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                            <br><br>

                        </div>


                    </div>
                </div>
            </div>

            <div class=\"box span4\">
                <div class=\"box-content \">

                    <div id=\"content\" class=\"span12\">
                        <h6>Volunteers List</h6>

                        ";
        // line 144
        if (((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")) == null)) {
            // line 145
            echo "                            <p align=\"center\">list not generated</p>
                        ";
        } else {
            // line 147
            echo "

                            <table class=\"table\" width=\"100%\">
                                <br>
                                <tbody>
                                ";
            // line 152
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 153
                echo "                                    ";
                if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 20) && ($this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "user") != null))) {
                    // line 154
                    echo "                                    <tr>
                                        <td class=\"center\">
                                            <div class=\"pull-right\">
                                                <a href='#' url=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_opportunity_suggest", array("opID" => $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"), "userID" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "user"), "id"))), "html", null, true);
                    echo "\"
                                                        id=\"";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id"), "html", null, true);
                    echo "\"
                                                        class=\"btn btn-complete btn-mini btn-success\">suggest
                                                </a>

                                            </div>
                                            <a href=\"";
                    // line 163
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_profile", array("ID" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "user"), "id"))), "html", null, true);
                    echo "\">
                                                ";
                    // line 164
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "firstname"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "lastname"), "html", null, true);
                    echo "</a>
                                            </a>


                                        </td>


                                    </tr>
                                        ";
                }
                // line 173
                echo "

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "

                                </tbody>
                            </table><hr>
                            <p align=\"center\"><a href=\"#\"><button class=\"btn btn-info btn-small\">see full list</button></a></p>



                        ";
        }
        // line 185
        echo "
                    </div>


                </div>

            </div>


        </div>
    </div>

    <div class=\"modal hide fade\" id=\"complete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirmation</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure this volunteer is suitable?
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



";
    }

    public function getTemplateName()
    {
        return "RidwanOpportunityBundle:Assignment:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 185,  307 => 176,  299 => 173,  285 => 164,  281 => 163,  273 => 158,  269 => 157,  264 => 154,  261 => 153,  257 => 152,  250 => 147,  246 => 145,  244 => 144,  227 => 129,  218 => 126,  215 => 125,  211 => 124,  204 => 120,  196 => 115,  184 => 105,  180 => 103,  175 => 100,  170 => 97,  165 => 94,  161 => 92,  159 => 91,  152 => 87,  143 => 80,  139 => 78,  134 => 75,  129 => 72,  124 => 69,  119 => 66,  117 => 65,  108 => 59,  98 => 52,  90 => 47,  82 => 42,  74 => 37,  63 => 29,  55 => 24,  47 => 19,  31 => 5,  28 => 4,);
    }
}
