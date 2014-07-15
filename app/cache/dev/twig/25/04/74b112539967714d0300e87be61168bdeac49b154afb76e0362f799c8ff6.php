<?php

/* CueComBundle::footer.html.twig */
class __TwigTemplate_250474b112539967714d0300e87be61168bdeac49b154afb76e0362f799c8ff6 extends Twig_Template
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
        // line 1
        echo "<div style=\"border:1px; heigth:300px; width:90%; background-color: green; margin-bottom:0%;\">

<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("toc");
        echo "\">Terms and Conditions</a><tr>
</div>
";
    }

    public function getTemplateName()
    {
        return "CueComBundle::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
