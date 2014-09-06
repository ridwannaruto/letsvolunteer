<?php

/* RidwanSiteBundle:Authentication:login.html.twig */
class __TwigTemplate_97b93ab8eac2fdbb8e7b0b827149349df1673f25df6847cee5112ab12bcedfe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'pageInfo' => array($this, 'block_pageInfo'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
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
    public function block_pageInfo($context, array $blocks = array())
    {
        // line 3
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/anime.css"), "html", null, true);
        echo "\"/>
<link type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/js-image-slider.css"), "html", null, true);
        echo "\"/>
<link type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/css/generic.css"), "html", null, true);
        echo "\"/>

    <style type=\"text/css\">
        .cap {
            width: 190px;
            height: 240px;
            display: inline-block;
            background: white url(";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/caption1.gif"), "html", null, true);
        echo ") no-repeat 0 0;
            border-radius: 4px;
        }

        .cap2 {
            background-image: url(";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/caption2.gif"), "html", null, true);
        echo ")
        }

        .cap3 {
            background-image: url(";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/caption3.gif"), "html", null, true);
        echo ")
        }

        .cap4 {
            background-image: url(";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/caption4.gif"), "html", null, true);
        echo ")
        }
    </style>
";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/link.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/cufon-yui.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/ChunkFive_400.font.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/js/js-image-slider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        Cufon.replace('h1', { textShadow: '1px 1px #fff'});
        Cufon.replace('h2', { textShadow: '1px 1px #fff'});
        Cufon.replace('h3', { textShadow: '1px 1px #000'});
        Cufon.replace('.back');
    </script>

    <script type=\"text/javascript\">
        \$(function () {
            //the form wrapper (includes all forms)
            var \$form_wrapper = \$('#form_wrapper'),
            //the current form is the one with class active
                    \$currentForm = \$form_wrapper.children('form.active'),
            //the change form links
                    \$linkform = \$form_wrapper.find('.linkform');

            //get width and height of each form and store them for later
            \$form_wrapper.children('form').each(function (i) {
                var \$theForm = \$(this);
                //solve the inline display none problem when using fadeIn fadeOut
                if (!\$theForm.hasClass('active'))
                    \$theForm.hide();
                \$theForm.data({
                    width: \$theForm.width(),
                    height: \$theForm.height()
                });
            });

            //set width and height of wrapper (same of current form)
            setWrapperWidth();

            /*
             clicking a link (change form event) in the form
             makes the current form hide.
             The wrapper animates its width and height to the
             width and height of the new current form.
             After the animation, the new form is shown
             */
            \$linkform.bind('click', function (e) {
                var \$link = \$(this);
                var target = \$link.attr('rel');
                \$currentForm.fadeOut(400, function () {
                    //remove class active from current form
                    \$currentForm.removeClass('active');
                    //new current form
                    \$currentForm = \$form_wrapper.children('form.' + target);
                    //animate the wrapper
                    \$form_wrapper.stop()
                            .animate({
                                width: \$currentForm.data('width') + 'px',
                                height: \$currentForm.data('height') + 'px'
                            }, 500, function () {
                                //new form gets class active
                                \$currentForm.addClass('active');
                                //show the new form
                                \$currentForm.fadeIn(400);
                            });
                });
                e.preventDefault();
            });

            function setWrapperWidth() {
                \$form_wrapper.css({
                    width: \$currentForm.data('width') + 'px',
                    height: \$currentForm.data('height') + 'px'
                });
            }


            /*
             for the demo we disabled the submit buttons
             if you submit the form, you need to check the
             which form was submited, and give the class active
             to the form you want to show
             */


            \$form_wrapper.find('input[type=\"submit\"]')
                    .click(function (e) {
                        e.preventDefault();
                    });
        });
    </script>

";
    }

    // line 124
    public function block_header($context, array $blocks = array())
    {
        // line 125
        echo "
";
    }

    // line 127
    public function block_dashboard($context, array $blocks = array())
    {
        // line 128
        echo "
";
    }

    // line 130
    public function block_content($context, array $blocks = array())
    {
        // line 131
        echo "
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">

            <div class=\"wrapper span12\">
                <br>
                <img class=\"center\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ridwansite/images/Logo.jpg"), "html", null, true);
        echo " \" width=\"250px\"/>

                <div class=\"well span3 login-box center \">
                    <div class=\"content\">
                        <div id=\"form_wrapper\" class=\"form_wrapper span12\">

                            ";
        // line 143
        if (array_key_exists("error", $context)) {
            // line 144
            echo "                                ";
            if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) != "")) {
                // line 145
                echo "                                <script type=\"text/javascript\">
                                    window.onload = function() {
                                        noty(jQuery.parseJSON('{\"text\":\"";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
                echo "\",\"layout\":\"top\",\"type\":\"error\"}'));

                                    }
                                </script>

                            ";
            }
            // line 153
            echo "                            ";
        }
        // line 154
        echo "
                            <form class = \"login active form-horizontal center\" action=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                                <fieldset>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                                <div class=\"input-prepend \" title=\"Username\" data-rel=\"tooltip\">
                                    <span class=\"add-on\"><i class=\"icon-user\"></i></span> <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"type your username\" required=\"required\" />
                                </div>
                                <div class=\"clearfix\"></div>

                                <div class=\"input-prepend \" title=\"Password\" data-rel=\"tooltip\">
                                    <span class=\"add-on\"><i class=\"icon-lock\"></i></span> <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"type your password\" required=\"required\" />
                                </div>
                                <div class=\"clearfix\"></div>

                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />Remember Me
                                <p class=\"center span5\">
                                    <button class = \"btn btn-success span5\" type=\"submit\" id=\"_submit\" name=\"_submit\" >Login</button>

                                </p>

                                    </fieldset>

                                <p align=\"center\">
                                    <nav class=\"cl-effect-20\">
                                        <label><a href=\"\" rel=\"forgot_password\" class=\"forgot linkform\">Forgot
                                                your password?</a></label>
                                        Not a member? <a href=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("ridwan_auth_register");
        echo "\"><span
                                                    data-hover=\"continue\">register here</span> </a>
                                    </nav>
                                </p>
                            </form>


                            <form  action=\"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"forgot_password form-horizontal fos_user_resetting_request\">
                                <div class=\"center\">
                                    <h3>Forgot Password</h3><br>
                                    <fieldset>
                                    <div>
                                        ";
        // line 194
        if (array_key_exists("invalid_username", $context)) {
            // line 195
            echo "                                            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                                        ";
        }
        // line 197
        echo "                                        <div class=\"input-prepend \" title=\"Username\" data-rel=\"tooltip\">
                                            <span class=\"add-on\"><i class=\"icon-user\"></i></span>
                                            <input autofocus
                                                   class=\"input-xxlargelarge span10\"
                                                   name=\"username\"
                                                   id=\"username\"
                                                   type=\"text\"
                                                   value=\"\"
                                                   placeholder=\"type your username\"
                                                   required/>
                                        </div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <p class=\"center span5\">

                                        <button type=\"submit\" class=\"btn btn-primary\" >Remind Me</button>
                                    </p>

                                        <a href=\"index.html\" rel=\"login\" class=\"linkform\">Suddenly remebered? Log in
                                            here</a><br>
                                        <a href=\"";
        // line 217
        echo $this->env->getExtension('routing')->getPath("ridwan_auth_register");
        echo "\">You don't have an account? Register
                                            here</a>

                                        <div class=\"clear\"></div>

                                    </fieldset>

                                </div>
                            </form>


                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>

            </div>
            <!--/span-->

        </div>
        <!--/row-->

    </div><!--/fluid-row-->

    </div><!--/.fluid-container-->

";
    }

    public function getTemplateName()
    {
        return "RidwanSiteBundle:Authentication:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 217,  321 => 197,  315 => 195,  313 => 194,  305 => 189,  295 => 182,  271 => 161,  265 => 158,  259 => 155,  256 => 154,  253 => 153,  244 => 147,  240 => 145,  237 => 144,  235 => 143,  226 => 137,  218 => 131,  215 => 130,  210 => 128,  207 => 127,  202 => 125,  199 => 124,  109 => 38,  105 => 37,  101 => 36,  96 => 35,  93 => 34,  85 => 28,  78 => 24,  71 => 20,  63 => 15,  53 => 8,  49 => 7,  44 => 6,  41 => 5,  36 => 3,  33 => 2,);
    }
}
