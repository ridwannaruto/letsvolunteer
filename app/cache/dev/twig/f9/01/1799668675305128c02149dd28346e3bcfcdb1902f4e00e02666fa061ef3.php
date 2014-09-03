<?php

/* RidwanUserBundle:Welcome:completed.html.twig */
class __TwigTemplate_f9011799668675305128c02149dd28346e3bcfcdb1902f4e00e02666fa061ef3 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/normalize.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/demo.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/component.css"), "html", null, true);
        echo "\"/>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

</head>
<body>
<div class=\"container\">
    <header class=\"codrops-header\">
        <img class=\"center\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/logo3.png"), "html", null, true);
        echo " \" width=\"400px\"/><br><br>
        <h3 style=\"color: #000000\">Greetings ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "!</h3>
    </header>

    <h4 align=\"center\">Your profile is complete</h4>
    <br><br>

    <p align=\"center\">Note: Your account will be ready to use once the NVS validates your information</p>
    <br>
</div>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/stepsForm.js"), "html", null, true);
        echo "\"></script>
<script>
    var theForm = document.getElementById( 'theForm' );

    new stepsForm( theForm, {
        onSubmit : function( form ) {
            // hide form
            classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

            /*

             or
             AJAX request (maybe show loading indicator while we don't have an answer..)
             */

            // let's just simulate something...
            var messageEl = theForm.querySelector( '.final-message' );
            messageEl.innerHTML = 'Thank you! Check email for instructions.';
            classie.addClass( messageEl, 'show' );
            form.submit();
        }
    } );
</script>
<br>
<hr>
<footer>
    <p align=\"center\"><strong>Computer Science & Engineering Department, University of Moratuwa </strong>&copy; 2014
</footer>
</body>
</html>






";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:completed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  70 => 29,  58 => 20,  54 => 19,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
