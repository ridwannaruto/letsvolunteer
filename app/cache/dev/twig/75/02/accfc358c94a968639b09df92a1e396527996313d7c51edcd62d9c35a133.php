<?php

/* RidwanOpportunityBundle:Opportunities:complete.html.twig */
class __TwigTemplate_7502accfc358c94a968639b09df92a1e396527996313d7c51edcd62d9c35a133 extends Twig_Template
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
        echo "<div id=\"content\" class=\"span10\">
   <div class=\"row-fluid\">

        <div class=\"box span12\">
            <div class=\"box-content \">
                <div id=\"content\" class=\"span12\">
                    <h2>Feedback</h2>
                    <hr>

                    <p align=\"left\">Please provide feedback to the following volunteer(s) to complete this Opportunity</p>
                    <br>
                    <div style=\"margin-left: 10%\">
                    <table>
                        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")));
        foreach ($context['_seq'] as $context["_key"] => $context["volunteer"]) {
            // line 19
            echo "                        <tr>
                           <strong>
                               <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_volunteer_feedbackPage", array("userID" => $this->getAttribute($this->getAttribute((isset($context["volunteer"]) ? $context["volunteer"] : $this->getContext($context, "volunteer")), "user"), "id"), "opportunityID" => $this->getAttribute((isset($context["Opportunity"]) ? $context["Opportunity"] : $this->getContext($context, "Opportunity")), "id"))), "html", null, true);
            echo "\">
                               ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["volunteer"]) ? $context["volunteer"] : $this->getContext($context, "volunteer")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["volunteer"]) ? $context["volunteer"] : $this->getContext($context, "volunteer")), "lastname"), "html", null, true);
            echo "
                                   </a>

                           </strong>

                            </td>

                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['volunteer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                    </table>
                        </div>
                    <br>


                </div>
            </div>
        </div>



    </div>



";
    }

    public function getTemplateName()
    {
        return "RidwanOpportunityBundle:Opportunities:complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  58 => 22,  54 => 21,  50 => 19,  46 => 18,  31 => 5,  28 => 4,);
    }
}
