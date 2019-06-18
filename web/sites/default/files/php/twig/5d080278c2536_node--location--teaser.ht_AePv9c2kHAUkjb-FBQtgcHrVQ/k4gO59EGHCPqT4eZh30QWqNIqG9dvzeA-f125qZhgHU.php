<?php

/* profiles/openrestaurant/themes/sizzle/templates/node/node--location--teaser.html.twig */
class __TwigTemplate_11296fbae69a94d6020ed8ce2aebb57f33c2f976181d143d1612a4389dd716ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("node.html.twig", "profiles/openrestaurant/themes/sizzle/templates/node/node--location--teaser.html.twig", 7);
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
        $tags = array("trans" => 35);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
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
        echo "  <div class=\"row\">
    <div class=\"col-sm-4\">
      <div class=\"location__images\">
        ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_location_images", array()), 0, array(), "array"), "html", null, true));
        echo "
      </div>
    </div>
    <div class=\"col-sm-7\">
      <h2 class=\"location__title\">
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</a>
      </h2>

      <div class=\"row\">
        <div class=\"col-sm-6\">
          ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_location_address", array()), "html", null, true));
        echo "

          <div class=\"location__opening-hours\">
            ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_location_opening_hours", array()), "html", null, true));
        echo "
          </div>
        </div>
        <div class=\"col-sm-6\">
          ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_location_contact", array()), "html", null, true));
        echo "
        </div>
      </div>

      <a href=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\" class=\"location__readmore btn btn--xs\">
        <i class=\"fa fa-map-marker\"></i> ";
        // line 35
        echo t("View location", array());
        // line 36
        echo "      </a>

      <a href=\"";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\" class=\"location__readmore btn btn--xs\">
        <i class=\"fa fa-cutlery\"></i> ";
        // line 39
        echo t("View menu", array());
        // line 40
        echo "      </a>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openrestaurant/themes/sizzle/templates/node/node--location--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  112 => 39,  108 => 38,  104 => 36,  102 => 35,  98 => 34,  91 => 30,  84 => 26,  78 => 23,  68 => 18,  60 => 13,  55 => 10,  52 => 9,  11 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/openrestaurant/themes/sizzle/templates/node/node--location--teaser.html.twig", "/var/www/html/web/profiles/openrestaurant/themes/sizzle/templates/node/node--location--teaser.html.twig");
    }
}
