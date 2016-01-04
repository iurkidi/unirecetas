<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_53a1780e7abf69322b0cc1487469fccbef142947684384bb71197c2f1449bd5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  200 => 90,  192 => 84,  161 => 64,  152 => 57,  146 => 56,  127 => 60,  184 => 93,  174 => 85,  129 => 71,  118 => 62,  110 => 22,  84 => 29,  90 => 32,  81 => 16,  70 => 22,  76 => 28,  53 => 10,  58 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 41,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  159 => 61,  143 => 75,  135 => 62,  119 => 42,  102 => 17,  67 => 30,  38 => 6,  21 => 2,  25 => 35,  93 => 28,  78 => 26,  94 => 34,  89 => 20,  75 => 27,  68 => 25,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 77,  142 => 59,  138 => 54,  136 => 56,  121 => 51,  117 => 19,  62 => 22,  49 => 13,  114 => 59,  88 => 31,  85 => 32,  71 => 30,  65 => 27,  61 => 12,  44 => 9,  24 => 3,  126 => 42,  113 => 42,  105 => 18,  97 => 41,  91 => 35,  87 => 33,  77 => 30,  63 => 19,  59 => 13,  56 => 11,  34 => 5,  31 => 3,  28 => 3,  46 => 8,  26 => 9,  19 => 1,  79 => 31,  72 => 26,  69 => 13,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 48,  111 => 40,  108 => 19,  101 => 43,  98 => 37,  96 => 31,  83 => 32,  74 => 27,  66 => 34,  55 => 20,  52 => 14,  50 => 16,  43 => 11,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 81,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 79,  154 => 58,  149 => 51,  147 => 76,  144 => 49,  141 => 48,  133 => 55,  130 => 48,  125 => 70,  122 => 43,  116 => 43,  112 => 42,  109 => 29,  106 => 45,  103 => 53,  99 => 21,  95 => 39,  92 => 20,  86 => 28,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 23,  57 => 12,  54 => 7,  51 => 19,  48 => 9,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
