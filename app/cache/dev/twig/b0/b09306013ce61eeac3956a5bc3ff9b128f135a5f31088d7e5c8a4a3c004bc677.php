<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b86406dab37d9f2f1df78b49c0c22b562e87518a3ffdd983724a87704347bb34 extends Twig_Template
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
        $__internal_5538c6f749a3b9efbd04dda55eee1060fa1657978d462c88a015b8b98bcfc258 = $this->env->getExtension("native_profiler");
        $__internal_5538c6f749a3b9efbd04dda55eee1060fa1657978d462c88a015b8b98bcfc258->enter($__internal_5538c6f749a3b9efbd04dda55eee1060fa1657978d462c88a015b8b98bcfc258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5538c6f749a3b9efbd04dda55eee1060fa1657978d462c88a015b8b98bcfc258->leave($__internal_5538c6f749a3b9efbd04dda55eee1060fa1657978d462c88a015b8b98bcfc258_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
