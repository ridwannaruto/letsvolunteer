<?php

/* RidwanSiteBundle:Home:organization.html.twig */
class __TwigTemplate_263ebc628911a0e644ace4a52cfef27ef2758cbfb0b66177a3858b1f4f23b9a7 extends Twig_Template
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
        echo "<div class=\"box span5\">
    <div class=\"box-content\">
        <div class=\"pull-right\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_organization_edit", array("id" => $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "id"))), "html", null, true);
        echo "\"> <button class=\"btn btn-group btn-small\">update info</button></a>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("ridwan_profile_photo");
        echo "\"> <button class=\"btn btn-group btn-small\">update logo</button></a>
        </div>
        <h3>General Information</h3>
        <hr>

        <div style=\"margin-left: 10%\">
        <h6>Organization Logo</h6>
            ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 16
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
            ";
        } else {
            // line 18
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
            ";
        }
        // line 20
        echo "            <br><br>
        <h6>Organization Name</h6>
        <h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "name"), "html", null, true);
        echo "</h3><br>
            <h6>Organization Type</h6>
            <h3>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "type"), "html", null, true);
        echo "</h3><br>
            <h6>Location</h6>
            <h3>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "branch"), "html", null, true);
        echo "</h3><br>

            </div>

    </div>

</div>
    <div class=\"box span5\">
        <div class=\"box-content\">

            <div class=\"pull-right\">
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_organizationcontact_edit", array("id" => $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "id"))), "html", null, true);
        echo "\"> <button class=\"btn btn-group btn-small\">update info</button></a>
            </div>
            <h3>Contact Information</h3>
            <hr>
            <br>

            <table>
                <tr>
                    <td width=\"16%\"></td>
                    <td width=\"40%\">
                        <strong>Street Number</strong>
                    </td>
                    <td width=\"4%\"></td>
                    <td width=\"40%\">
                        <p align=\"left\">
                            ";
        // line 52
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
                    <td width=\"4%\"></td>
                    <td width=\"40%\">
                        <p align=\"left\">
                            ";
        // line 64
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
                    <td width=\"4%\"></td>
                    <td width=\"40%\">
                        <p align=\"left\">
                            ";
        // line 77
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
                    <td width=\"4%\"> </td>
                    <td width=\"40%\">
                        <p align=\"left\">
                            ";
        // line 91
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
                    <td width=\"4%\"> </td>
                    <td width=\"40%\">
                        <p align=\"left\">
                            ";
        // line 104
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
                    <td width=\"4%\"></td>
                    <td width=\"40%\">
                        <p align=\"left\">
                            ";
        // line 117
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
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Country"), "html", null, true);
        echo "
                        </p>
                    </td>
                </tr>

                <tr>
                    <td width=\"16%\"></td>
                    <td width=\"40%\">
                        <strong>Phone Number</strong>
                    </td>
                    <td width=\"4%\"></td>
                    <td width=\"40%\"> <p align=\"left\">";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "Phone"), "html", null, true);
        echo "</p> </td>
                </tr>

                <tr>
                    <td width=\"16%\"></td>
                    <td width=\"40%\">
                        <strong>Fax Number</strong>
                    </td>
                    <td width=\"4%\"></td>
                    <td width=\"40%\"> <p align=\"left\">";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "fax"), "html", null, true);
        echo "</p> </td>
                </tr>

                <tr>
                    <td width=\"16%\"></td>
                    <td width=\"40%\">
                        <strong>Email</strong>
                    </td>
                    <td width=\"4%\"></td>
                    <td width=\"40%\"> <p align=\"left\">";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email"), "html", null, true);
        echo "</p> </td>
                </tr>

                <tr>
                    <td width=\"16%\"></td>
                    <td width=\"40%\">
                        <strong>Website</strong>
                    </td>
                    <td width=\"4%\"></td>
                    <td width=\"40%\"> <p align=\"left\">";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "website"), "html", null, true);
        echo "</p> </td>
                </tr>
            </table>
            <br><br>

        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Home:organization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 169,  245 => 160,  233 => 151,  221 => 142,  207 => 131,  190 => 117,  174 => 104,  158 => 91,  141 => 77,  125 => 64,  110 => 52,  92 => 37,  78 => 26,  73 => 24,  68 => 22,  64 => 20,  58 => 18,  52 => 16,  50 => 15,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
