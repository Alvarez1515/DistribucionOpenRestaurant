<?php

/* profiles/openrestaurant/themes/sizzle/templates/node/node--blog-post--full.html.twig */
class __TwigTemplate_80daf758b5ae57a5e8e037941a3bb74c197a079fbf2916e90aeb5737a3252c2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("node.html.twig", "profiles/openrestaurant/themes/sizzle/templates/node/node--blog-post--full.html.twig", 7);
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
        $tags = array("set" => 8, "if" => 15, "trans" => 17);
        $filters = array("format_date" => 8);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('format_date'),
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

        // line 8
        $context["date"] = call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute(($context["node"] ?? null), "createdtime", array()), "date_medium"));
        // line 7
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "row"), "method"), "html", null, true));
        echo ">

    <div class=\"col-sm-5\">

      ";
        // line 15
        if (($context["display_submitted"] ?? null)) {
            // line 16
            echo "        <div class=\"blog-post__date visible-xs\">
          ";
            // line 17
            echo t("Posted on", array());
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
            echo "</div>
      ";
        }
        // line 19
        echo "
      <div class=\"blog-post__featured-image\">
        ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_blog_post_featured_image", array()), "html", null, true));
        echo "
      </div>
    </div>

    <div class=\"col-sm-7\">
      <h1 class=\"page__title\">";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</h1>

      ";
        // line 28
        if (($context["display_submitted"] ?? null)) {
            // line 29
            echo "        <div class=\"blog-post__date hidden-xs\">
          ";
            // line 30
            echo t("Posted on", array());
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
            echo "</div>
      ";
        }
        // line 32
        echo "
      <div class=\"blog-post__body\">
        ";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_blog_post_body", array()), "html", null, true));
        echo "
      </div>

      <a href=\"/blog\" class=\"btn btn--secondary\">
        <i class=\"fa fa-long-arrow-left\"></i> ";
        // line 38
        echo t("See all blog posts", array());
        // line 39
        echo "      </a>
    </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openrestaurant/themes/sizzle/templates/node/node--blog-post--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  118 => 38,  111 => 34,  107 => 32,  100 => 30,  97 => 29,  95 => 28,  90 => 26,  82 => 21,  78 => 19,  71 => 17,  68 => 16,  66 => 15,  58 => 11,  55 => 10,  51 => 7,  49 => 8,  11 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/openrestaurant/themes/sizzle/templates/node/node--blog-post--full.html.twig", "/var/www/html/web/profiles/openrestaurant/themes/sizzle/templates/node/node--blog-post--full.html.twig");
    }
}
