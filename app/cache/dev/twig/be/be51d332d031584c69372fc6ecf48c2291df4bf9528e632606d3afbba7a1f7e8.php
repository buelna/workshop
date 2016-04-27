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
        $__internal_a520a708b4263a87b2e80bcd46e631d02b49c46cf1f47f010c02574aacfdbb7c = $this->env->getExtension("native_profiler");
        $__internal_a520a708b4263a87b2e80bcd46e631d02b49c46cf1f47f010c02574aacfdbb7c->enter($__internal_a520a708b4263a87b2e80bcd46e631d02b49c46cf1f47f010c02574aacfdbb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a520a708b4263a87b2e80bcd46e631d02b49c46cf1f47f010c02574aacfdbb7c->leave($__internal_a520a708b4263a87b2e80bcd46e631d02b49c46cf1f47f010c02574aacfdbb7c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24265236a9a6d2c87bb709179b70870ac55ea52fd04b1ca341e019dd606101f7 = $this->env->getExtension("native_profiler");
        $__internal_24265236a9a6d2c87bb709179b70870ac55ea52fd04b1ca341e019dd606101f7->enter($__internal_24265236a9a6d2c87bb709179b70870ac55ea52fd04b1ca341e019dd606101f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_24265236a9a6d2c87bb709179b70870ac55ea52fd04b1ca341e019dd606101f7->leave($__internal_24265236a9a6d2c87bb709179b70870ac55ea52fd04b1ca341e019dd606101f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f950d965901dd6046740bc6cd3bbcb161133649ba81a66c45a6f4e6269b2addd = $this->env->getExtension("native_profiler");
        $__internal_f950d965901dd6046740bc6cd3bbcb161133649ba81a66c45a6f4e6269b2addd->enter($__internal_f950d965901dd6046740bc6cd3bbcb161133649ba81a66c45a6f4e6269b2addd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f950d965901dd6046740bc6cd3bbcb161133649ba81a66c45a6f4e6269b2addd->leave($__internal_f950d965901dd6046740bc6cd3bbcb161133649ba81a66c45a6f4e6269b2addd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_51bc4ce1ad2bb160665b502bab32dba96ae800c6058c66f768468ae17570df66 = $this->env->getExtension("native_profiler");
        $__internal_51bc4ce1ad2bb160665b502bab32dba96ae800c6058c66f768468ae17570df66->enter($__internal_51bc4ce1ad2bb160665b502bab32dba96ae800c6058c66f768468ae17570df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51bc4ce1ad2bb160665b502bab32dba96ae800c6058c66f768468ae17570df66->leave($__internal_51bc4ce1ad2bb160665b502bab32dba96ae800c6058c66f768468ae17570df66_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0bc04177b7b9df5ecfd683c54da034a42bd045a13f48fe8dad2c13580793899d = $this->env->getExtension("native_profiler");
        $__internal_0bc04177b7b9df5ecfd683c54da034a42bd045a13f48fe8dad2c13580793899d->enter($__internal_0bc04177b7b9df5ecfd683c54da034a42bd045a13f48fe8dad2c13580793899d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0bc04177b7b9df5ecfd683c54da034a42bd045a13f48fe8dad2c13580793899d->leave($__internal_0bc04177b7b9df5ecfd683c54da034a42bd045a13f48fe8dad2c13580793899d_prof);

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
