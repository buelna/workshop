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
        $__internal_304a7d36ad421de0d8fae735d41af885a2a494d00c986248b6e6d3564318e94e = $this->env->getExtension("native_profiler");
        $__internal_304a7d36ad421de0d8fae735d41af885a2a494d00c986248b6e6d3564318e94e->enter($__internal_304a7d36ad421de0d8fae735d41af885a2a494d00c986248b6e6d3564318e94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_304a7d36ad421de0d8fae735d41af885a2a494d00c986248b6e6d3564318e94e->leave($__internal_304a7d36ad421de0d8fae735d41af885a2a494d00c986248b6e6d3564318e94e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c96288ed01c3b22b8bd5f5e7791f2af5d402f57cbc35acd3b07b5e456e6f594f = $this->env->getExtension("native_profiler");
        $__internal_c96288ed01c3b22b8bd5f5e7791f2af5d402f57cbc35acd3b07b5e456e6f594f->enter($__internal_c96288ed01c3b22b8bd5f5e7791f2af5d402f57cbc35acd3b07b5e456e6f594f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c96288ed01c3b22b8bd5f5e7791f2af5d402f57cbc35acd3b07b5e456e6f594f->leave($__internal_c96288ed01c3b22b8bd5f5e7791f2af5d402f57cbc35acd3b07b5e456e6f594f_prof);

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
