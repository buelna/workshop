<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_084b8092b1b7c118c646b0008ab641ebbdf4ca04234a26ea1e6b0d1fb548b8d7 extends Twig_Template
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
        $__internal_10bc244623a51ee05cbfb1e487fb1ea6740c53d7682d4a52ed7d00dd83ebd12c = $this->env->getExtension("native_profiler");
        $__internal_10bc244623a51ee05cbfb1e487fb1ea6740c53d7682d4a52ed7d00dd83ebd12c->enter($__internal_10bc244623a51ee05cbfb1e487fb1ea6740c53d7682d4a52ed7d00dd83ebd12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_10bc244623a51ee05cbfb1e487fb1ea6740c53d7682d4a52ed7d00dd83ebd12c->leave($__internal_10bc244623a51ee05cbfb1e487fb1ea6740c53d7682d4a52ed7d00dd83ebd12c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
