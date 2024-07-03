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

/* themes/custom/demoapp_theme/templates/content/comment.html.twig */
class __TwigTemplate_9d2dc12d256162282961292965d0086d extends Template
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
        // line 69
        if (($context["threaded"] ?? null)) {
            // line 70
            yield "\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap5/indented"), "html", null, true);
            yield "
";
        }
        // line 73
        $context["classes"] = ["comment", "js-comment swiper-slide", (((        // line 76
($context["status"] ?? null) != "published")) ? (($context["status"] ?? null)) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["comment"] ?? null), "owner", [], "any", false, false, true, 77), "anonymous", [], "any", false, false, true, 77)) ? ("by-anonymous") : ("")), (((        // line 78
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 78)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 78), 78, $this->source)) . "-author")) : (""))];
        // line 81
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
        yield ">
\t";
        // line 87
        yield "\t<mark class=\"hidden\" data-comment-timestamp=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 87, $this->source), "html", null, true);
        yield "\"></mark>

\t";
        // line 89
        if (($context["submitted"] ?? null)) {
            // line 90
            yield "\t\t<footer class=\"comment__meta\">
\t\t\t";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 91, $this->source), "html", null, true);
            yield "
\t\t\t<p class=\"comment__submitted\">";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted"] ?? null), 92, $this->source), "html", null, true);
            yield "</p>

\t\t\t";
            // line 99
            yield "\t\t\t";
            if (($context["parent"] ?? null)) {
                // line 100
                yield "\t\t\t\t<p class=\"parent visually-hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 100, $this->source), "html", null, true);
                yield "</p>
\t\t\t";
            }
            // line 102
            yield "
\t\t\t";
            // line 103
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["permalink"] ?? null), 103, $this->source), "html", null, true);
            yield "
\t\t</footer>
\t";
        }
        // line 106
        yield "
\t<div";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["content"], "method", false, false, true, 107), 107, $this->source), "html", null, true);
        yield ">
\t\t";
        // line 108
        if (($context["title"] ?? null)) {
            // line 109
            yield "\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 109, $this->source), "html", null, true);
            yield "
\t\t\t<h3";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 110, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 110, $this->source), "html", null, true);
            yield "</h3>
\t\t\t";
            // line 111
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 111, $this->source), "html", null, true);
            yield "
\t\t";
        }
        // line 113
        yield "\t\t";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 113, $this->source), "html", null, true);
        yield "
\t</div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["threaded", "status", "comment", "author_id", "commented_entity", "attributes", "new_indicator_timestamp", "submitted", "user_picture", "parent", "permalink", "content_attributes", "title", "title_prefix", "title_attributes", "title_suffix", "content"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/demoapp_theme/templates/content/comment.html.twig";
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
        return array (  121 => 113,  116 => 111,  110 => 110,  105 => 109,  103 => 108,  99 => 107,  96 => 106,  90 => 103,  87 => 102,  81 => 100,  78 => 99,  73 => 92,  69 => 91,  66 => 90,  64 => 89,  58 => 87,  53 => 81,  51 => 78,  50 => 77,  49 => 76,  48 => 73,  42 => 70,  40 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for comments.
 *
 * Available variables:
 * - author: (optional) Comment author. Can be a link or plain text.
 * - content: The content-related items for the comment display. Use
 *   {{ content }} to print them all, or print a subset such as
 *   {{ content.field_example }}. Use the following code to temporarily suppress
 *   the printing of a given child element:
 *   @code
 *   {{ content|without('field_example') }}
 *   @endcode
 * - created: (optional) Formatted date and time for when the comment was
 *   created. Preprocess functions can reformat it by calling
 *   DateFormatter::format() with the desired parameters on the
 *   'comment.created' variable.
 * - changed: (optional) Formatted date and time for when the comment was last
 *   changed. Preprocess functions can reformat it by calling
 *   DateFormatter::format() with the desired parameters on the
 *   'comment.changed' variable.
 * - permalink: Comment permalink.
 * - submitted: (optional) Submission information created from author and
 *   created during template_preprocess_comment().
 * - user_picture: (optional) The comment author's profile picture.
 * - status: Comment status. Possible values are:
 *   unpublished, published, or preview.
 * - title: (optional) Comment title, linked to the comment.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class may contain one or more of the following classes:
 *   - comment: The current template type; for instance, 'theming hook'.
 *   - by-anonymous: Comment by an unregistered user.
 *   - by-{entity-type}-author: Comment by the author of the parent entity,
 *     eg. by-node-author.
 *   - preview: When previewing a new or edited comment.
 *   The following applies only to viewers who are registered users:
 *   - unpublished: An unpublished comment visible only to administrators.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - content_attributes: List of classes for the styling of the comment content.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - threaded: A flag indicating whether the comments are threaded or not.
 *
 * These variables are provided to give context about the parent comment (if
 * any, optional):
 * - parent_comment: Full parent comment entity (if any).
 * - parent_author: Equivalent to author for the parent comment.
 * - parent_created: Equivalent to created for the parent comment.
 * - parent_changed: Equivalent to changed for the parent comment.
 * - parent_title: Equivalent to title for the parent comment.
 * - parent_permalink: Equivalent to permalink for the parent comment.
 * - parent: A text string of parent comment submission information created from
 *   'parent_author' and 'parent_created' during template_preprocess_comment().
 *   This information is presented to help screen readers follow lengthy
 *   discussion threads. You can hide this from sighted users using the class
 *   visually-hidden.
 *
 * These two variables are provided for context:
 * - comment: Full comment object.
 * - commented_entity: Entity the comments are attached to.
 *
 * @see template_preprocess_comment()
 */
#}
{% if threaded %}
\t{{ attach_library('bootstrap5/indented') }}
{% endif %}
{%
  set classes = [
    'comment',
    'js-comment swiper-slide',
    status != 'published' ? status,
    comment.owner.anonymous ? 'by-anonymous',
    author_id and author_id == commented_entity.getOwnerId() ? 'by-' ~ commented_entity.getEntityTypeId() ~ '-author',
  ]
%}
<article{{attributes.addClass(classes)}}>
\t{#
\t    Hide the \"new\" indicator by default, let a piece of JavaScript ask the
\t    server which comments are new for the user. Rendering the final \"new\"
\t    indicator here would break the render cache.
\t  #}
\t<mark class=\"hidden\" data-comment-timestamp=\"{{ new_indicator_timestamp }}\"></mark>

\t{% if submitted %}
\t\t<footer class=\"comment__meta\">
\t\t\t{{ user_picture }}
\t\t\t<p class=\"comment__submitted\">{{ submitted }}</p>

\t\t\t{#
\t\t\t        Indicate the semantic relationship between parent and child comments for
\t\t\t        accessibility. The list is difficult to navigate in a screen reader
\t\t\t        without this information.
\t\t\t      #}
\t\t\t{% if parent %}
\t\t\t\t<p class=\"parent visually-hidden\">{{ parent }}</p>
\t\t\t{% endif %}

\t\t\t{{ permalink }}
\t\t</footer>
\t{% endif %}

\t<div{{content_attributes.addClass('content')}}>
\t\t{% if title %}
\t\t\t{{ title_prefix }}
\t\t\t<h3{{title_attributes}}>{{ title }}</h3>
\t\t\t{{ title_suffix }}
\t\t{% endif %}
\t\t{{ content }}
\t</div>
</article>
", "themes/custom/demoapp_theme/templates/content/comment.html.twig", "/Users/basil/Desktop/MyProjects/Drupl/demo-app/web/themes/custom/demoapp_theme/templates/content/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 69, "set" => 73);
        static $filters = array("escape" => 70);
        static $functions = array("attach_library" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['attach_library'],
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
