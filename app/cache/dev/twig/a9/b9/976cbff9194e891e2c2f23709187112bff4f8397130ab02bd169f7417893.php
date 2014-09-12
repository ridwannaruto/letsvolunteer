<?php

/* RidwanEntityBundle:Opportunities:edit.html.twig */
class __TwigTemplate_a9b9976cbff9194e891e2c2f23709187112bff4f8397130ab02bd169f7417893 extends Twig_Template
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
        <h2>Edit Opportunity</h2>
        <hr><br>
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <div class=\"control-group primary\">
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Title"));
        echo "

            <div class=\"controls\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "difficulty"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Difficulty"));
        echo "

            <div class=\"controls\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "difficulty"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "difficulty"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cause"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Cause"));
        echo "

            <div class=\"controls\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cause"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cause"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Long Description"));
        echo "

            <div class=\"controls\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "shortdescription"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Short Description"));
        echo "

            <div class=\"controls\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "shortdescription"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "shortdescription"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Location "));
        echo "

            <div class=\"controls\">
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numberofvolunteers"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Number of Volunteers Required"));
        echo "

            <div class=\"controls\">
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numberofvolunteers"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numberofvolunteers"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "agegroup"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Age Group"));
        echo "

            <div class=\"controls\">
                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "agegroup"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "agegroup"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "training"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Training"));
        echo "

            <div class=\"controls\">
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "training"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "training"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "expenses"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Expenses"));
        echo "

            <div class=\"controls\">
                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "expenses"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "expenses"), 'errors');
        echo "</span>
            </div>
        </div>



        <div class=\"control-group primary\">
            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startdate"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Start Date"));
        echo "

            <div class=\"controls\">
                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startdate"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                <span class=\"help-inline\">";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startdate"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enddate"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Due Date"));
        echo "

            <div class=\"controls\">
                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enddate"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                <span class=\"help-inline\">";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enddate"), 'errors');
        echo "</span>
            </div>
        </div>

        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enddate"), 'widget', array("type" => "hidden"));
        echo "



        <div class=\"control-group primary\">


            <div class=\"controls\">
                ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success span3")));
        echo "

            </div>
        </div>
        ";
        // line 133
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "RidwanEntityBundle:Opportunities:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 133,  272 => 129,  261 => 121,  254 => 117,  250 => 116,  244 => 113,  236 => 108,  232 => 107,  226 => 104,  216 => 97,  212 => 96,  206 => 93,  198 => 88,  194 => 87,  188 => 84,  180 => 79,  176 => 78,  170 => 75,  162 => 70,  158 => 69,  152 => 66,  144 => 61,  140 => 60,  134 => 57,  126 => 52,  122 => 51,  116 => 48,  108 => 43,  104 => 42,  98 => 39,  90 => 34,  86 => 33,  80 => 30,  72 => 25,  68 => 24,  62 => 21,  54 => 16,  50 => 15,  44 => 12,  39 => 10,  31 => 4,  28 => 3,);
    }
}
