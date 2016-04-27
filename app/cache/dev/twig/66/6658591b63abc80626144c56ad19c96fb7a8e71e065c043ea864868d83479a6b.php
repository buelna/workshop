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
        $__internal_866419b0d804ec38f5d6761527c940fd5fc8acad82bf7b6eda77835ae62b7ec1 = $this->env->getExtension("native_profiler");
        $__internal_866419b0d804ec38f5d6761527c940fd5fc8acad82bf7b6eda77835ae62b7ec1->enter($__internal_866419b0d804ec38f5d6761527c940fd5fc8acad82bf7b6eda77835ae62b7ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_866419b0d804ec38f5d6761527c940fd5fc8acad82bf7b6eda77835ae62b7ec1->leave($__internal_866419b0d804ec38f5d6761527c940fd5fc8acad82bf7b6eda77835ae62b7ec1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ee1133abccff2533a4803d9d541d611d64d33f3ee04114c3a2a7e8149d78ea1 = $this->env->getExtension("native_profiler");
        $__internal_7ee1133abccff2533a4803d9d541d611d64d33f3ee04114c3a2a7e8149d78ea1->enter($__internal_7ee1133abccff2533a4803d9d541d611d64d33f3ee04114c3a2a7e8149d78ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7ee1133abccff2533a4803d9d541d611d64d33f3ee04114c3a2a7e8149d78ea1->leave($__internal_7ee1133abccff2533a4803d9d541d611d64d33f3ee04114c3a2a7e8149d78ea1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3551d1353f9f0ed9b8824f61e92841d85ee2c6129fdf5ee4e0471351bec9cc16 = $this->env->getExtension("native_profiler");
        $__internal_3551d1353f9f0ed9b8824f61e92841d85ee2c6129fdf5ee4e0471351bec9cc16->enter($__internal_3551d1353f9f0ed9b8824f61e92841d85ee2c6129fdf5ee4e0471351bec9cc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3551d1353f9f0ed9b8824f61e92841d85ee2c6129fdf5ee4e0471351bec9cc16->leave($__internal_3551d1353f9f0ed9b8824f61e92841d85ee2c6129fdf5ee4e0471351bec9cc16_prof);

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
