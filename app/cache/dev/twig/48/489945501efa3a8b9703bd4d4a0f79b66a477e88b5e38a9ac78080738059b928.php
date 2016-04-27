<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2b41318cea5c4f3e264dd2ea8d2a196fd63dbe6e1a88cfd784afbf384b54e5dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feddda23b7f3087d3aaa1103d9191af3f17b08711cd9bccbd23a3018d670f47a = $this->env->getExtension("native_profiler");
        $__internal_feddda23b7f3087d3aaa1103d9191af3f17b08711cd9bccbd23a3018d670f47a->enter($__internal_feddda23b7f3087d3aaa1103d9191af3f17b08711cd9bccbd23a3018d670f47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_feddda23b7f3087d3aaa1103d9191af3f17b08711cd9bccbd23a3018d670f47a->leave($__internal_feddda23b7f3087d3aaa1103d9191af3f17b08711cd9bccbd23a3018d670f47a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a41421ff0339b038b83b39356e729cc874c0c59d9493467132ad531a64ab0fad = $this->env->getExtension("native_profiler");
        $__internal_a41421ff0339b038b83b39356e729cc874c0c59d9493467132ad531a64ab0fad->enter($__internal_a41421ff0339b038b83b39356e729cc874c0c59d9493467132ad531a64ab0fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a41421ff0339b038b83b39356e729cc874c0c59d9493467132ad531a64ab0fad->leave($__internal_a41421ff0339b038b83b39356e729cc874c0c59d9493467132ad531a64ab0fad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
