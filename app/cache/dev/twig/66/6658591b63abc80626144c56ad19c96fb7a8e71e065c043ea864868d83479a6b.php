<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ce915a1939e67e22c82c57e4473ff199760e907d652ca9877c026a80a6eda274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7db09ee5f073da6fdbb42cf3a26b1bb6a61fa5a5a90ff9e8ad1e9d5c5f277c0a = $this->env->getExtension("native_profiler");
        $__internal_7db09ee5f073da6fdbb42cf3a26b1bb6a61fa5a5a90ff9e8ad1e9d5c5f277c0a->enter($__internal_7db09ee5f073da6fdbb42cf3a26b1bb6a61fa5a5a90ff9e8ad1e9d5c5f277c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db09ee5f073da6fdbb42cf3a26b1bb6a61fa5a5a90ff9e8ad1e9d5c5f277c0a->leave($__internal_7db09ee5f073da6fdbb42cf3a26b1bb6a61fa5a5a90ff9e8ad1e9d5c5f277c0a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba04deb2eb50a4b8cacf4062a7d98544ac3865ce42b374554e605db930eacf34 = $this->env->getExtension("native_profiler");
        $__internal_ba04deb2eb50a4b8cacf4062a7d98544ac3865ce42b374554e605db930eacf34->enter($__internal_ba04deb2eb50a4b8cacf4062a7d98544ac3865ce42b374554e605db930eacf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ba04deb2eb50a4b8cacf4062a7d98544ac3865ce42b374554e605db930eacf34->leave($__internal_ba04deb2eb50a4b8cacf4062a7d98544ac3865ce42b374554e605db930eacf34_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fe77b9561783a1976ee013c2d19845363af587199aa9f6b5cc9f24881830ab8 = $this->env->getExtension("native_profiler");
        $__internal_6fe77b9561783a1976ee013c2d19845363af587199aa9f6b5cc9f24881830ab8->enter($__internal_6fe77b9561783a1976ee013c2d19845363af587199aa9f6b5cc9f24881830ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6fe77b9561783a1976ee013c2d19845363af587199aa9f6b5cc9f24881830ab8->leave($__internal_6fe77b9561783a1976ee013c2d19845363af587199aa9f6b5cc9f24881830ab8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
