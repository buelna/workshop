<?php

/* AppBundle:Default:programa.html.twig */
class __TwigTemplate_0072569213dbb9034e4d51a3424ab3c35b232588631a911514d56b7b6e7e025d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:programa.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'cols' => array($this, 'block_cols'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>to be announced...</h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
";
    }

    // line 10
    public function block_cols($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"large-12 columns\">
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:programa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  42 => 10,  32 => 3,  29 => 2,  11 => 1,);
    }
}
