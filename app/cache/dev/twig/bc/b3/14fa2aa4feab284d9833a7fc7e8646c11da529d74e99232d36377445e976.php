<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_bcb314fa2aa4feab284d9833a7fc7e8646c11da529d74e99232d36377445e976 extends Twig_Template
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
        echo "<div class=\"box span4 center\">
    <div class=\"box-header well\">

        <h2><i class=\"icon-lock\"></i> Account Settings</h2>

    </div>
    <div class=\"box-content\">
<br>
<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal fos_user_profile_edit\">
    <div class=\"control-group \">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Username"));
        echo "

        <div class=\"controls\">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "<br>
            <p class=\"help-block\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "</p>
        </div></div>

    <div class=\"control-group \">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "

        <div class=\"controls\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "<br>
            <p class=\"help-block\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "</p>
        </div></div>

    <div class=\"control-group \">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Account password"));
        echo "

        <div class=\"controls\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget');
        echo "<br>

            <p class=\"help-block\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'errors');
        echo "</p>
        </div></div>


    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"control-group \">
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "

        <input class =\"btn btn-primary\" type=\"submit\" value=\"Update\"/>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ridwan_site_home");
        echo "\"><button class=\"btn btn-danger\">Cancel</button></a>
    </div>
</form>

        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  93 => 38,  88 => 36,  81 => 32,  76 => 30,  70 => 27,  63 => 23,  59 => 22,  53 => 19,  46 => 15,  36 => 11,  19 => 1,  42 => 14,  40 => 9,  37 => 8,  34 => 7,  29 => 9,);
    }
}
