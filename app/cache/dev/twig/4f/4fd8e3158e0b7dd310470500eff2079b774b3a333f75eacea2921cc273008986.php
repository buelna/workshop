<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8a5b811968e28cd576bf7c146c13f7f148dacc467541d113a6981a7757bdb0fe extends Twig_Template
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
        $__internal_e4c472240ebf65524ff0b61916b5a7d7abbda925e50d5c0ed5e51a3baa1d8ea9 = $this->env->getExtension("native_profiler");
        $__internal_e4c472240ebf65524ff0b61916b5a7d7abbda925e50d5c0ed5e51a3baa1d8ea9->enter($__internal_e4c472240ebf65524ff0b61916b5a7d7abbda925e50d5c0ed5e51a3baa1d8ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e4c472240ebf65524ff0b61916b5a7d7abbda925e50d5c0ed5e51a3baa1d8ea9->leave($__internal_e4c472240ebf65524ff0b61916b5a7d7abbda925e50d5c0ed5e51a3baa1d8ea9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
