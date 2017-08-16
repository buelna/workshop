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
        $__internal_df31406dd6915a96780d272ad0fd283dcd77e6edee6415b3ff78b388e9fad65a = $this->env->getExtension("native_profiler");
        $__internal_df31406dd6915a96780d272ad0fd283dcd77e6edee6415b3ff78b388e9fad65a->enter($__internal_df31406dd6915a96780d272ad0fd283dcd77e6edee6415b3ff78b388e9fad65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:venue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df31406dd6915a96780d272ad0fd283dcd77e6edee6415b3ff78b388e9fad65a->leave($__internal_df31406dd6915a96780d272ad0fd283dcd77e6edee6415b3ff78b388e9fad65a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_4181450ab0c231cb8253f5b4fafb02db07eb4232df504b40fccabbea76b279ff = $this->env->getExtension("native_profiler");
        $__internal_4181450ab0c231cb8253f5b4fafb02db07eb4232df504b40fccabbea76b279ff->enter($__internal_4181450ab0c231cb8253f5b4fafb02db07eb4232df504b40fccabbea76b279ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4181450ab0c231cb8253f5b4fafb02db07eb4232df504b40fccabbea76b279ff->leave($__internal_4181450ab0c231cb8253f5b4fafb02db07eb4232df504b40fccabbea76b279ff_prof);

    }

    // line 15
    public function block_cols($context, array $blocks = array())
    {
        $__internal_c1f78ec88d1f5c943025806cd48d31202150b5fe395557cd168d89e8527e4a40 = $this->env->getExtension("native_profiler");
        $__internal_c1f78ec88d1f5c943025806cd48d31202150b5fe395557cd168d89e8527e4a40->enter($__internal_c1f78ec88d1f5c943025806cd48d31202150b5fe395557cd168d89e8527e4a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 16
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_c1f78ec88d1f5c943025806cd48d31202150b5fe395557cd168d89e8527e4a40->leave($__internal_c1f78ec88d1f5c943025806cd48d31202150b5fe395557cd168d89e8527e4a40_prof);

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
