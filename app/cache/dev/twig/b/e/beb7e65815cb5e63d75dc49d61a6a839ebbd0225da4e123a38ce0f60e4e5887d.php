<?php

/* AcuerdosGestionBundle:Persona:index.html.twig */
class __TwigTemplate_beb7e65815cb5e63d75dc49d61a6a839ebbd0225da4e123a38ce0f60e4e5887d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout-admin.html.twig", "AcuerdosGestionBundle:Persona:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e99d00221551556e382ad0debb4eb6b6a81edaa6bbf4c3283c431d2635f23c5c = $this->env->getExtension("native_profiler");
        $__internal_e99d00221551556e382ad0debb4eb6b6a81edaa6bbf4c3283c431d2635f23c5c->enter($__internal_e99d00221551556e382ad0debb4eb6b6a81edaa6bbf4c3283c431d2635f23c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Persona:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99d00221551556e382ad0debb4eb6b6a81edaa6bbf4c3283c431d2635f23c5c->leave($__internal_e99d00221551556e382ad0debb4eb6b6a81edaa6bbf4c3283c431d2635f23c5c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4e7dd4cef7602678b649dea505283c441967588d16fc6b358c2aabcd2bedea2 = $this->env->getExtension("native_profiler");
        $__internal_e4e7dd4cef7602678b649dea505283c441967588d16fc6b358c2aabcd2bedea2->enter($__internal_e4e7dd4cef7602678b649dea505283c441967588d16fc6b358c2aabcd2bedea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("AcuerdosGestionBundle:Default:flash-message.html.twig", "AcuerdosGestionBundle:Persona:index.html.twig", 5)->display($context);
        // line 6
        echo "
    <h3 class=\"page-header\">Personas</h3>

    <div class=\"pull-right\"style=\"width: 25%; padding: 5px\">
        ";
        // line 10
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Default:admin-search-form.html.twig", array("url" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array())));
        echo "
    </div>

    ";
        // line 13
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Persona:table-index.html.twig");
        echo "

    <div class=\"list-actions\">
        ";
        // line 16
        $this->loadTemplate("AcuerdosGestionBundle:Default:link-add.html.twig", "AcuerdosGestionBundle:Persona:index.html.twig", 16)->display(array_merge($context, array("url" => "persona_new")));
        // line 17
        echo "    </div>

    ";
        // line 19
        $this->loadTemplate("AcuerdosGestionBundle:Default:modals.html.twig", "AcuerdosGestionBundle:Persona:index.html.twig", 19)->display($context);
        // line 20
        echo "
";
        
        $__internal_e4e7dd4cef7602678b649dea505283c441967588d16fc6b358c2aabcd2bedea2->leave($__internal_e4e7dd4cef7602678b649dea505283c441967588d16fc6b358c2aabcd2bedea2_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Persona:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  69 => 19,  65 => 17,  63 => 16,  57 => 13,  51 => 10,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
