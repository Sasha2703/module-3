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

/* modules/custom/sasha/templates/create-response-page.html.twig */
class __TwigTemplate_946b5cb07ee44cbdc628e26fdea8f63ece107f8a9ce2751486d8e1d6040b7d9f extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sasha/responses_css"), "html", null, true);
        echo "
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 2, $this->source), "html", null, true);
        echo "
";
        // line 3
        if (($context["responses"] ?? null)) {
            // line 4
            echo "<div class=\"responses\">
  ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["responses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 6
                echo "    <div class=\"response\">
      <div class=\"personal-data\">
        ";
                // line 8
                if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["response"], "avatar", [], "any", false, false, true, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#isset"] ?? null) : null)) {
                    // line 9
                    echo "          <div class=\"response-avatar\"><a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["response"], "avatar", [], "any", false, false, true, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#uri"] ?? null) : null), 9, $this->source)), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["response"], "avatar", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                    echo "</a></div>
        ";
                } else {
                    // line 11
                    echo "          <div class=\"response-avatar\"><a href=\"/modules/custom/sasha/images/image-not-found.png\" target=\"_blank\"><img alt=\"\" title=\"avatar\"  class=\"img-responsive\" src=\"/modules/custom/sasha/images/image-not-found.png\" width=\"50\" height=\"50\"></a></div>
        ";
                }
                // line 13
                echo "        <h4 class=\"response-name\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["response"], "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "</h4>
        <h4 class=\"response-created-time\">";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["response"], "created", [], "any", false, false, true, 14), 14, $this->source), "M-d-Y H:i:s"), "html", null, true);
                echo "</h4>
      </div>
      <div class=\"response-content\">
        <h4 class=\"response-message\">";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["response"], "text_response", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</h4>
        ";
                // line 18
                if ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["response"], "picture", [], "any", false, false, true, 18)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#isset"] ?? null) : null)) {
                    // line 19
                    echo "          <div class=\"response-image\"><a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["response"], "picture", [], "any", false, false, true, 19)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#uri"] ?? null) : null), 19, $this->source)), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["response"], "picture", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo "</a></div>
        ";
                }
                // line 21
                echo "      </div>
      <div class=\"contacts\">
        <h4>Contacts: </h4><h4 class=\"response-email\">";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["response"], "email", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "</h4>  <h4 class=\"response-phone\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["response"], "phone", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "</h4>
      </div>
    ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", [0 => "administer nodes"], "method", false, false, true, 25)) {
                    // line 26
                    echo "      <div class=\"response-btn\">
        <div class=\"edit-cat btn\"><a href=\"/admin/structure/response_entity/";
                    // line 27
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                    echo "/edit\" class=\"use-ajax edit-response-btn\" data-dialog-type=\"modal\">Edit</a></div>
        <div class=\"delete-cat btn\"><a href=\"/admin/structure/response_entity/";
                    // line 28
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                    echo "/delete\" class=\"use-ajax delete-response-btn\" data-dialog-type=\"modal\">Delete</a></div>
      </div>
    ";
                }
                // line 31
                echo "    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "</div>
";
        }
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 35, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/custom/sasha/templates/create-response-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 35,  132 => 33,  125 => 31,  119 => 28,  115 => 27,  112 => 26,  110 => 25,  103 => 23,  99 => 21,  91 => 19,  89 => 18,  85 => 17,  79 => 14,  74 => 13,  70 => 11,  62 => 9,  60 => 8,  56 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/sasha/templates/create-response-page.html.twig", "/var/www/web/modules/custom/sasha/templates/create-response-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "for" => 5);
        static $filters = array("escape" => 1, "date" => 14);
        static $functions = array("attach_library" => 1, "file_url" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'date'],
                ['attach_library', 'file_url']
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
