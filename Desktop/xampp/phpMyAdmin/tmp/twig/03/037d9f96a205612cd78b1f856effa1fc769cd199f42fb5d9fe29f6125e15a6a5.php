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

/* server/replication/master_configuration.twig */
class __TwigTemplate_215c8e2179333734f4898b74bb57b65c557dbdbab3d4836819c4008fe4aba1a9 extends \Twig\Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo _gettext("Master configuration");
        echo "</legend>
  <p>
    ";
        // line 4
        echo _gettext("This server is not configured as a master server in a replication process. You can choose from either replicating all databases and ignoring some of them (useful if you want to replicate a majority of the databases) or you can choose to ignore all databases by default and allow only certain databases to be replicated. Please select the mode:");
        // line 7
        echo "  </p>
  <select name=\"db_type\" id=\"db_type\">
    <option value=\"all\">";
        // line 9
        echo _gettext("Replicate all databases; Ignore:");
        echo "</option>
    <option value=\"ign\">";
        // line 10
        echo _gettext("Ignore all databases; Replicate:");
        echo "</option>
  </select>
  <p>";
        // line 12
        echo _gettext("Please select databases:");
        echo "</p>
  ";
        // line 13
        echo ($context["database_multibox"] ?? null);
        echo "
  <p>
    ";
        // line 15
        echo _gettext("Now, add the following lines at the end of [mysqld] section in your my.cnf and please restart the MySQL server afterwards.");
        // line 18
        echo "  </p>
  <pre id=\"rep\"></pre>
  <p>
    ";
        // line 21
        echo _gettext("Once you restarted MySQL server, please click on Go button. Afterwards, you should see a message informing you, that this server <strong>is</strong> configured as master.");
        // line 24
        echo "  </p>
</fieldset>

<fieldset class=\"tblFooters\">
  <form method=\"post\" action=\"";
        // line 28
        echo PhpMyAdmin\Url::getFromRoute("/server/replication");
        echo "\">
    ";
        // line 29
        echo PhpMyAdmin\Url::getHiddenInputs("", "");
        echo "
    <input id=\"goButton\" class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 30
        echo _gettext("Go");
        echo "\">
  </form>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "server/replication/master_configuration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  88 => 29,  84 => 28,  78 => 24,  76 => 21,  71 => 18,  69 => 15,  64 => 13,  60 => 12,  55 => 10,  51 => 9,  47 => 7,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/replication/master_configuration.twig", "C:\\Users\\HP-PC\\Desktop\\xampp\\phpMyAdmin\\templates\\server\\replication\\master_configuration.twig");
    }
}
