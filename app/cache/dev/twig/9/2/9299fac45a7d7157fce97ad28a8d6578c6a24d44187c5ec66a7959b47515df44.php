<?php

/* AcuerdosGestionBundle:Persona:table-index.html.twig */
class __TwigTemplate_9299fac45a7d7157fce97ad28a8d6578c6a24d44187c5ec66a7959b47515df44 extends Twig_Template
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
        $__internal_efbbeb3b4129667b5ca7aaa94698d64e3e784def9e50cfea84c954201f05f9fc = $this->env->getExtension("native_profiler");
        $__internal_efbbeb3b4129667b5ca7aaa94698d64e3e784def9e50cfea84c954201f05f9fc->enter($__internal_efbbeb3b4129667b5ca7aaa94698d64e3e784def9e50cfea84c954201f05f9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Persona:table-index.html.twig"));

        // line 1
        echo "<div class=\"count pull-left\" style=\"display: block;\">
    Total de registros : <span class=\"badge\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span>
</div>
<br>
<table class=\"table table-hover table-condensed\">
    <thead>
    <tr>
        <th style=\"width: 5%;\">No</th>
        <th style=\"width: 20%;\">";
        // line 9
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nombre y apellidos", "p.descripcion");
        echo "</th>
        <th style=\"width: 7%;\">";
        // line 10
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Usuario", "p.username");
        echo "</th>
        <th style=\"width: 20%;\">";
        // line 11
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cargo", "p.cargo");
        echo "</th>
        <th style=\"width: 20%;\">";
        // line 12
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Email", "p.email");
        echo "</th>
        <th style=\"width: 15%\">Departamento</th>
        <th style=\"width: 25%\">Acciones</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 18
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
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
            ";
            // line 24
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cargo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "area", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 29
            echo "                <a href=\"javascript:void(0);\"
                   url_change_password=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_password", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"
                   descripcion = \"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "\"
                   class=\"link-tooltip link-change-password\"
                   data-placement=\"top\"
                   title=\"Cambiar contraseña\"
                   data-toggle=\"modal\"
                   data-target=\"#change_password\"
                >
                    <span class=\"glyphicon glyphicon-edit\"></span>
                </a>
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"link-tooltip\" data-placement=\"top\" title=\"Editar\">
                    <span class=\"glyphicon glyphicon-pencil\"></span>
                </a>
                <a class=\"link-eliminar link-tooltip\"
                   href=\"javascript:void(0);\"
                   data-placement=\"top\" title=\"Eliminar\"
                   data-url = \"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"
                   data-descripcion=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cargo", array()), "html", null, true);
            echo "\"
                   data-toggle=\"modal\" data-target=\"#modal-delete\">
                    <span class=\"glyphicon glyphicon-trash\"></span>
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
        // line 54
        echo "    </tbody>
    <tfoot>
    <tr>
        <td colspan=\"3\">
            ";
        // line 58
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Default:paginator.html.twig");
        echo "
        </td>
    </tr>
    </tfoot>
</table>
";
        
        $__internal_efbbeb3b4129667b5ca7aaa94698d64e3e784def9e50cfea84c954201f05f9fc->leave($__internal_efbbeb3b4129667b5ca7aaa94698d64e3e784def9e50cfea84c954201f05f9fc_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Persona:table-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 58,  155 => 54,  134 => 47,  130 => 46,  121 => 40,  109 => 31,  105 => 30,  102 => 29,  97 => 26,  93 => 25,  88 => 24,  84 => 22,  80 => 21,  76 => 20,  73 => 19,  56 => 18,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  25 => 2,  22 => 1,);
    }
}
