<?php

/* EasyAdminBundle:default:field_association.html.twig */
class __TwigTemplate_9b0645ecabd725456b965182e8831ea2ac93251f08507a1afd344440c4d50abc extends Twig_Template
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
        // line 2
        if (twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 3
            echo "    ";
            if (("show" == (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))) {
                // line 4
                echo "        ";
                if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > 0)) {
                    // line 5
                    echo "            <ul class=\"";
                    echo (((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) < 2)) ? ("inline") : (""));
                    echo "\">
                ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 7
                        echo "                    <li>
                        ";
                        // line 8
                        if (array_key_exists("link_parameters", $context)) {
                            // line 9
                            echo "                            ";
                            $context["primary_key_value"] = $this->getAttribute($context["item"], $this->getAttribute((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), "primary_key_name", array()));
                            // line 10
                            echo "                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), array("id" => (isset($context["primary_key_value"]) ? $context["primary_key_value"] : $this->getContext($context, "primary_key_value")), "referer" => ""))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "</a>
                        ";
                        } else {
                            // line 12
                            echo "                            ";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "
                        ";
                        }
                        // line 14
                        echo "                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "
                ";
                    // line 17
                    $context["_remaining_items"] = (twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) - $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results"));
                    // line 18
                    echo "                ";
                    if (((isset($context["_remaining_items"]) ? $context["_remaining_items"] : $this->getContext($context, "_remaining_items")) > 0)) {
                        // line 19
                        echo "                    <li class=\"remaining-items\">(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("show.remaining_items", (isset($context["_remaining_items"]) ? $context["_remaining_items"] : $this->getContext($context, "_remaining_items")), array(), "EasyAdminBundle"), "html", null, true);
                        echo ")</li>
                ";
                    }
                    // line 21
                    echo "            </ul>
        ";
                } else {
                    // line 23
                    echo "            <div class=\"empty collection-empty\">
                ";
                    // line 24
                    echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "templates", array()), "label_empty", array()));
                    echo "
            </div>
        ";
                }
                // line 27
                echo "    ";
            } elseif (("list" == (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))) {
                // line 28
                echo "        <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                echo "</span>
    ";
            }
        } elseif (        // line 31
array_key_exists("link_parameters", $context)) {
            // line 32
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), array("referer" => ""))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        } else {
            // line 34
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  103 => 32,  101 => 31,  95 => 28,  92 => 27,  86 => 24,  83 => 23,  79 => 21,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  58 => 14,  52 => 12,  44 => 10,  41 => 9,  39 => 8,  36 => 7,  32 => 6,  27 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# a *-to-many collection of values #}
{% if value is iterable %}
    {% if 'show' == view %}
        {% if value|length > 0 %}
            <ul class=\"{{ value|length < 2 ? 'inline' }}\">
                {% for item in value|slice(0, easyadmin_config('show.max_results')) %}
                    <li>
                        {% if link_parameters is defined %}
                            {% set primary_key_value = attribute(item, link_parameters.primary_key_name) %}
                            <a href=\"{{ path('easyadmin', link_parameters|merge({ id: primary_key_value, referer: '' })) }}\">{{ item }}</a>
                        {% else %}
                            {{ item }}
                        {% endif %}
                    </li>
                {% endfor %}

                {% set _remaining_items = value|length - easyadmin_config('show.max_results') %}
                {% if _remaining_items > 0 %}
                    <li class=\"remaining-items\">({{ 'show.remaining_items'|transchoice(_remaining_items, {}, 'EasyAdminBundle') }})</li>
                {% endif %}
            </ul>
        {% else %}
            <div class=\"empty collection-empty\">
                {{ include(entity_config.templates.label_empty) }}
            </div>
        {% endif %}
    {% elseif 'list' == view %}
        <span class=\"badge\">{{ value|length }}</span>
    {% endif %}
{# a simple *-to-one value associated with an entity managed by this backend #}
{% elseif link_parameters is defined %}
    <a href=\"{{ path('easyadmin', link_parameters|merge({ referer: '' })) }}\">{{ value|easyadmin_truncate }}</a>
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_association.html.twig", "C:\\wamp64\\www\\gbprojet\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_association.html.twig");
    }
}
