<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a0ea5b59172855543ed995393884181642d86508557a6372c30fad2cf963199c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa945efa1430d4039000c092c4ff4582aafe43669d03971b7854c41dc598e774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa945efa1430d4039000c092c4ff4582aafe43669d03971b7854c41dc598e774->enter($__internal_fa945efa1430d4039000c092c4ff4582aafe43669d03971b7854c41dc598e774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa945efa1430d4039000c092c4ff4582aafe43669d03971b7854c41dc598e774->leave($__internal_fa945efa1430d4039000c092c4ff4582aafe43669d03971b7854c41dc598e774_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ca3ccde98855e9980de1399c6984862231e282f15ca319d57a454265b435fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca3ccde98855e9980de1399c6984862231e282f15ca319d57a454265b435fc6->enter($__internal_5ca3ccde98855e9980de1399c6984862231e282f15ca319d57a454265b435fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5ca3ccde98855e9980de1399c6984862231e282f15ca319d57a454265b435fc6->leave($__internal_5ca3ccde98855e9980de1399c6984862231e282f15ca319d57a454265b435fc6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f549926f7e64077864132137b5a64bbe57384e4c09a95c4c688124cb2f0c6f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f549926f7e64077864132137b5a64bbe57384e4c09a95c4c688124cb2f0c6f4a->enter($__internal_f549926f7e64077864132137b5a64bbe57384e4c09a95c4c688124cb2f0c6f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f549926f7e64077864132137b5a64bbe57384e4c09a95c4c688124cb2f0c6f4a->leave($__internal_f549926f7e64077864132137b5a64bbe57384e4c09a95c4c688124cb2f0c6f4a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d84c6fc2186b5e1f8f113948f5d14c69ae9252cc3d1f92faa957f75a62936abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84c6fc2186b5e1f8f113948f5d14c69ae9252cc3d1f92faa957f75a62936abb->enter($__internal_d84c6fc2186b5e1f8f113948f5d14c69ae9252cc3d1f92faa957f75a62936abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d84c6fc2186b5e1f8f113948f5d14c69ae9252cc3d1f92faa957f75a62936abb->leave($__internal_d84c6fc2186b5e1f8f113948f5d14c69ae9252cc3d1f92faa957f75a62936abb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/tuyetlinh/Workspace/projekt_modelwithform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
