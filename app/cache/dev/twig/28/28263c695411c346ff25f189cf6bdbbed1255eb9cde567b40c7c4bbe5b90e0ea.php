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
        $__internal_8578783a148a76a985241bb63c15b0df6f1d813f5bad16ea8562d331775553bf = $this->env->getExtension("native_profiler");
        $__internal_8578783a148a76a985241bb63c15b0df6f1d813f5bad16ea8562d331775553bf->enter($__internal_8578783a148a76a985241bb63c15b0df6f1d813f5bad16ea8562d331775553bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8578783a148a76a985241bb63c15b0df6f1d813f5bad16ea8562d331775553bf->leave($__internal_8578783a148a76a985241bb63c15b0df6f1d813f5bad16ea8562d331775553bf_prof);

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
