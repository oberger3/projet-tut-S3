<?php

/* UserBundle:Security:v_login.html.twig */
class __TwigTemplate_3dafc823f416bfe01b18ba7bb628a970f743f7c1a419a470e579ec65caa73239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Security:v_login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af828d8a7d4e461f539a37ad4d836d23ded93cc7f5377f8816c2e11ba8127935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af828d8a7d4e461f539a37ad4d836d23ded93cc7f5377f8816c2e11ba8127935->enter($__internal_af828d8a7d4e461f539a37ad4d836d23ded93cc7f5377f8816c2e11ba8127935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:v_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af828d8a7d4e461f539a37ad4d836d23ded93cc7f5377f8816c2e11ba8127935->leave($__internal_af828d8a7d4e461f539a37ad4d836d23ded93cc7f5377f8816c2e11ba8127935_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f11a12d23bf666af6ff1d0154b8c09ff8eadc1d7c2fd2c0228aac611443d1022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11a12d23bf666af6ff1d0154b8c09ff8eadc1d7c2fd2c0228aac611443d1022->enter($__internal_f11a12d23bf666af6ff1d0154b8c09ff8eadc1d7c2fd2c0228aac611443d1022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        echo "

    <div style=\"width: 100%;\">
        <form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\" style=\"width:400px;display:table; margin:auto;\" >
            <div class=\"sign-in-form\">
                <h4 class=\"text-center\">Connexion</h4>
                <label for=\"username\">Nom d'utilisateur</label>
                <input type=\"text\" name=\"_username\" id=\"username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sign-in-form-username\"/>
                <label for=\"password\">Mot de passe</label>
                <input type=\"password\" name=\"_password\" id=\"password\" class=\"sign-in-form-password\"/>
                ";
        // line 17
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 17, $this->getSourceContext()); })())) {
            // line 18
            echo "                    <div class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 18, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</div>
                ";
        }
        // line 20
        echo "                <br>
                <input type=\"submit\" style=\"color: white\" name=\"connexion\" class=\"sign-in-form-button\" value=\"Connexion\"/>

            </div>
        </form>
    </div>

";
        
        $__internal_f11a12d23bf666af6ff1d0154b8c09ff8eadc1d7c2fd2c0228aac611443d1022->leave($__internal_f11a12d23bf666af6ff1d0154b8c09ff8eadc1d7c2fd2c0228aac611443d1022_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d5eaa23543941759d3e59fb8053feeb19a388aaab31d39720d53ed17d4853d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5eaa23543941759d3e59fb8053feeb19a388aaab31d39720d53ed17d4853d1->enter($__internal_0d5eaa23543941759d3e59fb8053feeb19a388aaab31d39720d53ed17d4853d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_0d5eaa23543941759d3e59fb8053feeb19a388aaab31d39720d53ed17d4853d1->leave($__internal_0d5eaa23543941759d3e59fb8053feeb19a388aaab31d39720d53ed17d4853d1_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f893a2b620b332f157213700b01cb18c5d3e9ef8114212f4c93dedca2b98c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f893a2b620b332f157213700b01cb18c5d3e9ef8114212f4c93dedca2b98c94->enter($__internal_7f893a2b620b332f157213700b01cb18c5d3e9ef8114212f4c93dedca2b98c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "    <style>
        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            display:table;
        }
        body {
            display:table-cell;
            vertical-align:middle;
        }
        form {
            display:table;/* shrinks to fit content */
            margin:auto;
        }
    </style>

";
        
        $__internal_7f893a2b620b332f157213700b01cb18c5d3e9ef8114212f4c93dedca2b98c94->leave($__internal_7f893a2b620b332f157213700b01cb18c5d3e9ef8114212f4c93dedca2b98c94_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:v_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  100 => 29,  88 => 4,  74 => 20,  68 => 18,  66 => 17,  60 => 14,  53 => 10,  48 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <title>{% block title %}Login{% endblock %}</title>

    {# S'il y a une erreur, on l'affiche dans un joli cadre #}


    <div style=\"width: 100%;\">
        <form action=\"{{ path('login_check') }}\" method=\"post\" style=\"width:400px;display:table; margin:auto;\" >
            <div class=\"sign-in-form\">
                <h4 class=\"text-center\">Connexion</h4>
                <label for=\"username\">Nom d'utilisateur</label>
                <input type=\"text\" name=\"_username\" id=\"username\" value=\"{{ last_username }}\" class=\"sign-in-form-username\"/>
                <label for=\"password\">Mot de passe</label>
                <input type=\"password\" name=\"_password\" id=\"password\" class=\"sign-in-form-password\"/>
                {% if error %}
                    <div class=\"error\">{{ error.message }}</div>
                {% endif %}
                <br>
                <input type=\"submit\" style=\"color: white\" name=\"connexion\" class=\"sign-in-form-button\" value=\"Connexion\"/>

            </div>
        </form>
    </div>

{% endblock %}

{% block stylesheets %}
    <style>
        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            display:table;
        }
        body {
            display:table-cell;
            vertical-align:middle;
        }
        form {
            display:table;/* shrinks to fit content */
            margin:auto;
        }
    </style>

{% endblock %}", "UserBundle:Security:v_login.html.twig", "/Users/tbichot/Sites/projet-tut-S3/src/UserBundle/Resources/views/Security/v_login.html.twig");
    }
}
