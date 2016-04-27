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
        $__internal_4efa74548cecb68d5cc1d1a8afc9f806ec62025f505e70d81ab617eb1d80f01c = $this->env->getExtension("native_profiler");
        $__internal_4efa74548cecb68d5cc1d1a8afc9f806ec62025f505e70d81ab617eb1d80f01c->enter($__internal_4efa74548cecb68d5cc1d1a8afc9f806ec62025f505e70d81ab617eb1d80f01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4efa74548cecb68d5cc1d1a8afc9f806ec62025f505e70d81ab617eb1d80f01c->leave($__internal_4efa74548cecb68d5cc1d1a8afc9f806ec62025f505e70d81ab617eb1d80f01c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6a5f01bcdd37caab7a2516d764bc606424fc878484a2bbaed3c1cee687426f4 = $this->env->getExtension("native_profiler");
        $__internal_c6a5f01bcdd37caab7a2516d764bc606424fc878484a2bbaed3c1cee687426f4->enter($__internal_c6a5f01bcdd37caab7a2516d764bc606424fc878484a2bbaed3c1cee687426f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c6a5f01bcdd37caab7a2516d764bc606424fc878484a2bbaed3c1cee687426f4->leave($__internal_c6a5f01bcdd37caab7a2516d764bc606424fc878484a2bbaed3c1cee687426f4_prof);

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
