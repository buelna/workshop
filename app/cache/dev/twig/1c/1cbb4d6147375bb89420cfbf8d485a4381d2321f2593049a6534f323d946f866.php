<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d570d37662574ad7f43d8025690189e3fc19bcb1594ad2f4a5487ec41fa7db45 extends Twig_Template
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
        $__internal_fe4b543a5d7bf56b49e5e283853969724f17cffe36066d463ee58837d4f10988 = $this->env->getExtension("native_profiler");
        $__internal_fe4b543a5d7bf56b49e5e283853969724f17cffe36066d463ee58837d4f10988->enter($__internal_fe4b543a5d7bf56b49e5e283853969724f17cffe36066d463ee58837d4f10988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fe4b543a5d7bf56b49e5e283853969724f17cffe36066d463ee58837d4f10988->leave($__internal_fe4b543a5d7bf56b49e5e283853969724f17cffe36066d463ee58837d4f10988_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
