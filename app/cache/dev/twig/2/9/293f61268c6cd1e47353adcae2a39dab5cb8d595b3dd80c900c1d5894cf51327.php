<?php

/* AcuerdosGestionBundle:Default:modals.html.twig */
class __TwigTemplate_293f61268c6cd1e47353adcae2a39dab5cb8d595b3dd80c900c1d5894cf51327 extends Twig_Template
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
        $__internal_375de6ee33c82fc921284d48400cd9af344b0e6be48300a8090cce41c2e099b3 = $this->env->getExtension("native_profiler");
        $__internal_375de6ee33c82fc921284d48400cd9af344b0e6be48300a8090cce41c2e099b3->enter($__internal_375de6ee33c82fc921284d48400cd9af344b0e6be48300a8090cce41c2e099b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Default:modals.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmación</h4>
            </div>
            <div class=\"modal-body\">
                ¿Está seguro de eliminar el registro seleccionado?
                <p id=\"text-descripcion-popup-eliminar\"></p>
            </div>
            <div class=\"modal-footer\">
                <a id=\"link-popup-eliminar\" class=\"btn btn-danger\" href=\"javascript:void(0)\" data=\"\">Si</a>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">No</button>
            </div>
        </div>
    </div>
</div>
<!--modal para eliminar los comentarios-->
<div class=\"modal fade\" id=\"modal-delete-coment\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmación</h4>
            </div>
            <div class=\"modal-body\">
                ¿Está seguro que decea eliminar el comentario seleccionado?
                <p id=\"text-descripcion-popup-eliminar\"></p>
            </div>
            <div class=\"modal-footer\">
                <button id=\"send_delete_coment\" class=\"btn btn-danger\" onclick=\"deleteComent(this)\">Si</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">No</button>
            </div>
        </div>
    </div>
</div>

<!--modal para agregar una nueva persona-->
<div class=\"modal fade bs-example-modal-sm\" id=\"modal-add-person\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar persona:</h4>
            </div>
            <div class=\"modal-body\">
                <form action=\"\" method=\"post\">
                    <div class=\"form-group\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"Nombre y apellidos\" required=\"required\" name=\"descripcion\" id=\"popup-persona-descripcion\">
                    </div>
                    <div class=\"form-group\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"Cargo\" required=\"required\" name=\"cargo\" id=\"popup-persona-cargo\">
                    </div>
                    <div class=\"form-group\">
                        <input class=\"form-control\" type=\"email\" placeholder=\"Email\" required=\"required\" name=\"email\" id=\"popup-persona-email\">
                    </div>
                    <div class=\"form-group\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"Usuario\" required=\"required\" name=\"username\">
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input class=\"form-control\" type=\"password\" placeholder=\"Contraseña\" required=\"required\" name=\"input_first_password\" id=\"input_first_password\">
                        <a href=\"javascript:void(0)\" onmousedown=\"showPassword( document.getElementById('input_first_password') )\" onmouseup=\"hidePassword(document.getElementById('input_first_password'))\">
                            <span class=\"glyphicon glyphicon-eye-open form-control-feedback\" aria-hidden=\"true\"></span>
                        </a>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input class=\"form-control\" type=\"password\" placeholder=\"Repita la contraseña\" required=\"required\" name=\"input_second_password\" id=\"input_second_password\">
                        <a href=\"javascript:void(0)\" onmousedown=\"showPassword( document.getElementById('input_second_password') )\" onmouseup=\"hidePassword(document.getElementById('input_second_password'))\">
                            <span class=\"glyphicon glyphicon-eye-open form-control-feedback\" aria-hidden=\"true\"></span>
                        </a>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 75
        echo "                        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcuerdosGestionBundle:Area:findAreas"));
        echo "
                    </div>

                    <button
                            ";
        // line 80
        echo "                            type=\"submit\"
                            id=\"submit-persona\"
                            class=\"btn btn-primary\"
                            data-url=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("ajax_person_create");
        echo "\"
                            >
                        Enviar
                    </button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div><!--/.modal add-person-->

<!--agregar causa de ausencia-->
<div class=\"modal fade\" id=\"modal_causa_ausencia\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\">Causa de Ausencia</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\" style=\"margin-left: 30px\">
                    <label class=\"radio-inline\">
                        ";
        // line 106
        echo "                        <input type=\"radio\" name=\"acuerdos_acta_ausente\" id=\"acuerdos_acta_presente\" value=\"0\">
                        Presente
                    </label>
                    <label class=\"radio-inline\">
                        <input type=\"radio\" name=\"acuerdos_acta_ausente\" id=\"acuerdos_acta_ausente\" value=\"1\">
                        Ausente
                    </label>
                </div>
                <fieldset id=\"causa_ausencia\" disabled>
                    <label for=\"exampleInputEmail1\">Causa de Ausencia</label>
                    <textarea id=\"textarea_causa_ausencia\" class=\"form-control\" placeholder=\"inserte la causa de la ausencia\" rows=\"5\"></textarea>
                    <br>
                    <label for=\"exampleInputEmail1\">Sustituto</label>
                    ";
        // line 120
        echo "                </fieldset>
            </div>
            <div class=\"modal-footer\">
                <button id=\"send_causa_ausencia\" type=\"button\" class=\"btn btn-primary\">Aceptar</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--modal para cambiar la contraseña -->
<div class=\"modal fade bs-example-modal-sm\" id=\"change_password\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Cambiar contraseña:</h4>
            </div>
            <div class=\"modal-body\">
                <form id=\"form_change_pass\" action=\"\" method=\"post\">
                    <div class=\"form-group has-feedback\">
                        <input state=\"true\" class=\"form-control\" type=\"password\" placeholder=\"Introdusca la contraseña\" required=\"required\" name=\"first_password\" id=\"first_password\">
                        <a href=\"javascript:void(0)\" onmousedown=\"showPassword( document.getElementById('first_password') )\" onmouseup=\"hidePassword(document.getElementById('first_password'))\">
                            <span class=\"glyphicon glyphicon-eye-open form-control-feedback\" aria-hidden=\"true\"></span>
                        </a>
                        <span id=\"inputSuccess2Status\" class=\"sr-only\">(success)</span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input class=\"form-control\" type=\"password\" placeholder=\"Repita la contraseña\" required=\"required\" name=\"repeat_contraseña\" id=\"second_password\">
                        <a href=\"javascript:void(0)\" onmousedown=\"showPassword( document.getElementById('second_password') )\" onmouseup=\"hidePassword(document.getElementById('second_password'))\">
                            <span class=\"glyphicon glyphicon-eye-open form-control-feedback\" aria-hidden=\"true\"></span>
                        </a>
                        <span id=\"inputSuccess2Status\" class=\"sr-only\">(success)</span>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        Enviar
                    </button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--modal para cambiar las contraseñas-->
<div class=\"modal fade bs-example-modal-sm\" id=\"modal-change-pass-user\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Cambiar contraseña:</h4>
            </div>
            <div class=\"modal-body\">
                <form id=\"form_change_pass\" action=\"\" method=\"post\">
                    <div class=\"form-group has-feedback\">
                        <input state=\"true\" class=\"form-control\" type=\"password\" placeholder=\"Introdusca la contraseña\" required=\"required\" name=\"first_password\" id=\"first_password\">
                        <a href=\"javascript:void(0)\" onmousedown=\"showPassword( document.getElementById('first_password') )\" onmouseup=\"hidePassword(document.getElementById('first_password'))\">
                            <span class=\"glyphicon glyphicon-eye-open form-control-feedback\" aria-hidden=\"true\"></span>
                        </a>
                        <span id=\"inputSuccess2Status\" class=\"sr-only\">(success)</span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input class=\"form-control\" type=\"password\" placeholder=\"Repita la contraseña\" required=\"required\" name=\"repeat_contraseña\" id=\"second_password\">
                        <a href=\"javascript:void(0)\" onmousedown=\"showPassword( document.getElementById('second_password') )\" onmouseup=\"hidePassword(document.getElementById('second_password'))\">
                            <span class=\"glyphicon glyphicon-eye-open form-control-feedback\" aria-hidden=\"true\"></span>
                        </a>
                        <span id=\"inputSuccess2Status\" class=\"sr-only\">(success)</span>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        Enviar
                    </button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 200
        echo "
";
        
        $__internal_375de6ee33c82fc921284d48400cd9af344b0e6be48300a8090cce41c2e099b3->leave($__internal_375de6ee33c82fc921284d48400cd9af344b0e6be48300a8090cce41c2e099b3_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Default:modals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 200,  150 => 120,  135 => 106,  110 => 83,  105 => 80,  97 => 75,  22 => 1,);
    }
}
