<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e128ee366ed4ea6c31c0212ef7cef41b74c80782c4bc79081983f9b41c1a4682 extends Twig_Template
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
        $__internal_09798cc1efcb7ad0e1790b08483aebdbf65b38c6c4ad0df1cd1bfc3a06b53ae5 = $this->env->getExtension("native_profiler");
        $__internal_09798cc1efcb7ad0e1790b08483aebdbf65b38c6c4ad0df1cd1bfc3a06b53ae5->enter($__internal_09798cc1efcb7ad0e1790b08483aebdbf65b38c6c4ad0df1cd1bfc3a06b53ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_09798cc1efcb7ad0e1790b08483aebdbf65b38c6c4ad0df1cd1bfc3a06b53ae5->leave($__internal_09798cc1efcb7ad0e1790b08483aebdbf65b38c6c4ad0df1cd1bfc3a06b53ae5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
