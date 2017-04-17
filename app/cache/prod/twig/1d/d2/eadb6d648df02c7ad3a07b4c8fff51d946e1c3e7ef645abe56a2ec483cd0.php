<?php

/* ::base.html.twig */
class __TwigTemplate_1dd2eadb6d648df02c7ad3a07b4c8fff51d946e1c3e7ef645abe56a2ec483cd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
         <!-- FONTAWESOME STYLES-->
       
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <!-- CUSTOM STYLES-->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
         <!---->
        
        ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12 col-sm-12\">
            
                ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "            
                </div>
            </div>
            ";
        // line 32
        echo "            
        
        ";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "                     ici le corps de la page 
                ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        
         <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/custom.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/general.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/js/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
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
        return array (  137 => 42,  133 => 41,  129 => 40,  125 => 39,  120 => 37,  115 => 36,  112 => 35,  107 => 26,  104 => 25,  98 => 32,  93 => 28,  91 => 25,  86 => 22,  75 => 12,  70 => 10,  63 => 7,  60 => 6,  54 => 5,  48 => 44,  45 => 35,  36 => 16,  34 => 6,  24 => 1,  99 => 40,  96 => 39,  83 => 19,  81 => 39,  67 => 27,  65 => 26,  44 => 7,  41 => 6,  33 => 3,  30 => 5,  43 => 19,  40 => 7,  32 => 3,  29 => 2,);
    }
}
