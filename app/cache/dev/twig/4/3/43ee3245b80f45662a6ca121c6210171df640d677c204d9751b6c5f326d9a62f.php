<?php

/* AcuerdosGestionBundle:Acta:list-coment.html.twig */
class __TwigTemplate_43ee3245b80f45662a6ca121c6210171df640d677c204d9751b6c5f326d9a62f extends Twig_Template
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
        $__internal_7d651fc58cfc3b58b4e087aa6dfcbc7129d5ce8534a312abcb36f40db202e619 = $this->env->getExtension("native_profiler");
        $__internal_7d651fc58cfc3b58b4e087aa6dfcbc7129d5ce8534a312abcb36f40db202e619->enter($__internal_7d651fc58cfc3b58b4e087aa6dfcbc7129d5ce8534a312abcb36f40db202e619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcuerdosGestionBundle:Acta:list-coment.html.twig"));

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reunion"]) ? $context["reunion"] : $this->getContext($context, "reunion")), "temas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tema"]) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tema"], "comentarios", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
                // line 3
                echo "        <div id=\"delete\" class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"msg\">
                    <a href=\"#\">";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "persona", array()), "html", null, true);
                echo "</a>
                    <div class=\"pull-right\" data_id=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "id", array()), "html", null, true);
                echo "\" data_url_edit=\"";
                echo $this->env->getExtension('routing')->getPath("comentario_edit");
                echo "\" data_url_delete=\"";
                echo $this->env->getExtension('routing')->getPath("comentario_delete");
                echo "\">
                        <a href=\"#\" class=\"link-tooltip link-editar\" data-placement=\"top\" title=\"Editar\" onclick=\"editComent(this)\">
                            <span class=\"glyphicon glyphicon-pencil\"></span>
                        </a>
                        <a
                                href=\"#\"
                                class=\"link-tooltip link-eliminar-coment\"
                                data-placement=\"top\"
                                title=\"Eliminar\"
                                onclick=\"translateData(this)\"
                        >
                            <span class=\"glyphicon glyphicon-trash\"></span>
                        </a>
                    </div><!--/.pull-righ-->
                    <p class=\"clave\" onkeypress=\"saveComentario(this,event)\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "comentario", array()), "html", null, true);
                echo "</p>
                </div><!--/.msg-->
            </div><!--/.col-md-12-->
        </div><!--/.row-->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7d651fc58cfc3b58b4e087aa6dfcbc7129d5ce8534a312abcb36f40db202e619->leave($__internal_7d651fc58cfc3b58b4e087aa6dfcbc7129d5ce8534a312abcb36f40db202e619_prof);

    }

    public function getTemplateName()
    {
        return "AcuerdosGestionBundle:Acta:list-coment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  40 => 7,  36 => 6,  31 => 3,  26 => 2,  22 => 1,);
    }
}
