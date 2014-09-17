<?php

/* RidwanEntityBundle:Volunteerpersonal:edit.html.twig */
class __TwigTemplate_fe6f46cd9bf359e4187e1836b7da09d7b332cf8c5295c9320917db70861f49b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\" class=\"span10\">
        <div class=\"row-fluid\">
            <br>
            <h2>Personal Information</h2>
            <hr>
            <br>
            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal center")));
        echo "
            <div class=\"control-group primary\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "First Name"));
        echo "

                <div class=\"controls\">
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstname"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstname"), 'errors');
        echo "</span>
                </div>
            </div>

            <div class=\"control-group primary\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Last Name"));
        echo "

                <div class=\"controls\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastname"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastname"), 'errors');
        echo "</span>
                </div>
            </div>


            <div class=\"control-group primary\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Category"));
        echo "

                <div class=\"controls\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category"), 'errors');
        echo "</span>
                </div>
            </div>

            <div class=\"control-group primary\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nationality"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nationality"));
        echo "

                <div class=\"controls\">
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nationality"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nationality"), 'errors');
        echo "</span>
                </div>
            </div>


            <div class=\"control-group primary\">
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nicorpassport"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Identification"));
        echo "

                <div class=\"controls\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nicorpassport"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q4", "placeholder" => "NIC or Passport Number")));
        // line 54
        echo "
                    <span class=\"help-inline\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nicorpassport"), 'errors');
        echo "</span>
                </div>
            </div>

            <div class=\"control-group primary\">
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateofbirth"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date of Birth"));
        echo "

                <div class=\"controls\">
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateofbirth"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                    <span class=\"help-inline\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateofbirth"), 'errors');
        echo "</span>
                </div>
            </div>

            <div class=\"control-group primary\">
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "gender"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Sex"));
        echo "

                <div class=\"controls\">
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "gender"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "gender"), 'errors');
        echo "</span>
                </div>
            </div>


            <div class=\"control-group primary\">
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Civilstatus"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Civil Status"));
        echo "

                <div class=\"controls\">
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Civilstatus"), 'widget');
        echo "
                    <span class=\"help-inline\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Civilstatus"), 'errors');
        echo "</span>
                </div>
            </div>


            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "
            <div class=\"control-group primary\">
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Civilstatus"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "

                <div class=\"controls\">
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
                    <span class=\"help-inline\">";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Civilstatus"), 'errors');
        echo "</span>
                </div>
            </div>


            ";
        // line 99
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RidwanEntityBundle:Volunteerpersonal:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 99,  207 => 94,  203 => 93,  197 => 90,  192 => 88,  184 => 83,  180 => 82,  174 => 79,  165 => 73,  161 => 72,  155 => 69,  147 => 64,  143 => 63,  137 => 60,  129 => 55,  126 => 54,  124 => 53,  118 => 50,  109 => 44,  105 => 43,  99 => 40,  91 => 35,  87 => 34,  81 => 31,  72 => 25,  68 => 24,  62 => 21,  54 => 16,  50 => 15,  44 => 12,  39 => 10,  31 => 4,  28 => 3,);
    }
}
