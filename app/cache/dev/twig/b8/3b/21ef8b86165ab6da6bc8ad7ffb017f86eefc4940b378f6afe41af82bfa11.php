<?php

/* uniRecetasBundle:receta:new.html.twig */
class __TwigTemplate_b83b21ef8b86165ab6da6bc8ad7ffb017f86eefc4940b378f6afe41af82bfa11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniRecetasBundle::layout.html.twig");

        $this->blocks = array(
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniRecetasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_central($context, array $blocks = array())
    {
        // line 4
        echo "<h1>receta creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:receta:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 162,  232 => 156,  213 => 152,  205 => 150,  195 => 147,  160 => 113,  84 => 19,  110 => 25,  81 => 16,  76 => 13,  70 => 12,  34 => 5,  126 => 42,  113 => 30,  97 => 22,  77 => 15,  53 => 18,  114 => 32,  65 => 10,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 160,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 9,  273 => 96,  269 => 94,  254 => 170,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 154,  219 => 76,  217 => 153,  208 => 68,  204 => 72,  179 => 130,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 25,  67 => 24,  63 => 25,  59 => 21,  38 => 6,  87 => 28,  21 => 2,  31 => 4,  93 => 28,  88 => 19,  78 => 16,  44 => 9,  94 => 33,  89 => 20,  85 => 7,  75 => 27,  68 => 14,  56 => 8,  27 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 25,  91 => 20,  62 => 22,  49 => 15,  24 => 1,  25 => 4,  46 => 19,  26 => 6,  19 => 1,  79 => 5,  72 => 16,  69 => 13,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 111,  139 => 45,  131 => 52,  123 => 41,  120 => 27,  115 => 43,  111 => 83,  108 => 36,  101 => 32,  98 => 20,  96 => 31,  83 => 18,  74 => 26,  66 => 12,  55 => 15,  52 => 26,  50 => 10,  43 => 8,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 151,  203 => 78,  199 => 148,  193 => 73,  189 => 143,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 110,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 29,  106 => 24,  103 => 23,  99 => 21,  95 => 19,  92 => 20,  86 => 28,  82 => 22,  80 => 19,  73 => 14,  64 => 11,  60 => 6,  57 => 11,  54 => 7,  51 => 17,  48 => 44,  45 => 16,  42 => 10,  39 => 7,  36 => 6,  33 => 5,  30 => 4,);
    }
}
