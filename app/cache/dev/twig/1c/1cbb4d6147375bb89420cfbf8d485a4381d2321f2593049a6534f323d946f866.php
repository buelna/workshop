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
        $__internal_145f803abd59188beb9a06b3b0db9aaab458807e385f80182e0079562a80dbd0 = $this->env->getExtension("native_profiler");
        $__internal_145f803abd59188beb9a06b3b0db9aaab458807e385f80182e0079562a80dbd0->enter($__internal_145f803abd59188beb9a06b3b0db9aaab458807e385f80182e0079562a80dbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_145f803abd59188beb9a06b3b0db9aaab458807e385f80182e0079562a80dbd0->leave($__internal_145f803abd59188beb9a06b3b0db9aaab458807e385f80182e0079562a80dbd0_prof);

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
