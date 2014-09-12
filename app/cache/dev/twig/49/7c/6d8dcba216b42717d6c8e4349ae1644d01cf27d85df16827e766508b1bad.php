<?php

/* RidwanUserBundle:Welcome:organizationdetails.html.twig */
class __TwigTemplate_497c6d8dcba216b42717d6c8e4349ae1644d01cf27d85df16827e766508b1bad extends Twig_Template
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
        echo "<br>
<div id=\"content\" class=\"span10\">
    <div class=\"row-fluid\">
        <h1>General Information</h1>
        <hr>


        <br><br>
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "myform", "class" => "form-horizontal center", "autocomplete" => "off")));
        echo "

            <div class=\"control-group primary\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Organization Name"));
        echo "

                <div class=\"controls\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "</span>
                </div>
            </div>


            <div class=\"control-group primary\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "branch"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Branch"));
        echo "

                <div class=\"controls\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "branch"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "branch"), 'errors');
        echo "</span>
                </div>
            </div>


                <div class=\"control-group primary\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Type"));
        echo "

                    <div class=\"controls\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
                        <span class=\"help-inline\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "</span>
                    </div>
                </div>


                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
                <div class=\"control-group primary\">
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "

                    <div class=\"controls\">
                        <button class=\"btn btn-success\" type=\"submit\">Submit</button>
                        <span class=\"help-inline\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "</span>
                    </div>
                </div>
    </form><!-- /fs-form -->

</div>

";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:organizationdetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  114 => 47,  109 => 45,  101 => 40,  97 => 39,  91 => 36,  82 => 30,  78 => 29,  72 => 26,  63 => 20,  59 => 19,  53 => 16,  47 => 13,  37 => 5,  34 => 4,  29 => 2,);
    }
}
