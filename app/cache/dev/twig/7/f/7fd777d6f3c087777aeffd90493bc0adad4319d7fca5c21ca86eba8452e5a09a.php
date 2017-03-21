<?php

/* AcuerdosGestionBundle:Default:link-add.html.twig */
class __TwigTemplate_7fd777d6f3c087777aeffd90493bc0adad4319d7fca5c21ca86eba8452e5a09a extends Twig_Template
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
        $__internal_3f16e79c67ad5642153db2595210bf1c1ab6edac833200a04051191d7c897cae = $this->env->getExtension("native_profiler");
        $__internal_3f16e79c67ad5642153db2595210bf1c1ab6edac833200a04051191d7c897cae->enter($__internal_3f16e79c67ad5642153db2595210bf1c1ab6edac833200a04051191d7c897cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Default:link-add.html.twig"));

        // line 1
        echo "<div class=\"vinculo-add\" style=\"display: block\">
    <a id=\"add-button\" class=\"btn btn-default\" href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
        echo "\">
        <span class=\"glyphicon glyphicon-plus-sign\"></span>Adicionar
    </a>
</div>";
        
        $__internal_3f16e79c67ad5642153db2595210bf1c1ab6edac833200a04051191d7c897cae->leave($__internal_3f16e79c67ad5642153db2595210bf1c1ab6edac833200a04051191d7c897cae_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Default:link-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
