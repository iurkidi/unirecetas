<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_7d0c336b4ccc7f908db838363202e58228dd155561a3ff2e651f9e92853b2a9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  200 => 90,  192 => 84,  161 => 64,  152 => 57,  146 => 56,  127 => 47,  184 => 93,  174 => 85,  129 => 71,  118 => 62,  110 => 25,  84 => 19,  90 => 33,  81 => 16,  70 => 22,  76 => 35,  53 => 11,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 41,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  159 => 61,  143 => 75,  135 => 73,  119 => 42,  102 => 38,  67 => 30,  38 => 6,  21 => 2,  25 => 4,  93 => 28,  78 => 16,  94 => 38,  89 => 20,  75 => 27,  68 => 25,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 77,  142 => 59,  138 => 54,  136 => 56,  121 => 51,  117 => 44,  62 => 22,  49 => 10,  114 => 59,  88 => 19,  85 => 32,  71 => 30,  65 => 27,  61 => 9,  44 => 9,  24 => 3,  126 => 42,  113 => 42,  105 => 25,  97 => 22,  91 => 35,  87 => 33,  77 => 30,  63 => 25,  59 => 13,  56 => 8,  34 => 5,  31 => 4,  28 => 3,  46 => 18,  26 => 6,  19 => 1,  79 => 31,  72 => 26,  69 => 13,  47 => 15,  40 => 11,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 74,  131 => 52,  123 => 50,  120 => 45,  115 => 48,  111 => 40,  108 => 56,  101 => 32,  98 => 37,  96 => 31,  83 => 32,  74 => 29,  66 => 34,  55 => 20,  52 => 18,  50 => 16,  43 => 14,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 81,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 79,  154 => 58,  149 => 51,  147 => 76,  144 => 49,  141 => 48,  133 => 55,  130 => 48,  125 => 70,  122 => 43,  116 => 43,  112 => 42,  109 => 29,  106 => 24,  103 => 53,  99 => 21,  95 => 39,  92 => 20,  86 => 28,  82 => 31,  80 => 30,  73 => 14,  64 => 24,  60 => 23,  57 => 11,  54 => 7,  51 => 19,  48 => 8,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
