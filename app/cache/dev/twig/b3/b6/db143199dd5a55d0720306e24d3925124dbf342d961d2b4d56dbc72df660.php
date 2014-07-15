<?php

/* CueComBundle:staticPages:client.html.twig */
class __TwigTemplate_b3b6db143199dd5a55d0720306e24d3925124dbf342d961d2b4d56dbc72df660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("CueComBundle::header.html.twig")->display($context);
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->env->loadTemplate("CueComBundle::footer.html.twig")->display($context);
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "CueComBundle:Pages:client";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Welcome to the Pages:Client page</h1>
";
    }

    public function getTemplateName()
    {
        return "CueComBundle:staticPages:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  47 => 6,  41 => 4,  37 => 10,  34 => 9,  32 => 6,  29 => 5,  27 => 4,  23 => 2,  21 => 1,);
    }
}
