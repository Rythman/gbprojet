<?php

/* FrontBundle::nav.html.twig */
class __TwigTemplate_2b248d9bbfc29f35f01df0db33956a9d218ea1b80a12191e29c52c0adbe2c475 extends Twig_Template
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
        echo "
                        <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"main-menu\">
                        <li class=\"text-center\">
                            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/find_user.png"), "html", null, true);
        echo "\" class=\"user-image img-responsive\"/>
                            </li>
\t\t\t\t
\t\t     <!-- Programmation  des UE -->           
                    <li>
                        <a href=\"/gbprojet/web/app_dev.php/programmation\" class=\"\"><i class=\"fa fa-edit fa-3x\"></i>Programmation<span class=\"fa arrow\"></span></a>
                        <!--<ul class=\"nav nav-second-level\">
                           <li>
                                <a href=\"#\">Cour Magistral(CM)</a>
                            </li>
                            <li>
                                <a href=\"#\">Travaux Diriges(TD)</a>
                            </li>
                            <li>
                                <a href=\"#\">Travaux Pratiques(TP)</a>
                            </li>
                        </ul>-->
                      </li>  
                       <!-- Programmation des UE -->    
                        <!-- Disponiblilite des salles -->
                       <li>
                        <a href=\"X#\"><i class=\"fa fa-sitemap fa-3x\"></i> Disponibilites des salles<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li> <a href=\"/gbprojet/web/app_dev.php/disponibilite/monufr\">Dans mon UFR</a></li>
                            <li><a href=\"/gbprojet/web/app_dev.php/disponibilite/autresufr\">Dans une autre UFR</a></li>    
                        </ul>
                      </li>
                        <!-- //Disponiblilite des salles -->       \t
                </ul>
               
            </div>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  120 => 37,  115 => 36,  112 => 35,  107 => 26,  104 => 25,  98 => 32,  93 => 28,  91 => 25,  86 => 22,  75 => 12,  70 => 10,  63 => 7,  60 => 6,  54 => 5,  48 => 44,  45 => 35,  36 => 16,  34 => 6,  24 => 1,  99 => 40,  96 => 39,  83 => 19,  81 => 39,  67 => 27,  65 => 26,  44 => 7,  41 => 6,  33 => 3,  30 => 5,  43 => 19,  40 => 7,  32 => 3,  29 => 2,);
    }
}
