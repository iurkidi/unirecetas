<?php

/* uniRecetasBundle:autor:index.html.twig */
class __TwigTemplate_7c89bfe68b251a02f17a97716f6d19b6b70a9e954492314e17bd65fc564df7a7 extends Twig_Template
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
        // line 5
        echo "<div class=\"LineaFormulario\">  
        <h1>Autores</h1>
       </div>

    <table class=\"records_list\">
        <thead>
            <tr>                
                <th>Nombre</th>
               
                <th>Restaurante</th>                
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autor_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
            echo "</a></td>
               
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "restaurante"), "html", null, true);
            echo "</td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>

        <div class=\"LineaFormulario\">  </div>
       <div class=\"LineaFormulario\">   
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\"> Volver atrás</a>
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("autor_new");
        echo "\">Añadir autor</a>
        </div>
    
    ";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:autor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 90,  152 => 57,  202 => 100,  192 => 84,  180 => 86,  161 => 64,  153 => 80,  129 => 64,  126 => 63,  174 => 83,  165 => 83,  150 => 76,  146 => 56,  110 => 25,  84 => 19,  90 => 30,  81 => 16,  70 => 35,  76 => 35,  53 => 20,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 85,  169 => 84,  140 => 55,  132 => 66,  128 => 70,  107 => 41,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  159 => 61,  143 => 77,  135 => 53,  119 => 42,  102 => 32,  67 => 30,  38 => 6,  21 => 2,  25 => 4,  93 => 28,  78 => 16,  94 => 44,  89 => 20,  75 => 27,  68 => 14,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 74,  138 => 54,  136 => 69,  121 => 62,  62 => 22,  49 => 14,  114 => 57,  88 => 37,  85 => 37,  71 => 30,  65 => 27,  61 => 9,  44 => 9,  24 => 3,  127 => 51,  117 => 59,  113 => 42,  105 => 37,  97 => 22,  91 => 27,  87 => 33,  77 => 15,  63 => 25,  59 => 20,  56 => 8,  34 => 5,  31 => 5,  28 => 3,  46 => 18,  26 => 6,  19 => 1,  79 => 31,  72 => 26,  69 => 34,  47 => 15,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 81,  145 => 46,  139 => 45,  131 => 52,  123 => 50,  120 => 27,  115 => 43,  111 => 56,  108 => 36,  101 => 36,  98 => 45,  96 => 31,  83 => 32,  74 => 35,  66 => 34,  55 => 20,  52 => 18,  50 => 19,  43 => 14,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 90,  187 => 81,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 77,  149 => 51,  147 => 78,  144 => 49,  141 => 48,  133 => 55,  130 => 52,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 47,  106 => 53,  103 => 23,  99 => 21,  95 => 39,  92 => 20,  86 => 28,  82 => 22,  80 => 36,  73 => 35,  64 => 11,  60 => 22,  57 => 11,  54 => 7,  51 => 14,  48 => 8,  45 => 13,  42 => 10,  39 => 7,  36 => 7,  33 => 4,  30 => 7,);
    }
}
