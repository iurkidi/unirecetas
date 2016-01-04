<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_7551787e20b83963d925a3021e7a226ae6de5fbaf1131f52ef367e53222cb0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  200 => 90,  152 => 57,  202 => 100,  192 => 84,  180 => 86,  161 => 64,  153 => 80,  129 => 64,  126 => 63,  174 => 83,  165 => 83,  150 => 76,  146 => 56,  110 => 22,  84 => 29,  90 => 32,  81 => 16,  70 => 22,  76 => 17,  53 => 10,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 85,  169 => 84,  140 => 55,  132 => 66,  128 => 70,  107 => 41,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  159 => 61,  143 => 77,  135 => 53,  119 => 42,  102 => 17,  67 => 30,  38 => 6,  21 => 2,  25 => 4,  93 => 28,  78 => 26,  94 => 34,  89 => 20,  75 => 27,  68 => 25,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 74,  138 => 54,  136 => 69,  121 => 62,  62 => 22,  49 => 10,  114 => 57,  88 => 31,  85 => 32,  71 => 30,  65 => 27,  61 => 12,  44 => 9,  24 => 3,  127 => 28,  117 => 19,  113 => 42,  105 => 18,  97 => 22,  91 => 35,  87 => 33,  77 => 15,  63 => 25,  59 => 13,  56 => 11,  34 => 5,  31 => 3,  28 => 3,  46 => 18,  26 => 9,  19 => 1,  79 => 31,  72 => 26,  69 => 34,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 81,  145 => 46,  139 => 45,  131 => 52,  123 => 50,  120 => 20,  115 => 43,  111 => 40,  108 => 19,  101 => 36,  98 => 37,  96 => 31,  83 => 32,  74 => 35,  66 => 34,  55 => 20,  52 => 18,  50 => 16,  43 => 14,  41 => 5,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 90,  187 => 81,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 77,  149 => 51,  147 => 78,  144 => 49,  141 => 48,  133 => 55,  130 => 48,  125 => 44,  122 => 43,  116 => 43,  112 => 42,  109 => 47,  106 => 53,  103 => 23,  99 => 21,  95 => 39,  92 => 20,  86 => 28,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 23,  57 => 11,  54 => 7,  51 => 19,  48 => 8,  45 => 8,  42 => 7,  39 => 7,  36 => 4,  33 => 3,  30 => 3,);
    }
}
