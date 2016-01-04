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
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "apellidos"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "restaurante"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["idCat"]) ? $context["idCat"] : null), "html", null, true);
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
            echo twig_escape_filter($this->env, ("tb" . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\" class=\"LineaFormulario izquierda\">
                
                        <input type=text size=\"1\" name=\"";
            // line 73
            echo twig_escape_filter($this->env, ("tb" . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\" value=\"\" />
                        <input type=text size=\"4\" name=\"";
            // line 74
            echo twig_escape_filter($this->env, (("tb" . (isset($context["i"]) ? $context["i"] : null)) . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\" value=\"\" />
                        <select name=\"";
            // line 75
            echo twig_escape_filter($this->env, ((("tb" . (isset($context["i"]) ? $context["i"] : null)) . (isset($context["i"]) ? $context["i"] : null)) . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\"> 
                        ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eingredientes"]) ? $context["eingredientes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 77
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombre"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_categ_index", array("id" => (isset($context["idCat"]) ? $context["idCat"] : null))), "html", null, true);
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
        return array (  184 => 93,  174 => 85,  171 => 83,  162 => 79,  151 => 77,  147 => 76,  143 => 75,  139 => 74,  135 => 73,  129 => 71,  125 => 70,  120 => 67,  118 => 62,  114 => 59,  111 => 57,  108 => 56,  103 => 53,  85 => 37,  70 => 35,  66 => 34,  36 => 7,  28 => 3,);
    }
}
