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
        $__internal_b265dcf9ddf45a8ea719304cd5ce80b7beeba3c32e5078e2b7c878d55d0b1b18 = $this->env->getExtension("native_profiler");
        $__internal_b265dcf9ddf45a8ea719304cd5ce80b7beeba3c32e5078e2b7c878d55d0b1b18->enter($__internal_b265dcf9ddf45a8ea719304cd5ce80b7beeba3c32e5078e2b7c878d55d0b1b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b265dcf9ddf45a8ea719304cd5ce80b7beeba3c32e5078e2b7c878d55d0b1b18->leave($__internal_b265dcf9ddf45a8ea719304cd5ce80b7beeba3c32e5078e2b7c878d55d0b1b18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83487586c881cfcaf45ca85b5b52912a760955818265bd00aea112dfe396b657 = $this->env->getExtension("native_profiler");
        $__internal_83487586c881cfcaf45ca85b5b52912a760955818265bd00aea112dfe396b657->enter($__internal_83487586c881cfcaf45ca85b5b52912a760955818265bd00aea112dfe396b657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_83487586c881cfcaf45ca85b5b52912a760955818265bd00aea112dfe396b657->leave($__internal_83487586c881cfcaf45ca85b5b52912a760955818265bd00aea112dfe396b657_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6d5f1c9726ac68b29f5d7983ec1dabba3814cfbe5e4be07f9acbdce38121f58 = $this->env->getExtension("native_profiler");
        $__internal_c6d5f1c9726ac68b29f5d7983ec1dabba3814cfbe5e4be07f9acbdce38121f58->enter($__internal_c6d5f1c9726ac68b29f5d7983ec1dabba3814cfbe5e4be07f9acbdce38121f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c6d5f1c9726ac68b29f5d7983ec1dabba3814cfbe5e4be07f9acbdce38121f58->leave($__internal_c6d5f1c9726ac68b29f5d7983ec1dabba3814cfbe5e4be07f9acbdce38121f58_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec43d3ec6830addd55faa24d521fe0fe9b8080d2b16f0cb2b0d918933dd211f2 = $this->env->getExtension("native_profiler");
        $__internal_ec43d3ec6830addd55faa24d521fe0fe9b8080d2b16f0cb2b0d918933dd211f2->enter($__internal_ec43d3ec6830addd55faa24d521fe0fe9b8080d2b16f0cb2b0d918933dd211f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ec43d3ec6830addd55faa24d521fe0fe9b8080d2b16f0cb2b0d918933dd211f2->leave($__internal_ec43d3ec6830addd55faa24d521fe0fe9b8080d2b16f0cb2b0d918933dd211f2_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d75ffe4531e1004940f68482d01ca48336446229d3430f857cf1158d76d1f7de = $this->env->getExtension("native_profiler");
        $__internal_d75ffe4531e1004940f68482d01ca48336446229d3430f857cf1158d76d1f7de->enter($__internal_d75ffe4531e1004940f68482d01ca48336446229d3430f857cf1158d76d1f7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d75ffe4531e1004940f68482d01ca48336446229d3430f857cf1158d76d1f7de->leave($__internal_d75ffe4531e1004940f68482d01ca48336446229d3430f857cf1158d76d1f7de_prof);

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
