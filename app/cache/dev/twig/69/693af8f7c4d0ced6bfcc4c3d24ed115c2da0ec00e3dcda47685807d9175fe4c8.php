<?php

/* CodersLabBundle::zadanieC4.html.twig */
class __TwigTemplate_75902dfece5cb233cef017a9f0f7651d0b1aa31273b29cbe4336bcce06682138 extends Twig_Template
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
        $__internal_b49c8df17847f47be2d0f3c56c3977f250c93686f88abc35fa186b0e5dd3a532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49c8df17847f47be2d0f3c56c3977f250c93686f88abc35fa186b0e5dd3a532->enter($__internal_b49c8df17847f47be2d0f3c56c3977f250c93686f88abc35fa186b0e5dd3a532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle::zadanieC4.html.twig"));

        // line 1
        echo "<html>
<head>

</head>
<body>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 8
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "</h1>
    <p><a href=\"/showBook/";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "id", array()), "html", null, true);
            echo "\">Info</a></p>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "    <p>Podana książka nie istnieje</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
</body>
</html>";
        
        $__internal_b49c8df17847f47be2d0f3c56c3977f250c93686f88abc35fa186b0e5dd3a532->leave($__internal_b49c8df17847f47be2d0f3c56c3977f250c93686f88abc35fa186b0e5dd3a532_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle::zadanieC4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  47 => 11,  40 => 9,  35 => 8,  30 => 7,  22 => 1,);
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

{% for book in books %}
    <h1>{{ book.title }}</h1>
    <p><a href=\"/showBook/{{ book.id }}\">Info</a></p>
{% else  %}
    <p>Podana książka nie istnieje</p>
{% endfor %}

</body>
</html>", "CodersLabBundle::zadanieC4.html.twig", "/home/tuyetlinh/Workspace/projekt_modelwithform/src/CodersLabBundle/Resources/views/zadanieC4.html.twig");
    }
}
