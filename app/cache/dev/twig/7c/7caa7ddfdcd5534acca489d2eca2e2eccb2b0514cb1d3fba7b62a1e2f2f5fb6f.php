<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_7b8183c1a43917790568a0a91d6955b043d65ae117f51da2464c877dc8d2ec1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29066aa1362f5906baee3b5c49d6c3cc47590a060de7333abace6ed56162cabd = $this->env->getExtension("native_profiler");
        $__internal_29066aa1362f5906baee3b5c49d6c3cc47590a060de7333abace6ed56162cabd->enter($__internal_29066aa1362f5906baee3b5c49d6c3cc47590a060de7333abace6ed56162cabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29066aa1362f5906baee3b5c49d6c3cc47590a060de7333abace6ed56162cabd->leave($__internal_29066aa1362f5906baee3b5c49d6c3cc47590a060de7333abace6ed56162cabd_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_ef3cf8fa3d6d68fac5a09c20406cdebb4388f502815fed5f859d627ee59d44be = $this->env->getExtension("native_profiler");
        $__internal_ef3cf8fa3d6d68fac5a09c20406cdebb4388f502815fed5f859d627ee59d44be->enter($__internal_ef3cf8fa3d6d68fac5a09c20406cdebb4388f502815fed5f859d627ee59d44be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_ef3cf8fa3d6d68fac5a09c20406cdebb4388f502815fed5f859d627ee59d44be->leave($__internal_ef3cf8fa3d6d68fac5a09c20406cdebb4388f502815fed5f859d627ee59d44be_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_c47c6d55b8b9ce5ff10ac4200dd3c9482f2cbcc107393feddc0c630fc8fbed67 = $this->env->getExtension("native_profiler");
        $__internal_c47c6d55b8b9ce5ff10ac4200dd3c9482f2cbcc107393feddc0c630fc8fbed67->enter($__internal_c47c6d55b8b9ce5ff10ac4200dd3c9482f2cbcc107393feddc0c630fc8fbed67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_c47c6d55b8b9ce5ff10ac4200dd3c9482f2cbcc107393feddc0c630fc8fbed67->leave($__internal_c47c6d55b8b9ce5ff10ac4200dd3c9482f2cbcc107393feddc0c630fc8fbed67_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block content_class %}config_done{% endblock %}*/
/* {% block content %}*/
/*     <div class="step">*/
/*         <h1>Well done!</h1>*/
/*         {% if is_writable %}*/
/*         <h2>Your distribution is configured!</h2>*/
/*         {% else %}*/
/*         <h2 class="configure-error">Your distribution is almost configured but...</h2>*/
/*         {% endif %}*/
/*         <h3>*/
/*             <span>*/
/*                 {% if is_writable %}*/
/*                     Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):*/
/*                 {% else %}*/
/*                     Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:*/
/*                 {% endif %}*/
/*             </span>*/
/*         </h3>*/
/* */
/*         <textarea class="symfony-configuration">{{ parameters }}</textarea>*/
/* */
/*         {% if welcome_url %}*/
/*             <ul>*/
/*                 <li><a href="{{ welcome_url }}">Go to the Welcome page</a></li>*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
