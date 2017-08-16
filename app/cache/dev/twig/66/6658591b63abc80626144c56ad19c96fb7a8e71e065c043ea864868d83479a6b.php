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
        $__internal_32272871c0e7424180924f3206af69905457ee0fd794e2dd1d3ec49f09b9f6a3 = $this->env->getExtension("native_profiler");
        $__internal_32272871c0e7424180924f3206af69905457ee0fd794e2dd1d3ec49f09b9f6a3->enter($__internal_32272871c0e7424180924f3206af69905457ee0fd794e2dd1d3ec49f09b9f6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32272871c0e7424180924f3206af69905457ee0fd794e2dd1d3ec49f09b9f6a3->leave($__internal_32272871c0e7424180924f3206af69905457ee0fd794e2dd1d3ec49f09b9f6a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2b84e179659a654ac37ccc2fbe425657ed5359db7857768b1e2af1e820b2462 = $this->env->getExtension("native_profiler");
        $__internal_c2b84e179659a654ac37ccc2fbe425657ed5359db7857768b1e2af1e820b2462->enter($__internal_c2b84e179659a654ac37ccc2fbe425657ed5359db7857768b1e2af1e820b2462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c2b84e179659a654ac37ccc2fbe425657ed5359db7857768b1e2af1e820b2462->leave($__internal_c2b84e179659a654ac37ccc2fbe425657ed5359db7857768b1e2af1e820b2462_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0567620922639ff6c89a09e80a3e485d19a55c9dd9854c9278e678f5b18a2a6 = $this->env->getExtension("native_profiler");
        $__internal_c0567620922639ff6c89a09e80a3e485d19a55c9dd9854c9278e678f5b18a2a6->enter($__internal_c0567620922639ff6c89a09e80a3e485d19a55c9dd9854c9278e678f5b18a2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0567620922639ff6c89a09e80a3e485d19a55c9dd9854c9278e678f5b18a2a6->leave($__internal_c0567620922639ff6c89a09e80a3e485d19a55c9dd9854c9278e678f5b18a2a6_prof);

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
