<?php

/* AcuerdosGestionBundle:Default:modals_new_acuerdo.html.twig */
class __TwigTemplate_c2fd2a94c972fe521927f44439adf0409820e629f638a0b6fe9133b46f53bb78 extends Twig_Template
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
        $__internal_a61803e6d8c25abf64be0797551aa180099057a8a48c330a61bebfffaf6f9975 = $this->env->getExtension("native_profiler");
        $__internal_a61803e6d8c25abf64be0797551aa180099057a8a48c330a61bebfffaf6f9975->enter($__internal_a61803e6d8c25abf64be0797551aa180099057a8a48c330a61bebfffaf6f9975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Default:modals_new_acuerdo.html.twig"));

        // line 1
        echo "<!--modal para tomar los acuerdos-->
<form>
    <div class=\"modal fade\" id=\"modal_create_acuerdo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Crear Acuerdos</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label for=\"acuerdos_gestionbundle_acuerdo_fechaCumplimientoIndicada\">Fecha de Cumplimiento Indicada</label>
                        <input id=\"acuerdos_gestionbundle_acuerdo_fechaCumplimientoIndicada\"
                               type='text'
                               class=\"form-control format_date\"
                               required=\"required\"
                        />
                    </div>
                    <div class=\"form-group\">
                        <label class=\"required\" for=\"acuerdos_gestionbundle_acuerdo_estado\">Estado</label>
                        <select id=\"acuerdos_gestionbundle_acuerdo_estado\" class=\"form-control\">
                            <option value=\"Pendiente\">Pendiente</option>
                            <option value=\"Incumplido\">Incumplido</option>
                            <option value=\"Cumplido\">Cumplido</option>
                            <option value=\"En_proceso\">En proceso</option>
                            <option value=\"Permanente\">Permanente</option>
                            <option value=\"Sin_efecto\">Sin efecto</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"required\" for=\"acuerdos_gestionbundle_acuerdo_descripcion\">Descripción</label>
                        <textarea id=\"acuerdos_gestionbundle_acuerdo_descripcion\" required=\"required\" class=\"form-control\"></textarea>
                    </div>
                    <!--Responsable-->
                    <div class=\"form-group\">
                        <label>Responsable</label>
                        <select
                                id=\"select_responsables\"
                                class=\"selectpicker\" name=\"select_responsables[]\"
                                multiple
                                data-live-search=\"true\"
                                data-size=\"8\"
                                title=\"Seleccione los resposables\"
                                data-actions-box=\"true\"
                        >
                            ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 47
            echo "                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["area"], "html", null, true);
            echo "\">
                                ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")));
            foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
                if (($this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "area", array()) == $context["area"])) {
                    // line 49
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "idPersona", array()), "html", null, true);
                    echo "</option>
                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </select>
                    </div>
                    <input id=\"acuerdos_reunion_id\" type=\"hidden\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reunion"]) ? $context["reunion"] : $this->getContext($context, "reunion")), "id", array()), "html", null, true);
        echo "\">
                </div><!--/.modal-body-->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"btn_send_acuerdos\" data-url=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("acta_acuerdo_create");
        echo "\" data-dismiss=\"modal\">Guardar</button>
                </div>
            </div><!--/.modal-content-->
        </div>
    </div>
</form>
";
        
        $__internal_a61803e6d8c25abf64be0797551aa180099057a8a48c330a61bebfffaf6f9975->leave($__internal_a61803e6d8c25abf64be0797551aa180099057a8a48c330a61bebfffaf6f9975_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Default:modals_new_acuerdo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 58,  106 => 55,  102 => 53,  95 => 51,  83 => 49,  78 => 48,  73 => 47,  69 => 46,  22 => 1,);
    }
}
