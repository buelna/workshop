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
        $__internal_ea7340c11bc453b3c050b627e7c5fd7177e316e55350aec0a63485cde717693c = $this->env->getExtension("native_profiler");
        $__internal_ea7340c11bc453b3c050b627e7c5fd7177e316e55350aec0a63485cde717693c->enter($__internal_ea7340c11bc453b3c050b627e7c5fd7177e316e55350aec0a63485cde717693c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea7340c11bc453b3c050b627e7c5fd7177e316e55350aec0a63485cde717693c->leave($__internal_ea7340c11bc453b3c050b627e7c5fd7177e316e55350aec0a63485cde717693c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4339e4dee9e144c3419b6f1ea332b7c43f1b86aaa9d891d3e1b94b494a11d0ff = $this->env->getExtension("native_profiler");
        $__internal_4339e4dee9e144c3419b6f1ea332b7c43f1b86aaa9d891d3e1b94b494a11d0ff->enter($__internal_4339e4dee9e144c3419b6f1ea332b7c43f1b86aaa9d891d3e1b94b494a11d0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_4339e4dee9e144c3419b6f1ea332b7c43f1b86aaa9d891d3e1b94b494a11d0ff->leave($__internal_4339e4dee9e144c3419b6f1ea332b7c43f1b86aaa9d891d3e1b94b494a11d0ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60d4a277a97586f51740bf636e3911c36f1ac17dc1bd5da32b5c67637e07ffa7 = $this->env->getExtension("native_profiler");
        $__internal_60d4a277a97586f51740bf636e3911c36f1ac17dc1bd5da32b5c67637e07ffa7->enter($__internal_60d4a277a97586f51740bf636e3911c36f1ac17dc1bd5da32b5c67637e07ffa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_60d4a277a97586f51740bf636e3911c36f1ac17dc1bd5da32b5c67637e07ffa7->leave($__internal_60d4a277a97586f51740bf636e3911c36f1ac17dc1bd5da32b5c67637e07ffa7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ffb7a7e9a87944b3196e330e075a6bcdce03e45c633c20fa6b26d475de3d9fc = $this->env->getExtension("native_profiler");
        $__internal_6ffb7a7e9a87944b3196e330e075a6bcdce03e45c633c20fa6b26d475de3d9fc->enter($__internal_6ffb7a7e9a87944b3196e330e075a6bcdce03e45c633c20fa6b26d475de3d9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ffb7a7e9a87944b3196e330e075a6bcdce03e45c633c20fa6b26d475de3d9fc->leave($__internal_6ffb7a7e9a87944b3196e330e075a6bcdce03e45c633c20fa6b26d475de3d9fc_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b4976d11e34e859af72faae3e0367cef2a396e02a1305453dde56740d2766a24 = $this->env->getExtension("native_profiler");
        $__internal_b4976d11e34e859af72faae3e0367cef2a396e02a1305453dde56740d2766a24->enter($__internal_b4976d11e34e859af72faae3e0367cef2a396e02a1305453dde56740d2766a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b4976d11e34e859af72faae3e0367cef2a396e02a1305453dde56740d2766a24->leave($__internal_b4976d11e34e859af72faae3e0367cef2a396e02a1305453dde56740d2766a24_prof);

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
