<?php

/* profiles/openrestaurant/themes/sizzle/templates/node/node--menu--full.html.twig */
class __TwigTemplate_c4254485ab5ca274fb23588cae5e5f5ad5243245e172f95b0678617da49356ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("node.html.twig", "profiles/openrestaurant/themes/sizzle/templates/node/node--menu--full.html.twig", 7);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 45, "trans" => 53);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "row"), "method"), "html", null, true));
        echo ">
    <div class=\"col-sm-4\">
      <div class=\"text--lead visible-xs\">
        ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_menu_teaser", array()), "html", null, true));
        echo "
      </div>

      <div class=\"menu__nutrition-types visible-xs\">
        ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_menu_nutrition_types", array()), "html", null, true));
        echo "
      </div>

      <div class=\"menu__images\">
        ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_menu_images", array()), "html", null, true));
        echo "
      </div>
    </div>
    <div class=\"col-sm-8\">
      <h1 class=\"page__title\">
        ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "
      </h1>

      <div class=\"lead hidden-xs\">
        ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_menu_teaser", array()), "html", null, true));
        echo "
      </div>

      <div class=\"menu__nutrition-types hidden-xs\">
        ";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_menu_nutrition_types", array()), "html", null, true));
        echo "
      </div>

      <div class=\"menu__description\">
        ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_menu_description", array()), "html", null, true));
        echo "
      </div>

      <div class=\"menu__variants\">
        ";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_menu_variants", array()), "html", null, true));
        echo "
      </div>

      ";
        // line 45
        if ($this->getAttribute(($context["content"] ?? null), "field_menu_locations", array())) {
            // line 46
            echo "        <div class=\"menu__locations\">
          <strong>";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Available at these locations:"));
            echo "</strong>
          ";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_menu_locations", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 51
        echo "
      <a href=\"/menu\" class=\"btn btn--secondary\">
        <i class=\"fa fa-long-arrow-left\"></i> ";
        // line 53
        echo t("See all menus", array());
        // line 54
        echo "      </a>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openrestaurant/themes/sizzle/templates/node/node--menu--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 54,  137 => 53,  133 => 51,  127 => 48,  123 => 47,  120 => 46,  118 => 45,  112 => 42,  105 => 38,  98 => 34,  91 => 30,  84 => 26,  76 => 21,  69 => 17,  62 => 13,  55 => 10,  52 => 9,  11 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/openrestaurant/themes/sizzle/templates/node/node--menu--full.html.twig", "/var/www/html/web/profiles/openrestaurant/themes/sizzle/templates/node/node--menu--full.html.twig");
    }
}
