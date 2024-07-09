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

/* themes/custom/demoapp_theme/templates/node/node--news.html.twig */
class __TwigTemplate_6525197626655d9ee3bc984a64d9e5e5 extends Template
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
        yield "<div class=\"bg-light rounded-3 \">
\t<img src=\"";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 2), 0, [], "any", false, false, true, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#item"] ?? null) : null), "entity", [], "any", false, false, true, 2), "uri", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2), 2, $this->source)), "html", null, true);
        yield "\" class=\"rounded-top-3\" style=\"width: 100%; height: 280px;\"/>
\t<div class=\"p-3 d-flex flex-column justify-content-between h-100\">
\t\t<h5 class=\"fw-bold my-2\">
\t\t\t<a href=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 5, $this->source), "html", null, true);
        yield "\" rel=\"bookmark\" class=\"text-muted\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 5, $this->source), "html", null, true);
        yield "</a>
\t\t</h5>
\t\t<div class=\"text-secondary\">";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        yield "</div>
\t\t<div class=\"bg-white p-1 px-2 rounded-2 border border-muted d-flex gap-2 align-items-center\">";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        yield "</div>
\t</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "url", "label"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/demoapp_theme/templates/node/node--news.html.twig";
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
        return array (  60 => 8,  56 => 7,  49 => 5,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-light rounded-3 \">
\t<img src=\"{{ file_url(content.field_image.0['#item'].entity.uri.value) }}\" class=\"rounded-top-3\" style=\"width: 100%; height: 280px;\"/>
\t<div class=\"p-3 d-flex flex-column justify-content-between h-100\">
\t\t<h5 class=\"fw-bold my-2\">
\t\t\t<a href=\"{{ url }}\" rel=\"bookmark\" class=\"text-muted\">{{ label }}</a>
\t\t</h5>
\t\t<div class=\"text-secondary\">{{ content.body }}</div>
\t\t<div class=\"bg-white p-1 px-2 rounded-2 border border-muted d-flex gap-2 align-items-center\">{{ content.field_tags }}</div>
\t</div>
</div>
", "themes/custom/demoapp_theme/templates/node/node--news.html.twig", "/Users/basil/Desktop/MyProjects/Drupl/demo-app/web/themes/custom/demoapp_theme/templates/node/node--news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array("file_url" => 2);

        try {
            $this->sandbox->checkSecurity(
                [],
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
