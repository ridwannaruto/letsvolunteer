<?php

/* RidwanUserBundle:Profile:photo.html.twig */
class __TwigTemplate_f1781b639018d25c6d055f1c44583f005a16a254da88bf5ccf5ca53f7acfb698 extends Twig_Template
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "

\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">
\t\t
\t\t\t
\t\t\t<noscript>
\t\t\t\t<div class=\"alert alert-block span10\">
\t\t\t\t\t<h4 class=\"alert-heading\">Warning!</h4>
\t\t\t\t\t<p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
\t\t\t\t</div>
\t\t\t</noscript>
                        <div id=\"content\" class=\"span10\">
\t\t\t<!-- content starts -->
\t\t\t
                        <div class=\"row-fluid\">
                            <div class=\"box span6 center\">
                                
\t\t\t\t\t<div class=\"box-header well\">
                                            
\t\t\t\t\t\t<h2> Upload Photo</h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content span12 center\">
\t\t\t\t\t\t
                                       
\t\t\t\t\t
                                                <div class=\"propic\" >
                                                    ";
        // line 35
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 36
            echo "                                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path"), "html", null, true);
            echo "\" width=\"300px\" height=\"300px\" style=\"border: 2px\">
                                                    ";
        } else {
            // line 38
            echo "                                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"300px\" height=\"300px\" style=\"border: 2px\">
                                                    ";
        }
        // line 40
        echo "                                                </div> <br>
                                                <form action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ridwan_profile_photo");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                                                    please upload a high quality photo in the resolution of 400 x 400<br>
                                                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                                    <br>
                                                   <input type=\"submit\" class='btn btn-success' value=\"Update\" />
                                                   
                                                </form>         
                                               
                                           
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t
                          
\t\t\t\t
\t\t\t</div><!--/row-->
\t\t\t
\t\t\t
                       
\t\t\t\t\t<!-- content ends -->
\t\t\t</div><!--/#content.span10-->
\t\t\t
\t\t\t\t</div><!--/fluid-row-->
\t\t
\t</div><!--/.fluid-container-->
       
        



";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Profile:photo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 43,  78 => 41,  75 => 40,  69 => 38,  63 => 36,  61 => 35,  31 => 7,  28 => 6,);
    }
}
