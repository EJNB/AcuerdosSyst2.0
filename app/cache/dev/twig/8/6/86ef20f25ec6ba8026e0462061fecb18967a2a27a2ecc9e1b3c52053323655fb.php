<?php

/* AcuerdosGestionBundle:Acta:index.html.twig */
class __TwigTemplate_86ef20f25ec6ba8026e0462061fecb18967a2a27a2ecc9e1b3c52053323655fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout-admin.html.twig", "AcuerdosGestionBundle:Acta:index.html.twig", 1);
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
        $__internal_7a2b34814789fb7a7f918873d4112b7be921658e22b9a002571048fac9f28940 = $this->env->getExtension("native_profiler");
        $__internal_7a2b34814789fb7a7f918873d4112b7be921658e22b9a002571048fac9f28940->enter($__internal_7a2b34814789fb7a7f918873d4112b7be921658e22b9a002571048fac9f28940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Acta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a2b34814789fb7a7f918873d4112b7be921658e22b9a002571048fac9f28940->leave($__internal_7a2b34814789fb7a7f918873d4112b7be921658e22b9a002571048fac9f28940_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3ea2b18ca6845af4665f8d3170ee0b3a68a4032c783384c0a1ef404673d8baac = $this->env->getExtension("native_profiler");
        $__internal_3ea2b18ca6845af4665f8d3170ee0b3a68a4032c783384c0a1ef404673d8baac->enter($__internal_3ea2b18ca6845af4665f8d3170ee0b3a68a4032c783384c0a1ef404673d8baac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->loadTemplate("AcuerdosGestionBundle:Default:flash-message.html.twig", "AcuerdosGestionBundle:Acta:index.html.twig", 4)->display($context);
        // line 5
        echo "
    <h2 class=\"page-header\">Actas</h2>

    <table class=\"table table-striped table-hover table-condensed\">
        <thead>
        <tr>
            <th>";
        // line 11
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Descripcion", "a.descripcion");
        echo "</th>
            <th>";
        // line 12
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "a.fecha");
        echo "</th>
            <th>";
        // line 13
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Hora Inicio", "a.horaInicio");
        echo "</th>
            <th>";
        // line 14
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Hora Fin", "a.horaFin");
        echo "</th>
            <th>";
        // line 15
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Aprobada", "a.aprobada");
        echo "</th>
            <th>";
        // line 16
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Revisada", "a.revisada");
        echo "</th>
            <th>Reunion</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["entity"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaInicio", array()), "H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaFin", array()), "H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "aprobada", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "revisada", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "reunion", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acta_print_pdf", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"link-tooltip\" data-placement=\"top\" data-placement=\"top\" title=\"imprimir\">
                        <span class=\"glyphicon glyphicon-print\"></span>
                    </a>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"link-tooltip\" data-placement=\"top\" title=\"Ver\">
                        <span class=\"glyphicon glyphicon-eye-open\"></span>
                    </a>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acta_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"link-tooltip\" data-placement=\"top\" title=\"Editar\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                    </a>
                    <a class=\"link-tooltip link-eliminar\" href=\"javascript:void(0);\"
                       data-placement=\"top\"
                       title=\"Eliminar\"
                       data-url = \"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acta_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"
                       data-descripcion=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "\"
                       data-toggle=\"modal\" data-target=\"#modal-delete\">
                        <span class=\"glyphicon glyphicon-trash\"></span>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
    ";
        // line 55
        echo "    <div class=\"navigation pull-right\">
        ";
        // line 56
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>

    <div class=\"list-actions\">
        ";
        // line 60
        $this->loadTemplate("AcuerdosGestionBundle:Default:link-add.html.twig", "AcuerdosGestionBundle:Acta:index.html.twig", 60)->display(array_merge($context, array("url" => "acta_new")));
        // line 61
        echo "    </div>

    ";
        // line 63
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Default:modals.html.twig");
        echo "

";
        
        $__internal_3ea2b18ca6845af4665f8d3170ee0b3a68a4032c783384c0a1ef404673d8baac->leave($__internal_3ea2b18ca6845af4665f8d3170ee0b3a68a4032c783384c0a1ef404673d8baac_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Acta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 63,  172 => 61,  170 => 60,  163 => 56,  160 => 55,  156 => 52,  143 => 45,  139 => 44,  130 => 38,  124 => 35,  118 => 32,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  91 => 25,  87 => 24,  84 => 23,  80 => 22,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
