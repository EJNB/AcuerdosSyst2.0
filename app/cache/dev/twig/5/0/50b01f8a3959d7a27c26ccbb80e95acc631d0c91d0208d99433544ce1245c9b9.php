<?php

/* AcuerdosGestionBundle:Reunion:index.html.twig */
class __TwigTemplate_50b01f8a3959d7a27c26ccbb80e95acc631d0c91d0208d99433544ce1245c9b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout-admin.html.twig", "AcuerdosGestionBundle:Reunion:index.html.twig", 1);
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
        $__internal_bf6e109d20f28bca1e22e81a255d7749ce2dff4f8c02a0ee127fca921f633c7a = $this->env->getExtension("native_profiler");
        $__internal_bf6e109d20f28bca1e22e81a255d7749ce2dff4f8c02a0ee127fca921f633c7a->enter($__internal_bf6e109d20f28bca1e22e81a255d7749ce2dff4f8c02a0ee127fca921f633c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Reunion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf6e109d20f28bca1e22e81a255d7749ce2dff4f8c02a0ee127fca921f633c7a->leave($__internal_bf6e109d20f28bca1e22e81a255d7749ce2dff4f8c02a0ee127fca921f633c7a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_69839d1998528c70057cc7adff792d3d97cdcc4f743e57adcc86cc0fe272dfbb = $this->env->getExtension("native_profiler");
        $__internal_69839d1998528c70057cc7adff792d3d97cdcc4f743e57adcc86cc0fe272dfbb->enter($__internal_69839d1998528c70057cc7adff792d3d97cdcc4f743e57adcc86cc0fe272dfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->loadTemplate("AcuerdosGestionBundle:Default:flash-message.html.twig", "AcuerdosGestionBundle:Reunion:index.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("mis_convocatorias"))) {
            // line 6
            echo "        <h2 class=\"page-header\">Mis Convocatorias</h2>
    ";
        } else {
            // line 8
            echo "        <h2 class=\"page-header\">Convocatorias</h2>
    ";
        }
        // line 10
        echo "

    ";
        // line 12
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Default:register-count.html.twig");
        echo "
    <table class=\"table table-striped table-hover table-condensed\">
        <thead>
        <tr>
            <th style=\"width: 10%\">";
        // line 16
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "IdReunion", "r.idReunion");
        echo "</th>
            ";
        // line 18
        echo "            <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha de Creación", "r.fechaCreacion");
        echo "</th>
            <th>";
        // line 19
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha de Realización", "r.fechaRealizacion");
        echo "</th>
            <th>";
        // line 20
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Lugar", "r.lugar");
        echo "</th>
            ";
        // line 22
        echo "            <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tipo", "r.tipo");
        echo "</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idReunion", array()), "html", null, true);
            echo "</td><!--en este columna se mostraran los ids de las reunii=ones q no es nas q el prefijo de la procedencia + el id de la reunio-->
                ";
            // line 31
            echo "                <td>";
            if ($this->getAttribute($context["entity"], "fechaCreacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaCreacion", array()), "d-m-Y h:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["entity"], "fechaRealizacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaRealizacion", array()), "d-m-Y h:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lugar", array()), "html", null, true);
            echo "</td>
                ";
            // line 35
            echo "                <td>";
            if (($this->getAttribute($context["entity"], "tipo", array()) == 1)) {
                echo "Ordinaria";
                echo " ";
            } else {
                echo " ";
                echo "Extraordinaria";
            }
            echo "</td>
                ";
            // line 37
            echo "                <td>
                    <a ";
            // line 38
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("mis_convocatorias"))) {
                // line 39
                echo "                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mi_convacotoria_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                        ";
            } else {
                // line 41
                echo "                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reunion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                        ";
            }
            // line 43
            echo "                            class=\"link-tooltip\" data-placement=\"top\" title=\"Ver\">
                            <span class=\"glyphicon glyphicon-eye-open\"></span>
                    </a>
                    <a ";
            // line 46
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("mis_convocatorias"))) {
                // line 47
                echo "                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mi_convacotoria_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                        ";
            } else {
                // line 49
                echo "                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reunion_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                        ";
            }
            // line 51
            echo "                         class=\"link-tooltip\" data-placement=\"top\" title=\"Editar\">
                    <span class=\"glyphicon glyphicon-pencil\"></span>
                    </a>
                    <a class=\"link-tooltip link-eliminar\" href=\"javascript:void(0);\"
                       data-placement=\"top\"
                       title=\"Eliminar\"
                       data-url = \"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reunion_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"
                       data-descripcion=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "procedencia", array()), "html", null, true);
            echo "\"
                       data-toggle=\"modal\" data-target=\"#modal-delete\"
                    >
                        <span class=\"glyphicon glyphicon-trash\"></span>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\">
                    ";
        // line 70
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Default:paginator.html.twig");
        echo "
                </td>
            </tr>
        </tfoot>
    </table>
    <div class=\"list-actions\">
        ";
        // line 76
        $this->loadTemplate("AcuerdosGestionBundle:Default:link-add.html.twig", "AcuerdosGestionBundle:Reunion:index.html.twig", 76)->display(array_merge($context, array("url" => ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("reunion"))) ? ("reunion_new") : ("new_convocatoria")))));
        // line 77
        echo "    </div>

    ";
        // line 79
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Default:modals.html.twig");
        echo "
";
        
        $__internal_69839d1998528c70057cc7adff792d3d97cdcc4f743e57adcc86cc0fe272dfbb->leave($__internal_69839d1998528c70057cc7adff792d3d97cdcc4f743e57adcc86cc0fe272dfbb_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Reunion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 79,  209 => 77,  207 => 76,  198 => 70,  192 => 66,  178 => 58,  174 => 57,  166 => 51,  160 => 49,  154 => 47,  152 => 46,  147 => 43,  141 => 41,  135 => 39,  133 => 38,  130 => 37,  119 => 35,  115 => 33,  109 => 32,  102 => 31,  98 => 29,  95 => 28,  91 => 27,  82 => 22,  78 => 20,  74 => 19,  69 => 18,  65 => 16,  58 => 12,  54 => 10,  50 => 8,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
