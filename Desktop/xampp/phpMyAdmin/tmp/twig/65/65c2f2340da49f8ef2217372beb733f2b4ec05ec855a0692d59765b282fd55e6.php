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

/* server/replication/database_multibox.twig */
class __TwigTemplate_02e23893c3bc592899a20d23f21bfc024a7fb169cf31ea4bd86eaf5aeb2abd78 extends \Twig\Template
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
        echo "<select id=\"db_select\" class=\"width96\" name=\"db_select[]\" size=\"6\" multiple>
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["databases"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
            // line 3
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $context["database"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["database"], "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</select>
<p>
  <a href=\"#\" id=\"db_select_href\">";
        // line 7
        echo _gettext("Select all");
        echo "</a> /
  <a href=\"#\" id=\"db_reset_href\">";
        // line 8
        echo _gettext("Unselect all");
        echo "</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "server/replication/database_multibox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  59 => 7,  55 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/replication/database_multibox.twig", "C:\\Users\\HP-PC\\Desktop\\xampp\\phpMyAdmin\\templates\\server\\replication\\database_multibox.twig");
    }
}
