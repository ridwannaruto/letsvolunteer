<?php

/* RidwanUserBundle:Welcome:contact.html.twig */
class __TwigTemplate_8465f6a1a86842ef86945a2f0fc01322a6bf853811658e4775bc95f583f96b96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RidwanUserBundle:Welcome:index.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RidwanUserBundle:Welcome:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"fs-form-wrap\" id=\"fs-form-wrap\">
        <div class=\"fs-title\">
            <h1>Contact Information</h1>
        </div>
        <br><br><br><br>
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "myform", "class" => "fs-form fs-form-full", "autocomplete" => "off")));
        echo "
        <ol class=\"fs-fields\">
            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q1\" data-info=\"we will use this to contact you\">What's your mobile number?</label>
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobile"), 'widget', array("class" => "fs-anim-lower", "attr" => array("id" => "q1", "placeholder" => "07x-xxxxxxx")));
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobile"), 'errors');
        echo "

            </li>
            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q2\" data-info=\"in case your mobile doesn't work\">What's your landline number?</label>
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q2", "placeholder" => "xxx-xxxxxxx")));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors');
        echo "
            </li>

            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q3\" data-info=\"for our knowledge\">What's your fax number?</label>
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q3", "placeholder" => "xxx-xxxxxxx")));
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax"), 'errors');
        echo "
            </li>



            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q4\" data-info=\"Home Address\">What's your home address?</label>
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "streetnumber"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q4", "placeholder" => "No: X/Y")));
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "streetnumber"), 'errors');
        echo "
            </li>

            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q5\" data-info=\"Home Street\">What is the name of the street?</label>
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q5", "placeholder" => "Gamunu Mawatha")));
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'errors');
        echo "
            </li>


            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q5\" data-info=\"City\">What is your city?</label>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q5", "placeholder" => "Nugegoda")));
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "
            </li>

            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q6\" data-info=\"District\">To which district do you belong?</label>
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "district"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q6", "placeholder" => "Colombo District")));
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "district"), 'errors');
        echo "
            </li>

            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q7\" data-info=\"Divisional Secretary\">To which Divisional Secretary do you belong?</label>
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "divisionalsecretary"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q7", "placeholder" => "Colombo District")));
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "divisionalsecretary"), 'errors');
        echo "
            </li>

            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q8\" data-info=\"Province\">In which province are you?</label>
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "province"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q8", "placeholder" => "Western Province")));
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "province"), 'errors');
        echo "
            </li>

            <li>
                <label class=\"fs-field-label fs-anim-upper\" for=\"q9\" data-info=\"Country\">In which country do you live currently?</label>
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget', array("attr" => array("class" => "fs-anim-lower", "id" => "q9", "placeholder" => "Sri Lanka")));
        echo "
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'errors');
        echo "
            </li>




        </ol><!-- /fs-fields -->
        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <button class=\"fs-submit\" type=\"submit\">Send answers</button>
        </form><!-- /fs-form -->

    </div>

";
    }

    public function getTemplateName()
    {
        return "RidwanUserBundle:Welcome:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 72,  129 => 58,  167 => 89,  236 => 132,  223 => 124,  450 => 199,  438 => 89,  434 => 45,  425 => 13,  417 => 1,  411 => 202,  333 => 168,  190 => 89,  637 => 358,  615 => 344,  609 => 341,  606 => 340,  592 => 334,  588 => 333,  547 => 308,  543 => 306,  539 => 304,  533 => 301,  513 => 292,  506 => 289,  502 => 288,  443 => 247,  416 => 235,  412 => 234,  371 => 201,  350 => 191,  346 => 189,  311 => 159,  297 => 155,  239 => 131,  174 => 88,  150 => 81,  137 => 74,  23 => 3,  198 => 111,  345 => 165,  342 => 188,  317 => 145,  301 => 156,  291 => 137,  263 => 126,  188 => 104,  222 => 128,  211 => 108,  205 => 104,  197 => 88,  473 => 261,  470 => 246,  433 => 224,  429 => 223,  415 => 217,  406 => 214,  391 => 211,  382 => 208,  366 => 201,  357 => 198,  353 => 176,  327 => 173,  316 => 168,  308 => 165,  303 => 163,  296 => 160,  287 => 135,  261 => 127,  234 => 129,  228 => 104,  212 => 111,  206 => 108,  192 => 91,  170 => 78,  226 => 95,  216 => 113,  191 => 96,  178 => 97,  126 => 69,  100 => 48,  124 => 53,  58 => 20,  84 => 34,  76 => 32,  20 => 1,  153 => 62,  146 => 60,  113 => 54,  104 => 45,  97 => 41,  77 => 30,  134 => 57,  127 => 70,  81 => 30,  34 => 10,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 331,  575 => 143,  572 => 142,  566 => 139,  563 => 315,  556 => 136,  553 => 135,  551 => 310,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 295,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 90,  421 => 390,  419 => 236,  408 => 382,  403 => 196,  388 => 190,  383 => 188,  378 => 186,  373 => 184,  363 => 180,  358 => 178,  351 => 358,  347 => 357,  339 => 355,  335 => 354,  329 => 167,  324 => 349,  319 => 163,  304 => 157,  299 => 155,  289 => 151,  284 => 149,  279 => 147,  274 => 145,  249 => 135,  232 => 307,  200 => 277,  184 => 105,  181 => 92,  175 => 78,  172 => 91,  160 => 71,  155 => 83,  65 => 20,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 348,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 338,  594 => 335,  591 => 150,  589 => 149,  585 => 332,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 314,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 302,  532 => 127,  527 => 298,  525 => 125,  519 => 121,  517 => 120,  509 => 290,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 260,  452 => 75,  449 => 250,  445 => 117,  442 => 44,  436 => 13,  431 => 44,  428 => 1,  422 => 393,  420 => 2,  414 => 387,  404 => 383,  399 => 212,  394 => 379,  389 => 210,  369 => 369,  364 => 197,  359 => 365,  352 => 361,  348 => 174,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 166,  320 => 350,  310 => 346,  300 => 342,  290 => 158,  280 => 141,  275 => 332,  270 => 330,  260 => 326,  255 => 126,  250 => 322,  245 => 320,  233 => 109,  231 => 129,  185 => 100,  180 => 77,  165 => 66,  161 => 86,  148 => 65,  118 => 61,  114 => 57,  110 => 58,  90 => 49,  70 => 29,  343 => 356,  321 => 146,  315 => 348,  313 => 144,  295 => 138,  271 => 130,  265 => 328,  259 => 139,  256 => 154,  253 => 123,  244 => 133,  237 => 144,  225 => 125,  218 => 131,  215 => 123,  210 => 120,  207 => 107,  202 => 115,  53 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 200,  444 => 45,  440 => 148,  437 => 244,  435 => 13,  430 => 2,  427 => 1,  423 => 238,  413 => 384,  409 => 199,  407 => 131,  402 => 213,  398 => 194,  393 => 192,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 182,  365 => 111,  362 => 110,  360 => 199,  355 => 106,  341 => 170,  337 => 169,  322 => 101,  314 => 161,  312 => 167,  309 => 159,  305 => 142,  298 => 91,  294 => 153,  285 => 336,  283 => 156,  278 => 132,  268 => 85,  264 => 141,  258 => 124,  252 => 125,  247 => 120,  241 => 126,  229 => 73,  220 => 117,  214 => 69,  177 => 65,  169 => 75,  140 => 72,  132 => 58,  128 => 46,  107 => 43,  61 => 20,  273 => 96,  269 => 143,  254 => 137,  243 => 137,  240 => 113,  238 => 119,  235 => 116,  230 => 305,  227 => 116,  224 => 156,  221 => 111,  219 => 110,  217 => 75,  208 => 109,  204 => 116,  179 => 79,  159 => 84,  143 => 80,  135 => 59,  119 => 55,  102 => 48,  71 => 27,  67 => 33,  63 => 22,  59 => 21,  93 => 44,  88 => 42,  78 => 40,  38 => 9,  28 => 3,  201 => 83,  196 => 105,  183 => 96,  171 => 90,  166 => 88,  163 => 67,  158 => 64,  156 => 70,  151 => 66,  142 => 65,  138 => 64,  136 => 59,  121 => 67,  117 => 50,  105 => 50,  91 => 46,  62 => 23,  49 => 14,  26 => 2,  87 => 34,  46 => 13,  44 => 15,  31 => 4,  94 => 41,  89 => 36,  85 => 35,  75 => 28,  68 => 34,  56 => 19,  24 => 6,  27 => 4,  25 => 1,  21 => 2,  19 => 1,  79 => 30,  72 => 24,  69 => 25,  47 => 15,  40 => 11,  37 => 11,  22 => 1,  246 => 113,  157 => 80,  145 => 78,  139 => 54,  131 => 53,  123 => 53,  120 => 52,  115 => 54,  111 => 53,  108 => 46,  101 => 42,  98 => 49,  96 => 35,  83 => 33,  74 => 25,  66 => 37,  55 => 16,  52 => 24,  50 => 14,  43 => 13,  41 => 12,  35 => 8,  32 => 5,  29 => 9,  209 => 113,  203 => 106,  199 => 101,  193 => 100,  189 => 99,  187 => 95,  182 => 99,  176 => 92,  173 => 78,  168 => 99,  164 => 72,  162 => 66,  154 => 82,  149 => 79,  147 => 76,  144 => 64,  141 => 55,  133 => 73,  130 => 56,  125 => 57,  122 => 64,  116 => 51,  112 => 47,  109 => 55,  106 => 50,  103 => 28,  99 => 40,  95 => 39,  92 => 36,  86 => 47,  82 => 39,  80 => 33,  73 => 26,  64 => 32,  60 => 31,  57 => 19,  54 => 16,  51 => 16,  48 => 17,  45 => 13,  42 => 12,  39 => 6,  36 => 5,  33 => 10,  30 => 9,);
    }
}
