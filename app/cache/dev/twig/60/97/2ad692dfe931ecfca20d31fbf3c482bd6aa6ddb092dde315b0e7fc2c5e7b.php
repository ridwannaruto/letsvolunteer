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
        echo "    <div class=\"box span6\">
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
        echo "\"> <button class=\"btn btn-group btn-small\">update info </button></a>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ridwan_profile_photo");
        echo "\"> <button class=\"btn btn-group btn-small\">update profile picture</button></a>
        </div>
        <br><br>

        <h3 align=\"center\">Volunteer Profile</h3>
        <br>
        <table>
            <tr>
            <td width=\"10%\"></td>

                <td width=\"40%\">
                    <h6>Self Introduction</h6>
                    ";
        // line 40
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "intro") == null)) {
            // line 41
            echo "                        not listed
                    ";
        } else {
            // line 43
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "intro"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 45
        echo "
                    <h6>Reason to Volunteer</h6>
                    ";
        // line 47
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "reason") == null)) {
            // line 48
            echo "                        not listed
                    ";
        } else {
            // line 50
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "reason"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 52
        echo "

                    <h6>Previous Experience</h6>
                    ";
        // line 55
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "experience") == null)) {
            // line 56
            echo "                        not listed
                    ";
        } else {
            // line 58
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "experience"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 60
        echo "
                    <h6>Health</h6>
                    ";
        // line 62
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "health") == null)) {
            // line 63
            echo "                        not listed
                    ";
        } else {
            // line 65
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "health"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 67
        echo "
                    <h6>Driving License</h6>
                    ";
        // line 69
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "drivinglicense") == null)) {
            // line 70
            echo "                        not listed
                    ";
        } else {
            // line 72
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "drivinglicense"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 74
        echo "
                    <h6>Arrested</h6>
                    ";
        // line 76
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "arrested") == null)) {
            // line 77
            echo "                        not listed
                    ";
        } else {
            // line 79
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "arrested"), "html", null, true);
            echo "</h3><br>
                    ";
        }
        // line 81
        echo "
                </td>
                <td width=\"10%\"></td>
                <td width=\"30%\">
                    <h6>Profile Picture</h6>
                    ";
        // line 86
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 87
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                    ";
        } else {
            // line 89
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                    ";
        }
        // line 91
        echo "                    <br><br>
                    <h6>Volunteered Hours</h6>
                    <h3>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "hours"), "html", null, true);
        echo " Hrs</h3> <br>


                    <h6>Volunteer Value </h6>
                    <h3>Rs. ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "value"), "html", null, true);
        echo ".00</h3><br>

                    <h6>Volunteer Rating </h6>
                    <h3>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "aggregatedRating"), "html", null, true);
        echo "</h3><br>

                </td>
                <td width=\"10%\"></td>




        </tr>

        </table>


    </div>
    <div class=\"tab-pane active\" id=\"personal\">
        <div class=\"pull-right\">
            <button class=\"btn btn-group btn-small\">update</button>
        </div>
        <br><br>

        <h3 align=\"center\">Personal Information</h3>
        <br>
        <table>
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
        // line 132
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
        // line 146
        if (($this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "Gender") == "M")) {
            // line 147
            echo "                            Male
                        ";
        } else {
            // line 149
            echo "                            Female
                        ";
        }
        // line 151
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
        // line 168
        if (($this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "CivilStatus") == 1)) {
            // line 169
            echo "                            Married
                        ";
        } else {
            // line 171
            echo "                            Single
                        ";
        }
        // line 173
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
        // line 191
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
        // line 210
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
        // line 226
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
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "category"), "html", null, true);
        echo "
                    </p>
                </td>


            </tr>
        </table>

    </div>
    <div class=\"tab-pane\" id=\"contact\">
        <div class=\"pull-right\">
            <button class=\"btn btn-group btn-small\">update</button>
        </div>
        <br><br>

        <h3 align=\"center\">Contact Information</h3>
        <br>
        <table>
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
        // line 266
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
        // line 280
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
        // line 295
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
        // line 313
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
        // line 331
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
        // line 349
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
                <td width=\"40%\"> <p align=\"left\">";
        // line 362
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Country"), "html", null, true);
        echo "</p> </td>
            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Mobile Number</strong>
                </td>
                <td width=\"4%\"></td>
                <td width=\"40%\"> <p align=\"left\">";
        // line 371
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mobile"), "html", null, true);
        echo "</p> </td>
            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Phone Number</strong>
                </td>
                <td width=\"4%\"></td>
                <td width=\"40%\"> <p align=\"left\">";
        // line 380
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone"), "html", null, true);
        echo "</p> </td>
            </tr>

            <tr>
                <td width=\"16%\"></td>
                <td width=\"40%\">
                    <strong>Fax Number</strong>
                </td>
                <td width=\"4%\"></td>
                <td width=\"40%\"> <p align=\"left\">";
        // line 389
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "fax"), "html", null, true);
        echo "</p> </td>
            </tr>
        </table>
    </div>
    <div class=\"tab-pane\" id=\"education\">
        <div class=\"pull-right\">
            <button class=\"btn btn-group btn-small\">update</button>
        </div>
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
        // line 411
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["education"]) ? $context["education"] : $this->getContext($context, "education")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 412
            echo "                <tr>
                    <td>";
            // line 413
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "institution"), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                        <span class=\"label label-success\">";
            // line 415
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "degree"), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"center\">";
            // line 417
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "field"), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 418
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duration"), "html", null, true);
            echo "</td>

                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "

            </tbody>
        </table>

    </div>
    <div class=\"tab-pane\" id=\"employment\">
        <div class=\"pull-right\">
            <button class=\"btn btn-group btn-small\">update</button>
        </div>
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
        // line 446
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employment"]) ? $context["employment"] : $this->getContext($context, "employment")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 447
            echo "                <tr>
                    <td>";
            // line 448
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organization"), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                        <span class=\"label label-success\">";
            // line 450
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organizationtype"), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"center\">";
            // line 452
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "occupation"), "html", null, true);
            echo "</td>


                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "

            </tbody>
        </table>

    </div>
    <div class=\"tab-pane center\" id=\"skills\">
        <div class=\"pull-right\">
            <button class=\"btn btn-group btn-small\">update</button>
        </div>
        <br><br>

        <h3 align=\"center\">Skills </h3>
        <br>
        <strong>Languages</strong>

        <p align=\"center\">
            ";
        // line 475
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 476
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 478
        echo "        </p>
        <br><br>

        <strong>Capabilities</strong>

        <p align=\"center\">
            ";
        // line 484
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "skills"));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 485
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "        </p>
        <br><br>
        <strong>Interested Causes</strong>

        <p align=\"center\">
            ";
        // line 492
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "causes"));
        foreach ($context['_seq'] as $context["_key"] => $context["cause"]) {
            // line 493
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cause"]) ? $context["cause"] : $this->getContext($context, "cause")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cause'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 495
        echo "
        </p>

    </div>


    </div>

    </div>
    </div>

    <div class=\"box span4\">
        <div class=\"box-header well\"><h2><i class=\"icon-calendar\"></i> Your Availability</h2></div>

        <div class=\"box-content\">
            <div class=\"pull-right\">
                <button class=\"btn btn-group btn-small\">update</button>
            </div>
            <br>

            ";
        // line 515
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), 'form_start');
        echo "


            <div class=\"control-group primary\">


                <strong>Volunteering Hours</strong><br><br>
                <table width=\"100%\">
                    <tr>
                        <td width=\"40%\">
                            ";
        // line 525
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 0, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 07:00 - 08:00<br>
                            ";
        // line 526
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 1, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 08:00 - 09:00<br>
                            ";
        // line 527
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 2, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 09:00 - 10:00<br>
                            ";
        // line 528
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 3, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 10:00 - 11:00<br>
                            ";
        // line 529
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 4, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 11:00 - 12:00<br>
                            ";
        // line 530
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 5, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 12:00 - 13:00<br>
                            ";
        // line 531
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 6, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 13:00 - 14:00<br>

                        </td>
                        <td width=\"20%\"></td>
                        <td width=\"40%\">
                            ";
        // line 536
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 7, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 14:00 - 15:00<br>
                            ";
        // line 537
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 8, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 15:00 - 16:00<br>
                            ";
        // line 538
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 9, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 16:00 - 17:00<br>
                            ";
        // line 539
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 10, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 17:00 -
                            18:00<br>
                            ";
        // line 541
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 11, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 18:00 -
                            19:00<br>
                            ";
        // line 543
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 12, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 19:00 -
                            20:00<br>
                            ";
        // line 545
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 13, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 20:00 -
                            21:00<br>


                        </td>
                    </tr>
                </table>


            </div>

            <div class=\"control-group\">

                <strong>Volunteering Days</strong><br><br>

                <table>
                    <tr>
                        <td width=\"40%\">
                            ";
        // line 563
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 0, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Sunday<br>
                            ";
        // line 564
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 1, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Monday<br>
                            ";
        // line 565
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 2, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Tuesday<br>
                            ";
        // line 566
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 3, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Wednesday<br>
                        </td>
                        <td width=\"20%\"></td>
                        <td width=\"40%\">
                            ";
        // line 570
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 4, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Thursday<br>
                            ";
        // line 571
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 5, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Friday<br>
                            ";
        // line 572
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 6, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Saturday<br>

                        </td>
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
        return "RidwanSiteBundle:Home:volunteer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  881 => 572,  877 => 571,  873 => 570,  866 => 566,  862 => 565,  858 => 564,  854 => 563,  833 => 545,  828 => 543,  823 => 541,  818 => 539,  814 => 538,  810 => 537,  806 => 536,  798 => 531,  794 => 530,  790 => 529,  786 => 528,  782 => 527,  778 => 526,  774 => 525,  761 => 515,  739 => 495,  730 => 493,  726 => 492,  719 => 487,  710 => 485,  706 => 484,  698 => 478,  689 => 476,  685 => 475,  666 => 458,  654 => 452,  649 => 450,  644 => 448,  641 => 447,  637 => 446,  612 => 423,  601 => 418,  597 => 417,  592 => 415,  587 => 413,  584 => 412,  580 => 411,  555 => 389,  543 => 380,  531 => 371,  519 => 362,  503 => 349,  482 => 331,  461 => 313,  440 => 295,  422 => 280,  405 => 266,  375 => 239,  359 => 226,  340 => 210,  318 => 191,  298 => 173,  294 => 171,  290 => 169,  288 => 168,  269 => 151,  265 => 149,  261 => 147,  259 => 146,  240 => 132,  205 => 100,  199 => 97,  192 => 93,  188 => 91,  182 => 89,  176 => 87,  174 => 86,  167 => 81,  161 => 79,  157 => 77,  155 => 76,  151 => 74,  145 => 72,  141 => 70,  139 => 69,  135 => 67,  129 => 65,  125 => 63,  123 => 62,  119 => 60,  113 => 58,  109 => 56,  107 => 55,  102 => 52,  96 => 50,  92 => 48,  90 => 47,  86 => 45,  80 => 43,  76 => 41,  74 => 40,  59 => 28,  55 => 27,  31 => 5,  28 => 4,);
    }
}
