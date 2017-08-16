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
        $__internal_0e3e4bef888ac3af302d45c0f1993ef054d28ca045bccf25a780c6028934d55c = $this->env->getExtension("native_profiler");
        $__internal_0e3e4bef888ac3af302d45c0f1993ef054d28ca045bccf25a780c6028934d55c->enter($__internal_0e3e4bef888ac3af302d45c0f1993ef054d28ca045bccf25a780c6028934d55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e3e4bef888ac3af302d45c0f1993ef054d28ca045bccf25a780c6028934d55c->leave($__internal_0e3e4bef888ac3af302d45c0f1993ef054d28ca045bccf25a780c6028934d55c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b651acc5d73091bbf4df92a6868fa4848a3fd7ff8ecbd8616fa2a0a3bc7a883c = $this->env->getExtension("native_profiler");
        $__internal_b651acc5d73091bbf4df92a6868fa4848a3fd7ff8ecbd8616fa2a0a3bc7a883c->enter($__internal_b651acc5d73091bbf4df92a6868fa4848a3fd7ff8ecbd8616fa2a0a3bc7a883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b651acc5d73091bbf4df92a6868fa4848a3fd7ff8ecbd8616fa2a0a3bc7a883c->leave($__internal_b651acc5d73091bbf4df92a6868fa4848a3fd7ff8ecbd8616fa2a0a3bc7a883c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b28499d8d5784d1e4cea0ffd29572cb3a5845f9471228f8a340d601fd3488f3 = $this->env->getExtension("native_profiler");
        $__internal_5b28499d8d5784d1e4cea0ffd29572cb3a5845f9471228f8a340d601fd3488f3->enter($__internal_5b28499d8d5784d1e4cea0ffd29572cb3a5845f9471228f8a340d601fd3488f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b28499d8d5784d1e4cea0ffd29572cb3a5845f9471228f8a340d601fd3488f3->leave($__internal_5b28499d8d5784d1e4cea0ffd29572cb3a5845f9471228f8a340d601fd3488f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffc407df38f55885c7e301a592a1a62a64d41054f9d8ce651376c3f25dd083f3 = $this->env->getExtension("native_profiler");
        $__internal_ffc407df38f55885c7e301a592a1a62a64d41054f9d8ce651376c3f25dd083f3->enter($__internal_ffc407df38f55885c7e301a592a1a62a64d41054f9d8ce651376c3f25dd083f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ffc407df38f55885c7e301a592a1a62a64d41054f9d8ce651376c3f25dd083f3->leave($__internal_ffc407df38f55885c7e301a592a1a62a64d41054f9d8ce651376c3f25dd083f3_prof);

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
