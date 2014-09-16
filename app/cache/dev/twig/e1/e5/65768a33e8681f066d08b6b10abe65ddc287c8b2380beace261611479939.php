<?php

/* RidwanOpportunityBundle:Opportunities:organization.html.twig */
class __TwigTemplate_e1e565768a33e8681f066d08b6b10abe65ddc287c8b2380beace261611479939 extends Twig_Template
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
        echo "    <div id=\"content\" class=\"span10\">

    ";
        // line 6
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"), 0, array(), "array") == "ORGANIZATION")) {
            // line 7
            echo "        <div class=\"row-fluid\">
            <div class=\"pull-right\">
                <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("ridwan_opportunity_new");
            echo "\">
                    <button class=\"btn btn-round btn-success\"><i class=\"icon-plus\"></i> Create Opportunity</button>
                </a>
            </div>
        </div><br>
    ";
        }
        // line 15
        echo "
    <div class=\"row-fluid\">

        <div class=\"box span12\">

            <div class=\"box-header well\" data-original-title>

                <h2><i class=\"icon-list-alt\"></i> Volunteering Opportunities by ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "html", null, true);
        echo "</h2>

            </div>
            <div class=\"box-content\">
                <br>

                <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                    <tr>
                        <th width=\"15%\">Title</th>
                        <th width=\"45%\">Details</th>
                        <th width=\"10%\">Type</th>
                        <th width=\"10%\">Location</th>
                        <th width=\"10%\">Status</th>

                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Opportunities"]) ? $context["Opportunities"] : $this->getContext($context, "Opportunities")));
        foreach ($context['_seq'] as $context["_key"] => $context["op"]) {
            // line 43
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_opportunity_details", array("opportunityID" => $this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "title"), "html", null, true);
            echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "description"), "html", null, true);
            echo "
                            </td>
                            <td class=\"center\">
                                ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "cause"), "html", null, true);
            echo "
                            </td>
                            <td class=\"center\">
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "location"), "html", null, true);
            echo "
                            </td>
                            <td class=\"center\">
                                ";
            // line 57
            if (($this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "status") == (-1))) {
                // line 58
                echo "                                    <h3> <span class=\"label label-important\"> Rejected </span></h3>
                                ";
            } elseif (($this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "status") == 0)) {
                // line 60
                echo "                                    <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                ";
            } elseif (($this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "status") == 1)) {
                // line 63
                echo "                                    <h3> <span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                ";
            } elseif (($this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "status") == 2)) {
                // line 66
                echo "                                    <h3><span class=\"label label-inverse\">On going</span></h3>

                                ";
            } elseif (($this->getAttribute((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), "status") == 3)) {
                // line 69
                echo "                                    <h3><span class=\"label label-info\">Completed</span></h3>
                                ";
            }
            // line 71
            echo "                            </td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['op'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                </table>
            </div>

        </div>


    </div>

";
    }

    public function getTemplateName()
    {
        return "RidwanOpportunityBundle:Opportunities:organization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 75,  141 => 71,  137 => 69,  132 => 66,  127 => 63,  122 => 60,  118 => 58,  116 => 57,  110 => 54,  104 => 51,  98 => 48,  90 => 45,  86 => 43,  82 => 42,  59 => 22,  50 => 15,  41 => 9,  37 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
