<?php

/* Blog/category.html.twig */
class __TwigTemplate_97f34cc3023662e037d296cfca9f3ea597dbc884df66fabb02bcd682397c4aa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Blog/category.html.twig", 1);
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
        $__internal_b9dd6596bf123502e7f811eebe17be3176968b06319af35c459c6f85514bdb55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9dd6596bf123502e7f811eebe17be3176968b06319af35c459c6f85514bdb55->enter($__internal_b9dd6596bf123502e7f811eebe17be3176968b06319af35c459c6f85514bdb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/category.html.twig"));

        $__internal_7784d5f8650b9f5c88a885d1114d2547f817c8b7d2906b9440bae0a92248292b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7784d5f8650b9f5c88a885d1114d2547f817c8b7d2906b9440bae0a92248292b->enter($__internal_7784d5f8650b9f5c88a885d1114d2547f817c8b7d2906b9440bae0a92248292b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9dd6596bf123502e7f811eebe17be3176968b06319af35c459c6f85514bdb55->leave($__internal_b9dd6596bf123502e7f811eebe17be3176968b06319af35c459c6f85514bdb55_prof);

        
        $__internal_7784d5f8650b9f5c88a885d1114d2547f817c8b7d2906b9440bae0a92248292b->leave($__internal_7784d5f8650b9f5c88a885d1114d2547f817c8b7d2906b9440bae0a92248292b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_03bbea42d1b1613dcccc8775d3a4bf0bcc5819226305aba7d6c13b6e0da8ff3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03bbea42d1b1613dcccc8775d3a4bf0bcc5819226305aba7d6c13b6e0da8ff3c->enter($__internal_03bbea42d1b1613dcccc8775d3a4bf0bcc5819226305aba7d6c13b6e0da8ff3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5579a9e399efa3f02da0caf1e97ee5ba63d2d0a77e91d6e552aaaed684795b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5579a9e399efa3f02da0caf1e97ee5ba63d2d0a77e91d6e552aaaed684795b1a->enter($__internal_5579a9e399efa3f02da0caf1e97ee5ba63d2d0a77e91d6e552aaaed684795b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "- ";
        echo twig_escape_filter($this->env, ($context["categoryName"] ?? $this->getContext($context, "categoryName")), "html", null, true);
        
        $__internal_5579a9e399efa3f02da0caf1e97ee5ba63d2d0a77e91d6e552aaaed684795b1a->leave($__internal_5579a9e399efa3f02da0caf1e97ee5ba63d2d0a77e91d6e552aaaed684795b1a_prof);

        
        $__internal_03bbea42d1b1613dcccc8775d3a4bf0bcc5819226305aba7d6c13b6e0da8ff3c->leave($__internal_03bbea42d1b1613dcccc8775d3a4bf0bcc5819226305aba7d6c13b6e0da8ff3c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb67d950d9bbffdaf852bd9f28d532cbc34f6e3a283186c086d3942cd003d1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb67d950d9bbffdaf852bd9f28d532cbc34f6e3a283186c086d3942cd003d1d7->enter($__internal_bb67d950d9bbffdaf852bd9f28d532cbc34f6e3a283186c086d3942cd003d1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ac721d0560f0c1df76d1781a8052dc740bdea3adcf64b01e8f0fd7cd9ecaac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac721d0560f0c1df76d1781a8052dc740bdea3adcf64b01e8f0fd7cd9ecaac1->enter($__internal_1ac721d0560f0c1df76d1781a8052dc740bdea3adcf64b01e8f0fd7cd9ecaac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container mt-5\">

        <h3 class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["categoryName"] ?? $this->getContext($context, "categoryName")), "html", null, true);
        echo "</h3>
        <hr>

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["postList"] ?? $this->getContext($context, "postList")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "
            <div class=\"mt-5 mx-auto\">
                <div>
                    <h3 class=\"title\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                    <p class=\"ml-3\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "categoriesString", array()), "html", null, true);
            echo "</p>
                    <p class=\"ml-3\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</p>

                    <p class=\"text-muted text-right\">";
            // line 18
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
        // line 25
        echo "    </div>
";
        
        $__internal_1ac721d0560f0c1df76d1781a8052dc740bdea3adcf64b01e8f0fd7cd9ecaac1->leave($__internal_1ac721d0560f0c1df76d1781a8052dc740bdea3adcf64b01e8f0fd7cd9ecaac1_prof);

        
        $__internal_bb67d950d9bbffdaf852bd9f28d532cbc34f6e3a283186c086d3942cd003d1d7->leave($__internal_bb67d950d9bbffdaf852bd9f28d532cbc34f6e3a283186c086d3942cd003d1d7_prof);

    }

    public function getTemplateName()
    {
        return "Blog/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  101 => 18,  96 => 16,  92 => 15,  88 => 14,  83 => 11,  79 => 10,  73 => 7,  69 => 5,  60 => 4,  41 => 2,  11 => 1,);
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
{% block title %}- {{ categoryName }}{% endblock %}

{% block body %}
    <div class=\"container mt-5\">

        <h3 class=\"title\">{{ categoryName }}</h3>
        <hr>

        {% for post in postList %}

            <div class=\"mt-5 mx-auto\">
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
{% endblock %}", "Blog/category.html.twig", "/home/etud/alcaillot1/Cours/Php/Projects/symfony_blog/app/Resources/views/Blog/category.html.twig");
    }
}
