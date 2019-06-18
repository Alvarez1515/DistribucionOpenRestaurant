<?php

/* profiles/openrestaurant/themes/sizzle/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_4a2c80ad2af5e2013a47c463b709de8b1907b1685efe4bde762fbaa95660483b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "block" => 26, "if" => 28);
        $filters = array("clean_class" => 18, "without" => 22, "t" => 29);
        $functions = array("path" => 29);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class', 'without', 't'),
                array('path')
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

        // line 16
        $context["classes"] = array(0 => "block", 1 => ((        // line 18
($context["bundle"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(($context["bundle"] ?? null)))) : ("")), 2 => ((        // line 19
($context["id"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(($context["id"] ?? null)))) : ("")));
        // line 22
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "id"), "html", null, true));
        echo ">
  ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "</div>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"site-branding\">
      ";
        // line 28
        if ((($context["site_name"] ?? null) || ($context["site_logo"] ?? null))) {
            // line 29
            echo "        <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">
          ";
            // line 30
            if (($context["site_logo"] ?? null)) {
                // line 31
                echo "            <img src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                echo "\" class=\"site-branding__logo\" />
          ";
            }
            // line 33
            echo "          ";
            if (($context["site_name"] ?? null)) {
                // line 34
                echo "            <h1 class=\"site-branding__name\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
                echo "</h1>
          ";
            }
            // line 36
            echo "        </a>
      ";
        }
        // line 38
        echo "      ";
        if (($context["site_slogan"] ?? null)) {
            // line 39
            echo "        <h5 class=\"site-branding__slogan\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
            echo "</h5>
      ";
        }
        // line 41
        echo "    </div>
  ";
    }

    public function getTemplateName()
    {
        return "profiles/openrestaurant/themes/sizzle/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  110 => 39,  107 => 38,  103 => 36,  97 => 34,  94 => 33,  86 => 31,  84 => 30,  77 => 29,  75 => 28,  72 => 27,  69 => 26,  64 => 43,  62 => 26,  57 => 24,  53 => 23,  48 => 22,  46 => 19,  45 => 18,  44 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/openrestaurant/themes/sizzle/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/profiles/openrestaurant/themes/sizzle/templates/block/block--system-branding-block.html.twig");
    }
}
