<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_21bf7e95f0a375274d45860953f25fbe706bc5021b9144f8ed88a4d7c9f05c74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_fa36cacaaa15e8aac60027f3ba1d7db8c9881a97aa8cd698471280b30f12a4da = $this->env->getExtension("native_profiler");
        $__internal_fa36cacaaa15e8aac60027f3ba1d7db8c9881a97aa8cd698471280b30f12a4da->enter($__internal_fa36cacaaa15e8aac60027f3ba1d7db8c9881a97aa8cd698471280b30f12a4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa36cacaaa15e8aac60027f3ba1d7db8c9881a97aa8cd698471280b30f12a4da->leave($__internal_fa36cacaaa15e8aac60027f3ba1d7db8c9881a97aa8cd698471280b30f12a4da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad6b88d253003b793572970a966361e5e8f299152d4aafded65d76f6cb617bf6 = $this->env->getExtension("native_profiler");
        $__internal_ad6b88d253003b793572970a966361e5e8f299152d4aafded65d76f6cb617bf6->enter($__internal_ad6b88d253003b793572970a966361e5e8f299152d4aafded65d76f6cb617bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad6b88d253003b793572970a966361e5e8f299152d4aafded65d76f6cb617bf6->leave($__internal_ad6b88d253003b793572970a966361e5e8f299152d4aafded65d76f6cb617bf6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e68e7283228ae8aee89d10c0586372c3b3d685402de50f4956efe69fad0c991e = $this->env->getExtension("native_profiler");
        $__internal_e68e7283228ae8aee89d10c0586372c3b3d685402de50f4956efe69fad0c991e->enter($__internal_e68e7283228ae8aee89d10c0586372c3b3d685402de50f4956efe69fad0c991e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e68e7283228ae8aee89d10c0586372c3b3d685402de50f4956efe69fad0c991e->leave($__internal_e68e7283228ae8aee89d10c0586372c3b3d685402de50f4956efe69fad0c991e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a12f836486d846ae8b014be122fa6f917c968cf21e6438e917b11c25ed08113 = $this->env->getExtension("native_profiler");
        $__internal_6a12f836486d846ae8b014be122fa6f917c968cf21e6438e917b11c25ed08113->enter($__internal_6a12f836486d846ae8b014be122fa6f917c968cf21e6438e917b11c25ed08113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a12f836486d846ae8b014be122fa6f917c968cf21e6438e917b11c25ed08113->leave($__internal_6a12f836486d846ae8b014be122fa6f917c968cf21e6438e917b11c25ed08113_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
