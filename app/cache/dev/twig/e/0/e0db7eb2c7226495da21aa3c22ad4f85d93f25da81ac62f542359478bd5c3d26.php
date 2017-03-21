<?php

/* AcuerdosGestionBundle:Area:listAreas.html.twig */
class __TwigTemplate_e0db7eb2c7226495da21aa3c22ad4f85d93f25da81ac62f542359478bd5c3d26 extends Twig_Template
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
        $__internal_4941c2bd36fd3994bbd05cee10a17b44c92131682a07c4dd63c470108ba99b4b = $this->env->getExtension("native_profiler");
        $__internal_4941c2bd36fd3994bbd05cee10a17b44c92131682a07c4dd63c470108ba99b4b->enter($__internal_4941c2bd36fd3994bbd05cee10a17b44c92131682a07c4dd63c470108ba99b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Area:listAreas.html.twig"));

        // line 1
        echo "<select
    id=\"popup-persona-area\"
    class=\"form-control selectpicker\"
    data-live-search=\"true\"
    data-size=\"8\"
    required=\"required\"
    name=\"area\"
    title=\"Seleccione el departamento\"
>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 11
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "area", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</select>";
        
        $__internal_4941c2bd36fd3994bbd05cee10a17b44c92131682a07c4dd63c470108ba99b4b->leave($__internal_4941c2bd36fd3994bbd05cee10a17b44c92131682a07c4dd63c470108ba99b4b_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Area:listAreas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  37 => 11,  33 => 10,  22 => 1,);
    }
}
