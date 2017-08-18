<?php

/* :default:index.html.twig */
class __TwigTemplate_f7c566bd6eb417f6dcaaf5bfe37759f059e720258c0fc175319c0b58282b3819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d3cf1b7cf9ef2b1da2d82e5c8c8c84059d96f9b9f8505d1bae8158dad1de292 = $this->env->getExtension("native_profiler");
        $__internal_9d3cf1b7cf9ef2b1da2d82e5c8c8c84059d96f9b9f8505d1bae8158dad1de292->enter($__internal_9d3cf1b7cf9ef2b1da2d82e5c8c8c84059d96f9b9f8505d1bae8158dad1de292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d3cf1b7cf9ef2b1da2d82e5c8c8c84059d96f9b9f8505d1bae8158dad1de292->leave($__internal_9d3cf1b7cf9ef2b1da2d82e5c8c8c84059d96f9b9f8505d1bae8158dad1de292_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5efd2fe1e87038ccc50101eee73cc2138a65922394fb9c6c958363bb5c05bc56 = $this->env->getExtension("native_profiler");
        $__internal_5efd2fe1e87038ccc50101eee73cc2138a65922394fb9c6c958363bb5c05bc56->enter($__internal_5efd2fe1e87038ccc50101eee73cc2138a65922394fb9c6c958363bb5c05bc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_5efd2fe1e87038ccc50101eee73cc2138a65922394fb9c6c958363bb5c05bc56->leave($__internal_5efd2fe1e87038ccc50101eee73cc2138a65922394fb9c6c958363bb5c05bc56_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Homepage.*/
/* {% endblock %}*/
/* */
