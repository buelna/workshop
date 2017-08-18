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
        $__internal_4c00358ecd31102d403328eb620d082a682c1c13d15dc5f920d1a64b7a910230 = $this->env->getExtension("native_profiler");
        $__internal_4c00358ecd31102d403328eb620d082a682c1c13d15dc5f920d1a64b7a910230->enter($__internal_4c00358ecd31102d403328eb620d082a682c1c13d15dc5f920d1a64b7a910230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:venue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c00358ecd31102d403328eb620d082a682c1c13d15dc5f920d1a64b7a910230->leave($__internal_4c00358ecd31102d403328eb620d082a682c1c13d15dc5f920d1a64b7a910230_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_132f2861936cba545d8ef90bda3ef1d8b4253e4224732392cc75daa3b92d13e4 = $this->env->getExtension("native_profiler");
        $__internal_132f2861936cba545d8ef90bda3ef1d8b4253e4224732392cc75daa3b92d13e4->enter($__internal_132f2861936cba545d8ef90bda3ef1d8b4253e4224732392cc75daa3b92d13e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Venue</h1>
<p><br>
\t<strong>Flamingo Las Vegas</strong> will serve as the conference hotel for IEEE CCNC 2018. Flamingo may be one of the most classic Las Vegas hotels, but its rooms feature sleek, bright designs and decor. Set on the famous four corners of Las Vegas Boulevard and Flamingo Road, this Las Vegas hotel combines heart-pounding excitement with hospitality and service that's second to none. Located adjacent to The Linq and The High Roller.<br>
\t<br>
\tFlamingo Las Vegas<br>
\t3555 Las Vegas Boulevard South<br>
\tLas Vegas, NV 89109<br>
\tPhone:  +1 702.733.3111<br>
\t<br><br>
\t<br>
\t</p>
";
        
        $__internal_132f2861936cba545d8ef90bda3ef1d8b4253e4224732392cc75daa3b92d13e4->leave($__internal_132f2861936cba545d8ef90bda3ef1d8b4253e4224732392cc75daa3b92d13e4_prof);

    }

    // line 15
    public function block_cols($context, array $blocks = array())
    {
        $__internal_68af72c40794345684b2be6a08b4251fba9c38b26e2d3f9dc8789a6c2322f1ae = $this->env->getExtension("native_profiler");
        $__internal_68af72c40794345684b2be6a08b4251fba9c38b26e2d3f9dc8789a6c2322f1ae->enter($__internal_68af72c40794345684b2be6a08b4251fba9c38b26e2d3f9dc8789a6c2322f1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 16
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_68af72c40794345684b2be6a08b4251fba9c38b26e2d3f9dc8789a6c2322f1ae->leave($__internal_68af72c40794345684b2be6a08b4251fba9c38b26e2d3f9dc8789a6c2322f1ae_prof);

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
        return array (  65 => 16,  59 => 15,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block content %}*/
/* <h1>Venue</h1>*/
/* <p><br>*/
/* 	<strong>Flamingo Las Vegas</strong> will serve as the conference hotel for IEEE CCNC 2018. Flamingo may be one of the most classic Las Vegas hotels, but its rooms feature sleek, bright designs and decor. Set on the famous four corners of Las Vegas Boulevard and Flamingo Road, this Las Vegas hotel combines heart-pounding excitement with hospitality and service that's second to none. Located adjacent to The Linq and The High Roller.<br>*/
/* 	<br>*/
/* 	Flamingo Las Vegas<br>*/
/* 	3555 Las Vegas Boulevard South<br>*/
/* 	Las Vegas, NV 89109<br>*/
/* 	Phone:  +1 702.733.3111<br>*/
/* 	<br><br>*/
/* 	<br>*/
/* 	</p>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-12 columns">*/
/* {% endblock %}*/
/* */
