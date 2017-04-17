<?php

/* FrontBundle::model.html.twig */
class __TwigTemplate_5618853766d48741adf6976368834ac7a36e42b2f339c63cbf11e2209d08018d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle::model.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "        <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a href=\"pages.php\" class=\"navbar-brand\" style=\"font-size:17pt;\">
                    Administrateur
                </a> 
            </div>
            <div style=\"color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;\"> 
              <a href=\"deconnexion.php\" class=\"btn btn-danger square-btn-adjust\">Deconnexion</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class=\"navbar-default navbar-side\" role=\"navigation\">
                   ";
        // line 25
        $this->loadTemplate("FrontBundle::nav.html.twig", "FrontBundle::model.html.twig", 25)->display($context);
        // line 26
        echo "                    
                </nav>  
        <!-- /. NAV SIDE  -->


        <div id=\"page-wrapper\" >
            <div id=\"page-inner\">
                
                
                 
                 <div class=\"row\">
                     <div class=\"col-md-12\">
                         ";
        // line 38
        $this->displayBlock('contenu', $context, $blocks);
        // line 42
        echo "                     </div>
                     
                 </div>
               
             </div>
             <!-- /. PAGE INNER  -->
        </div>

";
    }

    // line 38
    public function block_contenu($context, array $blocks = array())
    {
        // line 39
        echo "                        
                        contenu  
                            ";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 53,  104 => 52,  98 => 39,  95 => 38,  83 => 42,  81 => 38,  67 => 26,  65 => 25,  45 => 7,  42 => 6,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    
   {% endblock %}
{% block content %}
        <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a href=\"pages.php\" class=\"navbar-brand\" style=\"font-size:17pt;\">
                    Administrateur
                </a> 
            </div>
            <div style=\"color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;\"> 
              <a href=\"deconnexion.php\" class=\"btn btn-danger square-btn-adjust\">Deconnexion</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class=\"navbar-default navbar-side\" role=\"navigation\">
                   {% include 'FrontBundle::nav.html.twig' %}
                    
                </nav>  
        <!-- /. NAV SIDE  -->


        <div id=\"page-wrapper\" >
            <div id=\"page-inner\">
                
                
                 
                 <div class=\"row\">
                     <div class=\"col-md-12\">
                         {% block contenu %}
                        
                        contenu  
                            {% endblock %}
                     </div>
                     
                 </div>
               
             </div>
             <!-- /. PAGE INNER  -->
        </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "FrontBundle::model.html.twig", "C:\\wamp64\\www\\gbprojet\\src\\gbprojet\\FrontBundle/Resources/views/model.html.twig");
    }
}
