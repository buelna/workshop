<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b148ea770e8db1558730a7e6ab71b55a3907eedf1c979ebc92eef6c9abc0415b extends Twig_Template
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
        $__internal_9a45ab944867359d3a2679857224c66f5c1bf24db43a0bd1cde7a6f948ccd76b = $this->env->getExtension("native_profiler");
        $__internal_9a45ab944867359d3a2679857224c66f5c1bf24db43a0bd1cde7a6f948ccd76b->enter($__internal_9a45ab944867359d3a2679857224c66f5c1bf24db43a0bd1cde7a6f948ccd76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9a45ab944867359d3a2679857224c66f5c1bf24db43a0bd1cde7a6f948ccd76b->leave($__internal_9a45ab944867359d3a2679857224c66f5c1bf24db43a0bd1cde7a6f948ccd76b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
