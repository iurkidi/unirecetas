<?php

/* uniRecetasBundle:receta:new.html.twig */
class __TwigTemplate_b83b21ef8b86165ab6da6bc8ad7ffb017f86eefc4940b378f6afe41af82bfa11 extends Twig_Template
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
    
    <h1>Nueva receta</h1>
 
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
            <label for=\"idCat\">Categoría:</label>
            <select name=\"idCat\" class=\"izquierda separarIzq15\">                         
                    ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecat"]) ? $context["ecat"] : $this->getContext($context, "ecat")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
            echo "</option>                        
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </select>  
        </div>
        
        <div class=\"LineaFormulario\">            
            <label for=\"idNumPers\">Numero de personas:</label>
            <input type=\"text\" id=\"idNumPers\" name=\"numpers\" class=\"izquierda separarIzq15\"/>           
        </div>

        <div class=\"LineaFormulario\">            
            <label for=\"idElab\">Elaboración:</label>
            <textarea id=\"idElab\" name=\"textElab\" rows=\"10\" cols=\"50\" class=\"izquierda separarIzq15\">Elaboración de la receta</textarea>
        </div>

        <div class=\"LineaFormulario\"></div>               
                                  
        ";
        // line 63
        echo "            <h2 class=\"izquierda separarIzq15\">Ingredientes</h2>
        ";
        // line 64
        echo "    
      ";
        // line 66
        echo "            <p class=\"izquierda\">Seleccione los ingredientes con el siguiente formato: <i>200 gramos mantequilla</i>. 
            Hay un limite de 15 ingredientes.</p>
      ";
        // line 69
        echo "        ";
        // line 74
        echo "                
        
        <div id=\"container\" class=\"LineaFormulario izquierda\">
            ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 78
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, ("tb" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\" class=\"LineaFormulario izquierda\">
                
                        <input type=text size=\"1\" name=\"";
            // line 80
            echo twig_escape_filter($this->env, ("tb" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\" value=\"\" />
                        <input type=text size=\"4\" name=\"";
            // line 81
            echo twig_escape_filter($this->env, (("tb" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\" value=\"\" />
                        <select name=\"";
            // line 82
            echo twig_escape_filter($this->env, ((("tb" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\"> 
                        ";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eingredientes"]) ? $context["eingredientes"] : $this->getContext($context, "eingredientes")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 84
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
            // line 86
            echo "                        </select>
                </div>
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </div>
        ";
        // line 92
        echo "        
        <div class=\"LineaFormulario\"></div>
        <div class=\"LineaFormulario\"></div>
        <div class=\"LineaFormulario\">
            <input type=\"submit\" name=\"Guardar\" value=\"Guardar\"/>
        </div>
        
        <div class=\"LineaFormulario\">
            <a href=\"";
        // line 100
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
        return "uniRecetasBundle:receta:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 100,  192 => 92,  189 => 90,  180 => 86,  169 => 84,  165 => 83,  161 => 82,  157 => 81,  153 => 80,  147 => 78,  143 => 77,  138 => 74,  136 => 69,  132 => 66,  129 => 64,  126 => 63,  109 => 47,  98 => 45,  94 => 44,  85 => 37,  70 => 35,  66 => 34,  36 => 7,  28 => 3,);
    }
}
