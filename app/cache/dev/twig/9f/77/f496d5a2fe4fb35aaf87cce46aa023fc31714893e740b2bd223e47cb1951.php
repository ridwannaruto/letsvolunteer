<?php

/* RidwanUserBundle:Welcome:employment.html.twig */
class __TwigTemplate_9f77f496d5a2fe4fb35aaf87cce46aa023fc31714893e740b2bd223e47cb1951 extends Twig_Template
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
            <h1>Employment Details</h1>

    <hr><div class=\"pull-right\">
                <a><button class=\"btn-new btn btn-round btn-primary\"><i class=\"icon-plus\"></i> Add Qualification </button></a>
                <a><button class=\"btn-continue btn btn-round btn-success\"><i class=\"icon-arrow-right\"></i> Continue  </button></a>
            </div>
            <br><br>


    <div class=\"box-content\">


    <table class=\"table table-striped table-bordered bootstrap-datatable \" width=\"100%\">
        <thead >
        <tr>
            <th width=\"40%\">Organization</th>
            <th width=\"20%\">Type</th>
            <th width=\"30%\">Occupation</th>
            <th width=\"10%\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "            <tr>
                <td width=\"40%\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organization"), "html", null, true);
            echo "</td>
                <td width=\"20%\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organizationtype"), "html", null, true);
            echo "</td>
                <td width=\"30%\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "occupation"), "html", null, true);
            echo "</td>
                <td width=\"10%\">
                    <ul>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_education_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 44
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
        // line 50
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
            <h3>Add Employment</h3>
        </div>
        <div class=\"modal-body\">
            <p >Please fill the following details
            </p>

            ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <div class=\"control-group primary\">
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Organization Name"));
        echo "

                <div class=\"controls\">
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization"), 'widget', array("attr" => array("placeholder" => "United Nations Volunteers")));
        echo "
                    <span class=\"help-inline\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization"), 'errors');
        echo "</span>
                </div>
            </div>
            <div class=\"control-group primary\">
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationtype"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Type"));
        echo "

                <div class=\"controls\">
                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationtype"), 'widget', array("attr" => array("placeholder" => "Government")));
        echo "
                    <span class=\"help-inline\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationtype"), 'errors');
        echo "</span>
                </div>
            </div>
            <div class=\"control-group primary\">
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "occupation"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "occupation"));
        echo "

                <div class=\"controls\">
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "occupation"), 'widget', array("attr" => array("placeholder" => "Secretary / CEO")));
        echo "
                    <span class=\"help-inline\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "occupation"), 'errors');
        echo "</span>
                </div>
            </div>
         





        </div>
        <div class=\"modal-footer\">
                <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
                <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
            ";
        // line 106
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
        // line 117
        if (((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")) == null)) {
            // line 118
            echo "            <p align=\"center\">You have not added any information regarding your employment history<br>Are you sure you want to skip?
            </p>

            ";
        } else {
            // line 122
            echo "                <p align=\"center\">Have you completed your employment details?
                </p>
            ";
        }
        // line 125
        echo "
        </div>
        <div class=\"modal-footer\">
            <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
            <a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("ridwan_user_volunteer_skills");
        echo "\"> <input class=\"btn btn-primary\" value=\"continue\"></a>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:employment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 130,  221 => 125,  216 => 122,  210 => 118,  208 => 117,  194 => 106,  177 => 92,  173 => 91,  167 => 88,  160 => 84,  156 => 83,  150 => 80,  143 => 76,  139 => 75,  133 => 72,  127 => 69,  106 => 50,  94 => 44,  88 => 41,  81 => 37,  77 => 36,  73 => 35,  70 => 34,  66 => 33,  37 => 6,  34 => 5,  29 => 2,);
    }
}
