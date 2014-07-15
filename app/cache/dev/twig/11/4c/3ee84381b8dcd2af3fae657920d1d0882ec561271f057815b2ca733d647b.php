<?php

/* CueComBundle::header.html.twig */
class __TwigTemplate_114c3ee84381b8dcd2af3fae657920d1d0882ec561271f057815b2ca733d647b extends Twig_Template
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
        echo "<div style=\"border:1px; heigth:300px; width:90%; background-color: green; margin-top:0%\">

<h1>CueLogic Technologieszzzz</h1>

<br>

<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("aboutme");
        echo "\">About Me</a>
<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("career");
        echo "\">Careers</a>
<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("client");
        echo "\">Client</a>

<hr>
</div>
";
    }

    public function getTemplateName()
    {
        return "CueComBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
