<?php

/* profiles/sportsleague/themes/sportsleague_theme/templates/layout/page.html.twig */
class __TwigTemplate_3962216eaee222aa610d1d0e1a7f9f63c4ba5d205f5647d7e8d82e6aeecb3371 extends Twig_Template
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
        $tags = array("if" => 72, "for" => 83);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"header-logo\">  ";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "logo", array()), "html", null, true));
        echo " </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            ";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
        </div>
        <!-- /.navbar-collapse -->
    </div>\t\t
    <!-- /.container -->
</nav>

<!-- Navigation -->
<!-- Header Carousel -->
";
        // line 72
        if ((((isset($context["slider"]) ? $context["slider"] : null) && ((isset($context["slideshow_display"]) ? $context["slideshow_display"] : null) == 1)) && (isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 73
            echo "    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) ? $context["slider"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 84
                echo "                <div class=\"item ";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " active ";
                }
                echo "\">
                    <a href=\"";
                // line 85
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "url", array()), "html", null, true));
                echo "\"><img src=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "src", array()), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "alt", array()), "html", null, true));
                echo "\"></a>
                    <div class=\"carousel-caption\">
                        <h2>";
                // line 87
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true));
                echo "</h2>
                    </div>
                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
    </header>
";
        }
        // line 102
        echo "
<!-- Page Content -->
<div class=\"container top_content content-wrap\">
    ";
        // line 105
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "message", array())) {
            // line 106
            echo "        <div class=\"row\">
            <div class=\"col-lg-12 no-padding-left\">                
                ";
            // line 108
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "message", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 112
        echo "    ";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 113
            echo "        <div class=\"row\">
            <div class=\"col-lg-12 no-padding-left\">                
                ";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 119
        echo "    <div class=\"row\">
    <div class=";
        // line 120
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentsection"]) ? $context["contentsection"] : null), "html", null, true));
        echo ">\t\t\t\t\t
        <div class=\"row\">
            <div class=";
        // line 122
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["widget"]) ? $context["widget"] : null), "html", null, true));
        echo ">
                ";
        // line 123
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top1", array())) {
            // line 124
            echo "                    <div class=\"col-md-4\">
                        ";
            // line 125
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top1", array()), "html", null, true));
            echo "\t
                    </div>
                ";
        }
        // line 128
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top2", array())) {
            // line 129
            echo "                    <div class=\"col-md-4\">
                        ";
            // line 130
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top2", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 133
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top3", array())) {
            // line 134
            echo "                    <div class=\"col-md-4\">
                        ";
            // line 135
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top3", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 138
        echo "            </div></div>
        <!-- /.row -->\t\t
\t\t\t";
        // line 140
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array())) {
            // line 141
            echo "\t\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true));
            echo "
\t\t\t";
        }
        // line 143
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            echo "\t
\t\t\t\t";
            // line 144
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
\t\t\t";
        }
        // line 146
        echo "        <hr>
        <!-- /.row -->\t\t\t
    </div>
    <!-- Left Content Area End-->
    ";
        // line 150
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
            echo "\t
        <div class=";
            // line 151
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarright"]) ? $context["sidebarright"] : null), "html", null, true));
            echo ">
            ";
            // line 152
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()), "html", null, true));
            echo "\t\t
        </div>
    ";
        }
        // line 154
        echo "\t\t
    <!-- /.row -->
    </div>
    <div class=\"row\">\t\t
        <div class=\"container boxblock\">
            ";
        // line 159
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
        echo "
        </div>
    </div>       
<!-- /.fly text container -->
\t";
        // line 163
        if ((((isset($context["show_flytext"]) ? $context["show_flytext"] : null) == 1) && (isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 164
            echo "\t<div class=\"fly-text\">
\t\t<div class=\"row\"> 
\t\t\t<section id=\"fly1\" name=\"fly1\">
\t\t\t<div id=\"tween3\">
\t\t\t\t<div class=\"tween_item\">
\t\t\t\t<h5><a href=\"";
            // line 169
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["fly_text_url"]) ? $context["fly_text_url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["fly_text"]) ? $context["fly_text"] : null), "html", null, true));
            echo " </a></h5>
\t\t\t\t</div>
\t\t\t\t<img alt=\"\" class=\"image-style-none img-responsive\" height=\"450\" src=\"";
            // line 171
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["fly_img"]) ? $context["fly_img"] : null), "html", null, true));
            echo "\" width=\"100%\" />
\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>
\t";
        }
        // line 177
        echo "<!-- /.fly text container -->
</div>
<!-- Footer -->       
<footer class=\"footer\">
    ";
        // line 181
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_sponsored", array())) {
            echo "\t
        <div class=\"col-md-12 top-footer_icon\">
            <div class=\"row\">
                ";
            // line 184
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_sponsored", array()), "html", null, true));
            echo "\t
            </div>
        </div>
    ";
        }
        // line 188
        echo "    ";
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()))) {
            // line 189
            echo "        <div class=\"footergrid wrap-footer\">
            <div class=\"col-md-12 footer_col\">
                <div class=\"row\">
                    ";
            // line 192
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array())) {
                // line 193
                echo "                        <div class=";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_area_class"]) ? $context["footer_area_class"] : null), "html", null, true));
                echo ">
                            <div class=\"footer_column\">
                                ";
                // line 195
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()), "html", null, true));
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 199
            echo "                    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array())) {
                // line 200
                echo "                        <div class=";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_area_class"]) ? $context["footer_area_class"] : null), "html", null, true));
                echo ">
                            <div class=\"footer_column\">
                                ";
                // line 202
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array()), "html", null, true));
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 206
            echo "                    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array())) {
                // line 207
                echo "                        <div class=";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_area_class"]) ? $context["footer_area_class"] : null), "html", null, true));
                echo ">
                            <div class=\"footer_column\">
                                ";
                // line 209
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array()), "html", null, true));
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 213
            echo "                    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array())) {
                // line 214
                echo "                        <div class=";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_area_class"]) ? $context["footer_area_class"] : null), "html", null, true));
                echo ">
                            <div class=\"footer_column\">
                                ";
                // line 216
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()), "html", null, true));
                echo "
                            </div>
                        </div>\t
                    ";
            }
            // line 220
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 223
        echo "\t
</footer>
<div class=\"copyright\">\t\t
    <div class=\"footergrid wrapper\">\t\t\t\t\t
        ";
        // line 227
        if ((isset($context["copyright_text"]) ? $context["copyright_text"] : null)) {
            // line 228
            echo "            <span class=\"\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_text"]) ? $context["copyright_text"] : null), "html", null, true));
            echo "</span>
        ";
        }
        // line 230
        echo "        ";
        if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
            // line 231
            echo "            <ul class=\"direct-link\">
                ";
            // line 232
            if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                // line 233
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a></li>
                        ";
            }
            // line 235
            echo "                        ";
            if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                // line 236
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a></li>
                        ";
            }
            // line 238
            echo "                        ";
            if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                // line 239
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a></li>
                        ";
            }
            // line 241
            echo "                        ";
            if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                // line 242
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
                        ";
            }
            // line 244
            echo "                        ";
            if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                // line 245
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a></li>
                        ";
            }
            // line 247
            echo "                        ";
            if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                // line 248
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a></li>
                        ";
            }
            // line 249
            echo "\t\t\t\t
            </ul>
        ";
        }
        // line 252
        echo "    </div>\t\t
</div>
<!-- Footer End -->";
    }

    public function getTemplateName()
    {
        return "profiles/sportsleague/themes/sportsleague_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 252,  482 => 249,  476 => 248,  473 => 247,  467 => 245,  464 => 244,  458 => 242,  455 => 241,  449 => 239,  446 => 238,  440 => 236,  437 => 235,  431 => 233,  429 => 232,  426 => 231,  423 => 230,  417 => 228,  415 => 227,  409 => 223,  403 => 220,  396 => 216,  390 => 214,  387 => 213,  380 => 209,  374 => 207,  371 => 206,  364 => 202,  358 => 200,  355 => 199,  348 => 195,  342 => 193,  340 => 192,  335 => 189,  332 => 188,  325 => 184,  319 => 181,  313 => 177,  304 => 171,  297 => 169,  290 => 164,  288 => 163,  281 => 159,  274 => 154,  268 => 152,  264 => 151,  260 => 150,  254 => 146,  249 => 144,  244 => 143,  238 => 141,  236 => 140,  232 => 138,  226 => 135,  223 => 134,  220 => 133,  214 => 130,  211 => 129,  208 => 128,  202 => 125,  199 => 124,  197 => 123,  193 => 122,  188 => 120,  185 => 119,  178 => 115,  174 => 113,  171 => 112,  164 => 108,  160 => 106,  158 => 105,  153 => 102,  140 => 91,  122 => 87,  113 => 85,  106 => 84,  89 => 83,  77 => 73,  75 => 72,  63 => 63,  48 => 51,  43 => 48,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.content_top1: Items for the content top1 region.*/
/*  * - page.content_top2: Items for the content top2 region.*/
/*  * - page.content_top3: Items for the content top3 region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.content_bottom: Items for the content bottom.*/
/*  * - page.footer_sponsored: Items for the footer sponsored region. */
/*  * - page.footer: Items for the footer region.*/
/*  * - page.footer_copyright: Items for the footer copyright region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="header-logo">  {{ page.logo }} </div>*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*         </div>*/
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             {{ page.header }}*/
/*         </div>*/
/*         <!-- /.navbar-collapse -->*/
/*     </div>		*/
/*     <!-- /.container -->*/
/* </nav>*/
/* */
/* <!-- Navigation -->*/
/* <!-- Header Carousel -->*/
/* {% if slider and slideshow_display == 1 and is_front %}*/
/*     <header id="myCarousel" class="carousel slide">*/
/*         <!-- Indicators -->*/
/*         <ol class="carousel-indicators">*/
/*             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*             <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*             <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*         </ol>*/
/* */
/*         <!-- Wrapper for slides -->*/
/*         <div class="carousel-inner">*/
/*             {% for slide in slider %}*/
/*                 <div class="item {% if loop.index == 1 %} active {% endif %}">*/
/*                     <a href="{{ slide.url }}"><img src="{{ slide.src }}" alt="{{slide.alt}}"></a>*/
/*                     <div class="carousel-caption">*/
/*                         <h2>{{slide.title}}</h2>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*         <!-- Controls -->*/
/*         <a class="left carousel-control" href="#myCarousel" data-slide="prev">*/
/*             <span class="glyphicon glyphicon-chevron-left"></span>*/
/*         </a>*/
/*         <a class="right carousel-control" href="#myCarousel" data-slide="next">*/
/*             <span class="glyphicon glyphicon-chevron-right"></span>*/
/*         </a>*/
/*     </header>*/
/* {% endif %}*/
/* */
/* <!-- Page Content -->*/
/* <div class="container top_content content-wrap">*/
/*     {%  if page.message %}*/
/*         <div class="row">*/
/*             <div class="col-lg-12 no-padding-left">                */
/*                 {{page.message}}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/*     {%  if page.breadcrumb and not is_front %}*/
/*         <div class="row">*/
/*             <div class="col-lg-12 no-padding-left">                */
/*                 {{page.breadcrumb}}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*     <div class={{contentsection}}>					*/
/*         <div class="row">*/
/*             <div class={{widget}}>*/
/*                 {% if page.content_top1 %}*/
/*                     <div class="col-md-4">*/
/*                         {{ page.content_top1 }}	*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if page.content_top2 %}*/
/*                     <div class="col-md-4">*/
/*                         {{ page.content_top2 }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if page.content_top3 %}*/
/*                     <div class="col-md-4">*/
/*                         {{ page.content_top3 }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div></div>*/
/*         <!-- /.row -->		*/
/* 			{%  if page.title %}*/
/* 				{{page.title}}*/
/* 			{% endif %}*/
/* 			{% if page.content %}	*/
/* 				{{ page.content }}*/
/* 			{% endif %}*/
/*         <hr>*/
/*         <!-- /.row -->			*/
/*     </div>*/
/*     <!-- Left Content Area End-->*/
/*     {% if page.sidebar_right %}	*/
/*         <div class={{sidebarright}}>*/
/*             {{ page.sidebar_right }}		*/
/*         </div>*/
/*     {% endif %}		*/
/*     <!-- /.row -->*/
/*     </div>*/
/*     <div class="row">		*/
/*         <div class="container boxblock">*/
/*             {{ page.content_bottom }}*/
/*         </div>*/
/*     </div>       */
/* <!-- /.fly text container -->*/
/* 	{% if show_flytext == 1 and is_front %}*/
/* 	<div class="fly-text">*/
/* 		<div class="row"> */
/* 			<section id="fly1" name="fly1">*/
/* 			<div id="tween3">*/
/* 				<div class="tween_item">*/
/* 				<h5><a href="{{ fly_text_url }}">{{ fly_text }} </a></h5>*/
/* 				</div>*/
/* 				<img alt="" class="image-style-none img-responsive" height="450" src="{{ fly_img }}" width="100%" />*/
/* 			</div>*/
/* 			</section>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% endif %}*/
/* <!-- /.fly text container -->*/
/* </div>*/
/* <!-- Footer -->       */
/* <footer class="footer">*/
/*     {% if page.footer_sponsored %}	*/
/*         <div class="col-md-12 top-footer_icon">*/
/*             <div class="row">*/
/*                 {{ page.footer_sponsored }}	*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/*     {% if (page.footer_1) or (page.footer_2) or (page.footer_3) or (page.footer_4) %}*/
/*         <div class="footergrid wrap-footer">*/
/*             <div class="col-md-12 footer_col">*/
/*                 <div class="row">*/
/*                     {% if page.footer_1%}*/
/*                         <div class={{footer_area_class}}>*/
/*                             <div class="footer_column">*/
/*                                 {{ page.footer_1 }}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if page.footer_2%}*/
/*                         <div class={{footer_area_class}}>*/
/*                             <div class="footer_column">*/
/*                                 {{ page.footer_2 }}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if page.footer_3%}*/
/*                         <div class={{footer_area_class}}>*/
/*                             <div class="footer_column">*/
/*                                 {{ page.footer_3 }}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if page.footer_4%}*/
/*                         <div class={{footer_area_class}}>*/
/*                             <div class="footer_column">*/
/*                                 {{ page.footer_4 }}*/
/*                             </div>*/
/*                         </div>	*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}	*/
/* </footer>*/
/* <div class="copyright">		*/
/*     <div class="footergrid wrapper">					*/
/*         {% if copyright_text %}*/
/*             <span class="">{{ copyright_text }}</span>*/
/*         {% endif %}*/
/*         {% if show_social_icon %}*/
/*             <ul class="direct-link">*/
/*                 {% if facebook_url %}*/
/*                     <li><a href="{{ facebook_url }}"  class="facebook" target="_blank" ><i class="fa fa-facebook"></i></a></li>*/
/*                         {% endif %}*/
/*                         {% if google_plus_url %}*/
/*                     <li><a href="{{ google_plus_url }}"  class="google-plus" target="_blank" ><i class="fa fa-google-plus"></i></a></li>*/
/*                         {% endif %}*/
/*                         {% if twitter_url %}*/
/*                     <li><a href="{{ twitter_url }}" class="twitter" target="_blank" ><i class="fa fa-twitter"></i></a></li>*/
/*                         {% endif %}*/
/*                         {% if linkedin_url %}*/
/*                     <li><a href="{{ linkedin_url }}" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>*/
/*                         {% endif %}*/
/*                         {% if pinterest_url %}*/
/*                     <li><a href="{{ pinterest_url }}" class="pinterest" target="_blank" ><i class="fa fa-pinterest"></i></a></li>*/
/*                         {% endif %}*/
/*                         {% if rss_url %}*/
/*                     <li><a href="{{ rss_url }}" class="rss" target="_blank" ><i class="fa fa-rss"></i></a></li>*/
/*                         {% endif %}				*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>		*/
/* </div>*/
/* <!-- Footer End -->*/
