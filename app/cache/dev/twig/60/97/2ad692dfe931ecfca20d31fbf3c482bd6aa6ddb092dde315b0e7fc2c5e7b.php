<?php

/* RidwanSiteBundle:Home:volunteer.html.twig */
class __TwigTemplate_60972ad692dfe931ecfca20d31fbf3c482bd6aa6ddb092dde315b0e7fc2c5e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'dashboard' => array($this, 'block_dashboard'),
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
    public function block_dashboard($context, array $blocks = array())
    {
        // line 4
        echo "
     <div class=\"span2 main-menu-span\">
         <div class=\"well nav-collapse sidebar-nav\">
             <p align=\"center\">
                 ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 9
            echo "                     <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                 ";
        } else {
            // line 11
            echo "                     <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\"
                          style=\"border: 2px\">
                 ";
        }
        // line 14
        echo "                 <br><br><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</strong>
             </p>
             <ul class=\"nav nav-tabs nav-stacked main-menu\">
                 <li class=\"nav-header hidden-tablet\">Dashboard</li>
                 <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Projects</span></a>
                 </li>
                 <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> Opportunities</span></a>
                 </li>
                 <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-list-alt\"></i><span
                                 class=\"hidden-tablet\"> Resources</span></a></li>
             </ul>
         </div>
         <!--/.well -->
     </div><!--/span-->
 ";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "    <div class=\"box span6\">
    <div class=\"box-header well\">
        <h2><i class=\"icon-user\"></i> Your Profile</h2>
    </div>


    <div class=\"box-content \">

    <ul class=\"nav nav-tabs\" id=\"myTab\" style=\"border: none\">
        <li><a href=\"#personal\" style=\"background-color: white; border: none\"><h6>Personal Details</h6></a></li>
        <li><a href=\"#contact\" style=\"background-color: white; border: none\"><h6>Contact Details</h6></a></li>
        <li><a href=\"#education\" style=\"background-color: white; border: none\"><h6>Education</h6></a></li>
        <li><a href=\"#employment\" style=\"background-color: white; border: none\"><h6>Employment</h6></a></li>
        <li><a href=\"#skills\" style=\"background-color: white; border: none\"><h6>Skills</h6></a></li>
    </ul>

    <hr>

    <div id=\"myTabContent\" class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"personal\">
        <div class=\"pull-right\">
            <button class=\"btn btn-primary btn-mini\">update</button>
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
        // line 67
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
        // line 81
        if (($this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "Gender") == "M")) {
            // line 82
            echo "                            Male
                        ";
        } else {
            // line 84
            echo "                            Female
                        ";
        }
        // line 86
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
        // line 103
        if (($this->getAttribute((isset($context["personal"]) ? $context["personal"] : $this->getContext($context, "personal")), "CivilStatus") == 1)) {
            // line 104
            echo "                            Married
                        ";
        } else {
            // line 106
            echo "                            Single
                        ";
        }
        // line 108
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
        // line 126
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
        // line 145
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
        // line 161
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

                    </p>
                </td>


            </tr>
        </table>

    </div>
    <div class=\"tab-pane\" id=\"contact\">
        <div class=\"pull-right\">
            <button class=\"btn btn-primary btn-mini\">update</button>
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
        // line 201
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
        // line 215
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
        // line 230
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
        // line 248
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
        // line 266
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
        // line 284
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
                <td width=\"4%\">
                </td>
                <td width=\"40%\">
                    <p align=\"left\">
                        ";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Country"), "html", null, true);
        echo "

                    </p>
                </td>


            </tr>
        </table>
    </div>
    <div class=\"tab-pane\" id=\"education\">
        <div class=\"pull-right\">
            <button class=\"btn btn-primary btn-mini\">update</button>
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
        // line 329
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["education"]) ? $context["education"] : $this->getContext($context, "education")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 330
            echo "                <tr>
                    <td>";
            // line 331
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "institution"), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                        <span class=\"label label-success\">";
            // line 333
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "degree"), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"center\">";
            // line 335
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "field"), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duration"), "html", null, true);
            echo "</td>

                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "

            </tbody>
        </table>

    </div>
    <div class=\"tab-pane\" id=\"employment\">
        <div class=\"pull-right\">
            <button class=\"btn btn-primary btn-mini\">update</button>
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
        // line 364
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employment"]) ? $context["employment"] : $this->getContext($context, "employment")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 365
            echo "                <tr>
                    <td>";
            // line 366
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organization"), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                        <span class=\"label label-success\">";
            // line 368
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organizationtype"), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"center\">";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "occupation"), "html", null, true);
            echo "</td>


                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        echo "

            </tbody>
        </table>

    </div>
    <div class=\"tab-pane center\" id=\"skills\">
        <div class=\"pull-right\">
            <button class=\"btn btn-primary btn-mini\">update</button>
        </div>
        <br><br>

        <h3 align=\"center\">Skills </h3>
        <br>
        <strong>Languages</strong>

        <p align=\"center\">
            ";
        // line 393
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 394
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        echo "        </p>
        <br><br>

        <strong>Capabilities</strong>

        <p align=\"center\">
            ";
        // line 402
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "skills"));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 403
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 405
        echo "        </p>
        <br><br>
        <strong>Interested Causes</strong>

        <p align=\"center\">
            ";
        // line 410
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")), "causes"));
        foreach ($context['_seq'] as $context["_key"] => $context["cause"]) {
            // line 411
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cause"]) ? $context["cause"] : $this->getContext($context, "cause")), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cause'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
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
                <button class=\"btn btn-primary btn-mini\">update</button>
            </div>
            <br> 

            ";
        // line 433
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), 'form_start');
        echo "


            <div class=\"control-group primary\">


                <strong>Volunteering Hours</strong><br><br>
                <table>
                    <tr>
                        <td width=\"40%\">
                            ";
        // line 443
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 0, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 07:00 - 08:00<br>
                            ";
        // line 444
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 1, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 08:00 - 09:00<br>
                            ";
        // line 445
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 2, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 09:00 - 10:00<br>
                            ";
        // line 446
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 3, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 10:00 - 11:00<br>
                            ";
        // line 447
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 4, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 11:00 - 12:00<br>
                            ";
        // line 448
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 5, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 12:00 - 13:00<br>
                            ";
        // line 449
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 6, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 13:00 - 14:00<br>

                        </td>
                        <td width=\"20%\"></td>
                        <td width=\"40%\">
                            ";
        // line 454
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 7, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 14:00 - 15:00<br>
                            ";
        // line 455
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 8, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 15:00 - 16:00<br>
                            ";
        // line 456
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 9, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 16:00 - 17:00<br>
                            ";
        // line 457
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 10, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 17:00 -
                            18:00<br>
                            ";
        // line 459
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 11, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 18:00 -
                            19:00<br>
                            ";
        // line 461
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "preferredtime"), 12, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " 19:00 -
                            20:00<br>
                            ";
        // line 463
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
        // line 481
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 0, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Sunday<br>
                            ";
        // line 482
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 1, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Monday<br>
                            ";
        // line 483
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 2, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Tuesday<br>
                            ";
        // line 484
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 3, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Wednesday<br>
                        </td>
                        <td width=\"20%\"></td>
                        <td width=\"40%\">
                            ";
        // line 488
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 4, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Thursday<br>
                            ";
        // line 489
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "days"), 5, array(), "array"), 'widget', array("attr" => array("disabled" => "true")));
        echo " Friday<br>
                            ";
        // line 490
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
        return array (  727 => 490,  723 => 489,  719 => 488,  712 => 484,  708 => 483,  704 => 482,  700 => 481,  679 => 463,  674 => 461,  669 => 459,  664 => 457,  660 => 456,  656 => 455,  652 => 454,  644 => 449,  640 => 448,  636 => 447,  632 => 446,  628 => 445,  624 => 444,  620 => 443,  607 => 433,  585 => 413,  576 => 411,  572 => 410,  565 => 405,  556 => 403,  552 => 402,  544 => 396,  535 => 394,  531 => 393,  512 => 376,  500 => 370,  495 => 368,  490 => 366,  487 => 365,  483 => 364,  458 => 341,  447 => 336,  443 => 335,  438 => 333,  433 => 331,  430 => 330,  426 => 329,  396 => 302,  375 => 284,  354 => 266,  333 => 248,  312 => 230,  294 => 215,  277 => 201,  234 => 161,  215 => 145,  193 => 126,  173 => 108,  169 => 106,  165 => 104,  163 => 103,  144 => 86,  140 => 84,  136 => 82,  134 => 81,  115 => 67,  76 => 30,  73 => 29,  53 => 14,  46 => 11,  40 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
