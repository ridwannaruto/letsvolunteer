<?php

/* RidwanOpportunityBundle:Opportunities:edit.html.twig */
class __TwigTemplate_44d76844ec38f8a8d25bcc7c14974f65375af5ee73d73b39823f34924134ed09 extends Twig_Template
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
    <div class=\"row-fluid\">

        <h2><i class=\"icon-locked\"></i> Edit Task</h2>
        <hr>
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"control-group primary\">
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Assign Task To"));
        echo "

            <div class=\"controls\">
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'errors', array("type" => "hidden"));
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leader"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Project Manager"));
        echo "

            <div class=\"controls\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leader"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leader"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Task Name"));
        echo "

            <div class=\"controls\">
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Type"));
        echo "

            <div class=\"controls\">
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "project"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Project"));
        echo "

            <div class=\"controls\">
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "project"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "project"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Difficulty"));
        echo "

            <div class=\"controls\">
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weight"), 'errors');
        echo "</span>
            </div>
        </div>
        
         <div class=\"control-group primary\">
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description"));
        echo "

            <div class=\"controls\">
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goals"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Objectives"));
        echo "

            <div class=\"controls\">
                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goals"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "goals"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "starttimestamp"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Start Date"));
        echo "

            <div class=\"controls\">
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "starttimestamp"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                <span class=\"help-inline\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "starttimestamp"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duetimestamp"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Due Date"));
        echo "

            <div class=\"controls\">
                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duetimestamp"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                <span class=\"help-inline\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duetimestamp"), 'errors');
        echo "</span>
            </div>
        </div>
        
                    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endtimestamp"), 'widget', array("type" => "hidden"));
        echo "               
               
        <div class=\"control-group primary\">
                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pillar"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Pillar"));
        echo "

            <div class=\"controls\">
                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pillar"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pillar"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pillar"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "

            <div class=\"controls\">
                    ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success span3"), "label" => "Update Details"));
        echo "
       
            </div>
        </div>
        ";
        // line 120
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        

        


    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "RidwanOpportunityBundle:Opportunities:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 101,  211 => 96,  205 => 93,  175 => 78,  197 => 88,  172 => 102,  160 => 97,  470 => 246,  449 => 228,  445 => 227,  441 => 226,  433 => 224,  419 => 219,  406 => 214,  399 => 212,  391 => 211,  389 => 210,  382 => 208,  378 => 206,  373 => 204,  366 => 201,  364 => 200,  357 => 198,  327 => 173,  308 => 165,  303 => 163,  290 => 158,  287 => 157,  228 => 104,  206 => 108,  192 => 104,  216 => 113,  191 => 79,  184 => 121,  178 => 105,  126 => 51,  100 => 43,  124 => 54,  20 => 1,  153 => 60,  146 => 64,  104 => 42,  97 => 39,  134 => 54,  127 => 51,  81 => 45,  76 => 30,  872 => 572,  868 => 571,  864 => 570,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 487,  701 => 485,  689 => 478,  680 => 476,  676 => 475,  645 => 452,  640 => 450,  635 => 448,  628 => 446,  603 => 423,  592 => 418,  583 => 415,  578 => 413,  575 => 412,  571 => 411,  546 => 389,  534 => 380,  510 => 362,  494 => 349,  473 => 247,  452 => 313,  431 => 295,  396 => 266,  334 => 210,  292 => 173,  288 => 171,  284 => 169,  282 => 168,  263 => 151,  255 => 147,  186 => 93,  170 => 87,  155 => 70,  129 => 67,  113 => 54,  84 => 30,  248 => 169,  236 => 160,  212 => 111,  198 => 131,  181 => 76,  58 => 21,  828 => 388,  824 => 545,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 34,  65 => 28,  34 => 6,  826 => 383,  822 => 302,  819 => 543,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 484,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 458,  655 => 179,  652 => 178,  642 => 171,  637 => 169,  632 => 447,  625 => 165,  622 => 164,  620 => 163,  617 => 162,  609 => 157,  604 => 155,  598 => 152,  591 => 150,  588 => 417,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 136,  554 => 135,  552 => 134,  547 => 131,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 371,  516 => 120,  514 => 119,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 388,  415 => 217,  410 => 383,  405 => 381,  400 => 379,  395 => 377,  390 => 375,  385 => 373,  380 => 371,  375 => 369,  370 => 367,  353 => 197,  349 => 358,  345 => 357,  331 => 352,  326 => 350,  316 => 168,  311 => 344,  306 => 342,  301 => 340,  296 => 160,  291 => 336,  286 => 334,  281 => 332,  276 => 330,  266 => 326,  261 => 136,  251 => 320,  234 => 107,  232 => 306,  185 => 109,  180 => 74,  165 => 104,  161 => 70,  148 => 74,  118 => 51,  114 => 47,  110 => 58,  90 => 35,  70 => 27,  343 => 217,  321 => 348,  315 => 195,  313 => 194,  295 => 182,  271 => 328,  265 => 158,  259 => 120,  256 => 322,  253 => 146,  244 => 147,  237 => 144,  226 => 95,  218 => 131,  215 => 97,  210 => 128,  207 => 127,  202 => 278,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 225,  435 => 146,  430 => 144,  427 => 143,  423 => 220,  413 => 280,  409 => 132,  407 => 131,  402 => 213,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 365,  362 => 110,  360 => 199,  355 => 106,  341 => 356,  337 => 355,  322 => 101,  314 => 99,  312 => 167,  309 => 97,  305 => 189,  298 => 91,  294 => 159,  285 => 89,  283 => 156,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 116,  247 => 129,  241 => 126,  229 => 73,  220 => 115,  214 => 69,  177 => 65,  169 => 75,  140 => 69,  132 => 54,  128 => 68,  107 => 43,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 127,  240 => 145,  238 => 108,  235 => 143,  230 => 82,  227 => 157,  224 => 156,  221 => 77,  219 => 76,  217 => 75,  208 => 109,  204 => 280,  179 => 79,  159 => 63,  143 => 61,  135 => 59,  119 => 48,  102 => 36,  71 => 25,  67 => 24,  63 => 22,  59 => 20,  93 => 30,  88 => 38,  78 => 30,  38 => 10,  28 => 4,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 85,  163 => 62,  158 => 67,  156 => 71,  151 => 66,  142 => 63,  138 => 54,  136 => 60,  121 => 51,  117 => 47,  105 => 44,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 36,  46 => 18,  44 => 13,  31 => 5,  94 => 34,  89 => 34,  85 => 33,  75 => 25,  68 => 25,  56 => 24,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 26,  69 => 30,  47 => 15,  40 => 17,  37 => 8,  22 => 1,  246 => 113,  157 => 69,  145 => 63,  139 => 60,  131 => 53,  123 => 53,  120 => 58,  115 => 48,  111 => 46,  108 => 44,  101 => 37,  98 => 39,  96 => 39,  83 => 35,  74 => 29,  66 => 27,  55 => 23,  52 => 20,  50 => 21,  43 => 12,  41 => 10,  35 => 7,  32 => 5,  29 => 4,  209 => 88,  203 => 78,  199 => 106,  193 => 87,  189 => 71,  187 => 84,  182 => 91,  176 => 89,  173 => 71,  168 => 77,  164 => 99,  162 => 74,  154 => 65,  149 => 63,  147 => 58,  144 => 55,  141 => 62,  133 => 57,  130 => 62,  125 => 52,  122 => 64,  116 => 48,  112 => 45,  109 => 45,  106 => 38,  103 => 42,  99 => 41,  95 => 42,  92 => 38,  86 => 34,  82 => 33,  80 => 31,  73 => 32,  64 => 26,  60 => 26,  57 => 24,  54 => 17,  51 => 20,  48 => 16,  45 => 15,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
