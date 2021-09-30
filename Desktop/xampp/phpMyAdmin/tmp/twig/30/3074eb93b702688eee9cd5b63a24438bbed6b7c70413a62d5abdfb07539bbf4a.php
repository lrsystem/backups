<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes.twig */
class __TwigTemplate_97094557b89a30964075ab7fbc88ef75d00590e84f974eff85653bbc360c97f8 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1>phpMyAdmin - ";
        echo _gettext("Theme");
        echo "</h1>
<p>
  <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/themes/"), "html", null, true);
        echo "#pma_";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" rel=\"noopener noreferrer\" target=\"_blank\">
    ";
        // line 4
        echo _gettext("Get more themes!");
        // line 5
        echo "  </a>
</p>
";
        // line 7
        echo ($context["previews"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  51 => 5,  49 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes.twig", "C:\\Users\\HP-PC\\Desktop\\xampp\\phpMyAdmin\\templates\\themes.twig");
    }
}
