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
        $__internal_74957b63df2c7432ed4e1914d0544c9c37b0813a25311ea887d8457291eb0b81 = $this->env->getExtension("native_profiler");
        $__internal_74957b63df2c7432ed4e1914d0544c9c37b0813a25311ea887d8457291eb0b81->enter($__internal_74957b63df2c7432ed4e1914d0544c9c37b0813a25311ea887d8457291eb0b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_74957b63df2c7432ed4e1914d0544c9c37b0813a25311ea887d8457291eb0b81->leave($__internal_74957b63df2c7432ed4e1914d0544c9c37b0813a25311ea887d8457291eb0b81_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b89ff670aac9ecfbe0fc4e2817ace645afd48134f16afb5689dc2a711e1845c0 = $this->env->getExtension("native_profiler");
        $__internal_b89ff670aac9ecfbe0fc4e2817ace645afd48134f16afb5689dc2a711e1845c0->enter($__internal_b89ff670aac9ecfbe0fc4e2817ace645afd48134f16afb5689dc2a711e1845c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b89ff670aac9ecfbe0fc4e2817ace645afd48134f16afb5689dc2a711e1845c0->leave($__internal_b89ff670aac9ecfbe0fc4e2817ace645afd48134f16afb5689dc2a711e1845c0_prof);

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
