<?php

/* AcuerdosSeguridadBundle:Security:login.html.twig */
class __TwigTemplate_f92170c167624dff4e8af12b02ea644f0fd355cd797c2fdb4a0f4af94da7b07e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout-admin.html.twig", "AcuerdosSeguridadBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38f545fa6125a2d999789727f5758a428a4ead8581c8e2181ab9a3a7b81dee59 = $this->env->getExtension("native_profiler");
        $__internal_38f545fa6125a2d999789727f5758a428a4ead8581c8e2181ab9a3a7b81dee59->enter($__internal_38f545fa6125a2d999789727f5758a428a4ead8581c8e2181ab9a3a7b81dee59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosSeguridadBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f545fa6125a2d999789727f5758a428a4ead8581c8e2181ab9a3a7b81dee59->leave($__internal_38f545fa6125a2d999789727f5758a428a4ead8581c8e2181ab9a3a7b81dee59_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0dda5ab2a3eea16659d0ffc9ac3f9055beb25e4d66aaf851cb04e6a7ca9bcc8 = $this->env->getExtension("native_profiler");
        $__internal_b0dda5ab2a3eea16659d0ffc9ac3f9055beb25e4d66aaf851cb04e6a7ca9bcc8->enter($__internal_b0dda5ab2a3eea16659d0ffc9ac3f9055beb25e4d66aaf851cb04e6a7ca9bcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\" style=\"margin-top:40px\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-md-4 col-md-offset-4\">
                <div class=\"login-form\" class=\"modal-sm\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                            <strong><h3 class=\"text-center\">Acuerdos</h3></strong>
                            <p class=\"text-center\">Sistema para la Gestion de Acuerdos</p>
                            ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\" id=\"alert-login\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Atenci&oacute;n!</strong> Error de credenciales.
                                </div>
                            ";
        }
        // line 21
        echo "                        </div>
                        <br>
                        ";
        // line 24
        echo "                        <img class=\"profile-img\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/images/profile-42914_640.png"), "html", null, true);
        echo "\" alt=\"\">
                        <form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">
                            <div class=\"panel-body\">
                                <div class=\"form-group\">
                                    <div class=\"input-group\">
                                            <span class=\"input-group-addon\">
                                               <i class=\"glyphicon glyphicon-user\"></i>
                                            </span>
                                        <input type=\"text\" class=\"form-control\" id=\"user\" name=\"_username\" placeholder=\"Usuario\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"  />
                                    </div>
                                </div>
                                <div class=\"form-group has-feedback\">
                                    <div class=\"input-group\">
                                             <span class=\"input-group-addon\">
                                                <i class=\"glyphicon glyphicon-lock\"></i>
                                             </span>
                                        <input class=\"form-control\" placeholder=\"Contraseña\" name=\"_password\" type=\"password\" id=\"password\"/>
                                        <a href=\"javascript:void(0)\" onmousedown=\"showPassword( document.getElementById('password') )\" onmouseup=\"hidePassword(document.getElementById('password'))\">
                                            <span class=\"glyphicon glyphicon-eye-open form-control-feedback\" aria-hidden=\"true\"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel-footer\">
                                ";
        // line 49
        echo "                                <button id=\"enviar\" type=\"submit\" class=\"btn btn-primary btn-block\">Acceder</button>
                            </div>
                        </form>
                        ";
        // line 53
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 59
        echo "    ";
        // line 60
        echo "        ";
        // line 61
        echo "    ";
        // line 62
        echo "    ";
        // line 63
        echo "        ";
        // line 64
        echo "        ";
        // line 65
        echo "        ";
        // line 66
        echo "        ";
        // line 67
        echo "        ";
        // line 68
        echo "        ";
        // line 69
        echo "        ";
        // line 70
        echo "        ";
        // line 71
        echo "        ";
        // line 72
        echo "        ";
        // line 73
        echo "    ";
        
        $__internal_b0dda5ab2a3eea16659d0ffc9ac3f9055beb25e4d66aaf851cb04e6a7ca9bcc8->leave($__internal_b0dda5ab2a3eea16659d0ffc9ac3f9055beb25e4d66aaf851cb04e6a7ca9bcc8_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosSeguridadBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 73,  136 => 72,  134 => 71,  132 => 70,  130 => 69,  128 => 68,  126 => 67,  124 => 66,  122 => 65,  120 => 64,  118 => 63,  116 => 62,  114 => 61,  112 => 60,  110 => 59,  103 => 53,  98 => 49,  79 => 32,  69 => 25,  64 => 24,  60 => 21,  53 => 16,  51 => 15,  40 => 6,  34 => 5,  11 => 1,);
    }
}
