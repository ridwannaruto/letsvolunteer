<?php

/* RidwanUserBundle:Welcome:referees.html.twig */
class __TwigTemplate_c2841a693fc9b6ebbeac5629bbc4aa05267493a7a532ee8b0caa229cd6cfdae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'dashboard' => array($this, 'block_dashboard'),
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

    // line 2
    public function block_dashboard($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"content\" class=\"span10\">

        <div class=\"row-fluid\">
            <br><br>

                <h1>Referees</h1><hr>

            <br><br>


                    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <table>
                <tr>
                    <td width ='5%'></td>
                    <td width ='40%'>
                        <h3>Referee 1</h3>

                        <div class=\"control-group primary\">
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "name"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Name"));
        echo "

                            <div class=\"controls\">
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "name"), 'widget', array("attr" => array("placeholder" => "Nihal Perera")));
        echo "
                                <span class=\"help-inline\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "name"), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <div class=\"control-group primary\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "address"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Address"));
        echo "

                            <div class=\"controls\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "address"), 'widget', array("attr" => array("placeholder" => "No X, Main Street, Colombo")));
        echo "
                                <span class=\"help-inline\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "address"), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <div class=\"control-group primary\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "

                            <div class=\"controls\">
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "email"), 'widget', array("attr" => array("placeholder" => "nihal@nvs.lk")));
        echo "
                                <span class=\"help-inline\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "email"), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <div class=\"control-group primary\">
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "contactnumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Phone Number"));
        echo "

                            <div class=\"controls\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "contactnumber"), 'widget', array("attr" => array("placeholder" => "0xx-xxxxxxx")));
        echo "
                                <span class=\"help-inline\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "contactnumber"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "mobilenumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mobile Number"));
        echo "

                            <div class=\"controls\">
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "mobilenumber"), 'widget', array("attr" => array("placeholder" => "07x-xxxxxxx")));
        echo "
                                <span class=\"help-inline\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 0, array(), "array"), "mobilenumber"), 'errors');
        echo "</span>
                            </div>
                        </div>

                    </td>
                    <td width ='10%'></td>
                    <td width ='40%'>

                        <h3>Referee 2</h3>

                        <div class=\"control-group primary\">
                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "name"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Name"));
        echo "

                            <div class=\"controls\">
                                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "name"), 'widget', array("attr" => array("placeholder" => "Nihal Perera")));
        echo "
                                <span class=\"help-inline\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "name"), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <div class=\"control-group primary\">
                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "address"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Address"));
        echo "

                            <div class=\"controls\">
                                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "address"), 'widget', array("attr" => array("placeholder" => "No X, Main Street, Colombo")));
        echo "
                                <span class=\"help-inline\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "address"), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <div class=\"control-group primary\">
                            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "

                            <div class=\"controls\">
                                ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "email"), 'widget', array("attr" => array("placeholder" => "nihal@nvs.lk")));
        echo "
                                <span class=\"help-inline\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "email"), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <div class=\"control-group primary\">
                            ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "contactnumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Phone Number"));
        echo "

                            <div class=\"controls\">
                                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "contactnumber"), 'widget', array("attr" => array("placeholder" => "0xx-xxxxxxx")));
        echo "
                                <span class=\"help-inline\">";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "contactnumber"), 'errors');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"control-group primary\">
                            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "mobilenumber"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mobile Number"));
        echo "

                            <div class=\"controls\">
                                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "mobilenumber"), 'widget', array("attr" => array("placeholder" => "07x-xxxxxxx")));
        echo "
                                <span class=\"help-inline\">";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "referees"), 1, array(), "array"), "mobilenumber"), 'errors');
        echo "</span>
                            </div>
                        </div>


                    </td>
                    <td width ='5%'></td>

                </tr>

            </table>
            <br><br>
            <div class=\"center span4\"><button type=\"submit\" class=\"btn span12 btn-success\">Submit</button></div>



            ";
        // line 125
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>

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
        return array (  252 => 125,  233 => 109,  229 => 108,  223 => 105,  215 => 100,  211 => 99,  205 => 96,  198 => 92,  194 => 91,  188 => 88,  181 => 84,  177 => 83,  171 => 80,  164 => 76,  160 => 75,  154 => 72,  140 => 61,  136 => 60,  130 => 57,  122 => 52,  118 => 51,  112 => 48,  105 => 44,  101 => 43,  95 => 40,  88 => 36,  84 => 35,  78 => 32,  71 => 28,  67 => 27,  61 => 24,  49 => 15,  37 => 5,  34 => 4,  29 => 2,);
    }
}
