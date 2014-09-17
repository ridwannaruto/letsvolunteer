<?php

/* RidwanSiteBundle:Empty:message.html.twig */
class __TwigTemplate_db9681a351c6ae237abfe014da61c0291d1467253a630ea3388bae27735c10df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Empty:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
