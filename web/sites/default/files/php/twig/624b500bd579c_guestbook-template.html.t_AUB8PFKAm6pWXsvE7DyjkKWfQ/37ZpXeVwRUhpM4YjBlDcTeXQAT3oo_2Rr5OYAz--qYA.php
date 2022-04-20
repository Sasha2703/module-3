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

/* modules/custom/guestbook/templates/guestbook-template.html.twig */
class __TwigTemplate_1c707e5a4381755fd8bc26b933ce246b69148588ea3d7e4de4c876180c333ee3 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("guestbook/guestbook_css"), "html", null, true);
        echo "

  ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 3, $this->source), "html", null, true);
        echo "

<div>
  ";
        // line 6
        if (($context["responses"] ?? null)) {
            // line 7
            echo "    <div class=\"responses\">
      ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["responses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 9
                echo "        <div class=\"book\">
          <div class=\"personal-data\">
            ";
                // line 11
                if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["book"], "avatar", [], "any", false, false, true, 11)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#isset"] ?? null) : null)) {
                    // line 12
                    echo "              <div class=\"book-avatar\"><a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["book"], "avatar", [], "any", false, false, true, 12)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#uri"] ?? null) : null), 12, $this->source)), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "avatar", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo "</a></div>
            ";
                } else {
                    // line 14
                    echo "              <div class=\"book-avatar\"><a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["book"], "avatar", [], "any", false, false, true, 14)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#uri"] ?? null) : null), 14, $this->source), "html", null, true);
                    echo "\" target=\"_blank\"><img alt=\"\" title=\"avatar\"  class=\"img-responsive\" src=\"/modules/custom/guestbook/images/default_user.png\" width=\"50\" height=\"50\"></a></div>
            ";
                }
                // line 16
                echo "            <h4 class=\"book-name\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</h4>
            <h4 class=\"book-created-time\">";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "created_time", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</h4>

          </div>
          <div class=\"book-content\">
            <h4 class=\"book-message\">";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "message", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</h4>
            <div class=\"book-image\"><a href=\"";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, true, 22)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#uri"] ?? null) : null), 22, $this->source)), "html", null, true);
                echo "\" target=\"_blank\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "</a></div>
          </div>
          <div class=\"contacts\">
            <h4>Contacts: </h4><h4 class=\"book-email\">";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "email", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</h4>  <h4 class=\"book-phone\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "phone", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</h4>
          </div>
          ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", [0 => "administer nodes"], "method", false, false, true, 27)) {
                    // line 28
                    echo "            <div class=\"book-btn\">
              <div class=\"edit-cat\"><a href=\"/guestbook/edit/";
                    // line 29
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                    echo "\" class=\"use-ajax edit-book-btn\" data-dialog-type=\"modal\">Edit</a></div>
              <div class=\"delete-cat\"><a href=\"/guestbook/delete/";
                    // line 30
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "\" class=\"use-ajax delete-book-btn\" data-dialog-type=\"modal\">Delete</a></div>
            </div>
          ";
                }
                // line 33
                echo "        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </div>
  ";
        }
        // line 37
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/guestbook/templates/guestbook-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  132 => 35,  125 => 33,  119 => 30,  115 => 29,  112 => 28,  110 => 27,  103 => 25,  95 => 22,  91 => 21,  84 => 17,  79 => 16,  73 => 14,  65 => 12,  63 => 11,  59 => 9,  55 => 8,  52 => 7,  50 => 6,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/guestbook/templates/guestbook-template.html.twig", "/var/www/web/modules/custom/guestbook/templates/guestbook-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 8);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "file_url" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
