<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5e5c72b4ef9680b457e73d2650f0131655d9076957ffdc00c80b94965171d64c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2b4c93874e2f7f58da137b4389a8ef33ee1ee1b310596fdd2abdd2bdcd08c59 = $this->env->getExtension("native_profiler");
        $__internal_b2b4c93874e2f7f58da137b4389a8ef33ee1ee1b310596fdd2abdd2bdcd08c59->enter($__internal_b2b4c93874e2f7f58da137b4389a8ef33ee1ee1b310596fdd2abdd2bdcd08c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b2b4c93874e2f7f58da137b4389a8ef33ee1ee1b310596fdd2abdd2bdcd08c59->leave($__internal_b2b4c93874e2f7f58da137b4389a8ef33ee1ee1b310596fdd2abdd2bdcd08c59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
