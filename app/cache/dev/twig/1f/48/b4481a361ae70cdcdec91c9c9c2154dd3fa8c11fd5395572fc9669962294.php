<?php

/* uniRecetasBundle:autor:edit.html.twig */
class __TwigTemplate_1f48b4481a361ae70cdcdec91c9c9c2154dd3fa8c11fd5395572fc9669962294 extends Twig_Template
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
        echo "<h1>Editar autor</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("autor");
        echo "\">
            Volver atras
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:autor:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  200 => 90,  192 => 84,  161 => 64,  152 => 57,  146 => 56,  127 => 47,  184 => 93,  174 => 85,  129 => 71,  118 => 62,  110 => 25,  84 => 19,  90 => 33,  81 => 16,  70 => 22,  76 => 35,  53 => 20,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 41,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  159 => 61,  143 => 75,  135 => 73,  119 => 42,  102 => 38,  67 => 30,  38 => 6,  21 => 2,  25 => 4,  93 => 28,  78 => 16,  94 => 38,  89 => 20,  75 => 27,  68 => 25,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 77,  142 => 59,  138 => 54,  136 => 56,  121 => 51,  117 => 44,  62 => 22,  49 => 14,  114 => 59,  88 => 19,  85 => 32,  71 => 30,  65 => 27,  61 => 9,  44 => 9,  24 => 3,  126 => 42,  113 => 42,  105 => 25,  97 => 22,  91 => 35,  87 => 33,  77 => 30,  63 => 25,  59 => 22,  56 => 8,  34 => 5,  31 => 4,  28 => 3,  46 => 18,  26 => 6,  19 => 1,  79 => 31,  72 => 26,  69 => 13,  47 => 15,  40 => 11,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 74,  131 => 52,  123 => 50,  120 => 45,  115 => 48,  111 => 40,  108 => 56,  101 => 32,  98 => 37,  96 => 31,  83 => 32,  74 => 29,  66 => 34,  55 => 20,  52 => 18,  50 => 16,  43 => 14,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 81,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 79,  154 => 58,  149 => 51,  147 => 76,  144 => 49,  141 => 48,  133 => 55,  130 => 48,  125 => 70,  122 => 43,  116 => 43,  112 => 42,  109 => 29,  106 => 24,  103 => 53,  99 => 21,  95 => 39,  92 => 20,  86 => 28,  82 => 31,  80 => 30,  73 => 14,  64 => 24,  60 => 23,  57 => 11,  54 => 7,  51 => 19,  48 => 8,  45 => 13,  42 => 10,  39 => 7,  36 => 7,  33 => 4,  30 => 7,);
    }
}
