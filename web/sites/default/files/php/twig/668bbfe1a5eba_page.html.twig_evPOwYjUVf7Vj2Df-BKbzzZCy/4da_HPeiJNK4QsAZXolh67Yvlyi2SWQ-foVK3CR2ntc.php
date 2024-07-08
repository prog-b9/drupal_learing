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

/* themes/custom/demoapp_theme/templates/layout/page.html.twig */
class __TwigTemplate_f056020f913972502e87168e4854c2c3 extends Template
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
        // line 46
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 47
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_schema"] ?? null), 47, $this->source))) : (" "))) . (((        // line 48
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_bg_schema"] ?? null), 49, $this->source))) : (" ")));
        // line 51
        yield "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_schema"] ?? null), 54, $this->source))) : (" "))) . (((        // line 55
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_bg_schema"] ?? null), 56, $this->source))) : (" ")));
        // line 58
        yield "
<header role=\"banner\" class=\"mb-5\">
\t";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        yield "

\t";
        // line 62
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 62) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 62)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 62))) {
            // line 63
            yield "\t\t<nav class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 63, $this->source), "html", null, true);
            yield "\">
\t\t\t<div class=\"";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 64, $this->source), "html", null, true);
            yield " d-flex\">
\t\t\t\t";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            yield "

\t\t\t\t";
            // line 67
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 67) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 67))) {
                // line 68
                yield "\t\t\t\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t";
                // line 73
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                yield "
\t\t\t\t\t\t";
                // line 74
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                yield "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 77
            yield "\t\t\t</div>
\t\t</nav>
\t";
        }
        // line 80
        yield "
</header>


";
        // line 105
        yield "
<main role=\"main\">
\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t";
        // line 109
        yield "
\t";
        // line 111
        $context["sidebar_first_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 111) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 111))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 113
        yield "
\t";
        // line 115
        $context["sidebar_second_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 115) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 115))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 117
        yield "
\t";
        // line 119
        $context["content_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 119) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 119))) ? ("col-12 col-lg-6") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 119) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 119))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 121
        yield "

\t<div class=\"";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 123, $this->source), "html", null, true);
        yield "\">
\t\t";
        // line 124
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 124)) {
            // line 125
            yield "\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            yield "
\t\t";
        }
        // line 127
        yield "\t\t<div class=\"row g-0\">
\t\t\t";
        // line 128
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 128)) {
            // line 129
            yield "\t\t\t\t<div class=\"order-2 order-lg-1 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null), 129, $this->source), "html", null, true);
            yield "\">
\t\t\t\t\t";
            // line 130
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 133
        yield "\t\t\t<div class=\"order-1 order-lg-2 ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 133, $this->source), "html", null, true);
        yield "\">
\t\t\t\t";
        // line 134
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        yield "
\t\t\t</div>
\t\t\t";
        // line 136
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 136)) {
            // line 137
            yield "\t\t\t\t<div class=\"order-3 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null), 137, $this->source), "html", null, true);
            yield "\">
\t\t\t\t\t";
            // line 138
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 141
        yield "\t\t</div>
\t</div>

</main>

";
        // line 146
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 146)) {
            // line 147
            yield "\t<footer role=\"contentinfo\" class=\"mt-auto ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 147, $this->source), "html", null, true);
            yield "\">
\t\t<div class=\"";
            // line 148
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 148, $this->source), "html", null, true);
            yield "\">
\t\t\t";
            // line 149
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            yield "
\t\t</div>
\t</footer>
\t<!-- Remove the container if you want to extend the Footer to full width. -->

\t<!-- Footer -->
\t\t";
            // line 280
            yield "\t<!-- Footer -->
\t<!-- End of .container -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["b5_navbar_schema", "b5_navbar_bg_schema", "b5_footer_schema", "b5_footer_bg_schema", "page", "b5_top_container"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/demoapp_theme/templates/layout/page.html.twig";
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
        return array (  210 => 280,  201 => 149,  197 => 148,  192 => 147,  190 => 146,  183 => 141,  177 => 138,  172 => 137,  170 => 136,  165 => 134,  160 => 133,  154 => 130,  149 => 129,  147 => 128,  144 => 127,  138 => 125,  136 => 124,  132 => 123,  128 => 121,  126 => 119,  123 => 117,  121 => 115,  118 => 113,  116 => 111,  113 => 109,  108 => 105,  102 => 80,  97 => 77,  91 => 74,  87 => 73,  80 => 68,  78 => 67,  73 => 65,  69 => 64,  64 => 63,  62 => 62,  57 => 60,  53 => 58,  51 => 56,  50 => 55,  49 => 54,  48 => 53,  45 => 51,  43 => 49,  42 => 48,  41 => 47,  40 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{%
set nav_classes = 'navbar navbar-expand-lg' ~
  (b5_navbar_schema != 'none' ? \" navbar-#{b5_navbar_schema}\" : ' ') ~
  (b5_navbar_schema != 'none' ? (b5_navbar_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b5_navbar_bg_schema != 'none' ? \" bg-#{b5_navbar_bg_schema}\" : ' ')
%}

{%
set footer_classes = ' ' ~
  (b5_footer_schema != 'none' ? \" footer-#{b5_footer_schema}\" : ' ') ~
  (b5_footer_schema != 'none' ? (b5_footer_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b5_footer_bg_schema != 'none' ? \" bg-#{b5_footer_bg_schema}\" : ' ')
%}

<header role=\"banner\" class=\"mb-5\">
\t{{ page.header }}

\t{% if page.nav_branding or page.nav_main or page.nav_additional %}
\t\t<nav class=\"{{ nav_classes }}\">
\t\t\t<div class=\"{{ b5_top_container }} d-flex\">
\t\t\t\t{{ page.nav_branding }}

\t\t\t\t{% if page.nav_main or page.nav_additional %}
\t\t\t\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t{{ page.nav_main }}
\t\t\t\t\t\t{{ page.nav_additional }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</nav>
\t{% endif %}

</header>


{# <header class=\"site-navbar mb-5\" role=\"banner\">
\t<nav class=\"bg-light p-3 border border-b\">
\t\t<div class=\"container\">
\t\t\t<div
\t\t\t\tclass=\"d-flex align-items-center\">
 \t\t\t\t<a class=\"navbar-brand mx-2 fw-bold fs-4\" href=\"#\">Logo</a>
 \t\t\t\t<ul class=\"navbar-nav d-flex flex-row align-items-center gap-2\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/node\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/blogs\">Blogs</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/news\">News</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>  #}

<main role=\"main\">
\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t{# link is in html.html.twig #}

\t{%
  set sidebar_first_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

\t{%
  set sidebar_second_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

\t{%
  set content_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-lg-6' : ((page.sidebar_first or page.sidebar_second) ? 'col-12 col-lg-9' : 'col-12' )
   %}


\t<div class=\"{{ b5_top_container }}\">
\t\t{% if page.breadcrumb %}
\t\t\t{{ page.breadcrumb }}
\t\t{% endif %}
\t\t<div class=\"row g-0\">
\t\t\t{% if page.sidebar_first %}
\t\t\t\t<div class=\"order-2 order-lg-1 {{ sidebar_first_classes }}\">
\t\t\t\t\t{{ page.sidebar_first }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"order-1 order-lg-2 {{ content_classes }}\">
\t\t\t\t{{ page.content }}
\t\t\t</div>
\t\t\t{% if page.sidebar_second %}
\t\t\t\t<div class=\"order-3 {{ sidebar_second_classes }}\">
\t\t\t\t\t{{ page.sidebar_second }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>

</main>

{% if page.footer %}
\t<footer role=\"contentinfo\" class=\"mt-auto {{ footer_classes }}\">
\t\t<div class=\"{{ b5_top_container }}\">
\t\t\t{{ page.footer }}
\t\t</div>
\t</footer>
\t<!-- Remove the container if you want to extend the Footer to full width. -->

\t<!-- Footer -->
\t\t{# <footer
\t\tclass=\"text-center text-lg-start text-muted p-0 bg-light mt-5 border border-t\"> <!-- Section: Social media -->
\t\t<section
\t\t\tclass=\"d-flex justify-content-between\">
\t\t\t<!-- Right -->
\t\t\t<div>
\t\t\t\t<a href=\"\" class=\"text-muted me-4\">
\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\" class=\"text-muted me-4\">
\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\" class=\"text-muted me-4\">
\t\t\t\t\t<i class=\"fab fa-google\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\" class=\"text-muted me-4\">
\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\" class=\"text-muted me-4\">
\t\t\t\t\t<i class=\"fab fa-linkedin\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"\" class=\"text-muted me-4\">
\t\t\t\t\t<i class=\"fab fa-github\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<!-- Right -->
\t\t</section>
\t\t<!-- Section: Social media -->

\t\t<!-- Section: Links  -->
\t\t<sectrion class=\"\">
\t\t\t<div
\t\t\t\tclass=\"container text-center text-md-start mt-5\">
\t\t\t\t<!-- Grid row -->
\t\t\t\t<div
\t\t\t\t\tclass=\"row mt-3\">
\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold\">Company name</h6>
\t\t\t\t\t\t<hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\"/>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tHere you can use rows and columns to organize your footer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              content. Lorem ipsum dolor sit amet, consectetur adipisicing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              elit.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold\">Products</h6>
\t\t\t\t\t\t<hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\"/>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-muted\">MDBootstrap</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-muted\">MDWordPress</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-muted\">BrandFlow</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-muted\">Bootstrap Angular</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold\">Useful links</h6>
\t\t\t\t\t\t<hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\"/>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-muted\">Your Account</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-muted\">Become an Affiliate</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-muted\">Shipping Rates</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-muted\">Help</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold\">Contact</h6>
\t\t\t\t\t\t<hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\"/>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fas fa-home mr-3\"></i>
\t\t\t\t\t\t\tNew York, NY 10012, US</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fas fa-envelope mr-3\"></i>
\t\t\t\t\t\t\tinfo@example.com</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fas fa-phone mr-3\"></i>
\t\t\t\t\t\t\t+ 01 234 567 88</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fas fa-print mr-3\"></i>
\t\t\t\t\t\t\t+ 01 234 567 89</p>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Grid column -->
\t\t\t\t</div>
\t\t\t\t<!-- Grid row -->
\t\t\t</div>
\t\t</section>
\t\t<!-- Section: Links  -->

\t\t<!-- Copyright -->
\t\t<div class=\"text-center p-3 bg\">
\t\t\t© 2024 Copyright :
\t\t\t<a class=\"text-muted\" href=\"https://mdbootstrap.com/\">demoapp.com</a>
\t\t</div>
\t\t<!-- Copyright -->
\t</footer> #}
\t<!-- Footer -->
\t<!-- End of .container -->
{% endif %}
", "themes/custom/demoapp_theme/templates/layout/page.html.twig", "/Users/basil/Desktop/MyProjects/Drupl/demo-app/web/themes/custom/demoapp_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 46, "if" => 62);
        static $filters = array("escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
