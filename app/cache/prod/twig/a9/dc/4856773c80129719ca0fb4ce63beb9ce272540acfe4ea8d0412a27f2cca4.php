<?php

/* IbwKoperasiBundle:Job:new.html.twig */
class __TwigTemplate_a9dc4856773c80129719ca0fb4ce63beb9ce272540acfe4ea8d0412a27f2cca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwKoperasiBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IbwKoperasiBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ibw_job");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "IbwKoperasiBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  53 => 7,  186 => 62,  127 => 63,  90 => 49,  37 => 4,  23 => 1,  161 => 6,  150 => 49,  139 => 44,  129 => 40,  126 => 39,  120 => 38,  83 => 25,  76 => 13,  74 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 11,  140 => 71,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 53,  143 => 45,  135 => 69,  131 => 52,  119 => 42,  108 => 36,  102 => 53,  71 => 21,  67 => 15,  63 => 17,  59 => 10,  47 => 9,  38 => 6,  94 => 28,  89 => 28,  85 => 25,  79 => 25,  75 => 17,  68 => 14,  56 => 9,  50 => 21,  29 => 2,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 32,  93 => 50,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  40 => 15,  44 => 4,  35 => 6,  31 => 4,  43 => 9,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 61,  166 => 10,  163 => 62,  158 => 5,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 59,  117 => 44,  115 => 43,  105 => 54,  101 => 32,  91 => 30,  69 => 20,  66 => 15,  62 => 17,  49 => 6,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 13,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 51,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 41,  130 => 41,  125 => 61,  122 => 43,  116 => 41,  112 => 56,  109 => 55,  106 => 34,  103 => 33,  99 => 32,  95 => 28,  92 => 21,  86 => 48,  82 => 26,  80 => 19,  73 => 19,  64 => 29,  60 => 13,  57 => 13,  54 => 22,  51 => 14,  48 => 9,  45 => 8,  42 => 10,  39 => 3,  36 => 5,  33 => 4,  30 => 3,);
    }
}
