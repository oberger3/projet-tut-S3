<?php

/* base.html.twig */
class __TwigTemplate_83b5e9b24179292353fe88ba51f5993b124411c8d1e7b755b4a700156f836eec extends Twig_Template
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
        $__internal_3b1aae7787cc358e1e54cb42735c4d6b397f86f5bfa2deef438100f0189daa32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1aae7787cc358e1e54cb42735c4d6b397f86f5bfa2deef438100f0189daa32->enter($__internal_3b1aae7787cc358e1e54cb42735c4d6b397f86f5bfa2deef438100f0189daa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_81549a5b179431c99c41bebff340d8fe986198274dcb331eb970ba95add7701a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81549a5b179431c99c41bebff340d8fe986198274dcb331eb970ba95add7701a->enter($__internal_81549a5b179431c99c41bebff340d8fe986198274dcb331eb970ba95add7701a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta chæarset=\"UTF-8\" />
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
        $this->loadTemplate("menu.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->loadTemplate("footer.html.twig", "base.html.twig", 18)->display($context);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_3b1aae7787cc358e1e54cb42735c4d6b397f86f5bfa2deef438100f0189daa32->leave($__internal_3b1aae7787cc358e1e54cb42735c4d6b397f86f5bfa2deef438100f0189daa32_prof);

        
        $__internal_81549a5b179431c99c41bebff340d8fe986198274dcb331eb970ba95add7701a->leave($__internal_81549a5b179431c99c41bebff340d8fe986198274dcb331eb970ba95add7701a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ff1f84d02a40d5bed95f78c62840ed48c8a98a5cc91d9c4f5bd4a08d0a0af37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff1f84d02a40d5bed95f78c62840ed48c8a98a5cc91d9c4f5bd4a08d0a0af37->enter($__internal_7ff1f84d02a40d5bed95f78c62840ed48c8a98a5cc91d9c4f5bd4a08d0a0af37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a43960edee1f3393b7598fc850b3481c20068c5a75dd048640bf94ad027ded8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a43960edee1f3393b7598fc850b3481c20068c5a75dd048640bf94ad027ded8->enter($__internal_3a43960edee1f3393b7598fc850b3481c20068c5a75dd048640bf94ad027ded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "La Fontaine aux Couleurs";
        
        $__internal_3a43960edee1f3393b7598fc850b3481c20068c5a75dd048640bf94ad027ded8->leave($__internal_3a43960edee1f3393b7598fc850b3481c20068c5a75dd048640bf94ad027ded8_prof);

        
        $__internal_7ff1f84d02a40d5bed95f78c62840ed48c8a98a5cc91d9c4f5bd4a08d0a0af37->leave($__internal_7ff1f84d02a40d5bed95f78c62840ed48c8a98a5cc91d9c4f5bd4a08d0a0af37_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ff2aa46536e656d1139739bed0ec52ea4f5612f0fc756a2ea7b7398fb687a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff2aa46536e656d1139739bed0ec52ea4f5612f0fc756a2ea7b7398fb687a5c->enter($__internal_4ff2aa46536e656d1139739bed0ec52ea4f5612f0fc756a2ea7b7398fb687a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c5b2c441bd57a1808dc7099f2205c49536c75e90a902ae405e101f23fd681ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b2c441bd57a1808dc7099f2205c49536c75e90a902ae405e101f23fd681ba8->enter($__internal_c5b2c441bd57a1808dc7099f2205c49536c75e90a902ae405e101f23fd681ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c5b2c441bd57a1808dc7099f2205c49536c75e90a902ae405e101f23fd681ba8->leave($__internal_c5b2c441bd57a1808dc7099f2205c49536c75e90a902ae405e101f23fd681ba8_prof);

        
        $__internal_4ff2aa46536e656d1139739bed0ec52ea4f5612f0fc756a2ea7b7398fb687a5c->leave($__internal_4ff2aa46536e656d1139739bed0ec52ea4f5612f0fc756a2ea7b7398fb687a5c_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cfc281444f45a60fa076e407e71ebf49cbcd53ef06b855370aeb21070d62d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cfc281444f45a60fa076e407e71ebf49cbcd53ef06b855370aeb21070d62d4f->enter($__internal_2cfc281444f45a60fa076e407e71ebf49cbcd53ef06b855370aeb21070d62d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9eb38c6b231af2eca1545df3d422b163f46cdf3b86ec93fb88702b6b97abd5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb38c6b231af2eca1545df3d422b163f46cdf3b86ec93fb88702b6b97abd5ca->enter($__internal_9eb38c6b231af2eca1545df3d422b163f46cdf3b86ec93fb88702b6b97abd5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9eb38c6b231af2eca1545df3d422b163f46cdf3b86ec93fb88702b6b97abd5ca->leave($__internal_9eb38c6b231af2eca1545df3d422b163f46cdf3b86ec93fb88702b6b97abd5ca_prof);

        
        $__internal_2cfc281444f45a60fa076e407e71ebf49cbcd53ef06b855370aeb21070d62d4f->leave($__internal_2cfc281444f45a60fa076e407e71ebf49cbcd53ef06b855370aeb21070d62d4f_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e27a399b64e0aacf15d9d52fea06fbe73f8639f359bdaf8cae3901034c986620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27a399b64e0aacf15d9d52fea06fbe73f8639f359bdaf8cae3901034c986620->enter($__internal_e27a399b64e0aacf15d9d52fea06fbe73f8639f359bdaf8cae3901034c986620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eddc1c805485827e6cb2c727d2af1d3e1122af10ba11fde00dd70c5cf9111213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddc1c805485827e6cb2c727d2af1d3e1122af10ba11fde00dd70c5cf9111213->enter($__internal_eddc1c805485827e6cb2c727d2af1d3e1122af10ba11fde00dd70c5cf9111213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eddc1c805485827e6cb2c727d2af1d3e1122af10ba11fde00dd70c5cf9111213->leave($__internal_eddc1c805485827e6cb2c727d2af1d3e1122af10ba11fde00dd70c5cf9111213_prof);

        
        $__internal_e27a399b64e0aacf15d9d52fea06fbe73f8639f359bdaf8cae3901034c986620->leave($__internal_e27a399b64e0aacf15d9d52fea06fbe73f8639f359bdaf8cae3901034c986620_prof);

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
        return array (  147 => 19,  130 => 17,  113 => 6,  95 => 5,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  72 => 16,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta chæarset=\"UTF-8\" />
        <title>{% block title %}La Fontaine aux Couleurs{% endblock %}</title>
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
        {% include \"menu.html.twig\" %}
        {% block body %}{% endblock %}
        {% include \"footer.html.twig\" %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/tbichot/Sites/projet-tut-S3/app/Resources/views/base.html.twig");
    }
}
