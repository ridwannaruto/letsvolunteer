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
                <div id=\"panel-title\" class=\"box-header well\">Select Category</div>
                <div class=\"box-content\">
                    <div id=\"panel\">
                        <div class=\"panel panel-info\">
                            <div class=\"panel-heading\">

                            </div>
                            <div class=\"panel-body\">
                                <div  id=\"panel-body\" >
                                    <div class=\"row\">

                            ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            echo "
                                    ";
            // line 65
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 66
                echo "                                        <div class=\"box span3\">
                                            <div class=\"col-md-4\">
                                                <div  id=\"sub-panel\">
                                                    <div class=\"panel panel-default\">
                                                        <div class=\"panel-body\">
                                                ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), ((3 * (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) + (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j"))), array(), "array"), "html", null, true);
                echo "
                                                            </div>
                                                            <button id=\"panel-button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")), ((3 * (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) + (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j"))), array(), "array"), "html", null, true);
                echo "\">
                                                                Go
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "

                                            <div class=\"modal fade\" id=\"Individual\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                                            <h2 class=\"modal-title\" id=\"myModalLabel\">Individual Information</h2>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <form class=\"form-inline\" role=\"form\" method=\"post\" action=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("isuru_stat_individual");
        echo "\" target=\"_blank\" onsubmit=\"return validate(1)\">
                                                                <div>
                                                                    <select name ='id' class=\"form-control custom\">
                                                                        ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["volid"]) ? $context["volid"] : $this->getContext($context, "volid")));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 98
            echo "                                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "nicORpassport"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "nicORpassport"), "html", null, true);
            echo "</option>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
                                                                        </select> 
                                                                    </div>



                                                ";
        // line 106
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
            // line 107
            echo "                                                                    <!--  <div class=\"row\">
                                                                         <div id=\"attribute\" class=\"col-md-6\">-->
                                                                    <h6>";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["iMAttribute"]) ? $context["iMAttribute"] : $this->getContext($context, "iMAttribute")), "html", null, true);
            echo "</h6>
                                                                    <!--  </div>
                                                                      <div class=\"col-md-4\">
                                                                          <div id =\"swt\" class=\"container\">
                                                                              <label class=\"switch\">-->
                                                                    <input type=\"checkbox\" class=\"switch-input\" name=\"check_list1[]\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" checked>
                                                                    <span  class=\"switch-label\" data-on=\"On\" data-off=\"Off\"></span>
                                                                    <span class=\"switch-handle\"></span>
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
        // line 122
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

                                                <div class=\"modal fade\" id=\"Overall\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                                                <h2 class=\"modal-title\" id=\"myModalLabel\">Overall Information</h2>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <form class=\"form-inline\" role=\"form\" method=\"post\" action=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("isuru_stat_overall");
        echo "\" target=\"_blank\" onsubmit=\"return validate(2)\">


                                                ";
        // line 147
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
            // line 148
            echo "
                                                                    <h6>";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["oMAttribute"]) ? $context["oMAttribute"] : $this->getContext($context, "oMAttribute")), "html", null, true);
            echo "</h6>

                                                                    <input type=\"checkbox\" class=\"switch-input\" name=\"check_list2[]\" value=\"";
            // line 151
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oMAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
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
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                                                <h2 class=\"modal-title\" id=\"myModalLabel\">Monthly Information</h2>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <form class=\"form-inline\" role=\"form\" method=\"post\" action=\"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("isuru_stat_monthly");
        echo "\" target=\"_blank\" onsubmit=\"return validate(3)\">

                                                ";
        // line 178
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
            // line 179
            echo "
                                                                    <h6>";
            // line 180
            echo twig_escape_filter($this->env, (isset($context["mMAttribute"]) ? $context["mMAttribute"] : $this->getContext($context, "mMAttribute")), "html", null, true);
            echo "</h6>

                                                                    <input type=\"checkbox\" class=\"switch-input\" name=\"check_list3[]\" value=\"";
            // line 182
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mMAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
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
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                                                <h2 class=\"modal-title\" id=\"myModalLabel\">District Information</h2>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <form class=\"form-inline\" role=\"form\" method=\"post\" action=\"";
        // line 206
        echo $this->env->getExtension('routing')->getPath("isuru_stat_district");
        echo "\" target=\"_blank\" onsubmit=\"return validate(4)\">
                                                                    <div>
                                                                        <select name ='district' class=\"form-control custom\">
                                                                        ";
        // line 209
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["districts"]) ? $context["districts"] : $this->getContext($context, "districts")));
        foreach ($context['_seq'] as $context["_key"] => $context["district"]) {
            // line 210
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
        // line 212
        echo "
                                                                            </select> 
                                                                        </div>

                                                ";
        // line 216
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
            // line 217
            echo "
                                                                        <h6>";
            // line 218
            echo twig_escape_filter($this->env, (isset($context["dMAttribute"]) ? $context["dMAttribute"] : $this->getContext($context, "dMAttribute")), "html", null, true);
            echo "</h6>

                                                                        <input type=\"checkbox\" class=\"switch-input\" name=\"check_list4[]\" value=\"";
            // line 220
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dMAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
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
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                                                    <h2 class=\"modal-title\" id=\"myModalLabel\">Profession Information</h2>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <form class=\"form-inline\" role=\"form\" method=\"post\" action=\"";
        // line 244
        echo $this->env->getExtension('routing')->getPath("isuru_stat_profession");
        echo "\" target=\"_blank\" onsubmit=\"return validate(5)\">

                                                                        <div>
                                                                            <select name ='profession' class=\"form-control custom\">
                                                                        ";
        // line 248
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["professions"]) ? $context["professions"] : $this->getContext($context, "professions")));
        foreach ($context['_seq'] as $context["_key"] => $context["profession"]) {
            // line 249
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
        // line 251
        echo "
                                                                                </select> 
                                                                            </div>    

                                                ";
        // line 255
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
            // line 256
            echo "
                                                                            <h6>";
            // line 257
            echo twig_escape_filter($this->env, (isset($context["pMAttribute"]) ? $context["pMAttribute"] : $this->getContext($context, "pMAttribute")), "html", null, true);
            echo "</h6>

                                                                            <input type=\"checkbox\" class=\"switch-input\" name=\"check_list5[]\" value=\"";
            // line 259
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pMAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
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
        // line 283
        echo $this->env->getExtension('routing')->getPath("isuru_stat_gender");
        echo "\" target=\"_blank\" onsubmit=\"return validate(6)\">

                                                ";
        // line 285
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
            // line 286
            echo "
                                                                            <h6>";
            // line 287
            echo twig_escape_filter($this->env, (isset($context["gMAttribute"]) ? $context["gMAttribute"] : $this->getContext($context, "gMAttribute")), "html", null, true);
            echo "</h6>

                                                                            <input type=\"checkbox\" class=\"switch-input\" name=\"check_list6[]\" value=\"";
            // line 289
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
        // line 294
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

    // line 317
    public function block_javascripts($context, array $blocks = array())
    {
        // line 318
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
        return array (  664 => 318,  661 => 317,  636 => 294,  617 => 289,  612 => 287,  609 => 286,  592 => 285,  587 => 283,  566 => 264,  547 => 259,  542 => 257,  539 => 256,  522 => 255,  516 => 251,  505 => 249,  501 => 248,  494 => 244,  473 => 225,  454 => 220,  449 => 218,  446 => 217,  429 => 216,  423 => 212,  412 => 210,  408 => 209,  402 => 206,  381 => 187,  362 => 182,  357 => 180,  354 => 179,  337 => 178,  332 => 176,  310 => 156,  291 => 151,  286 => 149,  283 => 148,  266 => 147,  260 => 144,  236 => 122,  214 => 114,  206 => 109,  202 => 107,  185 => 106,  177 => 100,  166 => 98,  162 => 97,  156 => 94,  144 => 84,  137 => 82,  122 => 73,  117 => 71,  110 => 66,  106 => 65,  103 => 64,  99 => 63,  82 => 48,  79 => 47,  33 => 4,  30 => 3,);
    }
}
