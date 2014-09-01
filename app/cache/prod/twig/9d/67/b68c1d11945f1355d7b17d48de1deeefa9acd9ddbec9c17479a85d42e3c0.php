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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register simform\" autocomplete=\"off\">

    <div id=\"fos_user_registration_form\" class=\"simform-inner\">
        <ol class=\"questions\">

            <li>
                <span><label for=\"q1\">What is your username?</label></span>
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'widget');
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'errors');
        echo "
            </li>
            <li>
                <span><label for=\"q2\">What is your email address?</label></span>
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors');
        echo "
            </li>
            <li>
                <span><label for=\"q3\">Setup your password</label></span>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), "first"), 'widget');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), "first"), 'errors');
        echo "
          </li>
            <li>
                <span><label for=\"q3\">Confirm your password</label></span>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), "second"), 'widget');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), "second"), 'errors');
        echo "
         </li>


        </ol><!-- /questions -->



        <div class=\"controls\">
            <button class=\"next\"></button>
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
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
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
        return array (  91 => 43,  58 => 19,  54 => 18,  47 => 14,  36 => 9,  32 => 8,  26 => 2,  20 => 1,  69 => 24,  65 => 23,  61 => 25,  59 => 24,  52 => 20,  43 => 13,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
