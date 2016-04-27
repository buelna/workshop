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
        $__internal_ddde328b471ca7d697315662006d8b8694fdef96e90553080240c1e2ae97f96a = $this->env->getExtension("native_profiler");
        $__internal_ddde328b471ca7d697315662006d8b8694fdef96e90553080240c1e2ae97f96a->enter($__internal_ddde328b471ca7d697315662006d8b8694fdef96e90553080240c1e2ae97f96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddde328b471ca7d697315662006d8b8694fdef96e90553080240c1e2ae97f96a->leave($__internal_ddde328b471ca7d697315662006d8b8694fdef96e90553080240c1e2ae97f96a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b9955f037629f8b65e9d8f5467f18b0987afd0ad7b5e327a18c4798242b634c = $this->env->getExtension("native_profiler");
        $__internal_0b9955f037629f8b65e9d8f5467f18b0987afd0ad7b5e327a18c4798242b634c->enter($__internal_0b9955f037629f8b65e9d8f5467f18b0987afd0ad7b5e327a18c4798242b634c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0b9955f037629f8b65e9d8f5467f18b0987afd0ad7b5e327a18c4798242b634c->leave($__internal_0b9955f037629f8b65e9d8f5467f18b0987afd0ad7b5e327a18c4798242b634c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_251ac660de49ba36be51163a34dac23c796f4723a76cbd8d76c165984afb8485 = $this->env->getExtension("native_profiler");
        $__internal_251ac660de49ba36be51163a34dac23c796f4723a76cbd8d76c165984afb8485->enter($__internal_251ac660de49ba36be51163a34dac23c796f4723a76cbd8d76c165984afb8485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_251ac660de49ba36be51163a34dac23c796f4723a76cbd8d76c165984afb8485->leave($__internal_251ac660de49ba36be51163a34dac23c796f4723a76cbd8d76c165984afb8485_prof);

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
