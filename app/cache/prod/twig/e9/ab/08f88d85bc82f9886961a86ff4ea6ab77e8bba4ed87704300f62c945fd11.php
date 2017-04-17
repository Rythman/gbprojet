<?php

/* FrontBundle::model.html.twig */
class __TwigTemplate_e9ab08f88d85bc82f9886961a86ff4ea6ab77e8bba4ed87704300f62c945fd11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'contenu' => array($this, 'block_contenu'),
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
        echo "    <div id=\"wrapper\">
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
                   ";
        // line 26
        $this->env->loadTemplate("FrontBundle::nav.html.twig")->display($context);
        // line 27
        echo "                    
                </nav>  
        <!-- /. NAV SIDE  -->


        <div id=\"page-wrapper\" >
            <div id=\"page-inner\">
                
                
                 
                 <div class=\"row\">
                     <div class=\"col-md-12\">
                         ";
        // line 39
        $this->displayBlock('contenu', $context, $blocks);
        // line 43
        echo "                     </div>
                     
                 </div>
               
             </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
";
    }

    // line 39
    public function block_contenu($context, array $blocks = array())
    {
        // line 40
        echo "                        
                        contenu  
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
        return array (  99 => 40,  96 => 39,  83 => 43,  81 => 39,  67 => 27,  65 => 26,  44 => 7,  41 => 6,  33 => 3,  30 => 2,  43 => 8,  40 => 7,  32 => 3,  29 => 2,);
    }
}
