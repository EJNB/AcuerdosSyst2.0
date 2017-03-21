<?php

/* AcuerdosGestionBundle:Reunion:select-participantes.html.twig */
class __TwigTemplate_73fc1216d568d7940080ae484e3b9b6de94b0ee9e5ed0113f7574606073cafaf extends Twig_Template
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
        $__internal_def4424771948415f24a4a88c741a208d32abe873da55c671ef4708781a70ce0 = $this->env->getExtension("native_profiler");
        $__internal_def4424771948415f24a4a88c741a208d32abe873da55c671ef4708781a70ce0->enter($__internal_def4424771948415f24a4a88c741a208d32abe873da55c671ef4708781a70ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Reunion:select-participantes.html.twig"));

        // line 1
        echo "<!--Secretario-->
<div class=\"form-group\">
    <label>Secretario de Acta</label>
    <select
            id=\"selected_secretario\"
            class=\"selectpicker form-control\"
            data-live-search=\"true\"
            name=\"secretario\"
            title=\"Seleccione el secretario\"
            data-size=\"10\"
            required
    >
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 14
            echo "            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "area", array()), "html", null, true);
            echo "\">
                ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["area"], "personas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
                // line 16
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["persona"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                    echo "disabled";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "descripcion", array()), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </optgroup>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </select>
</div>

<!--Participantes, -->
<div class=\"form-group\">
    <label>Participantes</label>
    <select
        class=\"form-control selectpicker select-part-disponibles\"
        name=\"select-participantes-disponibles[]\"
        id=\"select-part-disponibles\"
        data-size=\"8\"
        multiple
        data-actions-box=\"true\"
        data-live-search=\"true\"
        title=\"Seleccione los participantes\"
        required
    >
        ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 38
            echo "            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "area", array()), "html", null, true);
            echo "\">
                ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["area"], "personas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
                // line 40
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["persona"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                    echo "disabled";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "descripcion", array()), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </optgroup>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </select>
</div>

<!--invitados-->
<div class=\"form-group\">
    <label>Invitados</label>
    <select
        id=\"select-invitados-disponibles\"
        class=\"form-control selectpicker\"
        name=\"select-invitados-disponibles[]\" id=\"";
        // line 53
        echo "\"
        data-size=\"10\"
        multiple
        data-actions-box=\"true\"
        data-live-search=\"true\"
        title=\"Seleccione los invitados\"
    >
        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 61
            echo "            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "area", array()), "html", null, true);
            echo "\">
                ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["area"], "personas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
                // line 63
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "descripcion", array()), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </optgroup>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </select>
</div>

";
        
        $__internal_def4424771948415f24a4a88c741a208d32abe873da55c671ef4708781a70ce0->leave($__internal_def4424771948415f24a4a88c741a208d32abe873da55c671ef4708781a70ce0_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Reunion:select-participantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 67,  169 => 65,  158 => 63,  154 => 62,  149 => 61,  145 => 60,  136 => 53,  125 => 44,  118 => 42,  103 => 40,  99 => 39,  94 => 38,  90 => 37,  71 => 20,  64 => 18,  49 => 16,  45 => 15,  40 => 14,  36 => 13,  22 => 1,);
    }
}
