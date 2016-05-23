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
        $__internal_95c7a1c468362f1a077a04af1cf4397cc5ce6488f0043b2bd1e83d57cbfb4b4e = $this->env->getExtension("native_profiler");
        $__internal_95c7a1c468362f1a077a04af1cf4397cc5ce6488f0043b2bd1e83d57cbfb4b4e->enter($__internal_95c7a1c468362f1a077a04af1cf4397cc5ce6488f0043b2bd1e83d57cbfb4b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95c7a1c468362f1a077a04af1cf4397cc5ce6488f0043b2bd1e83d57cbfb4b4e->leave($__internal_95c7a1c468362f1a077a04af1cf4397cc5ce6488f0043b2bd1e83d57cbfb4b4e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec1505584afcfa8b2e44ed0fe3bb30efece8f85db21e93bed6e62321caae5ee0 = $this->env->getExtension("native_profiler");
        $__internal_ec1505584afcfa8b2e44ed0fe3bb30efece8f85db21e93bed6e62321caae5ee0->enter($__internal_ec1505584afcfa8b2e44ed0fe3bb30efece8f85db21e93bed6e62321caae5ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ec1505584afcfa8b2e44ed0fe3bb30efece8f85db21e93bed6e62321caae5ee0->leave($__internal_ec1505584afcfa8b2e44ed0fe3bb30efece8f85db21e93bed6e62321caae5ee0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_604512878d4186a91df2083b42345168515d26620f063943d05a72ed74d8cb44 = $this->env->getExtension("native_profiler");
        $__internal_604512878d4186a91df2083b42345168515d26620f063943d05a72ed74d8cb44->enter($__internal_604512878d4186a91df2083b42345168515d26620f063943d05a72ed74d8cb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_604512878d4186a91df2083b42345168515d26620f063943d05a72ed74d8cb44->leave($__internal_604512878d4186a91df2083b42345168515d26620f063943d05a72ed74d8cb44_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9aca72b648f309ff55bb0cf6b052d40b01e20cb58a85c184c9a9b7c9a6d507f3 = $this->env->getExtension("native_profiler");
        $__internal_9aca72b648f309ff55bb0cf6b052d40b01e20cb58a85c184c9a9b7c9a6d507f3->enter($__internal_9aca72b648f309ff55bb0cf6b052d40b01e20cb58a85c184c9a9b7c9a6d507f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9aca72b648f309ff55bb0cf6b052d40b01e20cb58a85c184c9a9b7c9a6d507f3->leave($__internal_9aca72b648f309ff55bb0cf6b052d40b01e20cb58a85c184c9a9b7c9a6d507f3_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_610cf35ed676eb1a723caa99b30bf7af1056a2981f2d3682307a3328431a42c7 = $this->env->getExtension("native_profiler");
        $__internal_610cf35ed676eb1a723caa99b30bf7af1056a2981f2d3682307a3328431a42c7->enter($__internal_610cf35ed676eb1a723caa99b30bf7af1056a2981f2d3682307a3328431a42c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_610cf35ed676eb1a723caa99b30bf7af1056a2981f2d3682307a3328431a42c7->leave($__internal_610cf35ed676eb1a723caa99b30bf7af1056a2981f2d3682307a3328431a42c7_prof);

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
