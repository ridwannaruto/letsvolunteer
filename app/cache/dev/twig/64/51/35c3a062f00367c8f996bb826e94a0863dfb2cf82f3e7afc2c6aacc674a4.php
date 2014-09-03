<?php

/* RidwanUserBundle:Welcome:personal.html.twig */
class __TwigTemplate_645135c3a062f00367c8f996bb826e94a0863dfb2cf82f3e7afc2c6aacc674a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RidwanUserBundle:Welcome:index.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RidwanUserBundle:Welcome:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"fs-form-wrap\" id=\"fs-form-wrap\">
    <div class=\"fs-title\">
            <h1>Personal Information</h1>
   </div>


    <br><br><br><br>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "myform", "class" => "fs-form fs-form-full", "autocomplete" => "off")));
        echo "
        <ol class=\"fs-fields\">
            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q1\" data-info=\"we will use this name\">What's your name?</label>
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preferredname"), 'widget', array("class" => "fs-anim-lower", "attr" => array("id" => "q1", "placeholder" => "type your preferred name")));
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preferredname"), 'errors');
        echo "

            </li>
            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q2\" data-info=\"just to know\">What's your full name?</label>
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullname"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q2", "placeholder" => "type your full name")));
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullname"), 'errors');
        echo "
            </li>

            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q3\" data-info=\"just to know\">What's your nationality?</label>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q3", "placeholder" => "srilankan , indian etc")));
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality"), 'errors');
        echo "
            </li>



            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q4\" data-info=\"NIC for Sri Lankans and Passport Number for Foreigners\">What's your Identity?</label>
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nicorpassport"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q4", "placeholder" => "NIC or Passport Number")));
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nicorpassport"), 'errors');
        echo "
            </li>

            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q5\" data-info=\"just to know\">When is your birthday?</label>
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q5", "placeholder" => "yyyy-mm-dd")));
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'errors');
        echo "
            </li>




            <li data-input-trigger>
                <label class=\"fs-field-label fs-anim-upper\"  >What is your sex?</label>
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'widget', array("attr" => array("class" => "cs-select cs-skin-boxes fs-anim-lower", "id" => "q6")));
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'errors');
        echo "

            </li>

            <li data-input-trigger>
                <label class=\"fs-field-label fs-anim-upper\"  >Are you married?</label>
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Civilstatus"), 'widget', array("attr" => array("class" => "cs-select cs-skin-boxes fs-anim-lower", "id" => "q7")));
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Civilstatus"), 'errors');
        echo "

            </li>

            <li data-input-trigger>
                <label class=\"fs-field-label fs-anim-upper\" >Select the category that describes you</label>
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget', array("attr" => array("class" => "cs-select cs-skin-boxes fs-anim-lower", "id" => "q8")));
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'errors');
        echo "

            </li>



        </ol><!-- /fs-fields -->
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <button class=\"fs-submit\" type=\"submit\">Send answers</button>
    </form><!-- /fs-form -->

</div>

";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:personal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 72,  142 => 65,  138 => 64,  129 => 58,  125 => 57,  116 => 51,  112 => 50,  101 => 42,  97 => 41,  89 => 36,  85 => 35,  75 => 28,  71 => 27,  63 => 22,  59 => 21,  51 => 16,  47 => 15,  40 => 11,  31 => 4,  28 => 3,);
    }
}
