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
        $__internal_fbced0cad88d89f0ca0052d155263cd4d18e66e1a4a73d1364b0e133a4956c39 = $this->env->getExtension("native_profiler");
        $__internal_fbced0cad88d89f0ca0052d155263cd4d18e66e1a4a73d1364b0e133a4956c39->enter($__internal_fbced0cad88d89f0ca0052d155263cd4d18e66e1a4a73d1364b0e133a4956c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbced0cad88d89f0ca0052d155263cd4d18e66e1a4a73d1364b0e133a4956c39->leave($__internal_fbced0cad88d89f0ca0052d155263cd4d18e66e1a4a73d1364b0e133a4956c39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_521ecf4554c855ad7bd1bab2ba316815d9c978fcfac73bd106a696f1fa88a0df = $this->env->getExtension("native_profiler");
        $__internal_521ecf4554c855ad7bd1bab2ba316815d9c978fcfac73bd106a696f1fa88a0df->enter($__internal_521ecf4554c855ad7bd1bab2ba316815d9c978fcfac73bd106a696f1fa88a0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_521ecf4554c855ad7bd1bab2ba316815d9c978fcfac73bd106a696f1fa88a0df->leave($__internal_521ecf4554c855ad7bd1bab2ba316815d9c978fcfac73bd106a696f1fa88a0df_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcc1cef9b3de79c139606c84d3fb88bf74b844166ccfb40bf72b8b3518048dfb = $this->env->getExtension("native_profiler");
        $__internal_fcc1cef9b3de79c139606c84d3fb88bf74b844166ccfb40bf72b8b3518048dfb->enter($__internal_fcc1cef9b3de79c139606c84d3fb88bf74b844166ccfb40bf72b8b3518048dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fcc1cef9b3de79c139606c84d3fb88bf74b844166ccfb40bf72b8b3518048dfb->leave($__internal_fcc1cef9b3de79c139606c84d3fb88bf74b844166ccfb40bf72b8b3518048dfb_prof);

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
