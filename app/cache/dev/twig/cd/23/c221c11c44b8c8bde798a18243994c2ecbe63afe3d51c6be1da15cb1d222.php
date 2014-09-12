<?php

/* RidwanOpportunityBundle:Opportunities:admin.html.twig */
class __TwigTemplate_cd23c221c11c44b8c8bde798a18243994c2ecbe63afe3d51c6be1da15cb1d222 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
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

        <div class=\"box span12\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-bookmark\"></i> Opportunities Approval</h2>

            </div>
            <div class=\"box-content\">
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opportunities"]) ? $context["opportunities"] : $this->getContext($context, "opportunities")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 18
            echo "                            <li>
                                <div class =\"pull-right\">
                                    ";
            // line 20
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 0)) {
                // line 21
                echo "                                        <br><br>
                                        <button url=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_approve_opportunity", array("opID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-small  btn-success btn-complete\"><i class=\"icon-ok\"></i> Approve</button>
                                        <button url=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_site_reject_opportunity", array("opID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-small btn-danger btn-delete\"><i class=\"icon-remove\"></i> Reject</button>

                                    ";
            }
            // line 26
            echo "                                </div>

                                   <h2> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "title"), "html", null, true);
            echo "</h2>

                                <br>

                                <h6>Description</h6>

                                <h3>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "description"), "html", null, true);
            echo "</h3>
                                <br>

                                <table width='100%'>
                                    <tr>
                                        <td width='40%'>
                                            <h6>Location</h6>

                                            <h3>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "location"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Start Date</h6>

                                            <h3>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "startdate"), "Y-m-d"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Expected End Date</h6>

                                            <h3>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "enddate"), "Y-m-d"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Number of Volunteers</h6>

                                            <h3>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "numberofvolunteers"), "html", null, true);
            echo "</h3>
                                            <br>
                                        </td>
                                        <td width='10%'></td>
                                        <td width='40%'>
                                            <h6>Age Group</h6>

                                            <h3>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "agegroup"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Difficulty</h6>

                                            <h3>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "difficulty"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Cause</h6>

                                            <h3>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "cause"), "html", null, true);
            echo "</h3>
                                            <br>

                                            <h6>Status</h6>
                                            ";
            // line 78
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == (-1))) {
                // line 79
                echo "                                                <h3><span class=\"label label-important\"> Rejected</span></h3>
                                            ";
            } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 0)) {
                // line 81
                echo "                                                <h3><span class=\"label label-warning\"> Pending Approval</span></h3>

                                            ";
            } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 1)) {
                // line 84
                echo "                                                <h3><span class=\"label label-inverse\"> Assigning Volunteers</span></h3>

                                            ";
            } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 2)) {
                // line 87
                echo "                                                <h3><span class=\"label label-inverse\"> On going</span></h3>

                                            ";
            } elseif (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 3)) {
                // line 90
                echo "                                                <h3><span class=\"label label-info\">Completed</span></h3>
                                            ";
            }
            // line 92
            echo "                                            <br>
                                        </td>
                                        <td width='10%'></td>
                                    </tr>

                                </table>


                                <h6>Training</h6>

                                <h3>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "training"), "html", null, true);
            echo "</h3>
                                <br>

                                <h6>Expenses</h6>

                                <h3>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "expenses"), "html", null, true);
            echo "</h3>
                                <br>

                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "

                    </ul>
                </div>
            </div>
        </div><!--/span-->

 </div>

    <div class=\"modal hide fade\" id=\"delete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirm</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure you want to reject this opportunity?
            </p>


        </div>
        <div class=\"modal-footer\">

            <form action=\"empty\" id = \"continue-form\" method=\"POST\">
                <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
                <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
            </form>

        </div>
    </div>

    <div class=\"modal hide fade\" id=\"complete\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Confirm</h3>
        </div>
        <div class=\"modal-body\">
            <p align=\"center\">Are you sure you want to add this opportunity to the system?
            </p>


        </div>
        <div class=\"modal-footer\">

            <form action=\"empty\" id = \"continue-form\" method=\"POST\">
                <input name=\"id\" id=\"del-id\" type=\"hidden\" value=\"empty\" />
                <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"continue\">
            </form>

        </div>
    </div>
        
";
    }

    public function getTemplateName()
    {
        return "RidwanOpportunityBundle:Opportunities:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 101,  211 => 96,  205 => 93,  175 => 90,  197 => 88,  172 => 102,  160 => 81,  470 => 246,  449 => 228,  445 => 227,  441 => 226,  433 => 224,  419 => 219,  406 => 214,  399 => 212,  391 => 211,  389 => 210,  382 => 208,  378 => 206,  373 => 204,  366 => 201,  364 => 200,  357 => 198,  327 => 173,  308 => 165,  303 => 163,  290 => 158,  287 => 157,  228 => 104,  206 => 108,  192 => 104,  216 => 113,  191 => 102,  184 => 121,  178 => 105,  126 => 51,  100 => 43,  124 => 54,  20 => 1,  153 => 60,  146 => 64,  104 => 42,  97 => 42,  134 => 54,  127 => 51,  81 => 45,  76 => 30,  872 => 572,  868 => 571,  864 => 570,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 487,  701 => 485,  689 => 478,  680 => 476,  676 => 475,  645 => 452,  640 => 450,  635 => 448,  628 => 446,  603 => 423,  592 => 418,  583 => 415,  578 => 413,  575 => 412,  571 => 411,  546 => 389,  534 => 380,  510 => 362,  494 => 349,  473 => 247,  452 => 313,  431 => 295,  396 => 266,  334 => 210,  292 => 173,  288 => 171,  284 => 169,  282 => 168,  263 => 151,  255 => 147,  186 => 93,  170 => 87,  155 => 70,  129 => 67,  113 => 52,  84 => 30,  248 => 169,  236 => 160,  212 => 111,  198 => 131,  181 => 76,  58 => 21,  828 => 388,  824 => 545,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 28,  65 => 23,  34 => 6,  826 => 383,  822 => 302,  819 => 543,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 484,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 458,  655 => 179,  652 => 178,  642 => 171,  637 => 169,  632 => 447,  625 => 165,  622 => 164,  620 => 163,  617 => 162,  609 => 157,  604 => 155,  598 => 152,  591 => 150,  588 => 417,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 136,  554 => 135,  552 => 134,  547 => 131,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 371,  516 => 120,  514 => 119,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 223,  421 => 388,  415 => 217,  410 => 383,  405 => 381,  400 => 379,  395 => 377,  390 => 375,  385 => 373,  380 => 371,  375 => 369,  370 => 367,  353 => 197,  349 => 358,  345 => 357,  331 => 352,  326 => 350,  316 => 168,  311 => 344,  306 => 342,  301 => 340,  296 => 160,  291 => 336,  286 => 334,  281 => 332,  276 => 330,  266 => 326,  261 => 136,  251 => 320,  234 => 107,  232 => 306,  185 => 109,  180 => 74,  165 => 84,  161 => 70,  148 => 74,  118 => 51,  114 => 47,  110 => 58,  90 => 35,  70 => 27,  343 => 217,  321 => 348,  315 => 195,  313 => 194,  295 => 182,  271 => 328,  265 => 158,  259 => 120,  256 => 322,  253 => 146,  244 => 147,  237 => 144,  226 => 95,  218 => 131,  215 => 97,  210 => 112,  207 => 127,  202 => 278,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 225,  435 => 146,  430 => 144,  427 => 143,  423 => 220,  413 => 280,  409 => 132,  407 => 131,  402 => 213,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 365,  362 => 110,  360 => 199,  355 => 106,  341 => 356,  337 => 355,  322 => 101,  314 => 99,  312 => 167,  309 => 97,  305 => 189,  298 => 91,  294 => 159,  285 => 89,  283 => 156,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 116,  247 => 129,  241 => 126,  229 => 73,  220 => 115,  214 => 69,  177 => 65,  169 => 75,  140 => 69,  132 => 54,  128 => 68,  107 => 43,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 127,  240 => 145,  238 => 108,  235 => 143,  230 => 82,  227 => 157,  224 => 156,  221 => 77,  219 => 76,  217 => 75,  208 => 109,  204 => 280,  179 => 92,  159 => 63,  143 => 61,  135 => 59,  119 => 48,  102 => 36,  71 => 25,  67 => 24,  63 => 22,  59 => 22,  93 => 30,  88 => 38,  78 => 30,  38 => 10,  28 => 3,  201 => 83,  196 => 105,  183 => 82,  171 => 71,  166 => 85,  163 => 62,  158 => 67,  156 => 79,  151 => 66,  142 => 63,  138 => 54,  136 => 60,  121 => 57,  117 => 47,  105 => 47,  91 => 36,  62 => 22,  49 => 15,  26 => 6,  87 => 36,  46 => 17,  44 => 13,  31 => 4,  94 => 34,  89 => 34,  85 => 33,  75 => 25,  68 => 25,  56 => 21,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 30,  72 => 26,  69 => 30,  47 => 15,  40 => 17,  37 => 8,  22 => 1,  246 => 113,  157 => 69,  145 => 63,  139 => 69,  131 => 64,  123 => 53,  120 => 58,  115 => 48,  111 => 46,  108 => 44,  101 => 37,  98 => 39,  96 => 39,  83 => 35,  74 => 29,  66 => 27,  55 => 23,  52 => 20,  50 => 18,  43 => 12,  41 => 10,  35 => 7,  32 => 5,  29 => 4,  209 => 88,  203 => 78,  199 => 107,  193 => 87,  189 => 71,  187 => 84,  182 => 91,  176 => 89,  173 => 71,  168 => 77,  164 => 99,  162 => 74,  154 => 78,  149 => 63,  147 => 74,  144 => 55,  141 => 62,  133 => 57,  130 => 62,  125 => 52,  122 => 64,  116 => 48,  112 => 45,  109 => 45,  106 => 38,  103 => 42,  99 => 41,  95 => 42,  92 => 38,  86 => 34,  82 => 33,  80 => 31,  73 => 26,  64 => 26,  60 => 26,  57 => 24,  54 => 20,  51 => 20,  48 => 16,  45 => 15,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
