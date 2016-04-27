<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_83e580e9da2728b22d7422d319d5b8d36f471a8461553b643a5db64284c17f02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3795d49d7fa15e9cf7a5e30ca905c687f238a5e46ab493f5c5aa488d3d9c56ed = $this->env->getExtension("native_profiler");
        $__internal_3795d49d7fa15e9cf7a5e30ca905c687f238a5e46ab493f5c5aa488d3d9c56ed->enter($__internal_3795d49d7fa15e9cf7a5e30ca905c687f238a5e46ab493f5c5aa488d3d9c56ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3795d49d7fa15e9cf7a5e30ca905c687f238a5e46ab493f5c5aa488d3d9c56ed->leave($__internal_3795d49d7fa15e9cf7a5e30ca905c687f238a5e46ab493f5c5aa488d3d9c56ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc63bf9f8fa05ff36ba071439898843f1b8e24667fc87b12a1e020fbac4e1010 = $this->env->getExtension("native_profiler");
        $__internal_bc63bf9f8fa05ff36ba071439898843f1b8e24667fc87b12a1e020fbac4e1010->enter($__internal_bc63bf9f8fa05ff36ba071439898843f1b8e24667fc87b12a1e020fbac4e1010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bc63bf9f8fa05ff36ba071439898843f1b8e24667fc87b12a1e020fbac4e1010->leave($__internal_bc63bf9f8fa05ff36ba071439898843f1b8e24667fc87b12a1e020fbac4e1010_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae7249e04fab4a35c9f944ec5adf24385d593b7df0785194bc794c120c7d81ee = $this->env->getExtension("native_profiler");
        $__internal_ae7249e04fab4a35c9f944ec5adf24385d593b7df0785194bc794c120c7d81ee->enter($__internal_ae7249e04fab4a35c9f944ec5adf24385d593b7df0785194bc794c120c7d81ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ae7249e04fab4a35c9f944ec5adf24385d593b7df0785194bc794c120c7d81ee->leave($__internal_ae7249e04fab4a35c9f944ec5adf24385d593b7df0785194bc794c120c7d81ee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6bedbcb0661b43811ad3e4844ad6f6751f37e2b6cef999296811335ff5f0a79b = $this->env->getExtension("native_profiler");
        $__internal_6bedbcb0661b43811ad3e4844ad6f6751f37e2b6cef999296811335ff5f0a79b->enter($__internal_6bedbcb0661b43811ad3e4844ad6f6751f37e2b6cef999296811335ff5f0a79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6bedbcb0661b43811ad3e4844ad6f6751f37e2b6cef999296811335ff5f0a79b->leave($__internal_6bedbcb0661b43811ad3e4844ad6f6751f37e2b6cef999296811335ff5f0a79b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
