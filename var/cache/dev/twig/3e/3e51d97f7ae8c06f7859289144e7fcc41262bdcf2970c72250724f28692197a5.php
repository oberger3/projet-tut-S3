<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
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
        $__internal_00986b9fcf83f9b031a275f8b2cd84ed83efcfbc3c3c5c25decfc210e5764b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00986b9fcf83f9b031a275f8b2cd84ed83efcfbc3c3c5c25decfc210e5764b38->enter($__internal_00986b9fcf83f9b031a275f8b2cd84ed83efcfbc3c3c5c25decfc210e5764b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_124500f4c2e8c33b3b660e07f2bd71dc1d5e92d94400b69e19ed2886bae2fe5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124500f4c2e8c33b3b660e07f2bd71dc1d5e92d94400b69e19ed2886bae2fe5a->enter($__internal_124500f4c2e8c33b3b660e07f2bd71dc1d5e92d94400b69e19ed2886bae2fe5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00986b9fcf83f9b031a275f8b2cd84ed83efcfbc3c3c5c25decfc210e5764b38->leave($__internal_00986b9fcf83f9b031a275f8b2cd84ed83efcfbc3c3c5c25decfc210e5764b38_prof);

        
        $__internal_124500f4c2e8c33b3b660e07f2bd71dc1d5e92d94400b69e19ed2886bae2fe5a->leave($__internal_124500f4c2e8c33b3b660e07f2bd71dc1d5e92d94400b69e19ed2886bae2fe5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6494863b235905d030bc22a153ba55348de4c97af8c058f9f6374700b3317485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6494863b235905d030bc22a153ba55348de4c97af8c058f9f6374700b3317485->enter($__internal_6494863b235905d030bc22a153ba55348de4c97af8c058f9f6374700b3317485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_abe38cd87bb92e296db65976e5cfa0f03ea8e51fd69143605dd3da9791b6b3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe38cd87bb92e296db65976e5cfa0f03ea8e51fd69143605dd3da9791b6b3b8->enter($__internal_abe38cd87bb92e296db65976e5cfa0f03ea8e51fd69143605dd3da9791b6b3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_abe38cd87bb92e296db65976e5cfa0f03ea8e51fd69143605dd3da9791b6b3b8->leave($__internal_abe38cd87bb92e296db65976e5cfa0f03ea8e51fd69143605dd3da9791b6b3b8_prof);

        
        $__internal_6494863b235905d030bc22a153ba55348de4c97af8c058f9f6374700b3317485->leave($__internal_6494863b235905d030bc22a153ba55348de4c97af8c058f9f6374700b3317485_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7cd5c62b3a204d72ad23eba467d91665799670011c688ec949ddca4d488c046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7cd5c62b3a204d72ad23eba467d91665799670011c688ec949ddca4d488c046->enter($__internal_b7cd5c62b3a204d72ad23eba467d91665799670011c688ec949ddca4d488c046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d482db39371937a9e7b2e005f697cbbe1594edbf087f7f4c193ad176bc1cf6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d482db39371937a9e7b2e005f697cbbe1594edbf087f7f4c193ad176bc1cf6ea->enter($__internal_d482db39371937a9e7b2e005f697cbbe1594edbf087f7f4c193ad176bc1cf6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d482db39371937a9e7b2e005f697cbbe1594edbf087f7f4c193ad176bc1cf6ea->leave($__internal_d482db39371937a9e7b2e005f697cbbe1594edbf087f7f4c193ad176bc1cf6ea_prof);

        
        $__internal_b7cd5c62b3a204d72ad23eba467d91665799670011c688ec949ddca4d488c046->leave($__internal_b7cd5c62b3a204d72ad23eba467d91665799670011c688ec949ddca4d488c046_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e67e7c289b848c06bcfb466b965273a1588f131e9b89f29f24b15f1487e5e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e67e7c289b848c06bcfb466b965273a1588f131e9b89f29f24b15f1487e5e26->enter($__internal_5e67e7c289b848c06bcfb466b965273a1588f131e9b89f29f24b15f1487e5e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bab345a5d7d9ead1ab4208d33d07b6b9939a18fc2ec30b79174146512b9c120c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab345a5d7d9ead1ab4208d33d07b6b9939a18fc2ec30b79174146512b9c120c->enter($__internal_bab345a5d7d9ead1ab4208d33d07b6b9939a18fc2ec30b79174146512b9c120c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_bab345a5d7d9ead1ab4208d33d07b6b9939a18fc2ec30b79174146512b9c120c->leave($__internal_bab345a5d7d9ead1ab4208d33d07b6b9939a18fc2ec30b79174146512b9c120c_prof);

        
        $__internal_5e67e7c289b848c06bcfb466b965273a1588f131e9b89f29f24b15f1487e5e26->leave($__internal_5e67e7c289b848c06bcfb466b965273a1588f131e9b89f29f24b15f1487e5e26_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/tbichot/Sites/projet-tut-S3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
