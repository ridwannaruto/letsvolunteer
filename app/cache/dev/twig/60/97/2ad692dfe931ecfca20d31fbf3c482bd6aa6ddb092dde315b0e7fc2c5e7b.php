<?php

/* RidwanSiteBundle:Home:volunteer.html.twig */
class __TwigTemplate_60972ad692dfe931ecfca20d31fbf3c482bd6aa6ddb092dde315b0e7fc2c5e7b extends Twig_Template
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
        <h2><i class=\"icon-user\"></i> Your Profile</h2>
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
        <div class=\"pull-right\">
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_profile_edit", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
        echo "\">
                <button class=\"btn btn-group btn-small\">update info</button>
            </a>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ridwan_profile_photo");
        echo "\">
                <button class=\"btn btn-group btn-small\">update profile picture</button>
            </a>
        </div>
        <br><br>

        <h3 align=\"center\">Volunteer Profile</h3>
        <br>
        <table width=\"100%\">
            <tr>
                <td width=\"10%\"></td>

                <td width=\"40%\">
                    <h6>Profile Picture</h6>
                    ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 45
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                    ";
        } else {
            // line 47
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\"
                             style=\"border: 2px\">
                    ";
        }
        // line 50
        echo "                    <br><br>
                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Volunteered Hours</h6>
                    <h1>";
        // line 55
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
        // line 67
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "intro") == null)) {
            // line 68
            echo "                        please update your profile information
                    ";
        } else {
            // line 70
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "intro"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 72
        echo "

                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Volunteer Value </h6>

                    <h1>Rs. ";
        // line 79
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
        // line 94
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "reason") == null)) {
            // line 95
            echo "                        please update your profile information
                    ";
        } else {
            // line 97
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "reason"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 99
        echo "
                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Volunteer Rating </h6>

                    <h3>";
        // line 105
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
        // line 118
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "experience") == null)) {
            // line 119
            echo "                        please update your profile information
                    ";
        } else {
            // line 121
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "experience"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 123
        echo "

                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Driving License</h6>
                    ";
        // line 129
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "drivinglicense") == null)) {
            // line 130
            echo "                        please update your profile information
                    ";
        } else {
            // line 132
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "drivinglicense"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 134
        echo "                </td>
                <td width=\"10%\"></td>
            </tr>


            <br>
            <tr>
                <td width=\"10%\"></td>

                <td width=\"40%\">

                    <h6>Health</h6>
                    ";
        // line 146
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "health") == null)) {
            // line 147
            echo "                        please update your profile information
                    ";
        } else {
            // line 149
            echo "                        <p align=\"justify\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "health"), "html", null, true);
            echo "</p><br>
                    ";
        }
        // line 151
        echo "
                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">


                    <h6>Arrested</h6>
                    ";
        // line 158
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "arrested") == null)) {
            // line 159
            echo "                        please update your profile information
                    ";
        } else {
            // line 161
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "arrested"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 163
        echo "
                </td>
                <td width=\"10%\"></td>


            </tr>


        </table>


    </div>
    <div class=\"tab-pane active\" id=\"personal\">
        <div class=\"pull-right\">
            <a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_volunteerpersonal_edit", array("id" => $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "id"))), "html", null, true);
        echo "\">
                <button class=\"btn btn-group btn-small\">update</button>
            </a>
        </div>
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
        // line 195
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
        // line 209
        if (($this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "Gender") == "M")) {
            // line 210
            echo "                            Male
                        ";
        } else {
            // line 212
            echo "                            Female
                        ";
        }
        // line 214
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
        // line 231
        if (($this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "CivilStatus") == 1)) {
            // line 232
            echo "                            Married
                        ";
        } else {
            // line 234
            echo "                            Single
                        ";
        }
        // line 236
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
        // line 254
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
        // line 273
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
        // line 289
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
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "category"), "html", null, true);
        echo "
                    </p>
                </td>


            </tr>
        </table>

    </div>
    <div class=\"tab-pane\" id=\"contact\">
        <div class=\"pull-right\">
            <a href=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_volunteercontact_edit", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id"))), "html", null, true);
        echo "\">
                <button class=\"btn btn-group btn-small\">update</button>
            </a>
        </div>
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
        // line 331
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
        // line 345
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
        // line 360
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
        // line 378
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
        // line 396
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
        // line 414
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
        // line 427
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
        // line 436
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
        // line 445
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
        // line 454
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
        // line 473
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["education"]) ? $context["education"] : $this->getContext($context, "education")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 474
            echo "                <tr>
                    <td>";
            // line 475
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "institution"), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                        <span class=\"label label-success\">";
            // line 477
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "degree"), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"center\">";
            // line 479
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "field"), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 480
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duration"), "html", null, true);
            echo "</td>

                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 485
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
        // line 506
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employment"]) ? $context["employment"] : $this->getContext($context, "employment")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 507
            echo "                <tr>
                    <td>";
            // line 508
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organization"), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                        <span class=\"label label-success\">";
            // line 510
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organizationtype"), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"center\">";
            // line 512
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "occupation"), "html", null, true);
            echo "</td>


                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
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
        // line 534
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "primary"), "html", null, true);
        echo "
        </p>
        <br><br>
        <strong>Secondary Role</strong>

        <p align=\"center\">
           ";
        // line 540
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "secondary"), "html", null, true);
        echo "

        </p>
        <br><br>
        <strong>Interested Causes</strong>

        <p align=\"center\">
            ";
        // line 547
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "causes"));
        foreach ($context['_seq'] as $context["_key"] => $context["cause"]) {
            // line 548
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cause"]) ? $context["cause"] : $this->getContext($context, "cause")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cause'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 550
        echo "
        </p>
        <br>
        <strong>Languages</strong>

        <p align=\"center\">
            ";
        // line 556
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 557
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 559
        echo "        </p>
        <br>

    </div>


    </div>

    </div>
    </div>

    <div class=\"box span2\">
        <div class=\"box-header well\"><h2><i class=\"icon-calendar\"></i> Your Availability</h2></div>

        <div class=\"box-content\">

            ";
        // line 575
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), 'form_start');
        echo "


            <div class=\"control-group primary\">


                <strong>Volunteering Hours</strong><br>
                <table width=\"100%\">
                    <tr>
                        <br>
                        ";
        // line 585
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "time"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 586
            echo "                            <label>
                                ";
            // line 587
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("attr" => array("disabled" => "true", "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
                                ";
            // line 588
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array()), "html", null, true);
            echo "
                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 591
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
        // line 606
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 607
            echo "                            <label>
                                ";
            // line 608
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("attr" => array("disabled" => "true", "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
                                ";
            // line 609
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array()), "html", null, true);
            echo "
                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 612
        echo "                    </tr>

                    </tr>
                </table>


            </div>

            </form>
            <div class=\"center\">
                <a href=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_availability_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "user"), "id"))), "html", null, true);
        echo "\">
                    <button class=\"btn btn-group btn-small\">update</button>
                </a>
            </div>


        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Home:volunteer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  903 => 622,  891 => 612,  882 => 609,  878 => 608,  875 => 607,  871 => 606,  854 => 591,  845 => 588,  841 => 587,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  794 => 557,  790 => 556,  782 => 550,  773 => 548,  769 => 547,  759 => 540,  750 => 534,  732 => 518,  720 => 512,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  626 => 454,  614 => 445,  602 => 436,  590 => 427,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 302,  425 => 289,  406 => 273,  384 => 254,  364 => 236,  360 => 234,  356 => 232,  354 => 231,  335 => 214,  331 => 212,  327 => 210,  325 => 209,  306 => 195,  285 => 177,  269 => 163,  263 => 161,  259 => 159,  257 => 158,  248 => 151,  242 => 149,  238 => 147,  236 => 146,  222 => 134,  216 => 132,  212 => 130,  210 => 129,  202 => 123,  196 => 121,  192 => 119,  190 => 118,  174 => 105,  166 => 99,  160 => 97,  156 => 95,  154 => 94,  136 => 79,  127 => 72,  121 => 70,  117 => 68,  115 => 67,  100 => 55,  93 => 50,  86 => 47,  80 => 45,  78 => 44,  61 => 30,  55 => 27,  31 => 5,  28 => 4,);
    }
}
