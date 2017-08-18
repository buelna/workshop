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
        $__internal_f09f4f7da110d7fedeb78fe5c90188090ec575f53b64ab71db05be628254d204 = $this->env->getExtension("native_profiler");
        $__internal_f09f4f7da110d7fedeb78fe5c90188090ec575f53b64ab71db05be628254d204->enter($__internal_f09f4f7da110d7fedeb78fe5c90188090ec575f53b64ab71db05be628254d204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f09f4f7da110d7fedeb78fe5c90188090ec575f53b64ab71db05be628254d204->leave($__internal_f09f4f7da110d7fedeb78fe5c90188090ec575f53b64ab71db05be628254d204_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_860590e1571287ffec6873a19285d8bb1cc85ba4287d80b36187b7ef685563b8 = $this->env->getExtension("native_profiler");
        $__internal_860590e1571287ffec6873a19285d8bb1cc85ba4287d80b36187b7ef685563b8->enter($__internal_860590e1571287ffec6873a19285d8bb1cc85ba4287d80b36187b7ef685563b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_860590e1571287ffec6873a19285d8bb1cc85ba4287d80b36187b7ef685563b8->leave($__internal_860590e1571287ffec6873a19285d8bb1cc85ba4287d80b36187b7ef685563b8_prof);

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
