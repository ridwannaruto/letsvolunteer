<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_90472b976db2163b1a95ae2eb4a90032a152d6c4bb9d258910a210e24b0903e2 extends Twig_Template
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

        <h2><i class=\"icon-lock\"></i> Change Password</h2>

    </div>
    <div class=\"box-content\">
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal center fos_user_change_password\">
    <div class=\"control-group error \">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Current Password"));
        echo "

        <div class=\"controls\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget');
        echo "<br>
            <p class=\"help-block\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'errors');
        echo "</p>
        </div></div>

    <div class=\"control-group success \">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "first"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "New Password"));
        echo "

        <div class=\"controls\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "first"), 'widget');
        echo "<br>
            <p class=\"help-block\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "first"), 'errors');
        echo "</p>
        </div></div>

    <div class=\"control-group success \">
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "second"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Confirm Password"));
        echo "

        <div class=\"controls\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "second"), 'widget');
        echo "<br>
            <p class=\"help-block\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "second"), 'errors');
        echo "</p>
        </div></div>

    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <div class=\"control-group \">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "second"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "

        <div>
            <input type=\"submit\" value=\"Change\" class =\"btn btn-primary\"/>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ridwan_site_home");
        echo "\"><button class=\"btn btn-danger\">Cancel</button></a>
            <span class=\"help-inline\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "second"), 'errors');
        echo "</span>
        </div></div>


</form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  98 => 40,  91 => 36,  85 => 33,  79 => 30,  75 => 29,  69 => 26,  62 => 22,  58 => 21,  52 => 18,  45 => 14,  35 => 10,  28 => 8,  19 => 1,  43 => 11,  41 => 13,  37 => 8,  34 => 7,  29 => 4,);
    }
}
