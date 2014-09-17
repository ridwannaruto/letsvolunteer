<?php

/* RidwanSiteBundle:Home:admin.html.twig */
class __TwigTemplate_53734a8fa0caffc6eddc34070f2f7a443b5b60e209f3195322d60a41b8499a06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'dashboard' => array($this, 'block_dashboard'),
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

    // line 2
    public function block_dashboard($context, array $blocks = array())
    {
        // line 3
        echo "
        <div class=\"span2 main-menu-span\">




            <div class=\"well nav-collapse sidebar-nav\">
                <p align=\"center\">
                    ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path")) {
            // line 12
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "path"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                    ";
        } else {
            // line 14
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/default.jpg"), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" style=\"border: 2px\">
                    ";
        }
        // line 16
        echo "                    <br><br><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</strong>
                </p>
                <ul class=\"nav nav-tabs nav-stacked main-menu\">
                    <li class=\"nav-header hidden-tablet\">Dashboard</li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-star\"></i><span class=\"hidden-tablet\"> Special 1</span></a></li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-star\"></i><span class=\"hidden-tablet\"> Special 2</span></a></li>

                    <li class=\"nav-header hidden-tablet\">Dashboard</li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Home</span></a></li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Opportunities</span></a></li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> Assignments</span></a></li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-user\"></i><span class=\"hidden-tablet\"> Users</span></a></li>
                    <li><a class=\"ajax-link\" href=\"\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> Statistics</span></a></li>



                </ul>
            </div><!--/.well -->
        </div><!--/span-->
    ";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "    <div class=\"row-fluid\">
        <div class=\"box span10\">
            <div class=\"box-header well\" data-original-title>
                <h2><i class=\"icon-user\"></i> Volunteers Approval</h2>
                <div class=\"box-icon\">
                    <a href=\"#\" class=\"btn btn-minimize btn-round\"><i class=\"icon-chevron-up\"></i></a>
                </div>
            </div>
            <div class=\"box-content\">
                <div class=\"box-content\">
                    <ul class=\"dashboard-list\">
                        ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["volunteers"]) ? $context["volunteers"] : $this->getContext($context, "volunteers")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 49
            echo "                            <li>

                                <div class =\"pull-right\">
                                    ";
            // line 52
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "status") == 1)) {
                // line 53
                echo "                                        <span class=\"label label-warning\">Pending Approval</span>   <br><br>
                                        <button url=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_user_approve_volunteer", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-complete\"><i class=\"icon-ok\"></i></button>
                                        <button url=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_user_reject_volunteer", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"), "html", null, true);
                echo "\" class=\"btn btn-mini btn-round btn-delete\"><i class=\"icon-remove\"></i></button>
                                    ";
            } else {
                // line 57
                echo "                                        <span class=\"label label-success\">Activated</span>   <br><br>
                                    ";
            }
            // line 59
            echo "                                </div>
                                <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ridwan_profile_volunteer", array("userID" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id"))), "html", null, true);
            echo "\">

                                        <img class=\"dashboard-avatar\" alt=\"Not Found\" src=\"/web/bundles/User/Photo/default.jpg\">

                                    <strong>Name:</strong> ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "firstname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "lastname"), "html", null, true);
            echo "</a>
                                </a><br>
                                <strong>Nationality:</strong> ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "nationality"), "html", null, true);
            echo "<br>
                                <strong>Category:</strong> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "category"), "html", null, true);
            echo "
                                <br><br>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "

                    </ul>
                </div>
            </div>
        </div><!--/span-->
    </div>
";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Home:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 57,  97 => 48,  81 => 36,  348 => 173,  338 => 169,  334 => 168,  329 => 166,  324 => 164,  319 => 162,  299 => 156,  245 => 126,  228 => 119,  212 => 115,  167 => 82,  137 => 67,  975 => 655,  966 => 652,  962 => 651,  959 => 650,  955 => 649,  938 => 634,  929 => 631,  925 => 630,  922 => 629,  918 => 628,  905 => 618,  883 => 598,  879 => 596,  875 => 594,  871 => 592,  869 => 591,  863 => 588,  851 => 582,  845 => 579,  839 => 576,  832 => 571,  828 => 569,  824 => 567,  818 => 564,  812 => 561,  806 => 558,  794 => 552,  788 => 549,  773 => 536,  764 => 534,  760 => 533,  752 => 527,  743 => 525,  739 => 524,  729 => 517,  720 => 511,  704 => 497,  692 => 491,  687 => 489,  682 => 487,  679 => 486,  675 => 485,  654 => 466,  643 => 461,  639 => 460,  634 => 458,  622 => 454,  601 => 436,  589 => 427,  549 => 396,  507 => 360,  486 => 342,  451 => 313,  424 => 289,  408 => 276,  389 => 260,  367 => 241,  347 => 223,  339 => 219,  318 => 201,  310 => 197,  308 => 196,  289 => 151,  260 => 155,  250 => 151,  248 => 150,  239 => 143,  233 => 141,  213 => 126,  181 => 110,  127 => 71,  84 => 37,  77 => 39,  205 => 111,  191 => 124,  174 => 110,  58 => 21,  65 => 21,  34 => 5,  864 => 398,  860 => 317,  857 => 585,  853 => 289,  850 => 288,  841 => 267,  836 => 264,  831 => 262,  827 => 261,  822 => 260,  820 => 565,  815 => 257,  811 => 256,  807 => 254,  800 => 555,  798 => 248,  790 => 244,  784 => 242,  778 => 240,  776 => 239,  770 => 235,  767 => 234,  754 => 224,  750 => 222,  742 => 217,  736 => 213,  730 => 209,  726 => 207,  719 => 205,  711 => 200,  706 => 198,  701 => 196,  694 => 194,  691 => 193,  688 => 192,  681 => 188,  676 => 186,  671 => 184,  664 => 182,  661 => 181,  659 => 180,  656 => 179,  646 => 172,  641 => 170,  636 => 168,  629 => 456,  626 => 455,  624 => 164,  621 => 163,  613 => 158,  608 => 156,  602 => 153,  595 => 151,  592 => 150,  590 => 149,  586 => 147,  580 => 144,  577 => 418,  571 => 140,  568 => 139,  565 => 409,  561 => 137,  558 => 136,  556 => 135,  551 => 132,  545 => 130,  542 => 129,  536 => 128,  533 => 127,  528 => 378,  526 => 125,  520 => 121,  518 => 120,  510 => 115,  506 => 114,  502 => 113,  495 => 109,  490 => 106,  488 => 105,  468 => 327,  450 => 74,  446 => 45,  443 => 44,  432 => 2,  429 => 1,  421 => 398,  415 => 395,  410 => 393,  405 => 391,  400 => 389,  395 => 387,  390 => 385,  385 => 383,  380 => 381,  375 => 379,  370 => 377,  353 => 369,  349 => 368,  345 => 367,  331 => 362,  326 => 360,  316 => 161,  311 => 354,  306 => 352,  301 => 350,  296 => 155,  291 => 346,  286 => 344,  281 => 342,  276 => 340,  266 => 133,  261 => 334,  251 => 330,  234 => 318,  232 => 121,  185 => 273,  180 => 74,  165 => 97,  161 => 64,  148 => 57,  118 => 57,  114 => 56,  110 => 55,  90 => 33,  70 => 23,  343 => 221,  321 => 358,  315 => 195,  313 => 194,  295 => 182,  271 => 338,  265 => 158,  259 => 155,  256 => 129,  253 => 153,  244 => 147,  237 => 144,  226 => 137,  218 => 131,  215 => 116,  210 => 114,  207 => 124,  202 => 288,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 75,  444 => 149,  440 => 148,  437 => 13,  435 => 146,  430 => 144,  427 => 143,  423 => 401,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 375,  362 => 110,  360 => 373,  355 => 106,  341 => 366,  337 => 218,  322 => 101,  314 => 199,  312 => 159,  309 => 97,  305 => 157,  298 => 91,  294 => 154,  285 => 150,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 128,  247 => 78,  241 => 162,  229 => 139,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 59,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 153,  243 => 88,  240 => 124,  238 => 85,  235 => 122,  230 => 82,  227 => 138,  224 => 71,  221 => 117,  219 => 76,  217 => 144,  208 => 68,  204 => 290,  179 => 69,  159 => 71,  143 => 56,  135 => 53,  119 => 42,  102 => 36,  71 => 37,  67 => 15,  63 => 20,  59 => 14,  93 => 34,  88 => 6,  78 => 29,  38 => 9,  28 => 3,  201 => 110,  196 => 90,  183 => 111,  171 => 83,  166 => 71,  163 => 81,  158 => 97,  156 => 62,  151 => 89,  142 => 84,  138 => 64,  136 => 56,  121 => 46,  117 => 55,  105 => 37,  91 => 47,  62 => 26,  49 => 7,  26 => 6,  87 => 25,  46 => 11,  44 => 12,  31 => 4,  94 => 45,  89 => 20,  85 => 28,  75 => 25,  68 => 25,  56 => 16,  24 => 4,  27 => 1,  25 => 5,  21 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 36,  47 => 9,  40 => 11,  37 => 6,  22 => 1,  246 => 328,  157 => 91,  145 => 66,  139 => 53,  131 => 60,  123 => 47,  120 => 40,  115 => 43,  111 => 54,  108 => 53,  101 => 49,  98 => 35,  96 => 35,  83 => 31,  74 => 29,  66 => 27,  55 => 15,  52 => 19,  50 => 14,  43 => 9,  41 => 5,  35 => 7,  32 => 3,  29 => 2,  209 => 82,  203 => 122,  199 => 124,  193 => 115,  189 => 71,  187 => 113,  182 => 234,  176 => 72,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 67,  147 => 87,  144 => 55,  141 => 68,  133 => 66,  130 => 46,  125 => 70,  122 => 58,  116 => 41,  112 => 62,  109 => 57,  106 => 52,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 31,  80 => 41,  73 => 27,  64 => 23,  60 => 6,  57 => 11,  54 => 16,  51 => 14,  48 => 14,  45 => 17,  42 => 11,  39 => 10,  36 => 3,  33 => 7,  30 => 7,);
    }
}
