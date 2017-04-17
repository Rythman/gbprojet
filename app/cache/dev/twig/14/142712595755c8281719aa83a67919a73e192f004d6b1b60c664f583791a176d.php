<?php

/* FrontBundle:Home:index.html.twig */
class __TwigTemplate_0d86f13a84aedbd46596dc980cf0e41bf7b5c4db9f70eb348452da5956654378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::model.html.twig", "FrontBundle:Home:index.html.twig", 1);
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
        return array (  43 => 8,  40 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::model.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    
{% endblock %}
   
   {% block contenu %}
       contenu de la page d'accueil
   {% endblock %}", "FrontBundle:Home:index.html.twig", "C:\\wamp64\\www\\gbprojet\\src\\gbprojet\\FrontBundle/Resources/views/Home/index.html.twig");
    }
}
