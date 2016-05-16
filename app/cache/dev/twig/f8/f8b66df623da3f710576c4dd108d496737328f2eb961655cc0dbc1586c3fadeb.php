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
        $__internal_e4a489981116cdd0834ac191f55808f3b6a91952c39dd677774cf5fc1166f0bb = $this->env->getExtension("native_profiler");
        $__internal_e4a489981116cdd0834ac191f55808f3b6a91952c39dd677774cf5fc1166f0bb->enter($__internal_e4a489981116cdd0834ac191f55808f3b6a91952c39dd677774cf5fc1166f0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4a489981116cdd0834ac191f55808f3b6a91952c39dd677774cf5fc1166f0bb->leave($__internal_e4a489981116cdd0834ac191f55808f3b6a91952c39dd677774cf5fc1166f0bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1798778b4bf0fb888077f6a20ab2373d16549b6bb5691d2862a7eb06533ec89 = $this->env->getExtension("native_profiler");
        $__internal_c1798778b4bf0fb888077f6a20ab2373d16549b6bb5691d2862a7eb06533ec89->enter($__internal_c1798778b4bf0fb888077f6a20ab2373d16549b6bb5691d2862a7eb06533ec89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c1798778b4bf0fb888077f6a20ab2373d16549b6bb5691d2862a7eb06533ec89->leave($__internal_c1798778b4bf0fb888077f6a20ab2373d16549b6bb5691d2862a7eb06533ec89_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df208557b6cb99833202ff12a6b918e994355a474073716b37302696db1bc1a8 = $this->env->getExtension("native_profiler");
        $__internal_df208557b6cb99833202ff12a6b918e994355a474073716b37302696db1bc1a8->enter($__internal_df208557b6cb99833202ff12a6b918e994355a474073716b37302696db1bc1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df208557b6cb99833202ff12a6b918e994355a474073716b37302696db1bc1a8->leave($__internal_df208557b6cb99833202ff12a6b918e994355a474073716b37302696db1bc1a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0bd16861fe04a73a4c62aba91c40302a6177eaf42156c6a7c84aeca61f1f48a4 = $this->env->getExtension("native_profiler");
        $__internal_0bd16861fe04a73a4c62aba91c40302a6177eaf42156c6a7c84aeca61f1f48a4->enter($__internal_0bd16861fe04a73a4c62aba91c40302a6177eaf42156c6a7c84aeca61f1f48a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0bd16861fe04a73a4c62aba91c40302a6177eaf42156c6a7c84aeca61f1f48a4->leave($__internal_0bd16861fe04a73a4c62aba91c40302a6177eaf42156c6a7c84aeca61f1f48a4_prof);

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
