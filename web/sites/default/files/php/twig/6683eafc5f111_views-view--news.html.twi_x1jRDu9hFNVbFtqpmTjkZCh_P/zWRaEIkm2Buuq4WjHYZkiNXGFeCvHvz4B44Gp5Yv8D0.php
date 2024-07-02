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

/* themes/custom/demoapp_theme/templates/views/views-view--news.html.twig */
class __TwigTemplate_fd8e68e934301e3716de4776df11e7ab extends Template
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
        // line 34
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source))), ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source)), ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["display_id"] ?? null), 38, $this->source)), ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 39, $this->source))) : ("")), "faq py-100 main-bg"];
        // line 43
        yield "
<div";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        yield ">
    ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true);
        yield "
    ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 47, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 49
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 49, $this->source), "html", null, true);
        yield "
    ";
        // line 50
        if (($context["header"] ?? null)) {
            // line 51
            yield "        <div class=\"view-header\">
            ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 52, $this->source), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 55
        yield "    ";
        if (($context["exposed"] ?? null)) {
            // line 56
            yield "        <div class=\"view-filters\">
            ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 57, $this->source), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 60
        yield "    ";
        if (($context["attachment_before"] ?? null)) {
            // line 61
            yield "        <div class=\"attachment attachment-before\">
            ";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 62, $this->source), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 65
        yield "
     ";
        // line 66
        if (($context["rows"] ?? null)) {
            // line 67
            yield "        <div class=\"row my-3\">
            ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 68, $this->source), "html", null, true);
            yield "       
        </div>
     ";
        } elseif (        // line 70
($context["empty"] ?? null)) {
            // line 71
            yield "        <div class=\"view-empty\">
            ";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 72, $this->source), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 75
        yield "
    ";
        // line 76
        if (($context["pager"] ?? null)) {
            // line 77
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 77, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 79
        yield "    ";
        if (($context["attachment_after"] ?? null)) {
            // line 80
            yield "        <div class=\"attachment attachment-after\">
            ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 81, $this->source), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 84
        yield "    ";
        if (($context["more"] ?? null)) {
            // line 85
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 85, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 87
        yield "    ";
        if (($context["footer"] ?? null)) {
            // line 88
            yield "        <div class=\"view-footer\">
            ";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 89, $this->source), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 92
        yield "    ";
        if (($context["feed_icons"] ?? null)) {
            // line 93
            yield "        <div class=\"feed-icons\">
            ";
            // line 94
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 94, $this->source), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 97
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/demoapp_theme/templates/views/views-view--news.html.twig";
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
        return array (  185 => 97,  179 => 94,  176 => 93,  173 => 92,  167 => 89,  164 => 88,  161 => 87,  155 => 85,  152 => 84,  146 => 81,  143 => 80,  140 => 79,  134 => 77,  132 => 76,  129 => 75,  123 => 72,  120 => 71,  118 => 70,  113 => 68,  110 => 67,  108 => 66,  105 => 65,  99 => 62,  96 => 61,  93 => 60,  87 => 57,  84 => 56,  81 => 55,  75 => 52,  72 => 51,  70 => 50,  65 => 49,  59 => 47,  57 => 46,  53 => 45,  49 => 44,  46 => 43,  44 => 39,  43 => 38,  42 => 37,  41 => 36,  40 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A CSS-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   JavaScript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    'view',
    'view-' ~ id|clean_class,
    'view-id-' ~ id,
    'view-display-id-' ~ display_id,
    dom_id ? 'js-view-dom-id-' ~ dom_id,
    'faq py-100 main-bg',
  ]
%}

<div{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {% if title %}
        {{ title }}
    {% endif %}
    {{ title_suffix }}
    {% if header %}
        <div class=\"view-header\">
            {{ header }}
        </div>
    {% endif %}
    {% if exposed %}
        <div class=\"view-filters\">
            {{ exposed }}
        </div>
    {% endif %}
    {% if attachment_before %}
        <div class=\"attachment attachment-before\">
            {{ attachment_before }}
        </div>
    {% endif %}

     {% if rows %}
        <div class=\"row my-3\">
            {{ rows }}       
        </div>
     {% elseif empty %}
        <div class=\"view-empty\">
            {{ empty }}
        </div>
    {% endif %}

    {% if pager %}
        {{ pager }}
    {% endif %}
    {% if attachment_after %}
        <div class=\"attachment attachment-after\">
            {{ attachment_after }}
        </div>
    {% endif %}
    {% if more %}
        {{ more }}
    {% endif %}
    {% if footer %}
        <div class=\"view-footer\">
            {{ footer }}
        </div>
    {% endif %}
    {% if feed_icons %}
        <div class=\"feed-icons\">
            {{ feed_icons }}
        </div>
    {% endif %}
</div>", "themes/custom/demoapp_theme/templates/views/views-view--news.html.twig", "/Users/basil/Desktop/MyProjects/Drupl/demo-app/web/themes/custom/demoapp_theme/templates/views/views-view--news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 46);
        static $filters = array("clean_class" => 36, "escape" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
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
