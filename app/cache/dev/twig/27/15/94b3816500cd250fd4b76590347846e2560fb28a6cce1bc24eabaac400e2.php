<?php

/* TwigBundle:Exception:traces_text.html.twig */
class __TwigTemplate_271594b3816500cd250fd4b76590347846e2560fb28a6cce1bc24eabaac400e2 extends Twig_Template
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
        echo "<div class=\"block\">
    <h2>
        Stack Trace (Plain Text)&nbsp;
        ";
        // line 4
        ob_start();
        // line 5
        echo "        <a href=\"#\" onclick=\"toggle('traces-text'); switchIcons('icon-traces-text-open', 'icon-traces-text-close'); return false;\">
            <img class=\"toggle\" id=\"icon-traces-text-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
            <img class=\"toggle\" id=\"icon-traces-text-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
        </a>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 10
        echo "    </h2>

    <div id=\"traces-text\" class=\"trace\" style=\"display: none;\">
<pre>";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 14
            echo "[";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "class"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "message"), "html", null, true);
            echo "
";
            // line 15
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</pre>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  21 => 2,  25 => 4,  93 => 9,  78 => 40,  94 => 22,  89 => 20,  75 => 17,  68 => 14,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  62 => 23,  49 => 19,  114 => 32,  88 => 6,  85 => 19,  71 => 35,  65 => 29,  61 => 27,  44 => 10,  24 => 4,  126 => 42,  113 => 30,  105 => 40,  97 => 23,  91 => 31,  87 => 20,  77 => 15,  63 => 10,  59 => 25,  56 => 9,  34 => 5,  31 => 5,  28 => 3,  46 => 11,  26 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 31,  108 => 37,  101 => 24,  98 => 40,  96 => 31,  83 => 18,  74 => 14,  66 => 15,  55 => 13,  52 => 19,  50 => 8,  43 => 8,  41 => 9,  35 => 7,  32 => 6,  29 => 4,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 29,  106 => 26,  103 => 25,  99 => 30,  95 => 19,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 14,  64 => 12,  60 => 6,  57 => 16,  54 => 11,  51 => 15,  48 => 44,  45 => 17,  42 => 14,  39 => 8,  36 => 7,  33 => 10,  30 => 3,);
    }
}
