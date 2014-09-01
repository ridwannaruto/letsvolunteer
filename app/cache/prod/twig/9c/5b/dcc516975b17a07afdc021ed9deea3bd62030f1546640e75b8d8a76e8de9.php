<?php

/* RidwanSiteBundle:Authentication:register.html.twig */
class __TwigTemplate_9c5bdcc516975b17a07afdc021ed9deea3bd62030f1546640e75b8d8a76e8de9 extends Twig_Template
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

    <link rel=\"shortcut icon\" href=\"../favicon.ico\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/normalize.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/demo.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/component.css"), "html", null, true);
        echo "\"/>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

</head>
<body>
<div class=\"container\">
    <header class=\"codrops-header\">
        <img class=\"center\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/logo3.png"), "html", null, true);
        echo " \" width=\"400px\"/><br><br>

    </header>
                <section>
                ";
        // line 24
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_registration_register"), array());
        // line 25
        echo "                </section>
</div>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/stepsForm.js"), "html", null, true);
        echo "\"></script>
<script>
    var theForm = document.getElementById( 'theForm' );

    new stepsForm( theForm, {
        onSubmit : function( form ) {
            // hide form
            classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );
            form.submit();
            /*

             or
             AJAX request (maybe show loading indicator while we don't have an answer..)
             */

            // let's just simulate something...
            var messageEl = theForm.querySelector( '.final-message' );
            messageEl.innerHTML = 'Thank you! We\\'ll be in touch.';
            classie.addClass( messageEl, 'show' );
        }
    } );
</script>
<hr>
<footer>
    <p align=\"center\"><strong>Computer Science & Engineering Department, University of Moratuwa </strong>&copy; 2014
</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Authentication:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  65 => 27,  61 => 25,  59 => 24,  52 => 20,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
