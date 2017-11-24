<?php

/* AdminBundle:Default:admin.html.twig */
class __TwigTemplate_c4d163e584f2c47c5e29064cb8b73a731d565ceb52ae6884dab414993900eb72 extends Twig_Template
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
        $__internal_71b0574a45a820e3cda7f17241fd2806a9c16e22cd1e368b77f8a573d8b57ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b0574a45a820e3cda7f17241fd2806a9c16e22cd1e368b77f8a573d8b57ae1->enter($__internal_71b0574a45a820e3cda7f17241fd2806a9c16e22cd1e368b77f8a573d8b57ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:admin.html.twig"));

        $__internal_b6210064fa1e90c8ea41b56739eb80f16a46fa28e3847e7fffba76c1b22d042b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6210064fa1e90c8ea41b56739eb80f16a46fa28e3847e7fffba76c1b22d042b->enter($__internal_b6210064fa1e90c8ea41b56739eb80f16a46fa28e3847e7fffba76c1b22d042b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:admin.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fruxfoundation/css/foundation.css"), "html", null, true);
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
<body style=\"background-color: #e4e4e6\">
";
        // line 16
        $this->loadTemplate("menuAdmin.html.twig", "AdminBundle:Default:admin.html.twig", 16)->display($context);
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "</body>
</html>

";
        
        $__internal_71b0574a45a820e3cda7f17241fd2806a9c16e22cd1e368b77f8a573d8b57ae1->leave($__internal_71b0574a45a820e3cda7f17241fd2806a9c16e22cd1e368b77f8a573d8b57ae1_prof);

        
        $__internal_b6210064fa1e90c8ea41b56739eb80f16a46fa28e3847e7fffba76c1b22d042b->leave($__internal_b6210064fa1e90c8ea41b56739eb80f16a46fa28e3847e7fffba76c1b22d042b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4af49f6a7d1bf8852b499e154bcb3a1cacafbe8fb8cdc2a8a595135373f696b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4af49f6a7d1bf8852b499e154bcb3a1cacafbe8fb8cdc2a8a595135373f696b->enter($__internal_c4af49f6a7d1bf8852b499e154bcb3a1cacafbe8fb8cdc2a8a595135373f696b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a514e7e65818e66c02eaba14677763c003e0bce2bb575d4141f7d1c68620169b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a514e7e65818e66c02eaba14677763c003e0bce2bb575d4141f7d1c68620169b->enter($__internal_a514e7e65818e66c02eaba14677763c003e0bce2bb575d4141f7d1c68620169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration";
        
        $__internal_a514e7e65818e66c02eaba14677763c003e0bce2bb575d4141f7d1c68620169b->leave($__internal_a514e7e65818e66c02eaba14677763c003e0bce2bb575d4141f7d1c68620169b_prof);

        
        $__internal_c4af49f6a7d1bf8852b499e154bcb3a1cacafbe8fb8cdc2a8a595135373f696b->leave($__internal_c4af49f6a7d1bf8852b499e154bcb3a1cacafbe8fb8cdc2a8a595135373f696b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_667eee4635012f6969d9d0f01285cab6ea6baa87876df96a75f46c2b3196365d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667eee4635012f6969d9d0f01285cab6ea6baa87876df96a75f46c2b3196365d->enter($__internal_667eee4635012f6969d9d0f01285cab6ea6baa87876df96a75f46c2b3196365d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_03852fe504023ae3025c98bf6c0c7723f911fa977d652fb7a72a3dd0a3298699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03852fe504023ae3025c98bf6c0c7723f911fa977d652fb7a72a3dd0a3298699->enter($__internal_03852fe504023ae3025c98bf6c0c7723f911fa977d652fb7a72a3dd0a3298699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_03852fe504023ae3025c98bf6c0c7723f911fa977d652fb7a72a3dd0a3298699->leave($__internal_03852fe504023ae3025c98bf6c0c7723f911fa977d652fb7a72a3dd0a3298699_prof);

        
        $__internal_667eee4635012f6969d9d0f01285cab6ea6baa87876df96a75f46c2b3196365d->leave($__internal_667eee4635012f6969d9d0f01285cab6ea6baa87876df96a75f46c2b3196365d_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_a643d34b993314449b29c6e6bc7435022966a0a94b3f9fd45d97ec08add83f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a643d34b993314449b29c6e6bc7435022966a0a94b3f9fd45d97ec08add83f1b->enter($__internal_a643d34b993314449b29c6e6bc7435022966a0a94b3f9fd45d97ec08add83f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25b465ca982ccc110de2d57e13d70806216cca436c32a0257c1ae97dfd9224a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b465ca982ccc110de2d57e13d70806216cca436c32a0257c1ae97dfd9224a4->enter($__internal_25b465ca982ccc110de2d57e13d70806216cca436c32a0257c1ae97dfd9224a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div style=\"height: 100%; width: auto;\">
        <div style=\"text-align: center; padding-top: 20px\"><h1>HOME</h1></div>
        <div style=\"display: flex; justify-content: space-between; padding-top: 20px; padding-left: 10%; padding-right: 10%;\">
            <button type=\"button\" class=\"button\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); font-size: 20px;width: 250px; height: 150px; border-radius: 10px;\">Modifier la galerie</button>
            <button type=\"button\" class=\"button\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); font-size: 20px;width: 250px; height: 150px; border-radius: 10px;\">Modifier le blog</button>
            <button type=\"button\" class=\"button\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); font-size: 20px;width: 250px; height: 150px; border-radius: 10px;\">Modifier les évenements</button>
        </div>
        <div class=\"row\" style=\"display: flex; padding-top: 50px; height: auto\">
            <div class=\"columns\">
                <h2 style=\"font-size: 40px\"> Commentaires récents - </h2>
                <a href=\"#\" style=\"font-size: 20px;\">Afficher tous les commentaires</a>
                <table class=\"stack\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); \">
                    <thead>
                    <tr>
                        <th width=\"50\">Pseudo</th>
                        <th width=\"250\">Mail</th>
                        <th>Commentaires</th>
                        <th width=\"100\">Type</th>
                        <th width=\"100\">Titre</th>
                        <th width=\"60\">Date</th>
                        <th width=\"100\">Opérations</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Thomas</td>
                        <td>thomas.orange@gmail.com</td>
                        <td>This is longer content Donec id elit non mi porta gravida at eget metus. This is longer content Donec id elit non mi porta gravida at eget metus.</td>
                        <td>Tableau</td>
                        <td>\"Couché de soleil\" <a>Voir</a></td>
                        <td>12/10/2017 18:30</td>
                        <td>
                           <button type=\"button\" style=\"color:dodgerblue\">Répondre</button>
                            <button type=\"button\" style=\"color:red\">Supprimer</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <h2>Demande de tableau</h2>
                <a href=\"#\" style=\"font-size: 20px;\">Afficher toutes les demandes</a>
                <table class=\"stack\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); \">
                    <thead>
                    <tr>
                        <th width=\"50\">Pseudo</th>
                        <th width=\"250\">Mail</th>
                        <th>Message</th>
                        <th width=\"150\">Tableau</th>
                        <th width=\"60\">Date</th>
                        <th width=\"100\">Opérations</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Thomas</td>
                        <td>thomas.orange@gmail.com</td>
                        <td>This is longer content Donec id elit non mi porta gravida at eget metus. This is longer content Donec id elit non mi porta gravida at eget metus.</td>
                        <td><a>Voir le tableau</a></td>
                        <td>12/10/2017 18:30</td>
                        <td>
                            <button type=\"button\" style=\"color:dodgerblue\">Répondre</button>
                            <button type=\"button\" style=\"color:red\">Supprimer</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>



    </div>


";
        
        $__internal_25b465ca982ccc110de2d57e13d70806216cca436c32a0257c1ae97dfd9224a4->leave($__internal_25b465ca982ccc110de2d57e13d70806216cca436c32a0257c1ae97dfd9224a4_prof);

        
        $__internal_a643d34b993314449b29c6e6bc7435022966a0a94b3f9fd45d97ec08add83f1b->leave($__internal_a643d34b993314449b29c6e6bc7435022966a0a94b3f9fd45d97ec08add83f1b_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c9c68e22c995de3d0ccf4e040ae3cf4e6bd082137a0efc433632fec074755e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9c68e22c995de3d0ccf4e040ae3cf4e6bd082137a0efc433632fec074755e4->enter($__internal_3c9c68e22c995de3d0ccf4e040ae3cf4e6bd082137a0efc433632fec074755e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e99850a8104dbc47c9b75278db6d8f085a74512f1fc81253c7e867cd58521f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e99850a8104dbc47c9b75278db6d8f085a74512f1fc81253c7e867cd58521f7->enter($__internal_3e99850a8104dbc47c9b75278db6d8f085a74512f1fc81253c7e867cd58521f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e99850a8104dbc47c9b75278db6d8f085a74512f1fc81253c7e867cd58521f7->leave($__internal_3e99850a8104dbc47c9b75278db6d8f085a74512f1fc81253c7e867cd58521f7_prof);

        
        $__internal_3c9c68e22c995de3d0ccf4e040ae3cf4e6bd082137a0efc433632fec074755e4->leave($__internal_3c9c68e22c995de3d0ccf4e040ae3cf4e6bd082137a0efc433632fec074755e4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 92,  135 => 18,  126 => 17,  109 => 6,  91 => 5,  78 => 93,  76 => 92,  74 => 17,  72 => 16,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta chæarset=\"UTF-8\" />
    <title>{% block title %}Administration{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/fruxfoundation/css/foundation.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/style.css') }}\" />
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fruxfoundation/js/vendor/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fruxfoundation/js/vendor/what-input.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fruxfoundation/js/foundation.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/fruxfoundation/js/app.js') }}\"></script>
</head>
<body style=\"background-color: #e4e4e6\">
{% include \"menuAdmin.html.twig\" %}
{% block body %}
    <div style=\"height: 100%; width: auto;\">
        <div style=\"text-align: center; padding-top: 20px\"><h1>HOME</h1></div>
        <div style=\"display: flex; justify-content: space-between; padding-top: 20px; padding-left: 10%; padding-right: 10%;\">
            <button type=\"button\" class=\"button\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); font-size: 20px;width: 250px; height: 150px; border-radius: 10px;\">Modifier la galerie</button>
            <button type=\"button\" class=\"button\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); font-size: 20px;width: 250px; height: 150px; border-radius: 10px;\">Modifier le blog</button>
            <button type=\"button\" class=\"button\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); font-size: 20px;width: 250px; height: 150px; border-radius: 10px;\">Modifier les évenements</button>
        </div>
        <div class=\"row\" style=\"display: flex; padding-top: 50px; height: auto\">
            <div class=\"columns\">
                <h2 style=\"font-size: 40px\"> Commentaires récents - </h2>
                <a href=\"#\" style=\"font-size: 20px;\">Afficher tous les commentaires</a>
                <table class=\"stack\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); \">
                    <thead>
                    <tr>
                        <th width=\"50\">Pseudo</th>
                        <th width=\"250\">Mail</th>
                        <th>Commentaires</th>
                        <th width=\"100\">Type</th>
                        <th width=\"100\">Titre</th>
                        <th width=\"60\">Date</th>
                        <th width=\"100\">Opérations</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Thomas</td>
                        <td>thomas.orange@gmail.com</td>
                        <td>This is longer content Donec id elit non mi porta gravida at eget metus. This is longer content Donec id elit non mi porta gravida at eget metus.</td>
                        <td>Tableau</td>
                        <td>\"Couché de soleil\" <a>Voir</a></td>
                        <td>12/10/2017 18:30</td>
                        <td>
                           <button type=\"button\" style=\"color:dodgerblue\">Répondre</button>
                            <button type=\"button\" style=\"color:red\">Supprimer</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <h2>Demande de tableau</h2>
                <a href=\"#\" style=\"font-size: 20px;\">Afficher toutes les demandes</a>
                <table class=\"stack\" style=\"box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); \">
                    <thead>
                    <tr>
                        <th width=\"50\">Pseudo</th>
                        <th width=\"250\">Mail</th>
                        <th>Message</th>
                        <th width=\"150\">Tableau</th>
                        <th width=\"60\">Date</th>
                        <th width=\"100\">Opérations</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Thomas</td>
                        <td>thomas.orange@gmail.com</td>
                        <td>This is longer content Donec id elit non mi porta gravida at eget metus. This is longer content Donec id elit non mi porta gravida at eget metus.</td>
                        <td><a>Voir le tableau</a></td>
                        <td>12/10/2017 18:30</td>
                        <td>
                            <button type=\"button\" style=\"color:dodgerblue\">Répondre</button>
                            <button type=\"button\" style=\"color:red\">Supprimer</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>



    </div>


{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>

", "AdminBundle:Default:admin.html.twig", "/Users/tbichot/Sites/projet-tut-S3/src/AdminBundle/Resources/views/Default/admin.html.twig");
    }
}
