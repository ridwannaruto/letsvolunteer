<?php

/* RidwanUserBundle:Welcome:referees.html.twig */
class __TwigTemplate_c2841a693fc9b6ebbeac5629bbc4aa05267493a7a532ee8b0caa229cd6cfdae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RidwanUserBundle:Welcome:index2.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RidwanUserBundle:Welcome:index2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\" class=\"span10\">

        <div class=\"row-fluid\">
            <br><br>
            <div>
                <h1 style=\"color: white\">Referees</h1>
            </div>
            <br><br>
            <div class=\"pull-right\">
                <a><button class=\"btn-new btn btn-round btn-primary\"><i class=\"icon-plus\"></i> Add Referees</button></a>
            </div>
            <div class=\"box span12 \">
                <div class=\"box-content center\">
                    <br>
                    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                    <div class=\"control-group primary\">
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referee1"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Referee 1"));
        echo "

                        <div class=\"controls\">
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referee1"), 'widget', array("attr" => array("placeholder" => "University of Moratuwa")));
        echo "
                            <span class=\"help-inline\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referee1"), 'errors');
        echo "</span>
                        </div>
                    </div>
                    <div class=\"control-group primary\">
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referee2"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Referee 2"));
        echo "

                        <div class=\"controls\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referee2"), 'widget', array("attr" => array("placeholder" => "University of Moratuwa")));
        echo "
                            <span class=\"help-inline\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referee2"), 'errors');
        echo "</span>
                        </div>
                    </div>
                    <div class=\"control-group primary\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referee2"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "

                        <div class=\"controls\">
                            <input class='btn btn-success btn-large ' type=\"submit\" value = 'Submit'>
                            <span class=\"help-inline\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referee2"), 'errors');
        echo "</span>
                        </div>
                    </div>

                    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



                </div>
            </div>
        </div>

    </div>
    </div>

    <div class=\"modal hide fade\" id=\"new\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Add Referee</h3>
        </div>
        <div class=\"modal-body\">
            <p >Please fill the following details
            </p>

            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start');
        echo "

            <div class=\"control-group primary\">
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "name"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Name"));
        echo "

                <div class=\"controls\">
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "name"), 'widget', array("attr" => array("placeholder" => "Nihal Perera")));
        echo "
                    <span class=\"help-inline\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "name"), 'errors');
        echo "</span>
                </div>
            </div>
            <div class=\"control-group primary\">
                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "address"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Address"));
        echo "

                <div class=\"controls\">
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "address"), 'widget', array("attr" => array("placeholder" => "No X, Main Street, Colombo")));
        echo "
                    <span class=\"help-inline\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "address"), 'errors');
        echo "</span>
                </div>
            </div>
            <div class=\"control-group primary\">
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "

                <div class=\"controls\">
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "email"), 'widget', array("attr" => array("placeholder" => "Engineering / Mathematics")));
        echo "
                    <span class=\"help-inline\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "email"), 'errors');
        echo "</span>
                </div>
            </div>
            <div class=\"control-group primary\">
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "contactnumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Phone"));
        echo "

                <div class=\"controls\">
                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "contactnumber"), 'widget', array("attr" => array("placeholder" => "0xx-xxxxxxx")));
        echo "
                    <span class=\"help-inline\">";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "contactnumber"), 'errors');
        echo "</span>
                </div>
            </div>

            <div class=\"control-group primary\">
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "mobilenumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Phone"));
        echo "

                <div class=\"controls\">
                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "mobilenumber"), 'widget', array("attr" => array("placeholder" => "07x-xxxxxxx")));
        echo "
                    <span class=\"help-inline\">";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "mobilenumber"), 'errors');
        echo "</span>
                </div>
            </div>

        </div>

        <div class=\"modal-footer\">
            <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
            <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
            ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
        echo "

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:referees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 115,  209 => 105,  205 => 104,  199 => 101,  191 => 96,  187 => 95,  181 => 92,  174 => 88,  170 => 87,  164 => 84,  157 => 80,  153 => 79,  147 => 76,  140 => 72,  136 => 71,  130 => 68,  124 => 65,  101 => 45,  94 => 41,  87 => 37,  80 => 33,  76 => 32,  70 => 29,  63 => 25,  59 => 24,  53 => 21,  47 => 18,  31 => 4,  28 => 3,);
    }
}
