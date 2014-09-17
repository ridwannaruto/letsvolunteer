<?php

/* IsuruStatBundle:Default:index.html.twig */
class __TwigTemplate_753e81e19fb31f214938508927198670a8ebac9ebcd04def36d104a41412d675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<style>
        #panel{
            margin-top: 30px;
            margin-left: 20px;
            margin-right: 20px;
        }
        #internal-panel{

        }
        #sub-panel{
            text-align: center;
            margin-left: 0px;
            margin-right:0px;
        }
        #panel-button{
            display: block;
            width: 100px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }
        #panel-title{
            text-align: center;

        }
        #panel-body{
            margin-right: auto;
            margin-left: 25px;
        }
        #myModalLabel{
            text-align: center;
        }
        #swt{
            margin-left: auto;
        }
        #attribute{
            margin: 0px;
        }
        #chkbx{

        }
    </style>
";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        // line 48
        echo "    <div id=\"content\" class=\"span10\">
        <div class=\"row-fluid\">

            <div class=\"box span12\">

                <div class=\"box-content\">
                    <div id=\"panel\">
                        <div class=\"panel panel-info\">
                            <div class=\"panel-heading\">

                            </div>
                            <div class=\"panel-body\">
                                <div  id=\"panel-body\" >
                                    <div class=\"row\">


                            ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 65
            echo "
                                    ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 67
                echo "                                        <a data-rel=\"tooltip\" class=\"well span3 top-block\" href=\"#\" data-original-title=\"click to get statistics\">
                                            <span class=\"icon32 icon-color icon-pdf\"></span><br>
                                            <div>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), ((3 * (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) + (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j"))), array(), "array"), "html", null, true);
                echo "</div>
                                            <button id=\"panel-button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")), ((3 * (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) + (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j"))), array(), "array"), "html", null, true);
                echo "\">
                                                Generate
                                            </button>

                                        </a>

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "

                                            <div class=\"modal hide fade\" id=\"Individual\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">

                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\"></span></button>
                                                            <h3>Individual Information</h3>
                                                        </div>

                                                        <div class=\"modal-body\">
                                                            <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("isuru_stat_individual");
        echo "\" target=\"_blank\" onsubmit=\"return validate(1)\">

                                                                <div class=\"control-group primary\">
                                                                    <label class=\"control-label required\">National ID</label>

                                                                        <select name ='id' class=\"controls chzn-done\">
                                                                            ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["volid"]) ? $context["volid"] : $this->getContext($context, "volid")));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 97
            echo "                                                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "nicORpassport"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "nicORpassport"), "html", null, true);
            echo "</option>
                                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
                                                                        </select> <span class=\"help-inline\"> </span>

                                                                </div>

                                                ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["individualModalAttribute"]) ? $context["individualModalAttribute"] : $this->getContext($context, "individualModalAttribute")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["iMAttribute"]) {
            // line 105
            echo "
                                                    <label>
                                                        <input type=\"checkbox\" class=\"switch-input\" name=\"check_list1[]\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" checked>
                                                        <span  class=\"switch-label\" data-on=\"On\" data-off=\"Off\"></span>
                                                        <span class=\"switch-handle\"></span>
                                                        <strong>";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["iMAttribute"]) ? $context["iMAttribute"] : $this->getContext($context, "iMAttribute")), "html", null, true);
            echo "</strong>
                                                    </label>
                                                                    <!--  <div class=\"row\">
                                                                         <div id=\"attribute\" class=\"col-md-6\">-->

                                                                    <!--  </div>
                                                                      <div class=\"col-md-4\">
                                                                          <div id =\"swt\" class=\"container\">
                                                                              <label class=\"switch\">-->

                                                                    <!--    </label>
                                                                    </div>
                                                                    <!--    </div>
                                                                    </div>-->
                                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iMAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "



                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">View Report</button>
                                                            </div>
                                                            </form>

                                                    </div>
                                                </div>

                                                <div class=\"modal fade\" id=\"Overall\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\"></span></button>
                                                                <h3>Overall Information</h3>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <form class=\"form-inline\" role=\"form\" method=\"post\" action=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("isuru_stat_overall");
        echo "\" target=\"_blank\" onsubmit=\"return validate(2)\">


                                                ";
        // line 150
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["overallModalAttribute"]) ? $context["overallModalAttribute"] : $this->getContext($context, "overallModalAttribute")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["oMAttribute"]) {
            // line 151
            echo "


                                                                    <input type=\"checkbox\" class=\"switch-input\" name=\"check_list2[]\" value=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" checked>
                                                                    <span  class=\"switch-label\" data-on=\"On\" data-off=\"Off\"></span>
                                                                    <span class=\"switch-handle\"></span>
                                                                    <strong>";
            // line 157
            echo twig_escape_filter($this->env, (isset($context["oMAttribute"]) ? $context["oMAttribute"] : $this->getContext($context, "oMAttribute")), "html", null, true);
            echo "</strong><br>

                                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oMAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "

                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">View Report</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"modal fade\" id=\"Monthly\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\"></span></button>
                                                                <h3>Monthly Information</h3>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <form class=\"form-inline\" role=\"form\" method=\"post\" action=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("isuru_stat_monthly");
        echo "\" target=\"_blank\" onsubmit=\"return validate(3)\">

                                                ";
        // line 182
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monthlyModalAttribute"]) ? $context["monthlyModalAttribute"] : $this->getContext($context, "monthlyModalAttribute")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["mMAttribute"]) {
            // line 183
            echo "


                                                                    <input type=\"checkbox\" class=\"switch-input\" name=\"check_list3[]\" value=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" checked>
                                                                    <span  class=\"switch-label\" data-on=\"On\" data-off=\"Off\"></span>
                                                                    <span class=\"switch-handle\"></span><strong>";
            // line 188
            echo twig_escape_filter($this->env, (isset($context["mMAttribute"]) ? $context["mMAttribute"] : $this->getContext($context, "mMAttribute")), "html", null, true);
            echo "</strong><br>

                                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mMAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">View Report</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"modal fade\" id=\"District\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\"></span></button>
                                                                <h3>District Information</h3>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <form class=\"form-inline\" role=\"form\" method=\"post\" action=\"";
        // line 210
        echo $this->env->getExtension('routing')->getPath("isuru_stat_district");
        echo "\" target=\"_blank\" onsubmit=\"return validate(4)\">

                                                                    <div class=\"control-group primary\">
                                                                        <label class=\"control-label required\">Select District</label>

                                                                        <select name ='district' class=\"form-control custom\">
                                                                            ";
        // line 216
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["districts"]) ? $context["districts"] : $this->getContext($context, "districts")));
        foreach ($context['_seq'] as $context["_key"] => $context["district"]) {
            // line 217
            echo "                                                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["district"]) ? $context["district"] : $this->getContext($context, "district")), "district"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["district"]) ? $context["district"] : $this->getContext($context, "district")), "district"), "html", null, true);
            echo "</option>
                                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['district'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "
                                                                        </select>  <span class=\"help-inline\"> </span>

                                                                    </div>


                                                ";
        // line 225
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["districtModalAttribute"]) ? $context["districtModalAttribute"] : $this->getContext($context, "districtModalAttribute")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["dMAttribute"]) {
            // line 226
            echo "


                                                                        <input type=\"checkbox\" class=\"switch-input\" name=\"check_list4[]\" value=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" checked>
                                                                        <span  class=\"switch-label\" data-on=\"On\" data-off=\"Off\"></span>
                                                                        <span class=\"switch-handle\"></span>
                                                                         <strong>";
            // line 232
            echo twig_escape_filter($this->env, (isset($context["dMAttribute"]) ? $context["dMAttribute"] : $this->getContext($context, "dMAttribute")), "html", null, true);
            echo "</strong><br>
                                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dMAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">View Reports</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"modal fade\" id=\"Profession\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\"></span></button>
                                                                    <h3>Profession Information</h3>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <form class=\"form-inline\" role=\"form\" method=\"post\" action=\"";
        // line 253
        echo $this->env->getExtension('routing')->getPath("isuru_stat_profession");
        echo "\" target=\"_blank\" onsubmit=\"return validate(5)\">

                                                                        <div class=\"control-group primary\">
                                                                            <label class=\"control-label required\">Select Profession</label>

                                                                            <select name ='profession' class=\"form-control custom\">
                                                                                ";
        // line 259
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["professions"]) ? $context["professions"] : $this->getContext($context, "professions")));
        foreach ($context['_seq'] as $context["_key"] => $context["profession"]) {
            // line 260
            echo "                                                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profession"]) ? $context["profession"] : $this->getContext($context, "profession")), "occupation"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profession"]) ? $context["profession"] : $this->getContext($context, "profession")), "occupation"), "html", null, true);
            echo "</option>
                                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profession'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "
                                                                            </select>  <span class=\"help-inline\"> </span>

                                                                        </div>


                                                ";
        // line 268
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["professionModalAttribute"]) ? $context["professionModalAttribute"] : $this->getContext($context, "professionModalAttribute")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pMAttribute"]) {
            // line 269
            echo "


                                                                            <input type=\"checkbox\" class=\"switch-input\" name=\"check_list5[]\" value=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" checked>
                                                                            <span  class=\"switch-label\" data-on=\"On\" data-off=\"Off\"></span>
                                                                            <span class=\"switch-handle\"></span><strong>";
            // line 274
            echo twig_escape_filter($this->env, (isset($context["pMAttribute"]) ? $context["pMAttribute"] : $this->getContext($context, "pMAttribute")), "html", null, true);
            echo "</strong><br>

                                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pMAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">View Reports</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=\"modal fade\" id=\"Gender\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                                                        <h2 class=\"modal-title\" id=\"myModalLabel\">Gender Information</h2>
                                                                    </div>
                                                                    <div class=\"modal-body\">
                                                                        <form class=\"form-inline\" role=\"form\" method=\"post\" action=\"";
        // line 296
        echo $this->env->getExtension('routing')->getPath("isuru_stat_gender");
        echo "\" target=\"_blank\" onsubmit=\"return validate(6)\">

                                                ";
        // line 298
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genderModalAttribute"]) ? $context["genderModalAttribute"] : $this->getContext($context, "genderModalAttribute")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["gMAttribute"]) {
            // line 299
            echo "
                                                                            <h6>";
            // line 300
            echo twig_escape_filter($this->env, (isset($context["gMAttribute"]) ? $context["gMAttribute"] : $this->getContext($context, "gMAttribute")), "html", null, true);
            echo "</h6>

                                                                            <input type=\"checkbox\" class=\"switch-input\" name=\"check_list6[]\" value=\"";
            // line 302
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" checked>
                                                                            <span  class=\"switch-label\" data-on=\"On\" data-off=\"Off\"></span>
                                                                            <span class=\"switch-handle\"></span>

                                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gMAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">View Reports</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  


";
    }

    // line 331
    public function block_javascripts($context, array $blocks = array())
    {
        // line 332
        echo "                    <script>
            //validate user input before submit
            function validate(value){
                var selected = false;
                var checkbox = document.getElementsByName(\"check_list\"+value+\"[]\");
                for(var i in checkbox){
                        if(checkbox[i].checked == true){
                                selected = true;
                                return true;
                            }
                    }
                    if(selected == false){
                        try{
                        alert(\"You should select at least one choice\");
                        }catch(e){
                                    
                            }
                        return false;
                        }
            }
                        </script>
";
    }

    public function getTemplateName()
    {
        return "IsuruStatBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 332,  675 => 331,  649 => 307,  630 => 302,  625 => 300,  622 => 299,  605 => 298,  600 => 296,  579 => 277,  562 => 274,  557 => 272,  552 => 269,  535 => 268,  527 => 262,  516 => 260,  512 => 259,  503 => 253,  482 => 234,  466 => 232,  460 => 229,  455 => 226,  438 => 225,  430 => 219,  419 => 217,  415 => 216,  406 => 210,  385 => 191,  368 => 188,  363 => 186,  358 => 183,  341 => 182,  336 => 180,  314 => 160,  297 => 157,  291 => 154,  286 => 151,  269 => 150,  263 => 147,  239 => 125,  210 => 110,  204 => 107,  200 => 105,  183 => 104,  176 => 99,  165 => 97,  161 => 96,  152 => 90,  139 => 79,  132 => 77,  119 => 70,  115 => 69,  111 => 67,  107 => 66,  104 => 65,  100 => 64,  82 => 48,  79 => 47,  33 => 4,  30 => 3,);
    }
}
