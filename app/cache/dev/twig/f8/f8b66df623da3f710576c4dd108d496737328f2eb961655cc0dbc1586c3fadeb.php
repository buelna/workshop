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
        $__internal_7fa659b85187fc2590daf37a4b47b5da0e9f950b26262c76b0b8268a07118ae3 = $this->env->getExtension("native_profiler");
        $__internal_7fa659b85187fc2590daf37a4b47b5da0e9f950b26262c76b0b8268a07118ae3->enter($__internal_7fa659b85187fc2590daf37a4b47b5da0e9f950b26262c76b0b8268a07118ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fa659b85187fc2590daf37a4b47b5da0e9f950b26262c76b0b8268a07118ae3->leave($__internal_7fa659b85187fc2590daf37a4b47b5da0e9f950b26262c76b0b8268a07118ae3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22bbbde40adf2e510a990a3008858f1643200e57ec9baadf83063ea2be8044a6 = $this->env->getExtension("native_profiler");
        $__internal_22bbbde40adf2e510a990a3008858f1643200e57ec9baadf83063ea2be8044a6->enter($__internal_22bbbde40adf2e510a990a3008858f1643200e57ec9baadf83063ea2be8044a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22bbbde40adf2e510a990a3008858f1643200e57ec9baadf83063ea2be8044a6->leave($__internal_22bbbde40adf2e510a990a3008858f1643200e57ec9baadf83063ea2be8044a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1be336d4df3e89318c5e6ed4e7fa51772912807744bf8ac9ac0c0230012d8c6b = $this->env->getExtension("native_profiler");
        $__internal_1be336d4df3e89318c5e6ed4e7fa51772912807744bf8ac9ac0c0230012d8c6b->enter($__internal_1be336d4df3e89318c5e6ed4e7fa51772912807744bf8ac9ac0c0230012d8c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1be336d4df3e89318c5e6ed4e7fa51772912807744bf8ac9ac0c0230012d8c6b->leave($__internal_1be336d4df3e89318c5e6ed4e7fa51772912807744bf8ac9ac0c0230012d8c6b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_edba35a2f8c4f2eae1fcd0508fe9c6a3784bc0b9dd1ab0c252cdce5c5182cad3 = $this->env->getExtension("native_profiler");
        $__internal_edba35a2f8c4f2eae1fcd0508fe9c6a3784bc0b9dd1ab0c252cdce5c5182cad3->enter($__internal_edba35a2f8c4f2eae1fcd0508fe9c6a3784bc0b9dd1ab0c252cdce5c5182cad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_edba35a2f8c4f2eae1fcd0508fe9c6a3784bc0b9dd1ab0c252cdce5c5182cad3->leave($__internal_edba35a2f8c4f2eae1fcd0508fe9c6a3784bc0b9dd1ab0c252cdce5c5182cad3_prof);

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
