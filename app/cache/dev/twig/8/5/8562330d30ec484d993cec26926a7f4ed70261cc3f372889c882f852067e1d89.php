<?php

/* AcuerdosGestionBundle:Persona:new.html.twig */
class __TwigTemplate_8562330d30ec484d993cec26926a7f4ed70261cc3f372889c882f852067e1d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout-admin.html.twig", "AcuerdosGestionBundle:Persona:new.html.twig", 2);
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
        $__internal_3d3848b7c4efc54eb5e9293d6b4b22d396f454c54413e695e63ad548216fe9e5 = $this->env->getExtension("native_profiler");
        $__internal_3d3848b7c4efc54eb5e9293d6b4b22d396f454c54413e695e63ad548216fe9e5->enter($__internal_3d3848b7c4efc54eb5e9293d6b4b22d396f454c54413e695e63ad548216fe9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Persona:new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "form/fields.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3848b7c4efc54eb5e9293d6b4b22d396f454c54413e695e63ad548216fe9e5->leave($__internal_3d3848b7c4efc54eb5e9293d6b4b22d396f454c54413e695e63ad548216fe9e5_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_70a7ae51f601fa429f546fa6c263ce1338a7955f2e377dc3c89b66d2550427c2 = $this->env->getExtension("native_profiler");
        $__internal_70a7ae51f601fa429f546fa6c263ce1338a7955f2e377dc3c89b66d2550427c2->enter($__internal_70a7ae51f601fa429f546fa6c263ce1338a7955f2e377dc3c89b66d2550427c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <h3 class=\"page-header\">Crear persona</h3>

    <div class=\"row\">
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <div class=\"col-md-3\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area", array()), 'row');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'row');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cargo", array()), 'row');
        echo "
            </div>
            <div class=\"col-md-3\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                <div class=\"form-group\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'label');
        echo "
                    ";
        // line 21
        if (($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors') != null)) {
            // line 22
            echo "                        <div class=\"alert alert-danger alert-dismissible alert-cerrar\" role=\"alert\" id=\"form-alert-error\" data-dismiss=\"alert\" >
                            <div style=\"float: left;\"><span class=\"glyphicon glyphicon-chevron-left\"></span></div>
                            ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
            echo "
                        </div>
                    ";
        } else {
            // line 27
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
            echo "
                    ";
        }
        // line 29
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'label');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget');
        echo "
                </div>
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'row');
        echo "
            </div>
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-3\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'label');
        echo "
                <div class=\"switch\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'label');
        echo "
                </div>
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "

                <div class=\"form-group\">
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'label');
        echo "
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget');
        echo "
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary\">Aceptar</button>
                    <a class=\"btn btn-default\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("persona");
        echo "\">Regresar al listado</a>
                </div>
            </div>
        ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_70a7ae51f601fa429f546fa6c263ce1338a7955f2e377dc3c89b66d2550427c2->leave($__internal_70a7ae51f601fa429f546fa6c263ce1338a7955f2e377dc3c89b66d2550427c2_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Persona:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 54,  156 => 51,  149 => 47,  145 => 46,  141 => 45,  135 => 42,  130 => 40,  126 => 39,  121 => 37,  114 => 33,  110 => 32,  105 => 30,  100 => 29,  94 => 27,  88 => 24,  84 => 22,  82 => 21,  78 => 20,  73 => 18,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  49 => 9,  43 => 5,  37 => 4,  30 => 2,  28 => 1,  11 => 2,);
    }
}
