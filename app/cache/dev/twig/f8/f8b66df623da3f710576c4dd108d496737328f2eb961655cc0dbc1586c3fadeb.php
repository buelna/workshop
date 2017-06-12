<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_21bf7e95f0a375274d45860953f25fbe706bc5021b9144f8ed88a4d7c9f05c74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2d5662d26988fb9fcb295a23a53878e15576682e58106ebba324d2012673eab = $this->env->getExtension("native_profiler");
        $__internal_c2d5662d26988fb9fcb295a23a53878e15576682e58106ebba324d2012673eab->enter($__internal_c2d5662d26988fb9fcb295a23a53878e15576682e58106ebba324d2012673eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2d5662d26988fb9fcb295a23a53878e15576682e58106ebba324d2012673eab->leave($__internal_c2d5662d26988fb9fcb295a23a53878e15576682e58106ebba324d2012673eab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dfccb019559cd8f65b17f99658b9b608b3751d683c04f27d556bff8fb96dba0e = $this->env->getExtension("native_profiler");
        $__internal_dfccb019559cd8f65b17f99658b9b608b3751d683c04f27d556bff8fb96dba0e->enter($__internal_dfccb019559cd8f65b17f99658b9b608b3751d683c04f27d556bff8fb96dba0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dfccb019559cd8f65b17f99658b9b608b3751d683c04f27d556bff8fb96dba0e->leave($__internal_dfccb019559cd8f65b17f99658b9b608b3751d683c04f27d556bff8fb96dba0e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_90f953b7d2a61bf8b3d2d12ca5c247a049c1f55f5e23fc1866e1fbaa76cc4a70 = $this->env->getExtension("native_profiler");
        $__internal_90f953b7d2a61bf8b3d2d12ca5c247a049c1f55f5e23fc1866e1fbaa76cc4a70->enter($__internal_90f953b7d2a61bf8b3d2d12ca5c247a049c1f55f5e23fc1866e1fbaa76cc4a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_90f953b7d2a61bf8b3d2d12ca5c247a049c1f55f5e23fc1866e1fbaa76cc4a70->leave($__internal_90f953b7d2a61bf8b3d2d12ca5c247a049c1f55f5e23fc1866e1fbaa76cc4a70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bad7cf2ab1656354ff2097e5fb768b500074aa8c1dfd84a7daf833ad44da82ef = $this->env->getExtension("native_profiler");
        $__internal_bad7cf2ab1656354ff2097e5fb768b500074aa8c1dfd84a7daf833ad44da82ef->enter($__internal_bad7cf2ab1656354ff2097e5fb768b500074aa8c1dfd84a7daf833ad44da82ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bad7cf2ab1656354ff2097e5fb768b500074aa8c1dfd84a7daf833ad44da82ef->leave($__internal_bad7cf2ab1656354ff2097e5fb768b500074aa8c1dfd84a7daf833ad44da82ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
