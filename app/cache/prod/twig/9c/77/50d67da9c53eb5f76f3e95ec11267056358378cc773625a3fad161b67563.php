<?php

/* uniRecetasBundle:receta:index.html.twig */
class __TwigTemplate_9c7750d67da9c53eb5f76f3e95ec11267056358378cc773625a3fad161b67563 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
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
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") <= "4")) {
                // line 8
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ("col" . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index")), "html", null, true);
                echo "\">                        
                <h2><a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\">
                           ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "titulo"), "html", null, true);
                echo "
                    </a></h2>                      
                   <p> (";
                // line 12
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "categ"), "titulo")), "html", null, true);
                echo ") ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "elaboracion"), 100), "html", null, true);
                echo "  </p>
                   <br> <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unirecetas/img/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fotopeq")) . "")), "html", null, true);
                echo "\"/>                                                                     
            </div>
            ";
                // line 16
                echo "                   ";
            } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") > "4")) {
                echo "                         
                       <div class=\"col5 textoizq\">
                            <br>
                           <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\" class=\"negrita separarIzq20\">
                           ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "titulo"), "html", null, true);
                echo "
                            </a>  
                            <p class=\"separarIzq20\">(";
                // line 22
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "categ"), "titulo")), "html", null, true);
                echo ") ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "elaboracion"), 100), "html", null, true);
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
       
    ";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:receta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  105 => 25,  97 => 22,  92 => 20,  88 => 19,  81 => 16,  76 => 13,  70 => 12,  65 => 10,  61 => 9,  56 => 8,  54 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
