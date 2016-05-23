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
        $__internal_5c941418ee3cfbfda08dadbd8756b235478effc565b3544f9d2aa42778ab87d1 = $this->env->getExtension("native_profiler");
        $__internal_5c941418ee3cfbfda08dadbd8756b235478effc565b3544f9d2aa42778ab87d1->enter($__internal_5c941418ee3cfbfda08dadbd8756b235478effc565b3544f9d2aa42778ab87d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c941418ee3cfbfda08dadbd8756b235478effc565b3544f9d2aa42778ab87d1->leave($__internal_5c941418ee3cfbfda08dadbd8756b235478effc565b3544f9d2aa42778ab87d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9a1fb0bc3313273062583e3dbe46f89e3b37b9e30532f1c5530ed04a3ba61fd = $this->env->getExtension("native_profiler");
        $__internal_a9a1fb0bc3313273062583e3dbe46f89e3b37b9e30532f1c5530ed04a3ba61fd->enter($__internal_a9a1fb0bc3313273062583e3dbe46f89e3b37b9e30532f1c5530ed04a3ba61fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_a9a1fb0bc3313273062583e3dbe46f89e3b37b9e30532f1c5530ed04a3ba61fd->leave($__internal_a9a1fb0bc3313273062583e3dbe46f89e3b37b9e30532f1c5530ed04a3ba61fd_prof);

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
