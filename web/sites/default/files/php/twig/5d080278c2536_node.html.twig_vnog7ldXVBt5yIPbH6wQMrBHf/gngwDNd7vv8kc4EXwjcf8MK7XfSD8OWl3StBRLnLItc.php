<?php

/* node.html.twig */
class __TwigTemplate_6bc902d8bd925801e29af712ea9b012d3117a7fd835ae00361e7bf9f192aefd4 extends Twig_Template
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
        $tags = array("set" => 7, "block" => 23);
        $filters = array("clean_class" => 7);
        $functions = array("attach_library" => 18);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
                array('clean_class'),
                array('attach_library')
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
        $context["bundle"] = \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["node"] ?? null), "bundle", array()));
        // line 9
        $context["classes"] = array(0 => "node", 1 =>         // line 11
($context["bundle"] ?? null), 2 => (($this->getAttribute(        // line 12
($context["node"] ?? null), "isPromoted", array(), "method")) ? ((($context["bundle"] ?? null) . "--promoted")) : ("")), 3 => (($this->getAttribute(        // line 13
($context["node"] ?? null), "isSticky", array(), "method")) ? ((($context["bundle"] ?? null) . "--sticky")) : ("")), 4 => (( !$this->getAttribute(        // line 14
($context["node"] ?? null), "isPublished", array(), "method")) ? ((($context["bundle"] ?? null) . "--unpublished")) : ("")), 5 => ((        // line 15
($context["view_mode"] ?? null)) ? (((($context["bundle"] ?? null) . "--") . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true));
        echo "
<article";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "
  ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_disqus", array()), "html", null, true));
        echo "
</article>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  82 => 23,  75 => 27,  72 => 26,  70 => 23,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  51 => 15,  50 => 14,  49 => 13,  48 => 12,  47 => 11,  46 => 9,  44 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node.html.twig", "profiles/openrestaurant/themes/sizzle/templates/node/node.html.twig");
    }
}
