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
        $__internal_3e470009903b73f9052abd7fa3e0a9c9897869377848e756ffca8df324b570d0 = $this->env->getExtension("native_profiler");
        $__internal_3e470009903b73f9052abd7fa3e0a9c9897869377848e756ffca8df324b570d0->enter($__internal_3e470009903b73f9052abd7fa3e0a9c9897869377848e756ffca8df324b570d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e470009903b73f9052abd7fa3e0a9c9897869377848e756ffca8df324b570d0->leave($__internal_3e470009903b73f9052abd7fa3e0a9c9897869377848e756ffca8df324b570d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_61560f41bfd87c67cccec5f9e92c90d8c79fa00bedd81ff6ce7b3047937e0959 = $this->env->getExtension("native_profiler");
        $__internal_61560f41bfd87c67cccec5f9e92c90d8c79fa00bedd81ff6ce7b3047937e0959->enter($__internal_61560f41bfd87c67cccec5f9e92c90d8c79fa00bedd81ff6ce7b3047937e0959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_61560f41bfd87c67cccec5f9e92c90d8c79fa00bedd81ff6ce7b3047937e0959->leave($__internal_61560f41bfd87c67cccec5f9e92c90d8c79fa00bedd81ff6ce7b3047937e0959_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e74d0d0cb060f3f43fe9f86c388615c919c630f5b8315def1aa0915c2fb545bb = $this->env->getExtension("native_profiler");
        $__internal_e74d0d0cb060f3f43fe9f86c388615c919c630f5b8315def1aa0915c2fb545bb->enter($__internal_e74d0d0cb060f3f43fe9f86c388615c919c630f5b8315def1aa0915c2fb545bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e74d0d0cb060f3f43fe9f86c388615c919c630f5b8315def1aa0915c2fb545bb->leave($__internal_e74d0d0cb060f3f43fe9f86c388615c919c630f5b8315def1aa0915c2fb545bb_prof);

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
