<?php

/* AppBundle:Default:venue.html.twig */
class __TwigTemplate_a0d7f21fa6bc0d2769aff5b5de7544dfe012e218c7e22a11d3cf51d8f6e4597b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:venue.html.twig", 1);
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
        $__internal_c1d14d770c80a511faa8efdf36e15e2eb4b5aac2e1cc84d22bd039bee6e1b054 = $this->env->getExtension("native_profiler");
        $__internal_c1d14d770c80a511faa8efdf36e15e2eb4b5aac2e1cc84d22bd039bee6e1b054->enter($__internal_c1d14d770c80a511faa8efdf36e15e2eb4b5aac2e1cc84d22bd039bee6e1b054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:venue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1d14d770c80a511faa8efdf36e15e2eb4b5aac2e1cc84d22bd039bee6e1b054->leave($__internal_c1d14d770c80a511faa8efdf36e15e2eb4b5aac2e1cc84d22bd039bee6e1b054_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_608192e2449e7de9aa8d39a3ee2ccea726acf48f735a0c32e985ed5df8af142d = $this->env->getExtension("native_profiler");
        $__internal_608192e2449e7de9aa8d39a3ee2ccea726acf48f735a0c32e985ed5df8af142d->enter($__internal_608192e2449e7de9aa8d39a3ee2ccea726acf48f735a0c32e985ed5df8af142d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Venue</h1>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
\t&nbsp;&nbsp;&nbsp;<img alt=\"\" src=\"http://www.hauntedpoker.com/images/tropicana.jpg\" width=\"45%\" height=\"45%\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
\tIEEE CCNC 2017 conference has selected the Tropicana Las Vegas Casino Hotel Resort as its headquarters hotel. Tropicana Las Vegas Casino Hotel Resort is an exciting place to be. Located on the Las Vegas Strip.<br>
\t<br>
\tTropicana Las Vegas Casino Hotel Resort<br>
\t3801 Las Vegas Blvd. South<br>
\tLas Vegas, NV 89109 <br>
\t<br><br>
\t<br>
\t</p>
";
        
        $__internal_608192e2449e7de9aa8d39a3ee2ccea726acf48f735a0c32e985ed5df8af142d->leave($__internal_608192e2449e7de9aa8d39a3ee2ccea726acf48f735a0c32e985ed5df8af142d_prof);

    }

    // line 16
    public function block_cols($context, array $blocks = array())
    {
        $__internal_159c0c96bfd29d876c88df40c48205b177d6d3aa746a8c57a29507f43545394b = $this->env->getExtension("native_profiler");
        $__internal_159c0c96bfd29d876c88df40c48205b177d6d3aa746a8c57a29507f43545394b->enter($__internal_159c0c96bfd29d876c88df40c48205b177d6d3aa746a8c57a29507f43545394b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 17
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_159c0c96bfd29d876c88df40c48205b177d6d3aa746a8c57a29507f43545394b->leave($__internal_159c0c96bfd29d876c88df40c48205b177d6d3aa746a8c57a29507f43545394b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:venue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  60 => 16,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block content %}*/
/* <h1>Venue</h1>*/
/* <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>*/
/* 	&nbsp;&nbsp;&nbsp;<img alt="" src="http://www.hauntedpoker.com/images/tropicana.jpg" width="45%" height="45%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>*/
/* 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>*/
/* 	IEEE CCNC 2017 conference has selected the Tropicana Las Vegas Casino Hotel Resort as its headquarters hotel. Tropicana Las Vegas Casino Hotel Resort is an exciting place to be. Located on the Las Vegas Strip.<br>*/
/* 	<br>*/
/* 	Tropicana Las Vegas Casino Hotel Resort<br>*/
/* 	3801 Las Vegas Blvd. South<br>*/
/* 	Las Vegas, NV 89109 <br>*/
/* 	<br><br>*/
/* 	<br>*/
/* 	</p>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-12 columns">*/
/* {% endblock %}*/
/* */
