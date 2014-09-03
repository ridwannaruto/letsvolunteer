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
        return array (  226 => 95,  216 => 90,  191 => 79,  178 => 75,  126 => 51,  100 => 34,  124 => 47,  58 => 22,  84 => 30,  76 => 30,  20 => 1,  153 => 60,  146 => 62,  113 => 54,  104 => 42,  97 => 36,  77 => 26,  134 => 54,  127 => 49,  81 => 34,  34 => 6,  817 => 387,  813 => 306,  810 => 305,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 235,  751 => 225,  746 => 222,  737 => 216,  731 => 212,  721 => 206,  714 => 204,  706 => 199,  701 => 197,  696 => 195,  689 => 193,  686 => 192,  683 => 191,  676 => 187,  671 => 185,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 169,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 162,  608 => 157,  603 => 155,  597 => 152,  590 => 150,  587 => 149,  581 => 146,  575 => 143,  572 => 142,  566 => 139,  563 => 138,  556 => 136,  553 => 135,  551 => 134,  546 => 131,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 124,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 44,  421 => 390,  419 => 387,  408 => 382,  403 => 380,  388 => 374,  383 => 372,  378 => 370,  373 => 368,  363 => 364,  358 => 362,  351 => 358,  347 => 357,  339 => 355,  335 => 354,  329 => 351,  324 => 349,  319 => 347,  304 => 341,  299 => 339,  289 => 335,  284 => 333,  279 => 331,  274 => 329,  249 => 319,  232 => 307,  200 => 277,  184 => 77,  181 => 76,  175 => 71,  172 => 70,  160 => 63,  155 => 78,  65 => 23,  830 => 390,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 222,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 205,  710 => 200,  705 => 198,  700 => 196,  693 => 194,  690 => 193,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 181,  658 => 180,  655 => 179,  645 => 172,  640 => 170,  635 => 168,  628 => 166,  625 => 165,  623 => 164,  620 => 163,  612 => 158,  607 => 156,  601 => 153,  594 => 151,  591 => 150,  589 => 149,  585 => 148,  579 => 144,  576 => 143,  570 => 140,  567 => 139,  564 => 138,  560 => 137,  557 => 136,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 128,  532 => 127,  527 => 126,  525 => 125,  519 => 121,  517 => 120,  509 => 115,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 88,  452 => 75,  449 => 74,  445 => 45,  442 => 44,  436 => 13,  431 => 2,  428 => 1,  422 => 393,  420 => 390,  414 => 387,  404 => 383,  399 => 381,  394 => 379,  389 => 377,  369 => 369,  364 => 367,  359 => 365,  352 => 361,  348 => 360,  344 => 359,  340 => 358,  336 => 357,  330 => 354,  325 => 352,  320 => 350,  310 => 346,  300 => 342,  290 => 338,  280 => 334,  275 => 332,  270 => 330,  260 => 326,  255 => 324,  250 => 322,  245 => 320,  233 => 310,  231 => 308,  185 => 266,  180 => 74,  165 => 66,  161 => 67,  148 => 74,  118 => 43,  114 => 47,  110 => 38,  90 => 33,  70 => 27,  343 => 356,  321 => 197,  315 => 348,  313 => 194,  295 => 340,  271 => 161,  265 => 328,  259 => 323,  256 => 154,  253 => 153,  244 => 317,  237 => 144,  225 => 136,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 279,  53 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 45,  440 => 148,  437 => 147,  435 => 13,  430 => 2,  427 => 1,  423 => 142,  413 => 384,  409 => 385,  407 => 131,  402 => 130,  398 => 378,  393 => 376,  387 => 122,  384 => 375,  381 => 120,  379 => 373,  374 => 371,  368 => 366,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 345,  312 => 98,  309 => 343,  305 => 344,  298 => 91,  294 => 337,  285 => 336,  283 => 88,  278 => 86,  268 => 85,  264 => 325,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 51,  128 => 46,  107 => 41,  61 => 23,  273 => 96,  269 => 327,  254 => 321,  243 => 88,  240 => 145,  238 => 85,  235 => 143,  230 => 305,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 73,  159 => 63,  143 => 54,  135 => 53,  119 => 49,  102 => 36,  71 => 24,  67 => 26,  63 => 21,  59 => 20,  93 => 30,  88 => 38,  78 => 30,  38 => 18,  28 => 4,  201 => 83,  196 => 81,  183 => 82,  171 => 71,  166 => 69,  163 => 62,  158 => 62,  156 => 62,  151 => 64,  142 => 59,  138 => 52,  136 => 55,  121 => 42,  117 => 45,  105 => 39,  91 => 32,  62 => 23,  49 => 14,  26 => 6,  87 => 31,  46 => 18,  44 => 15,  31 => 5,  94 => 34,  89 => 29,  85 => 34,  75 => 25,  68 => 26,  56 => 24,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 27,  72 => 27,  69 => 24,  47 => 15,  40 => 17,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 53,  131 => 53,  123 => 58,  120 => 58,  115 => 43,  111 => 46,  108 => 36,  101 => 37,  98 => 39,  96 => 37,  83 => 30,  74 => 29,  66 => 27,  55 => 21,  52 => 20,  50 => 18,  43 => 20,  41 => 10,  35 => 6,  32 => 4,  29 => 3,  209 => 88,  203 => 282,  199 => 124,  193 => 73,  189 => 71,  187 => 84,  182 => 234,  176 => 72,  173 => 71,  168 => 72,  164 => 65,  162 => 57,  154 => 65,  149 => 63,  147 => 56,  144 => 55,  141 => 54,  133 => 55,  130 => 62,  125 => 48,  122 => 41,  116 => 48,  112 => 41,  109 => 40,  106 => 38,  103 => 41,  99 => 46,  95 => 42,  92 => 36,  86 => 32,  82 => 33,  80 => 32,  73 => 25,  64 => 26,  60 => 26,  57 => 25,  54 => 22,  51 => 20,  48 => 19,  45 => 14,  42 => 10,  39 => 10,  36 => 16,  33 => 7,  30 => 4,);
    }
}
