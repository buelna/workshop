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
        $__internal_4b4676ba41b91bf33e13ff574c6c470261f9fd55f3722e01ee399472528a4c2d = $this->env->getExtension("native_profiler");
        $__internal_4b4676ba41b91bf33e13ff574c6c470261f9fd55f3722e01ee399472528a4c2d->enter($__internal_4b4676ba41b91bf33e13ff574c6c470261f9fd55f3722e01ee399472528a4c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b4676ba41b91bf33e13ff574c6c470261f9fd55f3722e01ee399472528a4c2d->leave($__internal_4b4676ba41b91bf33e13ff574c6c470261f9fd55f3722e01ee399472528a4c2d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_faa0b996e5a8a987b822f3ebc00dc0bddaba71f350ab137853a4d807c7481143 = $this->env->getExtension("native_profiler");
        $__internal_faa0b996e5a8a987b822f3ebc00dc0bddaba71f350ab137853a4d807c7481143->enter($__internal_faa0b996e5a8a987b822f3ebc00dc0bddaba71f350ab137853a4d807c7481143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_faa0b996e5a8a987b822f3ebc00dc0bddaba71f350ab137853a4d807c7481143->leave($__internal_faa0b996e5a8a987b822f3ebc00dc0bddaba71f350ab137853a4d807c7481143_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41fbb1d88684b329276925bf58d2c925e49fbe938b6dba49062eea68de587704 = $this->env->getExtension("native_profiler");
        $__internal_41fbb1d88684b329276925bf58d2c925e49fbe938b6dba49062eea68de587704->enter($__internal_41fbb1d88684b329276925bf58d2c925e49fbe938b6dba49062eea68de587704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41fbb1d88684b329276925bf58d2c925e49fbe938b6dba49062eea68de587704->leave($__internal_41fbb1d88684b329276925bf58d2c925e49fbe938b6dba49062eea68de587704_prof);

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
