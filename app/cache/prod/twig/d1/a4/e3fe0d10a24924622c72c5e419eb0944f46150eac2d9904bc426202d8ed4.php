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
    ";
        // line 5
        if ((!(null === (isset($context["ecategoria"]) ? $context["ecategoria"] : null)))) {
            // line 6
            echo "    
    <h1> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecategoria"]) ? $context["ecategoria"] : null), "titulo"), "html", null, true);
            echo "</h1> 
    <div class=\"centrado fondofotos\">
    ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : null));
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
                // line 11
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") <= "4")) {
                    // line 12
                    echo "            <div class=\"col1 borde\">                        
                <h2><a href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                    echo "\">
                           ";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "titulo"), "html", null, true);
                    echo "
                    </a></h2>                   
                   <br> <img src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unirecetas/img/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fotopeq")) . "")), "html", null, true);
                    echo "\"/>                                                                     
            </div>            
            ";
                }
                // line 19
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
            // line 21
            echo "    </div>    
";
        }
        // line 23
        echo "        <div class=\"LineaFormulario\">   
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\"> Volver atrás</a>
            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_new_reccat", array("id" => (isset($context["categoria"]) ? $context["categoria"] : null))), "html", null, true);
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
        return array (  110 => 25,  106 => 24,  103 => 23,  99 => 21,  84 => 19,  78 => 16,  73 => 14,  69 => 13,  66 => 12,  64 => 11,  44 => 9,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
