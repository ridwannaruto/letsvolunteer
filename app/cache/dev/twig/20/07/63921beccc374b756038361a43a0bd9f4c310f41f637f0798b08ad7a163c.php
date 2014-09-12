<?php

/* RidwanUserBundle:Welcome:education.html.twig */
class __TwigTemplate_200763921beccc374b756038361a43a0bd9f4c310f41f637f0798b08ad7a163c extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div id=\"content\" class=\"span10\">

    <div class=\"row-fluid\">
        <br>
        <h1>Educational Qualifications</h1>
        <hr>


    <div class=\"pull-right\">
        <a><button class=\"btn-new btn btn-round btn-primary\"><i class=\"icon-plus\"></i> Add Qualification </button></a>
        <a><button class=\"btn-continue btn btn-round btn-success\"><i class=\"icon-arrow-right\"></i> Continue  </button></a>
    </div>
        <br><br>


    <div class=\"box-content\">


    <table class=\"table table-striped table-bordered bootstrap-datatable \" width=\"100%\">
        <thead >
        <tr>
            <th width=\"30%\">Institution</th>
            <th width=\"10%\">Degree</th>
            <th width=\"30%\">Field</th>
            <th width=\"10%\">Duration</th>
            <th width=\"20%\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["qualifications"]) ? $context["qualifications"] : $this->getContext($context, "qualifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "            <tr>
                <td width=\"30%\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "institution"), "html", null, true);
            echo "</td>
                <td width=\"30%\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "degree"), "html", null, true);
            echo "</td>
                <td width=\"10%\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "field"), "html", null, true);
            echo "</td>
                <td width=\"10%\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duration"), "html", null, true);
            echo "</td>
                <td width=\"20%\">
                    <ul>
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_education_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_education_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
        </tbody>
    </table>
        </div>

    </div>

</div>
    </div>

    <div class=\"modal hide fade\" id=\"new\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Add qualification</h3>
        </div>
        <div class=\"modal-body\">
            <p >Please fill the following details
            </p>

            ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <div class=\"control-group primary\">
                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "institution"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Institution Name"));
        echo "

                <div class=\"controls\">
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "institution"), 'widget', array("attr" => array("placeholder" => "University of Moratuwa")));
        echo "
                    <span class=\"help-inline\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "institution"), 'errors');
        echo "</span>
                </div>
            </div>
            <div class=\"control-group primary\">
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "degree"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Level of Study"));
        echo "

                <div class=\"controls\">
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "degree"), 'widget', array("attr" => array("placeholder" => "University of Moratuwa")));
        echo "
                    <span class=\"help-inline\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "degree"), 'errors');
        echo "</span>
                </div>
            </div>
            <div class=\"control-group primary\">
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "field"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Field"));
        echo "

                <div class=\"controls\">
                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "field"), 'widget', array("attr" => array("placeholder" => "Engineering / Mathematics")));
        echo "
                    <span class=\"help-inline\">";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "field"), 'errors');
        echo "</span>
                </div>
            </div>
            <div class=\"control-group primary\">
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duration"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Duration"));
        echo "

                <div class=\"controls\">
                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duration"), 'widget', array("attr" => array("placeholder" => "2010-2014")));
        echo "
                    <span class=\"help-inline\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duration"), 'errors');
        echo "</span>
                </div>
            </div>





        </div>
        <div class=\"modal-footer\">
                <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
                <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
            ";
        // line 117
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
    </div>

    <div class=\"modal hide fade\" id=\"continue\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Are you sure?</h3>
        </div>
        <div class=\"modal-body\">
            ";
        // line 128
        if (((isset($context["qualifications"]) ? $context["qualifications"] : $this->getContext($context, "qualifications")) == null)) {
            // line 129
            echo "            <p align=\"center\">You have not added any information regarding your educational background<br>Are you sure you want to skip?
            </p>

            ";
        } else {
            // line 133
            echo "                <p align=\"center\">Have you completed your educational qualifications?
                </p>
            ";
        }
        // line 136
        echo "
        </div>
        <div class=\"modal-footer\">
            <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
            <a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("ridwan_user_volunteer_employment");
        echo "\"> <input class=\"btn btn-primary\" value=\"continue\"></a>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:education.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 141,  244 => 136,  239 => 133,  233 => 129,  231 => 128,  217 => 117,  201 => 104,  197 => 103,  191 => 100,  184 => 96,  180 => 95,  174 => 92,  167 => 88,  163 => 87,  157 => 84,  150 => 80,  146 => 79,  140 => 76,  134 => 73,  113 => 54,  101 => 48,  95 => 45,  88 => 41,  84 => 40,  80 => 39,  76 => 38,  73 => 37,  69 => 36,  37 => 6,  34 => 5,  29 => 2,);
    }
}
