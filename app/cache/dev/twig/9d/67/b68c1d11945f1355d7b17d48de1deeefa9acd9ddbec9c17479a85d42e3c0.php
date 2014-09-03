<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9d67b68c1d11945f1355d7b17d48de1deeefa9acd9ddbec9c17479a85d42e3c0 extends Twig_Template
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
        echo "<form id=\"theForm\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register simform\" autocomplete=\"off\">

    <div id=\"fos_user_registration_form\" class=\"simform-inner\">
        <ol class=\"questions\">
            <li>
                <span><label for=\"q1\">Who are you?</label></span>
                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget', array("attr" => array("placeholder" => "Volunteer or Organization")));
        echo "
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "
            </li>

            <li>
                <span><label for=\"q1\">What is your username?</label></span>
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("placeholder" => "type a username you desire")));
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "
            </li>
            <li>
                <span><label for=\"q2\">What is your email address?</label></span>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("autocomplete" => "off", "placeholder" => "type your email")));
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
            </li>
            <li>
                <span><label for=\"q3\">Setup your password</label></span>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("placeholder" => "password of 6 characters")));
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'errors');
        echo "
          </li>
            <li>
                <span><label for=\"q3\">Confirm your password</label></span>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("placeholder" => "re-type your password")));
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'errors');
        echo "
         </li>


        </ol><!-- /questions -->



        <div class=\"controls\">
            <button name = \"next\" class=\"next\"></button>
            <div class=\"progress\"></div>
\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t<span class=\"number-current\"></span>
\t\t\t\t\t\t\t\t<span class=\"number-total\"></span>
\t\t\t\t\t\t\t</span>
            <span class=\"error-message\"></span>
        </div><!-- / controls -->
    </div><!-- /simform-inner -->
    <span class=\"final-message\"></span>
    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 48,  80 => 29,  76 => 28,  65 => 23,  58 => 19,  54 => 18,  134 => 76,  108 => 53,  104 => 52,  100 => 50,  98 => 49,  91 => 45,  87 => 43,  69 => 24,  62 => 23,  60 => 22,  52 => 17,  47 => 14,  43 => 13,  39 => 13,  35 => 8,  31 => 7,  19 => 1,);
    }
}
