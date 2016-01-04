<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_a4be3c388055843c64c31583fff36ceabf1130b25a16d1300185af49d8162831 extends Twig_Template
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
        echo "<strong>Explanation:</strong>

<table style=\"margin: 5px 0;\">
    <thead>
        <tr>
            ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 7
            echo "                <th>";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "        <tr>
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                <td>";
                echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 83,  230 => 82,  227 => 81,  224 => 79,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  179 => 69,  159 => 61,  143 => 55,  135 => 53,  119 => 42,  102 => 32,  67 => 17,  38 => 13,  21 => 2,  25 => 4,  93 => 9,  78 => 22,  94 => 28,  89 => 20,  75 => 17,  68 => 14,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 64,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  62 => 23,  49 => 19,  114 => 32,  88 => 6,  85 => 19,  71 => 19,  65 => 29,  61 => 27,  44 => 12,  24 => 3,  126 => 42,  113 => 30,  105 => 40,  97 => 23,  91 => 27,  87 => 25,  77 => 15,  63 => 15,  59 => 14,  56 => 9,  34 => 5,  31 => 5,  28 => 3,  46 => 11,  26 => 6,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 31,  108 => 36,  101 => 24,  98 => 40,  96 => 31,  83 => 18,  74 => 14,  66 => 15,  55 => 15,  52 => 19,  50 => 10,  43 => 8,  41 => 9,  35 => 7,  32 => 6,  29 => 4,  209 => 82,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 64,  173 => 65,  168 => 72,  164 => 58,  162 => 57,  154 => 58,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 41,  112 => 42,  109 => 29,  106 => 26,  103 => 25,  99 => 31,  95 => 19,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 14,  64 => 17,  60 => 6,  57 => 16,  54 => 12,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
