<?php

/* FOSUserBundle:Registration:register_content_step3.html.twig */
class __TwigTemplate_ba7065e6d7933688fc22b4e4a2a8a112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    <fieldset>
        <legend>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["step"]) ? $context["step"] : $this->getContext($context, "step")), "html", null, true);
        echo "</legend>


        <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'label');
        echo "
                </label>
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'widget');
        echo "
                <span class=\"help-block\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'errors');
        echo "
                </span>
            </div>
        </div>

        <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postalcode"), 'label');
        echo "
                </label>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postalcode"), 'widget');
        echo "
                <span class=\"help-block\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postalcode"), 'errors');
        echo "
                </span>
            </div>
        </div>

        <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label');
        echo "
                </label>
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "
                <span class=\"help-block\">
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "
                </span>
            </div>
        </div>


        <input type=\"submit\" value=\"Next\" name=\"step4\">


<div style=\"visibility: hidden\">

            <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
                </label>
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
                <span class=\"help-block\">
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
                </span>
            </div>
            </div>

        <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'label');
        echo "
                </label>
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'widget');
        echo "
                <span class=\"help-block\">
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'errors');
        echo "
                </span>
            </div>
        </div>

        <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthday"), 'label');
        echo "
                </label>
                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthday"), 'widget');
        echo "
                <span class=\"help-block\">
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthday"), 'errors');
        echo "
                </span>
            </div>
        </div>

        <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality"), 'label');
        echo "
                </label>
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality"), 'widget');
        echo "
                <span class=\"help-block\">
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality"), 'errors');
        echo "
                </span>
            </div>
        </div>

        <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'label');
        echo "
                </label>
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'widget');
        echo "
                <span class=\"help-block\">
                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender"), 'errors');
        echo "
                </span>
            </div>
        </div>



        <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
                </label>
                ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                <span class=\"help-block\">
                    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                </span>
            </div>
        </div>
        <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
        echo "
                </label>
                ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "
                <span class=\"help-block\">
                        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "
                </span>
            </div>
        </div>
        <div class=\"control-group\">
            <div class=\"controls\">
                <label>
                </label>
                <input type=\"text\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" placeholder=\"choose password\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"), "plainPassword"), "html", null, true);
        echo "\">
                <input type=\"text\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" placeholder=\"choose password\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"), "plainPassword"), "html", null, true);
        echo "\">
                <span class=\"help-block\">
                </span>
            </div>
        </div>



        ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'errors');
        echo "
        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    </fieldset>
 </div>



</form>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content_step3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 147,  272 => 146,  268 => 145,  257 => 137,  253 => 136,  242 => 128,  237 => 126,  232 => 124,  222 => 117,  217 => 115,  212 => 113,  199 => 103,  194 => 101,  189 => 99,  178 => 91,  173 => 89,  168 => 87,  157 => 79,  152 => 77,  147 => 75,  136 => 67,  131 => 65,  126 => 63,  115 => 55,  110 => 53,  105 => 51,  88 => 37,  83 => 35,  78 => 33,  67 => 25,  62 => 23,  57 => 21,  46 => 13,  41 => 11,  36 => 9,  27 => 3,  19 => 1,);
    }
}
