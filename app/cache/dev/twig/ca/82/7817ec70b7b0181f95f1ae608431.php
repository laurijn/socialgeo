<?php

/* ::base.html.twig */
class __TwigTemplate_ca827817ec70b7b0181f95f1ae608431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'user' => array($this, 'block_user'),
            'login' => array($this, 'block_login'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\" />

    <!-- Set the viewport width to device width for mobile -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Beschrijving txt\">
    <meta name=\"keywords\" content=\"keywords, komen, hier, gescheiden, door, een, komma\">

    <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

</head>

<body>





<section id=\"wrap\">
    <header class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                <a class=\"brand\" href=\"#\">SOCIAL GEO</a>
                <div class=\"nav-collapse collapse\">
                    <nav class=\"nav\">
                        <li class=\"active\"><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event"), "html", null, true);
        echo "\">HOME</a></li>
                        <li><a href=\"#evenementen\">EVENEMENTEN</a></li>
                        <li><a href=\"#media\">MEDIA</a></li>
                        <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wijken"), "html", null, true);
        echo "\">WIJKEN</a></li>
                        <li><a href=\"#wijken\">";
        // line 56
        $this->displayBlock('user', $context, $blocks);
        echo "</a></li>
                    </nav>

                    <nav class=\"nav pull-right\">

                    ";
        // line 61
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 62
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\"><i class=\"icon-user icon-white\"></i></a></li>
                        <li><a href=\"#wijken\"><i class=\"icon-globe icon-white\"></i></a></li>
                        <li><a href=\"#wijken\"><i class=\"icon-envelope icon-white\"></i></a></li>
                        <li><a href=\"#media\"><i class=\"icon-star icon-white\"></i></a></li>
                        <li><a href=\"#media\"><i class=\"icon-glass icon-white\"></i></a></li>

                    ";
        } else {
            // line 69
            echo "                        ";
            $this->displayBlock('login', $context, $blocks);
            // line 70
            echo "                    ";
        }
        // line 71
        echo "
                    </nav>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <div class=\"spacer\"></div>

    <section class=\"container\" id=\"main\">

        ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "
    </section>
    <div id=\"push\"></div>
</section>

<footer>
    <div class=\"container\">
        <p class=\"muted credit\">Example courtesy <a href=\"http://martinbean.co.uk\">Martin Bean</a> and <a href=\"http://ryanfait.com/sticky-footer/\">Ryan Fait</a>.</p>
    </div>
</footer>




<!------------------------- ALL SCRIPTS START HERE -->
<!-- Included JS Files (Compressed) -->
<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/event/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/event/images/glyphicons-halflings.png"), "html", null, true);
        echo "\"></script>

<!-- Initialize JS Plugins -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAqGoCruJyrUzxz3V4ON0JyOAGnzKZo21U&sensor=false\"></script>

<!-- Initialize JS APP -->
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/event/js/app.js"), "html", null, true);
        echo "\"></script>
";
        // line 107
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "</body>

</html>
";
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/event/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/event/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/event/css/app.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 56
    public function block_user($context, array $blocks = array())
    {
    }

    // line 69
    public function block_login($context, array $blocks = array())
    {
    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 107,  213 => 81,  208 => 69,  203 => 56,  197 => 21,  193 => 20,  188 => 19,  185 => 18,  179 => 16,  172 => 108,  170 => 107,  166 => 106,  157 => 100,  153 => 99,  134 => 82,  132 => 81,  120 => 71,  117 => 70,  114 => 69,  103 => 62,  101 => 61,  93 => 56,  89 => 55,  83 => 52,  53 => 25,  49 => 23,  47 => 18,  42 => 16,  25 => 1,);
    }
}
