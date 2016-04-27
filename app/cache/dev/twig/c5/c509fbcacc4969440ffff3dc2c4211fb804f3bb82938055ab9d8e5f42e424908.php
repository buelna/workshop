<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_98c0072b21ab3e654b50f82c1f0c6bda95f4989b288eda9b4c20ad180698f8ab extends Twig_Template
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
        $__internal_926a7ae782e6afd279c54ca452dc6a1c113e95a2d7d73e7119be8b5990e0bb2d = $this->env->getExtension("native_profiler");
        $__internal_926a7ae782e6afd279c54ca452dc6a1c113e95a2d7d73e7119be8b5990e0bb2d->enter($__internal_926a7ae782e6afd279c54ca452dc6a1c113e95a2d7d73e7119be8b5990e0bb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_926a7ae782e6afd279c54ca452dc6a1c113e95a2d7d73e7119be8b5990e0bb2d->leave($__internal_926a7ae782e6afd279c54ca452dc6a1c113e95a2d7d73e7119be8b5990e0bb2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
