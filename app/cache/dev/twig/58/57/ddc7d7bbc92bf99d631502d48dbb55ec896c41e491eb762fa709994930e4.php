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
            foreach ($context['_seq'] as $context["_key"] => $context["Opportunity"]) {
                // line 24
                echo "                        <li>
                            <div class =\"pull-right\">
                                ";
                // line 26
                if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 1)) {
                    // line 27
                    echo "                                    <br><br>
                                    <button url=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_opportunity_accept", array("opID" => $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"), "html", null, true);
                    echo "\" class=\"btn btn-small  btn-success btn-complete\"><i class=\"icon-ok\"></i> Accept</button>
                                    <button url=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_opportunity_deny", array("opID" => $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"), "html", null, true);
                    echo "\" class=\"btn btn-small btn-danger btn-delete\"><i class=\"icon-remove\"></i> Deny</button>

                                ";
                }
                // line 32
                echo "                            </div>

                            <h6>Title</h6>

                            <h3>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "title"), "html", null, true);
                echo "</h3>
                            <br>

                            <h6>Volunteer Role</h6>

                            <p align=\"justify\">";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "role"), "html", null, true);
                echo "</p>
                            <br>

                            <h6>Description</h6>

                            <p align=\"justify\">";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "description"), "html", null, true);
                echo "</p>
                            <br>

                            <table width='100%'>
                                <tr>
                                    <td width='40%'>
                                        <h6>Location</h6>

                                        <p align=\"justify\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "location"), "html", null, true);
                echo "</p>
                                        <br>

                                        <h6>Start Date</h6>

                                        <p align=\"justify\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "startdate"), "Y-m-d"), "html", null, true);
                echo "</p>
                                        <br>

                                        <h6>Expected End Date</h6>

                                        <p align=\"justify\">";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "enddate"), "Y-m-d"), "html", null, true);
                echo "</p>
                                        <br>

                                        <h6>Number of Volunteers</h6>

                                        <p align=\"justify\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "numberofvolunteers"), "html", null, true);
                echo "</p>
                                        <br>
                                    </td>
                                    <td width='10%'></td>
                                    <td width='40%'>
                                        <h6>Age Group</h6>

                                        <p align=\"justify\">";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "agegroup"), "html", null, true);
                echo "</p>
                                        <br>

                                        <h6>Difficulty</h6>

                                        <p align=\"justify\">
                                            ";
                // line 82
                if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 8)) {
                    // line 83
                    echo "                                        <h3><span class=\"label label-important\"> Extreme</span></h3>
                                        ";
                } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 6)) {
                    // line 85
                    echo "                                            <h3><span class=\"label label-warning\"> Hard</span></h3>

                                        ";
                } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 4)) {
                    // line 88
                    echo "                                            <h3><span class=\"label label-inverse\"> Normal</span></h3>

                                        ";
                } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 2)) {
                    // line 91
                    echo "                                            <h3><span class=\"label label-inverse\"> Easy </span></h3>

                                        ";
                } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "difficulty") == 0)) {
                    // line 94
                    echo "                                            <h3><span class=\"label label-info\"> Very Easy</span></h3>
                                        ";
                }
                // line 96
                echo "

                                        </p>
                                        <br>

                                        <h6>Cause</h6>

                                        <p align=\"justify\">";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "cause"), "html", null, true);
                echo "</p>
                                        <br>

                                        <h6>Status</h6>
                                        ";
                // line 107
                if (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == (-1))) {
                    // line 108
                    echo "                                            <h3><span class=\"label label-important\"> Rejected</span></h3>
                                        ";
                } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 0)) {
                    // line 110
                    echo "                                            <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                        ";
                } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 1)) {
                    // line 113
                    echo "                                            <h3><span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                        ";
                } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 2)) {
                    // line 116
                    echo "                                            <h3><span class=\"label label-inverse\"> On going</span></h3>

                                        ";
                } elseif (($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "status") == 3)) {
                    // line 119
                    echo "                                            <h3><span class=\"label label-info\">Completed</span></h3>
                                        ";
                }
                // line 121
                echo "                                        <br>
                                    </td>
                                    <td width='10%'></td>
                                </tr>

                            </table>


                            <h6>Training</h6>

                            <p align=\"justify\">";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "training"), "html", null, true);
                echo "</p>
                            <br>

                            <h6>Expenses</h6>

                            <p align=\"justify\">";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "expenses"), "html", null, true);
                echo "</p>
                            <br>

                            <h6>Volunteer Hours</h6>
                            ";
                // line 140
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "time"));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 141
                    echo "                                <label>
                                    ";
                    // line 142
                    echo twig_escape_filter($this->env, (isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "html", null, true);
                    echo "
                                </label>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "                            <br><br>


                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Opportunity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "

                </ul>
            </div>
            ";
        } else {
            // line 155
            echo "                <div class=\"box-header well\" data-original-title>

                    <h2><i class=\"icon-list-alt\"></i> Current Task</h2>

                </div>
                <div class=\"box-content\">
                    <br>
                    <ul class=\"dashboard-list\" style=\"margin-left: 10%\">

                        <li>

                                <div class =\"pull-right\">
                                    ";
            // line 167
            if (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == 3)) {
                // line 168
                echo "                                        <br><br>
                                        <button url=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_approve_opportunity", array("opID" => $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"), "html", null, true);
                echo "\" class=\"btn btn-small  btn-success btn-complete\"><i class=\"icon-book\"></i> Feedback</button>

                                    ";
            }
            // line 172
            echo "                                </div>

                            <h6>Title</h6>

                            <h3>";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "title"), "html", null, true);
            echo "</h3>
                            <br>

                            <h6>Volunteer Role</h6>

                            <p align=\"justify\">";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "role"), "html", null, true);
            echo "</p>
                            <br>

                            <h6>Description</h6>

                            <p align=\"justify\">";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "description"), "html", null, true);
            echo "</p>
                            <br>

                            <table width='100%'>
                                <tr>
                                    <td width='40%'>
                                        <h6>Location</h6>

                                        <p align=\"justify\">";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "location"), "html", null, true);
            echo "</p>
                                        <br>

                                        <h6>Start Date</h6>

                                        <p align=\"justify\">";
            // line 199
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "startdate"), "Y-m-d"), "html", null, true);
            echo "</p>
                                        <br>

                                        <h6>Expected End Date</h6>

                                        <p align=\"justify\">";
            // line 204
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "enddate"), "Y-m-d"), "html", null, true);
            echo "</p>
                                        <br>

                                        <h6>Number of Volunteers</h6>

                                        <p align=\"justify\">";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "numberofvolunteers"), "html", null, true);
            echo "</p>
                                        <br>
                                    </td>
                                    <td width='10%'></td>
                                    <td width='40%'>
                                        <h6>Age Group</h6>

                                        <p align=\"justify\">";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "agegroup"), "html", null, true);
            echo "</p>
                                        <br>

                                        <h6>Difficulty</h6>

                                        <p align=\"justify\">
                                            ";
            // line 222
            if (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "difficulty") == 8)) {
                // line 223
                echo "                                        <h3><span class=\"label label-important\"> Extreme</span></h3>
                                        ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "difficulty") == 6)) {
                // line 225
                echo "                                            <h3><span class=\"label label-warning\"> Hard</span></h3>

                                        ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "difficulty") == 4)) {
                // line 228
                echo "                                            <h3><span class=\"label label-inverse\"> Normal</span></h3>

                                        ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "difficulty") == 2)) {
                // line 231
                echo "                                            <h3><span class=\"label label-inverse\"> Easy </span></h3>

                                        ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "difficulty") == 0)) {
                // line 234
                echo "                                            <h3><span class=\"label label-info\"> Very Easy</span></h3>
                                        ";
            }
            // line 236
            echo "

                                        </p>
                                        <br>

                                        <h6>Cause</h6>

                                        <p align=\"justify\">";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "cause"), "html", null, true);
            echo "</p>
                                        <br>

                                        <h6>Status</h6>
                                        ";
            // line 247
            if (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == (-1))) {
                // line 248
                echo "                                            <h3><span class=\"label label-important\"> Rejected</span></h3>
                                        ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == 0)) {
                // line 250
                echo "                                            <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                        ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == 1)) {
                // line 253
                echo "                                            <h3><span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                        ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == 2)) {
                // line 256
                echo "                                            <h3><span class=\"label label-inverse\"> On going</span></h3>

                                        ";
            } elseif (($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "status") == 3)) {
                // line 259
                echo "                                            <h3><span class=\"label label-info\">Completed</span></h3>
                                        ";
            }
            // line 261
            echo "                                        <br>
                                    </td>
                                    <td width='10%'></td>
                                </tr>

                            </table>


                            <h6>Training</h6>

                            <p align=\"justify\">";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "training"), "html", null, true);
            echo "</p>
                            <br>

                            <h6>Expenses</h6>

                            <p align=\"justify\">";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "expenses"), "html", null, true);
            echo "</p>
                            <br>

                            <h6>Volunteer Hours</h6>
                            ";
            // line 280
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "time"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 281
                echo "                                <label>
                                    ";
                // line 282
                echo twig_escape_filter($this->env, (isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "html", null, true);
                echo "
                                </label>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "                            <br><br>

                        </li>


                    </ul>
                </div>
                ";
        }
        // line 293
        echo "        </div>




        </div>
    </div>

    <div class=\"modal hide fade\" id=\"complete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirmation</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">You are about to accept this opportunity?
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

    <div class=\"modal hide fade\" id=\"delete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirmation</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure you don't want this opportunity?
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
        return "RidwanOpportunityBundle:Opportunities:volunteer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 293,  496 => 285,  487 => 282,  484 => 281,  480 => 280,  473 => 276,  465 => 271,  453 => 261,  449 => 259,  444 => 256,  439 => 253,  434 => 250,  430 => 248,  428 => 247,  421 => 243,  412 => 236,  408 => 234,  403 => 231,  398 => 228,  393 => 225,  389 => 223,  387 => 222,  378 => 216,  368 => 209,  360 => 204,  352 => 199,  344 => 194,  333 => 186,  325 => 181,  317 => 176,  311 => 172,  303 => 169,  300 => 168,  298 => 167,  284 => 155,  277 => 150,  267 => 145,  258 => 142,  255 => 141,  251 => 140,  244 => 136,  236 => 131,  224 => 121,  220 => 119,  215 => 116,  210 => 113,  205 => 110,  201 => 108,  199 => 107,  192 => 103,  183 => 96,  179 => 94,  174 => 91,  169 => 88,  164 => 85,  160 => 83,  158 => 82,  149 => 76,  139 => 69,  131 => 64,  123 => 59,  115 => 54,  104 => 46,  96 => 41,  88 => 36,  82 => 32,  74 => 29,  68 => 28,  65 => 27,  63 => 26,  59 => 24,  55 => 23,  41 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
