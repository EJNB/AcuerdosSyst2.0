<?php

/* layout-admin-header.html.twig */
class __TwigTemplate_4c1edcd80b0356538b702b07be01eb7f5f04fe8a393588bfd33284385f46d5af extends Twig_Template
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
        $__internal_6647cd841e1197e75efa7c4502828c304ae380d99713dc7a167b45bae0e333ef = $this->env->getExtension("native_profiler");
        $__internal_6647cd841e1197e75efa7c4502828c304ae380d99713dc7a167b45bae0e333ef->enter($__internal_6647cd841e1197e75efa7c4502828c304ae380d99713dc7a167b45bae0e333ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout-admin-header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Acuerdos 2.0</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 17
        if ($this->env->getExtension('security')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_EDITOR"))) {
            // line 18
            echo "                    <li class=\"\" id=\"acuerdos\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("select_procedencias");
            echo "\"><span class=\"glyphicon glyphicon-list\"></span>Acuerdos <span class=\"sr-only\">(current)</span></a></li>
                    <li class=\"\" id=\"mis_convocatorias\"><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("mis_convocatorias");
            echo "\"><span class=\"glyphicon glyphicon-calendar\"></span>Mis Convocatorias <span class=\"sr-only\">(current)</span></a></li>
                ";
        }
        // line 21
        echo "                <li class=\"\" id=\"mis_acuerdos\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("mis_acuerdos");
        echo "\"><span class=\"glyphicon glyphicon-tasks\"></span>Mis Acuerdos <span class=\"sr-only\">(current)</span></a></li>
                ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "                    <li class=\"dropdown\" id=\"gestionar\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Gestionar <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("procedencia");
            echo "\">Procedencias</a></li>
                            <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("acuerdo");
            echo "\">Acuerdos</a></li>
                            <li><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("reunion");
            echo "\">Convocatorias</a></li>
                            <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("persona");
            echo "\">Personas</a></li>
                            <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("acta");
            echo "\">Actas</a></li>
                            <li><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("area");
            echo "\">Areas</a></li>
                            ";
            // line 33
            echo "                        </ul>
                    </li>
                ";
        }
        // line 36
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("mis_actas");
        echo "\">Actas</a></li>
                ";
        // line 38
        echo "                <li class=\"dropdown\">
                    <a id=\"link-ayuda\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-question-sign\" id=\"glyph-user\"></span>Ayuda <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a target=\"_blank\" href=\"";
        // line 41
        echo "\">
                                <span class=\"glyphicon glyphicon-tag\"></span>Manual de usuario</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a id=\"link-user\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "descripcion", array()), "html", null, true);
        echo "
                        <span class=\"glyphicon glyphicon-user\" id=\"glyph-user\"></span> <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a class=\"link-changepass-user\" href=\"javascript:void(0);\"
                               data-url=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_changepass_user", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "ruta" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requesturi", array()))), "html", null, true);
        echo "\"
                               data-descripcion=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "descripcion", array()), "html", null, true);
        echo "\"
                               data-toggle=\"modal\" data-target=\"#modal-change-pass-user\">
                                <span class=\"glyphicon glyphicon-edit\"></span>
                                Cambiar contraseña
                            </a>
                        </li>
                        <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
                                <span class=\"glyphicon glyphicon-log-out\"></span>Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

";
        
        $__internal_6647cd841e1197e75efa7c4502828c304ae380d99713dc7a167b45bae0e333ef->leave($__internal_6647cd841e1197e75efa7c4502828c304ae380d99713dc7a167b45bae0e333ef_prof);

    }

    public function getTemplateName()
    {
        return "layout-admin-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 63,  127 => 57,  123 => 56,  115 => 51,  103 => 41,  98 => 38,  93 => 36,  88 => 33,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  59 => 23,  57 => 22,  52 => 21,  47 => 19,  42 => 18,  40 => 17,  22 => 1,);
    }
}
