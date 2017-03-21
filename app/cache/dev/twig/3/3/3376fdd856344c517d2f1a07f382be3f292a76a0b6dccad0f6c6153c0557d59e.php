<?php

/* AcuerdosGestionBundle:Default:register-count.html.twig */
class __TwigTemplate_3376fdd856344c517d2f1a07f382be3f292a76a0b6dccad0f6c6153c0557d59e extends Twig_Template
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
        $__internal_a6fe996fa5c8d4837118e55fc854940d328edb544f3339a12e8a4f3d193949b4 = $this->env->getExtension("native_profiler");
        $__internal_a6fe996fa5c8d4837118e55fc854940d328edb544f3339a12e8a4f3d193949b4->enter($__internal_a6fe996fa5c8d4837118e55fc854940d328edb544f3339a12e8a4f3d193949b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Default:register-count.html.twig"));

        // line 1
        echo "<div class=\"count pull-left\">
    Total de registros : <span class=\"badge\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span>
</div>";
        
        $__internal_a6fe996fa5c8d4837118e55fc854940d328edb544f3339a12e8a4f3d193949b4->leave($__internal_a6fe996fa5c8d4837118e55fc854940d328edb544f3339a12e8a4f3d193949b4_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Default:register-count.html.twig";
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
