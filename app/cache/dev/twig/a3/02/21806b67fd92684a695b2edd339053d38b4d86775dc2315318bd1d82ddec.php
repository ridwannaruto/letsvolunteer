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
        // line 35
        if ($this->getAttribute((isset($context["authProfile"]) ? $context["authProfile"] : $this->getContext($context, "authProfile")), "path")) {
            // line 36
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authProfile"]) ? $context["authProfile"] : $this->getContext($context, "authProfile")), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                    ";
        } else {
            // line 38
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\"
                             style=\"border: 2px\">
                    ";
        }
        // line 41
        echo "                    <br><br>
                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Volunteered Hours</h6>
                    <h1>";
        // line 46
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
        // line 58
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "intro") == null)) {
            // line 59
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 61
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "intro"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 63
        echo "

                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Volunteer Value </h6>

                    <h1>Rs. ";
        // line 70
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
        // line 85
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "reason") == null)) {
            // line 86
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 88
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "reason"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 90
        echo "
                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Volunteer Rating </h6>

                    <h3>";
        // line 96
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
        // line 109
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "experience") == null)) {
            // line 110
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 112
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "experience"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 114
        echo "

                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Driving License</h6>
                    ";
        // line 120
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "drivinglicense") == null)) {
            // line 121
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 123
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "drivinglicense"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 125
        echo "                </td>
                <td width=\"10%\"></td>
            </tr>


            <br>
            <tr>
                <td width=\"10%\"></td>

                <td width=\"40%\">

                    <h6>Health</h6>
                    ";
        // line 137
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "health") == null)) {
            // line 138
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 140
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "health"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 142
        echo "
                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">


                    <h6>Arrested</h6>
                    ";
        // line 149
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "arrested") == null)) {
            // line 150
            echo "                        information not provided by the volunteer
                    ";
        } else {
            // line 152
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "arrested"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 154
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
        // line 181
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
        // line 195
        if (($this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "Gender") == "M")) {
            // line 196
            echo "                            Male
                        ";
        } else {
            // line 198
            echo "                            Female
                        ";
        }
        // line 200
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
        // line 217
        if (($this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "CivilStatus") == 1)) {
            // line 218
            echo "                            Married
                        ";
        } else {
            // line 220
            echo "                            Single
                        ";
        }
        // line 222
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
        // line 240
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
        // line 259
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
        // line 275
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
        // line 288
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
        // line 312
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
        // line 326
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
        // line 341
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
        // line 359
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
        // line 377
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
        // line 395
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
        // line 408
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
        // line 417
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
        // line 426
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
        // line 435
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
        // line 453
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["education"]) ? $context["education"] : $this->getContext($context, "education")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 454
            echo "                <tr>
                    <td>";
            // line 455
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "institution"), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                        <span class=\"label label-success\">";
            // line 457
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "degree"), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"center\">";
            // line 459
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "field"), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 460
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duration"), "html", null, true);
            echo "</td>

                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
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
        // line 484
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employment"]) ? $context["employment"] : $this->getContext($context, "employment")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 485
            echo "                <tr>
                    <td>";
            // line 486
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organization"), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                        <span class=\"label label-success\">";
            // line 488
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organizationtype"), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"center\">";
            // line 490
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "occupation"), "html", null, true);
            echo "</td>


                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 496
        echo "

            </tbody>
        </table>

    </div>
    <div class=\"tab-pane center\" id=\"skills\">
        <br><br>
        <h3 align=\"center\">Skills </h3>
        <br>
        <strong>Languages</strong>

        <p align=\"center\">
            ";
        // line 509
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 510
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 512
        echo "        </p>
        <br><br>

        <strong>Capabilities</strong>

        <p align=\"center\">
            ";
        // line 518
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "skills"));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 519
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 521
        echo "        </p>
        <br><br>
        <strong>Interested Causes</strong>

        <p align=\"center\">
            ";
        // line 526
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "causes"));
        foreach ($context['_seq'] as $context["_key"] => $context["cause"]) {
            // line 527
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cause"]) ? $context["cause"] : $this->getContext($context, "cause")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cause'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 529
        echo "
        </p>

    </div>


    </div>

    </div>
    </div>

    <div class=\"box span2\">
        <div class=\"box-header well\"><h2><i class=\"icon-calendar\"></i>Availability</h2></div>

        <div class=\"box-content\">
            ";
        // line 544
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), 'form_start');
        echo "


            <div class=\"control-group primary\">


                <strong>Volunteering Hours</strong><br>
                <table width=\"100%\">
                    <tr>

                        ";
        // line 554
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 0, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 07:00 - 08:00<br>
                        ";
        // line 555
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 1, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 08:00 - 09:00<br>
                        ";
        // line 556
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 2, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 09:00 - 10:00<br>
                        ";
        // line 557
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 3, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 10:00 - 11:00<br>
                        ";
        // line 558
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 4, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 11:00 - 12:00<br>
                        ";
        // line 559
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 5, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 12:00 - 13:00<br>
                        ";
        // line 560
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 6, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 13:00 - 14:00<br>


                        ";
        // line 563
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 7, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 14:00 - 15:00<br>
                        ";
        // line 564
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 8, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 15:00 - 16:00<br>
                        ";
        // line 565
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 9, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 16:00 - 17:00<br>
                        ";
        // line 566
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 10, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 17:00 -
                        18:00<br>
                        ";
        // line 568
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 11, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 18:00 -
                        19:00<br>
                        ";
        // line 570
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 12, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 19:00 -
                        20:00<br>
                        ";
        // line 572
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"), 13, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 20:00 -
                        21:00<br>


                    </tr>
                </table>


            </div>

            <div class=\"control-group\">

                <strong>Volunteering Days</strong><br>

                <table>
                    <tr>

                        ";
        // line 589
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 0, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Sunday<br>
                        ";
        // line 590
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 1, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Monday<br>
                        ";
        // line 591
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 2, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Tuesday<br>
                        ";
        // line 592
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 3, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Wednesday<br>

                        ";
        // line 594
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 4, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Thursday<br>
                        ";
        // line 595
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 5, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Friday<br>
                        ";
        // line 596
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 6, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Saturday<br>


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
        return array (  904 => 596,  900 => 595,  896 => 594,  891 => 592,  887 => 591,  883 => 590,  879 => 589,  859 => 572,  854 => 570,  849 => 568,  844 => 566,  840 => 565,  836 => 564,  832 => 563,  826 => 560,  822 => 559,  818 => 558,  814 => 557,  810 => 556,  806 => 555,  802 => 554,  789 => 544,  772 => 529,  763 => 527,  759 => 526,  752 => 521,  743 => 519,  739 => 518,  731 => 512,  722 => 510,  718 => 509,  703 => 496,  691 => 490,  686 => 488,  681 => 486,  678 => 485,  674 => 484,  653 => 465,  642 => 460,  638 => 459,  633 => 457,  628 => 455,  625 => 454,  621 => 453,  600 => 435,  588 => 426,  576 => 417,  564 => 408,  548 => 395,  527 => 377,  506 => 359,  485 => 341,  467 => 326,  450 => 312,  423 => 288,  407 => 275,  388 => 259,  366 => 240,  346 => 222,  342 => 220,  338 => 218,  336 => 217,  317 => 200,  313 => 198,  309 => 196,  307 => 195,  288 => 181,  259 => 154,  253 => 152,  249 => 150,  247 => 149,  238 => 142,  232 => 140,  228 => 138,  226 => 137,  212 => 125,  206 => 123,  202 => 121,  200 => 120,  192 => 114,  186 => 112,  182 => 110,  180 => 109,  164 => 96,  156 => 90,  150 => 88,  146 => 86,  144 => 85,  126 => 70,  117 => 63,  111 => 61,  107 => 59,  105 => 58,  90 => 46,  83 => 41,  76 => 38,  70 => 36,  68 => 35,  35 => 7,  31 => 5,  28 => 4,);
    }
}
