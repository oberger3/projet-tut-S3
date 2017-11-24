<?php

/* administration/v_login.html.twig */
class __TwigTemplate_96251a13bb93c9a2e17bc24b95e4ca18838cb1145d9b4b3d429e477243691c41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "administration/v_login.html.twig", 2);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
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
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "    <form method=\"post\" action=\"";
        echo "\">

        <div class=\"row\">

            <fieldset>
                <legend>Se connecter :</legend>
                <label>Login :
                    <input name=\"login\"  type=\"text\"  size=\"18\" value=\"\" />
                </label>

                <label>Password :
                    <input name=\"password\"  type=\"text\"  size=\"18\" value=\"\" />
                </label>
                ";
        // line 17
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "erreur"), "method"))) {
            // line 18
            echo "                    <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "erreur"), "method"), "html", null, true);
            echo "</div>
                ";
        }
        // line 20
        echo "                <div style=\"margin-left: auto; margin-right: auto; width: 200px;\">
                    <input type=\"hidden\" id=\"_method\" name=\"_method\" value=\"post\" />
                    <input type=\"hidden\"   name=\"_csrf_token\"   value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("csrf_token"), "html", null, true);
        echo "\">
                    <input class=\"button\" style=\"border-radius: 6px; width: 200px\" type=\"submit\" name=\"seConnecter\" value=\"Se connecter\" />
                </div>
            </fieldset>
        </div>
    </form>

";
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
        return array (  59 => 22,  55 => 20,  49 => 18,  47 => 17,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "administration/v_login.html.twig", "/Users/tbichot/Sites/projet-tut-S3/app/Resources/views/administration/v_login.html.twig");
    }
}
