<?php

/* ::base.html.twig */
class __TwigTemplate_d4fc29784a732a04be40be5a30a9a06368769bea858c6bc692a44a5577c51735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
         <!-- FONTAWESOME STYLES-->
       
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <!-- CUSTOM STYLES-->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
         <!---->
             <!-- CUSTOM STYLES-->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/css/disponibilite.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
         <!---->
        ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "            <div>
            
                ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "            </div>    
            ";
        // line 34
        echo "            <div>
            
                ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "            </div>    
            ";
        // line 41
        echo "            
        
        ";
    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        // line 28
        echo "                     
                ";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "                     ici le corps de la page 
                ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        
         <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/js/custom.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/js/general.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/js/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 51,  153 => 50,  149 => 49,  145 => 48,  140 => 46,  135 => 45,  132 => 44,  127 => 37,  124 => 36,  119 => 28,  116 => 27,  110 => 41,  107 => 39,  105 => 36,  101 => 34,  98 => 30,  96 => 27,  92 => 25,  89 => 21,  82 => 15,  76 => 12,  71 => 10,  64 => 7,  61 => 6,  55 => 5,  49 => 53,  46 => 44,  44 => 21,  37 => 18,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link href=\"{{ asset('bundles/front/css/bootstrap.css') }}\" rel=\"stylesheet\" />
         <!-- FONTAWESOME STYLES-->
       
        <link href=\"{{ asset('bundles/front/css/font-awesome.css') }}\" rel=\"stylesheet\" />
            <!-- CUSTOM STYLES-->
        <link href=\"{{ asset('bundles/front/css/custom.css') }}\" rel=\"stylesheet\" />
         <!---->
             <!-- CUSTOM STYLES-->
        <link href=\"{{ asset('bundles/front/css/disponibilite.css') }}\" rel=\"stylesheet\" />
         <!---->
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
            
            
            {#----------- entete du site ---------------- #}
            <div>
            
                {% block header %}
                     
                {% endblock %}
            </div>    
            {# Fin entete du site #}
            
            {#----------- Corps du site ---------------- #}
            <div>
            
                {% block content %}
                     ici le corps de la page 
                {% endblock %}
            </div>    
            {# Fin corps du site #}
            
        
        {% endblock %}
        {% block javascripts %}
        <script src=\"{{ asset('bundles/front/js/jquery-1.10.2.js') }}\"></script>
        <script src=\"{{ asset('bundles/front/js/bootstrap.min.js') }}\"></script>
        
         <script src=\"{{ asset('bundles/front/js/custom.js') }}\"></script>
         <script src=\"{{ asset('bundles/front/js/general.js') }}\"></script>
         <script src=\"{{ asset('bundles/front/js/jquery.metisMenu.js') }}\"></script>
         <script src=\"{{ asset('bundles/front/js/jquery-ui-1.10.1.custom.min.js')}}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\gbprojet\\app/Resources\\views/base.html.twig");
    }
}
