<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_2adbf9de6a4892ceb35d75c44a0142a520a95d535612615a42cc4ca49525544f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  118 => 49,  100 => 39,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  226 => 84,  213 => 78,  207 => 75,  197 => 71,  194 => 70,  191 => 67,  185 => 66,  181 => 65,  178 => 66,  165 => 60,  153 => 56,  134 => 54,  70 => 19,  113 => 48,  81 => 23,  277 => 114,  265 => 108,  260 => 106,  53 => 12,  293 => 120,  281 => 114,  276 => 112,  259 => 104,  248 => 94,  236 => 94,  232 => 93,  216 => 79,  211 => 84,  200 => 72,  195 => 77,  188 => 73,  184 => 72,  172 => 64,  152 => 58,  124 => 45,  104 => 37,  77 => 22,  84 => 24,  65 => 19,  186 => 62,  127 => 63,  90 => 27,  23 => 1,  161 => 63,  150 => 55,  129 => 40,  126 => 43,  76 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 115,  283 => 88,  278 => 106,  268 => 107,  264 => 106,  258 => 81,  252 => 101,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 11,  140 => 58,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 109,  254 => 92,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 53,  143 => 45,  135 => 69,  119 => 40,  102 => 40,  71 => 17,  67 => 24,  63 => 17,  59 => 14,  38 => 6,  94 => 25,  89 => 28,  85 => 25,  75 => 18,  68 => 14,  56 => 12,  87 => 34,  21 => 2,  26 => 5,  93 => 31,  88 => 6,  78 => 21,  46 => 13,  27 => 3,  44 => 4,  31 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 61,  166 => 10,  163 => 63,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 54,  136 => 51,  121 => 50,  117 => 44,  105 => 34,  91 => 30,  62 => 14,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 16,  69 => 20,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 93,  157 => 56,  145 => 46,  139 => 44,  131 => 49,  123 => 42,  120 => 44,  115 => 42,  111 => 47,  108 => 38,  101 => 29,  98 => 32,  96 => 37,  83 => 33,  74 => 22,  66 => 15,  55 => 16,  52 => 15,  50 => 9,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 2,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 41,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 56,  109 => 55,  106 => 34,  103 => 33,  99 => 31,  95 => 28,  92 => 21,  86 => 23,  82 => 26,  80 => 32,  73 => 20,  64 => 23,  60 => 6,  57 => 13,  54 => 22,  51 => 14,  48 => 9,  45 => 10,  42 => 7,  39 => 3,  36 => 8,  33 => 4,  30 => 3,);
    }
}
