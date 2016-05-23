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
        $__internal_2ce68334438dfb0633f6540b45b94d4a63fb019324b1a06a72dc06216494652e = $this->env->getExtension("native_profiler");
        $__internal_2ce68334438dfb0633f6540b45b94d4a63fb019324b1a06a72dc06216494652e->enter($__internal_2ce68334438dfb0633f6540b45b94d4a63fb019324b1a06a72dc06216494652e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2ce68334438dfb0633f6540b45b94d4a63fb019324b1a06a72dc06216494652e->leave($__internal_2ce68334438dfb0633f6540b45b94d4a63fb019324b1a06a72dc06216494652e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce517022396166cbbe35904fa1168dfd4640df69cf5e4139b3e090d2a7a80d84 = $this->env->getExtension("native_profiler");
        $__internal_ce517022396166cbbe35904fa1168dfd4640df69cf5e4139b3e090d2a7a80d84->enter($__internal_ce517022396166cbbe35904fa1168dfd4640df69cf5e4139b3e090d2a7a80d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ce517022396166cbbe35904fa1168dfd4640df69cf5e4139b3e090d2a7a80d84->leave($__internal_ce517022396166cbbe35904fa1168dfd4640df69cf5e4139b3e090d2a7a80d84_prof);

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
