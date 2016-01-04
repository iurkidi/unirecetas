<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_da186adb11aca4fb9351f1707eecbcabda847a280a038812160b6d186ba46c10 extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 330,  354 => 329,  351 => 328,  307 => 287,  134 => 50,  200 => 90,  152 => 57,  202 => 100,  192 => 84,  180 => 86,  161 => 64,  153 => 80,  129 => 64,  126 => 63,  174 => 83,  165 => 83,  150 => 76,  146 => 56,  110 => 22,  84 => 27,  90 => 37,  81 => 16,  70 => 24,  76 => 28,  53 => 15,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 340,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 288,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 85,  169 => 84,  140 => 55,  132 => 66,  128 => 70,  107 => 41,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  159 => 61,  143 => 77,  135 => 62,  119 => 42,  102 => 33,  67 => 22,  38 => 12,  21 => 2,  25 => 35,  93 => 38,  78 => 18,  94 => 34,  89 => 30,  75 => 24,  68 => 12,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 74,  138 => 54,  136 => 69,  121 => 62,  62 => 22,  49 => 13,  114 => 57,  88 => 31,  85 => 23,  71 => 23,  65 => 11,  61 => 23,  44 => 11,  24 => 3,  127 => 60,  117 => 19,  113 => 42,  105 => 18,  97 => 41,  91 => 35,  87 => 32,  77 => 15,  63 => 21,  59 => 22,  56 => 11,  34 => 5,  31 => 4,  28 => 3,  46 => 12,  26 => 6,  19 => 1,  79 => 31,  72 => 27,  69 => 26,  47 => 8,  40 => 6,  37 => 7,  22 => 2,  246 => 90,  157 => 81,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 40,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 35,  74 => 27,  66 => 34,  55 => 15,  52 => 14,  50 => 18,  43 => 11,  41 => 10,  35 => 9,  32 => 7,  29 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 90,  187 => 81,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 77,  149 => 51,  147 => 78,  144 => 49,  141 => 48,  133 => 55,  130 => 48,  125 => 44,  122 => 43,  116 => 43,  112 => 42,  109 => 47,  106 => 45,  103 => 23,  99 => 21,  95 => 39,  92 => 28,  86 => 28,  82 => 28,  80 => 29,  73 => 16,  64 => 24,  60 => 23,  57 => 20,  54 => 19,  51 => 37,  48 => 9,  45 => 8,  42 => 11,  39 => 10,  36 => 8,  33 => 4,  30 => 3,);
    }
}
