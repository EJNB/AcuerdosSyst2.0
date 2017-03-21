<?php

/* ::base.html.twig */
class __TwigTemplate_5faf678d4f9c9f093fabcc14d02363012e09b88b378af8c7b160fa3131628933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88f0d089d255a510621e4d63094e738490cc4d6d09595dc01812a2cddb2fa0be = $this->env->getExtension("native_profiler");
        $__internal_88f0d089d255a510621e4d63094e738490cc4d6d09595dc01812a2cddb2fa0be->enter($__internal_88f0d089d255a510621e4d63094e738490cc4d6d09595dc01812a2cddb2fa0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_88f0d089d255a510621e4d63094e738490cc4d6d09595dc01812a2cddb2fa0be->leave($__internal_88f0d089d255a510621e4d63094e738490cc4d6d09595dc01812a2cddb2fa0be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b79cc526532a906d4f7f6dedc871d3b3c7c558ef07921021df523bfeac8e296d = $this->env->getExtension("native_profiler");
        $__internal_b79cc526532a906d4f7f6dedc871d3b3c7c558ef07921021df523bfeac8e296d->enter($__internal_b79cc526532a906d4f7f6dedc871d3b3c7c558ef07921021df523bfeac8e296d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acuerdos 2.0";
        
        $__internal_b79cc526532a906d4f7f6dedc871d3b3c7c558ef07921021df523bfeac8e296d->leave($__internal_b79cc526532a906d4f7f6dedc871d3b3c7c558ef07921021df523bfeac8e296d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_878792e19f00904889a2eb28bbece928ba6f0861ea3f4c8f47cff00de3b36d68 = $this->env->getExtension("native_profiler");
        $__internal_878792e19f00904889a2eb28bbece928ba6f0861ea3f4c8f47cff00de3b36d68->enter($__internal_878792e19f00904889a2eb28bbece928ba6f0861ea3f4c8f47cff00de3b36d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_878792e19f00904889a2eb28bbece928ba6f0861ea3f4c8f47cff00de3b36d68->leave($__internal_878792e19f00904889a2eb28bbece928ba6f0861ea3f4c8f47cff00de3b36d68_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd566c670b442fe899c6155fc5d6e3a387e9080652ce9e10065f040406fa1375 = $this->env->getExtension("native_profiler");
        $__internal_bd566c670b442fe899c6155fc5d6e3a387e9080652ce9e10065f040406fa1375->enter($__internal_bd566c670b442fe899c6155fc5d6e3a387e9080652ce9e10065f040406fa1375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "            ";
        // line 12
        echo "        ";
        
        $__internal_bd566c670b442fe899c6155fc5d6e3a387e9080652ce9e10065f040406fa1375->leave($__internal_bd566c670b442fe899c6155fc5d6e3a387e9080652ce9e10065f040406fa1375_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2767f01d5b2c977eb4fd502e3b3852989d327c3fdd4c4ec5155c60dfb98f1ed3 = $this->env->getExtension("native_profiler");
        $__internal_2767f01d5b2c977eb4fd502e3b3852989d327c3fdd4c4ec5155c60dfb98f1ed3->enter($__internal_2767f01d5b2c977eb4fd502e3b3852989d327c3fdd4c4ec5155c60dfb98f1ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2767f01d5b2c977eb4fd502e3b3852989d327c3fdd4c4ec5155c60dfb98f1ed3->leave($__internal_2767f01d5b2c977eb4fd502e3b3852989d327c3fdd4c4ec5155c60dfb98f1ed3_prof);

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
        return array (  97 => 13,  90 => 12,  88 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
