<?php

/* base.html.twig */
class __TwigTemplate_9c882403514f17c6dfdb8d69aa966ec7f6980d0f9c4930ea9895aae7f7523f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9de7b474ce84aaa8bfb126f18d01868d2ded0d51782ac169623cf28f62944313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de7b474ce84aaa8bfb126f18d01868d2ded0d51782ac169623cf28f62944313->enter($__internal_9de7b474ce84aaa8bfb126f18d01868d2ded0d51782ac169623cf28f62944313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fruxfoundation/css/foundation.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/style.css"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fruxfoundation/js/vendor/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fruxfoundation/js/vendor/what-input.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fruxfoundation/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fruxfoundation/js/app.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_9de7b474ce84aaa8bfb126f18d01868d2ded0d51782ac169623cf28f62944313->leave($__internal_9de7b474ce84aaa8bfb126f18d01868d2ded0d51782ac169623cf28f62944313_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7b038d66374b199ec7720b5a74acffd4fa1ca6a3352445112d88ffef752427b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b038d66374b199ec7720b5a74acffd4fa1ca6a3352445112d88ffef752427b->enter($__internal_f7b038d66374b199ec7720b5a74acffd4fa1ca6a3352445112d88ffef752427b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f7b038d66374b199ec7720b5a74acffd4fa1ca6a3352445112d88ffef752427b->leave($__internal_f7b038d66374b199ec7720b5a74acffd4fa1ca6a3352445112d88ffef752427b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbec0ce0796f4549e0e3afbb00b166f21e66dd2876c561593138f3731a90c60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbec0ce0796f4549e0e3afbb00b166f21e66dd2876c561593138f3731a90c60c->enter($__internal_fbec0ce0796f4549e0e3afbb00b166f21e66dd2876c561593138f3731a90c60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fbec0ce0796f4549e0e3afbb00b166f21e66dd2876c561593138f3731a90c60c->leave($__internal_fbec0ce0796f4549e0e3afbb00b166f21e66dd2876c561593138f3731a90c60c_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_f28c5a3b8cfc4b6920f20e2f86512c4c1f1e218d94ad59ce0a709c8c328d3fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28c5a3b8cfc4b6920f20e2f86512c4c1f1e218d94ad59ce0a709c8c328d3fe0->enter($__internal_f28c5a3b8cfc4b6920f20e2f86512c4c1f1e218d94ad59ce0a709c8c328d3fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f28c5a3b8cfc4b6920f20e2f86512c4c1f1e218d94ad59ce0a709c8c328d3fe0->leave($__internal_f28c5a3b8cfc4b6920f20e2f86512c4c1f1e218d94ad59ce0a709c8c328d3fe0_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a536d1325d5bce5983cd3067901ff95e2a09e8ee41c25de1dd8ffb9df2e05da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a536d1325d5bce5983cd3067901ff95e2a09e8ee41c25de1dd8ffb9df2e05da6->enter($__internal_a536d1325d5bce5983cd3067901ff95e2a09e8ee41c25de1dd8ffb9df2e05da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a536d1325d5bce5983cd3067901ff95e2a09e8ee41c25de1dd8ffb9df2e05da6->leave($__internal_a536d1325d5bce5983cd3067901ff95e2a09e8ee41c25de1dd8ffb9df2e05da6_prof);

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
        return array (  117 => 17,  106 => 16,  95 => 6,  83 => 5,  74 => 18,  71 => 17,  69 => 16,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/fruxfoundation/css/foundation.min.css') }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/style.css') }}\" />
        <script type=\"text/javascript\" src=\"{{ asset('bundles/fruxfoundation/js/vendor/jquery.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/fruxfoundation/js/vendor/what-input.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/fruxfoundation/js/foundation.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/fruxfoundation/js/app.js') }}\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/tbichot/Sites/projet-tut-S3/app/Resources/views/base.html.twig");
    }
}
