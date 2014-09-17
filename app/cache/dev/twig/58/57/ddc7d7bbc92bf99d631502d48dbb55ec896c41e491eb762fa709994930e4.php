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
        return array (  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 250,  428 => 247,  412 => 236,  403 => 231,  352 => 199,  344 => 194,  333 => 186,  317 => 176,  300 => 168,  284 => 155,  277 => 150,  255 => 141,  359 => 209,  346 => 198,  304 => 173,  297 => 171,  200 => 110,  198 => 109,  172 => 102,  473 => 276,  470 => 246,  449 => 259,  445 => 227,  433 => 224,  419 => 219,  399 => 212,  391 => 211,  382 => 208,  378 => 216,  373 => 204,  366 => 201,  357 => 198,  303 => 169,  290 => 158,  287 => 157,  206 => 108,  170 => 87,  188 => 87,  178 => 96,  150 => 75,  184 => 121,  129 => 55,  126 => 51,  20 => 1,  153 => 60,  146 => 64,  155 => 70,  292 => 135,  279 => 130,  267 => 145,  249 => 115,  223 => 123,  211 => 96,  197 => 88,  175 => 90,  104 => 46,  134 => 54,  152 => 66,  113 => 52,  76 => 30,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 226,  425 => 289,  406 => 214,  364 => 200,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 181,  263 => 161,  242 => 149,  236 => 131,  222 => 101,  216 => 113,  192 => 103,  160 => 83,  100 => 43,  257 => 144,  190 => 118,  124 => 54,  97 => 42,  81 => 45,  348 => 173,  338 => 169,  334 => 188,  329 => 166,  324 => 151,  319 => 162,  299 => 156,  245 => 160,  228 => 104,  212 => 111,  167 => 82,  137 => 69,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 234,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 201,  310 => 197,  308 => 175,  289 => 134,  260 => 155,  250 => 142,  248 => 151,  239 => 143,  233 => 105,  213 => 126,  181 => 76,  127 => 63,  84 => 30,  77 => 28,  205 => 110,  191 => 105,  174 => 91,  58 => 21,  65 => 27,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 150,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 293,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 197,  349 => 368,  345 => 367,  331 => 155,  326 => 185,  316 => 168,  311 => 172,  306 => 195,  301 => 172,  296 => 160,  291 => 167,  286 => 344,  281 => 342,  276 => 340,  266 => 147,  261 => 136,  251 => 140,  234 => 107,  232 => 121,  185 => 109,  180 => 82,  165 => 84,  161 => 70,  148 => 78,  118 => 58,  114 => 56,  110 => 54,  90 => 45,  70 => 26,  343 => 221,  321 => 358,  315 => 195,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 120,  256 => 129,  253 => 116,  244 => 136,  237 => 144,  226 => 95,  218 => 102,  215 => 116,  210 => 113,  207 => 97,  202 => 123,  53 => 16,  480 => 280,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 261,  444 => 256,  440 => 148,  437 => 225,  435 => 146,  430 => 248,  427 => 143,  423 => 220,  413 => 134,  409 => 132,  407 => 131,  402 => 213,  398 => 228,  393 => 225,  387 => 222,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 209,  365 => 375,  362 => 210,  360 => 204,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 176,  309 => 97,  305 => 139,  298 => 167,  294 => 159,  285 => 163,  283 => 162,  278 => 86,  268 => 85,  264 => 84,  258 => 142,  252 => 116,  247 => 129,  241 => 126,  229 => 104,  220 => 119,  214 => 118,  177 => 65,  169 => 88,  140 => 63,  132 => 66,  128 => 68,  107 => 43,  61 => 21,  273 => 96,  269 => 163,  254 => 143,  243 => 138,  240 => 124,  238 => 108,  235 => 133,  230 => 82,  227 => 157,  224 => 121,  221 => 142,  219 => 121,  217 => 95,  208 => 109,  204 => 112,  179 => 94,  159 => 85,  143 => 61,  135 => 59,  119 => 48,  102 => 36,  71 => 25,  67 => 24,  63 => 26,  59 => 24,  93 => 37,  88 => 36,  78 => 30,  38 => 10,  28 => 3,  201 => 108,  196 => 105,  183 => 96,  171 => 71,  166 => 85,  163 => 87,  158 => 82,  156 => 79,  151 => 66,  142 => 63,  138 => 71,  136 => 60,  121 => 57,  117 => 47,  105 => 47,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 38,  46 => 17,  44 => 13,  31 => 4,  94 => 34,  89 => 34,  85 => 33,  75 => 31,  68 => 28,  56 => 21,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 32,  72 => 26,  69 => 30,  47 => 15,  40 => 11,  37 => 7,  22 => 1,  246 => 113,  157 => 84,  145 => 63,  139 => 69,  131 => 64,  123 => 59,  120 => 52,  115 => 54,  111 => 76,  108 => 44,  101 => 42,  98 => 48,  96 => 41,  83 => 35,  74 => 29,  66 => 25,  55 => 23,  52 => 17,  50 => 17,  43 => 14,  41 => 11,  35 => 6,  32 => 5,  29 => 4,  209 => 115,  203 => 93,  199 => 107,  193 => 87,  189 => 71,  187 => 84,  182 => 98,  176 => 72,  173 => 93,  168 => 90,  164 => 85,  162 => 74,  154 => 78,  149 => 76,  147 => 74,  144 => 61,  141 => 71,  133 => 57,  130 => 66,  125 => 52,  122 => 61,  116 => 57,  112 => 45,  109 => 45,  106 => 38,  103 => 48,  99 => 41,  95 => 43,  92 => 38,  86 => 43,  82 => 32,  80 => 31,  73 => 26,  64 => 23,  60 => 26,  57 => 24,  54 => 20,  51 => 20,  48 => 16,  45 => 15,  42 => 13,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
