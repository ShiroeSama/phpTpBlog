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
        $__internal_30aa0a7401188abf031d02051fd4eb21a944743737433d8eb91b018a0073404d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30aa0a7401188abf031d02051fd4eb21a944743737433d8eb91b018a0073404d->enter($__internal_30aa0a7401188abf031d02051fd4eb21a944743737433d8eb91b018a0073404d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_21c427246f0d23ebf6754ffaa918482a126bec0fefa3189873188ad71a19a836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c427246f0d23ebf6754ffaa918482a126bec0fefa3189873188ad71a19a836->enter($__internal_21c427246f0d23ebf6754ffaa918482a126bec0fefa3189873188ad71a19a836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "    </body>

    ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "</html>
";
        
        $__internal_30aa0a7401188abf031d02051fd4eb21a944743737433d8eb91b018a0073404d->leave($__internal_30aa0a7401188abf031d02051fd4eb21a944743737433d8eb91b018a0073404d_prof);

        
        $__internal_21c427246f0d23ebf6754ffaa918482a126bec0fefa3189873188ad71a19a836->leave($__internal_21c427246f0d23ebf6754ffaa918482a126bec0fefa3189873188ad71a19a836_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddbe44f1a6df42980d1b43a1bd63b81813029ca43a411ef99811b725fe70817b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddbe44f1a6df42980d1b43a1bd63b81813029ca43a411ef99811b725fe70817b->enter($__internal_ddbe44f1a6df42980d1b43a1bd63b81813029ca43a411ef99811b725fe70817b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba95eb1648fde19770f6ccf1ff86639e3fafec8d278fb97ed124b810970848fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba95eb1648fde19770f6ccf1ff86639e3fafec8d278fb97ed124b810970848fa->enter($__internal_ba95eb1648fde19770f6ccf1ff86639e3fafec8d278fb97ed124b810970848fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ba95eb1648fde19770f6ccf1ff86639e3fafec8d278fb97ed124b810970848fa->leave($__internal_ba95eb1648fde19770f6ccf1ff86639e3fafec8d278fb97ed124b810970848fa_prof);

        
        $__internal_ddbe44f1a6df42980d1b43a1bd63b81813029ca43a411ef99811b725fe70817b->leave($__internal_ddbe44f1a6df42980d1b43a1bd63b81813029ca43a411ef99811b725fe70817b_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_7d2da61f3b90d03ab8576de7a532778e14e22a2c32ff03ca23396a11eab3faa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2da61f3b90d03ab8576de7a532778e14e22a2c32ff03ca23396a11eab3faa5->enter($__internal_7d2da61f3b90d03ab8576de7a532778e14e22a2c32ff03ca23396a11eab3faa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_400f320acaf464e07af24ee728346a92c0c0881325cc4921165eaa957cef7dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400f320acaf464e07af24ee728346a92c0c0881325cc4921165eaa957cef7dbb->enter($__internal_400f320acaf464e07af24ee728346a92c0c0881325cc4921165eaa957cef7dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", array("category" => "Developpement"));
        echo "\">Developpement</a>
                        </li>

                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", array("category" => "Sport"));
        echo "\">Sport</a>
                        </li>

                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", array("category" => "Divertissement"));
        echo "\">Divertissement</a>
                        </li>

                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", array("category" => "Yolo"));
        echo "\">Yolo</a>
                        </li>

                    </ul>
                    <div class=\"my-2 my-lg-0\">
                        <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\">Connexion</button>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_400f320acaf464e07af24ee728346a92c0c0881325cc4921165eaa957cef7dbb->leave($__internal_400f320acaf464e07af24ee728346a92c0c0881325cc4921165eaa957cef7dbb_prof);

        
        $__internal_7d2da61f3b90d03ab8576de7a532778e14e22a2c32ff03ca23396a11eab3faa5->leave($__internal_7d2da61f3b90d03ab8576de7a532778e14e22a2c32ff03ca23396a11eab3faa5_prof);

    }

    // line 23
    public function block_headerActive($context, array $blocks = array())
    {
        $__internal_5691fc05e0116a8dda7503909873b4b25e1eb98202296bda624bb40ca9d446c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5691fc05e0116a8dda7503909873b4b25e1eb98202296bda624bb40ca9d446c6->enter($__internal_5691fc05e0116a8dda7503909873b4b25e1eb98202296bda624bb40ca9d446c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerActive"));

        $__internal_e925a617e58874a1007e988ca246dc8b3c11d532f0d08cf7aed906448670f302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e925a617e58874a1007e988ca246dc8b3c11d532f0d08cf7aed906448670f302->enter($__internal_e925a617e58874a1007e988ca246dc8b3c11d532f0d08cf7aed906448670f302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerActive"));

        // line 24
        echo "                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
                                <!-- <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a> -->
                            </li>
                        ";
        
        $__internal_e925a617e58874a1007e988ca246dc8b3c11d532f0d08cf7aed906448670f302->leave($__internal_e925a617e58874a1007e988ca246dc8b3c11d532f0d08cf7aed906448670f302_prof);

        
        $__internal_5691fc05e0116a8dda7503909873b4b25e1eb98202296bda624bb40ca9d446c6->leave($__internal_5691fc05e0116a8dda7503909873b4b25e1eb98202296bda624bb40ca9d446c6_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c6296b5a8a47f9443d6bb9f71f21958722a4ac467ae6a80a359e022a394513c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6296b5a8a47f9443d6bb9f71f21958722a4ac467ae6a80a359e022a394513c->enter($__internal_9c6296b5a8a47f9443d6bb9f71f21958722a4ac467ae6a80a359e022a394513c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79149a825c6fbfa09006a7727584b64122fe00bb3d1d0396407cb3309d084dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79149a825c6fbfa09006a7727584b64122fe00bb3d1d0396407cb3309d084dca->enter($__internal_79149a825c6fbfa09006a7727584b64122fe00bb3d1d0396407cb3309d084dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79149a825c6fbfa09006a7727584b64122fe00bb3d1d0396407cb3309d084dca->leave($__internal_79149a825c6fbfa09006a7727584b64122fe00bb3d1d0396407cb3309d084dca_prof);

        
        $__internal_9c6296b5a8a47f9443d6bb9f71f21958722a4ac467ae6a80a359e022a394513c->leave($__internal_9c6296b5a8a47f9443d6bb9f71f21958722a4ac467ae6a80a359e022a394513c_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aad51ac8d3a5b288a8fa7fb70a9fab4de4ab05adf3d66e88e01b2d5cd8b20179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad51ac8d3a5b288a8fa7fb70a9fab4de4ab05adf3d66e88e01b2d5cd8b20179->enter($__internal_aad51ac8d3a5b288a8fa7fb70a9fab4de4ab05adf3d66e88e01b2d5cd8b20179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e37101a35e69e84ac97cf58e4efc52b7a2c434aa210c495edaa068d58267682a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37101a35e69e84ac97cf58e4efc52b7a2c434aa210c495edaa068d58267682a->enter($__internal_e37101a35e69e84ac97cf58e4efc52b7a2c434aa210c495edaa068d58267682a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e37101a35e69e84ac97cf58e4efc52b7a2c434aa210c495edaa068d58267682a->leave($__internal_e37101a35e69e84ac97cf58e4efc52b7a2c434aa210c495edaa068d58267682a_prof);

        
        $__internal_aad51ac8d3a5b288a8fa7fb70a9fab4de4ab05adf3d66e88e01b2d5cd8b20179->leave($__internal_aad51ac8d3a5b288a8fa7fb70a9fab4de4ab05adf3d66e88e01b2d5cd8b20179_prof);

    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1ed43c0cb1ab83f6e42c22ff6e1d56868588ba462b73520a43f364c12c23b4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed43c0cb1ab83f6e42c22ff6e1d56868588ba462b73520a43f364c12c23b4d2->enter($__internal_1ed43c0cb1ab83f6e42c22ff6e1d56868588ba462b73520a43f364c12c23b4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b84462dbc6f3254b748f9e85aeddcc40b17623b4e02bebc4f585e39ce3b5833e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84462dbc6f3254b748f9e85aeddcc40b17623b4e02bebc4f585e39ce3b5833e->enter($__internal_b84462dbc6f3254b748f9e85aeddcc40b17623b4e02bebc4f585e39ce3b5833e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 60
        echo "        <footer class=\"footer\" style=\"background: #333; width: 100%;\">
            <div class=\"container\" style=\"height: 100%\">
                <a class=\"text-muted mt-3 mb-3\" style=\"display: inline-block;\">Powered by Caillot Alexandre & Rocha Valentin</a>
            </div>
        </footer>
    ";
        
        $__internal_b84462dbc6f3254b748f9e85aeddcc40b17623b4e02bebc4f585e39ce3b5833e->leave($__internal_b84462dbc6f3254b748f9e85aeddcc40b17623b4e02bebc4f585e39ce3b5833e_prof);

        
        $__internal_1ed43c0cb1ab83f6e42c22ff6e1d56868588ba462b73520a43f364c12c23b4d2->leave($__internal_1ed43c0cb1ab83f6e42c22ff6e1d56868588ba462b73520a43f364c12c23b4d2_prof);

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
        return array (  236 => 60,  227 => 59,  210 => 56,  193 => 54,  179 => 25,  176 => 24,  167 => 23,  147 => 43,  140 => 39,  133 => 35,  126 => 31,  122 => 29,  120 => 23,  112 => 18,  109 => 17,  100 => 16,  83 => 5,  72 => 66,  70 => 59,  66 => 57,  64 => 56,  61 => 55,  59 => 54,  56 => 53,  54 => 16,  48 => 13,  37 => 5,  31 => 1,);
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
                                <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home <span class=\"sr-only\">(current)</span></a>
                                <!-- <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a> -->
                            </li>
                        {% endblock %}

                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ path('category', {'category' : 'Developpement'}) }}\">Developpement</a>
                        </li>

                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ path('category', {'category' : 'Sport'}) }}\">Sport</a>
                        </li>

                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ path('category', {'category' : 'Divertissement'}) }}\">Divertissement</a>
                        </li>

                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ path('category', {'category' : 'Yolo'}) }}\">Yolo</a>
                        </li>

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
