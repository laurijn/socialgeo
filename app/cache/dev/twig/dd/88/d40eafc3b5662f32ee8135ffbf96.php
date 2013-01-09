<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_dd88d40eafc3b5662f32ee8135ffbf96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if (((isset($context["step"]) ? $context["step"] : $this->getContext($context, "step")) == "step1")) {
            // line 6
            echo "    ";
            $this->env->loadTemplate("FOSUserBundle:Registration:register_content_step1.html.twig")->display($context);
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if (((isset($context["step"]) ? $context["step"] : $this->getContext($context, "step")) == "step2")) {
            // line 10
            echo "        ";
            $this->env->loadTemplate("FOSUserBundle:Registration:register_content_step2.html.twig")->display($context);
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (((isset($context["step"]) ? $context["step"] : $this->getContext($context, "step")) == "step3")) {
            // line 14
            echo "        ";
            $this->env->loadTemplate("FOSUserBundle:Registration:register_content_step3.html.twig")->display($context);
            // line 15
            echo "    ";
        }
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  61 => 15,  58 => 14,  56 => 13,  53 => 12,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
