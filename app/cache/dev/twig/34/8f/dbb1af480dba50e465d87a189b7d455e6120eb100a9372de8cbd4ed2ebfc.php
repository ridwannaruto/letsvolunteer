<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_348fdbb1af480dba50e465d87a189b7d455e6120eb100a9372de8cbd4ed2ebfc extends Twig_Template
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

    // line 4
    public function block_dashboard($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <br><br>
";
        // line 9
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
        // line 10
        echo "    <br><br>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  40 => 9,  37 => 8,  34 => 7,  29 => 4,);
    }
}
