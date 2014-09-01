<?php

/* RidwanSiteBundle:Empty:message.html.twig */
class __TwigTemplate_8af69fa8eb23de22c5071fb469e8ee59232edf96d9f597aab90537e9dc8055fd extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
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
