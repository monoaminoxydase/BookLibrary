<?php

/* CodersLabBundle::zadanieD1.html.twig */
class __TwigTemplate_3f5362675001423e838a499dd7483ea281704249e530c2d63a2602fd67c46253 extends Twig_Template
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
        $__internal_a18b1226f9dd83d4626932643beb87adecc5abe778fde3e34e910f483142f4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18b1226f9dd83d4626932643beb87adecc5abe778fde3e34e910f483142f4a3->enter($__internal_a18b1226f9dd83d4626932643beb87adecc5abe778fde3e34e910f483142f4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle::zadanieD1.html.twig"));

        // line 1
        echo "<html>
<head>

</head>
<body>
";
        // line 6
        if ((null === (isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")))) {
            // line 7
            echo "    Nie znaleziono tego autora!
";
        } else {
            // line 9
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "surname", array()), "html", null, true);
            echo "</h1>
    <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id", array()), "html", null, true);
            echo "</p>
    <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "description", array()), "html", null, true);
            echo "</p>


    <p>Ilość książek: ";
            // line 14
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "books", array())), "html", null, true);
            echo "</p>

    <ul>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "books", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 18
                echo "
            <p><a href=\"/showBook/";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "id", array()), "html", null, true);
                echo "\"><li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
                echo "</li></a></p>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
    </ul>


";
        }
        // line 27
        echo "</body>
</html>";
        
        $__internal_a18b1226f9dd83d4626932643beb87adecc5abe778fde3e34e910f483142f4a3->leave($__internal_a18b1226f9dd83d4626932643beb87adecc5abe778fde3e34e910f483142f4a3_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle::zadanieD1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  76 => 22,  65 => 19,  62 => 18,  58 => 17,  52 => 14,  46 => 11,  42 => 10,  35 => 9,  31 => 7,  29 => 6,  22 => 1,);
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
{% if author is null %}
    Nie znaleziono tego autora!
{% else %}
    <h1>{{ author.name }} {{ author.surname }}</h1>
    <p>{{ author.id }}</p>
    <p>{{ author.description }}</p>


    <p>Ilość książek: {{ author.books | length }}</p>

    <ul>
        {% for book in author.books %}

            <p><a href=\"/showBook/{{ book.id }}\"><li>{{ book.title }}</li></a></p>

        {% endfor %}

    </ul>


{% endif %}
</body>
</html>", "CodersLabBundle::zadanieD1.html.twig", "/home/tuyetlinh/Workspace/projekt_modelwithform/src/CodersLabBundle/Resources/views/zadanieD1.html.twig");
    }
}
