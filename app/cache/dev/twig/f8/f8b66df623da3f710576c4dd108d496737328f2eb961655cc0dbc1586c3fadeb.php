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
        $__internal_8d4127c605363b972ec949587f4fe5264597587b763475695130e266b6978cba = $this->env->getExtension("native_profiler");
        $__internal_8d4127c605363b972ec949587f4fe5264597587b763475695130e266b6978cba->enter($__internal_8d4127c605363b972ec949587f4fe5264597587b763475695130e266b6978cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4127c605363b972ec949587f4fe5264597587b763475695130e266b6978cba->leave($__internal_8d4127c605363b972ec949587f4fe5264597587b763475695130e266b6978cba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a96ca9c80dc73536bd061230b2ed8b20f7397d4c6e41938f1cf796ccd2679a7f = $this->env->getExtension("native_profiler");
        $__internal_a96ca9c80dc73536bd061230b2ed8b20f7397d4c6e41938f1cf796ccd2679a7f->enter($__internal_a96ca9c80dc73536bd061230b2ed8b20f7397d4c6e41938f1cf796ccd2679a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a96ca9c80dc73536bd061230b2ed8b20f7397d4c6e41938f1cf796ccd2679a7f->leave($__internal_a96ca9c80dc73536bd061230b2ed8b20f7397d4c6e41938f1cf796ccd2679a7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3640b559282ebf3b8e65bab4d59425d542709384503529d6f6742901bbf9b228 = $this->env->getExtension("native_profiler");
        $__internal_3640b559282ebf3b8e65bab4d59425d542709384503529d6f6742901bbf9b228->enter($__internal_3640b559282ebf3b8e65bab4d59425d542709384503529d6f6742901bbf9b228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3640b559282ebf3b8e65bab4d59425d542709384503529d6f6742901bbf9b228->leave($__internal_3640b559282ebf3b8e65bab4d59425d542709384503529d6f6742901bbf9b228_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a490c6433ff68903057b9648dcd8621b08f2fd412099add4cb26fc81b912c78 = $this->env->getExtension("native_profiler");
        $__internal_9a490c6433ff68903057b9648dcd8621b08f2fd412099add4cb26fc81b912c78->enter($__internal_9a490c6433ff68903057b9648dcd8621b08f2fd412099add4cb26fc81b912c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a490c6433ff68903057b9648dcd8621b08f2fd412099add4cb26fc81b912c78->leave($__internal_9a490c6433ff68903057b9648dcd8621b08f2fd412099add4cb26fc81b912c78_prof);

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
