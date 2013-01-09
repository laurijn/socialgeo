<?php

/* EventBundle:Default:index.html.twig */
class __TwigTemplate_30a8cbafb561edbb89703b786f8e1046 extends Twig_Template
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
    <form class=\"navbar-form pull-right\">
        <input type=\"text\" class=\"input-small\" placeholder=\"Email\">
        <input type=\"password\" class=\"input-small\" placeholder=\"Password\">
        <button type=\"submit\" class=\"btn\">Sign in</button>
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
        return array (  31 => 4,  28 => 3,);
    }
}
