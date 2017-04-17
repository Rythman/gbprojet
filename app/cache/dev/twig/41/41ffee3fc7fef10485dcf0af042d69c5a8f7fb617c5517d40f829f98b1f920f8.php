<?php

/* FrontBundle::nav.html.twig */
class __TwigTemplate_0a16da5dce89d61acf78fe2f67285baa17e69670e391df52eca3b309eab8928a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/images/find_user.png"), "html", null, true);
        echo "\" class=\"user-image img-responsive\"/>
                            </li>
\t\t\t\t
\t\t     <!-- Programmation  des UE -->           
                    <li>
                        <a href=\"#\" class=\"\"><i class=\"fa fa-edit fa-3x\"></i>Programmation<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"/gbprojet/web/app_dev.php/programmation/licence-1\">Licence 1</a>
                            </li>
                            <li>
                                <a href=\"/gbprojet/web/app_dev.php/programmation/licence-2\">Licence 2</a>
                            </li>
                            <li>
                                <a href=\"/gbprojet/web/app_dev.php/programmation/licence-3\">Licence 3</a>
                            </li>
                            <li>
                                <a href=\"/gbprojet/web/app_dev.php/programmation/master-1\">Master 1</a>
                            </li>
                            <li>
                                <a href=\"/gbprojet/web/app_dev.php/programmation/master-2\">Master 2</a>
                            </li>
                        </ul>
                      </li>  
                       <!-- Programmation des UE -->    
                        <!-- Disponiblilite des salles -->
                       <li>
                        <a href=\"#\"><i class=\"fa fa-sitemap fa-3x\"></i> Disponibilites des salles<span class=\"fa arrow\"></span></a>
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
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
                        <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"main-menu\">
                        <li class=\"text-center\">
                            <img src=\"{{ asset('bundles/front/images/find_user.png') }}\" class=\"user-image img-responsive\"/>
                            </li>
\t\t\t\t
\t\t     <!-- Programmation  des UE -->           
                    <li>
                        <a href=\"#\" class=\"\"><i class=\"fa fa-edit fa-3x\"></i>Programmation<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"/gbprojet/web/app_dev.php/programmation/licence-1\">Licence 1</a>
                            </li>
                            <li>
                                <a href=\"/gbprojet/web/app_dev.php/programmation/licence-2\">Licence 2</a>
                            </li>
                            <li>
                                <a href=\"/gbprojet/web/app_dev.php/programmation/licence-3\">Licence 3</a>
                            </li>
                            <li>
                                <a href=\"/gbprojet/web/app_dev.php/programmation/master-1\">Master 1</a>
                            </li>
                            <li>
                                <a href=\"/gbprojet/web/app_dev.php/programmation/master-2\">Master 2</a>
                            </li>
                        </ul>
                      </li>  
                       <!-- Programmation des UE -->    
                        <!-- Disponiblilite des salles -->
                       <li>
                        <a href=\"#\"><i class=\"fa fa-sitemap fa-3x\"></i> Disponibilites des salles<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li> <a href=\"/gbprojet/web/app_dev.php/disponibilite/monufr\">Dans mon UFR</a></li>
                            <li><a href=\"/gbprojet/web/app_dev.php/disponibilite/autresufr\">Dans une autre UFR</a></li>    
                        </ul>
                      </li>
                        <!-- //Disponiblilite des salles -->       \t
                </ul>
               
            </div>
", "FrontBundle::nav.html.twig", "C:\\wamp64\\www\\gbprojet\\src\\gbprojet\\FrontBundle/Resources/views/nav.html.twig");
    }
}
