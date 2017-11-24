<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_b450faceba025aba639d7074c65ea6a160cca144989b673c4c0f6818b5ae82c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Security:login.html.twig", 1);
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
        $__internal_c660f60835c9ca0dcd6cd728c6146b2de515b73c3edc0383b444e110a73a8536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c660f60835c9ca0dcd6cd728c6146b2de515b73c3edc0383b444e110a73a8536->enter($__internal_c660f60835c9ca0dcd6cd728c6146b2de515b73c3edc0383b444e110a73a8536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_af654c38473214d052e058671cb16f3a7a1c12f0a038b94bb02188ecd803ea88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af654c38473214d052e058671cb16f3a7a1c12f0a038b94bb02188ecd803ea88->enter($__internal_af654c38473214d052e058671cb16f3a7a1c12f0a038b94bb02188ecd803ea88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c660f60835c9ca0dcd6cd728c6146b2de515b73c3edc0383b444e110a73a8536->leave($__internal_c660f60835c9ca0dcd6cd728c6146b2de515b73c3edc0383b444e110a73a8536_prof);

        
        $__internal_af654c38473214d052e058671cb16f3a7a1c12f0a038b94bb02188ecd803ea88->leave($__internal_af654c38473214d052e058671cb16f3a7a1c12f0a038b94bb02188ecd803ea88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e60afa719c6498176c06f1c399f79b039df53279b6c9827ec1975fffe3e62a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60afa719c6498176c06f1c399f79b039df53279b6c9827ec1975fffe3e62a31->enter($__internal_e60afa719c6498176c06f1c399f79b039df53279b6c9827ec1975fffe3e62a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1346247f326774aa40a90737b2f3270dc02b3c17b8c76561a0bb9c06770f47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1346247f326774aa40a90737b2f3270dc02b3c17b8c76561a0bb9c06770f47a->enter($__internal_e1346247f326774aa40a90737b2f3270dc02b3c17b8c76561a0bb9c06770f47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        echo "
  <div style=\"width: 100%;\">
    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\" style=\"width:400px;display:table; margin:auto;\" >
      <div class=\"sign-in-form\">
        <h4 class=\"text-center\">Connexion</h4>
        <label for=\"username\">Nom d'utilisateur</label>
        <input type=\"text\" name=\"_username\" id=\"username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"sign-in-form-username\"/>
        <label for=\"password\">Mot de passe</label>
        <input type=\"password\" name=\"_password\" id=\"password\" class=\"sign-in-form-password\"/>
          ";
        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "            <div class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 17, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</div>
          ";
        }
        // line 19
        echo "        <br>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <input type=\"submit\" style=\"color: white\" name=\"connexion\" class=\"sign-in-form-button\" value=\"Connexion\"/>

      </div>
    </form>
  </div>

";
        
        $__internal_e1346247f326774aa40a90737b2f3270dc02b3c17b8c76561a0bb9c06770f47a->leave($__internal_e1346247f326774aa40a90737b2f3270dc02b3c17b8c76561a0bb9c06770f47a_prof);

        
        $__internal_e60afa719c6498176c06f1c399f79b039df53279b6c9827ec1975fffe3e62a31->leave($__internal_e60afa719c6498176c06f1c399f79b039df53279b6c9827ec1975fffe3e62a31_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_90c0f871c642023cd6b9726ec7876ace3dcc3727d3bd7ab3e4cb48e592f3607e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c0f871c642023cd6b9726ec7876ace3dcc3727d3bd7ab3e4cb48e592f3607e->enter($__internal_90c0f871c642023cd6b9726ec7876ace3dcc3727d3bd7ab3e4cb48e592f3607e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_357484b17b01a8e8ed26c2bb48ae3ca7f2193ee425f1de2f19dd0bf15436df1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357484b17b01a8e8ed26c2bb48ae3ca7f2193ee425f1de2f19dd0bf15436df1e->enter($__internal_357484b17b01a8e8ed26c2bb48ae3ca7f2193ee425f1de2f19dd0bf15436df1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_357484b17b01a8e8ed26c2bb48ae3ca7f2193ee425f1de2f19dd0bf15436df1e->leave($__internal_357484b17b01a8e8ed26c2bb48ae3ca7f2193ee425f1de2f19dd0bf15436df1e_prof);

        
        $__internal_90c0f871c642023cd6b9726ec7876ace3dcc3727d3bd7ab3e4cb48e592f3607e->leave($__internal_90c0f871c642023cd6b9726ec7876ace3dcc3727d3bd7ab3e4cb48e592f3607e_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28ad8cbfc8656f331cf5125901fcc89bc016468e43985ddbba3f5eef93b9fca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ad8cbfc8656f331cf5125901fcc89bc016468e43985ddbba3f5eef93b9fca1->enter($__internal_28ad8cbfc8656f331cf5125901fcc89bc016468e43985ddbba3f5eef93b9fca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ce23ce3271cd3a104d12fe2188cba5930fbd676b96d118204e341f8181236f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce23ce3271cd3a104d12fe2188cba5930fbd676b96d118204e341f8181236f1b->enter($__internal_ce23ce3271cd3a104d12fe2188cba5930fbd676b96d118204e341f8181236f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "  <style>
    body, html {
      width: 100%;
      height: 100%;
      position: absolute;
      margin: 0;
      padding: 0;
      display:table;
    }
    body {
      vertical-align:middle;
    }
    form {
      display:table;/* shrinks to fit content */
      margin:auto;
    }
  </style>

";
        
        $__internal_ce23ce3271cd3a104d12fe2188cba5930fbd676b96d118204e341f8181236f1b->leave($__internal_ce23ce3271cd3a104d12fe2188cba5930fbd676b96d118204e341f8181236f1b_prof);

        
        $__internal_28ad8cbfc8656f331cf5125901fcc89bc016468e43985ddbba3f5eef93b9fca1->leave($__internal_28ad8cbfc8656f331cf5125901fcc89bc016468e43985ddbba3f5eef93b9fca1_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 30,  121 => 29,  103 => 4,  85 => 20,  82 => 19,  76 => 17,  74 => 16,  68 => 13,  61 => 9,  57 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
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
      position: absolute;
      margin: 0;
      padding: 0;
      display:table;
    }
    body {
      vertical-align:middle;
    }
    form {
      display:table;/* shrinks to fit content */
      margin:auto;
    }
  </style>

{% endblock %}", "UserBundle:Security:login.html.twig", "/Users/tbichot/Sites/projet-tut-S3/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
