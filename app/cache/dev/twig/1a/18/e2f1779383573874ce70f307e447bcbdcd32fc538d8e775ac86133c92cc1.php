<?php

/* RidwanProjectBundle:Projects:index.html.twig */
class __TwigTemplate_1a18e2f1779383573874ce70f307e447bcbdcd32fc538d8e775ac86133c92cc1 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"content\" class=\"span10\">

    ";
        // line 7
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"), 0, array(), "array") == "ORGANIZATION")) {
            // line 8
            echo "    <div class=\"row-fluid\">
        <div class=\"pull-right\">
            <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("ridwan_project_new");
            echo "\"><button class=\"btn btn-round btn-success\"><i class=\"icon-plus\"></i> New Project </button></a>
           
        </div>
    </div><br>
                ";
        }
        // line 15
        echo "
    <div class=\"row-fluid\">

        <div class=\"box span12\">

            <div class=\"box-header well\" data-original-title>

                <h2><i class=\"icon-edit\"></i> Ongoing Projects</h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                <br>

                <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                    <thead>
                        <tr>
                            <th width=\"15%\">Project</th>
                            <th width=\"30%\">Objectives</th>
                            <th width=\"40%\">Description</th>
                            <th width=\"15%\">Expected End Date</th> 

                        </tr>
                    </thead>   

                    <tbody>
\t\t\t\t\t\t\t   ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["IProjects"]) ? $context["IProjects"] : $this->getContext($context, "IProjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 46
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_project_details", array("projectID" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name"), "html", null, true);
            echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "cause"), "html", null, true);
            echo "
                            </td>
                            <td class=\"center\"> 
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "description"), "html", null, true);
            echo "
                            </td>
                            
                            <td class=\"center\"> 
                                ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "proposedenddate"), "html", null, true);
            echo "
                            </td>
                                                                 
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </tbody>
                </table>            
            </div>

        </div>

        <div class=\"row-fluid\">
            <div class=\"box span12\">
                <div class=\"box-header well\" data-original-title>
                    <h2><i class=\"icon-edit\"></i> Completed Projects</h2>
                    <div class=\"box-icon\">

                        <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                    </div>
                </div>
                <div class=\"box-content\">
                    <br>

                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">

                        <thead>
                            <tr>
                             <th width=\"15%\">Project</th>
                            <th width=\"30%\">Objectives</th>
                            <th width=\"40%\">Description</th>
                            <th width=\"15%\">Expected End Date</th> 

                            </tr>
                        </thead>   

                        <tbody>
\t\t\t\t\t\t\t   ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Projects"]) ? $context["Projects"] : $this->getContext($context, "Projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 97
            echo "                           <tr>
                            <td>
                                <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details", array("projectID" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name"), "html", null, true);
            echo " </a>
                            </td>
                            <td class=\"center\">
                                ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "objectives"), "html", null, true);
            echo "
                            </td>
                            <td class=\"center\"> 
                                ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "description"), "html", null, true);
            echo "
                            </td>
                            
                            <td class=\"center\"> 
                                ";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "end"), "Y-m-d"), "html", null, true);
            echo "
                            </td>
                                                                 
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                        </tbody>
                    </table>            
                </div>

            </div>


        </div>
    </div>
        
";
    }

    public function getTemplateName()
    {
        return "RidwanProjectBundle:Projects:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 115,  172 => 102,  160 => 97,  470 => 246,  449 => 228,  445 => 227,  441 => 226,  433 => 224,  419 => 219,  406 => 214,  399 => 212,  391 => 211,  389 => 210,  382 => 208,  378 => 206,  373 => 204,  366 => 201,  364 => 200,  357 => 198,  327 => 173,  308 => 165,  303 => 163,  290 => 158,  287 => 157,  228 => 119,  206 => 108,  192 => 104,  216 => 113,  191 => 79,  184 => 77,  178 => 105,  126 => 51,  100 => 43,  124 => 47,  20 => 1,  153 => 60,  146 => 62,  104 => 42,  97 => 51,  134 => 54,  127 => 51,  81 => 45,  76 => 30,  872 => 572,  868 => 571,  864 => 570,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 487,  701 => 485,  689 => 478,  680 => 476,  676 => 475,  645 => 452,  640 => 450,  635 => 448,  628 => 446,  603 => 423,  592 => 418,  583 => 415,  578 => 413,  575 => 412,  571 => 411,  546 => 389,  534 => 380,  510 => 362,  494 => 349,  473 => 247,  452 => 313,  431 => 295,  396 => 266,  334 => 210,  292 => 173,  288 => 171,  284 => 169,  282 => 168,  263 => 151,  255 => 147,  186 => 93,  170 => 87,  155 => 70,  129 => 67,  113 => 54,  84 => 30,  248 => 169,  236 => 160,  212 => 111,  198 => 131,  181 => 76,  58 => 21,  828 => 388,  824 => 545,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 26,  65 => 23,  34 => 6,  826 => 383,  822 => 302,  819 => 543,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 484,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 458,  655 => 179,  652 => 178,  642 => 171,  637 => 169,  632 => 447,  625 => 165,  622 => 164,  620 => 163,  617 => 162,  609 => 157,  604 => 155,  598 => 152,  591 => 150,  588 => 417,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 136,  554 => 135,  552 => 134,  547 => 131,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 371,  516 => 120,  514 => 119,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 388,  415 => 217,  410 => 383,  405 => 381,  400 => 379,  395 => 377,  390 => 375,  385 => 373,  380 => 371,  375 => 369,  370 => 367,  353 => 197,  349 => 358,  345 => 357,  331 => 352,  326 => 350,  316 => 168,  311 => 344,  306 => 342,  301 => 340,  296 => 160,  291 => 336,  286 => 334,  281 => 332,  276 => 330,  266 => 326,  261 => 136,  251 => 320,  234 => 122,  232 => 306,  185 => 109,  180 => 74,  165 => 104,  161 => 73,  148 => 74,  118 => 43,  114 => 47,  110 => 58,  90 => 33,  70 => 27,  343 => 217,  321 => 348,  315 => 195,  313 => 194,  295 => 182,  271 => 328,  265 => 158,  259 => 149,  256 => 322,  253 => 146,  244 => 147,  237 => 144,  226 => 95,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 278,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 225,  435 => 146,  430 => 144,  427 => 143,  423 => 220,  413 => 280,  409 => 132,  407 => 131,  402 => 213,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 365,  362 => 110,  360 => 199,  355 => 106,  341 => 356,  337 => 355,  322 => 101,  314 => 99,  312 => 167,  309 => 97,  305 => 189,  298 => 91,  294 => 159,  285 => 89,  283 => 156,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 132,  247 => 129,  241 => 126,  229 => 73,  220 => 115,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 54,  128 => 46,  107 => 41,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 127,  240 => 145,  238 => 85,  235 => 143,  230 => 82,  227 => 81,  224 => 117,  221 => 77,  219 => 76,  217 => 75,  208 => 109,  204 => 280,  179 => 69,  159 => 63,  143 => 56,  135 => 59,  119 => 48,  102 => 36,  71 => 24,  67 => 26,  63 => 22,  59 => 20,  93 => 30,  88 => 38,  78 => 30,  38 => 10,  28 => 4,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 85,  163 => 62,  158 => 67,  156 => 96,  151 => 64,  142 => 59,  138 => 54,  136 => 55,  121 => 42,  117 => 47,  105 => 44,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 35,  46 => 18,  44 => 15,  31 => 5,  94 => 34,  89 => 48,  85 => 46,  75 => 25,  68 => 25,  56 => 24,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 27,  72 => 26,  69 => 24,  47 => 15,  40 => 17,  37 => 8,  22 => 1,  246 => 318,  157 => 56,  145 => 63,  139 => 72,  131 => 53,  123 => 53,  120 => 58,  115 => 43,  111 => 46,  108 => 44,  101 => 37,  98 => 39,  96 => 37,  83 => 30,  74 => 29,  66 => 27,  55 => 21,  52 => 20,  50 => 17,  43 => 14,  41 => 10,  35 => 7,  32 => 5,  29 => 4,  209 => 88,  203 => 78,  199 => 106,  193 => 97,  189 => 71,  187 => 84,  182 => 91,  176 => 89,  173 => 71,  168 => 77,  164 => 99,  162 => 57,  154 => 65,  149 => 63,  147 => 58,  144 => 55,  141 => 62,  133 => 69,  130 => 62,  125 => 48,  122 => 64,  116 => 48,  112 => 45,  109 => 45,  106 => 38,  103 => 54,  99 => 41,  95 => 42,  92 => 36,  86 => 32,  82 => 33,  80 => 32,  73 => 27,  64 => 26,  60 => 26,  57 => 25,  54 => 22,  51 => 20,  48 => 16,  45 => 15,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
