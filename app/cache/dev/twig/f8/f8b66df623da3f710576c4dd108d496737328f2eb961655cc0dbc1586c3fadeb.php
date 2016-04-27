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
        $__internal_9653657cdee556247cb6c19cf8ea96ec3d21027372017fc5a0a5834c80334e72 = $this->env->getExtension("native_profiler");
        $__internal_9653657cdee556247cb6c19cf8ea96ec3d21027372017fc5a0a5834c80334e72->enter($__internal_9653657cdee556247cb6c19cf8ea96ec3d21027372017fc5a0a5834c80334e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9653657cdee556247cb6c19cf8ea96ec3d21027372017fc5a0a5834c80334e72->leave($__internal_9653657cdee556247cb6c19cf8ea96ec3d21027372017fc5a0a5834c80334e72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ec245a3842fe77a6c2f95c75be32dd526fa42bcfac7252b38f67506ea49c719 = $this->env->getExtension("native_profiler");
        $__internal_4ec245a3842fe77a6c2f95c75be32dd526fa42bcfac7252b38f67506ea49c719->enter($__internal_4ec245a3842fe77a6c2f95c75be32dd526fa42bcfac7252b38f67506ea49c719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ec245a3842fe77a6c2f95c75be32dd526fa42bcfac7252b38f67506ea49c719->leave($__internal_4ec245a3842fe77a6c2f95c75be32dd526fa42bcfac7252b38f67506ea49c719_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e68f26b0ff97875487ce3d21e6dc4574800a9ca746e1f66a27cedd9d10a1b3bc = $this->env->getExtension("native_profiler");
        $__internal_e68f26b0ff97875487ce3d21e6dc4574800a9ca746e1f66a27cedd9d10a1b3bc->enter($__internal_e68f26b0ff97875487ce3d21e6dc4574800a9ca746e1f66a27cedd9d10a1b3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e68f26b0ff97875487ce3d21e6dc4574800a9ca746e1f66a27cedd9d10a1b3bc->leave($__internal_e68f26b0ff97875487ce3d21e6dc4574800a9ca746e1f66a27cedd9d10a1b3bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46fd69c4a2bb27837843070e7e4dfb0e7ff9f2f98a02e459f9451fd3b99f3413 = $this->env->getExtension("native_profiler");
        $__internal_46fd69c4a2bb27837843070e7e4dfb0e7ff9f2f98a02e459f9451fd3b99f3413->enter($__internal_46fd69c4a2bb27837843070e7e4dfb0e7ff9f2f98a02e459f9451fd3b99f3413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_46fd69c4a2bb27837843070e7e4dfb0e7ff9f2f98a02e459f9451fd3b99f3413->leave($__internal_46fd69c4a2bb27837843070e7e4dfb0e7ff9f2f98a02e459f9451fd3b99f3413_prof);

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
