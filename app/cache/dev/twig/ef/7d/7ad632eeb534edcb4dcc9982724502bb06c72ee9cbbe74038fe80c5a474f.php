<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ef7d7ad632eeb534edcb4dcc9982724502bb06c72ee9cbbe74038fe80c5a474f extends Twig_Template
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
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 9,  78 => 40,  94 => 22,  89 => 20,  75 => 17,  68 => 14,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  62 => 23,  49 => 19,  114 => 32,  88 => 6,  85 => 19,  71 => 35,  65 => 29,  61 => 27,  44 => 9,  24 => 3,  127 => 42,  117 => 44,  113 => 30,  105 => 40,  97 => 23,  91 => 31,  87 => 19,  77 => 15,  63 => 10,  59 => 25,  56 => 9,  34 => 5,  31 => 4,  28 => 3,  46 => 10,  26 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 31,  108 => 37,  101 => 24,  98 => 40,  96 => 31,  83 => 18,  74 => 14,  66 => 24,  55 => 16,  52 => 19,  50 => 8,  43 => 8,  41 => 7,  35 => 7,  32 => 6,  29 => 6,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 43,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 29,  106 => 26,  103 => 25,  99 => 30,  95 => 19,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 14,  64 => 12,  60 => 6,  57 => 12,  54 => 11,  51 => 20,  48 => 45,  45 => 17,  42 => 16,  39 => 6,  36 => 7,  33 => 4,  30 => 3,);
    }
}
