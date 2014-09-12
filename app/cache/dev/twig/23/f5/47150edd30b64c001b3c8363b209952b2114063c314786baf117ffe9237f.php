<?php

/* RidwanOpportunityBundle:Opportunities:nvs.html.twig */
class __TwigTemplate_23f547150edd30b64c001b3c8363b209952b2114063c314786baf117ffe9237f extends Twig_Template
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
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-bookmark\"></i> Opportunities Approval</h2>

            </div>
            <div class=\"box-content\">
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opportunities"]) ? $context["opportunities"] : $this->getContext($context, "opportunities")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 18
            echo "                            <li>
                                <div class =\"pull-right\">
                                    ";
            // line 20
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 0)) {
                // line 21
                echo "                                        <br><br>
                                        <button url=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_approve_opportunity", array("opID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-small  btn-success btn-complete\"><i class=\"icon-ok\"></i> Approve</button>
                                        <button url=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_reject_opportunity", array("opID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-small btn-danger btn-delete\"><i class=\"icon-remove\"></i> Reject</button>

                                    ";
            }
            // line 26
            echo "                                </div>

                                   <h2> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "title"), "html", null, true);
            echo "</h2>

                                <br>

                                <h6>Description</h6>

                                <h3>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "description"), "html", null, true);
            echo "</h3>
                                <br>

                                <table width='100%'>
                                    <tr>
                                        <td width='40%'>
                                            <h6>Location</h6>

                                            <h3>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "location"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Start Date</h6>

                                            <h3>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "startdate"), "Y-m-d"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Expected End Date</h6>

                                            <h3>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "enddate"), "Y-m-d"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Number of Volunteers</h6>

                                            <h3>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "numberofvolunteers"), "html", null, true);
            echo "</h3>
                                            <br>
                                        </td>
                                        <td width='10%'></td>
                                        <td width='40%'>
                                            <h6>Age Group</h6>

                                            <h3>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "agegroup"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Difficulty</h6>

                                            <h3>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "difficulty"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Cause</h6>

                                            <h3>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "cause"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Status</h6>
                                            ";
            // line 78
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == (-1))) {
                // line 79
                echo "                                                <h3><span class=\"label label-important\"> Rejected</span></h3>
                                            ";
            } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 0)) {
                // line 81
                echo "                                                <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                            ";
            } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 1)) {
                // line 84
                echo "                                                <h3><span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                            ";
            } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 2)) {
                // line 87
                echo "                                                <h3><span class=\"label label-inverse\"> On going</span></h3>

                                            ";
            } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 3)) {
                // line 90
                echo "                                                <h3><span class=\"label label-info\">Completed</span></h3>
                                            ";
            }
            // line 92
            echo "                                            <br>
                                        </td>
                                        <td width='10%'></td>
                                    </tr>

                                </table>


                                <h6>Training</h6>

                                <h3>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "training"), "html", null, true);
            echo "</h3>
                                <br>

                                <h6>Expenses</h6>

                                <h3>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "expenses"), "html", null, true);
            echo "</h3>
                                <br>

                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "

                    </ul>
                </div>
            </div>
        </div><!--/span-->

 </div>

    <div class=\"modal hide fade\" id=\"delete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirm</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure you want to reject this opportunity?
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
            <h3>Confirm</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure you want to add this opportunity to the system?
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
        return "RidwanOpportunityBundle:Opportunities:nvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 112,  199 => 107,  191 => 102,  179 => 92,  175 => 90,  170 => 87,  165 => 84,  160 => 81,  156 => 79,  154 => 78,  147 => 74,  139 => 69,  131 => 64,  121 => 57,  113 => 52,  105 => 47,  97 => 42,  86 => 34,  77 => 28,  73 => 26,  65 => 23,  59 => 22,  56 => 21,  54 => 20,  50 => 18,  46 => 17,  31 => 4,  28 => 3,);
    }
}
