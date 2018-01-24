<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_80208d251c333cc4bb392a8f841b19f4a37ec4ce3a388e3a01dfb680e3f4bb4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80208d251c333cc4bb392a8f841b19f4a37ec4ce3a388e3a01dfb680e3f4bb4c->enter($__internal_80208d251c333cc4bb392a8f841b19f4a37ec4ce3a388e3a01dfb680e3f4bb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_db7ba07f41ee671ae1e548e1c76a87110804d094a8fbdc7462772c0b938b919f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7ba07f41ee671ae1e548e1c76a87110804d094a8fbdc7462772c0b938b919f->enter($__internal_db7ba07f41ee671ae1e548e1c76a87110804d094a8fbdc7462772c0b938b919f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80208d251c333cc4bb392a8f841b19f4a37ec4ce3a388e3a01dfb680e3f4bb4c->leave($__internal_80208d251c333cc4bb392a8f841b19f4a37ec4ce3a388e3a01dfb680e3f4bb4c_prof);

        
        $__internal_db7ba07f41ee671ae1e548e1c76a87110804d094a8fbdc7462772c0b938b919f->leave($__internal_db7ba07f41ee671ae1e548e1c76a87110804d094a8fbdc7462772c0b938b919f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e527d6ddd8b8cc0e650821ad84bb1c6c3f7ee9f10a3975f0415847db112d0326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e527d6ddd8b8cc0e650821ad84bb1c6c3f7ee9f10a3975f0415847db112d0326->enter($__internal_e527d6ddd8b8cc0e650821ad84bb1c6c3f7ee9f10a3975f0415847db112d0326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_38f05ef3eb28d6fefcd58dffbad20485a20bcb024d05627b6bb91c9baa2349d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f05ef3eb28d6fefcd58dffbad20485a20bcb024d05627b6bb91c9baa2349d4->enter($__internal_38f05ef3eb28d6fefcd58dffbad20485a20bcb024d05627b6bb91c9baa2349d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_38f05ef3eb28d6fefcd58dffbad20485a20bcb024d05627b6bb91c9baa2349d4->leave($__internal_38f05ef3eb28d6fefcd58dffbad20485a20bcb024d05627b6bb91c9baa2349d4_prof);

        
        $__internal_e527d6ddd8b8cc0e650821ad84bb1c6c3f7ee9f10a3975f0415847db112d0326->leave($__internal_e527d6ddd8b8cc0e650821ad84bb1c6c3f7ee9f10a3975f0415847db112d0326_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f9ae13884ceeacf659b3379b416dd205eb49e9af50776b0035b0576bcd0e1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9ae13884ceeacf659b3379b416dd205eb49e9af50776b0035b0576bcd0e1ac->enter($__internal_7f9ae13884ceeacf659b3379b416dd205eb49e9af50776b0035b0576bcd0e1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2464efa2c6060d6e261e00792256c4376212adf0fec3d95528d6ebddcadd0000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2464efa2c6060d6e261e00792256c4376212adf0fec3d95528d6ebddcadd0000->enter($__internal_2464efa2c6060d6e261e00792256c4376212adf0fec3d95528d6ebddcadd0000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2464efa2c6060d6e261e00792256c4376212adf0fec3d95528d6ebddcadd0000->leave($__internal_2464efa2c6060d6e261e00792256c4376212adf0fec3d95528d6ebddcadd0000_prof);

        
        $__internal_7f9ae13884ceeacf659b3379b416dd205eb49e9af50776b0035b0576bcd0e1ac->leave($__internal_7f9ae13884ceeacf659b3379b416dd205eb49e9af50776b0035b0576bcd0e1ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73834c150ab6f7053f98058b5c9acc514a39ba4381192b7ba80ccab14c286203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73834c150ab6f7053f98058b5c9acc514a39ba4381192b7ba80ccab14c286203->enter($__internal_73834c150ab6f7053f98058b5c9acc514a39ba4381192b7ba80ccab14c286203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_14f8a865c133ff58e8e6e83faace19f4538e9873d1dca7d840149a2f9cbeb7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f8a865c133ff58e8e6e83faace19f4538e9873d1dca7d840149a2f9cbeb7e9->enter($__internal_14f8a865c133ff58e8e6e83faace19f4538e9873d1dca7d840149a2f9cbeb7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_14f8a865c133ff58e8e6e83faace19f4538e9873d1dca7d840149a2f9cbeb7e9->leave($__internal_14f8a865c133ff58e8e6e83faace19f4538e9873d1dca7d840149a2f9cbeb7e9_prof);

        
        $__internal_73834c150ab6f7053f98058b5c9acc514a39ba4381192b7ba80ccab14c286203->leave($__internal_73834c150ab6f7053f98058b5c9acc514a39ba4381192b7ba80ccab14c286203_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/etud/alcaillot1/Cours/Php/Projects/symfony_blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
