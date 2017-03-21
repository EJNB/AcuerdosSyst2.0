<?php

/* AcuerdosGestionBundle:Reunion:new.html.twig */
class __TwigTemplate_f9ed1f34483433a1140dabfbb12b8ac8d7eade91bdaefef1ae69d54a04d72f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout-admin.html.twig", "AcuerdosGestionBundle:Reunion:new.html.twig", 2);
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
        $__internal_58454677d5dbad763afc1bd6474b42333cbf5eca5eb112d5cf5cf73f73811c41 = $this->env->getExtension("native_profiler");
        $__internal_58454677d5dbad763afc1bd6474b42333cbf5eca5eb112d5cf5cf73f73811c41->enter($__internal_58454677d5dbad763afc1bd6474b42333cbf5eca5eb112d5cf5cf73f73811c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Reunion:new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "form/fields.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58454677d5dbad763afc1bd6474b42333cbf5eca5eb112d5cf5cf73f73811c41->leave($__internal_58454677d5dbad763afc1bd6474b42333cbf5eca5eb112d5cf5cf73f73811c41_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_91558b6e7b1159a8eb8c022f075a614d77efd38966d8ac0ab98b351c02fdc302 = $this->env->getExtension("native_profiler");
        $__internal_91558b6e7b1159a8eb8c022f075a614d77efd38966d8ac0ab98b351c02fdc302->enter($__internal_91558b6e7b1159a8eb8c022f075a614d77efd38966d8ac0ab98b351c02fdc302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <h2 class=\"page-header\">Nueva Convocatoria</h2>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"row\">

        <div class=\"col-md-3\">";
        // line 13
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "procedencia", array()), 'row');
        echo "

            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaRealizacion", array()), 'row');
        echo "

            ";
        // line 20
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'row', array("atrr" => array("class" => "form-control")));
        echo "

            <!--Coordinador, Participantes e Invitados-->
            <div class=\"select-cordinador-part-invitados\">
                ";
        // line 24
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Reunion:select-participantes.html.twig");
        echo "
            </div>

            ";
        // line 28
        echo "        </div><!--/.col-md-3-->

        <div class=\"col-md-3\">";
        // line 31
        echo "            <!--add Temas-->
            <label><strong>Agregue sus temas</strong></label>

            <div class=\"form-group\">
                <input id=\"add_temas_descripcion\" type=\"text\" placeholder=\"titulo del tema\" name=\"tema_descripcion\">
            </div>
            <!--Clasificacion-->
            <div class=\"form-group\">
                <select id=\"add_temas_clasificacion\" class=\"form-control selectpicker\" name=\"tema_clasificacion\" title=\"Seleccione la clasificacion\">
                    <option value=\"Informativo\">Informativo</option>
                    <option value=\"Análisis y aprobación\">Análisis y aprobación</option>
                    <option value=\"Seguimiento y control\">Seguimiento y control</option>
                </select>
            </div>
            <!--Responsable del tema-->
            ";
        // line 47
        echo "                    ";
        // line 48
        echo "                    ";
        // line 49
        echo "                    ";
        // line 50
        echo "                    ";
        // line 51
        echo "                    ";
        // line 52
        echo "                    ";
        // line 53
        echo "                    ";
        // line 54
        echo "            ";
        // line 55
        echo "                ";
        // line 56
        echo "                    ";
        // line 57
        echo "                        ";
        // line 58
        echo "                            ";
        // line 59
        echo "                        ";
        // line 60
        echo "                    ";
        // line 61
        echo "                ";
        // line 62
        echo "
            ";
        // line 64
        echo "            <div class=\"form-group\">
                ";
        // line 66
        echo "                <textarea id=\"text_descripcion\" rows=\"16\" placeholder=\"Descripcion del tema \"></textarea>

                ";
        // line 69
        echo "                <a href=\"#\" class=\"btn btn-default\" data-target=\"#modal-add-person\" data-toggle=\"modal\">
                    <span class=\"glyphicon glyphicon-plus\"></span>Agregar Persona
                </a>
            </div>
        </div><!--/.col-md-3-->
        ";
        // line 75
        echo "        <div id=\"send-temas\" class=\"col-md-1\">
            <a class=\"btn glyphicon glyphicon-plus link-tooltip\"
               id=\"add-tema\" href=\"javascript:void(0);\"
               data-url=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("add_temas");
        echo "\"
               ";
        // line 80
        echo "               data-placement=\"top\"
               title=\"Agregar Tema\"
            ></a>
            <a class=\"btn glyphicon glyphicon-minus link-tooltip\"
               id=\"remove_tema\" href=\"javascript:void(0);\"
               data-toggle=\"tooltip\"
               data-placement=\"bottom\"
               title=\"Quitar Tema\"
            ></a>
        </div><!--/.col-md-1-->
        <div class=\"col-md-5\" style=\"padding: 0\">";
        // line 91
        echo "            <!--Historial de temas-->
            <label for=\"select-temas-asignados\">Temas Seleccionados</label>
            ";
        // line 94
        echo "                ";
        // line 95
        echo "            ";
        // line 96
        echo "            <select name=\"select-temas-asignados[]\" id=\"select-temas-asignados\" size=\"30\" multiple class=\"form-control\" required=\"required\">

            </select>
            <input type=\"hidden\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" name=\"url\"/>

            <div class=\"pull-right\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Aceptar\" id=\"btn-send\" style=\"display: none\"/>
                <a id=\"btn-enviar\" class=\"btn btn-primary\" href=\"javascript:void(0);\">Aceptar</a>
                <a id=\"remove_temas\" class=\"btn btn-default\" ";
        // line 104
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("new_convocatoria"))) {
            echo "href=\"";
            echo $this->env->getExtension('routing')->getPath("mis_convocatorias");
        } else {
            echo "href=\"";
            echo $this->env->getExtension('routing')->getPath("reunion");
        }
        echo "\">Regresar al listado</a>
            </div>
        </div>
    </div><!--/.row-->

    ";
        // line 109
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        // line 111
        $this->loadTemplate("AcuerdosGestionBundle:Default:modals.html.twig", "AcuerdosGestionBundle:Reunion:new.html.twig", 111)->display($context);
        // line 112
        echo "
";
        
        $__internal_91558b6e7b1159a8eb8c022f075a614d77efd38966d8ac0ab98b351c02fdc302->leave($__internal_91558b6e7b1159a8eb8c022f075a614d77efd38966d8ac0ab98b351c02fdc302_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Reunion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 112,  215 => 111,  210 => 109,  196 => 104,  188 => 99,  183 => 96,  181 => 95,  179 => 94,  175 => 91,  163 => 80,  159 => 78,  154 => 75,  147 => 69,  143 => 66,  140 => 64,  137 => 62,  135 => 61,  133 => 60,  131 => 59,  129 => 58,  127 => 57,  125 => 56,  123 => 55,  121 => 54,  119 => 53,  117 => 52,  115 => 51,  113 => 50,  111 => 49,  109 => 48,  107 => 47,  90 => 31,  86 => 28,  80 => 24,  72 => 20,  67 => 17,  63 => 16,  58 => 14,  55 => 13,  48 => 8,  43 => 5,  37 => 4,  30 => 2,  28 => 1,  11 => 2,);
    }
}
