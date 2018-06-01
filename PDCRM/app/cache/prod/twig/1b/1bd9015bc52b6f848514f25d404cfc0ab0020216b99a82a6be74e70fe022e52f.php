<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2c9590071d58fe65302897c5c485c6d28e3fa74e0f9dcb2c0d34753aa5d97453 extends Twig_Template
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
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
