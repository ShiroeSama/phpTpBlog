<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77f83f6b44929ec66159ee8c92135621f26a50e5d18529e5b5cb86d079844ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f83f6b44929ec66159ee8c92135621f26a50e5d18529e5b5cb86d079844ea0->enter($__internal_77f83f6b44929ec66159ee8c92135621f26a50e5d18529e5b5cb86d079844ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_eaf1644e5f64b9d9f8c1983ac066c50a43d8539032aa4afd99b7a9accf4f9609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf1644e5f64b9d9f8c1983ac066c50a43d8539032aa4afd99b7a9accf4f9609->enter($__internal_eaf1644e5f64b9d9f8c1983ac066c50a43d8539032aa4afd99b7a9accf4f9609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_77f83f6b44929ec66159ee8c92135621f26a50e5d18529e5b5cb86d079844ea0->leave($__internal_77f83f6b44929ec66159ee8c92135621f26a50e5d18529e5b5cb86d079844ea0_prof);

        
        $__internal_eaf1644e5f64b9d9f8c1983ac066c50a43d8539032aa4afd99b7a9accf4f9609->leave($__internal_eaf1644e5f64b9d9f8c1983ac066c50a43d8539032aa4afd99b7a9accf4f9609_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_567b16894e9faf22801942d6a4a9606b4b691c59e069430d777ad43ffc34b191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567b16894e9faf22801942d6a4a9606b4b691c59e069430d777ad43ffc34b191->enter($__internal_567b16894e9faf22801942d6a4a9606b4b691c59e069430d777ad43ffc34b191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0736c0975db7f8e59df2ff54b11f2a6bb06e380c932e726e2f0c2ecc6ab549c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0736c0975db7f8e59df2ff54b11f2a6bb06e380c932e726e2f0c2ecc6ab549c3->enter($__internal_0736c0975db7f8e59df2ff54b11f2a6bb06e380c932e726e2f0c2ecc6ab549c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0736c0975db7f8e59df2ff54b11f2a6bb06e380c932e726e2f0c2ecc6ab549c3->leave($__internal_0736c0975db7f8e59df2ff54b11f2a6bb06e380c932e726e2f0c2ecc6ab549c3_prof);

        
        $__internal_567b16894e9faf22801942d6a4a9606b4b691c59e069430d777ad43ffc34b191->leave($__internal_567b16894e9faf22801942d6a4a9606b4b691c59e069430d777ad43ffc34b191_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6deb2ec1441ef7696973c13444ef5b37d13f55d30178d0e960d0c01fccbdfd87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6deb2ec1441ef7696973c13444ef5b37d13f55d30178d0e960d0c01fccbdfd87->enter($__internal_6deb2ec1441ef7696973c13444ef5b37d13f55d30178d0e960d0c01fccbdfd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_60a26ef10905140acdf94983f9714446a14d96905d210ecb173c63d4009980a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a26ef10905140acdf94983f9714446a14d96905d210ecb173c63d4009980a1->enter($__internal_60a26ef10905140acdf94983f9714446a14d96905d210ecb173c63d4009980a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_60a26ef10905140acdf94983f9714446a14d96905d210ecb173c63d4009980a1->leave($__internal_60a26ef10905140acdf94983f9714446a14d96905d210ecb173c63d4009980a1_prof);

        
        $__internal_6deb2ec1441ef7696973c13444ef5b37d13f55d30178d0e960d0c01fccbdfd87->leave($__internal_6deb2ec1441ef7696973c13444ef5b37d13f55d30178d0e960d0c01fccbdfd87_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f74f0f26ea29c840aa7ad15d9453fd27d0b836fe1ad0bbb40338f1a14b4d4ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74f0f26ea29c840aa7ad15d9453fd27d0b836fe1ad0bbb40338f1a14b4d4ac8->enter($__internal_f74f0f26ea29c840aa7ad15d9453fd27d0b836fe1ad0bbb40338f1a14b4d4ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53b9382ad197167481d4673c4e9eb012118737c3c4412eb71309e2b6c3fac056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b9382ad197167481d4673c4e9eb012118737c3c4412eb71309e2b6c3fac056->enter($__internal_53b9382ad197167481d4673c4e9eb012118737c3c4412eb71309e2b6c3fac056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53b9382ad197167481d4673c4e9eb012118737c3c4412eb71309e2b6c3fac056->leave($__internal_53b9382ad197167481d4673c4e9eb012118737c3c4412eb71309e2b6c3fac056_prof);

        
        $__internal_f74f0f26ea29c840aa7ad15d9453fd27d0b836fe1ad0bbb40338f1a14b4d4ac8->leave($__internal_f74f0f26ea29c840aa7ad15d9453fd27d0b836fe1ad0bbb40338f1a14b4d4ac8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/etud/alcaillot1/Cours/Php/Projects/symfony_blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
