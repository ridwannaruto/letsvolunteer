<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2bf632e133188a320d1fdb45a71272f4917635362f1aa0d67256c4b33bb442f2 extends Twig_Template
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
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/notification/css/ns-default.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/notification/css/ns-style-bar.css"), "html", null, true);
        echo "\"/>

    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

</head>
<body>

";
        // line 22
        if (array_key_exists("message", $context)) {
            // line 23
            echo "    <script type=\"text/javascript\">
        window.onload = function() {

            // create the notification
            var notification = new NotificationFx({
                message : '<span class=\"icon icon-megaphone\"></span><p>";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>',
                layout : 'bar',
                effect : 'slidetop',
                type : 'notice', // notice, warning or error
                onClose : function() {
                    bttn.disabled = false;
                }
            });

            // show the notification
            notification.show();

        }
    </script>
";
        }
        // line 43
        echo "<div class=\"container\">
    <header class=\"codrops-header\" style=\"margin-bottom: -100px\">
        <img class=\"center\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/Logo.jpg"), "html", null, true);
        echo " \" width=\"250px\"/><br><br>

    </header>
    <section>
        ";
        // line 49
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        // line 50
        echo "    </section>
</div>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
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
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwanuser/notification/js/notificationFx.js"), "html", null, true);
        echo "\"></script>
<hr>
<footer>
    <p align=\"center\"><strong>National Volunteering Secretariat, Sri Lanka </strong>&copy; 2014
</footer>
</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 76,  111 => 53,  107 => 52,  103 => 50,  101 => 49,  94 => 45,  90 => 43,  72 => 28,  65 => 23,  63 => 22,  55 => 17,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
