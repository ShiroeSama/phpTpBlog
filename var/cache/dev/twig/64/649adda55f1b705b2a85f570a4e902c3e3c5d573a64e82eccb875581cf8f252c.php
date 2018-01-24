<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6d83427f751e6692610de249715f52bc2e0b182a01b532a97cb71fcfb6f0efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d83427f751e6692610de249715f52bc2e0b182a01b532a97cb71fcfb6f0efa->enter($__internal_a6d83427f751e6692610de249715f52bc2e0b182a01b532a97cb71fcfb6f0efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_399e1de73c9264e1aed4684ab30861057231a4b6b99b1d82dd256887228b8d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399e1de73c9264e1aed4684ab30861057231a4b6b99b1d82dd256887228b8d35->enter($__internal_399e1de73c9264e1aed4684ab30861057231a4b6b99b1d82dd256887228b8d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d83427f751e6692610de249715f52bc2e0b182a01b532a97cb71fcfb6f0efa->leave($__internal_a6d83427f751e6692610de249715f52bc2e0b182a01b532a97cb71fcfb6f0efa_prof);

        
        $__internal_399e1de73c9264e1aed4684ab30861057231a4b6b99b1d82dd256887228b8d35->leave($__internal_399e1de73c9264e1aed4684ab30861057231a4b6b99b1d82dd256887228b8d35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a22312cf5cf6469321aedee97c50dc086bfdffb6798dc88ae90d6822711abe7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22312cf5cf6469321aedee97c50dc086bfdffb6798dc88ae90d6822711abe7c->enter($__internal_a22312cf5cf6469321aedee97c50dc086bfdffb6798dc88ae90d6822711abe7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f1abea49539170a89632600fa55ae0cb0a0247661c7464dc5afc874cc987665d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1abea49539170a89632600fa55ae0cb0a0247661c7464dc5afc874cc987665d->enter($__internal_f1abea49539170a89632600fa55ae0cb0a0247661c7464dc5afc874cc987665d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1abea49539170a89632600fa55ae0cb0a0247661c7464dc5afc874cc987665d->leave($__internal_f1abea49539170a89632600fa55ae0cb0a0247661c7464dc5afc874cc987665d_prof);

        
        $__internal_a22312cf5cf6469321aedee97c50dc086bfdffb6798dc88ae90d6822711abe7c->leave($__internal_a22312cf5cf6469321aedee97c50dc086bfdffb6798dc88ae90d6822711abe7c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79cd05ce17a6f09a3962a81d99fb4931551a397d3ebe138bd5eb755379db0e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79cd05ce17a6f09a3962a81d99fb4931551a397d3ebe138bd5eb755379db0e11->enter($__internal_79cd05ce17a6f09a3962a81d99fb4931551a397d3ebe138bd5eb755379db0e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bbf222fcc15564642894e00d4395d342e2de6303ebae4379178241ac606a296c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf222fcc15564642894e00d4395d342e2de6303ebae4379178241ac606a296c->enter($__internal_bbf222fcc15564642894e00d4395d342e2de6303ebae4379178241ac606a296c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bbf222fcc15564642894e00d4395d342e2de6303ebae4379178241ac606a296c->leave($__internal_bbf222fcc15564642894e00d4395d342e2de6303ebae4379178241ac606a296c_prof);

        
        $__internal_79cd05ce17a6f09a3962a81d99fb4931551a397d3ebe138bd5eb755379db0e11->leave($__internal_79cd05ce17a6f09a3962a81d99fb4931551a397d3ebe138bd5eb755379db0e11_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7c7234b0fa2303c357dbde19a9d33e07b648e1a6a8fde942cad65ebedc558cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c7234b0fa2303c357dbde19a9d33e07b648e1a6a8fde942cad65ebedc558cc->enter($__internal_f7c7234b0fa2303c357dbde19a9d33e07b648e1a6a8fde942cad65ebedc558cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c717d117de64143a23ea4be2f4a3be4161ce4567cb4d5943d72bd248e49abf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c717d117de64143a23ea4be2f4a3be4161ce4567cb4d5943d72bd248e49abf6->enter($__internal_7c717d117de64143a23ea4be2f4a3be4161ce4567cb4d5943d72bd248e49abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7c717d117de64143a23ea4be2f4a3be4161ce4567cb4d5943d72bd248e49abf6->leave($__internal_7c717d117de64143a23ea4be2f4a3be4161ce4567cb4d5943d72bd248e49abf6_prof);

        
        $__internal_f7c7234b0fa2303c357dbde19a9d33e07b648e1a6a8fde942cad65ebedc558cc->leave($__internal_f7c7234b0fa2303c357dbde19a9d33e07b648e1a6a8fde942cad65ebedc558cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/etud/alcaillot1/Cours/Php/Projects/symfony_blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
