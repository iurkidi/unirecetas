<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_01bd45cb759e4b3f4a0ee5e12ff12d5cd9040219a7fae17ae62c1c61b813f1e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  197 => 88,  161 => 64,  152 => 57,  146 => 56,  127 => 60,  244 => 162,  232 => 156,  213 => 152,  205 => 150,  195 => 147,  160 => 113,  84 => 29,  110 => 22,  81 => 16,  76 => 27,  70 => 24,  34 => 5,  126 => 42,  113 => 42,  97 => 41,  77 => 15,  53 => 15,  114 => 36,  65 => 11,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 160,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 33,  61 => 12,  273 => 96,  269 => 94,  254 => 170,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 154,  219 => 76,  217 => 153,  208 => 68,  204 => 72,  179 => 76,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 33,  71 => 13,  67 => 22,  63 => 19,  59 => 13,  38 => 12,  87 => 32,  21 => 2,  31 => 8,  93 => 28,  88 => 31,  78 => 18,  44 => 11,  94 => 34,  89 => 20,  85 => 23,  75 => 24,  68 => 12,  56 => 11,  27 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 28,  62 => 22,  49 => 13,  24 => 1,  25 => 35,  46 => 34,  26 => 6,  19 => 1,  79 => 5,  72 => 16,  69 => 13,  47 => 8,  40 => 6,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 111,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 83,  108 => 19,  101 => 43,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 12,  55 => 38,  52 => 14,  50 => 18,  43 => 11,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 151,  203 => 78,  199 => 148,  193 => 73,  189 => 143,  187 => 81,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 110,  133 => 55,  130 => 52,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 29,  106 => 45,  103 => 23,  99 => 40,  95 => 39,  92 => 28,  86 => 28,  82 => 28,  80 => 30,  73 => 16,  64 => 21,  60 => 22,  57 => 39,  54 => 7,  51 => 37,  48 => 9,  45 => 8,  42 => 13,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
