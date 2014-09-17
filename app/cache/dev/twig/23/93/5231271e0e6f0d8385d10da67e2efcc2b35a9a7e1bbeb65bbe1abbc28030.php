<?php

/* RidwanSiteBundle:Error:permission.html.twig */
class __TwigTemplate_23935231271e0e6f0d8385d10da67e2efcc2b35a9a7e1bbeb65bbe1abbc28030 extends Twig_Template
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
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<br><br><br><br><br><br>
<div class=\"alert alert-error center span8\">
    
    <h3 style=\"color: darkred\">Access Denied!</h3> <br><h6> you do not have permssion!</h6> <br>Please contact site admin.
</div>
<br>
<br><br><br><br><br><br>


";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Error:permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  29 => 3,);
    }
}
