<?php

/* RidwanUserBundle:Welcome:completed.html.twig */
class __TwigTemplate_f9011799668675305128c02149dd28346e3bcfcdb1902f4e00e02666fa061ef3 extends Twig_Template
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"container\">
    <header class=\"codrops-header\">
        <img class=\"center\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/Logo.jpg"), "html", null, true);
        echo " \" width=\"250px\"/>

    </header>

    <br>
    <h3 align=\"center\" style=\"color: #000000\">Greetings ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "!</h3>
    <br>
    <br>

    <h4 align=\"center\" >Your profile is complete</h4>
    <br>


    <p align=\"center\">Note: Your account will be ready to use once the NVS validates your information</p>
    <br>
</div>
";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:completed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  41 => 9,  37 => 7,  34 => 6,  29 => 3,);
    }
}
