<?php

/* uniRecetasBundle:receta:edit2.html.twig */
class __TwigTemplate_8670411836c90bfff54eddeda63e9783a3520bf7e0430c9468b5861cddf9cd4c extends Twig_Template
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
        echo "<h1>Editar receta</h1>
 
    <form id=\"idFormRec\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("receta_update2");
        echo "\" method=\"post\">
        
    <div class=\"detalleNot\">
        <div class=\"LineaFormulario\"></div>
        
        <div class=\"LineaFormulario\">            
            <label for=\"idTituloRec\">Titulo:</label>
            <input type=\"text\" id=\"idTituloRec\" name=\"titulo\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
        echo "\" class=\"izquierda separarIzq15\"/>           
        </div>
        
        <div class=\"LineaFormulario\"></div>       

        <div class=\"LineaFormulario\">            
            <label for=\"idFotoPRec\">Foto pequeña:</label>
            <input type=\"text\" id=\"idFotoPRec\" name=\"fotop\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fotoPeq"), "html", null, true);
        echo "\" class=\"izquierda separarIzq15\"/>
        </div>
        
        <div class=\"LineaFormulario\"></div>  
        
        <div class=\"LineaFormulario\">            
            <label for=\"idFotoRec\">Foto:</label>
            <input type=\"text\" id=\"idFotoRec\" name=\"foto\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
        echo "\" class=\"izquierda separarIzq15\"/>
        </div>
        
        <div class=\"LineaFormulario\"></div>  
        
        <div class=\"LineaFormulario\">            
            <label for=\"idAutorRec\">Autor:</label>
            <select name=\"idAutorRec\" class=\"izquierda separarIzq15\">                         
                     ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autores"]) ? $context["autores"] : $this->getContext($context, "autores")));
        foreach ($context['_seq'] as $context["_key"] => $context["autor"]) {
            // line 36
            echo "                         ";
            if (($this->getAttribute((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aut"), "id"))) {
                // line 37
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "id"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "apellidos"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "restaurante"), "html", null, true);
                echo ")</option>                        
                         ";
            } else {
                // line 39
                echo "                             <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "nombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "apellidos"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "restaurante"), "html", null, true);
                echo ")</option>
                         ";
            }
            // line 41
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </select>  
        </div>
            
        <div class=\"LineaFormulario\"></div>  
        
        <div class=\"LineaFormulario\">            
            <label for=\"idCatRec\">Categoria:</label>
            <select name=\"idCatRec\" class=\"izquierda separarIzq15\">                         
                     ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 51
            echo "                         ";
            if (($this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categ"), "id"))) {
                // line 52
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "titulo"), "html", null, true);
                echo "</option>                        
                         ";
            } else {
                // line 54
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "titulo"), "html", null, true);
                echo "</option>
                         ";
            }
            // line 56
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </select>  
        </div>
            
        <div class=\"LineaFormulario\"></div>
        
        <div class=\"LineaFormulario\">            
            <label for=\"idNumPers\">Numero de personas:</label>
            <input type=\"text\" id=\"idNumPers\" name=\"numpers\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numpers"), "html", null, true);
        echo "\" class=\"izquierda separarIzq15\"/>           
        </div>
        
        <div class=\"LineaFormulario\"></div>
        
        <div class=\"LineaFormulario\">            
            <label for=\"idFechaPub\">Fecha publicacion:</label>
            <input type=\"text\" id=\"idFechaPub\" name=\"fechapub\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaPub"), "Y/m/d"), "html", null, true);
        echo "\" class=\"izquierda separarIzq15\"/>            
        </div>

        <div class=\"LineaFormulario\">            
            <label for=\"idElab\">Elaboración:</label>
            <textarea id=\"idElab\" name=\"textElab\" rows=\"10\" cols=\"50\" class=\"izquierda separarIzq15\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "elaboracion"), "html", null, true);
        echo "</textarea>
        </div>

        <div class=\"LineaFormulario\"></div>
        <div class=\"LineaFormulario\"></div>
        <input type=\"hidden\" name=\"idReceta\" value=";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "/>
        
        ";
        // line 84
        echo "        
        <div class=\"LineaFormulario\">
            <input type=\"submit\" name=\"Guardar\" value=\"Guardar\"/>
        </div>
        
        <div class=\"LineaFormulario\">
            <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("receta");
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
        return "uniRecetasBundle:receta:edit2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 90,  152 => 57,  202 => 100,  192 => 84,  180 => 86,  161 => 64,  153 => 80,  129 => 64,  126 => 63,  174 => 83,  165 => 83,  150 => 76,  146 => 56,  110 => 25,  84 => 19,  90 => 30,  81 => 16,  70 => 35,  76 => 35,  53 => 18,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 85,  169 => 84,  140 => 55,  132 => 66,  128 => 70,  107 => 41,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  159 => 61,  143 => 77,  135 => 53,  119 => 42,  102 => 32,  67 => 30,  38 => 6,  21 => 2,  25 => 4,  93 => 28,  78 => 16,  94 => 44,  89 => 20,  75 => 27,  68 => 14,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 74,  138 => 54,  136 => 69,  121 => 62,  62 => 20,  49 => 14,  114 => 57,  88 => 37,  85 => 37,  71 => 30,  65 => 27,  61 => 9,  44 => 9,  24 => 3,  127 => 51,  117 => 59,  113 => 42,  105 => 37,  97 => 22,  91 => 27,  87 => 33,  77 => 15,  63 => 25,  59 => 20,  56 => 8,  34 => 5,  31 => 4,  28 => 3,  46 => 14,  26 => 6,  19 => 1,  79 => 18,  72 => 25,  69 => 34,  47 => 15,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 81,  145 => 46,  139 => 45,  131 => 52,  123 => 50,  120 => 27,  115 => 43,  111 => 56,  108 => 36,  101 => 36,  98 => 45,  96 => 31,  83 => 37,  74 => 35,  66 => 34,  55 => 20,  52 => 18,  50 => 16,  43 => 14,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 90,  187 => 81,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 77,  149 => 51,  147 => 78,  144 => 49,  141 => 48,  133 => 55,  130 => 52,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 47,  106 => 53,  103 => 23,  99 => 21,  95 => 39,  92 => 20,  86 => 28,  82 => 22,  80 => 36,  73 => 35,  64 => 11,  60 => 22,  57 => 11,  54 => 7,  51 => 14,  48 => 8,  45 => 13,  42 => 10,  39 => 7,  36 => 7,  33 => 4,  30 => 7,);
    }
}
