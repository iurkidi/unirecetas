<?php

/* uniRecetasBundle:receta:newreccat.html.twig */
class __TwigTemplate_1e2a740c987de817c6c5ed4de6531045cd8a71d3dd665bb102d10659a141ac36 extends Twig_Template
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
        echo "       
    
    <h1>Nueva receta ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eCat"]) ? $context["eCat"] : $this->getContext($context, "eCat")), "titulo"), "html", null, true);
        echo "</h1>
 
    <form id=\"idFormRec\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("receta_save_reccat");
        echo "\" method=\"post\">
        
    <div class=\"detalleNot\">
        <div class=\"LineaFormulario\"></div>
        
        <div class=\"LineaFormulario\">            
            <label for=\"idTituloRec\">Titulo:</label>
            <input type=\"text\" id=\"idTituloRec\" name=\"titulo\" class=\"izquierda separarIzq15\"/>           
        </div>
        
        <div class=\"LineaFormulario\"></div>       

        <div class=\"LineaFormulario\">            
            <label for=\"idFotoPRec\">Foto pequeña:</label>
            <input type=\"text\" id=\"idFotoPRec\" name=\"fotop\" class=\"izquierda separarIzq15\"/>
        </div>
        
        <div class=\"LineaFormulario\"></div>  
        
        <div class=\"LineaFormulario\">            
            <label for=\"idFotoRec\">Foto:</label>
            <input type=\"text\" id=\"idFotoRec\" name=\"foto\" class=\"izquierda separarIzq15\"/>
        </div>
        
        <div class=\"LineaFormulario\">            
            <label for=\"idAutorRec\">Autor:</label>
            <select name=\"idAutorRec\" class=\"izquierda separarIzq15\">                         
                    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "restaurante"), "html", null, true);
            echo ")</option>                        
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </select>  
        </div>
            
        <div class=\"LineaFormulario\"></div>
        
        <div class=\"LineaFormulario\">            
            <label for=\"idNumPers\">Numero de personas:</label>
            <input type=\"text\" id=\"idNumPers\" name=\"numpers\" class=\"izquierda separarIzq15\"/>           
        </div>

        <div class=\"LineaFormulario\">            
            <label for=\"idElab\">Elaboración:</label>
            <textarea id=\"idElab\" name=\"textElab\" rows=\"10\" cols=\"50\" class=\"izquierda separarIzq15\">Elaboración de la receta</textarea>
        </div>

        <div class=\"LineaFormulario\"></div>        
        <input type=\"hidden\" name=\"idCat\" value=";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["idCat"]) ? $context["idCat"] : $this->getContext($context, "idCat")), "html", null, true);
        echo "/>
                                  
        ";
        // line 56
        echo "            <h2 class=\"izquierda separarIzq15\">Ingredientes</h2>
        ";
        // line 57
        echo "    
      ";
        // line 59
        echo "            <p class=\"izquierda\">Seleccione los ingredientes con el siguiente formato: <i>200 gramos mantequilla</i>. 
            Hay un limite de 15 ingredientes.</p>
      ";
        // line 62
        echo "        ";
        // line 67
        echo "                
        
        <div id=\"container\" class=\"LineaFormulario izquierda\">
            ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 71
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, ("tb" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\" class=\"LineaFormulario izquierda\">
                
                        <input type=text size=\"1\" name=\"";
            // line 73
            echo twig_escape_filter($this->env, ("tb" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\" value=\"\" />
                        <input type=text size=\"4\" name=\"";
            // line 74
            echo twig_escape_filter($this->env, (("tb" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\" value=\"\" />
                        <select name=\"";
            // line 75
            echo twig_escape_filter($this->env, ((("tb" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\"> 
                        ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eingredientes"]) ? $context["eingredientes"] : $this->getContext($context, "eingredientes")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 77
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
                echo "</option>                        
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                        </select>
                </div>
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </div>
        ";
        // line 85
        echo "        
        <div class=\"LineaFormulario\"></div>
        <div class=\"LineaFormulario\"></div>
        <div class=\"LineaFormulario\">
            <input type=\"submit\" name=\"Guardar\" value=\"Guardar\"/>
        </div>
        
        <div class=\"LineaFormulario\">
            <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_categ_index", array("id" => (isset($context["idCat"]) ? $context["idCat"] : $this->getContext($context, "idCat")))), "html", null, true);
        echo "\">
               Volver atras
           </a>
        </div>
               
    </div>
    </form>           

";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:receta:newreccat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 83,  165 => 79,  150 => 76,  146 => 75,  110 => 25,  84 => 19,  90 => 30,  81 => 16,  70 => 12,  76 => 13,  53 => 18,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 85,  169 => 60,  140 => 55,  132 => 71,  128 => 70,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  67 => 30,  38 => 6,  21 => 2,  25 => 4,  93 => 28,  78 => 16,  94 => 38,  89 => 20,  75 => 27,  68 => 14,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 74,  138 => 73,  136 => 56,  121 => 62,  62 => 20,  49 => 14,  114 => 57,  88 => 37,  85 => 27,  71 => 30,  65 => 23,  61 => 9,  44 => 9,  24 => 3,  127 => 42,  117 => 59,  113 => 30,  105 => 37,  97 => 22,  91 => 27,  87 => 33,  77 => 15,  63 => 25,  59 => 20,  56 => 8,  34 => 5,  31 => 4,  28 => 3,  46 => 14,  26 => 6,  19 => 1,  79 => 18,  72 => 25,  69 => 34,  47 => 15,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 67,  120 => 27,  115 => 43,  111 => 56,  108 => 36,  101 => 36,  98 => 31,  96 => 31,  83 => 18,  74 => 35,  66 => 12,  55 => 15,  52 => 18,  50 => 16,  43 => 14,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 93,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 77,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 43,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 29,  106 => 53,  103 => 23,  99 => 21,  95 => 19,  92 => 20,  86 => 28,  82 => 22,  80 => 28,  73 => 35,  64 => 11,  60 => 22,  57 => 11,  54 => 7,  51 => 14,  48 => 8,  45 => 16,  42 => 10,  39 => 7,  36 => 6,  33 => 4,  30 => 7,);
    }
}
