<?php

/* FrontBundle:Disponibilite:disponibilite.html.twig */
class __TwigTemplate_9b18b19fb4e7d62c8d2f5b5fcb73ac74071cf0c812b9bd060010694b38fc026a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::model.html.twig", "FrontBundle:Disponibilite:disponibilite.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "       
       <div class=\"section-title center\">
           <h2>DISPONIBILITE DE SALLE (CM/TP/TD) DANS ";
        // line 10
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["app_ufr"]) ? $context["app_ufr"] : $this->getContext($context, "app_ufr"))), "html", null, true);
        echo " UFR</h2>
            <div class=\"line\">
                <hr>
            </div>
            <div class=\"clearfix\"></div>
            <small><em></em></small>            
        </div>
        <form action=\"#\" method=\"POST\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6 col-sm-6\">
                        <label for=\"exampleInputPassword1\">DATE DEBUT</label>
                        <input type=\"date\" class=\"form-control\" id=\"\" placeholder=\"Entrer la date\">
                    </div>
                    <div class=\"form-group col-md-6 col-sm-6\">
                        <label for=\"exampleInputPassword1\">DATE FIN</label>
                        <input type=\"date\" class=\"form-control\" id=\"\" placeholder=\"Entrer la date\">
                    </div>
                    <div class=\"form-group col-md-6 col-sm-6\">
                        <label for=\"exampleInputPassword1\">HEURE DEBUT</label>
                        <input type=\"time\" class=\"form-control\" id=\"\" placeholder=\"\">
                    </div>
                    <div class=\"form-group col-md-6 col-sm-6\">
                        <label for=\"exampleInputPassword1\">HEURE FIN</label>
                        <input type=\"time\" class=\"form-control\" id=\"\" placeholder=\"\">
                    </div>
                </div>
            </div>

            <button type=\"submit\" class=\"btn tf-btn btn-default center\">Valider</button>
        </form>
       
       
       
    <!-- Tableau contenant le resultat de la demande -->
        
               
        <div class=\"panel-body\">
            
                
            <ul id=\"ul-filtrer-resultat-par-type\" class=\"clearfix center-block\">
                <li class=\"\">Filtrer le résultat</li>
                <li class=\"\"><label for=\"allType\">Tous <input type=\"radio\" value=\"allType\" name=\"type-de-salle\" id=\"allType\" /></label></li>
                <li class=\"\"><label for=\"Amphitype\">Amphitheatre <input type=\"radio\" value=\"Amphi\" name=\"type-de-salle\" id=\"amphiType\" /></label></li>
                <li class=\"\"><label for=\"salleTDType\">Salle TD <input type=\"radio\" value=\"salle TD\" name=\"type-de-salle\" id=\"salleTDType\" /></label></li>
                <li class=\"\"><label for=\"salleTPType\">Salle TP <input type=\"radio\" value=\"Salle TP\" name=\"type-de-salle\" id=\"salleTPType\" /></label></li>
            </ul>
                
         <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                    <thead>
                        <tr>
                            <th>SALLES</th>
                            <th>BATIMENT</th>
                            <th>CAPACITE(Nombre de personnes)</th>
                            <th>TYPE</th>
                            <th>UFR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=\"Amphitheatre\">
                            <td>AMPHI A</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">MI/SSMT</td>
                        </tr>
                        <tr class=\"Amphitheatre\">
                            <td>AMPHI B</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">MI/SSMT</td>
                        </tr>
                        <tr class=\"Amphitheatre\">
                            <td>AMPHI C</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">BIOSCIENCES</td>
                        </tr>
                        <tr class=\"Amphitheatre\">
                            <td>AMPHI STRM</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">STRM</td>
                        </tr>
                        <tr class=\"Amphitheatre\">
                            <td>AMPHI 6</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">MEDECINE</td>
                        </tr>
                        <tr class=\"Amphitheatre\">
                            <td>LEON ROBERT</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">SHS/LLC</td>
                        </tr>
                        <tr class=\"salleTD\">
                            <td>101</td>
                            <td>Batiment Maths-Info</td>
                            <td>60</td>
                            <td class=\"center\">Salle de TD</td>
                            <td class=\"center\">MI</td>
                        </tr>
                        <tr class=\"salleTD\">
                            <td>102</td>
                            <td>Batiment Maths-Info</td>
                            <td>60</td>
                            <td class=\"center\">Salle de TD</td>
                            <td class=\"center\">MI</td>
                        </tr>
                         <tr class=\"salleTD\">
                            <td>201</td>
                            <td>Batiment Maths-Info</td>
                            <td>60</td>
                            <td class=\"center\">Salle de TD</td>
                            <td class=\"center\">MI</td>
                        </tr>
                        <tr class=\"salleTD\">
                            <td>202</td>
                            <td>Batiment Maths-Info</td>
                            <td>60</td>
                            <td class=\"center\">Salle de TD</td>
                            <td class=\"center\">MI</td>
                        </tr>
                        <tr class=\"salleTP\">
                            <td>A</td>
                            <td>Batiment PRO</td>
                            <td>20</td>
                            <td class=\"center\">Salle de TP</td>
                            <td class=\"center\">SSMT</td>
                        </tr>
                        <tr class=\"salleTP\">
                            <td>B</td>
                            <td>Batiment PRO</td>
                            <td>20</td>
                            <td class=\"center\">Salle de TP</td>
                            <td class=\"center\">SSMT</td>
                        </tr>
                         <tr class=\"Amphitheatre\">
                            <td>A</td>
                            <td>ODONTO</td>
                            <td>100</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">ODONTO</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
            <!-- END Tableau contenant le resultat de la demande  -->

   ";
    }

    // line 170
    public function block_javascripts($context, array $blocks = array())
    {
        // line 171
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/js/disponibilite.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Disponibilite:disponibilite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 172,  214 => 171,  211 => 170,  48 => 10,  44 => 8,  41 => 7,  33 => 3,  30 => 2,  11 => 1,);
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
       
       <div class=\"section-title center\">
           <h2>DISPONIBILITE DE SALLE (CM/TP/TD) DANS {{app_ufr|upper}} UFR</h2>
            <div class=\"line\">
                <hr>
            </div>
            <div class=\"clearfix\"></div>
            <small><em></em></small>            
        </div>
        <form action=\"#\" method=\"POST\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6 col-sm-6\">
                        <label for=\"exampleInputPassword1\">DATE DEBUT</label>
                        <input type=\"date\" class=\"form-control\" id=\"\" placeholder=\"Entrer la date\">
                    </div>
                    <div class=\"form-group col-md-6 col-sm-6\">
                        <label for=\"exampleInputPassword1\">DATE FIN</label>
                        <input type=\"date\" class=\"form-control\" id=\"\" placeholder=\"Entrer la date\">
                    </div>
                    <div class=\"form-group col-md-6 col-sm-6\">
                        <label for=\"exampleInputPassword1\">HEURE DEBUT</label>
                        <input type=\"time\" class=\"form-control\" id=\"\" placeholder=\"\">
                    </div>
                    <div class=\"form-group col-md-6 col-sm-6\">
                        <label for=\"exampleInputPassword1\">HEURE FIN</label>
                        <input type=\"time\" class=\"form-control\" id=\"\" placeholder=\"\">
                    </div>
                </div>
            </div>

            <button type=\"submit\" class=\"btn tf-btn btn-default center\">Valider</button>
        </form>
       
       
       
    <!-- Tableau contenant le resultat de la demande -->
        
               
        <div class=\"panel-body\">
            
                
            <ul id=\"ul-filtrer-resultat-par-type\" class=\"clearfix center-block\">
                <li class=\"\">Filtrer le résultat</li>
                <li class=\"\"><label for=\"allType\">Tous <input type=\"radio\" value=\"allType\" name=\"type-de-salle\" id=\"allType\" /></label></li>
                <li class=\"\"><label for=\"Amphitype\">Amphitheatre <input type=\"radio\" value=\"Amphi\" name=\"type-de-salle\" id=\"amphiType\" /></label></li>
                <li class=\"\"><label for=\"salleTDType\">Salle TD <input type=\"radio\" value=\"salle TD\" name=\"type-de-salle\" id=\"salleTDType\" /></label></li>
                <li class=\"\"><label for=\"salleTPType\">Salle TP <input type=\"radio\" value=\"Salle TP\" name=\"type-de-salle\" id=\"salleTPType\" /></label></li>
            </ul>
                
         <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                    <thead>
                        <tr>
                            <th>SALLES</th>
                            <th>BATIMENT</th>
                            <th>CAPACITE(Nombre de personnes)</th>
                            <th>TYPE</th>
                            <th>UFR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=\"Amphitheatre\">
                            <td>AMPHI A</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">MI/SSMT</td>
                        </tr>
                        <tr class=\"Amphitheatre\">
                            <td>AMPHI B</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">MI/SSMT</td>
                        </tr>
                        <tr class=\"Amphitheatre\">
                            <td>AMPHI C</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">BIOSCIENCES</td>
                        </tr>
                        <tr class=\"Amphitheatre\">
                            <td>AMPHI STRM</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">STRM</td>
                        </tr>
                        <tr class=\"Amphitheatre\">
                            <td>AMPHI 6</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">MEDECINE</td>
                        </tr>
                        <tr class=\"Amphitheatre\">
                            <td>LEON ROBERT</td>
                            <td></td>
                            <td>1500</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">SHS/LLC</td>
                        </tr>
                        <tr class=\"salleTD\">
                            <td>101</td>
                            <td>Batiment Maths-Info</td>
                            <td>60</td>
                            <td class=\"center\">Salle de TD</td>
                            <td class=\"center\">MI</td>
                        </tr>
                        <tr class=\"salleTD\">
                            <td>102</td>
                            <td>Batiment Maths-Info</td>
                            <td>60</td>
                            <td class=\"center\">Salle de TD</td>
                            <td class=\"center\">MI</td>
                        </tr>
                         <tr class=\"salleTD\">
                            <td>201</td>
                            <td>Batiment Maths-Info</td>
                            <td>60</td>
                            <td class=\"center\">Salle de TD</td>
                            <td class=\"center\">MI</td>
                        </tr>
                        <tr class=\"salleTD\">
                            <td>202</td>
                            <td>Batiment Maths-Info</td>
                            <td>60</td>
                            <td class=\"center\">Salle de TD</td>
                            <td class=\"center\">MI</td>
                        </tr>
                        <tr class=\"salleTP\">
                            <td>A</td>
                            <td>Batiment PRO</td>
                            <td>20</td>
                            <td class=\"center\">Salle de TP</td>
                            <td class=\"center\">SSMT</td>
                        </tr>
                        <tr class=\"salleTP\">
                            <td>B</td>
                            <td>Batiment PRO</td>
                            <td>20</td>
                            <td class=\"center\">Salle de TP</td>
                            <td class=\"center\">SSMT</td>
                        </tr>
                         <tr class=\"Amphitheatre\">
                            <td>A</td>
                            <td>ODONTO</td>
                            <td>100</td>
                            <td class=\"center\">Amphitheatre</td>
                            <td class=\"center\">ODONTO</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
            <!-- END Tableau contenant le resultat de la demande  -->

   {% endblock %}
   
{% block javascripts %}
    {{ parent() }}
     <script src=\"{{ asset('bundles/front/js/disponibilite.js')}}\"></script>
{% endblock %}", "FrontBundle:Disponibilite:disponibilite.html.twig", "C:\\wamp64\\www\\gbprojet\\src\\gbprojet\\FrontBundle/Resources/views/Disponibilite/disponibilite.html.twig");
    }
}
