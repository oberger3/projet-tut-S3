<?php

/* menuAdmin.html.twig */
class __TwigTemplate_2de207ae05ea0928a370e997e6ece6413991b536a8198cd8a4f2a888e56f829a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bbb361c24126b3d0a5ab38cc207fd14631a55dd40b7669816960fca8ae9a8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbb361c24126b3d0a5ab38cc207fd14631a55dd40b7669816960fca8ae9a8b3->enter($__internal_2bbb361c24126b3d0a5ab38cc207fd14631a55dd40b7669816960fca8ae9a8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuAdmin.html.twig"));

        $__internal_a98951d2a914988f2bbe247a9aa03c4ee0eac0159a5503184ae503e120753cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98951d2a914988f2bbe247a9aa03c4ee0eac0159a5503184ae503e120753cf8->enter($__internal_a98951d2a914988f2bbe247a9aa03c4ee0eac0159a5503184ae503e120753cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuAdmin.html.twig"));

        // line 1
        echo "<ul class=\"vertical menu\" style=\"float: left;box-shadow: 0 0px 10px rgba(0, 0, 0, 0.2); padding-top:10px;position: relative;background-color: white; width: 250px; height: 100%;text-align: left;\">
    <h4><li style=\"text-align: center; font-weight: 500;\"><a style=\"color: black\" href=\"\">Administration</a></li></h4>
        <li><a href=\"#\">Home</a></li>
        <li><a href=\"#\">Galerie</a></li>
        <li><a href=\"#\">Blog</a></li>
        <li><a href=\"#\">Evenement</a></li>
        <li style=\"border-top: solid 1px lightgrey; clear: both;height: 1px; width: 75%; margin-right: auto; margin-left: auto\"></li>
        <li><a style=\"\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accéder au site</a></li>
        <li><a style=\"margin-bottom:20px; font-weight: bold; color: red; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Deconnexion</a></li>
</ul>
";
        
        $__internal_2bbb361c24126b3d0a5ab38cc207fd14631a55dd40b7669816960fca8ae9a8b3->leave($__internal_2bbb361c24126b3d0a5ab38cc207fd14631a55dd40b7669816960fca8ae9a8b3_prof);

        
        $__internal_a98951d2a914988f2bbe247a9aa03c4ee0eac0159a5503184ae503e120753cf8->leave($__internal_a98951d2a914988f2bbe247a9aa03c4ee0eac0159a5503184ae503e120753cf8_prof);

    }

    public function getTemplateName()
    {
        return "menuAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  34 => 8,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"vertical menu\" style=\"float: left;box-shadow: 0 0px 10px rgba(0, 0, 0, 0.2); padding-top:10px;position: relative;background-color: white; width: 250px; height: 100%;text-align: left;\">
    <h4><li style=\"text-align: center; font-weight: 500;\"><a style=\"color: black\" href=\"\">Administration</a></li></h4>
        <li><a href=\"#\">Home</a></li>
        <li><a href=\"#\">Galerie</a></li>
        <li><a href=\"#\">Blog</a></li>
        <li><a href=\"#\">Evenement</a></li>
        <li style=\"border-top: solid 1px lightgrey; clear: both;height: 1px; width: 75%; margin-right: auto; margin-left: auto\"></li>
        <li><a style=\"\" href=\"{{ path(\"homepage\") }}\">Accéder au site</a></li>
        <li><a style=\"margin-bottom:20px; font-weight: bold; color: red; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);\" href=\"{{ path(\"logout\") }}\">Deconnexion</a></li>
</ul>
", "menuAdmin.html.twig", "/Users/tbichot/Sites/projet-tut-S3/app/Resources/views/menuAdmin.html.twig");
    }
}
