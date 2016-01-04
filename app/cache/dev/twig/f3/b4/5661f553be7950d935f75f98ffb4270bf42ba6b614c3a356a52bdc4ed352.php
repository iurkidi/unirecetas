<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_f3b45661f553be7950d935f75f98ffb4270bf42ba6b614c3a356a52bdc4ed352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  197 => 88,  161 => 64,  152 => 57,  146 => 56,  127 => 60,  244 => 162,  232 => 156,  213 => 152,  205 => 150,  195 => 147,  160 => 113,  84 => 27,  110 => 22,  81 => 16,  76 => 27,  70 => 24,  34 => 5,  126 => 42,  113 => 42,  97 => 41,  77 => 15,  53 => 15,  114 => 36,  65 => 11,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 160,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 33,  61 => 12,  273 => 96,  269 => 94,  254 => 170,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 154,  219 => 76,  217 => 153,  208 => 68,  204 => 72,  179 => 76,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 13,  38 => 12,  87 => 32,  21 => 2,  31 => 4,  93 => 28,  88 => 31,  78 => 18,  44 => 11,  94 => 34,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 11,  27 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 28,  62 => 22,  49 => 13,  24 => 1,  25 => 35,  46 => 34,  26 => 6,  19 => 1,  79 => 5,  72 => 16,  69 => 13,  47 => 8,  40 => 6,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 111,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 83,  108 => 19,  101 => 43,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 12,  55 => 38,  52 => 14,  50 => 18,  43 => 11,  41 => 10,  35 => 6,  32 => 4,  29 => 3,  209 => 151,  203 => 78,  199 => 148,  193 => 73,  189 => 143,  187 => 81,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 110,  133 => 55,  130 => 52,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 29,  106 => 45,  103 => 23,  99 => 40,  95 => 34,  92 => 28,  86 => 28,  82 => 28,  80 => 30,  73 => 16,  64 => 21,  60 => 22,  57 => 20,  54 => 19,  51 => 37,  48 => 9,  45 => 8,  42 => 13,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
