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

/* @claro/../images/src/hamburger-menu.svg */
class __TwigTemplate_61a015c4bd510e85ae2b495814b8b0ec extends Template
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
        yield "<svg fill=\"none\" height=\"16\" viewBox=\"0 0 16 16\" width=\"16\" xmlns=\"http://www.w3.org/2000/svg\"><path clip-rule=\"evenodd\" d=\"m15 9h-14c-.56016 0-1-.43984-1-1s.43984-1 1-1h14c.5602 0 1 .43984 1 1s-.4398 1-1 1zm0-5h-14c-.56016 0-1-.43984-1-1s.43984-1 1-1h14c.5602 0 1 .43984 1 1s-.4398 1-1 1zm-14 8h14c.5602 0 1 .4398 1 1s-.4398 1-1 1h-14c-.56016 0-1-.4398-1-1s.43984-1 1-1z\" fill=\"#003ECC\" fill-rule=\"evenodd\"/></svg>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@claro/../images/src/hamburger-menu.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<svg fill=\"none\" height=\"16\" viewBox=\"0 0 16 16\" width=\"16\" xmlns=\"http://www.w3.org/2000/svg\"><path clip-rule=\"evenodd\" d=\"m15 9h-14c-.56016 0-1-.43984-1-1s.43984-1 1-1h14c.5602 0 1 .43984 1 1s-.4398 1-1 1zm0-5h-14c-.56016 0-1-.43984-1-1s.43984-1 1-1h14c.5602 0 1 .43984 1 1s-.4398 1-1 1zm-14 8h14c.5602 0 1 .4398 1 1s-.4398 1-1 1h-14c-.56016 0-1-.4398-1-1s.43984-1 1-1z\" fill=\"#003ECC\" fill-rule=\"evenodd\"/></svg>", "@claro/../images/src/hamburger-menu.svg", "/Users/basil/Desktop/MyProjects/Drupl/demo-app/web/core/themes/claro/images/src/hamburger-menu.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
