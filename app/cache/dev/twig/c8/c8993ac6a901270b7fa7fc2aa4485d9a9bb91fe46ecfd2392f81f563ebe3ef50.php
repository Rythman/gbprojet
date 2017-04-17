<?php

/* FrontBundle:Programmation:programmation.html.twig */
class __TwigTemplate_a6d99cced26194600d377a93487eca953026471c2737a4996626592add9eca10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::model.html.twig", "FrontBundle:Programmation:programmation.html.twig", 1);
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
        echo "           <!-- Formulaire
    ==========================================-->
    <div id=\"tf-prog\" class=\"text-center\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">

                    <div class=\"section-title center\">
                        <h2>PROGRAMMATION DE CM/TP/TD ";
        // line 15
        echo twig_escape_filter($this->env, ((twig_upper_filter($this->env, (isset($context["grade"]) ? $context["grade"] : $this->getContext($context, "grade"))) . " ") . twig_upper_filter($this->env, (isset($context["niveau"]) ? $context["niveau"] : $this->getContext($context, "niveau")))), "html", null, true);
        echo "</h2>
                        <div class=\"line\">
                            <hr>
                        </div>
                        <div class=\"clearfix\"></div>
                        <small><em></em></small>            
                    </div>

                    <form action=\"#\" method=\"POST\">
                        <div class=\"row\">
                           <!-- <div class=\"col-md-12\">-->
                                <div class=\"form-group col-md-4\">
                                    <label for=\"input_date\">DATE</label>
                                    <input type=\"date\" class=\"form-control\" id=\"input_date\" placeholder=\"Entrer la date\">
                                </div>
                                <div class=\"form-group col-md-4\">
                                    <label for=\"input_heure_deb\">HEURE DEBUT</label>
                                    <input type=\"time\" class=\"form-control\" id=\"input_heure_deb\" placeholder=\"Entrer l'heure de debut\">
                                </div>
                                <div class=\"form-group col-md-4\">
                                    <label for=\"input_heure_fin\">HEURE DEBUT</label>
                                    <input type=\"time\" class=\"form-control\" id=\"input_heure_fin\" placeholder=\"Entrer l'heure de fin\">
                                </div>
                                 
                                <!--<button type=\"submit\" class=\"btn tf-btn btn-info\">Valider</button>-->
                            
                            <!--</div>-->
                            <div class=\"row\">  
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"select_ue_ecue\">UE / ECUE</label>
                                        <select class=\"form-control\" placeholder=\"Enter le niveau d'étude\" id=\"select_ue_ecue\">
                                             <optgroup label='SEMESTRE 1'>
                                                <option value='Economie Generale'>Economie Generale</option>
                                            </optgroup>
                                            <optgroup label='SEMESTRE 1'> 
                                                <option value='Optique'>Optique</option>
                                                <option value='Algebre Lineaire'>Algebre Lineaire</option>
                                                <option value='Electricite'>Electricite</option>
                                                <option value='Algorithme'>Algorithme</option>

                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"select_enseignant\">ENSEIGNANT</label>
                                        <select class=\"form-control\" placeholder=\"Enter le niveau d'étude\" id=\"select_enseignant\">
                                             <optgroup label='Algorithme'>
                                                <option value='M. BROU Patrick'>M. BROU Patrick</option>
                                                <option value='M. DIARRA Mamadou'>M. DIARRA Mamadou</option>
                                                <option value='Dr. DIALLO Mohamed'>Dr. DIALLO Mohamed</option>
                                            </optgroup>
                                            <optgroup label='Optique'> 
                                                <option value='Salle 101'>Prof. DIAWARRA</option>
                                            </optgroup>
                                            <optgroup label='Algebre Lineaire'> 
                                                <option value='Dr. KOFFI Abalo'>Dr. KOFFI Abalo</option>
                                                <option value='Prof. KOUAKOU Mathias'>Prof. KOUAKOU Mathias</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"select_type_cour\">TYPE DE SEANCE</label>
                                        <select class=\"form-control\" placeholder=\"Enter le niveau d'étude\" id=\"select_type_cour\">
                                                <option value='Cour magistral'>Cour Magistral(CM)</option>
                                                <option value='Travaux Diriges'>Travaux Dirigés(TD)</option>
                                                <option value='Travaux Pratiques'>Travaux Pratiques(TP)</option>                                            
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"select_salle\">SALLE</label>
                                        <select class=\"form-control\" placeholder=\"Enter le niveau d'étude\" id=\"select_salle\">
                                             <optgroup label='AMPHITHEATRE'>
                                                <option value='Amphi A District'>Amphi A District</option>
                                                <option value='Amphi A District'>Amphi Leon Robert</option>
                                            </optgroup>
                                            <optgroup label='SALLE TD'> 
                                                <option value='Salle 101'>Salle 101(BIOSCIENCES)</option>
                                                <option value='Salle 102'>Salle 102(SCIENCES ECONOMIQUES)</option>
                                                <option value='Salle 202'>Salle 202(MATHS-INFO)</option>
                                            </optgroup>
                                            <optgroup label='SALLE TP'> 
                                                <option value='Salle TP1(ODONTO)'>Salle TP1(ODONTO)</option>
                                                <option value='Salle TP2(SSMT)'>Salle TP2(SSMT)</option>
                                                <option value='Salle TP4(MEDCINE)'>Salle TP4(MEDCINE)</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <button type=\"submit\" class=\"btn tf-btn btn-warning\">Enregistrer</button>
                    </form>
                </div>
            </div>
    </div>

   ";
    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        // line 126
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/front/js/programmation.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Programmation:programmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 127,  169 => 126,  166 => 125,  53 => 15,  44 => 8,  41 => 7,  33 => 3,  30 => 2,  11 => 1,);
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
           <!-- Formulaire
    ==========================================-->
    <div id=\"tf-prog\" class=\"text-center\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">

                    <div class=\"section-title center\">
                        <h2>PROGRAMMATION DE CM/TP/TD {{grade|upper ~ \" \" ~ niveau|upper}}</h2>
                        <div class=\"line\">
                            <hr>
                        </div>
                        <div class=\"clearfix\"></div>
                        <small><em></em></small>            
                    </div>

                    <form action=\"#\" method=\"POST\">
                        <div class=\"row\">
                           <!-- <div class=\"col-md-12\">-->
                                <div class=\"form-group col-md-4\">
                                    <label for=\"input_date\">DATE</label>
                                    <input type=\"date\" class=\"form-control\" id=\"input_date\" placeholder=\"Entrer la date\">
                                </div>
                                <div class=\"form-group col-md-4\">
                                    <label for=\"input_heure_deb\">HEURE DEBUT</label>
                                    <input type=\"time\" class=\"form-control\" id=\"input_heure_deb\" placeholder=\"Entrer l'heure de debut\">
                                </div>
                                <div class=\"form-group col-md-4\">
                                    <label for=\"input_heure_fin\">HEURE DEBUT</label>
                                    <input type=\"time\" class=\"form-control\" id=\"input_heure_fin\" placeholder=\"Entrer l'heure de fin\">
                                </div>
                                 
                                <!--<button type=\"submit\" class=\"btn tf-btn btn-info\">Valider</button>-->
                            
                            <!--</div>-->
                            <div class=\"row\">  
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"select_ue_ecue\">UE / ECUE</label>
                                        <select class=\"form-control\" placeholder=\"Enter le niveau d'étude\" id=\"select_ue_ecue\">
                                             <optgroup label='SEMESTRE 1'>
                                                <option value='Economie Generale'>Economie Generale</option>
                                            </optgroup>
                                            <optgroup label='SEMESTRE 1'> 
                                                <option value='Optique'>Optique</option>
                                                <option value='Algebre Lineaire'>Algebre Lineaire</option>
                                                <option value='Electricite'>Electricite</option>
                                                <option value='Algorithme'>Algorithme</option>

                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"select_enseignant\">ENSEIGNANT</label>
                                        <select class=\"form-control\" placeholder=\"Enter le niveau d'étude\" id=\"select_enseignant\">
                                             <optgroup label='Algorithme'>
                                                <option value='M. BROU Patrick'>M. BROU Patrick</option>
                                                <option value='M. DIARRA Mamadou'>M. DIARRA Mamadou</option>
                                                <option value='Dr. DIALLO Mohamed'>Dr. DIALLO Mohamed</option>
                                            </optgroup>
                                            <optgroup label='Optique'> 
                                                <option value='Salle 101'>Prof. DIAWARRA</option>
                                            </optgroup>
                                            <optgroup label='Algebre Lineaire'> 
                                                <option value='Dr. KOFFI Abalo'>Dr. KOFFI Abalo</option>
                                                <option value='Prof. KOUAKOU Mathias'>Prof. KOUAKOU Mathias</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"select_type_cour\">TYPE DE SEANCE</label>
                                        <select class=\"form-control\" placeholder=\"Enter le niveau d'étude\" id=\"select_type_cour\">
                                                <option value='Cour magistral'>Cour Magistral(CM)</option>
                                                <option value='Travaux Diriges'>Travaux Dirigés(TD)</option>
                                                <option value='Travaux Pratiques'>Travaux Pratiques(TP)</option>                                            
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"select_salle\">SALLE</label>
                                        <select class=\"form-control\" placeholder=\"Enter le niveau d'étude\" id=\"select_salle\">
                                             <optgroup label='AMPHITHEATRE'>
                                                <option value='Amphi A District'>Amphi A District</option>
                                                <option value='Amphi A District'>Amphi Leon Robert</option>
                                            </optgroup>
                                            <optgroup label='SALLE TD'> 
                                                <option value='Salle 101'>Salle 101(BIOSCIENCES)</option>
                                                <option value='Salle 102'>Salle 102(SCIENCES ECONOMIQUES)</option>
                                                <option value='Salle 202'>Salle 202(MATHS-INFO)</option>
                                            </optgroup>
                                            <optgroup label='SALLE TP'> 
                                                <option value='Salle TP1(ODONTO)'>Salle TP1(ODONTO)</option>
                                                <option value='Salle TP2(SSMT)'>Salle TP2(SSMT)</option>
                                                <option value='Salle TP4(MEDCINE)'>Salle TP4(MEDCINE)</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <button type=\"submit\" class=\"btn tf-btn btn-warning\">Enregistrer</button>
                    </form>
                </div>
            </div>
    </div>

   {% endblock %}
   
{% block javascripts %}
    {{ parent() }}
     <script src=\"{{ asset('bundles/front/js/programmation.js')}}\"></script>
{% endblock %}", "FrontBundle:Programmation:programmation.html.twig", "C:\\wamp64\\www\\gbprojet\\src\\gbprojet\\FrontBundle/Resources/views/Programmation/programmation.html.twig");
    }
}
