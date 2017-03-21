<?php

/* AcuerdosGestionBundle:Acta:newActa.html.twig */
class __TwigTemplate_a88cd7da0152516f55bece67d54e4d0fb620b91b16648d8789bbd8aa9b88311a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout-admin.html.twig", "AcuerdosGestionBundle:Acta:newActa.html.twig", 1);
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
        $__internal_3b0d829596b03adeea95108f8b6d27fd56339ccb36ba08a3974c7cc8059f1d5c = $this->env->getExtension("native_profiler");
        $__internal_3b0d829596b03adeea95108f8b6d27fd56339ccb36ba08a3974c7cc8059f1d5c->enter($__internal_3b0d829596b03adeea95108f8b6d27fd56339ccb36ba08a3974c7cc8059f1d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Acta:newActa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b0d829596b03adeea95108f8b6d27fd56339ccb36ba08a3974c7cc8059f1d5c->leave($__internal_3b0d829596b03adeea95108f8b6d27fd56339ccb36ba08a3974c7cc8059f1d5c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3b7c1f0e537b62a6bbbe9b1d2a0a87daf9ec6226597b930df8d82942db2f6d7 = $this->env->getExtension("native_profiler");
        $__internal_b3b7c1f0e537b62a6bbbe9b1d2a0a87daf9ec6226597b930df8d82942db2f6d7->enter($__internal_b3b7c1f0e537b62a6bbbe9b1d2a0a87daf9ec6226597b930df8d82942db2f6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container-fluid\">
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_acta"]) ? $context["form_acta"] : $this->getContext($context, "form_acta")), 'form_start');
        echo "
    <input type=\"hidden\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i"), "html", null, true);
        echo "\" name=\"horainicio\">
    <ul class=\"nav nav-pills center-block\" style=\"margin-left: 350px\">
        <li role=\"presentation\" class=\"active link-asistencia\"><a id=\"link-asistencia\" href=\"#\">Asistencia</a></li>
        <li role=\"presentation\" class=\"link-desarrollo-reunion\"><a id=\"link-desarrollo-reunion\" href=\"#\">Desarrollo de la reunion</a></li>
        <li role=\"presentation\" class=\"link-acuerdos-tomados\"><a id=\"link-acuerdos-tomados\" href=\"#\">Acuerdos Tomados</a></li>
        <li role=\"presentation\" class=\"link-\"><a id=\"link-revision-aprobacion\" href=\"#\">Aprobaci&oacute;n y Revisi&oacute;n</a></li>
    </ul>
    ";
        // line 14
        echo "    <div class=\"contenedor\">
        <div id=\"asistencia\">

            ";
        // line 18
        echo "            <div class=\"col-md-12\">
                <input id=\"acta-reunion-id\" type=\"hidden\" name=\"reunion_id\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reunion"]) ? $context["reunion"] : $this->getContext($context, "reunion")), "id", array()), "html", null, true);
        echo "\" />
                <br>
                <h3 class=\"page-header\">Participantes e Invitados</h3>
                <div class=\"table-asistencia\">
                    ";
        // line 23
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Acta:asistencia.html.twig");
        echo "
                </div>

            </div><!--col-md-12-- Aqui termina la seccion de los participantes-->
        </div><!--/.div #asistencia-->
        ";
        // line 29
        echo "        <div id=\"desarrollo_reunion\" class=\"hide\" style=\"position: absolute; top: 20%; width: 92%;\">
            ";
        // line 31
        echo "            <div class=\"row\">
                <h2 class=\"page-header\">Temas y Comentarios</h2>
                <div class=\"col-md-4\">
                    <label for=\"temas_select\">Temas</label>
                    <select id=\"temas_select\" class=\"form-control\" size=\"29\">
                        ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reunion"]) ? $context["reunion"] : $this->getContext($context, "reunion")), "temas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tema"]) {
            // line 37
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tema"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tema"], "descripcion", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </select>
                </div>
                ";
        // line 42
        echo "                <div class=\"col-md-4\">
                    <fieldset id=\"comentario\" disabled>
                        <label>Seleccione la persona</label>
                        <select id=\"select_persona\" class=\"form-control selectpicker\" data-live-search=\"true\" title=\"Seleccione la persona\">
                            ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")));
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            // line 47
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "descripcion", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        </select>
                        <br>
                        ";
        // line 52
        echo "                        <label for=\"exampleInputEmail1\">Comentarios</label>
                        <textarea id=\"text_comentario\" class=\"form-control\" placeholder=\"inserte el comentario\" rows=\"15\"></textarea>
                        <button type=\"button\" id=\"send_comentarios\" class=\"btn btn-default\" onclick=\"createComentario(this)\">Agregar</button>
                        <a id=\"tomar_acuerdos\" href=\"javascript:void(0);\" class=\"btn btn-default\" >Tomar Acuerdo</a>
                    </fieldset>
                </div>

                ";
        // line 60
        echo "                <div class=\"col-md-4\">
                    <label for=\"exampleInputEmail1\">Historial de comentarios</label>
                    <div id=\"historial_comentarios\" class=\"form-control\"  style=\"height: 500px; overflow-x: hidden; padding: 20px 10px;\">
                        <!--Aqui va el contenido enviado por ajax -->
                        ";
        // line 64
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Acta:list-coment.html.twig");
        echo "
                    </div>
                </div>
            </div>
            <br>
        </div><!--/div#desarrollo_reunion-->
        ";
        // line 71
        echo "        <div id=\"acuerdos_tomados\" class=\"hide\">
            <h2 class=\"page-header\">Acuerdos tomados</h2>
            <div class=\"table-acuerdos-tomados\">
                ";
        // line 74
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Acuerdo:table-index.html.twig");
        echo "
            </div>
        </div>
        <div id=\"revision_aprobacion\" class=\"hide\">

            <h2 class=\"page-header\">Revision y Aprobacion</h2>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        <label>Aprobada</label>
                        <select name=\"aprobada\" class=\"selectpicker\" data-size=\"10\" data-live-search=\"true\" title=\"Seleccione la persona\">
                            ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")));
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            // line 86
            echo "                                <option data-subtext=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "cargo", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "idPersona", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "idPersona", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label>Revisada</label>
                        <select name=\"revisada\" class=\"selectpicker\" data-size=\"10\" data-live-search=\"true\" title=\"Seleccione la persona\">
                            ";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")));
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            // line 95
            echo "                                <option data-subtext=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reunion"], "idPersona", array()), "cargo", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "idPersona", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "idPersona", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                        </select>
                    </div>
                </div>
            </div>

            <div class=\"\">
                <button type=\"submit\" class=\"btn btn-primary\">Terminar</button>
                <a class=\"btn btn-default\" href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("acta");
        echo "\">Regresar al listado</a>
            </div>
        </div>
    </div><!--/.contenedor-->

    ";
        // line 109
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_acta"]) ? $context["form_acta"] : $this->getContext($context, "form_acta")), 'form_end');
        echo "
</div><!--/end container-fluid-->
    ";
        // line 111
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Default:modals.html.twig");
        echo "
    ";
        // line 112
        echo twig_include($this->env, $context, "AcuerdosGestionBundle:Default:modals_new_acuerdo.html.twig");
        echo "

";
        
        $__internal_b3b7c1f0e537b62a6bbbe9b1d2a0a87daf9ec6226597b930df8d82942db2f6d7->leave($__internal_b3b7c1f0e537b62a6bbbe9b1d2a0a87daf9ec6226597b930df8d82942db2f6d7_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Acta:newActa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 112,  241 => 111,  236 => 109,  228 => 104,  219 => 97,  206 => 95,  202 => 94,  194 => 88,  181 => 86,  177 => 85,  163 => 74,  158 => 71,  149 => 64,  143 => 60,  134 => 52,  130 => 49,  119 => 47,  115 => 46,  109 => 42,  105 => 39,  94 => 37,  90 => 36,  83 => 31,  80 => 29,  72 => 23,  65 => 19,  62 => 18,  57 => 14,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
