<?php

/* common/footer.twig */
class __TwigTemplate_90487cde9ef1177b82e4d687b5cb701d5da8eb425c7b6de46e6168ec89ebb794 extends Twig_Template
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
        echo "<footer>
  <div class=\"container\">
    <a href=\"http://opencart.ru\" target=\"_blank\">";
        // line 3
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>
  </div>
</footer>
</body></html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <a href="http://opencart.ru" target="_blank">{{ text_project }}</a>*/
/*   </div>*/
/* </footer>*/
/* </body></html>*/
