<?php

/* RidwanUserBundle:Welcome:employment.html.twig */
class __TwigTemplate_9f77f496d5a2fe4fb35aaf87cce46aa023fc31714893e740b2bd223e47cb1951 extends Twig_Template
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
        echo "<div id=\"content\" class=\"span10\">

    <div class=\"row-fluid\">
    <br><br>
    <div>
            <h1 style=\"color: white\">Employment Details</h1>
    </div>
    <br><br>
    <div class=\"pull-right\">
        <a><button class=\"btn-new btn btn-round btn-success\"><i class=\"icon-plus\"></i> Add work details </button></a>
        <a><button class=\"btn-continue btn btn-round btn-warning\"> Continue <i class=\"icon-arrow-right\"></i> </button></a>
    </div>
    <div class=\"box span12\">

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
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "            <tr>
                <td width=\"40%\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organization"), "html", null, true);
            echo "</td>
                <td width=\"20%\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organizationtype"), "html", null, true);
            echo "</td>
                <td width=\"30%\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "occupation"), "html", null, true);
            echo "</td>
                <td width=\"10%\">
                    <ul>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_education_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 42
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
        // line 48
        echo "
        </tbody>
    </table>
        </div>
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
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <div class=\"control-group primary\">
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Organization Name"));
        echo "

                <div class=\"controls\">
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization"), 'widget', array("attr" => array("placeholder" => "United Nations Volunteers")));
        echo "
                    <span class=\"help-inline\">";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization"), 'errors');
        echo "</span>
                </div>
            </div>
            <div class=\"control-group primary\">
                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationtype"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Type"));
        echo "

                <div class=\"controls\">
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationtype"), 'widget', array("attr" => array("placeholder" => "Government")));
        echo "
                    <span class=\"help-inline\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizationtype"), 'errors');
        echo "</span>
                </div>
            </div>
            <div class=\"control-group primary\">
                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "occupation"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "occupation"));
        echo "

                <div class=\"controls\">
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "occupation"), 'widget', array("attr" => array("placeholder" => "Secretary / CEO")));
        echo "
                    <span class=\"help-inline\">";
        // line 90
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
        // line 104
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
        // line 115
        if (((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")) == null)) {
            // line 116
            echo "            <p align=\"center\">You have not added any information regarding your employment history<br>Are you sure you want to skip?
            </p>

            ";
        } else {
            // line 120
            echo "                <p align=\"center\">Have you completed your employment details?
                </p>
            ";
        }
        // line 123
        echo "
        </div>
        <div class=\"modal-footer\">
            <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
            <a href=\"";
        // line 128
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
        return array (  167 => 89,  236 => 132,  223 => 124,  450 => 199,  438 => 89,  434 => 45,  425 => 13,  417 => 1,  411 => 202,  333 => 168,  190 => 89,  637 => 358,  615 => 344,  609 => 341,  606 => 340,  592 => 334,  588 => 333,  547 => 308,  543 => 306,  539 => 304,  533 => 301,  513 => 292,  506 => 289,  502 => 288,  443 => 247,  416 => 235,  412 => 234,  371 => 201,  350 => 191,  346 => 189,  311 => 159,  297 => 155,  239 => 131,  174 => 88,  150 => 81,  137 => 74,  23 => 3,  198 => 111,  345 => 165,  342 => 188,  317 => 145,  301 => 156,  291 => 137,  263 => 126,  188 => 104,  222 => 128,  211 => 108,  205 => 104,  197 => 88,  473 => 261,  470 => 246,  433 => 224,  429 => 223,  415 => 217,  406 => 214,  391 => 211,  382 => 208,  366 => 201,  357 => 198,  353 => 176,  327 => 173,  316 => 168,  308 => 165,  303 => 163,  296 => 160,  287 => 135,  261 => 127,  234 => 129,  228 => 104,  212 => 111,  206 => 108,  192 => 91,  170 => 49,  226 => 95,  216 => 113,  191 => 96,  178 => 97,  126 => 69,  100 => 48,  124 => 65,  58 => 20,  84 => 34,  76 => 32,  20 => 1,  153 => 62,  146 => 60,  113 => 54,  104 => 45,  97 => 39,  77 => 30,  134 => 57,  127 => 70,  81 => 30,  34 => 10,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 331,  575 => 143,  572 => 142,  566 => 139,  563 => 315,  556 => 136,  553 => 135,  551 => 310,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 295,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 90,  421 => 390,  419 => 236,  408 => 382,  403 => 196,  388 => 190,  383 => 188,  378 => 186,  373 => 184,  363 => 180,  358 => 178,  351 => 358,  347 => 357,  339 => 355,  335 => 354,  329 => 167,  324 => 349,  319 => 163,  304 => 157,  299 => 155,  289 => 151,  284 => 149,  279 => 147,  274 => 145,  249 => 135,  232 => 307,  200 => 277,  184 => 105,  181 => 92,  175 => 78,  172 => 91,  160 => 97,  155 => 83,  65 => 20,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 348,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 338,  594 => 335,  591 => 150,  589 => 149,  585 => 332,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 314,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 302,  532 => 127,  527 => 298,  525 => 125,  519 => 121,  517 => 120,  509 => 290,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 260,  452 => 75,  449 => 250,  445 => 117,  442 => 44,  436 => 13,  431 => 44,  428 => 1,  422 => 393,  420 => 2,  414 => 387,  404 => 383,  399 => 212,  394 => 379,  389 => 210,  369 => 369,  364 => 197,  359 => 365,  352 => 361,  348 => 174,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 166,  320 => 350,  310 => 346,  300 => 342,  290 => 158,  280 => 141,  275 => 332,  270 => 330,  260 => 326,  255 => 126,  250 => 322,  245 => 320,  233 => 109,  231 => 129,  185 => 100,  180 => 77,  165 => 66,  161 => 86,  148 => 74,  118 => 61,  114 => 57,  110 => 58,  90 => 49,  70 => 29,  343 => 356,  321 => 146,  315 => 348,  313 => 144,  295 => 138,  271 => 130,  265 => 328,  259 => 139,  256 => 154,  253 => 123,  244 => 133,  237 => 144,  225 => 125,  218 => 131,  215 => 123,  210 => 120,  207 => 107,  202 => 115,  53 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 200,  444 => 45,  440 => 148,  437 => 244,  435 => 13,  430 => 2,  427 => 1,  423 => 238,  413 => 384,  409 => 199,  407 => 131,  402 => 213,  398 => 194,  393 => 192,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 182,  365 => 111,  362 => 110,  360 => 199,  355 => 106,  341 => 170,  337 => 169,  322 => 101,  314 => 161,  312 => 167,  309 => 159,  305 => 142,  298 => 91,  294 => 153,  285 => 336,  283 => 156,  278 => 132,  268 => 85,  264 => 141,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 73,  220 => 117,  214 => 69,  177 => 65,  169 => 75,  140 => 72,  132 => 72,  128 => 46,  107 => 43,  61 => 32,  273 => 96,  269 => 143,  254 => 137,  243 => 137,  240 => 113,  238 => 119,  235 => 116,  230 => 305,  227 => 116,  224 => 156,  221 => 111,  219 => 110,  217 => 75,  208 => 109,  204 => 116,  179 => 79,  159 => 84,  143 => 80,  135 => 59,  119 => 55,  102 => 48,  71 => 34,  67 => 33,  63 => 25,  59 => 17,  93 => 44,  88 => 42,  78 => 40,  38 => 11,  28 => 3,  201 => 83,  196 => 105,  183 => 96,  171 => 90,  166 => 88,  163 => 67,  158 => 64,  156 => 67,  151 => 66,  142 => 59,  138 => 58,  136 => 71,  121 => 67,  117 => 50,  105 => 50,  91 => 46,  62 => 23,  49 => 14,  26 => 2,  87 => 41,  46 => 13,  44 => 15,  31 => 4,  94 => 41,  89 => 34,  85 => 42,  75 => 35,  68 => 34,  56 => 19,  24 => 6,  27 => 4,  25 => 1,  21 => 2,  19 => 1,  79 => 30,  72 => 24,  69 => 28,  47 => 18,  40 => 11,  37 => 11,  22 => 1,  246 => 113,  157 => 80,  145 => 78,  139 => 54,  131 => 53,  123 => 53,  120 => 49,  115 => 54,  111 => 53,  108 => 46,  101 => 45,  98 => 49,  96 => 35,  83 => 35,  74 => 25,  66 => 37,  55 => 16,  52 => 24,  50 => 14,  43 => 13,  41 => 12,  35 => 8,  32 => 5,  29 => 9,  209 => 113,  203 => 106,  199 => 101,  193 => 100,  189 => 99,  187 => 95,  182 => 99,  176 => 92,  173 => 78,  168 => 99,  164 => 72,  162 => 66,  154 => 82,  149 => 79,  147 => 76,  144 => 78,  141 => 55,  133 => 73,  130 => 56,  125 => 52,  122 => 64,  116 => 48,  112 => 47,  109 => 55,  106 => 50,  103 => 28,  99 => 45,  95 => 42,  92 => 36,  86 => 47,  82 => 39,  80 => 33,  73 => 29,  64 => 32,  60 => 31,  57 => 24,  54 => 16,  51 => 11,  48 => 17,  45 => 13,  42 => 12,  39 => 6,  36 => 5,  33 => 10,  30 => 9,);
    }
}
