<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_616ea04e0623a9b4c46940d4bd515ab1a9d0be91636e5c0d4b923430f0e2b8a3 extends Twig_Template
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
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  62 => 23,  49 => 19,  114 => 32,  88 => 8,  85 => 7,  71 => 35,  65 => 29,  61 => 27,  44 => 13,  24 => 4,  126 => 42,  113 => 30,  105 => 40,  97 => 23,  91 => 31,  87 => 19,  77 => 15,  63 => 10,  59 => 25,  56 => 7,  34 => 5,  31 => 4,  28 => 3,  46 => 41,  26 => 3,  19 => 1,  79 => 5,  72 => 13,  69 => 25,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 31,  108 => 37,  101 => 39,  98 => 20,  96 => 31,  83 => 18,  74 => 14,  66 => 24,  55 => 16,  52 => 19,  50 => 14,  43 => 9,  41 => 8,  35 => 7,  32 => 12,  29 => 6,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 29,  106 => 26,  103 => 25,  99 => 30,  95 => 19,  92 => 29,  86 => 28,  82 => 22,  80 => 24,  73 => 14,  64 => 19,  60 => 6,  57 => 12,  54 => 21,  51 => 20,  48 => 44,  45 => 17,  42 => 16,  39 => 16,  36 => 5,  33 => 5,  30 => 5,);
    }
}
