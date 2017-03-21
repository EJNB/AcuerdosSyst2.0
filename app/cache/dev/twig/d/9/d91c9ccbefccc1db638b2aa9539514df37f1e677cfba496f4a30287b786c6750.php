<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d91c9ccbefccc1db638b2aa9539514df37f1e677cfba496f4a30287b786c6750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9b0f073fd2d607639573b8bca7e8094fff7d930185e888a5f568f51033808ec = $this->env->getExtension("native_profiler");
        $__internal_b9b0f073fd2d607639573b8bca7e8094fff7d930185e888a5f568f51033808ec->enter($__internal_b9b0f073fd2d607639573b8bca7e8094fff7d930185e888a5f568f51033808ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b0f073fd2d607639573b8bca7e8094fff7d930185e888a5f568f51033808ec->leave($__internal_b9b0f073fd2d607639573b8bca7e8094fff7d930185e888a5f568f51033808ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ebb47486515c57029fa7a4478d96cc94817e73b1cd572adecd750ed27cb042f = $this->env->getExtension("native_profiler");
        $__internal_8ebb47486515c57029fa7a4478d96cc94817e73b1cd572adecd750ed27cb042f->enter($__internal_8ebb47486515c57029fa7a4478d96cc94817e73b1cd572adecd750ed27cb042f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8ebb47486515c57029fa7a4478d96cc94817e73b1cd572adecd750ed27cb042f->leave($__internal_8ebb47486515c57029fa7a4478d96cc94817e73b1cd572adecd750ed27cb042f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d02130b05658738f1db6bc48e48a766d6ebc1341b7cb54aed3d257e87f861208 = $this->env->getExtension("native_profiler");
        $__internal_d02130b05658738f1db6bc48e48a766d6ebc1341b7cb54aed3d257e87f861208->enter($__internal_d02130b05658738f1db6bc48e48a766d6ebc1341b7cb54aed3d257e87f861208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d02130b05658738f1db6bc48e48a766d6ebc1341b7cb54aed3d257e87f861208->leave($__internal_d02130b05658738f1db6bc48e48a766d6ebc1341b7cb54aed3d257e87f861208_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dc89932054c9dec73b082bff14f169d2c08facfd365464ea388d7ae5a1a0b8d = $this->env->getExtension("native_profiler");
        $__internal_1dc89932054c9dec73b082bff14f169d2c08facfd365464ea388d7ae5a1a0b8d->enter($__internal_1dc89932054c9dec73b082bff14f169d2c08facfd365464ea388d7ae5a1a0b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1dc89932054c9dec73b082bff14f169d2c08facfd365464ea388d7ae5a1a0b8d->leave($__internal_1dc89932054c9dec73b082bff14f169d2c08facfd365464ea388d7ae5a1a0b8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
