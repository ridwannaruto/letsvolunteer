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
        return array (  188 => 87,  178 => 75,  150 => 67,  184 => 77,  129 => 55,  126 => 51,  20 => 1,  153 => 60,  146 => 62,  155 => 69,  292 => 135,  279 => 130,  267 => 124,  249 => 115,  223 => 101,  211 => 98,  197 => 90,  175 => 77,  104 => 39,  134 => 54,  152 => 66,  113 => 54,  76 => 30,  903 => 622,  891 => 612,  882 => 609,  878 => 608,  854 => 591,  838 => 586,  834 => 585,  821 => 575,  803 => 559,  782 => 550,  769 => 547,  759 => 540,  732 => 518,  715 => 510,  710 => 508,  707 => 507,  703 => 506,  680 => 485,  669 => 480,  665 => 479,  660 => 477,  655 => 475,  652 => 474,  648 => 473,  614 => 445,  574 => 414,  553 => 396,  532 => 378,  511 => 360,  493 => 345,  476 => 331,  455 => 313,  441 => 302,  425 => 289,  406 => 273,  364 => 236,  356 => 232,  354 => 231,  335 => 214,  327 => 210,  325 => 209,  263 => 161,  242 => 149,  236 => 146,  222 => 134,  216 => 90,  192 => 88,  160 => 97,  100 => 38,  257 => 158,  190 => 118,  124 => 47,  97 => 36,  81 => 34,  348 => 173,  338 => 169,  334 => 168,  329 => 166,  324 => 151,  319 => 162,  299 => 156,  245 => 160,  228 => 119,  212 => 130,  167 => 82,  137 => 60,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 607,  871 => 606,  869 => 591,  863 => 588,  851 => 582,  845 => 588,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 557,  788 => 549,  773 => 548,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 512,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 276,  389 => 260,  367 => 241,  347 => 223,  339 => 219,  318 => 201,  310 => 197,  308 => 196,  289 => 134,  260 => 155,  250 => 151,  248 => 151,  239 => 143,  233 => 105,  213 => 126,  181 => 76,  127 => 49,  84 => 30,  77 => 26,  205 => 92,  191 => 79,  174 => 79,  58 => 22,  65 => 23,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 587,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 556,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 534,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 454,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 436,  595 => 151,  592 => 150,  590 => 427,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 1,  421 => 398,  415 => 395,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 369,  349 => 368,  345 => 367,  331 => 155,  326 => 360,  316 => 161,  311 => 354,  306 => 195,  301 => 350,  296 => 136,  291 => 346,  286 => 344,  281 => 342,  276 => 340,  266 => 133,  261 => 121,  251 => 330,  234 => 318,  232 => 121,  185 => 273,  180 => 82,  165 => 76,  161 => 67,  148 => 74,  118 => 50,  114 => 47,  110 => 42,  90 => 33,  70 => 27,  343 => 221,  321 => 358,  315 => 195,  313 => 143,  295 => 182,  271 => 125,  265 => 158,  259 => 159,  256 => 129,  253 => 116,  244 => 147,  237 => 144,  226 => 95,  218 => 102,  215 => 99,  210 => 129,  207 => 97,  202 => 123,  53 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 13,  435 => 146,  430 => 144,  427 => 143,  423 => 401,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 254,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 375,  362 => 110,  360 => 234,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 159,  309 => 97,  305 => 139,  298 => 91,  294 => 154,  285 => 133,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 128,  247 => 78,  241 => 162,  229 => 104,  220 => 92,  214 => 69,  177 => 65,  169 => 77,  140 => 63,  132 => 51,  128 => 46,  107 => 45,  61 => 23,  273 => 96,  269 => 163,  254 => 153,  243 => 112,  240 => 124,  238 => 147,  235 => 122,  230 => 82,  227 => 138,  224 => 71,  221 => 142,  219 => 76,  217 => 95,  208 => 89,  204 => 88,  179 => 78,  159 => 73,  143 => 63,  135 => 55,  119 => 49,  102 => 36,  71 => 24,  67 => 26,  63 => 21,  59 => 20,  93 => 37,  88 => 38,  78 => 30,  38 => 18,  28 => 4,  201 => 83,  196 => 81,  183 => 111,  171 => 71,  166 => 69,  163 => 81,  158 => 69,  156 => 64,  151 => 64,  142 => 84,  138 => 64,  136 => 55,  121 => 42,  117 => 53,  105 => 43,  91 => 43,  62 => 21,  49 => 14,  26 => 6,  87 => 31,  46 => 18,  44 => 12,  31 => 5,  94 => 34,  89 => 36,  85 => 34,  75 => 25,  68 => 24,  56 => 18,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 29,  72 => 25,  69 => 24,  47 => 15,  40 => 11,  37 => 6,  22 => 1,  246 => 328,  157 => 68,  145 => 66,  139 => 59,  131 => 53,  123 => 58,  120 => 52,  115 => 43,  111 => 46,  108 => 43,  101 => 42,  98 => 39,  96 => 37,  83 => 33,  74 => 29,  66 => 27,  55 => 21,  52 => 17,  50 => 18,  43 => 20,  41 => 5,  35 => 6,  32 => 3,  29 => 2,  209 => 88,  203 => 93,  199 => 86,  193 => 86,  189 => 71,  187 => 83,  182 => 78,  176 => 72,  173 => 72,  168 => 73,  164 => 69,  162 => 70,  154 => 65,  149 => 63,  147 => 64,  144 => 61,  141 => 77,  133 => 56,  130 => 56,  125 => 51,  122 => 51,  116 => 48,  112 => 41,  109 => 40,  106 => 38,  103 => 41,  99 => 46,  95 => 42,  92 => 36,  86 => 32,  82 => 33,  80 => 32,  73 => 25,  64 => 23,  60 => 26,  57 => 25,  54 => 22,  51 => 20,  48 => 19,  45 => 14,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
