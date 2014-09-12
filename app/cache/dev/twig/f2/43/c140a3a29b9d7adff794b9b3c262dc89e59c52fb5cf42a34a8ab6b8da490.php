<?php

/* RidwanNotificationBundle:Task:allnotification.html.twig */
class __TwigTemplate_f243c140a3a29b9d7adff794b9b3c262dc89e59c52fb5cf42a34a8ab6b8da490 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"content\" class=\"span10\">

    <div class=\"row-fluid\">
        <div class=\"box span12\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-list\"></i> Your Notifications </h2>
                <div class=\"box-icon\">

                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>

                </div>
            </div>
            <div class=\"box-content\">
                ";
        // line 18
        if (((isset($context["AllNotifications"]) ? $context["AllNotifications"] : $this->getContext($context, "AllNotifications")) != null)) {
            // line 19
            echo "                        <div class=\"box-content alerts\">
                            ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["AllNotifications"]) ? $context["AllNotifications"] : $this->getContext($context, "AllNotifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 21
                echo "                             ";
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task") == 0)) {
                    // line 22
                    echo "                                
                                <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_project_details_notification", array("projectID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "project"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\"><li>
\t\t\t\t
                                ";
                } else {
                    // line 26
                    echo "                          
                                <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_task_details_notification", array("taskID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "task"), "notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\"> <li>
                                
                                ";
                }
                // line 30
                echo "                            
                           
                             ";
                // line 32
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 4)) {
                    // line 33
                    echo "                            <div class=\"alert alert-error\">
                                <button url=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                    echo "\"type=\"button\" class=\" close btn-comment\">×</button>
                                <div class = \"pull-right\">
                                ";
                    // line 36
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                </div>

                                <strong><h5>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                    echo "</h5></strong>
                                
                                ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                    echo "
                                <br>
                            </div>

                            ";
                }
                // line 46
                echo "
                              ";
                // line 47
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 3)) {
                    // line 48
                    echo "                            <div class=\"alert alert-success\">
                                <button url=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                    echo "\"type=\"button\" class=\" close btn-comment\">×</button>
 \t\t\t\t<div class = \"pull-right\">
                                ";
                    // line 51
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                </div>
                                <strong><h5>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                    echo "</h5></strong>
                               
                                ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                    echo "<br>
                               
                               
                                
                            </div>

                            ";
                }
                // line 62
                echo "
                              ";
                // line 63
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 2)) {
                    // line 64
                    echo "                            <div class=\"alert alert-heading\">
                                <button url=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                    echo "\"type=\"button\" class=\" close btn-comment\">×</button>
\t\t\t\t<div class = \"pull-right\">
                                ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                </div>
                                <strong><h5>";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                    echo "</h5></strong>
                          
                                ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                    echo "<br>
                            </div>

                            ";
                }
                // line 75
                echo "                              ";
                if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "type") == 1)) {
                    // line 76
                    echo "                            <div class=\"alert alert-info\">
                                <button url=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moraspirit_notification_see", array("notificationID" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id"), "html", null, true);
                    echo "\"type=\"button\" class=\" close btn-comment\">×</button>
\t\t\t\t<div class = \"pull-right\">
                                ";
                    // line 79
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "timestamp"), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                </div>
                                <strong><h5>";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "heading"), "html", null, true);
                    echo "</h5></strong>
                         
                                ";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "details"), "html", null, true);
                    echo "<br>

                            </div>

                            ";
                }
                // line 88
                echo "\t\t\t\t</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                        </div>
                        ";
        } else {
            // line 92
            echo "                        <li align =\"center\">
                            no notifications
                        </li></a>
                        ";
        }
        // line 95
        echo "\t
            </div>
        </div><!--/span-->
    </div><!--/row-->

</div>



";
    }

    public function getTemplateName()
    {
        return "RidwanNotificationBundle:Task:allnotification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 90,  191 => 79,  184 => 77,  178 => 75,  126 => 51,  100 => 34,  124 => 47,  20 => 1,  153 => 60,  146 => 62,  104 => 42,  97 => 36,  134 => 54,  127 => 49,  81 => 34,  76 => 30,  872 => 572,  868 => 571,  864 => 570,  857 => 566,  853 => 565,  849 => 564,  845 => 563,  809 => 539,  805 => 538,  797 => 536,  789 => 531,  785 => 530,  781 => 529,  777 => 528,  773 => 527,  769 => 526,  765 => 525,  752 => 515,  730 => 495,  721 => 493,  717 => 492,  710 => 487,  701 => 485,  689 => 478,  680 => 476,  676 => 475,  645 => 452,  640 => 450,  635 => 448,  628 => 446,  603 => 423,  592 => 418,  583 => 415,  578 => 413,  575 => 412,  571 => 411,  546 => 389,  534 => 380,  510 => 362,  494 => 349,  473 => 331,  452 => 313,  431 => 295,  396 => 266,  334 => 210,  292 => 173,  288 => 171,  284 => 169,  282 => 168,  263 => 151,  255 => 147,  186 => 93,  170 => 87,  155 => 78,  129 => 67,  113 => 54,  84 => 30,  248 => 169,  236 => 160,  212 => 142,  198 => 131,  181 => 76,  58 => 22,  828 => 388,  824 => 545,  821 => 306,  817 => 279,  814 => 541,  801 => 537,  827 => 381,  823 => 300,  820 => 299,  816 => 272,  813 => 271,  803 => 250,  798 => 248,  794 => 247,  77 => 26,  65 => 23,  34 => 6,  826 => 383,  822 => 302,  819 => 543,  815 => 274,  812 => 273,  799 => 249,  795 => 248,  786 => 243,  780 => 241,  774 => 239,  772 => 238,  766 => 234,  763 => 233,  750 => 223,  746 => 221,  738 => 216,  732 => 212,  726 => 208,  722 => 206,  715 => 204,  707 => 199,  702 => 197,  697 => 484,  690 => 193,  687 => 192,  684 => 191,  677 => 187,  672 => 185,  667 => 183,  660 => 181,  657 => 458,  655 => 179,  652 => 178,  642 => 171,  637 => 169,  632 => 447,  625 => 165,  622 => 164,  620 => 163,  617 => 162,  609 => 157,  604 => 155,  598 => 152,  591 => 150,  588 => 417,  586 => 148,  582 => 146,  576 => 143,  573 => 142,  567 => 139,  564 => 138,  561 => 137,  557 => 136,  554 => 135,  552 => 134,  547 => 131,  541 => 129,  538 => 128,  532 => 127,  529 => 126,  524 => 125,  522 => 371,  516 => 120,  514 => 119,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 88,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 1,  421 => 388,  415 => 385,  410 => 383,  405 => 381,  400 => 379,  395 => 377,  390 => 375,  385 => 373,  380 => 371,  375 => 369,  370 => 367,  353 => 226,  349 => 358,  345 => 357,  331 => 352,  326 => 350,  316 => 346,  311 => 344,  306 => 342,  301 => 340,  296 => 338,  291 => 336,  286 => 334,  281 => 332,  276 => 330,  266 => 326,  261 => 324,  251 => 320,  234 => 132,  232 => 306,  185 => 263,  180 => 74,  165 => 104,  161 => 67,  148 => 74,  118 => 43,  114 => 47,  110 => 38,  90 => 33,  70 => 27,  343 => 217,  321 => 348,  315 => 195,  313 => 194,  295 => 182,  271 => 328,  265 => 158,  259 => 149,  256 => 322,  253 => 146,  244 => 147,  237 => 144,  226 => 95,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 278,  53 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 13,  435 => 146,  430 => 144,  427 => 143,  423 => 391,  413 => 280,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 365,  362 => 110,  360 => 363,  355 => 106,  341 => 356,  337 => 355,  322 => 101,  314 => 99,  312 => 191,  309 => 97,  305 => 189,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 77,  128 => 46,  107 => 41,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 145,  238 => 85,  235 => 143,  230 => 82,  227 => 81,  224 => 151,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 280,  179 => 69,  159 => 63,  143 => 56,  135 => 70,  119 => 49,  102 => 36,  71 => 24,  67 => 26,  63 => 21,  59 => 20,  93 => 30,  88 => 38,  78 => 30,  38 => 18,  28 => 4,  201 => 83,  196 => 81,  183 => 82,  171 => 71,  166 => 69,  163 => 62,  158 => 67,  156 => 62,  151 => 64,  142 => 59,  138 => 54,  136 => 55,  121 => 42,  117 => 45,  105 => 39,  91 => 32,  62 => 23,  49 => 14,  26 => 6,  87 => 31,  46 => 18,  44 => 15,  31 => 5,  94 => 34,  89 => 29,  85 => 34,  75 => 25,  68 => 26,  56 => 24,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 27,  72 => 27,  69 => 24,  47 => 15,  40 => 17,  37 => 6,  22 => 1,  246 => 318,  157 => 56,  145 => 74,  139 => 72,  131 => 53,  123 => 58,  120 => 58,  115 => 43,  111 => 46,  108 => 36,  101 => 37,  98 => 39,  96 => 37,  83 => 30,  74 => 29,  66 => 27,  55 => 21,  52 => 20,  50 => 18,  43 => 20,  41 => 10,  35 => 6,  32 => 3,  29 => 2,  209 => 88,  203 => 78,  199 => 100,  193 => 97,  189 => 71,  187 => 84,  182 => 91,  176 => 89,  173 => 71,  168 => 86,  164 => 59,  162 => 57,  154 => 65,  149 => 63,  147 => 58,  144 => 55,  141 => 54,  133 => 69,  130 => 62,  125 => 48,  122 => 41,  116 => 48,  112 => 41,  109 => 40,  106 => 38,  103 => 41,  99 => 46,  95 => 42,  92 => 36,  86 => 32,  82 => 33,  80 => 32,  73 => 25,  64 => 26,  60 => 26,  57 => 25,  54 => 22,  51 => 20,  48 => 19,  45 => 14,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
