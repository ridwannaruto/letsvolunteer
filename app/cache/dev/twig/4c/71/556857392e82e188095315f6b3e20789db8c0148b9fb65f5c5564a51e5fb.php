<?php

/* RidwanSiteBundle:Home:special.html.twig */
class __TwigTemplate_4c71556857392e82e188095315f6b3e20789db8c0148b9fb65f5c5564a51e5fb extends Twig_Template
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
        // line 3
        echo "
        <div class=\"span2 main-menu-span\">




            <div class=\"well nav-collapse sidebar-nav\">
                <p align=\"center\">
                    ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 12
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                    ";
        } else {
            // line 14
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                    ";
        }
        // line 16
        echo "                    <br><br><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</strong>
                </p>
                <ul class=\"nav nav-tabs nav-stacked main-menu\">

                    <li class=\"nav-header hidden-tablet\">Dashboard</li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Home</span></a></li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> Statistics</span></a></li>

                </ul>
            </div><!--/.well -->
        </div><!--/span-->
    ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "
";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Home:special.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  73 => 28,  56 => 16,  50 => 14,  44 => 12,  42 => 11,  32 => 3,  29 => 2,);
    }
}
