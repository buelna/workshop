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
        $__internal_598f6d722792c581dad5980bb656dee22655853098092fad61fea5ed484c7f33 = $this->env->getExtension("native_profiler");
        $__internal_598f6d722792c581dad5980bb656dee22655853098092fad61fea5ed484c7f33->enter($__internal_598f6d722792c581dad5980bb656dee22655853098092fad61fea5ed484c7f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598f6d722792c581dad5980bb656dee22655853098092fad61fea5ed484c7f33->leave($__internal_598f6d722792c581dad5980bb656dee22655853098092fad61fea5ed484c7f33_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32d3860df1e4b471ca3e1157dea4e882eaf4b64cfb1e83d00ebdd9a2452c2225 = $this->env->getExtension("native_profiler");
        $__internal_32d3860df1e4b471ca3e1157dea4e882eaf4b64cfb1e83d00ebdd9a2452c2225->enter($__internal_32d3860df1e4b471ca3e1157dea4e882eaf4b64cfb1e83d00ebdd9a2452c2225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_32d3860df1e4b471ca3e1157dea4e882eaf4b64cfb1e83d00ebdd9a2452c2225->leave($__internal_32d3860df1e4b471ca3e1157dea4e882eaf4b64cfb1e83d00ebdd9a2452c2225_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0c3ff88c2630e8de8549536433a0c378a6929da6acc984a442d108283ab90c7 = $this->env->getExtension("native_profiler");
        $__internal_a0c3ff88c2630e8de8549536433a0c378a6929da6acc984a442d108283ab90c7->enter($__internal_a0c3ff88c2630e8de8549536433a0c378a6929da6acc984a442d108283ab90c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a0c3ff88c2630e8de8549536433a0c378a6929da6acc984a442d108283ab90c7->leave($__internal_a0c3ff88c2630e8de8549536433a0c378a6929da6acc984a442d108283ab90c7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f8d40e12ee0177c6068f55426edc2160674ded7c901b484455250f3c14a19bb = $this->env->getExtension("native_profiler");
        $__internal_7f8d40e12ee0177c6068f55426edc2160674ded7c901b484455250f3c14a19bb->enter($__internal_7f8d40e12ee0177c6068f55426edc2160674ded7c901b484455250f3c14a19bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7f8d40e12ee0177c6068f55426edc2160674ded7c901b484455250f3c14a19bb->leave($__internal_7f8d40e12ee0177c6068f55426edc2160674ded7c901b484455250f3c14a19bb_prof);

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
