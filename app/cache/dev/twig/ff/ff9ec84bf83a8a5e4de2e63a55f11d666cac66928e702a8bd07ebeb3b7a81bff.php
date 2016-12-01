<?php

/* CodersLabBundle::zadanieD1b.html.twig */
class __TwigTemplate_68930665b5c3a9b2de70955e63496ec63257acd722b00e8583a59c0f8c06d05c extends Twig_Template
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
        $__internal_b2a1216d3df1fef9b3f22032cbc1990c84e0b52f01f1705ba8119fe7b6a51e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a1216d3df1fef9b3f22032cbc1990c84e0b52f01f1705ba8119fe7b6a51e5d->enter($__internal_b2a1216d3df1fef9b3f22032cbc1990c84e0b52f01f1705ba8119fe7b6a51e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle::zadanieD1b.html.twig"));

        // line 1
        echo "<html>
<head>

</head>
<body>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 7
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "surname", array()), "html", null, true);
            echo "</h1>
    <p><a href=\"/showAuthor/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
            echo "\">Info o autorze</a></p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</body>
</html>";
        
        $__internal_b2a1216d3df1fef9b3f22032cbc1990c84e0b52f01f1705ba8119fe7b6a51e5d->leave($__internal_b2a1216d3df1fef9b3f22032cbc1990c84e0b52f01f1705ba8119fe7b6a51e5d_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle::zadanieD1b.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  40 => 8,  33 => 7,  29 => 6,  22 => 1,);
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
{% for author in authors %}
    <h1>{{ author.name }} {{ author.surname }}</h1>
    <p><a href=\"/showAuthor/{{ author.id }}\">Info o autorze</a></p>
{% endfor %}
</body>
</html>", "CodersLabBundle::zadanieD1b.html.twig", "/home/tuyetlinh/Workspace/projekt_modelwithform/src/CodersLabBundle/Resources/views/zadanieD1b.html.twig");
    }
}
