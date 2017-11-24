<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
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
        $__internal_8ecb384ebce5af40e314e9f99eed28f1d999a99423e2fb94a8180679554dd44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ecb384ebce5af40e314e9f99eed28f1d999a99423e2fb94a8180679554dd44a->enter($__internal_8ecb384ebce5af40e314e9f99eed28f1d999a99423e2fb94a8180679554dd44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e6b1622de2154800b93c163c996182e6daa0ea6eb8032a00c126b6fd1f8feae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b1622de2154800b93c163c996182e6daa0ea6eb8032a00c126b6fd1f8feae8->enter($__internal_e6b1622de2154800b93c163c996182e6daa0ea6eb8032a00c126b6fd1f8feae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ecb384ebce5af40e314e9f99eed28f1d999a99423e2fb94a8180679554dd44a->leave($__internal_8ecb384ebce5af40e314e9f99eed28f1d999a99423e2fb94a8180679554dd44a_prof);

        
        $__internal_e6b1622de2154800b93c163c996182e6daa0ea6eb8032a00c126b6fd1f8feae8->leave($__internal_e6b1622de2154800b93c163c996182e6daa0ea6eb8032a00c126b6fd1f8feae8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e308a41f8368187dc48c862fc6ab8a3d79aa2668b7654f5f1f6b4c0f4a92f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e308a41f8368187dc48c862fc6ab8a3d79aa2668b7654f5f1f6b4c0f4a92f41->enter($__internal_5e308a41f8368187dc48c862fc6ab8a3d79aa2668b7654f5f1f6b4c0f4a92f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5106248c52801aceec0677bdfd918347fc4d9bf47c5e9fd5540aad88ba6bde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5106248c52801aceec0677bdfd918347fc4d9bf47c5e9fd5540aad88ba6bde9->enter($__internal_a5106248c52801aceec0677bdfd918347fc4d9bf47c5e9fd5540aad88ba6bde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a5106248c52801aceec0677bdfd918347fc4d9bf47c5e9fd5540aad88ba6bde9->leave($__internal_a5106248c52801aceec0677bdfd918347fc4d9bf47c5e9fd5540aad88ba6bde9_prof);

        
        $__internal_5e308a41f8368187dc48c862fc6ab8a3d79aa2668b7654f5f1f6b4c0f4a92f41->leave($__internal_5e308a41f8368187dc48c862fc6ab8a3d79aa2668b7654f5f1f6b4c0f4a92f41_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f5cd7afc81b57adcf51d6ce36d39a1c53f17c789c741d44a9592d114f3d224a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5cd7afc81b57adcf51d6ce36d39a1c53f17c789c741d44a9592d114f3d224a->enter($__internal_5f5cd7afc81b57adcf51d6ce36d39a1c53f17c789c741d44a9592d114f3d224a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d8db9e0f568859b8918d183399fb5cb1308c8a2115b11350e2839effcb7a63e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8db9e0f568859b8918d183399fb5cb1308c8a2115b11350e2839effcb7a63e8->enter($__internal_d8db9e0f568859b8918d183399fb5cb1308c8a2115b11350e2839effcb7a63e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d8db9e0f568859b8918d183399fb5cb1308c8a2115b11350e2839effcb7a63e8->leave($__internal_d8db9e0f568859b8918d183399fb5cb1308c8a2115b11350e2839effcb7a63e8_prof);

        
        $__internal_5f5cd7afc81b57adcf51d6ce36d39a1c53f17c789c741d44a9592d114f3d224a->leave($__internal_5f5cd7afc81b57adcf51d6ce36d39a1c53f17c789c741d44a9592d114f3d224a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad891d9bb96ac3be97a44c66738afb475987a40715f1e76191da574e8e5c6154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad891d9bb96ac3be97a44c66738afb475987a40715f1e76191da574e8e5c6154->enter($__internal_ad891d9bb96ac3be97a44c66738afb475987a40715f1e76191da574e8e5c6154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6924243d107652028fbb51380c71bb204faf527750be0b95ee665088282e755f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6924243d107652028fbb51380c71bb204faf527750be0b95ee665088282e755f->enter($__internal_6924243d107652028fbb51380c71bb204faf527750be0b95ee665088282e755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_6924243d107652028fbb51380c71bb204faf527750be0b95ee665088282e755f->leave($__internal_6924243d107652028fbb51380c71bb204faf527750be0b95ee665088282e755f_prof);

        
        $__internal_ad891d9bb96ac3be97a44c66738afb475987a40715f1e76191da574e8e5c6154->leave($__internal_ad891d9bb96ac3be97a44c66738afb475987a40715f1e76191da574e8e5c6154_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/tbichot/Sites/projet-tut-S3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
