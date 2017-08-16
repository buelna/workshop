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
        $__internal_9e9dd19e9c1f5a7022905ed5791f9508bc2fe9e21a661ac2045bc7fca1b3e755 = $this->env->getExtension("native_profiler");
        $__internal_9e9dd19e9c1f5a7022905ed5791f9508bc2fe9e21a661ac2045bc7fca1b3e755->enter($__internal_9e9dd19e9c1f5a7022905ed5791f9508bc2fe9e21a661ac2045bc7fca1b3e755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e9dd19e9c1f5a7022905ed5791f9508bc2fe9e21a661ac2045bc7fca1b3e755->leave($__internal_9e9dd19e9c1f5a7022905ed5791f9508bc2fe9e21a661ac2045bc7fca1b3e755_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89b167b5421d669b6875fb760c6685cb8a79e29dda7f8cae1723ad9db69ee391 = $this->env->getExtension("native_profiler");
        $__internal_89b167b5421d669b6875fb760c6685cb8a79e29dda7f8cae1723ad9db69ee391->enter($__internal_89b167b5421d669b6875fb760c6685cb8a79e29dda7f8cae1723ad9db69ee391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_89b167b5421d669b6875fb760c6685cb8a79e29dda7f8cae1723ad9db69ee391->leave($__internal_89b167b5421d669b6875fb760c6685cb8a79e29dda7f8cae1723ad9db69ee391_prof);

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
