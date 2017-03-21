<?php

/* form/fields.html.twig */
class __TwigTemplate_8b5a4dd44210a2825bbe5ed22987dcc3ae28c0432b202436a2aaca7e11133eb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3ed367d36b414af53f411d34366cdaaaa5a953b898d07e3bca8960ea4e47440 = $this->env->getExtension("native_profiler");
        $__internal_a3ed367d36b414af53f411d34366cdaaaa5a953b898d07e3bca8960ea4e47440->enter($__internal_a3ed367d36b414af53f411d34366cdaaaa5a953b898d07e3bca8960ea4e47440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_a3ed367d36b414af53f411d34366cdaaaa5a953b898d07e3bca8960ea4e47440->leave($__internal_a3ed367d36b414af53f411d34366cdaaaa5a953b898d07e3bca8960ea4e47440_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_569142f038fb9b67060315d1a3074dd10e42b774d7b0a93c6c0fcf9833f22588 = $this->env->getExtension("native_profiler");
        $__internal_569142f038fb9b67060315d1a3074dd10e42b774d7b0a93c6c0fcf9833f22588->enter($__internal_569142f038fb9b67060315d1a3074dd10e42b774d7b0a93c6c0fcf9833f22588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"form-group\">
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 5
        if (($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors') != null)) {
            // line 6
            echo "                <div class=\"alert alert-danger alert-dismissible alert-cerrar\" role=\"alert\" id=\"form-alert-error\" data-dismiss=\"alert\" >
                    <div style=\"float: left;\"><span class=\"glyphicon glyphicon-chevron-left\"></span></div>
                    ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        } else {
            // line 11
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            ";
        }
        // line 13
        echo "            ";
        // line 14
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_569142f038fb9b67060315d1a3074dd10e42b774d7b0a93c6c0fcf9833f22588->leave($__internal_569142f038fb9b67060315d1a3074dd10e42b774d7b0a93c6c0fcf9833f22588_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  63 => 13,  57 => 11,  51 => 8,  47 => 6,  45 => 5,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
