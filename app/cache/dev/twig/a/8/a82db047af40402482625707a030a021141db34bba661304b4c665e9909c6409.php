<?php

/* AcuerdosGestionBundle:Default:flash-message.html.twig */
class __TwigTemplate_a82db047af40402482625707a030a021141db34bba661304b4c665e9909c6409 extends Twig_Template
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
        $__internal_33b53ec505331f47e80fb9f33b6ee9462d7f6df4fb012ebbadda4638842acc8c = $this->env->getExtension("native_profiler");
        $__internal_33b53ec505331f47e80fb9f33b6ee9462d7f6df4fb012ebbadda4638842acc8c->enter($__internal_33b53ec505331f47e80fb9f33b6ee9462d7f6df4fb012ebbadda4638842acc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Default:flash-message.html.twig"));

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery/jquery-1.11.1.min.js"), "html", null, true);
            echo "\"></script>
    <script>
        \$(document).ready(function(){
            \$(function(){
                new PNotify({
                    title: '!Exito',
                    type : 'success',
                    text: '";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "'
                });
            });
        })
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        // line 17
        echo "    ";
        // line 18
        echo "        ";
        // line 19
        echo "            ";
        // line 20
        echo "            ";
        // line 21
        echo "        ";
        // line 22
        echo "    ";
        
        $__internal_33b53ec505331f47e80fb9f33b6ee9462d7f6df4fb012ebbadda4638842acc8c->leave($__internal_33b53ec505331f47e80fb9f33b6ee9462d7f6df4fb012ebbadda4638842acc8c_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Default:flash-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  60 => 21,  58 => 20,  56 => 19,  54 => 18,  52 => 17,  49 => 15,  37 => 9,  26 => 2,  22 => 1,);
    }
}
