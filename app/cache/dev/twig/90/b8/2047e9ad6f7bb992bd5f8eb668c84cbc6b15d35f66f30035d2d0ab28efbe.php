<?php

/* RidwanSiteBundle:Profile:organization.html.twig */
class __TwigTemplate_90b82047e9ad6f7bb992bd5f8eb668c84cbc6b15d35f66f30035d2d0ab28efbe extends Twig_Template
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
        <h3>General Information</h3>
        <hr>

        <div style=\"margin-left: 10%\">
        <h6>Organization Logo</h6>
            ";
        // line 11
        if ($this->getAttribute((isset($context["authProfile"]) ? $context["authProfile"] : $this->getContext($context, "authProfile")), "path")) {
            // line 12
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authProfile"]) ? $context["authProfile"] : $this->getContext($context, "authProfile")), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
            ";
        } else {
            // line 14
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
            ";
        }
        // line 16
        echo "            <br><br>
        <h6>Organization Name</h6>
        <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "name"), "html", null, true);
        echo "</h3><br>
            <h6>Organization Type</h6>
            <h3>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "type"), "html", null, true);
        echo "</h3><br>
            <h6>Location</h6>
            <h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "branch"), "html", null, true);
        echo "</h3><br>

            </div>

    </div>

</div>
    <div class=\"box span5\">
        <div class=\"box-content\">

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
        // line 45
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
        // line 57
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
        // line 70
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
        // line 84
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
        // line 97
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
        // line 110
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
        // line 124
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
        // line 135
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
        // line 144
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
        // line 153
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
        // line 162
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
        return "RidwanSiteBundle:Profile:organization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 162,  229 => 153,  217 => 144,  205 => 135,  191 => 124,  174 => 110,  158 => 97,  142 => 84,  125 => 70,  109 => 57,  94 => 45,  68 => 22,  63 => 20,  58 => 18,  54 => 16,  48 => 14,  42 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
