<?php

/* administration/v_login.html.twig */
class __TwigTemplate_759fe412c6679fd734a298801438126b58ef23eff58bc4ce2f61acf2021cba13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "administration/v_login.html.twig", 1);
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
        echo "    <form>
        <div class=\"sign-in-form\">
            <h4 class=\"text-center\">Connexion</h4>
            <label for=\"sign-in-form-username\">Nom d'utilisateur</label>
            <input type=\"text\" class=\"sign-in-form-username\" id=\"sign-in-form-username\">
            <label for=\"sign-in-form-password\">Mot de passe</label>
            <input type=\"text\" class=\"sign-in-form-password\" id=\"sign-in-form-password\">
            <button type=\"submit\" style=\"\" class=\"sign-in-form-button\">Connexion</button>
        </div>
    </form>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "administration/v_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administration/v_login.html.twig", "/Users/tbichot/Sites/projet-tut-S3/app/Resources/views/administration/v_login.html.twig");
    }
}
