<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5069c61cf48fbfcc78474a7321414ba62b46ea7bac5bfc198a82e8c7f0b0b99b extends Twig_Template
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
        $__internal_603462d5969368e4ccfe1242ba60f89c904a76e50d0d09593768d1f252974f60 = $this->env->getExtension("native_profiler");
        $__internal_603462d5969368e4ccfe1242ba60f89c904a76e50d0d09593768d1f252974f60->enter($__internal_603462d5969368e4ccfe1242ba60f89c904a76e50d0d09593768d1f252974f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_603462d5969368e4ccfe1242ba60f89c904a76e50d0d09593768d1f252974f60->leave($__internal_603462d5969368e4ccfe1242ba60f89c904a76e50d0d09593768d1f252974f60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
