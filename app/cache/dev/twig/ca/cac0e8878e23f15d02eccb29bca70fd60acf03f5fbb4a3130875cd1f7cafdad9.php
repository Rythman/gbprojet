<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_5af149ea8c7b59c2c41135dd51b13877a40f35453ba63840ba5e0bcf210d7293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle::layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
    <nav class=\"navbar navbar-default main-nav\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "                    <ul class=\"nav navbar-nav\">

                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my_account"), "html", null, true);
            echo "</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("logout"), "html", null, true);
            echo "</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                ";
        } else {
            // line 40
            echo "                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sf_web_app"), "html", null, true);
            echo "</a>
                        </li>
                    </ul>
                ";
        }
        // line 46
        echo "            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>

";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 53,  99 => 46,  92 => 42,  88 => 40,  76 => 33,  68 => 30,  60 => 27,  53 => 22,  51 => 21,  32 => 4,  29 => 3,  11 => 1,);
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

{% block header %}

    <nav class=\"navbar navbar-default main-nav\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <ul class=\"nav navbar-nav\">

                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\">{{ app.user.firstname }} {{ app.user.lastname }} <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"{{ path('fos_user_profile_show') }}\">{{ 'my_account'|trans }}</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('fos_user_security_logout') }}\">{{ 'logout'|trans }}</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                {% else %}
                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"\">{{ 'sf_web_app'|trans }}</a>
                        </li>
                    </ul>
                {% endif %}
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>

{% endblock %}

{% block content %}{% endblock %}", "FrontBundle::layout.html.twig", "C:\\wamp64\\www\\gbprojet\\src\\gbprojet\\FrontBundle/Resources/views/layout.html.twig");
    }
}
