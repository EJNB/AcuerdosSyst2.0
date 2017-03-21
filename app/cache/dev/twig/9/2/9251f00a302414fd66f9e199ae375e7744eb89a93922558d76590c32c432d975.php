<?php

/* ::layout-admin.html.twig */
class __TwigTemplate_9251f00a302414fd66f9e199ae375e7744eb89a93922558d76590c32c432d975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::layout-admin.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4a32cfaeac9b8b1144a4d1cc58014a9ae19accf510959bae4be8f214ac70e31 = $this->env->getExtension("native_profiler");
        $__internal_a4a32cfaeac9b8b1144a4d1cc58014a9ae19accf510959bae4be8f214ac70e31->enter($__internal_a4a32cfaeac9b8b1144a4d1cc58014a9ae19accf510959bae4be8f214ac70e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout-admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a32cfaeac9b8b1144a4d1cc58014a9ae19accf510959bae4be8f214ac70e31->leave($__internal_a4a32cfaeac9b8b1144a4d1cc58014a9ae19accf510959bae4be8f214ac70e31_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ab79f12fc96c6bd06f2346b5b3c2fc284638899457bc500a91ed5f9347c99c0 = $this->env->getExtension("native_profiler");
        $__internal_9ab79f12fc96c6bd06f2346b5b3c2fc284638899457bc500a91ed5f9347c99c0->enter($__internal_9ab79f12fc96c6bd06f2346b5b3c2fc284638899457bc500a91ed5f9347c99c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     ";
        // line 5
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
     <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jQueryUI/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
     <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
     <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Font-Awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
     <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
     <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/PNotify/pnotify.custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
     <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-select-1.12.0/dist/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
";
        
        $__internal_9ab79f12fc96c6bd06f2346b5b3c2fc284638899457bc500a91ed5f9347c99c0->leave($__internal_9ab79f12fc96c6bd06f2346b5b3c2fc284638899457bc500a91ed5f9347c99c0_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_af4aca064e58d535a6bfb59fba989a051611b717bcf9d1b761df6aaede65d854 = $this->env->getExtension("native_profiler");
        $__internal_af4aca064e58d535a6bfb59fba989a051611b717bcf9d1b761df6aaede65d854->enter($__internal_af4aca064e58d535a6bfb59fba989a051611b717bcf9d1b761df6aaede65d854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <header>
        ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 20
        echo "    </header>

    <article id=\"content\" class=\"content\">
        ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "    </article>

    <footer>
        ";
        // line 28
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "    </footer>

";
        
        $__internal_af4aca064e58d535a6bfb59fba989a051611b717bcf9d1b761df6aaede65d854->leave($__internal_af4aca064e58d535a6bfb59fba989a051611b717bcf9d1b761df6aaede65d854_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_4d7dccb41403684b0978f8c93f3c70536b509d880a7fc6f63895c3e8dec28d36 = $this->env->getExtension("native_profiler");
        $__internal_4d7dccb41403684b0978f8c93f3c70536b509d880a7fc6f63895c3e8dec28d36->enter($__internal_4d7dccb41403684b0978f8c93f3c70536b509d880a7fc6f63895c3e8dec28d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "            ";
        $this->loadTemplate("layout-admin-header.html.twig", "::layout-admin.html.twig", 18)->display($context);
        // line 19
        echo "        ";
        
        $__internal_4d7dccb41403684b0978f8c93f3c70536b509d880a7fc6f63895c3e8dec28d36->leave($__internal_4d7dccb41403684b0978f8c93f3c70536b509d880a7fc6f63895c3e8dec28d36_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_043cb51e8713631659dacc9ee3df131d8bb48d6a9a8fe06238bec24b3c092ed6 = $this->env->getExtension("native_profiler");
        $__internal_043cb51e8713631659dacc9ee3df131d8bb48d6a9a8fe06238bec24b3c092ed6->enter($__internal_043cb51e8713631659dacc9ee3df131d8bb48d6a9a8fe06238bec24b3c092ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "        ";
        
        $__internal_043cb51e8713631659dacc9ee3df131d8bb48d6a9a8fe06238bec24b3c092ed6->leave($__internal_043cb51e8713631659dacc9ee3df131d8bb48d6a9a8fe06238bec24b3c092ed6_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_356e4858b4df72d478cfd8b1650ec821c4295113727dcbb63b62c51b6d1061eb = $this->env->getExtension("native_profiler");
        $__internal_356e4858b4df72d478cfd8b1650ec821c4295113727dcbb63b62c51b6d1061eb->enter($__internal_356e4858b4df72d478cfd8b1650ec821c4295113727dcbb63b62c51b6d1061eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        echo "            ";
        // line 30
        echo "        ";
        
        $__internal_356e4858b4df72d478cfd8b1650ec821c4295113727dcbb63b62c51b6d1061eb->leave($__internal_356e4858b4df72d478cfd8b1650ec821c4295113727dcbb63b62c51b6d1061eb_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64ac8f90dc00451f5f8d42918a89a7e566ca0e39aac10dda1ab5dc4c412d995b = $this->env->getExtension("native_profiler");
        $__internal_64ac8f90dc00451f5f8d42918a89a7e566ca0e39aac10dda1ab5dc4c412d995b->enter($__internal_64ac8f90dc00451f5f8d42918a89a7e566ca0e39aac10dda1ab5dc4c412d995b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jQueryUI/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("moment/min/locales.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/PNotify/pnotify.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-select-1.12.0/dist/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/scripts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_64ac8f90dc00451f5f8d42918a89a7e566ca0e39aac10dda1ab5dc4c412d995b->leave($__internal_64ac8f90dc00451f5f8d42918a89a7e566ca0e39aac10dda1ab5dc4c412d995b_prof);

    }

    public function getTemplateName()
    {
        return "::layout-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 44,  195 => 43,  191 => 42,  187 => 41,  183 => 40,  179 => 39,  175 => 38,  171 => 37,  166 => 36,  160 => 35,  153 => 30,  151 => 29,  145 => 28,  138 => 24,  132 => 23,  125 => 19,  122 => 18,  116 => 17,  107 => 31,  105 => 28,  100 => 25,  98 => 23,  93 => 20,  91 => 17,  87 => 15,  81 => 14,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  47 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
