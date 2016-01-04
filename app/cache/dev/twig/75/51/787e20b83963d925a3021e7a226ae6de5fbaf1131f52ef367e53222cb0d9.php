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
        return array (  90 => 32,  197 => 88,  161 => 64,  152 => 57,  146 => 56,  127 => 28,  244 => 162,  232 => 156,  213 => 152,  205 => 150,  195 => 147,  160 => 113,  84 => 29,  110 => 22,  81 => 16,  76 => 17,  70 => 29,  34 => 5,  126 => 42,  113 => 42,  97 => 22,  77 => 15,  53 => 10,  114 => 36,  65 => 27,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 160,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 33,  61 => 12,  273 => 96,  269 => 94,  254 => 170,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 154,  219 => 76,  217 => 153,  208 => 68,  204 => 72,  179 => 76,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 25,  67 => 22,  63 => 15,  59 => 13,  38 => 6,  87 => 27,  21 => 2,  31 => 3,  93 => 28,  88 => 31,  78 => 26,  44 => 12,  94 => 34,  89 => 20,  85 => 38,  75 => 24,  68 => 14,  56 => 11,  27 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 28,  62 => 22,  49 => 10,  24 => 1,  25 => 4,  46 => 14,  26 => 9,  19 => 1,  79 => 5,  72 => 16,  69 => 13,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 111,  139 => 45,  131 => 52,  123 => 50,  120 => 20,  115 => 43,  111 => 83,  108 => 19,  101 => 32,  98 => 20,  96 => 30,  83 => 37,  74 => 26,  66 => 12,  55 => 20,  52 => 26,  50 => 18,  43 => 8,  41 => 5,  35 => 6,  32 => 4,  29 => 3,  209 => 151,  203 => 78,  199 => 148,  193 => 73,  189 => 143,  187 => 81,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 110,  133 => 55,  130 => 52,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 29,  106 => 24,  103 => 23,  99 => 40,  95 => 39,  92 => 35,  86 => 28,  82 => 28,  80 => 25,  73 => 16,  64 => 13,  60 => 22,  57 => 11,  54 => 7,  51 => 17,  48 => 13,  45 => 8,  42 => 7,  39 => 10,  36 => 4,  33 => 3,  30 => 3,);
    }
}
