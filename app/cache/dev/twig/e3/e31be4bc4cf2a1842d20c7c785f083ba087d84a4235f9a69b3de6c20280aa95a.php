<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6935bd33f3062df74f134ffe07ff214139267ea3a54e337606c404f58e2932a2 extends Twig_Template
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
        $__internal_17f4bbe6049da194bea95aee66a93a192909cd0467f6b5a78ce09931319b4d8c = $this->env->getExtension("native_profiler");
        $__internal_17f4bbe6049da194bea95aee66a93a192909cd0467f6b5a78ce09931319b4d8c->enter($__internal_17f4bbe6049da194bea95aee66a93a192909cd0467f6b5a78ce09931319b4d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_17f4bbe6049da194bea95aee66a93a192909cd0467f6b5a78ce09931319b4d8c->leave($__internal_17f4bbe6049da194bea95aee66a93a192909cd0467f6b5a78ce09931319b4d8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
