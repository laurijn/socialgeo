<?php

/* EventBundle:Wijk:wijk.html.twig */
class __TwigTemplate_78383c2493687601962754c6c1a70a13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EventBundle:Default:index.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EventBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "    <h1>welkom ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</h1>
";
        }
        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["json"]) ? $context["json"] : $this->getContext($context, "json")), "html", null, true);
        echo "

<div class=\"row-fluid\">
    <h1>Gentse Wijken</h1>
</div>
<div class=\"row-fluid\">
    <div class=\"span9 a-map\" id=\"mapHome\"></div>
    <div class=\"span3 wijken-list\">
        <ul>
            <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wijken_show", array("naam" => "Kanaaldorpen en -zone")), "html", null, true);
        echo "\">Kanaaldorpen en -zone</a></li>
            <li><a href=\"#\">Oostakker</a></li>
            <li><a href=\"#\">Sint Amandsberg</a></li>
            <li><a href=\"#\">Dampoort</a></li>
            <li><a href=\"#\">Wondelgem</a></li>
            <li><a href=\"#\">Bloemekenswijk</a></li>
            <li><a href=\"#\">Brugse Poort - Rooigem</a></li>
            <li><a href=\"#\">Rabot  - Blaisantvest</a></li>
            <li><a href=\"#\">Mariakerke</a></li>
            <li><a href=\"#\">Elisabethbegijnhof - Papegaai</a></li>
            <li><a href=\"#\">Macharius - Heirnis</a></li>
            <li><a href=\"#\">Gentbrugge</a></li>
            <li><a href=\"#\">Moscou - Vogelhoek</a></li>
            <li><a href=\"#\">Nieuw Gent - UZ</a></li>
            <li><a href=\"#\">Zwijnaarde</a></li>
            <li><a href=\"#\">Sint Denijs Westrem</a></li>
            <li><a href=\"#\">Stationsbuurt Zuid</a></li>
            <li><a href=\"#\">Drongen</a></li>
            <li><a href=\"#\">Muide - Meulestede - Afrikalaan</a></li>
            <li><a href=\"#\">Sluizeken - Tolhuis - Ham</a></li>
            <li><a href=\"#\">Binnenstad</a></li>
            <li><a href=\"#\">Oud Gentbrugge</a></li>
            <li><a href=\"#\">Ledeberg</a></li>
            <li><a href=\"#\">Stationsbuurt Noord</a></li>
            <li><a href=\"#\">Watersportbaan - Ekkergem</a></li>
        </ul>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "EventBundle:Wijk:wijk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  43 => 9,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
