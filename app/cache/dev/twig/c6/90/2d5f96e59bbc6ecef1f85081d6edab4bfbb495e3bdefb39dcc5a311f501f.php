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

                        <h6>Description</h6>

                        <p align=\"justify\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "description"), "html", null, true);
        echo "</p>
                        <br>

                        <table width='100%'>
                            <tr>
                                <td width='40%'>
                                    <h6>Location</h6>

                                    <p align=\"justify\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "location"), "html", null, true);
        echo "</p>
                                    <br>

                                    <h6>Start Date</h6>

                                    <p align=\"justify\">";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "startdate"), "Y-m-d"), "html", null, true);
        echo "</p>
                                    <br>

                                    <h6>Expected End Date</h6>

                                    <p align=\"justify\">";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "enddate"), "Y-m-d"), "html", null, true);
        echo "</p>
                                    <br>

                                    <h6>Number of Volunteers</h6>

                                    <p align=\"justify\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "numberofvolunteers"), "html", null, true);
        echo "</p>
                                    <br>
                                </td>
                                <td width='10%'></td>
                                <td width='40%'>
                                    <h6>Age Group</h6>

                                    <p align=\"justify\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "agegroup"), "html", null, true);
        echo "</p>
                                    <br>

                                    <h6>Difficulty</h6>

                                    <p align=\"justify\">
                                        ";
        // line 79
        if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 8)) {
            // line 80
            echo "                                    <h3><span class=\"label label-important\"> Extreme</span></h3>
                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 6)) {
            // line 82
            echo "                                        <h3><span class=\"label label-warning\"> Hard</span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 4)) {
            // line 85
            echo "                                        <h3><span class=\"label label-inverse\"> Normal</span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 2)) {
            // line 88
            echo "                                        <h3><span class=\"label label-inverse\"> Easy </span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 0)) {
            // line 91
            echo "                                        <h3><span class=\"label label-info\"> Very Easy</span></h3>
                                    ";
        }
        // line 93
        echo "

                                    </p>
                                    <br>

                                    <h6>Cause</h6>

                                    <p align=\"justify\">";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "cause"), "html", null, true);
        echo "</p>
                                    <br>

                                    <h6>Status</h6>
                                    ";
        // line 104
        if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == (-1))) {
            // line 105
            echo "                                        <h3><span class=\"label label-important\"> Rejected</span></h3>
                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 0)) {
            // line 107
            echo "                                        <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 1)) {
            // line 110
            echo "                                        <h3><span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 2)) {
            // line 113
            echo "                                        <h3><span class=\"label label-inverse\"> On going</span></h3>

                                    ";
        } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 3)) {
            // line 116
            echo "                                        <h3><span class=\"label label-info\">Completed</span></h3>
                                    ";
        }
        // line 118
        echo "                                    <br>
                                </td>
                                <td width='10%'></td>
                            </tr>

                        </table>


                        <h6>Training</h6>

                        <p align=\"justify\">";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "training"), "html", null, true);
        echo "</p>
                        <br>

                        <h6>Expenses</h6>

                        <p align=\"justify\">";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "expenses"), "html", null, true);
        echo "</p>
                        <br>


                    </div>


                </div>
            </div>
        </div>

        <div class=\"box span4\">
            <div class=\"box-content \">

                <div id=\"content\" class=\"span12\">
                    <h6>Volunteers List</h6>
                    <hr>
                    <br>
                    ";
        // line 151
        if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") != 1)) {
            // line 152
            echo "                        <p align=\"center\">list not generated</p>
                    ";
        } else {
            // line 154
            echo "                    ";
        }
        // line 155
        echo "                    <br>
                </div>


            </div>

        </div>


        ";
    }

    // line 166
    public function block_delete($context, array $blocks = array())
    {
        // line 167
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
        return array (  281 => 167,  278 => 166,  265 => 155,  262 => 154,  258 => 152,  256 => 151,  235 => 133,  227 => 128,  215 => 118,  211 => 116,  206 => 113,  201 => 110,  196 => 107,  192 => 105,  190 => 104,  183 => 100,  174 => 93,  170 => 91,  165 => 88,  160 => 85,  155 => 82,  151 => 80,  149 => 79,  140 => 73,  130 => 66,  122 => 61,  114 => 56,  106 => 51,  95 => 43,  87 => 38,  79 => 32,  70 => 26,  66 => 25,  58 => 21,  50 => 17,  48 => 16,  45 => 15,  43 => 14,  32 => 5,  29 => 4,);
    }
}
