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
        $__internal_31b3420d02c824c7cad4498c84d00a6585ce2b76c8b66b83601d16fd7b3c8b30 = $this->env->getExtension("native_profiler");
        $__internal_31b3420d02c824c7cad4498c84d00a6585ce2b76c8b66b83601d16fd7b3c8b30->enter($__internal_31b3420d02c824c7cad4498c84d00a6585ce2b76c8b66b83601d16fd7b3c8b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b3420d02c824c7cad4498c84d00a6585ce2b76c8b66b83601d16fd7b3c8b30->leave($__internal_31b3420d02c824c7cad4498c84d00a6585ce2b76c8b66b83601d16fd7b3c8b30_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03de5f269b7e5c77669dedcfd8e1bf6a47b31031fe91c5f73d811b904652a35f = $this->env->getExtension("native_profiler");
        $__internal_03de5f269b7e5c77669dedcfd8e1bf6a47b31031fe91c5f73d811b904652a35f->enter($__internal_03de5f269b7e5c77669dedcfd8e1bf6a47b31031fe91c5f73d811b904652a35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_03de5f269b7e5c77669dedcfd8e1bf6a47b31031fe91c5f73d811b904652a35f->leave($__internal_03de5f269b7e5c77669dedcfd8e1bf6a47b31031fe91c5f73d811b904652a35f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b111919bfeb461245c786bbe3eb868927acb57778ba1ff3ca45e41d77f5a1fa6 = $this->env->getExtension("native_profiler");
        $__internal_b111919bfeb461245c786bbe3eb868927acb57778ba1ff3ca45e41d77f5a1fa6->enter($__internal_b111919bfeb461245c786bbe3eb868927acb57778ba1ff3ca45e41d77f5a1fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b111919bfeb461245c786bbe3eb868927acb57778ba1ff3ca45e41d77f5a1fa6->leave($__internal_b111919bfeb461245c786bbe3eb868927acb57778ba1ff3ca45e41d77f5a1fa6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b7e748362babeb87820589ccfcd746ac50a518f0e1dd5d8fb63a812a5d25d4c = $this->env->getExtension("native_profiler");
        $__internal_0b7e748362babeb87820589ccfcd746ac50a518f0e1dd5d8fb63a812a5d25d4c->enter($__internal_0b7e748362babeb87820589ccfcd746ac50a518f0e1dd5d8fb63a812a5d25d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0b7e748362babeb87820589ccfcd746ac50a518f0e1dd5d8fb63a812a5d25d4c->leave($__internal_0b7e748362babeb87820589ccfcd746ac50a518f0e1dd5d8fb63a812a5d25d4c_prof);

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
