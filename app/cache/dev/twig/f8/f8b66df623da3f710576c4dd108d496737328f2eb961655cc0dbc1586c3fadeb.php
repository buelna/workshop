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
        $__internal_29e7171d7834f23791a38c14a116d61ea796df1aa95dd1bec5c10cd3c093a682 = $this->env->getExtension("native_profiler");
        $__internal_29e7171d7834f23791a38c14a116d61ea796df1aa95dd1bec5c10cd3c093a682->enter($__internal_29e7171d7834f23791a38c14a116d61ea796df1aa95dd1bec5c10cd3c093a682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e7171d7834f23791a38c14a116d61ea796df1aa95dd1bec5c10cd3c093a682->leave($__internal_29e7171d7834f23791a38c14a116d61ea796df1aa95dd1bec5c10cd3c093a682_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_957146c0b41fa832ffc7ba19639fcb0f19eee627b3bafe3679a409d075248305 = $this->env->getExtension("native_profiler");
        $__internal_957146c0b41fa832ffc7ba19639fcb0f19eee627b3bafe3679a409d075248305->enter($__internal_957146c0b41fa832ffc7ba19639fcb0f19eee627b3bafe3679a409d075248305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_957146c0b41fa832ffc7ba19639fcb0f19eee627b3bafe3679a409d075248305->leave($__internal_957146c0b41fa832ffc7ba19639fcb0f19eee627b3bafe3679a409d075248305_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b26713b0a295c20713ef8093ee3fd31c44b29f28e0c42d78b0b1e8fb5f8d804e = $this->env->getExtension("native_profiler");
        $__internal_b26713b0a295c20713ef8093ee3fd31c44b29f28e0c42d78b0b1e8fb5f8d804e->enter($__internal_b26713b0a295c20713ef8093ee3fd31c44b29f28e0c42d78b0b1e8fb5f8d804e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b26713b0a295c20713ef8093ee3fd31c44b29f28e0c42d78b0b1e8fb5f8d804e->leave($__internal_b26713b0a295c20713ef8093ee3fd31c44b29f28e0c42d78b0b1e8fb5f8d804e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2049c66ce4dc3b22d0f0c9e0a3649f3362c25a5fb8b63db7d0cc1da63490b61 = $this->env->getExtension("native_profiler");
        $__internal_f2049c66ce4dc3b22d0f0c9e0a3649f3362c25a5fb8b63db7d0cc1da63490b61->enter($__internal_f2049c66ce4dc3b22d0f0c9e0a3649f3362c25a5fb8b63db7d0cc1da63490b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2049c66ce4dc3b22d0f0c9e0a3649f3362c25a5fb8b63db7d0cc1da63490b61->leave($__internal_f2049c66ce4dc3b22d0f0c9e0a3649f3362c25a5fb8b63db7d0cc1da63490b61_prof);

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
