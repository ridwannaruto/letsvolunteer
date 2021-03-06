<?php

/* RidwanSiteBundle:Profile:volunteer.html.twig */
class __TwigTemplate_a30221806b67fd92684a695b2edd339053d38b4d86775dc2315318bd1d82ddec extends Twig_Template
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
        echo "    <div class=\"box span8\">
    <div class=\"box-header well\">
        <h2><i class=\"icon-user\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "lastname"), "html", null, true);
        echo "</h2>
    </div>


    <div class=\"box-content \">

    <ul class=\"nav nav-tabs\" id=\"myTab\" style=\"border: none\">
        <li><a href=\"#profile\" style=\"background-color: white; border: none\"><h6>Profile</h6></a></li>
        <li><a href=\"#personal\" style=\"background-color: white; border: none\"><h6>Personal Details</h6></a></li>
        <li><a href=\"#contact\" style=\"background-color: white; border: none\"><h6>Contact Details</h6></a></li>
        <li><a href=\"#education\" style=\"background-color: white; border: none\"><h6>Education</h6></a></li>
        <li><a href=\"#employment\" style=\"background-color: white; border: none\"><h6>Employment</h6></a></li>
        <li><a href=\"#skills\" style=\"background-color: white; border: none\"><h6>Skills</h6></a></li>
        <li><a href=\"#referees\" style=\"background-color: white; border: none\"><h6>Referees</h6></a></li>
    </ul>

    <hr>

    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"profile\">
        <br><br>
        <h3 align=\"center\">Volunteer Profile</h3>
        <br>
        <table width=\"100%\">
            <tr>
                <td width=\"10%\"></td>

                <td width=\"40%\">
                    <h6>Profile Picture</h6>
                    ";
        // line 36
        if ($this->getAttribute((isset($context["authProfile"]) ? $context["authProfile"] : $this->getContext($context, "authProfile")), "path")) {
            // line 37
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authProfile"]) ? $context["authProfile"] : $this->getContext($context, "authProfile")), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                    ";
        } else {
            // line 39
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\"
                             style=\"border: 2px\">
                    ";
        }
        // line 42
        echo "                    <br><br>
                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Volunteered Hours</h6>
                    <h1>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "hours"), "html", null, true);
        echo " Hrs</h1> <br>
                </td>
                <td width=\"10%\"></td>


            </tr>


            <tr>
                <td width=\"10%\"></td>
                <td width=\"40%\">
                    <h6>Self Introduction</h6>
                    ";
        // line 59
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "intro") == null)) {
            // line 60
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 62
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "intro"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 64
        echo "

                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Volunteer Value </h6>

                    <h1>Rs. ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "value"), "html", null, true);
        echo ".00</h1><br>


                </td>
                <td width=\"10%\"></td>


            </tr>

            <br>
            <tr>
                <td width=\"10%\"></td>

                <td width=\"40%\">
                    <h6>Reason to Volunteer</h6>
                    ";
        // line 86
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "reason") == null)) {
            // line 87
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 89
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "reason"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 91
        echo "
                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Volunteer Rating </h6>

                    <h3>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "aggregatedRating"), "html", null, true);
        echo "</h3><br>

                </td>
                <td width=\"10%\"></td>

            </tr>

            <tr>
                <td width=\"10%\"></td>

                <td width=\"40%\">

                    <h6>Previous Experience</h6>
                    ";
        // line 110
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "experience") == null)) {
            // line 111
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 113
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "experience"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 115
        echo "

                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Driving License</h6>
                    ";
        // line 121
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "drivinglicense") == null)) {
            // line 122
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 124
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "drivinglicense"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 126
        echo "                </td>
                <td width=\"10%\"></td>
            </tr>


            <br>
            <tr>
                <td width=\"10%\"></td>

                <td width=\"40%\">

                    <h6>Health</h6>
                    ";
        // line 138
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "health") == null)) {
            // line 139
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 141
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "health"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 143
        echo "
                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">


                    <h6>Arrested</h6>
                    ";
        // line 150
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "arrested") == null)) {
            // line 151
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 153
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "arrested"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 155
        echo "
                </td>
                <td width=\"10%\"></td>


            </tr>


        </table>


    </div>
    <div class=\"tab-pane active\" id=\"personal\">
        <br><br>

        <h3 align=\"center\">Personal Information</h3>
        <br>
        <table width=\"'100%\">
            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Full Name</strong>
                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "firstname"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "lastname"), "html", null, true);
        echo "
                    </p>
                </td>

            </tr>
            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Gender</strong>
                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 196
        if (($this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "Gender") == "M")) {
            // line 197
            echo "                            Male
                        ";
        } else {
            // line 199
            echo "                            Female
                        ";
        }
        // line 201
        echo "                    </p>
                </td>

            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">

                    <strong>Civil Status</strong>

                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">

                        ";
        // line 218
        if (($this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "CivilStatus") == 1)) {
            // line 219
            echo "                            Married
                        ";
        } else {
            // line 221
            echo "                            Single
                        ";
        }
        // line 223
        echo "
                    </p>
                </td>


            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">

                    <strong>Identification</strong>

                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "nicORpassport"), "html", null, true);
        echo "
                    </p>
                </td>


            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">

                    <strong>Date of Birth</strong>

                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">

                        ";
        // line 260
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "dateofbirth"), "Y-m-d"), "html", null, true);
        echo "
                    </p>
                </td>


            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Nationality</strong>
                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "nationality"), "html", null, true);
        echo "
                    </p>
                </td>
            </tr>
            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Account Type</strong>
                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "category"), "html", null, true);
        echo "
                    </p>
                </td>


            </tr>
        </table>

    </div>
    <div class=\"tab-pane\" id=\"contact\">
        <br><br>

        <h3 align=\"center\">Contact Information</h3>
        <br>
        <table width=\"'100%\">
            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Street Number</strong>
                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 313
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Streetnumber"), "html", null, true);
        echo "
                    </p>
                </td>

            </tr>
            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Street Name</strong>
                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Street"), "html", null, true);
        echo "
                    </p>
                </td>

            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>City</strong>
                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 342
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "City"), "html", null, true);
        echo "

                    </p>
                </td>


            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Divisional Secretary</strong>

                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "DivisionalSecretary"), "html", null, true);
        echo "
                    </p>
                </td>


            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">

                    <strong>District</strong>

                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 378
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "District"), "html", null, true);
        echo "
                    </p>
                </td>


            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">

                    <strong>Province</strong>

                </td>
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 396
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Province"), "html", null, true);
        echo "
                    </p>
                </td>


            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Country</strong>
                </td>
                <td width=\"4%\"></td>
                <td width=\"40%\"><p align=\"left\">";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Country"), "html", null, true);
        echo "</p></td>
            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Mobile Number</strong>
                </td>
                <td width=\"4%\"></td>
                <td width=\"40%\"><p align=\"left\">";
        // line 418
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mobile"), "html", null, true);
        echo "</p></td>
            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Phone Number</strong>
                </td>
                <td width=\"4%\"></td>
                <td width=\"40%\"><p align=\"left\">";
        // line 427
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone"), "html", null, true);
        echo "</p></td>
            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Fax Number</strong>
                </td>
                <td width=\"4%\"></td>
                <td width=\"40%\"><p align=\"left\">";
        // line 436
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "fax"), "html", null, true);
        echo "</p></td>
            </tr>
        </table>
    </div>
    <div class=\"tab-pane\" id=\"education\">
        <br><br>
        <h3 align=\"center\">Educational Qualifications</h3>
        <br>
        <table class=\"table\">
            <thead>
            <tr>
                <th>Institute Name</th>
                <th>Degree</th>
                <th>Field</th>
                <th>Duration</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 454
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["education"]) ? $context["education"] : $this->getContext($context, "education")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 455
            echo "                <tr>
                    <td>";
            // line 456
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "institution"), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                        <span class=\"label label-success\">";
            // line 458
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "degree"), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"center\">";
            // line 460
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "field"), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 461
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duration"), "html", null, true);
            echo "</td>

                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 466
        echo "

            </tbody>
        </table>

    </div>
    <div class=\"tab-pane\" id=\"employment\">
        <br><br>
        <h3 align=\"center\">Employment History</h3>
        <br>
        <table class=\"table\">
            <thead>
            <tr>
                <th>Organization Name</th>
                <th>Organization Type</th>
                <th>Occupation</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 485
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employment"]) ? $context["employment"] : $this->getContext($context, "employment")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 486
            echo "                <tr>
                    <td>";
            // line 487
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organization"), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                        <span class=\"label label-success\">";
            // line 489
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organizationtype"), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"center\">";
            // line 491
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "occupation"), "html", null, true);
            echo "</td>


                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 497
        echo "

            </tbody>
        </table>

    </div>
    <div class=\"tab-pane center\" id=\"skills\">
        <br><br>
        <h3 align=\"center\">Skills </h3>
        <br>

        <strong>Primary Role</strong>

        <p align=\"center\">
            ";
        // line 511
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "primary"), "html", null, true);
        echo "
        </p>
        <br><br>
        <strong>Secondary Role</strong>

        <p align=\"center\">
            ";
        // line 517
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "secondary"), "html", null, true);
        echo "

        </p>
        <br><br>
        <strong>Interested Causes</strong>

        <p align=\"center\">
            ";
        // line 524
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "causes"));
        foreach ($context['_seq'] as $context["_key"] => $context["cause"]) {
            // line 525
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cause"]) ? $context["cause"] : $this->getContext($context, "cause")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cause'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 527
        echo "
        </p>
        <br>
        <strong>Languages</strong>

        <p align=\"center\">
            ";
        // line 533
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 534
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 536
        echo "        </p>
        <br>
    </div>

    <div class=\"tab-pane\" id=\"referees\">
        <br><br>
        <h3 align=\"center\">Referees </h3>
        <br><br>
        <table width = '100%'>
            <tr>
                <td width = '5%'></td>
                <td width = '40%'>
                <h6>Name</h6>
                <h3>";
        // line 549
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 0, array(), "array"), "name"), "html", null, true);
        echo "</h3>
                <br>
                <h6>Address</h6>
                <h3>";
        // line 552
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 0, array(), "array"), "address"), "html", null, true);
        echo "</h3>
                <br>
                <h6>Email</h6>
                <h3>";
        // line 555
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 0, array(), "array"), "email"), "html", null, true);
        echo "</h3>
                <br>
                <h6>Land Line</h6>
                <h3>";
        // line 558
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 0, array(), "array"), "contactnumber"), "html", null, true);
        echo "</h3>
                <br>
                <h6>Mobile</h6>
                <h3>";
        // line 561
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 0, array(), "array"), "mobilenumber"), "html", null, true);
        echo "</h3>
                <br>
                <h6>Status</h6>
                    ";
        // line 564
        if (($this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 1, array(), "array"), "approval") == (-1))) {
            // line 565
            echo "                        <span class=\"label label-important\">Rejected</span>
                    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 1, array(), "array"), "approval") == 1)) {
            // line 567
            echo "                        <span class=\"label label-success\">Approved</span>
                    ";
        } else {
            // line 569
            echo "                        <span class=\"label label-warning\">Pending</span>
                    ";
        }
        // line 571
        echo "
                </td>
                <td width = '10%'></td>
                <td width = '40%'>
                    <h6>Name</h6>
                    <h3>";
        // line 576
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 1, array(), "array"), "name"), "html", null, true);
        echo "</h3>
                    <br>
                    <h6>Address</h6>
                    <h3>";
        // line 579
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 1, array(), "array"), "address"), "html", null, true);
        echo "</h3>
                    <br>
                    <h6>Email</h6>
                    <h3>";
        // line 582
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 1, array(), "array"), "email"), "html", null, true);
        echo "</h3>
                    <br>
                    <h6>Land Line</h6>
                    <h3>";
        // line 585
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 1, array(), "array"), "contactnumber"), "html", null, true);
        echo "</h3>
                    <br>
                    <h6>Mobile</h6>
                    <h3>";
        // line 588
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 1, array(), "array"), "mobilenumber"), "html", null, true);
        echo "</h3>
                    <br>
                    <h6>Status</h6>
                    ";
        // line 591
        if (($this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 1, array(), "array"), "approval") == (-1))) {
            // line 592
            echo "                        <span class=\"label label-important\">Rejected</span>
                    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["referees"]) ? $context["referees"] : $this->getContext($context, "referees")), 1, array(), "array"), "approval") == 1)) {
            // line 594
            echo "                        <span class=\"label label-success\">Approved</span>
                    ";
        } else {
            // line 596
            echo "                        <span class=\"label label-warning\">Pending</span>
                    ";
        }
        // line 598
        echo "
                </td>
                <td width = '5%'></td>

            </tr>
        </table>
        <br><br>
    </div>


    </div>

    </div>
    </div>

    <div class=\"box span2\">
        <div class=\"box-header well\"><h2><i class=\"icon-calendar\"></i> Availability</h2></div>

        <div class=\"box-content\">

            ";
        // line 618
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), 'form_start');
        echo "


            <div class=\"control-group primary\">


                <strong>Volunteering Hours</strong><br>
                <table width=\"100%\">
                    <tr>
                        <br>
                        ";
        // line 628
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 629
            echo "                            <label>
                                ";
            // line 630
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("attr" => array("disabled" => "true", "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
                                ";
            // line 631
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array()), "html", null, true);
            echo "
                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        echo "

                    </tr>
                </table>


            </div>

            <div class=\"control-group\">

                <strong>Volunteering Days</strong><br>

                <table>
                    <tr>
                        <br>
                        ";
        // line 649
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 650
            echo "                            <label>
                                ";
            // line 651
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("attr" => array("disabled" => "true", "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
                                ";
            // line 652
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array()), "html", null, true);
            echo "
                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 655
        echo "                    </tr>

                    </tr>
                </table>


            </div>

            </form>



        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Profile:volunteer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 594,  871 => 592,  869 => 591,  863 => 588,  857 => 585,  851 => 582,  845 => 579,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  820 => 565,  818 => 564,  812 => 561,  806 => 558,  800 => 555,  794 => 552,  788 => 549,  773 => 536,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 511,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  629 => 456,  626 => 455,  622 => 454,  601 => 436,  589 => 427,  577 => 418,  565 => 409,  549 => 396,  528 => 378,  507 => 360,  486 => 342,  468 => 327,  451 => 313,  424 => 289,  408 => 276,  389 => 260,  367 => 241,  347 => 223,  343 => 221,  339 => 219,  337 => 218,  318 => 201,  314 => 199,  310 => 197,  308 => 196,  289 => 182,  260 => 155,  254 => 153,  250 => 151,  248 => 150,  239 => 143,  233 => 141,  229 => 139,  227 => 138,  213 => 126,  207 => 124,  203 => 122,  201 => 121,  193 => 115,  187 => 113,  183 => 111,  181 => 110,  165 => 97,  157 => 91,  151 => 89,  147 => 87,  145 => 86,  127 => 71,  118 => 64,  112 => 62,  108 => 60,  106 => 59,  91 => 47,  84 => 42,  77 => 39,  71 => 37,  69 => 36,  35 => 7,  31 => 5,  28 => 4,);
    }
}
