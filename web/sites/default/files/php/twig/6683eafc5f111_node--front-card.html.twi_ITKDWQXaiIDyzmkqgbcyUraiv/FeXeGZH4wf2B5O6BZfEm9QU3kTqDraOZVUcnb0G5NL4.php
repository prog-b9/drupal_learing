<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/demoapp_theme/templates/node/node--front-card.html.twig */
class __TwigTemplate_06ce6c830fa21a5899533ed6fdf4af8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"bg-light h-100 p-3 rounded-3 d-flex flex-column justify-content-between\">
\t";
        // line 3
        yield "\t";
        // line 10
        yield "\t\t";
        // line 11
        yield "\t";
        // line 12
        yield "\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 12) == "news")) {
            // line 13
            yield "\t<img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#item"] ?? null) : null), "entity", [], "any", false, false, true, 13), "uri", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13), 13, $this->source)), "html", null, true);
            yield "\" class=\"rounded-top-3\" style=\"width: 100%; height: 480px;\"/> ";
        }
        // line 14
        yield "\t";
        // line 15
        yield "\t<h5 class=\"fw-bold my-2\">
\t\t<a href=\"";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 16, $this->source), "html", null, true);
        yield "\" rel=\"bookmark\" class=\"text-muted\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 16, $this->source), "html", null, true);
        yield "</a>
\t</h5>
\t";
        // line 19
        yield "\t<div class=\"text-secondary\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        yield "</div>
\t";
        // line 21
        yield "\t<div class=\"bg-white p-1 px-2 rounded-2 border border-muted\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        yield "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "content", "url", "label"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/demoapp_theme/templates/node/node--front-card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  74 => 21,  69 => 19,  62 => 16,  59 => 15,  57 => 14,  52 => 13,  49 => 12,  47 => 11,  45 => 10,  43 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-light h-100 p-3 rounded-3 d-flex flex-column justify-content-between\">
\t{# Views Name #}
\t{# {% if node.bundle == 'news' %}
\t\t   <h1>News : </h1>
\t\t   {% elseif node.bundle == 'blog' %}
\t\t    <h1>Blogs : </h1>
\t\t     {% else %}
\t\t    <h1>Views Is Empty</h1>
\t\t   {% endif %} #}
\t\t{# <h1> {{ node.bundle }} : </h1> #}
\t{# Images #}
\t\t{% if node.bundle == 'news' %}
\t<img src=\"{{ file_url(content.field_image.0['#item'].entity.uri.value) }}\" class=\"rounded-top-3\" style=\"width: 100%; height: 480px;\"/> {% endif %}
\t{# Title #}
\t<h5 class=\"fw-bold my-2\">
\t\t<a href=\"{{ url }}\" rel=\"bookmark\" class=\"text-muted\">{{ label }}</a>
\t</h5>
\t{# Body #}
\t<div class=\"text-secondary\">{{ content.body }}</div>
\t{# Tags #}
\t<div class=\"bg-white p-1 px-2 rounded-2 border border-muted\">{{ content.field_tags }}</div>
</div>
", "themes/custom/demoapp_theme/templates/node/node--front-card.html.twig", "/Users/basil/Desktop/MyProjects/Drupl/demo-app/web/themes/custom/demoapp_theme/templates/node/node--front-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array("escape" => 13);
        static $functions = array("file_url" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['file_url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
