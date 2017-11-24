<?php

/* default/admin.html.twig */
class __TwigTemplate_492c694432f69801916522447cf4cdb6a03c36018b5ae4c6f9b34075e87b5d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div style=\"text-align: center; margin-top: 100px\">
        <h1>Site en construction !</h1>
    </div>
    <div style=\"text-align: center; margin-top: 100px;\">
        <a class=\"sign-in-form-button\" style=\"color: black; border: 1px solid black; width: 100px;\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Connexion</a>
    </div>

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  46 => 13,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/admin.html.twig", "/Users/tbichot/Sites/projet-tut-S3/app/Resources/views/default/admin.html.twig");
    }
}
