<?php

/* RidwanUserBundle:Account:Settings.html.twig */
class __TwigTemplate_c77f85155844215fd4be0469e8e9628b4034c5d1360596672437f07311e43df7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MoraspiritStyleBundle:basic:basic.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoraspiritStyleBundle:basic:basic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">
                    
\t\t\t<noscript>
\t\t\t\t<div class=\"alert alert-block span10\">
\t\t\t\t\t<h4 class=\"alert-heading\">Warning!</h4>
\t\t\t\t\t<p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
\t\t\t\t</div>
\t\t\t</noscript>
\t\t
                        <div id=\"content\" class=\"span10 \">
\t\t\t<!-- content starts -->
\t\t\t
                        <div class=\"row-fluid\">
                            <div class=\"box span12\">
                                
\t\t\t\t\t<div class=\"box-header well\">
                                            
\t\t\t\t\t\t<h2><i class=\"icon-locked\"></i> Change Password</h2>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content span12 \">
                                            
                                            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  
                                             <div class=\"control-group error \">
                      ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Current Password"));
        echo "
          
                         <div class=\"controls\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'widget');
        echo "
                                <span class=\"help-inline\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'errors');
        echo "</span>
                       </div></div>

  <div class=\"control-group success\">
      ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "New Password"));
        echo "
                        
                        <div class=\"controls\">
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword"), 'widget');
        echo "
                               <span class=\"help-inline\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newpassword"), 'errors');
        echo "</span>
                       </div></div>
                                      
                                                     
                                                     <div class=\"control-group success\">
      ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Confirm Password"));
        echo "
                        
                        <div class=\"controls\">
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmpassword"), 'widget');
        echo "
                               <span class=\"help-inline\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmpassword"), 'errors');
        echo "</span>
                       </div></div>
                               ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo " 
                                             <div class=\"control-group primary\">         
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentpassword"), 'label', array("label_attr" => array("class" => "control-label"), "label" => " "));
        echo "   
                            <div class=\"controls\">
                                 ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-success span3")));
        echo "                           
                            </div></div>      
                                            
                                  ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                       </form>                 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t
                          
\t\t\t\t
\t\t\t</div><!--/row-->
\t\t\t
\t\t\t
\t\t\t
\t\t\t\t\t
\t\t\t
\t\t\t\t\t<!-- content ends -->
\t\t\t</div><!--/#content.span10-->
\t\t\t
\t\t\t\t</div><!--/fluid-row-->
\t\t
\t</div><!--/.fluid-container-->
        
       
    
        



";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Account:Settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 358,  625 => 348,  615 => 344,  609 => 341,  606 => 340,  594 => 335,  588 => 333,  585 => 332,  581 => 331,  563 => 315,  557 => 314,  547 => 308,  543 => 306,  539 => 304,  535 => 302,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  431 => 241,  416 => 235,  383 => 207,  371 => 201,  358 => 194,  350 => 191,  342 => 188,  280 => 141,  23 => 3,  307 => 176,  231 => 114,  225 => 113,  195 => 89,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 250,  428 => 247,  412 => 234,  403 => 231,  352 => 199,  344 => 194,  333 => 186,  317 => 176,  300 => 168,  284 => 155,  277 => 150,  255 => 119,  359 => 209,  346 => 189,  304 => 173,  297 => 155,  200 => 110,  198 => 109,  172 => 94,  473 => 261,  470 => 246,  449 => 250,  445 => 248,  433 => 224,  419 => 236,  399 => 212,  391 => 211,  382 => 208,  378 => 216,  373 => 204,  366 => 201,  357 => 198,  303 => 169,  290 => 158,  287 => 136,  206 => 110,  170 => 97,  188 => 87,  178 => 97,  150 => 83,  184 => 105,  129 => 66,  126 => 51,  20 => 1,  153 => 68,  146 => 64,  155 => 79,  292 => 135,  279 => 130,  267 => 145,  249 => 115,  223 => 123,  211 => 108,  197 => 88,  175 => 100,  104 => 46,  134 => 69,  152 => 87,  113 => 57,  76 => 39,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 226,  425 => 289,  406 => 214,  364 => 197,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 181,  263 => 126,  242 => 149,  236 => 131,  222 => 101,  216 => 113,  192 => 102,  160 => 82,  100 => 49,  257 => 152,  190 => 101,  124 => 61,  97 => 42,  81 => 42,  348 => 173,  338 => 169,  334 => 159,  329 => 166,  324 => 151,  319 => 162,  299 => 173,  245 => 115,  228 => 104,  212 => 111,  167 => 82,  137 => 77,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 338,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 234,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 185,  310 => 197,  308 => 175,  289 => 134,  260 => 155,  250 => 147,  248 => 137,  239 => 117,  233 => 105,  213 => 98,  181 => 81,  127 => 54,  84 => 30,  77 => 28,  205 => 110,  191 => 105,  174 => 95,  58 => 31,  65 => 23,  34 => 7,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 334,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 310,  545 => 130,  542 => 129,  536 => 128,  533 => 301,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 247,  432 => 2,  429 => 223,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 197,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 159,  306 => 195,  301 => 156,  296 => 160,  291 => 137,  286 => 344,  281 => 163,  276 => 340,  266 => 147,  261 => 153,  251 => 118,  234 => 107,  232 => 121,  185 => 100,  180 => 103,  165 => 94,  161 => 92,  148 => 78,  118 => 58,  114 => 57,  110 => 54,  90 => 43,  70 => 37,  343 => 221,  321 => 358,  315 => 146,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 120,  256 => 129,  253 => 123,  244 => 119,  237 => 144,  226 => 95,  218 => 126,  215 => 109,  210 => 113,  207 => 107,  202 => 123,  53 => 19,  480 => 280,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 256,  440 => 148,  437 => 244,  435 => 146,  430 => 248,  427 => 143,  423 => 238,  413 => 134,  409 => 132,  407 => 131,  402 => 213,  398 => 228,  393 => 225,  387 => 222,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 209,  365 => 375,  362 => 210,  360 => 204,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 176,  309 => 97,  305 => 139,  298 => 139,  294 => 138,  285 => 164,  283 => 162,  278 => 86,  268 => 85,  264 => 154,  258 => 124,  252 => 116,  247 => 120,  241 => 126,  229 => 104,  220 => 119,  214 => 118,  177 => 80,  169 => 88,  140 => 70,  132 => 66,  128 => 68,  107 => 52,  61 => 35,  273 => 158,  269 => 157,  254 => 143,  243 => 138,  240 => 124,  238 => 108,  235 => 116,  230 => 82,  227 => 129,  224 => 121,  221 => 111,  219 => 110,  217 => 99,  208 => 109,  204 => 120,  179 => 94,  159 => 91,  143 => 80,  135 => 59,  119 => 59,  102 => 48,  71 => 25,  67 => 18,  63 => 36,  59 => 22,  93 => 47,  88 => 36,  78 => 40,  38 => 12,  28 => 5,  201 => 107,  196 => 115,  183 => 97,  171 => 77,  166 => 93,  163 => 72,  158 => 82,  156 => 79,  151 => 77,  142 => 63,  138 => 71,  136 => 60,  121 => 57,  117 => 65,  105 => 54,  91 => 46,  62 => 22,  49 => 15,  26 => 11,  87 => 45,  46 => 9,  44 => 13,  31 => 6,  94 => 45,  89 => 34,  85 => 42,  75 => 40,  68 => 25,  56 => 21,  24 => 6,  27 => 4,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 20,  69 => 38,  47 => 14,  40 => 9,  37 => 8,  22 => 2,  246 => 145,  157 => 86,  145 => 63,  139 => 78,  131 => 64,  123 => 53,  120 => 52,  115 => 58,  111 => 53,  108 => 53,  101 => 49,  98 => 40,  96 => 41,  83 => 43,  74 => 38,  66 => 25,  55 => 12,  52 => 24,  50 => 15,  43 => 13,  41 => 7,  35 => 8,  32 => 5,  29 => 4,  209 => 115,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  187 => 84,  182 => 99,  176 => 72,  173 => 93,  168 => 90,  164 => 85,  162 => 74,  154 => 78,  149 => 76,  147 => 75,  144 => 61,  141 => 62,  133 => 57,  130 => 64,  125 => 52,  122 => 58,  116 => 57,  112 => 45,  109 => 55,  106 => 48,  103 => 50,  99 => 51,  95 => 48,  92 => 38,  86 => 43,  82 => 42,  80 => 29,  73 => 26,  64 => 34,  60 => 14,  57 => 24,  54 => 25,  51 => 11,  48 => 11,  45 => 14,  42 => 8,  39 => 7,  36 => 11,  33 => 5,  30 => 10,);
    }
}
