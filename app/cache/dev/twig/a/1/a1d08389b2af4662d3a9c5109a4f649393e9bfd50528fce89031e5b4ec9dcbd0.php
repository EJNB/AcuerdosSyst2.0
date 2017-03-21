<?php

/* AcuerdosGestionBundle:Acta:new.html.twig */
class __TwigTemplate_a1d08389b2af4662d3a9c5109a4f649393e9bfd50528fce89031e5b4ec9dcbd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout-admin.html.twig", "AcuerdosGestionBundle:Acta:new.html.twig", 1);
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
        $__internal_fab7926b798cf0ba0f8c3e24640c113d0ba3ca8cbfac3daf02c274f4bba55060 = $this->env->getExtension("native_profiler");
        $__internal_fab7926b798cf0ba0f8c3e24640c113d0ba3ca8cbfac3daf02c274f4bba55060->enter($__internal_fab7926b798cf0ba0f8c3e24640c113d0ba3ca8cbfac3daf02c274f4bba55060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Acta:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab7926b798cf0ba0f8c3e24640c113d0ba3ca8cbfac3daf02c274f4bba55060->leave($__internal_fab7926b798cf0ba0f8c3e24640c113d0ba3ca8cbfac3daf02c274f4bba55060_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_18a62661582170f8ee492c34a63bfa8ea877a9497ba62c7d847476ece4293fb1 = $this->env->getExtension("native_profiler");
        $__internal_18a62661582170f8ee492c34a63bfa8ea877a9497ba62c7d847476ece4293fb1->enter($__internal_18a62661582170f8ee492c34a63bfa8ea877a9497ba62c7d847476ece4293fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Crear Acta</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"col-md-3\">
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Seleccione la Reunion</label>
                    <select  id=\"select_reunion\" class=\"selectpicker\" data-live-search=\"true\" data-size=\"10\" onchange=\"rediretActaNew(this)\" title=\"Seleccione la reunion\">
                        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")));
        foreach ($context['_seq'] as $context["_key"] => $context["reunion"]) {
            // line 15
            echo "                            <option
                                value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "id", array()), "html", null, true);
            echo "\"
                                data-url=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("select_reunion", array("reunion_id" => $this->getAttribute($context["reunion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reunion"], "idReunion", array()), "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </select>
                </div><!--/.form-group-->
            </div><!--/.col-md-3-->
        </div>
    </div>
";
        
        $__internal_18a62661582170f8ee492c34a63bfa8ea877a9497ba62c7d847476ece4293fb1->leave($__internal_18a62661582170f8ee492c34a63bfa8ea877a9497ba62c7d847476ece4293fb1_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Acta:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
