<?php

/* RidwanUserBundle:Welcome:skills.html.twig */
class __TwigTemplate_f99f7215b9b3d002769ecac9aa64a036d5681df391d623fa030a9556eb12ac1f extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Let's Volunteer Register</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/choices/css/normalize.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/choices/css/demo.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/choices/css/component.css"), "html", null, true);
        echo "\"/>
    <link id=\"bs-css\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/bootstrap-slate.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/charisma-app.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/choices/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

</head>
<body style=\"background: #3b3f45\">
<div class=\"fs-title\">
    <h1> &nbsp;&nbsp;&nbsp;Skills</h1>
</div>

<div class=\"container\">
    <!-- Top Navigation -->

    <section>
       ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <h2>Select your proficient languages</h2>
        <hr>
            <ul>
                <li>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages"), "children"), 0, array(), "array"), 'widget');
        echo "<label for=\"cb1\">English</label></li>
                <li>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages"), "children"), 1, array(), "array"), 'widget');
        echo "<label for=\"cb1\">Sinhala</label></li>
                <li>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages"), "children"), 2, array(), "array"), 'widget');
        echo "<label for=\"cb1\">Tamil</label></li>
                <li>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages"), "children"), 3, array(), "array"), 'widget');
        echo "<label for=\"cb1\">Hindi</label></li>
                <li>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages"), "children"), 4, array(), "array"), 'widget');
        echo "<label for=\"cb1\">Spanish</label></li>

            </ul>

            <br><br>

            <h2>Select your interested causes</h2>
        <hr>
            <ul>
                <li>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "causes"), "children"), 0, array(), "array"), 'widget');
        echo "<label for=\"cb1\">Poverty Eradication</label></li>
                <li>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "causes"), "children"), 1, array(), "array"), 'widget');
        echo "<label for=\"cb2\">Education</label></li>
                <li>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "causes"), "children"), 2, array(), "array"), 'widget');
        echo "<label for=\"cb3\">Wild Life</label></li>
                <li>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "causes"), "children"), 3, array(), "array"), 'widget');
        echo "<label for=\"cb4\">Peace and Reconciliation</label></li>
                <li>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "causes"), "children"), 4, array(), "array"), 'widget');
        echo "<label for=\"cb5\">International Understanding</label></li>
            </ul>

            <br><br>
            <h2>Select your skills</h2>
        <hr>
            <ul>
                <li>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), "children"), 0, array(), "array"), 'widget');
        echo "<label for=\"cb1\">Photography</label></li>
                <li>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), "children"), 1, array(), "array"), 'widget');
        echo "<label for=\"cb2\">Video and Graphic Design</label></li>
                <li>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), "children"), 2, array(), "array"), 'widget');
        echo "<label for=\"cb3\">Teaching</label></li>
                <li>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), "children"), 3, array(), "array"), 'widget');
        echo "<label for=\"cb4\">Consulting</label></li>
                <li>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills"), "children"), 4, array(), "array"), 'widget');
        echo "<label for=\"cb5\">Team Management</label></li>
            </ul>

            <br><br>

            <h2>Any other special skill you want to mention?</h2>
            <hr>
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "other"), 'widget');
        echo "
        <br><br>
        <p align=\"center\">
            <input class='btn btn-success btn-large center span5' type=\"submit\" value = 'Submit'></p>

        ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </section>


</div><!-- /container -->

<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/choices/js/svgcheckbx.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:skills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 78,  164 => 72,  156 => 67,  146 => 60,  142 => 59,  138 => 58,  134 => 57,  130 => 56,  120 => 49,  116 => 48,  112 => 47,  108 => 46,  104 => 45,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  69 => 28,  54 => 16,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
