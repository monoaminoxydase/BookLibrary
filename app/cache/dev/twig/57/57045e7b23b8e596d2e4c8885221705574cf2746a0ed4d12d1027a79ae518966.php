<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ce835d2c55e3f45fcb35841a9dd2fb7675ae3b82e8ac064645b89bf31041ad92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5733eb8d1f963b79215ac06a422cb3d6184e4ae333a13778b978a0e3bd8081fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5733eb8d1f963b79215ac06a422cb3d6184e4ae333a13778b978a0e3bd8081fe->enter($__internal_5733eb8d1f963b79215ac06a422cb3d6184e4ae333a13778b978a0e3bd8081fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5733eb8d1f963b79215ac06a422cb3d6184e4ae333a13778b978a0e3bd8081fe->leave($__internal_5733eb8d1f963b79215ac06a422cb3d6184e4ae333a13778b978a0e3bd8081fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3725f7f68646896405926f0064841b2c20249941bbb45c6b4bd86a1e3cf96e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3725f7f68646896405926f0064841b2c20249941bbb45c6b4bd86a1e3cf96e75->enter($__internal_3725f7f68646896405926f0064841b2c20249941bbb45c6b4bd86a1e3cf96e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_3725f7f68646896405926f0064841b2c20249941bbb45c6b4bd86a1e3cf96e75->leave($__internal_3725f7f68646896405926f0064841b2c20249941bbb45c6b4bd86a1e3cf96e75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f18a729e6cbead7beb3ca74c2189e12893aeea91f9bddaa9c890a7d43516678f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18a729e6cbead7beb3ca74c2189e12893aeea91f9bddaa9c890a7d43516678f->enter($__internal_f18a729e6cbead7beb3ca74c2189e12893aeea91f9bddaa9c890a7d43516678f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f18a729e6cbead7beb3ca74c2189e12893aeea91f9bddaa9c890a7d43516678f->leave($__internal_f18a729e6cbead7beb3ca74c2189e12893aeea91f9bddaa9c890a7d43516678f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_005873c6f8ff08dd2862bfb3cd9ee008ce374cc0e2c290c09ace85df04624207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005873c6f8ff08dd2862bfb3cd9ee008ce374cc0e2c290c09ace85df04624207->enter($__internal_005873c6f8ff08dd2862bfb3cd9ee008ce374cc0e2c290c09ace85df04624207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_005873c6f8ff08dd2862bfb3cd9ee008ce374cc0e2c290c09ace85df04624207->leave($__internal_005873c6f8ff08dd2862bfb3cd9ee008ce374cc0e2c290c09ace85df04624207_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/tuyetlinh/Workspace/projekt_modelwithform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
