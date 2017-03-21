<?php

/* AcuerdosGestionBundle:Acuerdo:table-index.html.twig */
class __TwigTemplate_6c8f86036937f758d37c8e1daabc1355ac8538c8b55d948b2f222ec57dd8aa8a extends Twig_Template
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
        $__internal_c80b5050a9483cfda8b1f96d20080e08f35582e461c6bea8ebddbbbfc4f070ff = $this->env->getExtension("native_profiler");
        $__internal_c80b5050a9483cfda8b1f96d20080e08f35582e461c6bea8ebddbbbfc4f070ff->enter($__internal_c80b5050a9483cfda8b1f96d20080e08f35582e461c6bea8ebddbbbfc4f070ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Acuerdo:table-index.html.twig"));

        // line 1
        echo "<div class=\"count pull-left\">
    Total de registros: <span class=\"badge\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span>
</div>
<table class=\"table table-hover table-responsive table-striped table-condensed table-responsive\">
    <thead>
    <tr>
        ";
        // line 8
        echo "        <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
        <th>";
        // line 9
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Descripción", "a.descripcion");
        echo "</th>
        <th>";
        // line 10
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha de creación", "a.fechaCreacion");
        echo "</th>
        <th>";
        // line 11
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cumplimiento Indicado", "a.fechaCumplimientoIndicada");
        echo "</th>
        ";
        // line 13
        echo "        <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "a.estado");
        echo "</th>
        ";
        // line 15
        echo "        ";
        // line 16
        echo "        <th>Responsables</th>
        ";
        // line 18
        echo "        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "        <tr>
            ";
            // line 25
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idAcuerdo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            if ($this->getAttribute($context["entity"], "fechaCreacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaCreacion", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 28
            if ($this->getAttribute($context["entity"], "fechaCumplimientoIndicada", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaCumplimientoIndicada", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            ";
            // line 30
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo "</td>
            ";
            // line 32
            echo "            ";
            // line 33
            echo "            ";
            // line 34
            echo "                ";
            // line 35
            echo "                    ";
            // line 36
            echo "                ";
            // line 37
            echo "            ";
            // line 38
            echo "            ";
            // line 39
            echo "            <td>
                ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "personas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
                // line 41
                echo "                    ";
                echo twig_escape_filter($this->env, $context["persona"], "html", null, true);
                echo "<br>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </td>
            ";
            // line 45
            echo "            ";
            // line 46
            echo "                ";
            // line 47
            echo "                    ";
            // line 48
            echo "                ";
            // line 49
            echo "            ";
            // line 50
            echo "            <td>
                ";
            // line 51
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("acuerdo"))) {
                // line 52
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acuerdo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"link-tooltip\" data-placement=\"top\" title=\"Ver\">
                        <span class=\"glyphicon glyphicon-eye-open\"></span>
                    </a>
                    <a href=\"\" class=\"link-tooltip\" data-placement=\"top\" title=\"Editar\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                    </a>
                    <a class=\"link-tooltip link-eliminar\" href=\"javascript:void(0);\"
                       data-placement=\"top\"
                       title=\"Eliminar\"
                       data-url = \"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acuerdo_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                       data-descripcion=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idAcuerdo", array()), "html", null, true);
                echo "\"
                       data-toggle=\"modal\" data-target=\"#modal-delete\">
                        <span class=\"glyphicon glyphicon-trash\"></span>
                    </a>
                ";
            } else {
                // line 66
                echo " ";
                // line 67
                echo "                    <a href=\"\" class=\"link-tooltip\" data-placement=\"top\" title=\"Ver\">
                        <span class=\"glyphicon glyphicon-eye-open\"></span>
                    </a>
                    <a href=\"#\" class=\"link-tooltip\" data-placement=\"top\" title=\"Editar\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                    </a>
                    <a class=\"link-tooltip link-eliminar\"
                       href=\"javascript:void(0);\"
                       data-placement=\"top\"
                       title=\"Eliminar\"
                       data-url = \"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acuerdo_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                       data-descripcion=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idAcuerdo", array()), "html", null, true);
                echo "\"
                       data-id=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\"
                       data-toggle=\"modal\" data-target=\"#modal-delete\">
                        <span class=\"glyphicon glyphicon-trash\"></span>
                    </a>
                ";
            }
            // line 84
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </tbody>
    <tfoot>
    <tr>
        <td colspan=\"3\">
            ";
        // line 91
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Default:paginator.html.twig");
        echo "
        </td>
    </tr>
    </tfoot>
</table>";
        
        $__internal_c80b5050a9483cfda8b1f96d20080e08f35582e461c6bea8ebddbbbfc4f070ff->leave($__internal_c80b5050a9483cfda8b1f96d20080e08f35582e461c6bea8ebddbbbfc4f070ff_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Acuerdo:table-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 91,  210 => 87,  202 => 84,  194 => 79,  190 => 78,  186 => 77,  174 => 67,  172 => 66,  164 => 62,  160 => 61,  147 => 52,  145 => 51,  142 => 50,  140 => 49,  138 => 48,  136 => 47,  134 => 46,  132 => 45,  129 => 43,  120 => 41,  116 => 40,  113 => 39,  111 => 38,  109 => 37,  107 => 36,  105 => 35,  103 => 34,  101 => 33,  99 => 32,  94 => 30,  88 => 28,  82 => 27,  78 => 26,  73 => 25,  70 => 23,  66 => 22,  60 => 18,  57 => 16,  55 => 15,  50 => 13,  46 => 11,  42 => 10,  38 => 9,  33 => 8,  25 => 2,  22 => 1,);
    }
}
