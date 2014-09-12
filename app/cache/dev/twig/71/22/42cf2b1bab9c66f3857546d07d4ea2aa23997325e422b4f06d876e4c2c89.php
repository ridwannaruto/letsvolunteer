<?php

/* RidwanSiteBundle:Home:NVS.html.twig */
class __TwigTemplate_712242cf2b1bab9c66f3857546d07d4ea2aa23997325e422b4f06d876e4c2c89 extends Twig_Template
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

    <div class=\"box span6\">
        <div class=\"box-content\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ridwan_profile_photo");
        echo "\"> <button class=\"btn btn-group btn-small\">update profile picture</button></a>
            </div>

            <h3>Profile Information</h3>
            <hr>

            <div style=\"margin-left: 10%\">

                ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 19
            echo "                    <img class = \"pull-right\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                ";
        } else {
            // line 21
            echo "                    <img class = \"pull-right\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                ";
        }
        // line 23
        echo "

                <h3>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "</h3><br>
                <h6>Type</h6>
                ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"), 0, array(), "array"), "html", null, true);
        echo "
                <h6>Email</h6>
                ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "email"), "html", null, true);
        echo "
                <h6>Last Login</h6>
                ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "lastlogin"), "Y-m-d H:i:s"), "html", null, true);
        echo "


                <br><br>


            </div>

        </div>

    </div>

    <div class=\"box span6\">
        <div class=\"box-content\">

            <h3>System Overview</h3>
            <hr>

            <table width = '100%'>
                <tr>
                    <td width=\"2%\"></td>
                    <td width=\"30%\">
                        <ul class=\"dashboard-list\">
                            <h6>Opportunities</h6>
                            <li> <span class=\"green\">92</span> Completed</li>
                            <li> <span class=\"red\">15</span> Rejected </li>
                            <li> <span class=\"yellow\">45</span> On going</li><br>
                             <span class=\"blue\">36</span>  <strong>Total</strong>
                        </ul>
                    </td>
                    <td width=\"3%\"></td>
                    <td width=\"30%\">

                        <ul class=\"dashboard-list\">
                            <h6>Volunteers</h6>
                            <li> <span class=\"green\">92</span> Active</li>
                            <li> <span class=\"red\">15</span> Rejected</li>
                            <li> <span class=\"yellow\">45</span> Pending</li><br>
                            <span class=\"blue\">36</span>  <strong>Total</strong>

                        </ul>

                    </td>
                    <td width=\"3%\"></td>

                    <td width=\"30%\">

                        <ul class=\"dashboard-list\">
                            <h6>Organizations</h6>
                            <li> <span class=\"green\">92</span> Active</li>
                            <li> <span class=\"red\">15</span> Rejected</li>
                            <li> <span class=\"yellow\">45</span> Pending</li><br>
                            <span class=\"blue\">36</span>  <strong>Total</strong>

                        </ul>

                    </td>
                    <td width=\"2%\"></td>
                </tr>
            </table>


        </div>

    </div>
</div>

    <div class=\"row-fluid\">

        <div class=\"box span6\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-user\"></i> Volunteers Approval</h2>
                <div class=\"box-icon\">
                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>
                </div>
            </div>
            <div class=\"box-content\">
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 111
            echo "                            <li>

                                <div class =\"pull-right\">
                                    ";
            // line 114
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 1)) {
                // line 115
                echo "                                        <span class=\"label label-warning\">Pending Approval</span>   <br><br>
                                        <button url=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_approve_volunteer", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-complete\"><i class=\"icon-ok\"></i></button>
                                        <button url=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_reject_volunteer", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-delete\"><i class=\"icon-remove\"></i></button>
                                    ";
            } else {
                // line 119
                echo "                                        <span class=\"label label-success\">Activated</span>   <br><br>
                                    ";
            }
            // line 121
            echo "                                </div>
                                <a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_profile_volunteer", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
            echo "\">

                                    <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\">

                                    <strong>Name:</strong> ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastname"), "html", null, true);
            echo "</a>
                                </a><br>
                                <strong>Nationality:</strong> ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "nationality"), "html", null, true);
            echo "<br>
                                <strong>Category:</strong> ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "category"), "html", null, true);
            echo "
                                <br><br>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "

                    </ul>
                </div>
            </div>
        </div><!--/span-->

        <div class=\"box span6\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-user\"></i> Organizations Approval</h2>
                <div class=\"box-icon\">
                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>
                </div>
            </div>
            <div class=\"box-content\">
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 150
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 151
            echo "                            <li>

                                <div class =\"pull-right\">
                                    ";
            // line 154
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 1)) {
                // line 155
                echo "                                        <span class=\"label label-warning\">Pending Approval</span>   <br><br>
                                        <button url=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_approve_volunteer", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-complete\"><i class=\"icon-ok\"></i></button>
                                        <button url=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_reject_volunteer", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-delete\"><i class=\"icon-remove\"></i></button>
                                    ";
            } else {
                // line 159
                echo "                                        <span class=\"label label-success\">Activated</span>   <br><br>
                                    ";
            }
            // line 161
            echo "                                </div>
                                <a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_profile_volunteer", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
            echo "\">

                                    <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\">

                                    <strong>Name:</strong> ";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastname"), "html", null, true);
            echo "</a>
                                </a><br>
                                <strong>Nationality:</strong> ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "nationality"), "html", null, true);
            echo "<br>
                                <strong>Category:</strong> ";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "category"), "html", null, true);
            echo "
                                <br><br>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "

                    </ul>
                </div>
            </div>
        </div><!--/span-->
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Home:NVS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 173,  304 => 169,  300 => 168,  293 => 166,  288 => 164,  283 => 162,  280 => 161,  276 => 159,  269 => 157,  263 => 156,  260 => 155,  258 => 154,  253 => 151,  249 => 150,  230 => 133,  220 => 129,  216 => 128,  209 => 126,  204 => 124,  199 => 122,  196 => 121,  192 => 119,  185 => 117,  179 => 116,  176 => 115,  174 => 114,  169 => 111,  165 => 110,  83 => 31,  78 => 29,  73 => 27,  68 => 25,  64 => 23,  58 => 21,  52 => 19,  50 => 18,  39 => 10,  31 => 4,  28 => 3,);
    }
}
