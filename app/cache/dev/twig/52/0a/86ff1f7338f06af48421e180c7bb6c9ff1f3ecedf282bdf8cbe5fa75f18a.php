<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_520a86ff1f7338f06af48421e180c7bb6c9ff1f3ecedf282bdf8cbe5fa75f18a extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  88 => 8,  85 => 7,  71 => 35,  65 => 29,  61 => 27,  44 => 13,  24 => 1,  127 => 42,  117 => 31,  113 => 30,  105 => 28,  97 => 23,  91 => 20,  87 => 19,  77 => 15,  63 => 10,  59 => 25,  56 => 7,  34 => 5,  31 => 4,  28 => 3,  46 => 42,  26 => 3,  19 => 1,  79 => 5,  72 => 13,  69 => 31,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  111 => 31,  108 => 37,  101 => 33,  98 => 20,  96 => 31,  83 => 18,  74 => 14,  66 => 11,  55 => 16,  52 => 19,  50 => 14,  43 => 9,  41 => 8,  35 => 7,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 43,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 29,  106 => 26,  103 => 25,  99 => 30,  95 => 19,  92 => 29,  86 => 24,  82 => 22,  80 => 24,  73 => 14,  64 => 19,  60 => 6,  57 => 12,  54 => 22,  51 => 10,  48 => 45,  45 => 17,  42 => 16,  39 => 37,  36 => 5,  33 => 5,  30 => 5,);
    }
}
