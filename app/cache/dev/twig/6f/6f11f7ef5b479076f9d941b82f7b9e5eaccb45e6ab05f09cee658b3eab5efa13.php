<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_43224710bb326450f358357f4dcf7bd44fd8b61cc68db2e6eb0de4dc6bbacb97 extends Twig_Template
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
        $__internal_44dc05f9f238dd1d81605b4b088efb4fa65fafb258f031d703d7f2d87ea48812 = $this->env->getExtension("native_profiler");
        $__internal_44dc05f9f238dd1d81605b4b088efb4fa65fafb258f031d703d7f2d87ea48812->enter($__internal_44dc05f9f238dd1d81605b4b088efb4fa65fafb258f031d703d7f2d87ea48812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_44dc05f9f238dd1d81605b4b088efb4fa65fafb258f031d703d7f2d87ea48812->leave($__internal_44dc05f9f238dd1d81605b4b088efb4fa65fafb258f031d703d7f2d87ea48812_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
