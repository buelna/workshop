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
        $__internal_92b52f7881b62afe6eb7e0606310512d8e608f1d9992f2957b6c04347fcbb39d = $this->env->getExtension("native_profiler");
        $__internal_92b52f7881b62afe6eb7e0606310512d8e608f1d9992f2957b6c04347fcbb39d->enter($__internal_92b52f7881b62afe6eb7e0606310512d8e608f1d9992f2957b6c04347fcbb39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b52f7881b62afe6eb7e0606310512d8e608f1d9992f2957b6c04347fcbb39d->leave($__internal_92b52f7881b62afe6eb7e0606310512d8e608f1d9992f2957b6c04347fcbb39d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d5e221138841ad583d9a9ee93a528301b8912c2091e5d2d5ab544f0d7c8cb41 = $this->env->getExtension("native_profiler");
        $__internal_5d5e221138841ad583d9a9ee93a528301b8912c2091e5d2d5ab544f0d7c8cb41->enter($__internal_5d5e221138841ad583d9a9ee93a528301b8912c2091e5d2d5ab544f0d7c8cb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d5e221138841ad583d9a9ee93a528301b8912c2091e5d2d5ab544f0d7c8cb41->leave($__internal_5d5e221138841ad583d9a9ee93a528301b8912c2091e5d2d5ab544f0d7c8cb41_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db1ce7fd27ea305d4e93d008db2df3de07f5478c3b421874ac9274bc7dcb4762 = $this->env->getExtension("native_profiler");
        $__internal_db1ce7fd27ea305d4e93d008db2df3de07f5478c3b421874ac9274bc7dcb4762->enter($__internal_db1ce7fd27ea305d4e93d008db2df3de07f5478c3b421874ac9274bc7dcb4762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db1ce7fd27ea305d4e93d008db2df3de07f5478c3b421874ac9274bc7dcb4762->leave($__internal_db1ce7fd27ea305d4e93d008db2df3de07f5478c3b421874ac9274bc7dcb4762_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14ba884f8ba8f90e18fce02222d7e2a2f37d067815328f06840d84f6a0d6f5aa = $this->env->getExtension("native_profiler");
        $__internal_14ba884f8ba8f90e18fce02222d7e2a2f37d067815328f06840d84f6a0d6f5aa->enter($__internal_14ba884f8ba8f90e18fce02222d7e2a2f37d067815328f06840d84f6a0d6f5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14ba884f8ba8f90e18fce02222d7e2a2f37d067815328f06840d84f6a0d6f5aa->leave($__internal_14ba884f8ba8f90e18fce02222d7e2a2f37d067815328f06840d84f6a0d6f5aa_prof);

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
