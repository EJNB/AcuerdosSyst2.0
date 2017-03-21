<?php

/* AcuerdosGestionBundle:Acta:asistencia.html.twig */
class __TwigTemplate_8f49b0dcf5a78b141ad338990d714f180e88c81298d132e0e774398977f770bb extends Twig_Template
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
        $__internal_6ab1d17c4b119643e5b656146cd22d76ea2b2d6843b5ea110037b85a590ef98c = $this->env->getExtension("native_profiler");
        $__internal_6ab1d17c4b119643e5b656146cd22d76ea2b2d6843b5ea110037b85a590ef98c->enter($__internal_6ab1d17c4b119643e5b656146cd22d76ea2b2d6843b5ea110037b85a590ef98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Acta:asistencia.html.twig"));

        // line 1
        echo "<table class=\"table\">
    <thead>
    <tr>
        <th style=\"width: 20%\">Personas</th>
        <th style=\"width: 5%\">Asistencia</th>
        <th style=\"width: 40%;padding: 10px 50px\">Causa</th>
        <th style=\"width: 20%\">Sustituto</th>
        <th style=\"width: 5%\">Acciones</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")));
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            if (($this->getAttribute($context["reunion"], "tipo", array()) == "Participante")) {
                // line 13
                echo "        <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "id", array()), "html", null, true);
                echo "\">
            <td ";
                // line 14
                if (($this->getAttribute($context["reunion"], "asistencia", array()) == 1)) {
                    echo "style=\"color: red\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "descripcion", array()), "html", null, true);
                echo "</td>
            <td ";
                // line 15
                if (($this->getAttribute($context["reunion"], "asistencia", array()) == 1)) {
                    echo "style=\"color: red\"";
                }
                echo ">
                ";
                // line 16
                if (($this->getAttribute($context["reunion"], "asistencia", array()) == 1)) {
                    echo "<span class=\"glyphicon glyphicon-remove\"></span>";
                } else {
                    echo "<span class=\"glyphicon glyphicon-ok\"></span>";
                }
                // line 17
                echo "            </td>
            <td style=\"padding: 8px 50px\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "causa", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "sustituto", array()), "html", null, true);
                echo "</td>
            <td>
                <a href=\"#\" class=\"link-tooltip\" data-placement=\"top\" title=\"Ver\">
                    <span class=\"glyphicon glyphicon-eye-open\"></span>
                </a>
                <a href=\"#\"
                   class=\"link-tooltip\"
                   data-placement=\"top\"
                   title=\"Editar\"
                   data-url-asistant=\"";
                // line 28
                echo $this->env->getExtension('routing')->getPath("acta_update_asistencia");
                echo "\"
                   data_id_asistant=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "id", array()), "html", null, true);
                echo "\"
                   onclick=\"trasnlateData(this)\"
                   data-toggle=\"modal\"
                   data-target=\"#modal_causa_ausencia\">
                    <span class=\"glyphicon glyphicon-pencil\"></span>
                </a>
            </td>
        </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </tbody>
</table>

<h3 class=\"page-header\">Invitados</h3>
<table class=\"table\">
    <thead>
    <tr>
        <th style=\"width: 20%\">Personas</th>
        <th style=\"width: 5%\">Asistencia</th>
        <th style=\"width: 40%;padding: 10px 12%\">Causa</th>
        <th style=\"width: 20%\">Sustituto</th>
        <th style=\"width: 5%\">Acciones</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")));
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            if (($this->getAttribute($context["reunion"], "tipo", array()) == "Invitado")) {
                // line 54
                echo "        <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "id", array()), "html", null, true);
                echo "\">
            <td ";
                // line 55
                if (($this->getAttribute($context["reunion"], "asistencia", array()) == 1)) {
                    echo "style=\"color: red\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "descripcion", array()), "html", null, true);
                echo "</td>
            <td ";
                // line 56
                if (($this->getAttribute($context["reunion"], "asistencia", array()) == 1)) {
                    echo "style=\"color: red\"";
                }
                echo ">
                ";
                // line 57
                if (($this->getAttribute($context["reunion"], "asistencia", array()) == 1)) {
                    echo "<span class=\"glyphicon glyphicon-remove\"></span>";
                } else {
                    echo "<span class=\"glyphicon glyphicon-ok\"></span>";
                }
                // line 58
                echo "            </td>
            <td style=\"padding: 8px 50px\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "causa", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "sustituto", array()), "html", null, true);
                echo "</td>
            <td>
                <a href=\"#\" class=\"link-tooltip\" data-placement=\"top\" title=\"Ver\">
                    <span class=\"glyphicon glyphicon-eye-open\"></span>
                </a>
                <a href=\"#\"
                   class=\"link-tooltip\"
                   data-placement=\"top\"
                   title=\"Editar\"
                   data-url-asistant=\"";
                // line 69
                echo $this->env->getExtension('routing')->getPath("acta_update_asistencia");
                echo "\"
                   data_id_asistant=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "id", array()), "html", null, true);
                echo "\"
                   onclick=\"trasnlateData(this)\"
                   data-toggle=\"modal\"
                   data-target=\"#modal_causa_ausencia\"
                >
                    <span class=\"glyphicon glyphicon-pencil\"></span>
                </a>
            </td>
        </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    </tbody>
</table>";
        
        $__internal_6ab1d17c4b119643e5b656146cd22d76ea2b2d6843b5ea110037b85a590ef98c->leave($__internal_6ab1d17c4b119643e5b656146cd22d76ea2b2d6843b5ea110037b85a590ef98c_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Acta:asistencia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 80,  174 => 70,  170 => 69,  158 => 60,  154 => 59,  151 => 58,  145 => 57,  139 => 56,  131 => 55,  126 => 54,  121 => 53,  104 => 38,  88 => 29,  84 => 28,  72 => 19,  68 => 18,  65 => 17,  59 => 16,  53 => 15,  45 => 14,  40 => 13,  35 => 12,  22 => 1,);
    }
}
