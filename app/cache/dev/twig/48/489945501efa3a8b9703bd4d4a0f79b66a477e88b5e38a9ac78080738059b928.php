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
        $__internal_177961f2b6f8a6d3cb8793f41b8510b6360a921531eb91f0fdc696327c9be4aa = $this->env->getExtension("native_profiler");
        $__internal_177961f2b6f8a6d3cb8793f41b8510b6360a921531eb91f0fdc696327c9be4aa->enter($__internal_177961f2b6f8a6d3cb8793f41b8510b6360a921531eb91f0fdc696327c9be4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_177961f2b6f8a6d3cb8793f41b8510b6360a921531eb91f0fdc696327c9be4aa->leave($__internal_177961f2b6f8a6d3cb8793f41b8510b6360a921531eb91f0fdc696327c9be4aa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d439df9df29f617fcaec0da5dabefc4b6ef2377bccdc89e5d57521f05345f8c = $this->env->getExtension("native_profiler");
        $__internal_6d439df9df29f617fcaec0da5dabefc4b6ef2377bccdc89e5d57521f05345f8c->enter($__internal_6d439df9df29f617fcaec0da5dabefc4b6ef2377bccdc89e5d57521f05345f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6d439df9df29f617fcaec0da5dabefc4b6ef2377bccdc89e5d57521f05345f8c->leave($__internal_6d439df9df29f617fcaec0da5dabefc4b6ef2377bccdc89e5d57521f05345f8c_prof);

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
