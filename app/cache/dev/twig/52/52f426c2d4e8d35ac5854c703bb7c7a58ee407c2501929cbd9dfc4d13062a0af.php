<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_10b868d34e9c521fad8e6e5bd486201e1c414cfcfbdefbc42803d4acd99aae26 extends Twig_Template
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
        $__internal_6ed0bb6b59139b3f85c8b4b1eb70032a365876b817f40afad3d02603ea1ebf01 = $this->env->getExtension("native_profiler");
        $__internal_6ed0bb6b59139b3f85c8b4b1eb70032a365876b817f40afad3d02603ea1ebf01->enter($__internal_6ed0bb6b59139b3f85c8b4b1eb70032a365876b817f40afad3d02603ea1ebf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6ed0bb6b59139b3f85c8b4b1eb70032a365876b817f40afad3d02603ea1ebf01->leave($__internal_6ed0bb6b59139b3f85c8b4b1eb70032a365876b817f40afad3d02603ea1ebf01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
