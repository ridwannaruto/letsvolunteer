<?php

/* RidwanSiteBundle:Error:error.html.twig */
class __TwigTemplate_5d79e372db5ffa73e1cc038815909b337220c44dfa4eaa9c88cd0a56f923810e extends Twig_Template
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

    // line 2
    public function block_dashboard($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<br><br><br><br><br><br>
<div class=\"alert alert-error center span8\">

    <h3 style=\"color: darkred\"> <strong>Error</strong></h3> <br><h6>Ops! Something went wrong. Please contact admin if problem persists.</h6> <br><br>
    <h6>Message</h6>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
</div>
<br>
<br><br><br><br><br><br>


";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Error:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  37 => 5,  34 => 4,  29 => 2,);
    }
}
