<?php

/* Blog/index.html.twig */
class __TwigTemplate_e9addbf868709b7d649a9ac8292cdf059c4ddcf41117cea5b531896285ccbd69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Blog/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1824ddef7905642f2d947bf4113c70f6800c700f1291d56920c9e4d62d3d0bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1824ddef7905642f2d947bf4113c70f6800c700f1291d56920c9e4d62d3d0bff->enter($__internal_1824ddef7905642f2d947bf4113c70f6800c700f1291d56920c9e4d62d3d0bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/index.html.twig"));

        $__internal_9ebcc46a7e5e1460cace15c56a3d48203823a34ea33fe33421a568c854ca0a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebcc46a7e5e1460cace15c56a3d48203823a34ea33fe33421a568c854ca0a09->enter($__internal_9ebcc46a7e5e1460cace15c56a3d48203823a34ea33fe33421a568c854ca0a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1824ddef7905642f2d947bf4113c70f6800c700f1291d56920c9e4d62d3d0bff->leave($__internal_1824ddef7905642f2d947bf4113c70f6800c700f1291d56920c9e4d62d3d0bff_prof);

        
        $__internal_9ebcc46a7e5e1460cace15c56a3d48203823a34ea33fe33421a568c854ca0a09->leave($__internal_9ebcc46a7e5e1460cace15c56a3d48203823a34ea33fe33421a568c854ca0a09_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_45d3d4312759ead59e721c66a541ae43ceee82e0f0e5616cdc246f4fd236d773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d3d4312759ead59e721c66a541ae43ceee82e0f0e5616cdc246f4fd236d773->enter($__internal_45d3d4312759ead59e721c66a541ae43ceee82e0f0e5616cdc246f4fd236d773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71db98b63e1afb25de89197c65a10e8d71982a11e8f5f2233c38879b2bf7678a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71db98b63e1afb25de89197c65a10e8d71982a11e8f5f2233c38879b2bf7678a->enter($__internal_71db98b63e1afb25de89197c65a10e8d71982a11e8f5f2233c38879b2bf7678a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "- Blog List";
        
        $__internal_71db98b63e1afb25de89197c65a10e8d71982a11e8f5f2233c38879b2bf7678a->leave($__internal_71db98b63e1afb25de89197c65a10e8d71982a11e8f5f2233c38879b2bf7678a_prof);

        
        $__internal_45d3d4312759ead59e721c66a541ae43ceee82e0f0e5616cdc246f4fd236d773->leave($__internal_45d3d4312759ead59e721c66a541ae43ceee82e0f0e5616cdc246f4fd236d773_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_66ca7810c1b9822de9a0a96d694a1330a22687e5ce6ebe55b55a09dbdc51fef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ca7810c1b9822de9a0a96d694a1330a22687e5ce6ebe55b55a09dbdc51fef4->enter($__internal_66ca7810c1b9822de9a0a96d694a1330a22687e5ce6ebe55b55a09dbdc51fef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fee95605297a6b38272e54f6774df1c036d87a920c378f0ed85d3b071b3fd669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee95605297a6b38272e54f6774df1c036d87a920c378f0ed85d3b071b3fd669->enter($__internal_fee95605297a6b38272e54f6774df1c036d87a920c378f0ed85d3b071b3fd669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container mt-5\">

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["postList"] ?? $this->getContext($context, "postList")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "
            <div class=\"mx-auto\">
                <div>
                    <h3 class=\"title\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                    <p class=\"ml-3\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "categoriesString", array()), "html", null, true);
            echo "</p>
                    <p class=\"ml-3\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</p>

                    <p class=\"text-muted text-right\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createdAt", array()), "d M Y"), "html", null, true);
            echo "</p>
                </div>
            </div>

            <hr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
";
        
        $__internal_fee95605297a6b38272e54f6774df1c036d87a920c378f0ed85d3b071b3fd669->leave($__internal_fee95605297a6b38272e54f6774df1c036d87a920c378f0ed85d3b071b3fd669_prof);

        
        $__internal_66ca7810c1b9822de9a0a96d694a1330a22687e5ce6ebe55b55a09dbdc51fef4->leave($__internal_66ca7810c1b9822de9a0a96d694a1330a22687e5ce6ebe55b55a09dbdc51fef4_prof);

    }

    public function getTemplateName()
    {
        return "Blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  94 => 15,  89 => 13,  85 => 12,  81 => 11,  76 => 8,  72 => 7,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}- Blog List{% endblock %}

{% block body %}
    <div class=\"container mt-5\">

        {% for post in postList %}

            <div class=\"mx-auto\">
                <div>
                    <h3 class=\"title\">{{ post.title }}</h3>
                    <p class=\"ml-3\">{{ post.categoriesString }}</p>
                    <p class=\"ml-3\">{{ post.description }}</p>

                    <p class=\"text-muted text-right\">{{ post.createdAt | date('d M Y') }}</p>
                </div>
            </div>

            <hr>

        {% endfor %}
    </div>
{% endblock %}", "Blog/index.html.twig", "/home/etud/alcaillot1/Cours/Php/Projects/symfony_blog/app/Resources/views/Blog/index.html.twig");
    }
}
