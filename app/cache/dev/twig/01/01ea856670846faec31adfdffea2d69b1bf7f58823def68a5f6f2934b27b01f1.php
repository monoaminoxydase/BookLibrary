<?php

/* CodersLabBundle::zadanieA2.html.twig */
class __TwigTemplate_70f71a8733a28ce7f817d54dd02df673c4ba9d2ee62bec3a379d25bb84780c3d extends Twig_Template
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
        $__internal_3e766525a64da70c020ee24c973b1737ed7dafc73041b84947367dd8d51b59d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e766525a64da70c020ee24c973b1737ed7dafc73041b84947367dd8d51b59d7->enter($__internal_3e766525a64da70c020ee24c973b1737ed7dafc73041b84947367dd8d51b59d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle::zadanieA2.html.twig"));

        // line 1
        echo "<html>
<head>

</head>
<body>
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</body>
</html>";
        
        $__internal_3e766525a64da70c020ee24c973b1737ed7dafc73041b84947367dd8d51b59d7->leave($__internal_3e766525a64da70c020ee24c973b1737ed7dafc73041b84947367dd8d51b59d7_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle::zadanieA2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
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
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
</body>
</html>", "CodersLabBundle::zadanieA2.html.twig", "/home/tuyetlinh/Workspace/projekt_modelwithform/src/CodersLabBundle/Resources/views/zadanieA2.html.twig");
    }
}
