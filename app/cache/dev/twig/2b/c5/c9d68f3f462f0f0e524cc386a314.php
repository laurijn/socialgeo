<?php

/* EventBundle:Default:index.html.twig */
class __TwigTemplate_2bc5c9d68f3f462f0f0e524cc386a314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'login' => array($this, 'block_login'),
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
    public function block_login($context, array $blocks = array())
    {
        // line 4
        echo "
        <form action=\"/app_dev.php/login_check\" method=\"post\" class=\"navbar-form pull-right\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["csrf_generated"]) ? $context["csrf_generated"] : $this->getContext($context, "csrf_generated")), "html", null, true);
        echo "\" />
            <input type=\"text\" class=\"input-small\" id=\"username\" placeholder=\"username\" name=\"_username\" value=\"\" required=\"required\" />
            <input type=\"password\" class=\"input-small\" id=\"password\" placeholder=\"password\" name=\"_password\" required=\"required\" />
            <input type=\"submit\" class=\"btn\" id=\"_submit\" name=\"_submit\" value=\"Login\" />
        </form>

";
    }

    public function getTemplateName()
    {
        return "EventBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  122 => 52,  115 => 47,  103 => 41,  97 => 38,  90 => 34,  86 => 33,  80 => 32,  76 => 31,  72 => 30,  66 => 29,  63 => 28,  59 => 27,  39 => 9,  33 => 7,  31 => 4,  28 => 3,);
    }
}
