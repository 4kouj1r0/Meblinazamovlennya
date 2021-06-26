<?php

/* default/template/common/column_right.twig */
class __TwigTemplate_0338d7d557a9ee0b1cf067c3d5d1f3d6a7b79625fbc91a6fd8fb1d707b64dcb7 extends Twig_Template
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
        // line 1
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "<aside id=\"column-right\" class=\"col-sm-3 hidden-xs\">
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 4
                echo "  ";
                echo $context["module"];
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/column_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/* <aside id="column-right" class="col-sm-3 hidden-xs">*/
/*   {% for module in modules %}*/
/*   {{ module }}*/
/*   {% endfor %}*/
/* </aside>*/
/* {% endif %}*/
/* */
