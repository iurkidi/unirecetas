<?php

/* uniRecetasBundle:receta:index_cat.html.twig */
class __TwigTemplate_5eaa463328464b1de1a571763870ee06141c1e35fa1e17255a7c2134fe608324 extends Twig_Template
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
        echo "    <h1> ";
        echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
        echo "</h1>
        ";
        // line 5
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
            // line 7
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") <= "4")) {
                // line 8
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ("col" . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
                echo "\">                        
                <h2><a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">
                           ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
                echo "
                    </a></h2>                      
                   <p> (";
                // line 12
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categ"), "titulo")), "html", null, true);
                echo ") ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "elaboracion"), 100), "html", null, true);
                echo "  </p>
                   <br> <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unirecetas/img/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto")) . "")), "html", null, true);
                echo "\"/>                                                                     
            </div>
            ";
                // line 16
                echo "                   ";
            } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") > "4")) {
                echo "                         
                       <div class=\"col5 textoizq\">
                            <br>
                           <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\" class=\"negrita separarIzq20\">
                           ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
                echo "
                            </a>  
                            <p class=\"separarIzq20\">(";
                // line 22
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categ"), "titulo")), "html", null, true);
                echo ") ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "elaboracion"), 100), "html", null, true);
                echo " </p>
                       </div>    
                    ";
            }
            // line 25
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
        // line 27
        echo "        

        <div class=\"LineaFormulario\">   ";
        // line 29
        echo "     
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("receta_new");
        echo "\"> Nueva receta</a>                             
        </div>
    
";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:receta:index_cat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 30,  126 => 29,  122 => 27,  107 => 25,  99 => 22,  94 => 20,  90 => 19,  83 => 16,  78 => 13,  72 => 12,  67 => 10,  63 => 9,  58 => 8,  56 => 7,  36 => 5,  31 => 4,  28 => 3,);
    }
}
