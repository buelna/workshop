<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_187fd1307310fe183190aaad97c129841a52d3792234163441fdc859a8cfa373 extends Twig_Template
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
        $__internal_06dbc96a5a749df54ec079e8e07c6616d2c9a8f3852108858f228b010edb471a = $this->env->getExtension("native_profiler");
        $__internal_06dbc96a5a749df54ec079e8e07c6616d2c9a8f3852108858f228b010edb471a->enter($__internal_06dbc96a5a749df54ec079e8e07c6616d2c9a8f3852108858f228b010edb471a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_06dbc96a5a749df54ec079e8e07c6616d2c9a8f3852108858f228b010edb471a->leave($__internal_06dbc96a5a749df54ec079e8e07c6616d2c9a8f3852108858f228b010edb471a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
