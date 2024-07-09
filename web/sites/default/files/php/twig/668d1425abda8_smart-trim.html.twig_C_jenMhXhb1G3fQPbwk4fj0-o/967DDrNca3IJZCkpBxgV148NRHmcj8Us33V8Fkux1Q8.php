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

/* modules/contrib/smart_trim/templates/smart-trim.html.twig */
class __TwigTemplate_37655ee30554af96930977c562ab2cef extends Template
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
        // line 20
        if ((($context["wrap_output"] ?? null) == true)) {
            // line 21
            yield "  <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_class"] ?? null), 21, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["output"] ?? null), 21, $this->source), "html", null, true);
            yield "</div>
";
        } else {
            // line 23
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["output"] ?? null), 23, $this->source), "html", null, true);
            yield "
";
        }
        // line 25
        yield "
";
        // line 26
        if ((($context["more"] ?? null) != null)) {
            // line 27
            yield "  <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more_wrapper_class"] ?? null), 27, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 27, $this->source)), "html", null, true);
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["wrap_output", "wrapper_class", "output", "more", "more_wrapper_class"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/smart_trim/templates/smart-trim.html.twig";
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
        return array (  61 => 27,  59 => 26,  56 => 25,  50 => 23,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a Smart Trimmed field.
 *
 * Available variables:
 * - output: The trimmed text to output.
 * - is_trimmed: TRUE if the text was trimmed.
 * - wrap_output: If true, output will be wrapped in a <div>.
 *     Note: wrap_output is deprecated and will be removed in a future release.
 *     Please override this template in your theme and apply any wrapping if
 *     required.
 * - wrapper_class: Class name for wrapper.
 * - more: Render array for \"More\" link.
 * - more_wrapper_class: Class name for more link wrapper.
 * - field: The name of he field being rendered.
 * - entity_type: The type of entity being rendered.
 */
#}
{% if wrap_output == true %}
  <div class=\"{{ wrapper_class }}\">{{ output }}</div>
{% else %}
  {{ output }}
{% endif %}

{% if more != null %}
  <div class=\"{{ more_wrapper_class }}\">{{ render_var(more) }}</div>
{% endif %}
", "modules/contrib/smart_trim/templates/smart-trim.html.twig", "/Users/basil/Desktop/MyProjects/Drupl/demo-app/web/modules/contrib/smart_trim/templates/smart-trim.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array("escape" => 21);
        static $functions = array("render_var" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['render_var'],
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
