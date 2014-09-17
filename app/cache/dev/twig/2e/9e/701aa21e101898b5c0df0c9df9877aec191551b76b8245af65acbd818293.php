<?php

/* RidwanOpportunityBundle:Opportunities:new.html.twig */
class __TwigTemplate_2e9e701aa21e101898b5c0df0c9df9877aec191551b76b8245af65acbd818293 extends Twig_Template
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

        <h2><i class=\"icon-locked\"></i> Create Opportunity</h2>
        <hr>
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"control-group primary\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Title"));
        echo "

            <div class=\"controls\">
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Role of the Volunteer"));
        echo "

            <div class=\"controls\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role"), 'errors');
        echo "</span>
            </div>
        </div>


        <div class=\"control-group primary\">
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "difficulty"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Difficulty"));
        echo "

            <div class=\"controls\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "difficulty"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "difficulty"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cause"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Type"));
        echo "

            <div class=\"controls\">
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cause"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cause"), 'errors');
        echo "</span>
            </div>
        </div>
        
         <div class=\"control-group primary\">
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Long Description"));
        echo "

            <div class=\"controls\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortdescription"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Short Description"));
        echo "

            <div class=\"controls\">
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortdescription"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortdescription"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Location "));
        echo "

            <div class=\"controls\">
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberofvolunteers"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Number of Volunteers Required"));
        echo "

            <div class=\"controls\">
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberofvolunteers"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberofvolunteers"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agegroup"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Age Group"));
        echo "

            <div class=\"controls\">
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agegroup"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agegroup"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "training"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Training"));
        echo "

            <div class=\"controls\">
                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "training"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "training"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expenses"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Expenses"));
        echo "

            <div class=\"controls\">
                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expenses"), 'widget');
        echo "
                <span class=\"help-inline\">";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expenses"), 'errors');
        echo "</span>
            </div>
        </div>
        

        
        <div class=\"control-group primary\">
                    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Start Date"));
        echo "

            <div class=\"controls\">
                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                <span class=\"help-inline\">";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate"), 'errors');
        echo "</span>
            </div>
        </div>
        
        <div class=\"control-group primary\">
                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Due Date"));
        echo "

            <div class=\"controls\">
                    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y")));
        echo "
                <span class=\"help-inline\">";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate"), 'errors');
        echo "</span>
            </div>
        </div>

        <div class=\"control-group primary\">
            ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Volunteering Hours"));
        echo "

            <div class=\"controls\">
                ";
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 137
            echo "                    <label>
                        ";
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
                        ";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array()), "html", null, true);
            echo "
                    </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                <span class=\"help-inline\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate"), 'errors');
        echo "</span>
            </div>
        </div>
        
                    ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget', array("type" => "hidden"));
        echo "
               
       
        
        <div class=\"control-group primary\">
                    

            <div class=\"controls\">
                    ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success span3")));
        echo "
       
            </div>
        </div>

        ";
        // line 159
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        

        


    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "RidwanOpportunityBundle:Opportunities:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 142,  231 => 107,  225 => 104,  195 => 89,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 250,  428 => 247,  412 => 236,  403 => 231,  352 => 199,  344 => 194,  333 => 186,  317 => 176,  300 => 168,  284 => 155,  277 => 150,  255 => 119,  359 => 209,  346 => 198,  304 => 173,  297 => 171,  200 => 110,  198 => 109,  172 => 102,  473 => 276,  470 => 246,  449 => 259,  445 => 227,  433 => 224,  419 => 219,  399 => 212,  391 => 211,  382 => 208,  378 => 216,  373 => 204,  366 => 201,  357 => 198,  303 => 169,  290 => 158,  287 => 136,  206 => 110,  170 => 88,  188 => 87,  178 => 96,  150 => 75,  184 => 121,  129 => 55,  126 => 51,  20 => 1,  153 => 68,  146 => 64,  155 => 79,  292 => 135,  279 => 130,  267 => 145,  249 => 115,  223 => 123,  211 => 113,  197 => 88,  175 => 90,  104 => 46,  134 => 54,  152 => 66,  113 => 52,  76 => 30,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 226,  425 => 289,  406 => 214,  364 => 200,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 181,  263 => 124,  242 => 149,  236 => 131,  222 => 101,  216 => 113,  192 => 102,  160 => 82,  100 => 43,  257 => 144,  190 => 101,  124 => 54,  97 => 42,  81 => 32,  348 => 173,  338 => 169,  334 => 159,  329 => 166,  324 => 151,  319 => 162,  299 => 156,  245 => 115,  228 => 104,  212 => 111,  167 => 82,  137 => 69,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 234,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 201,  310 => 197,  308 => 175,  289 => 134,  260 => 155,  250 => 142,  248 => 137,  239 => 143,  233 => 105,  213 => 98,  181 => 81,  127 => 54,  84 => 30,  77 => 28,  205 => 110,  191 => 105,  174 => 90,  58 => 21,  65 => 23,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 150,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 293,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 197,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 172,  306 => 195,  301 => 172,  296 => 160,  291 => 137,  286 => 344,  281 => 133,  276 => 340,  266 => 147,  261 => 136,  251 => 118,  234 => 107,  232 => 121,  185 => 109,  180 => 82,  165 => 85,  161 => 70,  148 => 78,  118 => 58,  114 => 53,  110 => 54,  90 => 45,  70 => 26,  343 => 221,  321 => 358,  315 => 146,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 120,  256 => 129,  253 => 116,  244 => 136,  237 => 144,  226 => 95,  218 => 102,  215 => 115,  210 => 113,  207 => 95,  202 => 123,  53 => 16,  480 => 280,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 261,  444 => 256,  440 => 148,  437 => 225,  435 => 146,  430 => 248,  427 => 143,  423 => 220,  413 => 134,  409 => 132,  407 => 131,  402 => 213,  398 => 228,  393 => 225,  387 => 222,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 209,  365 => 375,  362 => 210,  360 => 204,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 176,  309 => 97,  305 => 139,  298 => 139,  294 => 138,  285 => 163,  283 => 162,  278 => 86,  268 => 85,  264 => 84,  258 => 142,  252 => 116,  247 => 129,  241 => 126,  229 => 104,  220 => 119,  214 => 118,  177 => 80,  169 => 88,  140 => 70,  132 => 66,  128 => 68,  107 => 43,  61 => 21,  273 => 128,  269 => 127,  254 => 143,  243 => 138,  240 => 124,  238 => 108,  235 => 108,  230 => 82,  227 => 125,  224 => 121,  221 => 142,  219 => 121,  217 => 99,  208 => 109,  204 => 112,  179 => 94,  159 => 71,  143 => 61,  135 => 59,  119 => 48,  102 => 36,  71 => 25,  67 => 24,  63 => 26,  59 => 22,  93 => 37,  88 => 36,  78 => 30,  38 => 10,  28 => 4,  201 => 107,  196 => 104,  183 => 97,  171 => 77,  166 => 85,  163 => 72,  158 => 82,  156 => 79,  151 => 77,  142 => 63,  138 => 71,  136 => 60,  121 => 57,  117 => 50,  105 => 44,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 35,  46 => 17,  44 => 13,  31 => 5,  94 => 34,  89 => 34,  85 => 33,  75 => 31,  68 => 25,  56 => 21,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 26,  69 => 30,  47 => 15,  40 => 11,  37 => 7,  22 => 1,  246 => 113,  157 => 84,  145 => 63,  139 => 69,  131 => 64,  123 => 53,  120 => 52,  115 => 54,  111 => 76,  108 => 44,  101 => 42,  98 => 48,  96 => 41,  83 => 35,  74 => 29,  66 => 25,  55 => 23,  52 => 17,  50 => 16,  43 => 14,  41 => 11,  35 => 6,  32 => 5,  29 => 4,  209 => 115,  203 => 93,  199 => 90,  193 => 87,  189 => 86,  187 => 84,  182 => 98,  176 => 72,  173 => 93,  168 => 90,  164 => 85,  162 => 74,  154 => 78,  149 => 76,  147 => 74,  144 => 61,  141 => 62,  133 => 57,  130 => 63,  125 => 52,  122 => 58,  116 => 57,  112 => 45,  109 => 45,  106 => 48,  103 => 48,  99 => 41,  95 => 40,  92 => 38,  86 => 43,  82 => 32,  80 => 31,  73 => 26,  64 => 23,  60 => 26,  57 => 24,  54 => 17,  51 => 20,  48 => 16,  45 => 15,  42 => 13,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
