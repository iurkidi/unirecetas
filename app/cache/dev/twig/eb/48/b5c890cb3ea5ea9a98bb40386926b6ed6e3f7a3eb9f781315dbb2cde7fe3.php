<?php

/* uniRecetasBundle:autor:buscarAutor.html.twig */
class __TwigTemplate_eb48b5c890cb3ea5ea9a98bb40386926b6ed6e3f7a3eb9f781315dbb2cde7fe3 extends Twig_Template
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
        echo "          
        <div class=\"LineaFormulario\">  </div>
        <div class=\"LineaFormulario\">  </div>
    
        <form id=\"selectCats\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("autor_buscar_resp");
        echo "\" method=\"POST\">
            
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario\"> 
                <p class=\"izquierda separarIzq15\">Seleccione un autor de la lista y a continuación se mostrarán todas sus recetas.</p>
            </div>
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario izquierda separarIzq15\">      
                <label for=\"nombre\" class=\"letraverde\">Autor: </label>                                    
                     <select name=\"nombre\" onblur=\"submitform(this)\" class=\"izquierda\">                         
                     ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
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
        // line 22
        echo "                     </select>                                          
             </div>
             <input type=\"hidden\" id=\"nomOculto\" name=\"nomOculto\" value=\"\"/>
        </form>
    
    <div class=\"LineaFormulario\">  </div>
    <div class=\"LineaFormulario\">  </div>          
 
   ";
        // line 30
        if ((!(null === (isset($context["nomAutor"]) ? $context["nomAutor"] : $this->getContext($context, "nomAutor"))))) {
            // line 31
            echo "       <div class=\"LineaFormulario\">  
        <h1 class=\"izquierda separarIzq15\">Recetas de ";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["nomAutor"]) ? $context["nomAutor"] : $this->getContext($context, "nomAutor")), "html", null, true);
            echo "</h1>
       </div>
       <div class=\"LineaFormulario\">  </div>
     ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recetasAutor"]) ? $context["recetasAutor"] : $this->getContext($context, "recetasAutor")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                echo "                     
        <div class=\"LineaFormulario\">  
            <h3 class=\"izquierda separarIzq15\">";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaPub"), "Y/m/d"), "html", null, true);
                echo "
            - (";
                // line 38
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categ"), "titulo")), "html", null, true);
                echo ") <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
                echo "</a>
            </h3>        
          ";
                // line 40
                echo " 
         </div>
        <div class=\"LineaFormulario\">
            <img class=\"izquierda separarIzq15\" src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unirecetas/img/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fotopeq")) . "")), "html", null, true);
                echo "\"/> 
                  ";
                // line 45
                echo "        </div>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo " ";
        }
        // line 48
        echo "    
        <div class=\"LineaFormulario\">   
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\"> Volver atrás</a>            
        </div>
";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:autor:buscarAutor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  130 => 48,  127 => 47,  120 => 45,  116 => 43,  111 => 40,  102 => 38,  98 => 37,  91 => 35,  85 => 32,  82 => 31,  80 => 30,  70 => 22,  55 => 20,  51 => 19,  37 => 8,  31 => 4,  28 => 3,);
    }
}
