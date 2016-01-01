<?php

/* uniRecetasBundle:receta:indexporcat.html.twig */
class __TwigTemplate_d1a4e3fe0d10a24924622c72c5e419eb0944f46150eac2d9904bc426202d8ed4 extends Twig_Template
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
    <h1> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecategoria"]) ? $context["ecategoria"] : $this->getContext($context, "ecategoria")), "titulo"), "html", null, true);
        echo "</h1> 
    
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "                  
            
            ";
            // line 9
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") <= "4")) {
                // line 10
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ("col" . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
                echo "\">                        
                <h2><a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">
                           ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
                echo "
                    </a></h2>                      
                   <p> (";
                // line 14
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categ"), "titulo")), "html", null, true);
                echo ") ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "elaboracion"), 100), "html", null, true);
                echo "  </p>
                   <br> <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unirecetas/img/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto")) . "")), "html", null, true);
                echo "\"/>                                                                     
            </div>
            ";
                // line 18
                echo "                   ";
            } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") > "4")) {
                echo "                         
                       <div class=\"col5 textoizq\">
                            <br>
                           <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\" class=\"negrita separarIzq20\">
                           ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
                echo "
                            </a>  
                            <p class=\"separarIzq20\">(";
                // line 24
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categ"), "titulo")), "html", null, true);
                echo ") ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "elaboracion"), 100), "html", null, true);
                echo " </p>
                       </div>    
                    ";
            }
            // line 27
            echo "            
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        

        <div class=\"LineaFormulario\">   ";
        // line 31
        echo "                            
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("receta_new");
        echo "\"> Nueva receta</a>                             
        </div>
    
";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:receta:indexporcat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 32,  129 => 31,  125 => 29,  110 => 27,  102 => 24,  97 => 22,  93 => 21,  86 => 18,  81 => 15,  75 => 14,  70 => 12,  66 => 11,  61 => 10,  59 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
