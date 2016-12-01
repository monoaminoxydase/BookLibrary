<?php

/* CodersLabBundle::zadanieD3.html.twig */
class __TwigTemplate_b6695a0b0c39bd16f86061d2b93494a2988f9bf413634e8f5fee46c015192740 extends Twig_Template
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
        $__internal_00c3b7fd29e51fae1bf46c3abe29bd34af67ac51ae5ac59843adc94ec236fb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c3b7fd29e51fae1bf46c3abe29bd34af67ac51ae5ac59843adc94ec236fb00->enter($__internal_00c3b7fd29e51fae1bf46c3abe29bd34af67ac51ae5ac59843adc94ec236fb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle::zadanieD3.html.twig"));

        // line 1
        echo "<html>
<head></head>
<body>
<form action=\"/createBook\" method=\"POST\">
    <p><label>Title <input type=\"text\" name=\"title\"></label></p>
    <p><label>Description <input type=\"text\" name=\"description\"></label></p>
    <p><label>Rating <input type=\"number\" name=\"rating\"</label></p>
    <p><label for=\"author\">Autor:</label>
    <ul>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 11
            echo "            <li><input type=\"radio\" name=\"author\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul></p>
    <input type=\"submit\"/>
</form>
</body>
</html>";
        
        $__internal_00c3b7fd29e51fae1bf46c3abe29bd34af67ac51ae5ac59843adc94ec236fb00->leave($__internal_00c3b7fd29e51fae1bf46c3abe29bd34af67ac51ae5ac59843adc94ec236fb00_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle::zadanieD3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  37 => 11,  33 => 10,  22 => 1,);
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
<head></head>
<body>
<form action=\"/createBook\" method=\"POST\">
    <p><label>Title <input type=\"text\" name=\"title\"></label></p>
    <p><label>Description <input type=\"text\" name=\"description\"></label></p>
    <p><label>Rating <input type=\"number\" name=\"rating\"</label></p>
    <p><label for=\"author\">Autor:</label>
    <ul>
        {% for author in authors %}
            <li><input type=\"radio\" name=\"author\" value=\"{{ author.id }}\"> {{ author.name }}</li>
        {% endfor %}
    </ul></p>
    <input type=\"submit\"/>
</form>
</body>
</html>", "CodersLabBundle::zadanieD3.html.twig", "/home/tuyetlinh/Workspace/projekt_modelwithform/src/CodersLabBundle/Resources/views/zadanieD3.html.twig");
    }
}
