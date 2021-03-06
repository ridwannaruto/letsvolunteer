<?php

/* RidwanUserBundle:Welcome:personal2.html.twig */
class __TwigTemplate_300253ca45ce72ca985127ad2c2da8e9f815fe0eb06e25c9151e913e4433d757 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"fs-form-wrap\" id=\"fs-form-wrap\">
    <div class=\"fs-title\">
            <h1>Personal Information</h1>

   </div>


    <br><br><br><br>
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "myform", "class" => "form-horizontal center fs-form fs-form-full", "autocomplete" => "off")));
        echo "
        <ol class=\"fs-fields\">
            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q1\" data-info=\"we will use this name\">What's your First name?</label>
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'widget', array("class" => "fs-anim-lower", "attr" => array("id" => "q1", "placeholder" => "type your first name")));
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'errors');
        echo "

            </li>
            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q2\" data-info=\"just to know\">What's your Last name?</label>
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q2", "placeholder" => "type your last name")));
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'errors');
        echo "
            </li>

            <li data-input-trigger>
                <label class=\"fs-field-label fs-anim-upper\" >Select the category that describes you</label>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget', array("attr" => array("class" => "cs-select cs-skin-boxes fs-anim-lower", "id" => "q8")));
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'errors');
        echo "

            </li>

            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q3\" data-info=\"just to know\">What's your nationality?</label>
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q3", "placeholder" => "srilankan , indian etc")));
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality"), 'errors');
        echo "
            </li>



            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q4\" data-info=\"NIC for Sri Lankans and Passport Number for Foreigners\">What's your Identity?</label>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nicorpassport"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q4", "placeholder" => "NIC or Passport Number")));
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nicorpassport"), 'errors');
        echo "
            </li>

            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q5\" data-info=\"just to know\">When is your birthday?</label>
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'widget', array("value" => twig_date_format_filter($this->env, "now", "m/d/Y"), "attr" => array("class" => "fs-anim-lower", "id" => "q5", "placeholder" => "yyyy-mm-dd")));
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateofbirth"), 'errors');
        echo "
            </li>




            <li data-input-trigger>
                <label class=\"fs-field-label fs-anim-upper\"  >What is your sex?</label>
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'widget', array("attr" => array("class" => "cs-select cs-skin-boxes fs-anim-lower", "id" => "q6")));
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'errors');
        echo "

            </li>

            <li data-input-trigger>
                <label class=\"fs-field-label fs-anim-upper\"  >Are you married?</label>
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Civilstatus"), 'widget', array("attr" => array("class" => "cs-select cs-skin-boxes fs-anim-lower", "id" => "q7")));
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Civilstatus"), 'errors');
        echo "

            </li>





        </ol><!-- /fs-fields -->
            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <button class=\"fs-submit\" type=\"submit\">Send answers</button>
    </form><!-- /fs-form -->

</div>

";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:personal2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 91,  637 => 358,  625 => 348,  615 => 344,  609 => 341,  606 => 340,  594 => 335,  588 => 333,  585 => 332,  581 => 331,  563 => 315,  557 => 314,  547 => 308,  543 => 306,  539 => 304,  535 => 302,  527 => 298,  521 => 295,  513 => 292,  509 => 290,  467 => 260,  431 => 241,  416 => 235,  383 => 207,  371 => 201,  358 => 194,  350 => 191,  342 => 188,  280 => 141,  23 => 3,  307 => 176,  231 => 128,  225 => 113,  195 => 89,  496 => 285,  487 => 282,  484 => 281,  465 => 271,  439 => 253,  434 => 250,  428 => 247,  412 => 234,  403 => 231,  352 => 199,  344 => 194,  333 => 186,  317 => 176,  300 => 168,  284 => 155,  277 => 150,  255 => 119,  359 => 209,  346 => 189,  304 => 173,  297 => 155,  200 => 110,  198 => 92,  172 => 94,  473 => 261,  470 => 246,  449 => 250,  445 => 248,  433 => 224,  419 => 236,  399 => 212,  391 => 211,  382 => 208,  378 => 216,  373 => 204,  366 => 201,  357 => 198,  303 => 169,  290 => 158,  287 => 136,  206 => 110,  170 => 97,  188 => 88,  178 => 97,  150 => 80,  184 => 96,  129 => 66,  126 => 58,  20 => 1,  153 => 68,  146 => 79,  155 => 75,  292 => 135,  279 => 130,  267 => 145,  249 => 115,  223 => 105,  211 => 99,  197 => 103,  175 => 100,  104 => 46,  134 => 73,  152 => 87,  113 => 54,  76 => 29,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 226,  425 => 289,  406 => 214,  364 => 197,  356 => 232,  354 => 231,  335 => 214,  327 => 173,  325 => 181,  263 => 126,  242 => 149,  236 => 131,  222 => 101,  216 => 113,  192 => 102,  160 => 75,  100 => 49,  257 => 152,  190 => 101,  124 => 61,  97 => 42,  81 => 42,  348 => 173,  338 => 169,  334 => 159,  329 => 166,  324 => 151,  319 => 162,  299 => 173,  245 => 115,  228 => 104,  212 => 111,  167 => 88,  137 => 77,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 338,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 234,  389 => 223,  367 => 241,  347 => 223,  339 => 219,  318 => 185,  310 => 197,  308 => 175,  289 => 134,  260 => 155,  250 => 147,  248 => 137,  239 => 133,  233 => 129,  213 => 98,  181 => 84,  127 => 54,  84 => 40,  77 => 28,  205 => 96,  191 => 100,  174 => 92,  58 => 31,  65 => 23,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 334,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 310,  545 => 130,  542 => 129,  536 => 128,  533 => 301,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 289,  502 => 288,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 247,  432 => 2,  429 => 223,  421 => 243,  415 => 217,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 197,  349 => 368,  345 => 367,  331 => 155,  326 => 154,  316 => 168,  311 => 159,  306 => 195,  301 => 156,  296 => 160,  291 => 137,  286 => 344,  281 => 163,  276 => 340,  266 => 147,  261 => 153,  251 => 141,  234 => 107,  232 => 121,  185 => 100,  180 => 95,  165 => 94,  161 => 92,  148 => 78,  118 => 51,  114 => 57,  110 => 54,  90 => 43,  70 => 37,  343 => 221,  321 => 358,  315 => 146,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 120,  256 => 129,  253 => 123,  244 => 136,  237 => 144,  226 => 95,  218 => 126,  215 => 100,  210 => 113,  207 => 107,  202 => 123,  53 => 19,  480 => 280,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 252,  444 => 256,  440 => 148,  437 => 244,  435 => 146,  430 => 248,  427 => 143,  423 => 238,  413 => 134,  409 => 132,  407 => 131,  402 => 213,  398 => 228,  393 => 225,  387 => 222,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 209,  365 => 375,  362 => 210,  360 => 204,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 176,  309 => 97,  305 => 139,  298 => 139,  294 => 138,  285 => 164,  283 => 162,  278 => 86,  268 => 85,  264 => 154,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 108,  220 => 119,  214 => 118,  177 => 83,  169 => 88,  140 => 76,  132 => 66,  128 => 68,  107 => 52,  61 => 24,  273 => 158,  269 => 157,  254 => 143,  243 => 138,  240 => 124,  238 => 108,  235 => 116,  230 => 82,  227 => 129,  224 => 121,  221 => 111,  219 => 110,  217 => 117,  208 => 109,  204 => 120,  179 => 94,  159 => 91,  143 => 66,  135 => 59,  119 => 59,  102 => 48,  71 => 28,  67 => 27,  63 => 36,  59 => 22,  93 => 47,  88 => 41,  78 => 32,  38 => 12,  28 => 3,  201 => 104,  196 => 115,  183 => 97,  171 => 80,  166 => 93,  163 => 87,  158 => 82,  156 => 79,  151 => 77,  142 => 63,  138 => 71,  136 => 60,  121 => 57,  117 => 65,  105 => 44,  91 => 46,  62 => 22,  49 => 15,  26 => 2,  87 => 45,  46 => 9,  44 => 13,  31 => 4,  94 => 45,  89 => 36,  85 => 35,  75 => 40,  68 => 25,  56 => 21,  24 => 6,  27 => 4,  25 => 3,  21 => 2,  19 => 1,  79 => 30,  72 => 28,  69 => 36,  47 => 14,  40 => 9,  37 => 6,  22 => 1,  246 => 145,  157 => 84,  145 => 63,  139 => 65,  131 => 64,  123 => 53,  120 => 52,  115 => 50,  111 => 49,  108 => 53,  101 => 48,  98 => 40,  96 => 41,  83 => 43,  74 => 38,  66 => 25,  55 => 12,  52 => 17,  50 => 15,  43 => 13,  41 => 12,  35 => 8,  32 => 5,  29 => 2,  209 => 115,  203 => 106,  199 => 105,  193 => 102,  189 => 101,  187 => 84,  182 => 99,  176 => 72,  173 => 93,  168 => 90,  164 => 76,  162 => 74,  154 => 72,  149 => 76,  147 => 75,  144 => 61,  141 => 62,  133 => 57,  130 => 59,  125 => 52,  122 => 52,  116 => 57,  112 => 48,  109 => 55,  106 => 48,  103 => 44,  99 => 43,  95 => 45,  92 => 38,  86 => 43,  82 => 42,  80 => 39,  73 => 37,  64 => 23,  60 => 22,  57 => 24,  54 => 25,  51 => 11,  48 => 16,  45 => 14,  42 => 8,  39 => 6,  36 => 11,  33 => 6,  30 => 1,);
    }
}
