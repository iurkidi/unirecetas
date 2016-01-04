<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2fa937769e6e148da9b0cac50504ce7d7136d4d3d8d3473bdae72f3b3ec17e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  89 => 20,  75 => 17,  68 => 14,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  62 => 23,  49 => 19,  114 => 32,  88 => 8,  85 => 19,  71 => 35,  65 => 29,  61 => 27,  44 => 13,  24 => 3,  127 => 42,  117 => 44,  113 => 30,  105 => 40,  97 => 23,  91 => 31,  87 => 19,  77 => 15,  63 => 10,  59 => 25,  56 => 9,  34 => 5,  31 => 4,  28 => 3,  46 => 42,  26 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 18,  40 => 7,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 31,  108 => 37,  101 => 24,  98 => 20,  96 => 31,  83 => 18,  74 => 14,  66 => 24,  55 => 16,  52 => 19,  50 => 8,  43 => 8,  41 => 7,  35 => 7,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 43,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 29,  106 => 26,  103 => 25,  99 => 30,  95 => 19,  92 => 21,  86 => 28,  82 => 22,  80 => 24,  73 => 14,  64 => 12,  60 => 6,  57 => 12,  54 => 11,  51 => 20,  48 => 45,  45 => 17,  42 => 16,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
