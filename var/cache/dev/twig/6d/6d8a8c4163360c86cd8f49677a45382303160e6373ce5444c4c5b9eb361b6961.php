<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'headerActive' => array($this, 'block_headerActive'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e4da912fb989c003ad5b493ec895dd4971d6031096e003075ad267ee8aad8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4da912fb989c003ad5b493ec895dd4971d6031096e003075ad267ee8aad8c4->enter($__internal_6e4da912fb989c003ad5b493ec895dd4971d6031096e003075ad267ee8aad8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d39bba851f3326b3c8d3c8c63abc2c344be5cfed2d2ae72d70cd5dfc44913774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39bba851f3326b3c8d3c8c63abc2c344be5cfed2d2ae72d70cd5dfc44913774->enter($__internal_d39bba851f3326b3c8d3c8c63abc2c344be5cfed2d2ae72d70cd5dfc44913774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Symfony Blog ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>

    ";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "</html>
";
        
        $__internal_6e4da912fb989c003ad5b493ec895dd4971d6031096e003075ad267ee8aad8c4->leave($__internal_6e4da912fb989c003ad5b493ec895dd4971d6031096e003075ad267ee8aad8c4_prof);

        
        $__internal_d39bba851f3326b3c8d3c8c63abc2c344be5cfed2d2ae72d70cd5dfc44913774->leave($__internal_d39bba851f3326b3c8d3c8c63abc2c344be5cfed2d2ae72d70cd5dfc44913774_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_437abd5d68bf7cee87c39b88b3a9d801d052c61df512524587161fb8141c94b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437abd5d68bf7cee87c39b88b3a9d801d052c61df512524587161fb8141c94b7->enter($__internal_437abd5d68bf7cee87c39b88b3a9d801d052c61df512524587161fb8141c94b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f462f77a275973ee0b983110f95443c61773ac5b4bc8dd7dc49c34a6549db50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f462f77a275973ee0b983110f95443c61773ac5b4bc8dd7dc49c34a6549db50->enter($__internal_7f462f77a275973ee0b983110f95443c61773ac5b4bc8dd7dc49c34a6549db50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7f462f77a275973ee0b983110f95443c61773ac5b4bc8dd7dc49c34a6549db50->leave($__internal_7f462f77a275973ee0b983110f95443c61773ac5b4bc8dd7dc49c34a6549db50_prof);

        
        $__internal_437abd5d68bf7cee87c39b88b3a9d801d052c61df512524587161fb8141c94b7->leave($__internal_437abd5d68bf7cee87c39b88b3a9d801d052c61df512524587161fb8141c94b7_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_f3fe064511edc9fd3900175342123154f8580756c67c172ba3244ea1a09ec6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3fe064511edc9fd3900175342123154f8580756c67c172ba3244ea1a09ec6bf->enter($__internal_f3fe064511edc9fd3900175342123154f8580756c67c172ba3244ea1a09ec6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_96caba9726ba0d8a64b8b157383063fb909f18b2af62bfc036ed9da6502d5585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96caba9726ba0d8a64b8b157383063fb909f18b2af62bfc036ed9da6502d5585->enter($__internal_96caba9726ba0d8a64b8b157383063fb909f18b2af62bfc036ed9da6502d5585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Symfony Blog</a>

                <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
                    <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">

                        ";
        // line 23
        $this->displayBlock('headerActive', $context, $blocks);
        // line 29
        echo "
                    </ul>
                    <div class=\"my-2 my-lg-0\">
                        <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\">Connexion</button>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_96caba9726ba0d8a64b8b157383063fb909f18b2af62bfc036ed9da6502d5585->leave($__internal_96caba9726ba0d8a64b8b157383063fb909f18b2af62bfc036ed9da6502d5585_prof);

        
        $__internal_f3fe064511edc9fd3900175342123154f8580756c67c172ba3244ea1a09ec6bf->leave($__internal_f3fe064511edc9fd3900175342123154f8580756c67c172ba3244ea1a09ec6bf_prof);

    }

    // line 23
    public function block_headerActive($context, array $blocks = array())
    {
        $__internal_b615840503b24ec3de482f17b079e4e220c32314ade34236544854ee4779f55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b615840503b24ec3de482f17b079e4e220c32314ade34236544854ee4779f55c->enter($__internal_b615840503b24ec3de482f17b079e4e220c32314ade34236544854ee4779f55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerActive"));

        $__internal_acc741f46b4eb5a44713b89d722ceeb7b82026cd393211e3fc03fd583c56eac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc741f46b4eb5a44713b89d722ceeb7b82026cd393211e3fc03fd583c56eac7->enter($__internal_acc741f46b4eb5a44713b89d722ceeb7b82026cd393211e3fc03fd583c56eac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerActive"));

        // line 24
        echo "                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
                                <!-- <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a> -->
                            </li>
                        ";
        
        $__internal_acc741f46b4eb5a44713b89d722ceeb7b82026cd393211e3fc03fd583c56eac7->leave($__internal_acc741f46b4eb5a44713b89d722ceeb7b82026cd393211e3fc03fd583c56eac7_prof);

        
        $__internal_b615840503b24ec3de482f17b079e4e220c32314ade34236544854ee4779f55c->leave($__internal_b615840503b24ec3de482f17b079e4e220c32314ade34236544854ee4779f55c_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4be31853e98feb585821776a63be6f54681f2f3ca6f22f18859bd834d8d6f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4be31853e98feb585821776a63be6f54681f2f3ca6f22f18859bd834d8d6f15->enter($__internal_f4be31853e98feb585821776a63be6f54681f2f3ca6f22f18859bd834d8d6f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09e9ea82b97e159f704586bbe8e5533e7ef010b2632394932863f60c4e825334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e9ea82b97e159f704586bbe8e5533e7ef010b2632394932863f60c4e825334->enter($__internal_09e9ea82b97e159f704586bbe8e5533e7ef010b2632394932863f60c4e825334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_09e9ea82b97e159f704586bbe8e5533e7ef010b2632394932863f60c4e825334->leave($__internal_09e9ea82b97e159f704586bbe8e5533e7ef010b2632394932863f60c4e825334_prof);

        
        $__internal_f4be31853e98feb585821776a63be6f54681f2f3ca6f22f18859bd834d8d6f15->leave($__internal_f4be31853e98feb585821776a63be6f54681f2f3ca6f22f18859bd834d8d6f15_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f103a892e21f34f3efdf9e3ab5b0de654894946a90922e01f78d1221a6329095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f103a892e21f34f3efdf9e3ab5b0de654894946a90922e01f78d1221a6329095->enter($__internal_f103a892e21f34f3efdf9e3ab5b0de654894946a90922e01f78d1221a6329095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da681aeb8d14beff517c49471c0c72b4c4f537fbcd52552cc84df681bee1696c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da681aeb8d14beff517c49471c0c72b4c4f537fbcd52552cc84df681bee1696c->enter($__internal_da681aeb8d14beff517c49471c0c72b4c4f537fbcd52552cc84df681bee1696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da681aeb8d14beff517c49471c0c72b4c4f537fbcd52552cc84df681bee1696c->leave($__internal_da681aeb8d14beff517c49471c0c72b4c4f537fbcd52552cc84df681bee1696c_prof);

        
        $__internal_f103a892e21f34f3efdf9e3ab5b0de654894946a90922e01f78d1221a6329095->leave($__internal_f103a892e21f34f3efdf9e3ab5b0de654894946a90922e01f78d1221a6329095_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2c08b0c44625619c1dc7617a1060fd5a3c8a409651d4db820e67fba65d7eea8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c08b0c44625619c1dc7617a1060fd5a3c8a409651d4db820e67fba65d7eea8d->enter($__internal_2c08b0c44625619c1dc7617a1060fd5a3c8a409651d4db820e67fba65d7eea8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d2d5b2e5bb3704715bc716c1d0cc68d7736e778c6d780c3de2ae99f80e2b51d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d5b2e5bb3704715bc716c1d0cc68d7736e778c6d780c3de2ae99f80e2b51d5->enter($__internal_d2d5b2e5bb3704715bc716c1d0cc68d7736e778c6d780c3de2ae99f80e2b51d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        echo "        <footer class=\"footer\" style=\"background: #333; width: 100%;\">
            <div class=\"container\" style=\"height: 100%\">
                <a class=\"text-muted mt-3 mb-3\" style=\"display: inline-block;\">Powered by Caillot Alexandre & Rocha Valentin</a>
            </div>
        </footer>
    ";
        
        $__internal_d2d5b2e5bb3704715bc716c1d0cc68d7736e778c6d780c3de2ae99f80e2b51d5->leave($__internal_d2d5b2e5bb3704715bc716c1d0cc68d7736e778c6d780c3de2ae99f80e2b51d5_prof);

        
        $__internal_2c08b0c44625619c1dc7617a1060fd5a3c8a409651d4db820e67fba65d7eea8d->leave($__internal_2c08b0c44625619c1dc7617a1060fd5a3c8a409651d4db820e67fba65d7eea8d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 44,  199 => 43,  182 => 40,  165 => 38,  151 => 25,  148 => 24,  139 => 23,  122 => 29,  120 => 23,  112 => 18,  109 => 17,  100 => 16,  83 => 5,  72 => 50,  70 => 43,  66 => 41,  64 => 40,  61 => 39,  59 => 38,  56 => 37,  54 => 16,  48 => 13,  37 => 5,  31 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>Symfony Blog {% block title %}{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block header %}
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Symfony Blog</a>

                <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
                    <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">

                        {% block headerActive %}
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home</a>
                                <!-- <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a> -->
                            </li>
                        {% endblock %}

                    </ul>
                    <div class=\"my-2 my-lg-0\">
                        <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\">Connexion</button>
                    </div>
                </div>
            </nav>
        {% endblock %}

        {% block body %}{% endblock %}

        {% block javascripts %}{% endblock %}
    </body>

    {% block footer %}
        <footer class=\"footer\" style=\"background: #333; width: 100%;\">
            <div class=\"container\" style=\"height: 100%\">
                <a class=\"text-muted mt-3 mb-3\" style=\"display: inline-block;\">Powered by Caillot Alexandre & Rocha Valentin</a>
            </div>
        </footer>
    {% endblock %}
</html>
", "base.html.twig", "/home/etud/alcaillot1/Cours/Php/Projects/symfony_blog/app/Resources/views/base.html.twig");
    }
}
