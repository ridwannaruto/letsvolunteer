<?php

/* RidwanEntityBundle:Organizationcontactdetails:edit.html.twig */
class __TwigTemplate_20fcba90ab98b1a4b12e39e5aeb4617bb543b2a3cf13f78ec16b5caef6219a16 extends Twig_Template
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
        echo "<div id=\"content\" class=\"span10\">
    <div class=\"row-fluid\">

        <br>
        <h2>Organization Contact Information</h2>
        <hr><br>
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

        <div class=\"control-group primary\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "
            <div class=\"controls\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "website"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Website"));
        echo "
            <div class=\"controls\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "website"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "website"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fax"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Fax Number"));
        echo "
            <div class=\"controls\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fax"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fax"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Phone Number"));
        echo "
            <div class=\"controls\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "streetnumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Street Number"));
        echo "
            <div class=\"controls\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "streetnumber"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "streetnumber"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "street"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Street Name"));
        echo "
            <div class=\"controls\">
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "street"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "street"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "city"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "City"));
        echo "
            <div class=\"controls\">
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "city"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "city"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "divisionalsecretary"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Divisional Secretary"));
        echo "
            <div class=\"controls\">
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "divisionalsecretary"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "divisionalsecretary"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "district"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "District"));
        echo "
            <div class=\"controls\">
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "district"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "district"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "province"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Province"));
        echo "
            <div class=\"controls\">
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "province"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "province"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Country"));
        echo "
            <div class=\"controls\">
                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'widget');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "
            <div class=\"controls\">
                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
                <span class=\"help-inline\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'widget');
        echo "</span>
            </div>
        </div>

        <br><br>

        ";
        // line 110
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RidwanEntityBundle:Organizationcontactdetails:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 110,  241 => 104,  237 => 103,  232 => 101,  224 => 96,  220 => 95,  215 => 93,  207 => 88,  203 => 87,  198 => 85,  190 => 80,  186 => 79,  181 => 77,  173 => 72,  169 => 71,  164 => 69,  156 => 64,  152 => 63,  147 => 61,  139 => 56,  135 => 55,  130 => 53,  122 => 48,  118 => 47,  113 => 45,  105 => 40,  101 => 39,  96 => 37,  88 => 32,  84 => 31,  79 => 29,  71 => 24,  67 => 23,  62 => 21,  54 => 16,  50 => 15,  45 => 13,  39 => 10,  31 => 4,  28 => 3,);
    }
}
