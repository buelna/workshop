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
        $__internal_627eedfaa27db58a820d8b3d52fb242eb8bfa944560b1cde79ea0d2725af512b = $this->env->getExtension("native_profiler");
        $__internal_627eedfaa27db58a820d8b3d52fb242eb8bfa944560b1cde79ea0d2725af512b->enter($__internal_627eedfaa27db58a820d8b3d52fb242eb8bfa944560b1cde79ea0d2725af512b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_627eedfaa27db58a820d8b3d52fb242eb8bfa944560b1cde79ea0d2725af512b->leave($__internal_627eedfaa27db58a820d8b3d52fb242eb8bfa944560b1cde79ea0d2725af512b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a1d835a2fe8d235fb3597c4720815f9cd078dcfaf64068504d96875dc75c60b7 = $this->env->getExtension("native_profiler");
        $__internal_a1d835a2fe8d235fb3597c4720815f9cd078dcfaf64068504d96875dc75c60b7->enter($__internal_a1d835a2fe8d235fb3597c4720815f9cd078dcfaf64068504d96875dc75c60b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a1d835a2fe8d235fb3597c4720815f9cd078dcfaf64068504d96875dc75c60b7->leave($__internal_a1d835a2fe8d235fb3597c4720815f9cd078dcfaf64068504d96875dc75c60b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dabe541c9b0340a35c7da8741d7e5557602799f47a7a3d770462827b09fd3d4c = $this->env->getExtension("native_profiler");
        $__internal_dabe541c9b0340a35c7da8741d7e5557602799f47a7a3d770462827b09fd3d4c->enter($__internal_dabe541c9b0340a35c7da8741d7e5557602799f47a7a3d770462827b09fd3d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dabe541c9b0340a35c7da8741d7e5557602799f47a7a3d770462827b09fd3d4c->leave($__internal_dabe541c9b0340a35c7da8741d7e5557602799f47a7a3d770462827b09fd3d4c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45e446a2107a4fbb64f5315409d4090770b48dda2c2527c59886209f48cd4660 = $this->env->getExtension("native_profiler");
        $__internal_45e446a2107a4fbb64f5315409d4090770b48dda2c2527c59886209f48cd4660->enter($__internal_45e446a2107a4fbb64f5315409d4090770b48dda2c2527c59886209f48cd4660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45e446a2107a4fbb64f5315409d4090770b48dda2c2527c59886209f48cd4660->leave($__internal_45e446a2107a4fbb64f5315409d4090770b48dda2c2527c59886209f48cd4660_prof);

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
