<?php

/* AcuerdosGestionBundle:Procedencia:index.html.twig */
class __TwigTemplate_08ea130cc8a9052766adfadd7498d784ed784f7010372551f282a71e5735844b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout-admin.html.twig", "AcuerdosGestionBundle:Procedencia:index.html.twig", 1);
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
        $__internal_5864716bd0c64369fdacfdc09d30c97eaa82eb9c48294d98144a9425e191f0f3 = $this->env->getExtension("native_profiler");
        $__internal_5864716bd0c64369fdacfdc09d30c97eaa82eb9c48294d98144a9425e191f0f3->enter($__internal_5864716bd0c64369fdacfdc09d30c97eaa82eb9c48294d98144a9425e191f0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Procedencia:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5864716bd0c64369fdacfdc09d30c97eaa82eb9c48294d98144a9425e191f0f3->leave($__internal_5864716bd0c64369fdacfdc09d30c97eaa82eb9c48294d98144a9425e191f0f3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_81f7dc8c7e9bb10a6426e474ec64bf86d6dae6a00b41c80ea475afd401c0e012 = $this->env->getExtension("native_profiler");
        $__internal_81f7dc8c7e9bb10a6426e474ec64bf86d6dae6a00b41c80ea475afd401c0e012->enter($__internal_81f7dc8c7e9bb10a6426e474ec64bf86d6dae6a00b41c80ea475afd401c0e012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("AcuerdosGestionBundle:Default:flash-message.html.twig", "AcuerdosGestionBundle:Procedencia:index.html.twig", 5)->display($context);
        // line 6
        echo "
    <h3 class=\"page-header\">Procedencias</h3>

    <div class=\"count pull-left\">
        Total de registros: <span class=\"badge\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span>
    </div>

    <table class=\"table table-hover table-condensed\">
        <thead>
        <tr>
            <th style=\"width: 5%;\">No</th>
            <th style=\"width: 25%;\">";
        // line 17
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Procedencia", "p.descripcion");
        echo "</th>
            <th style=\"width: 25%\">Prefijo</th>
            <th style=\"width: 25%\">Acciones</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "procedencia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prefijo", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("procedencia_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span>Editar</a>
                    <a class=\"link-eliminar\" href=\"javascript:void(0);\"
                       data-url = \"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("procedencia_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"
                       data-descripcion=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "procedencia", array()), "html", null, true);
            echo "\"
                       data-toggle=\"modal\" data-target=\"#modal-delete\">
                        <span class=\"glyphicon glyphicon-trash\"></span>Eliminar
                    </a>
                </td>
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">
                ";
        // line 44
        echo "            </td>
        </tr>
        </tfoot>
    </table>
    <div class=\"list-actions\">
        ";
        // line 49
        $this->loadTemplate("AcuerdosGestionBundle:Default:link-add.html.twig", "AcuerdosGestionBundle:Procedencia:index.html.twig", 49)->display(array_merge($context, array("url" => "procedencia_new")));
        // line 50
        echo "    </div>

    ";
        // line 52
        $this->loadTemplate("AcuerdosGestionBundle:Default:modals.html.twig", "AcuerdosGestionBundle:Procedencia:index.html.twig", 52)->display($context);
        // line 53
        echo "
";
        
        $__internal_81f7dc8c7e9bb10a6426e474ec64bf86d6dae6a00b41c80ea475afd401c0e012->leave($__internal_81f7dc8c7e9bb10a6426e474ec64bf86d6dae6a00b41c80ea475afd401c0e012_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Procedencia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 53,  152 => 52,  148 => 50,  146 => 49,  139 => 44,  133 => 39,  112 => 32,  108 => 31,  103 => 29,  98 => 27,  94 => 26,  90 => 25,  87 => 24,  70 => 23,  61 => 17,  51 => 10,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
