<?php

/* AcuerdosGestionBundle:Default:admin-search-form.html.twig */
class __TwigTemplate_b0565fba903775c36f27ff885e2c5ff103555e88554fb4046886dade591b6472 extends Twig_Template
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
        $__internal_d10cec72936be3e665bc1c77259a27c1c6a3d54fc2165743d95c2d6d4f328eb5 = $this->env->getExtension("native_profiler");
        $__internal_d10cec72936be3e665bc1c77259a27c1c6a3d54fc2165743d95c2d6d4f328eb5->enter($__internal_d10cec72936be3e665bc1c77259a27c1c6a3d54fc2165743d95c2d6d4f328eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Default:admin-search-form.html.twig"));

        // line 1
        echo "<div class=\"count form-group has-feedback\">
    ";
        // line 3
        echo "    <input type=\"text\" class=\"form-control\" id=\"input-search-form\" aria-describedby=\"inputSuccess2Status\" value=\"\" placeholder=\"Buscar...\">
    <a href=\"javascript:void(0)\" onclick=\"searchAjax( document.getElementById('input-search-form').value )\"><span class=\"glyphicon glyphicon-search form-control-feedback\" aria-hidden=\"true\"></span></a>
    <span id=\"inputSuccess2Status\" class=\"sr-only\">(success)</span>
</div>


";
        
        $__internal_d10cec72936be3e665bc1c77259a27c1c6a3d54fc2165743d95c2d6d4f328eb5->leave($__internal_d10cec72936be3e665bc1c77259a27c1c6a3d54fc2165743d95c2d6d4f328eb5_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Default:admin-search-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 1,);
    }
}
