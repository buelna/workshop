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
        $__internal_e416c0e1e91fff2316b43071cbbcf906a72fae5acb38178be557ad23922c01c2 = $this->env->getExtension("native_profiler");
        $__internal_e416c0e1e91fff2316b43071cbbcf906a72fae5acb38178be557ad23922c01c2->enter($__internal_e416c0e1e91fff2316b43071cbbcf906a72fae5acb38178be557ad23922c01c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e416c0e1e91fff2316b43071cbbcf906a72fae5acb38178be557ad23922c01c2->leave($__internal_e416c0e1e91fff2316b43071cbbcf906a72fae5acb38178be557ad23922c01c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d054dff5b1352d1efedf79e4bf289b9f2f29b5acc9c24542f84d343977f53d68 = $this->env->getExtension("native_profiler");
        $__internal_d054dff5b1352d1efedf79e4bf289b9f2f29b5acc9c24542f84d343977f53d68->enter($__internal_d054dff5b1352d1efedf79e4bf289b9f2f29b5acc9c24542f84d343977f53d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d054dff5b1352d1efedf79e4bf289b9f2f29b5acc9c24542f84d343977f53d68->leave($__internal_d054dff5b1352d1efedf79e4bf289b9f2f29b5acc9c24542f84d343977f53d68_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cec16c10fd67953518d60b8a30142cf2fd751d5a47b822380e81eb458b836714 = $this->env->getExtension("native_profiler");
        $__internal_cec16c10fd67953518d60b8a30142cf2fd751d5a47b822380e81eb458b836714->enter($__internal_cec16c10fd67953518d60b8a30142cf2fd751d5a47b822380e81eb458b836714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_cec16c10fd67953518d60b8a30142cf2fd751d5a47b822380e81eb458b836714->leave($__internal_cec16c10fd67953518d60b8a30142cf2fd751d5a47b822380e81eb458b836714_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4ef3cf9e0fdaeae5c23e87a74073ef1a75d2ca32ce570522608f56989123dfd = $this->env->getExtension("native_profiler");
        $__internal_d4ef3cf9e0fdaeae5c23e87a74073ef1a75d2ca32ce570522608f56989123dfd->enter($__internal_d4ef3cf9e0fdaeae5c23e87a74073ef1a75d2ca32ce570522608f56989123dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d4ef3cf9e0fdaeae5c23e87a74073ef1a75d2ca32ce570522608f56989123dfd->leave($__internal_d4ef3cf9e0fdaeae5c23e87a74073ef1a75d2ca32ce570522608f56989123dfd_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9cbc6ee139fc0ada0ca4a5e46fd32fc508e2ec43695623fb9328a4d366e8c1e1 = $this->env->getExtension("native_profiler");
        $__internal_9cbc6ee139fc0ada0ca4a5e46fd32fc508e2ec43695623fb9328a4d366e8c1e1->enter($__internal_9cbc6ee139fc0ada0ca4a5e46fd32fc508e2ec43695623fb9328a4d366e8c1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9cbc6ee139fc0ada0ca4a5e46fd32fc508e2ec43695623fb9328a4d366e8c1e1->leave($__internal_9cbc6ee139fc0ada0ca4a5e46fd32fc508e2ec43695623fb9328a4d366e8c1e1_prof);

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
