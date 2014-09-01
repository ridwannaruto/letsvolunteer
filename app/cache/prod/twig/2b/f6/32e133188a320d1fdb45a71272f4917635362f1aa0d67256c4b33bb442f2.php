<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2bf632e133188a320d1fdb45a71272f4917635362f1aa0d67256c4b33bb442f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 2
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,  69 => 28,  65 => 27,  61 => 25,  59 => 24,  52 => 20,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
