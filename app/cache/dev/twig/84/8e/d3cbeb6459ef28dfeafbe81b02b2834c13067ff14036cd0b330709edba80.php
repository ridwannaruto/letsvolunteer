<?php

/* RidwanEntityBundle:Volunteercontactdetails:edit.html.twig */
class __TwigTemplate_848ed3cbeb6459ef28dfeafbe81b02b2834c13067ff14036cd0b330709edba80 extends Twig_Template
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
        <h2>Profile Information</h2>
        <hr><br>
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "


        <div class=\"control-group primary\">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mobile"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mobile Number"));
        echo "

            <div class=\"controls\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mobile"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mobile"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Phone Number"));
        echo "

            <div class=\"controls\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone"), 'errors');
        echo "</span>
            </div>
        </div>


        <div class=\"control-group primary\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fax"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Fax Number"));
        echo "

            <div class=\"controls\">
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fax"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fax"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "streetnumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Street Number"));
        echo "

            <div class=\"controls\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "streetnumber"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "streetnumber"), 'errors');
        echo "</span>
            </div>
        </div>


        <div class=\"control-group primary\">
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "street"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Street"));
        echo "

            <div class=\"controls\">
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "street"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "street"), 'errors');
        echo "</span>
            </div>
        </div>



        <div class=\"control-group primary\">
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "city"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "City"));
        echo "

            <div class=\"controls\">
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "city"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "city"), 'errors');
        echo "</span>
            </div>
        </div>


        <div class=\"control-group primary\">
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "district"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "District"));
        echo "

            <div class=\"controls\">
                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "district"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "district"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "divisionalsecretary"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Divisional Secretary"));
        echo "

            <div class=\"controls\">
                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "divisionalsecretary"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "divisionalsecretary"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "province"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Province"));
        echo "

            <div class=\"controls\">
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "province"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "province"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Country"));
        echo "

            <div class=\"controls\">
                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'errors');
        echo "</span>
            </div>
        </div>


        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "
        <div class=\"control-group primary\">
            ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "

            <div class=\"controls\">
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
                <span class=\"help-inline\">";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'errors');
        echo "</span>
            </div>
        </div>

        ";
        // line 119
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RidwanEntityBundle:Volunteercontactdetails:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 119,  246 => 115,  242 => 114,  236 => 111,  231 => 109,  223 => 104,  219 => 103,  213 => 100,  205 => 95,  201 => 94,  195 => 91,  187 => 86,  183 => 85,  177 => 82,  169 => 77,  165 => 76,  159 => 73,  150 => 67,  146 => 66,  140 => 63,  130 => 56,  126 => 55,  120 => 52,  111 => 46,  107 => 45,  101 => 42,  93 => 37,  89 => 36,  83 => 33,  74 => 27,  70 => 26,  64 => 23,  56 => 18,  52 => 17,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
