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
        $__internal_088e9816f16a660068d9a926a766955a70dd3780a0c4220f33039f6066f384bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088e9816f16a660068d9a926a766955a70dd3780a0c4220f33039f6066f384bd->enter($__internal_088e9816f16a660068d9a926a766955a70dd3780a0c4220f33039f6066f384bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/index.html.twig"));

        $__internal_b16e6a06eb7045bc0706592bdd15d8e0adf11491f7ae880ab01b3574931137a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16e6a06eb7045bc0706592bdd15d8e0adf11491f7ae880ab01b3574931137a1->enter($__internal_b16e6a06eb7045bc0706592bdd15d8e0adf11491f7ae880ab01b3574931137a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_088e9816f16a660068d9a926a766955a70dd3780a0c4220f33039f6066f384bd->leave($__internal_088e9816f16a660068d9a926a766955a70dd3780a0c4220f33039f6066f384bd_prof);

        
        $__internal_b16e6a06eb7045bc0706592bdd15d8e0adf11491f7ae880ab01b3574931137a1->leave($__internal_b16e6a06eb7045bc0706592bdd15d8e0adf11491f7ae880ab01b3574931137a1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9eef00b898e183801cb3daad2f049ee401ae6d9252e58b27ba7c3484f583f0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eef00b898e183801cb3daad2f049ee401ae6d9252e58b27ba7c3484f583f0ae->enter($__internal_9eef00b898e183801cb3daad2f049ee401ae6d9252e58b27ba7c3484f583f0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fff3229ac4d5c4a02b75b6c87bee4540e795c67223e9a9599b7f8fc5648b08e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fff3229ac4d5c4a02b75b6c87bee4540e795c67223e9a9599b7f8fc5648b08e->enter($__internal_1fff3229ac4d5c4a02b75b6c87bee4540e795c67223e9a9599b7f8fc5648b08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "- Blog List";
        
        $__internal_1fff3229ac4d5c4a02b75b6c87bee4540e795c67223e9a9599b7f8fc5648b08e->leave($__internal_1fff3229ac4d5c4a02b75b6c87bee4540e795c67223e9a9599b7f8fc5648b08e_prof);

        
        $__internal_9eef00b898e183801cb3daad2f049ee401ae6d9252e58b27ba7c3484f583f0ae->leave($__internal_9eef00b898e183801cb3daad2f049ee401ae6d9252e58b27ba7c3484f583f0ae_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b5aa3b8c047286472db2fd39b2eff83b83b7a6dc22c13f962e1b1a0627349a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b5aa3b8c047286472db2fd39b2eff83b83b7a6dc22c13f962e1b1a0627349a->enter($__internal_25b5aa3b8c047286472db2fd39b2eff83b83b7a6dc22c13f962e1b1a0627349a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da49353d8f012e14a49342862d2ee3c194baac5a779b7eeb5023f0cfabe9969c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da49353d8f012e14a49342862d2ee3c194baac5a779b7eeb5023f0cfabe9969c->enter($__internal_da49353d8f012e14a49342862d2ee3c194baac5a779b7eeb5023f0cfabe9969c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</p>

                    <p class=\"text-muted text-right\">";
            // line 14
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
        // line 21
        echo "    </div>
";
        
        $__internal_da49353d8f012e14a49342862d2ee3c194baac5a779b7eeb5023f0cfabe9969c->leave($__internal_da49353d8f012e14a49342862d2ee3c194baac5a779b7eeb5023f0cfabe9969c_prof);

        
        $__internal_25b5aa3b8c047286472db2fd39b2eff83b83b7a6dc22c13f962e1b1a0627349a->leave($__internal_25b5aa3b8c047286472db2fd39b2eff83b83b7a6dc22c13f962e1b1a0627349a_prof);

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
        return array (  103 => 21,  90 => 14,  85 => 12,  81 => 11,  76 => 8,  72 => 7,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
