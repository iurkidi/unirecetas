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
        return array (  200 => 90,  192 => 84,  187 => 81,  179 => 76,  171 => 71,  161 => 64,  152 => 57,  146 => 56,  138 => 54,  130 => 52,  127 => 51,  123 => 50,  113 => 42,  107 => 41,  95 => 39,  83 => 37,  80 => 36,  76 => 35,  65 => 27,  55 => 20,  45 => 13,  35 => 6,  31 => 4,  28 => 3,);
    }
}
