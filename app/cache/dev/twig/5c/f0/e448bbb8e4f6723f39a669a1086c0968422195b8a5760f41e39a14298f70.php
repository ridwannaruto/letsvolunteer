<?php

/* RidwanEntityBundle:Volunteerfeedback:show.html.twig */
class __TwigTemplate_5cf0e448bbb8e4f6723f39a669a1086c0968422195b8a5760f41e39a14298f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Volunteerfeedback</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Date</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rating</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rating"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Recommend</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recommend"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Joinagain</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "joinagain"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("volunteerfeedback");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("volunteerfeedback_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "RidwanEntityBundle:Volunteerfeedback:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  76 => 29,  872 => 572,  868 => 571,  864 => 570,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 487,  701 => 485,  689 => 478,  680 => 476,  676 => 475,  645 => 452,  640 => 450,  635 => 448,  628 => 446,  603 => 423,  592 => 418,  583 => 415,  578 => 413,  575 => 412,  571 => 411,  546 => 389,  534 => 380,  510 => 362,  494 => 349,  473 => 331,  452 => 313,  431 => 295,  396 => 266,  334 => 210,  292 => 173,  288 => 171,  284 => 169,  282 => 168,  263 => 151,  255 => 147,  186 => 93,  170 => 87,  155 => 79,  129 => 67,  113 => 60,  84 => 47,  248 => 169,  236 => 160,  212 => 142,  198 => 131,  181 => 117,  58 => 20,  828 => 388,  824 => 545,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 28,  65 => 25,  34 => 5,  826 => 383,  822 => 302,  819 => 543,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 484,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 458,  655 => 179,  652 => 178,  642 => 171,  637 => 169,  632 => 447,  625 => 165,  622 => 164,  620 => 163,  617 => 162,  609 => 157,  604 => 155,  598 => 152,  591 => 150,  588 => 417,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 136,  554 => 135,  552 => 134,  547 => 131,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 371,  516 => 120,  514 => 119,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 1,  421 => 388,  415 => 385,  410 => 383,  405 => 381,  400 => 379,  395 => 377,  390 => 375,  385 => 373,  380 => 371,  375 => 369,  370 => 367,  353 => 226,  349 => 358,  345 => 357,  331 => 352,  326 => 350,  316 => 346,  311 => 344,  306 => 342,  301 => 340,  296 => 338,  291 => 336,  286 => 334,  281 => 332,  276 => 330,  266 => 326,  261 => 324,  251 => 320,  234 => 132,  232 => 306,  185 => 263,  180 => 74,  165 => 104,  161 => 81,  148 => 57,  118 => 40,  114 => 39,  110 => 38,  90 => 50,  70 => 41,  343 => 217,  321 => 348,  315 => 195,  313 => 194,  295 => 182,  271 => 328,  265 => 158,  259 => 149,  256 => 322,  253 => 146,  244 => 147,  237 => 144,  226 => 137,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 278,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 13,  435 => 146,  430 => 144,  427 => 143,  423 => 391,  413 => 280,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 365,  362 => 110,  360 => 363,  355 => 106,  341 => 356,  337 => 355,  322 => 101,  314 => 99,  312 => 191,  309 => 97,  305 => 189,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 77,  128 => 44,  107 => 58,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 145,  238 => 85,  235 => 143,  230 => 82,  227 => 81,  224 => 151,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 280,  179 => 69,  159 => 63,  143 => 56,  135 => 70,  119 => 63,  102 => 36,  71 => 20,  67 => 26,  63 => 15,  59 => 14,  93 => 34,  88 => 6,  78 => 30,  38 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 62,  151 => 77,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 62,  105 => 37,  91 => 41,  62 => 22,  49 => 14,  26 => 6,  87 => 25,  46 => 14,  44 => 12,  31 => 4,  94 => 34,  89 => 20,  85 => 28,  75 => 25,  68 => 40,  56 => 16,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 18,  72 => 26,  69 => 26,  47 => 18,  40 => 13,  37 => 6,  22 => 1,  246 => 318,  157 => 56,  145 => 74,  139 => 72,  131 => 52,  123 => 65,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 55,  98 => 35,  96 => 52,  83 => 25,  74 => 30,  66 => 27,  55 => 21,  52 => 18,  50 => 14,  43 => 9,  41 => 5,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 100,  193 => 97,  189 => 71,  187 => 84,  182 => 91,  176 => 89,  173 => 71,  168 => 86,  164 => 59,  162 => 57,  154 => 58,  149 => 76,  147 => 58,  144 => 55,  141 => 54,  133 => 69,  130 => 46,  125 => 44,  122 => 41,  116 => 64,  112 => 42,  109 => 38,  106 => 50,  103 => 56,  99 => 46,  95 => 28,  92 => 21,  86 => 48,  82 => 31,  80 => 45,  73 => 28,  64 => 14,  60 => 22,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 10,  39 => 10,  36 => 3,  33 => 7,  30 => 7,);
    }
}
