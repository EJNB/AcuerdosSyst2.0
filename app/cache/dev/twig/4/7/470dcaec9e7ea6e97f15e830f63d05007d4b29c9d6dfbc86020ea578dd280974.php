<?php

/* AcuerdosGestionBundle:Default:paginator.html.twig */
class __TwigTemplate_470dcaec9e7ea6e97f15e830f63d05007d4b29c9d6dfbc86020ea578dd280974 extends Twig_Template
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
        $__internal_55914c83260720cb3a717477f1104146141225e18f7334829e44b85e2f6cfebf = $this->env->getExtension("native_profiler");
        $__internal_55914c83260720cb3a717477f1104146141225e18f7334829e44b85e2f6cfebf->enter($__internal_55914c83260720cb3a717477f1104146141225e18f7334829e44b85e2f6cfebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Default:paginator.html.twig"));

        // line 1
        echo "<div class=\"navigation pull-right\">
    ";
        // line 2
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>";
        
        $__internal_55914c83260720cb3a717477f1104146141225e18f7334829e44b85e2f6cfebf->leave($__internal_55914c83260720cb3a717477f1104146141225e18f7334829e44b85e2f6cfebf_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Default:paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
