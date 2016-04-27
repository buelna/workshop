<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_23c20c9c5a3664a307cec57bdd7e9c8544bd8efa8c46b1fa6fb40d520d519816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_221f81b26154b3ecda8aa48460f208e865e56174f03ea39cbfc0880c8b0d399d = $this->env->getExtension("native_profiler");
        $__internal_221f81b26154b3ecda8aa48460f208e865e56174f03ea39cbfc0880c8b0d399d->enter($__internal_221f81b26154b3ecda8aa48460f208e865e56174f03ea39cbfc0880c8b0d399d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_221f81b26154b3ecda8aa48460f208e865e56174f03ea39cbfc0880c8b0d399d->leave($__internal_221f81b26154b3ecda8aa48460f208e865e56174f03ea39cbfc0880c8b0d399d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0496dae49ed2ad055f3017cc191a64e34925929f2258c8fc868024644f633253 = $this->env->getExtension("native_profiler");
        $__internal_0496dae49ed2ad055f3017cc191a64e34925929f2258c8fc868024644f633253->enter($__internal_0496dae49ed2ad055f3017cc191a64e34925929f2258c8fc868024644f633253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0496dae49ed2ad055f3017cc191a64e34925929f2258c8fc868024644f633253->leave($__internal_0496dae49ed2ad055f3017cc191a64e34925929f2258c8fc868024644f633253_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81696c59b65876743bc70e507aa77f2448729b4cc8190c46496cc790d98923a0 = $this->env->getExtension("native_profiler");
        $__internal_81696c59b65876743bc70e507aa77f2448729b4cc8190c46496cc790d98923a0->enter($__internal_81696c59b65876743bc70e507aa77f2448729b4cc8190c46496cc790d98923a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_81696c59b65876743bc70e507aa77f2448729b4cc8190c46496cc790d98923a0->leave($__internal_81696c59b65876743bc70e507aa77f2448729b4cc8190c46496cc790d98923a0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3e43e0cc3808bdfedcb4781486f540b49661007fe6b6e6c380ce3c6a6062802 = $this->env->getExtension("native_profiler");
        $__internal_d3e43e0cc3808bdfedcb4781486f540b49661007fe6b6e6c380ce3c6a6062802->enter($__internal_d3e43e0cc3808bdfedcb4781486f540b49661007fe6b6e6c380ce3c6a6062802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_d3e43e0cc3808bdfedcb4781486f540b49661007fe6b6e6c380ce3c6a6062802->leave($__internal_d3e43e0cc3808bdfedcb4781486f540b49661007fe6b6e6c380ce3c6a6062802_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_89eed01a68050376cc90787daca4eebe81bb069af829aed65aae181509db2cfa = $this->env->getExtension("native_profiler");
        $__internal_89eed01a68050376cc90787daca4eebe81bb069af829aed65aae181509db2cfa->enter($__internal_89eed01a68050376cc90787daca4eebe81bb069af829aed65aae181509db2cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_89eed01a68050376cc90787daca4eebe81bb069af829aed65aae181509db2cfa->leave($__internal_89eed01a68050376cc90787daca4eebe81bb069af829aed65aae181509db2cfa_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
