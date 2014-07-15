<?php

/* CueComBundle:staticPages:toc.html.twig */
class __TwigTemplate_bef41261fe069dba876c33f9412da1fe103ea8244c1c221845c41b1688b26779 extends Twig_Template
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
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->env->loadTemplate("CueComBundle::footer.html.twig")->display($context);
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "CueComBundle:Pages:toc";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Pages:TOC page</h1>
";
    }

    public function getTemplateName()
    {
        return "CueComBundle:staticPages:toc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  46 => 5,  40 => 3,  36 => 9,  33 => 8,  31 => 5,  28 => 4,  26 => 3,  23 => 2,  21 => 1,);
    }
}
