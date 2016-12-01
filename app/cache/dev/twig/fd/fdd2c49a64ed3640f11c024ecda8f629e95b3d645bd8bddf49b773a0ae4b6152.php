<?php

/* CodersLabBundle::zadanieC3.html.twig */
class __TwigTemplate_0e8462ab2060dadf39e8debf6ab99a99ffebe06212dd74b5f9f7bf62aa4723f2 extends Twig_Template
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
        $__internal_e5310b7d47c02347aedf35260e93a0488644f35bf1838f72b9fddc185f260e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5310b7d47c02347aedf35260e93a0488644f35bf1838f72b9fddc185f260e3b->enter($__internal_e5310b7d47c02347aedf35260e93a0488644f35bf1838f72b9fddc185f260e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle::zadanieC3.html.twig"));

        // line 1
        echo "<html>
<head>

</head>
<body>
";
        // line 6
        if ((null === (isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")))) {
            // line 7
            echo "    Nie znaleziono tej książki!
";
        } else {
            // line 9
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
            echo "</h1>
    <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()), "html", null, true);
            echo "</p>
    <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "description", array()), "html", null, true);
            echo "</p>
    <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "rating", array()), "html", null, true);
            echo "</p>
    <p><a href=\"/showAuthor/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "surname", array()), "html", null, true);
            echo "</a></p>
";
        }
        // line 15
        echo "</body>
</html>";
        
        $__internal_e5310b7d47c02347aedf35260e93a0488644f35bf1838f72b9fddc185f260e3b->leave($__internal_e5310b7d47c02347aedf35260e93a0488644f35bf1838f72b9fddc185f260e3b_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle::zadanieC3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  35 => 9,  31 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>

</head>
<body>
{% if book is null %}
    Nie znaleziono tej książki!
{% else %}
    <h1>{{ book.title }}</h1>
    <p>{{ book.id }}</p>
    <p>{{ book.description }}</p>
    <p>{{ book.rating }}</p>
    <p><a href=\"/showAuthor/{{ book.author.id }}\">{{ book.author.name }} {{ book.author.surname }}</a></p>
{% endif %}
</body>
</html>", "CodersLabBundle::zadanieC3.html.twig", "/home/tuyetlinh/Workspace/projekt_modelwithform/src/CodersLabBundle/Resources/views/zadanieC3.html.twig");
    }
}
