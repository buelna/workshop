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
        $__internal_02d1d4bc542dac480d2080024c2be85a4b55748c13ee73867abec8c49f3e1f1c = $this->env->getExtension("native_profiler");
        $__internal_02d1d4bc542dac480d2080024c2be85a4b55748c13ee73867abec8c49f3e1f1c->enter($__internal_02d1d4bc542dac480d2080024c2be85a4b55748c13ee73867abec8c49f3e1f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02d1d4bc542dac480d2080024c2be85a4b55748c13ee73867abec8c49f3e1f1c->leave($__internal_02d1d4bc542dac480d2080024c2be85a4b55748c13ee73867abec8c49f3e1f1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10e7891b458165573b7ed313e5082d6ef7a742a5d190489272e07e63ce0508cb = $this->env->getExtension("native_profiler");
        $__internal_10e7891b458165573b7ed313e5082d6ef7a742a5d190489272e07e63ce0508cb->enter($__internal_10e7891b458165573b7ed313e5082d6ef7a742a5d190489272e07e63ce0508cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_10e7891b458165573b7ed313e5082d6ef7a742a5d190489272e07e63ce0508cb->leave($__internal_10e7891b458165573b7ed313e5082d6ef7a742a5d190489272e07e63ce0508cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6c14ef418bc4a78126192df5ab6996a398ffa5264f9121546e80eb19d469350 = $this->env->getExtension("native_profiler");
        $__internal_f6c14ef418bc4a78126192df5ab6996a398ffa5264f9121546e80eb19d469350->enter($__internal_f6c14ef418bc4a78126192df5ab6996a398ffa5264f9121546e80eb19d469350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f6c14ef418bc4a78126192df5ab6996a398ffa5264f9121546e80eb19d469350->leave($__internal_f6c14ef418bc4a78126192df5ab6996a398ffa5264f9121546e80eb19d469350_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d7fca70fea46deecd639b579fb031ec66fd9ce756a710b21f48b096e0314bf7 = $this->env->getExtension("native_profiler");
        $__internal_0d7fca70fea46deecd639b579fb031ec66fd9ce756a710b21f48b096e0314bf7->enter($__internal_0d7fca70fea46deecd639b579fb031ec66fd9ce756a710b21f48b096e0314bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d7fca70fea46deecd639b579fb031ec66fd9ce756a710b21f48b096e0314bf7->leave($__internal_0d7fca70fea46deecd639b579fb031ec66fd9ce756a710b21f48b096e0314bf7_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_708490302a5c867f4f4be8dd6f380ce682758fac922176e15ce7ea46dbdc465f = $this->env->getExtension("native_profiler");
        $__internal_708490302a5c867f4f4be8dd6f380ce682758fac922176e15ce7ea46dbdc465f->enter($__internal_708490302a5c867f4f4be8dd6f380ce682758fac922176e15ce7ea46dbdc465f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_708490302a5c867f4f4be8dd6f380ce682758fac922176e15ce7ea46dbdc465f->leave($__internal_708490302a5c867f4f4be8dd6f380ce682758fac922176e15ce7ea46dbdc465f_prof);

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
