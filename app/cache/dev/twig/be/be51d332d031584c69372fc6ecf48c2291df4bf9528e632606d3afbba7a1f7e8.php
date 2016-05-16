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
        $__internal_d26cfbbc08f55cf17a42697a70a361f72c03a745e05b4447d202758e70f1e355 = $this->env->getExtension("native_profiler");
        $__internal_d26cfbbc08f55cf17a42697a70a361f72c03a745e05b4447d202758e70f1e355->enter($__internal_d26cfbbc08f55cf17a42697a70a361f72c03a745e05b4447d202758e70f1e355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d26cfbbc08f55cf17a42697a70a361f72c03a745e05b4447d202758e70f1e355->leave($__internal_d26cfbbc08f55cf17a42697a70a361f72c03a745e05b4447d202758e70f1e355_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bca9d46a961b5a92289d04749e4b558db2a77fd2be23fd98c2779d16cba311a = $this->env->getExtension("native_profiler");
        $__internal_3bca9d46a961b5a92289d04749e4b558db2a77fd2be23fd98c2779d16cba311a->enter($__internal_3bca9d46a961b5a92289d04749e4b558db2a77fd2be23fd98c2779d16cba311a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3bca9d46a961b5a92289d04749e4b558db2a77fd2be23fd98c2779d16cba311a->leave($__internal_3bca9d46a961b5a92289d04749e4b558db2a77fd2be23fd98c2779d16cba311a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8667144b2b38d21a7a60f50a6abccba0ee9a76325e9861c89e7e78c204a979f = $this->env->getExtension("native_profiler");
        $__internal_b8667144b2b38d21a7a60f50a6abccba0ee9a76325e9861c89e7e78c204a979f->enter($__internal_b8667144b2b38d21a7a60f50a6abccba0ee9a76325e9861c89e7e78c204a979f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b8667144b2b38d21a7a60f50a6abccba0ee9a76325e9861c89e7e78c204a979f->leave($__internal_b8667144b2b38d21a7a60f50a6abccba0ee9a76325e9861c89e7e78c204a979f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d0df9ec270fc6c4b1e1243e5450dc2f482a5ccd7805bb2b5e51cecea68eca86 = $this->env->getExtension("native_profiler");
        $__internal_3d0df9ec270fc6c4b1e1243e5450dc2f482a5ccd7805bb2b5e51cecea68eca86->enter($__internal_3d0df9ec270fc6c4b1e1243e5450dc2f482a5ccd7805bb2b5e51cecea68eca86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d0df9ec270fc6c4b1e1243e5450dc2f482a5ccd7805bb2b5e51cecea68eca86->leave($__internal_3d0df9ec270fc6c4b1e1243e5450dc2f482a5ccd7805bb2b5e51cecea68eca86_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1fbaa0c3015f7068fbdc9ae279b76726117d00c9fa0830c45a226bbee73cd9e8 = $this->env->getExtension("native_profiler");
        $__internal_1fbaa0c3015f7068fbdc9ae279b76726117d00c9fa0830c45a226bbee73cd9e8->enter($__internal_1fbaa0c3015f7068fbdc9ae279b76726117d00c9fa0830c45a226bbee73cd9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1fbaa0c3015f7068fbdc9ae279b76726117d00c9fa0830c45a226bbee73cd9e8->leave($__internal_1fbaa0c3015f7068fbdc9ae279b76726117d00c9fa0830c45a226bbee73cd9e8_prof);

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
