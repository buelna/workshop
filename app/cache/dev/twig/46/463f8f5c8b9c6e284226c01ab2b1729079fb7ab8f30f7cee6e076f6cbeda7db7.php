<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4bbf60c813897e3ec742fddb8a4b06975c15b46a77d38ff0dd416d9917c6a738 extends Twig_Template
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
        $__internal_ea92100fefeba257eac9582a5bd531f776082df70df1d10d894a1167140f8004 = $this->env->getExtension("native_profiler");
        $__internal_ea92100fefeba257eac9582a5bd531f776082df70df1d10d894a1167140f8004->enter($__internal_ea92100fefeba257eac9582a5bd531f776082df70df1d10d894a1167140f8004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ea92100fefeba257eac9582a5bd531f776082df70df1d10d894a1167140f8004->leave($__internal_ea92100fefeba257eac9582a5bd531f776082df70df1d10d894a1167140f8004_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
