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
        $__internal_1e6e445c88ea35e40dd2759945000c0700801b26049bbf4849824b4c5085a9fb = $this->env->getExtension("native_profiler");
        $__internal_1e6e445c88ea35e40dd2759945000c0700801b26049bbf4849824b4c5085a9fb->enter($__internal_1e6e445c88ea35e40dd2759945000c0700801b26049bbf4849824b4c5085a9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1e6e445c88ea35e40dd2759945000c0700801b26049bbf4849824b4c5085a9fb->leave($__internal_1e6e445c88ea35e40dd2759945000c0700801b26049bbf4849824b4c5085a9fb_prof);

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
