<?php

/* :default:index.html.twig */
class __TwigTemplate_f7c566bd6eb417f6dcaaf5bfe37759f059e720258c0fc175319c0b58282b3819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8053c9a425151469e79387b229d8be633dbe6d1eb654d6e81880c1c3d550281 = $this->env->getExtension("native_profiler");
        $__internal_f8053c9a425151469e79387b229d8be633dbe6d1eb654d6e81880c1c3d550281->enter($__internal_f8053c9a425151469e79387b229d8be633dbe6d1eb654d6e81880c1c3d550281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8053c9a425151469e79387b229d8be633dbe6d1eb654d6e81880c1c3d550281->leave($__internal_f8053c9a425151469e79387b229d8be633dbe6d1eb654d6e81880c1c3d550281_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ede95f3a9f0ee08d7cd769259fe47de86dcb7bb38abebb7d4f0963db941edc51 = $this->env->getExtension("native_profiler");
        $__internal_ede95f3a9f0ee08d7cd769259fe47de86dcb7bb38abebb7d4f0963db941edc51->enter($__internal_ede95f3a9f0ee08d7cd769259fe47de86dcb7bb38abebb7d4f0963db941edc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_ede95f3a9f0ee08d7cd769259fe47de86dcb7bb38abebb7d4f0963db941edc51->leave($__internal_ede95f3a9f0ee08d7cd769259fe47de86dcb7bb38abebb7d4f0963db941edc51_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Homepage.*/
/* {% endblock %}*/
/* */
