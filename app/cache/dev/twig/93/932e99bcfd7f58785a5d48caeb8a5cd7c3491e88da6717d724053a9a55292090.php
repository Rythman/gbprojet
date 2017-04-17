<?php

/* FrontBundle:Registration:email.html.twig */
class __TwigTemplate_627e3578a0ed17e5489c522b221b565aff224ea855db4a2eb8c83d3e9f72da98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->loadTemplate("gbprojetFrontBundle:Registration:inc/email.html.twig", "FrontBundle:Registration:email.html.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "FrontBundle:Registration:email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  60 => 13,  53 => 9,  51 => 8,  48 => 7,  41 => 3,  39 => 2,  36 => 1,  32 => 13,  29 => 12,  27 => 7,  24 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    {% autoescape false %}
    {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
    {% endautoescape %}
{% endblock %}

{% block body_text %}
    {% autoescape false %}
    {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
    {% endautoescape %}
{% endblock %}

{% block body_html %}
    {% include 'gbprojetFrontBundle:Registration:inc/email.html.twig' %}
{% endblock %}", "FrontBundle:Registration:email.html.twig", "C:\\wamp64\\www\\gbprojet\\src\\gbprojet\\FrontBundle/Resources/views/Registration/email.html.twig");
    }
}
