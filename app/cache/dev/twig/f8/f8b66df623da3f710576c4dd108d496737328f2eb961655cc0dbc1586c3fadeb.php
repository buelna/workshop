<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_21bf7e95f0a375274d45860953f25fbe706bc5021b9144f8ed88a4d7c9f05c74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fec7f8c6aba95d9e08d4e5375a532fed17f585fbc03adbc963d9a4085b25b095 = $this->env->getExtension("native_profiler");
        $__internal_fec7f8c6aba95d9e08d4e5375a532fed17f585fbc03adbc963d9a4085b25b095->enter($__internal_fec7f8c6aba95d9e08d4e5375a532fed17f585fbc03adbc963d9a4085b25b095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec7f8c6aba95d9e08d4e5375a532fed17f585fbc03adbc963d9a4085b25b095->leave($__internal_fec7f8c6aba95d9e08d4e5375a532fed17f585fbc03adbc963d9a4085b25b095_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_659f3551bea6ae652caac1a35f24288e53308433948053792e3c9adf59c6b1dc = $this->env->getExtension("native_profiler");
        $__internal_659f3551bea6ae652caac1a35f24288e53308433948053792e3c9adf59c6b1dc->enter($__internal_659f3551bea6ae652caac1a35f24288e53308433948053792e3c9adf59c6b1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_659f3551bea6ae652caac1a35f24288e53308433948053792e3c9adf59c6b1dc->leave($__internal_659f3551bea6ae652caac1a35f24288e53308433948053792e3c9adf59c6b1dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_751aecafb07a9d5502db73f6f9fadbe0667b349f7625af788a67a0fd870b2b27 = $this->env->getExtension("native_profiler");
        $__internal_751aecafb07a9d5502db73f6f9fadbe0667b349f7625af788a67a0fd870b2b27->enter($__internal_751aecafb07a9d5502db73f6f9fadbe0667b349f7625af788a67a0fd870b2b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_751aecafb07a9d5502db73f6f9fadbe0667b349f7625af788a67a0fd870b2b27->leave($__internal_751aecafb07a9d5502db73f6f9fadbe0667b349f7625af788a67a0fd870b2b27_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b5ad8b5db11d4343614bd5a0fbcbd9b0dd58ebbe1b5f20c5d8bc1e15666976c = $this->env->getExtension("native_profiler");
        $__internal_2b5ad8b5db11d4343614bd5a0fbcbd9b0dd58ebbe1b5f20c5d8bc1e15666976c->enter($__internal_2b5ad8b5db11d4343614bd5a0fbcbd9b0dd58ebbe1b5f20c5d8bc1e15666976c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b5ad8b5db11d4343614bd5a0fbcbd9b0dd58ebbe1b5f20c5d8bc1e15666976c->leave($__internal_2b5ad8b5db11d4343614bd5a0fbcbd9b0dd58ebbe1b5f20c5d8bc1e15666976c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
