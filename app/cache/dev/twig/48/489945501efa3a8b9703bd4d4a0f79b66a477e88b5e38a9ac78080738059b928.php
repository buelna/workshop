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
        $__internal_79169adce350c14d19ecb3d26d0298caed29ebfe0c9b05fd5f14a54956ef3698 = $this->env->getExtension("native_profiler");
        $__internal_79169adce350c14d19ecb3d26d0298caed29ebfe0c9b05fd5f14a54956ef3698->enter($__internal_79169adce350c14d19ecb3d26d0298caed29ebfe0c9b05fd5f14a54956ef3698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_79169adce350c14d19ecb3d26d0298caed29ebfe0c9b05fd5f14a54956ef3698->leave($__internal_79169adce350c14d19ecb3d26d0298caed29ebfe0c9b05fd5f14a54956ef3698_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2bfaa921419bd0751a5f5878d5ff0517a428072386602f40a07c1090f88bbd9 = $this->env->getExtension("native_profiler");
        $__internal_e2bfaa921419bd0751a5f5878d5ff0517a428072386602f40a07c1090f88bbd9->enter($__internal_e2bfaa921419bd0751a5f5878d5ff0517a428072386602f40a07c1090f88bbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e2bfaa921419bd0751a5f5878d5ff0517a428072386602f40a07c1090f88bbd9->leave($__internal_e2bfaa921419bd0751a5f5878d5ff0517a428072386602f40a07c1090f88bbd9_prof);

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
