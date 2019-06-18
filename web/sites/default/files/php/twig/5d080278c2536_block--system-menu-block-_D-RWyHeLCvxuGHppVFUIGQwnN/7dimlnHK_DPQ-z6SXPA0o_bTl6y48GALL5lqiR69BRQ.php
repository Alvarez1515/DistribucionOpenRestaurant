<?php

/* profiles/openrestaurant/themes/sizzle/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_a86f416f57f6c742975b4c661cbdba4d64035d557d66ce2cce237ec3a6903a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "profiles/openrestaurant/themes/sizzle/templates/block/block--system-menu-block--main.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("trans" => 12);
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

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<nav class=\"navbar navbar-default\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs pull-left\">
      <a href=\"/menu\" class=\"btn\">";
        // line 12
        echo t("Menu", array());
        echo "</a>
    </div>
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
      <i class=\"fa fa-cutlery fa-2x\"></i>
    </button>
  </div>

  <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
    ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "profiles/openrestaurant/themes/sizzle/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  60 => 12,  55 => 9,  52 => 8,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/openrestaurant/themes/sizzle/templates/block/block--system-menu-block--main.html.twig", "/var/www/html/web/profiles/openrestaurant/themes/sizzle/templates/block/block--system-menu-block--main.html.twig");
    }
}
