<?php

/* profiles/openrestaurant/themes/sizzle/templates/page/page.html.twig */
class __TwigTemplate_96f102c0a9cb73b04451b84db6128782e6d62d1d85c5b1f19c949efa173e70ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        echo "<div class=\"page\">

  <header class=\"page__header\">
    <div class=\"container\">
      ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
    </div>
  </header>

  ";
        // line 15
        if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
            // line 16
            echo "    <div class=\"page__navigation\">
      ";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "hero", array())) {
            // line 22
            echo "    <div class=\"page__hero\">
      ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "hero", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 26
        echo "
  <main class=\"page__content\" role=\"main\">
    <div class=\"container\">
      ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </div>

    ";
        // line 32
        if ($this->getAttribute(($context["page"] ?? null), "bottom", array())) {
            // line 33
            echo "      <div class=\"page__bottom\">
        <div class=\"container\">
          ";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 39
        echo "  </main>

  ";
        // line 41
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 42
            echo "    <footer class=\"page__footer\">
      <div class=\"container\">
        ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 48
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openrestaurant/themes/sizzle/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  115 => 44,  111 => 42,  109 => 41,  105 => 39,  98 => 35,  94 => 33,  92 => 32,  86 => 29,  81 => 26,  75 => 23,  72 => 22,  70 => 21,  67 => 20,  61 => 17,  58 => 16,  56 => 15,  49 => 11,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/openrestaurant/themes/sizzle/templates/page/page.html.twig", "/var/www/html/web/profiles/openrestaurant/themes/sizzle/templates/page/page.html.twig");
    }
}
