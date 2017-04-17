<?php

/* FrontBundle:Home:index.html.twig */
class __TwigTemplate_33e8910c3fb467446602bcee606ff72302b2a7aca3eec19d5d2aeb96d7abc1ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontBundle::model.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::model.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    
";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "       contenu de la page d'accueil
   ";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  32 => 3,  29 => 2,);
    }
}
