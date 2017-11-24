<?php

/* default/index.html.twig */
class __TwigTemplate_415f368335f6820b864a3497c430a08c137ee3fa5f61156db2b006df476f0f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_a659a6666fdbea27faf96cf7ea7c9f818f093663dfe42d9992a759af053a5e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a659a6666fdbea27faf96cf7ea7c9f818f093663dfe42d9992a759af053a5e4d->enter($__internal_a659a6666fdbea27faf96cf7ea7c9f818f093663dfe42d9992a759af053a5e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_577e8b6d0fecf545e5b262ea2ae8cff30b73a82dfe54a61a68711a1c891ecf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577e8b6d0fecf545e5b262ea2ae8cff30b73a82dfe54a61a68711a1c891ecf5e->enter($__internal_577e8b6d0fecf545e5b262ea2ae8cff30b73a82dfe54a61a68711a1c891ecf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a659a6666fdbea27faf96cf7ea7c9f818f093663dfe42d9992a759af053a5e4d->leave($__internal_a659a6666fdbea27faf96cf7ea7c9f818f093663dfe42d9992a759af053a5e4d_prof);

        
        $__internal_577e8b6d0fecf545e5b262ea2ae8cff30b73a82dfe54a61a68711a1c891ecf5e->leave($__internal_577e8b6d0fecf545e5b262ea2ae8cff30b73a82dfe54a61a68711a1c891ecf5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6205f4dc4081e708ac83b93a6ce4e44c0a34d28be02e223c012b7458a7c6b988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6205f4dc4081e708ac83b93a6ce4e44c0a34d28be02e223c012b7458a7c6b988->enter($__internal_6205f4dc4081e708ac83b93a6ce4e44c0a34d28be02e223c012b7458a7c6b988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_abb8b03bdbd7fb546a883544cabc07a67849594f256622c9ddc9c702ae5b4370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb8b03bdbd7fb546a883544cabc07a67849594f256622c9ddc9c702ae5b4370->enter($__internal_abb8b03bdbd7fb546a883544cabc07a67849594f256622c9ddc9c702ae5b4370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        /*Time for the CSS*/
        * {margin: 0; padding: 0;}
        body {background: #fff;}

        .slider{
            width: 640px; /*Same as width of the large image*/
            position: relative;
            /*Instead of height we will use padding*/
            padding-top: 320px; /*That helps bring the labels down*/

            margin: 100px auto;

            /*Lets add a shadow*/
            box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75);
        }


        /*Last thing remaining is to add transitions*/
        .slider>img{
            position: absolute;
            left: 0; top: 0;
            transition: all 0.5s;
        }

        .slider input[name='slide_switch'] {
            display: none;
        }

        .slider label {
            /*Lets add some spacing for the thumbnails*/
            margin: 18px 0 0 18px;
            border: 3px solid #999;

            float: left;
            cursor: pointer;
            transition: all 0.5s;

            /*Default style = low opacity*/
            opacity: 0.6;
        }

        .slider label img{
            display: block;
        }

        /*Time to add the click effects*/
        .slider input[name='slide_switch']:checked+label {
            border-color: #666;
            opacity: 1;
        }
        /*Clicking any thumbnail now should change its opacity(style)*/
        /*Time to work on the main images*/
        .slider input[name='slide_switch'] ~ img {
            opacity: 0;
            transform: scale(1.1);
        }
        /*That hides all main images at a 110% size
        On click the images will be displayed at normal size to complete the effect
        */
        .slider input[name='slide_switch']:checked+label+img {
            opacity: 1;
            transform: scale(1);
        }
        /*Clicking on any thumbnail now should activate the image related to it*/

        /*We are done :)*/
    </style>
    <div style=\"font-size: 40px; text-align: center; margin-top: 20px\" >Les derniers tableaux</div>
    <div class=\"slider\" style=\"margin-top: 20px\">
        <input type=\"radio\" name=\"slide_switch\" id=\"id1\"/>
        <label for=\"id1\">
            <img src=\"http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg\" width=\"100\"/>
        </label>
        <img src=\"http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg\"/>

        <!--Lets show the second image by default on page load-->
        <input type=\"radio\" name=\"slide_switch\" id=\"id2\" checked=\"checked\"/>
        <label for=\"id2\">
            <img src=\"http://thecodeplayer.com/uploads/media/40Ly3VB.jpg\" width=\"100\"/>
        </label>
        <img src=\"http://thecodeplayer.com/uploads/media/40Ly3VB.jpg\"/>

        <input type=\"radio\" name=\"slide_switch\" id=\"id3\"/>
        <label for=\"id3\">
            <img src=\"http://thecodeplayer.com/uploads/media/00kih8g.jpg\" width=\"100\"/>
        </label>
        <img src=\"http://thecodeplayer.com/uploads/media/00kih8g.jpg\"/>

        <input type=\"radio\" name=\"slide_switch\" id=\"id4\"/>
        <label for=\"id4\">
            <img src=\"http://thecodeplayer.com/uploads/media/2rT2vdx.jpg\" width=\"100\"/>
        </label>
        <img src=\"http://thecodeplayer.com/uploads/media/2rT2vdx.jpg\"/>

        <input type=\"radio\" name=\"slide_switch\" id=\"id5\"/>
        <label for=\"id5\">
            <img src=\"http://thecodeplayer.com/uploads/media/8k3N3EL.jpg\" width=\"100\"/>
        </label>
        <img src=\"http://thecodeplayer.com/uploads/media/8k3N3EL.jpg\"/>
    </div>
    <div style=\"border-bottom:1px solid grey; box-shadow: 0px 2px 10px lightgrey;\"></div>
    <div style=\"box-shadow: 0px -10px 10px lightgrey;\">
        <div class=\"row large-collapse\">
            <div class=\"large-8 columns\" ><img style=\"margin-top: 20px\" src=\"https://www.w3schools.com/w3css/img_fjords.jpg\"></div>
            <div class=\"large-4 columns\" style=\"text-align: center\">
                <h2>Martine Heidet</h2>
                <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>
            </div>
    </div>
    <!-- We will use PrefixFree - a script that takes care of CSS3 vendor prefixes
    You can download it from http://leaverou.github.com/prefixfree/ -->
    <script src=\"http://thecodeplayer.com/uploads/js/prefixfree.js\" type=\"text/javascript\"></script>
";
        
        $__internal_abb8b03bdbd7fb546a883544cabc07a67849594f256622c9ddc9c702ae5b4370->leave($__internal_abb8b03bdbd7fb546a883544cabc07a67849594f256622c9ddc9c702ae5b4370_prof);

        
        $__internal_6205f4dc4081e708ac83b93a6ce4e44c0a34d28be02e223c012b7458a7c6b988->leave($__internal_6205f4dc4081e708ac83b93a6ce4e44c0a34d28be02e223c012b7458a7c6b988_prof);

    }

    // line 119
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dec0cbe5bee1711c5ef058ba83ca9016a39d4f9608da5f8005b39c0a8a5b9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dec0cbe5bee1711c5ef058ba83ca9016a39d4f9608da5f8005b39c0a8a5b9f8->enter($__internal_7dec0cbe5bee1711c5ef058ba83ca9016a39d4f9608da5f8005b39c0a8a5b9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6877f8d7f398971c7859293518c3e972b0779d3d08bdf243439439ebb0bcea58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6877f8d7f398971c7859293518c3e972b0779d3d08bdf243439439ebb0bcea58->enter($__internal_6877f8d7f398971c7859293518c3e972b0779d3d08bdf243439439ebb0bcea58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 120
        echo "
";
        
        $__internal_6877f8d7f398971c7859293518c3e972b0779d3d08bdf243439439ebb0bcea58->leave($__internal_6877f8d7f398971c7859293518c3e972b0779d3d08bdf243439439ebb0bcea58_prof);

        
        $__internal_7dec0cbe5bee1711c5ef058ba83ca9016a39d4f9608da5f8005b39c0a8a5b9f8->leave($__internal_7dec0cbe5bee1711c5ef058ba83ca9016a39d4f9608da5f8005b39c0a8a5b9f8_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 120,  173 => 119,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <style>
        /*Time for the CSS*/
        * {margin: 0; padding: 0;}
        body {background: #fff;}

        .slider{
            width: 640px; /*Same as width of the large image*/
            position: relative;
            /*Instead of height we will use padding*/
            padding-top: 320px; /*That helps bring the labels down*/

            margin: 100px auto;

            /*Lets add a shadow*/
            box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75);
        }


        /*Last thing remaining is to add transitions*/
        .slider>img{
            position: absolute;
            left: 0; top: 0;
            transition: all 0.5s;
        }

        .slider input[name='slide_switch'] {
            display: none;
        }

        .slider label {
            /*Lets add some spacing for the thumbnails*/
            margin: 18px 0 0 18px;
            border: 3px solid #999;

            float: left;
            cursor: pointer;
            transition: all 0.5s;

            /*Default style = low opacity*/
            opacity: 0.6;
        }

        .slider label img{
            display: block;
        }

        /*Time to add the click effects*/
        .slider input[name='slide_switch']:checked+label {
            border-color: #666;
            opacity: 1;
        }
        /*Clicking any thumbnail now should change its opacity(style)*/
        /*Time to work on the main images*/
        .slider input[name='slide_switch'] ~ img {
            opacity: 0;
            transform: scale(1.1);
        }
        /*That hides all main images at a 110% size
        On click the images will be displayed at normal size to complete the effect
        */
        .slider input[name='slide_switch']:checked+label+img {
            opacity: 1;
            transform: scale(1);
        }
        /*Clicking on any thumbnail now should activate the image related to it*/

        /*We are done :)*/
    </style>
    <div style=\"font-size: 40px; text-align: center; margin-top: 20px\" >Les derniers tableaux</div>
    <div class=\"slider\" style=\"margin-top: 20px\">
        <input type=\"radio\" name=\"slide_switch\" id=\"id1\"/>
        <label for=\"id1\">
            <img src=\"http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg\" width=\"100\"/>
        </label>
        <img src=\"http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg\"/>

        <!--Lets show the second image by default on page load-->
        <input type=\"radio\" name=\"slide_switch\" id=\"id2\" checked=\"checked\"/>
        <label for=\"id2\">
            <img src=\"http://thecodeplayer.com/uploads/media/40Ly3VB.jpg\" width=\"100\"/>
        </label>
        <img src=\"http://thecodeplayer.com/uploads/media/40Ly3VB.jpg\"/>

        <input type=\"radio\" name=\"slide_switch\" id=\"id3\"/>
        <label for=\"id3\">
            <img src=\"http://thecodeplayer.com/uploads/media/00kih8g.jpg\" width=\"100\"/>
        </label>
        <img src=\"http://thecodeplayer.com/uploads/media/00kih8g.jpg\"/>

        <input type=\"radio\" name=\"slide_switch\" id=\"id4\"/>
        <label for=\"id4\">
            <img src=\"http://thecodeplayer.com/uploads/media/2rT2vdx.jpg\" width=\"100\"/>
        </label>
        <img src=\"http://thecodeplayer.com/uploads/media/2rT2vdx.jpg\"/>

        <input type=\"radio\" name=\"slide_switch\" id=\"id5\"/>
        <label for=\"id5\">
            <img src=\"http://thecodeplayer.com/uploads/media/8k3N3EL.jpg\" width=\"100\"/>
        </label>
        <img src=\"http://thecodeplayer.com/uploads/media/8k3N3EL.jpg\"/>
    </div>
    <div style=\"border-bottom:1px solid grey; box-shadow: 0px 2px 10px lightgrey;\"></div>
    <div style=\"box-shadow: 0px -10px 10px lightgrey;\">
        <div class=\"row large-collapse\">
            <div class=\"large-8 columns\" ><img style=\"margin-top: 20px\" src=\"https://www.w3schools.com/w3css/img_fjords.jpg\"></div>
            <div class=\"large-4 columns\" style=\"text-align: center\">
                <h2>Martine Heidet</h2>
                <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>
            </div>
    </div>
    <!-- We will use PrefixFree - a script that takes care of CSS3 vendor prefixes
    You can download it from http://leaverou.github.com/prefixfree/ -->
    <script src=\"http://thecodeplayer.com/uploads/js/prefixfree.js\" type=\"text/javascript\"></script>
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "default/index.html.twig", "/Users/tbichot/Sites/projet-tut-S3/app/Resources/views/default/index.html.twig");
    }
}
