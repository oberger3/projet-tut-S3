<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0f1be204ceced4cfd44d98769ef2510749b3f53cde97aff3e27218d837c50d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f1be204ceced4cfd44d98769ef2510749b3f53cde97aff3e27218d837c50d4->enter($__internal_a0f1be204ceced4cfd44d98769ef2510749b3f53cde97aff3e27218d837c50d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8cccf646c2e2f552532ab81a624d16b3d6f4eda049c742ae6f3f132a7735658c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cccf646c2e2f552532ab81a624d16b3d6f4eda049c742ae6f3f132a7735658c->enter($__internal_8cccf646c2e2f552532ab81a624d16b3d6f4eda049c742ae6f3f132a7735658c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0f1be204ceced4cfd44d98769ef2510749b3f53cde97aff3e27218d837c50d4->leave($__internal_a0f1be204ceced4cfd44d98769ef2510749b3f53cde97aff3e27218d837c50d4_prof);

        
        $__internal_8cccf646c2e2f552532ab81a624d16b3d6f4eda049c742ae6f3f132a7735658c->leave($__internal_8cccf646c2e2f552532ab81a624d16b3d6f4eda049c742ae6f3f132a7735658c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_147e89c0b5f4371983c5f2bb2db81eb4b3c19855fdf26dd2e843a541a271e40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147e89c0b5f4371983c5f2bb2db81eb4b3c19855fdf26dd2e843a541a271e40f->enter($__internal_147e89c0b5f4371983c5f2bb2db81eb4b3c19855fdf26dd2e843a541a271e40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5741cc4d776bddf2f6da66f1cc5d2a8f3b0d1ba19c2c39a05fc77f44d002dad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5741cc4d776bddf2f6da66f1cc5d2a8f3b0d1ba19c2c39a05fc77f44d002dad9->enter($__internal_5741cc4d776bddf2f6da66f1cc5d2a8f3b0d1ba19c2c39a05fc77f44d002dad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5741cc4d776bddf2f6da66f1cc5d2a8f3b0d1ba19c2c39a05fc77f44d002dad9->leave($__internal_5741cc4d776bddf2f6da66f1cc5d2a8f3b0d1ba19c2c39a05fc77f44d002dad9_prof);

        
        $__internal_147e89c0b5f4371983c5f2bb2db81eb4b3c19855fdf26dd2e843a541a271e40f->leave($__internal_147e89c0b5f4371983c5f2bb2db81eb4b3c19855fdf26dd2e843a541a271e40f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/tbichot/Sites/projet-tut-S3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
