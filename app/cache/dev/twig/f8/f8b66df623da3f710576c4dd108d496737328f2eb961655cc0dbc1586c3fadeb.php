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
        $__internal_8fe7334c4729e04bc4f51a465787f615d26080fbdd41907ce49fdbe93ee6e5f9 = $this->env->getExtension("native_profiler");
        $__internal_8fe7334c4729e04bc4f51a465787f615d26080fbdd41907ce49fdbe93ee6e5f9->enter($__internal_8fe7334c4729e04bc4f51a465787f615d26080fbdd41907ce49fdbe93ee6e5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fe7334c4729e04bc4f51a465787f615d26080fbdd41907ce49fdbe93ee6e5f9->leave($__internal_8fe7334c4729e04bc4f51a465787f615d26080fbdd41907ce49fdbe93ee6e5f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e80d377ca31b7f67027e89cdfaf72ce71dc28fb148acbd9dac5b51a7a92e8663 = $this->env->getExtension("native_profiler");
        $__internal_e80d377ca31b7f67027e89cdfaf72ce71dc28fb148acbd9dac5b51a7a92e8663->enter($__internal_e80d377ca31b7f67027e89cdfaf72ce71dc28fb148acbd9dac5b51a7a92e8663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e80d377ca31b7f67027e89cdfaf72ce71dc28fb148acbd9dac5b51a7a92e8663->leave($__internal_e80d377ca31b7f67027e89cdfaf72ce71dc28fb148acbd9dac5b51a7a92e8663_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc55067962a80fd900d39725640844e7a234c4587cd2eedd9a03cbaa810c7dc8 = $this->env->getExtension("native_profiler");
        $__internal_bc55067962a80fd900d39725640844e7a234c4587cd2eedd9a03cbaa810c7dc8->enter($__internal_bc55067962a80fd900d39725640844e7a234c4587cd2eedd9a03cbaa810c7dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc55067962a80fd900d39725640844e7a234c4587cd2eedd9a03cbaa810c7dc8->leave($__internal_bc55067962a80fd900d39725640844e7a234c4587cd2eedd9a03cbaa810c7dc8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f09a1a07e8462e00692b7e42b3acc4971b1da5b59138a47bca838035f2a89ca = $this->env->getExtension("native_profiler");
        $__internal_4f09a1a07e8462e00692b7e42b3acc4971b1da5b59138a47bca838035f2a89ca->enter($__internal_4f09a1a07e8462e00692b7e42b3acc4971b1da5b59138a47bca838035f2a89ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f09a1a07e8462e00692b7e42b3acc4971b1da5b59138a47bca838035f2a89ca->leave($__internal_4f09a1a07e8462e00692b7e42b3acc4971b1da5b59138a47bca838035f2a89ca_prof);

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
