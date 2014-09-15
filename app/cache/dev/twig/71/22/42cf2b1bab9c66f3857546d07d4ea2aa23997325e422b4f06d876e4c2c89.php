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
                            <li> <span class=\"green\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["CompletedOP"]) ? $context["CompletedOP"] : $this->getContext($context, "CompletedOP")), "html", null, true);
        echo "</span> Completed</li>
                            <li> <span class=\"red\">";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["RejectedOP"]) ? $context["RejectedOP"] : $this->getContext($context, "RejectedOP")), "html", null, true);
        echo "</span> Rejected </li>
                            <li> <span class=\"yellow\">";
        // line 57
        echo twig_escape_filter($this->env, ((isset($context["CurrentOP"]) ? $context["CurrentOP"] : $this->getContext($context, "CurrentOP")) + (isset($context["PendingOP"]) ? $context["PendingOP"] : $this->getContext($context, "PendingOP"))), "html", null, true);
        echo "</span> On going</li><br>
                             <span class=\"blue\">";
        // line 58
        echo twig_escape_filter($this->env, ((((isset($context["CurrentOP"]) ? $context["CurrentOP"] : $this->getContext($context, "CurrentOP")) + (isset($context["PendingOP"]) ? $context["PendingOP"] : $this->getContext($context, "PendingOP"))) + (isset($context["RejectedOP"]) ? $context["RejectedOP"] : $this->getContext($context, "RejectedOP"))) + (isset($context["CompletedOP"]) ? $context["CompletedOP"] : $this->getContext($context, "CompletedOP"))), "html", null, true);
        echo " </span><strong>Total</strong>
                        </ul>
                    </td>
                    <td width=\"3%\"></td>
                    <td width=\"30%\">

                        <ul class=\"dashboard-list\">
                            <h6>Organizations</h6>
                            <li> <span class=\"green\">";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["ActiveOrg"]) ? $context["ActiveOrg"] : $this->getContext($context, "ActiveOrg")), "html", null, true);
        echo "</span> Active</li>
                            <li> <span class=\"red\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["RejectedOrg"]) ? $context["RejectedOrg"] : $this->getContext($context, "RejectedOrg")), "html", null, true);
        echo "</span> Rejected</li>
                            <li> <span class=\"yellow\">";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["PendingOrg"]) ? $context["PendingOrg"] : $this->getContext($context, "PendingOrg")), "html", null, true);
        echo "</span> Pending</li><br>
                            <span class=\"blue\">";
        // line 69
        echo twig_escape_filter($this->env, (((isset($context["ActiveOrg"]) ? $context["ActiveOrg"] : $this->getContext($context, "ActiveOrg")) + (isset($context["RejectedOrg"]) ? $context["RejectedOrg"] : $this->getContext($context, "RejectedOrg"))) + (isset($context["PendingOrg"]) ? $context["PendingOrg"] : $this->getContext($context, "PendingOrg"))), "html", null, true);
        echo "</span>  <strong>Total</strong>

                        </ul>

                    </td>
                    <td width=\"3%\"></td>

                    <td width=\"30%\">

                        <ul class=\"dashboard-list\">
                            <h6>Volunteers</h6>
                            <li> <span class=\"green\">";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["ActiveVol"]) ? $context["ActiveVol"] : $this->getContext($context, "ActiveVol")), "html", null, true);
        echo "</span> Active</li>
                            <li> <span class=\"red\">";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["RejectedVol"]) ? $context["RejectedVol"] : $this->getContext($context, "RejectedVol")), "html", null, true);
        echo "</span> Rejected</li>
                            <li> <span class=\"yellow\">";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["PendingVol"]) ? $context["PendingVol"] : $this->getContext($context, "PendingVol")), "html", null, true);
        echo "</span> Pending</li><br>
                            <span class=\"blue\">";
        // line 83
        echo twig_escape_filter($this->env, (((isset($context["ActiveVol"]) ? $context["ActiveVol"] : $this->getContext($context, "ActiveVol")) + (isset($context["RejectedVol"]) ? $context["RejectedVol"] : $this->getContext($context, "RejectedVol"))) + (isset($context["PendingVol"]) ? $context["PendingVol"] : $this->getContext($context, "PendingVol"))), "html", null, true);
        echo "</span>  <strong>Total</strong>

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_profile", array("ID" => $this->getAttribute($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"), "id"))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_approve_organization", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-complete\"><i class=\"icon-ok\"></i></button>
                                        <button url=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_reject_organization", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_profile", array("ID" => $this->getAttribute($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "user"), "id"))), "html", null, true);
            echo "\">

                                    <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\">

                                    <strong>Name:</strong> ";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "name"), "html", null, true);
            echo "</a>
                                </a><br>
                                <strong>Location:</strong> ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "branch"), "html", null, true);
            echo "<br>
                                <strong>Category:</strong> ";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "type"), "html", null, true);
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



    <div class=\"modal hide fade\" id=\"delete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirmation</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure you want to reject this request?<br>
            </p>


        </div>
        <div class=\"modal-footer\">

            <form action=\"empty\" id = \"continue-form\" method=\"POST\">
                <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
                <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
            </form>

        </div>
    </div>

    <div class=\"modal hide fade\" id=\"complete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirmation</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure this is a authorize this process?
            </p>


        </div>
        <div class=\"modal-footer\">

            <form action=\"empty\" id = \"continue-form\" method=\"POST\">
                <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
                <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
            </form>

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
        return array (  348 => 173,  338 => 169,  334 => 168,  329 => 166,  324 => 164,  319 => 162,  316 => 161,  312 => 159,  305 => 157,  299 => 156,  296 => 155,  294 => 154,  289 => 151,  285 => 150,  266 => 133,  256 => 129,  252 => 128,  245 => 126,  240 => 124,  235 => 122,  232 => 121,  228 => 119,  221 => 117,  215 => 116,  212 => 115,  210 => 114,  205 => 111,  201 => 110,  171 => 83,  167 => 82,  163 => 81,  159 => 80,  145 => 69,  141 => 68,  137 => 67,  133 => 66,  122 => 58,  118 => 57,  114 => 56,  110 => 55,  83 => 31,  78 => 29,  73 => 27,  68 => 25,  64 => 23,  58 => 21,  52 => 19,  50 => 18,  39 => 10,  31 => 4,  28 => 3,);
    }
}
