<?php

/* RidwanOpportunityBundle:Opportunities:volunteer.html.twig */
class __TwigTemplate_5857ddc7d7bbc92bf99d631502d48dbb55ec896c41e491eb762fa709994930e4 extends Twig_Template
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
        echo "<div id=\"content\" class=\"span10\">


    <div class=\"row-fluid\">

        <div class=\"box span12\">
            ";
        // line 10
        if (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) == null)) {
            // line 11
            echo "            <div class=\"box-header well\" data-original-title>

                <h2><i class=\"icon-list-alt\"></i> Pending Opportunities</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                <br>
                <ul class=\"dashboard-list\">
                    ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Opportunities"]) ? $context["Opportunities"] : $this->getContext($context, "Opportunities")));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 24
                echo "                        <li>
                            <div class =\"pull-right\">
                                ";
                // line 26
                if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 0)) {
                    // line 27
                    echo "                                    <br><br>
                                    <button url=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_approve_opportunity", array("opID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                    echo "\" class=\"btn btn-small  btn-success btn-complete\"><i class=\"icon-ok\"></i> Approve</button>
                                    <button url=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_reject_opportunity", array("opID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                    echo "\" class=\"btn btn-small btn-danger btn-delete\"><i class=\"icon-remove\"></i> Reject</button>

                                ";
                }
                // line 32
                echo "                            </div>

                            <h2> ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "title"), "html", null, true);
                echo "</h2>

                            <br>

                            <h6>Description</h6>

                            <h3>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "description"), "html", null, true);
                echo "</h3>
                            <br>

                            <table width='100%'>
                                <tr>
                                    <td width='40%'>
                                        <h6>Location</h6>

                                        <h3>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "location"), "html", null, true);
                echo "</h3>
                                        <br>

                                        <h6>Start Date</h6>

                                        <h3>";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "startdate"), "Y-m-d"), "html", null, true);
                echo "</h3>
                                        <br>

                                        <h6>Expected End Date</h6>

                                        <h3>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "enddate"), "Y-m-d"), "html", null, true);
                echo "</h3>
                                        <br>

                                        <h6>Number of Volunteers</h6>

                                        <h3>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "numberofvolunteers"), "html", null, true);
                echo "</h3>
                                        <br>
                                    </td>
                                    <td width='10%'></td>
                                    <td width='40%'>
                                        <h6>Age Group</h6>

                                        <h3>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "agegroup"), "html", null, true);
                echo "</h3>
                                        <br>

                                        <h6>Difficulty</h6>

                                        <h3>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "difficulty"), "html", null, true);
                echo "</h3>
                                        <br>

                                        <h6>Cause</h6>

                                        <h3>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "cause"), "html", null, true);
                echo "</h3>
                                        <br>

                                        <h6>Status</h6>
                                        ";
                // line 84
                if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == (-1))) {
                    // line 85
                    echo "                                            <h3><span class=\"label label-important\"> Rejected</span></h3>
                                        ";
                } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 0)) {
                    // line 87
                    echo "                                            <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                        ";
                } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 1)) {
                    // line 90
                    echo "                                            <h3><span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                        ";
                } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 2)) {
                    // line 93
                    echo "                                            <h3><span class=\"label label-inverse\"> On going</span></h3>

                                        ";
                } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 3)) {
                    // line 96
                    echo "                                            <h3><span class=\"label label-info\">Completed</span></h3>
                                        ";
                }
                // line 98
                echo "                                        <br>
                                    </td>
                                    <td width='10%'></td>
                                </tr>

                            </table>


                            <h6>Training</h6>

                            <h3>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "training"), "html", null, true);
                echo "</h3>
                            <br>

                            <h6>Expenses</h6>

                            <h3>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "expenses"), "html", null, true);
                echo "</h3>
                            <br>

                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "

                </ul>
            </div>
            ";
        } else {
            // line 123
            echo "                <div class=\"box-header well\" data-original-title>

                    <h2><i class=\"icon-list-alt\"></i> Current Opportunity</h2>

                </div>
                <div class=\"box-content\">
                    <br>
                    <ul class=\"dashboard-list\" style=\"margin-left: 10%\">

                        <li>

                                <div class =\"pull-right\">
                                    ";
            // line 135
            if (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == 3)) {
                // line 136
                echo "                                        <br><br>
                                        <button url=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_approve_opportunity", array("opID" => $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"), "html", null, true);
                echo "\" class=\"btn btn-small  btn-success btn-complete\"><i class=\"icon-book\"></i> Feedback</button>

                                    ";
            }
            // line 140
            echo "                                </div>

                                <h2> ";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "title"), "html", null, true);
            echo "</h2>

                                <br>

                                <h6>Description</h6>

                                <h3>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "description"), "html", null, true);
            echo "</h3>
                                <br>

                                <table width='100%'>
                                    <tr>
                                        <td width='40%'>
                                            <h6>Location</h6>

                                            <h3>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "location"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Start Date</h6>

                                            <h3>";
            // line 161
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "startdate"), "Y-m-d"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Expected End Date</h6>

                                            <h3>";
            // line 166
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "enddate"), "Y-m-d"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Number of Volunteers</h6>

                                            <h3>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "numberofvolunteers"), "html", null, true);
            echo "</h3>
                                            <br>
                                        </td>
                                        <td width='10%'></td>
                                        <td width='40%'>
                                            <h6>Age Group</h6>

                                            <h3>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "agegroup"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Difficulty</h6>

                                            <h3>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "difficulty"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Cause</h6>

                                            <h3>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "cause"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Status</h6>
                                            ";
            // line 192
            if (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == (-1))) {
                // line 193
                echo "                                                <h3><span class=\"label label-important\"> Rejected</span></h3>
                                            ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == 0)) {
                // line 195
                echo "                                                <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                            ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == 1)) {
                // line 198
                echo "                                                <h3><span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                            ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == 2)) {
                // line 201
                echo "                                                <h3><span class=\"label label-inverse\"> On going</span></h3>

                                            ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == 3)) {
                // line 204
                echo "                                                <h3><span class=\"label label-info\">Completed</span></h3>
                                            ";
            }
            // line 206
            echo "                                            <br>
                                        </td>
                                        <td width='10%'></td>
                                    </tr>

                                </table>


                                <h6>Training</h6>

                                <h3>";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "training"), "html", null, true);
            echo "</h3>
                                <br>

                                <h6>Expenses</h6>

                                <h3>";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "expenses"), "html", null, true);
            echo "</h3>
                                <br>


                    </li>


                    </ul>
                </div>
                ";
        }
        // line 231
        echo "        </div>




        </div>
    </div>
        
";
    }

    public function getTemplateName()
    {
        return "RidwanOpportunityBundle:Opportunities:volunteer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 231,  379 => 221,  371 => 216,  359 => 206,  355 => 204,  350 => 201,  345 => 198,  340 => 195,  336 => 193,  334 => 192,  327 => 188,  319 => 183,  311 => 178,  301 => 171,  293 => 166,  285 => 161,  277 => 156,  266 => 148,  257 => 142,  253 => 140,  245 => 137,  242 => 136,  240 => 135,  226 => 123,  219 => 118,  208 => 113,  200 => 108,  188 => 98,  184 => 96,  179 => 93,  174 => 90,  169 => 87,  165 => 85,  163 => 84,  156 => 80,  148 => 75,  140 => 70,  130 => 63,  122 => 58,  114 => 53,  106 => 48,  95 => 40,  86 => 34,  82 => 32,  74 => 29,  68 => 28,  65 => 27,  63 => 26,  59 => 24,  55 => 23,  41 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
