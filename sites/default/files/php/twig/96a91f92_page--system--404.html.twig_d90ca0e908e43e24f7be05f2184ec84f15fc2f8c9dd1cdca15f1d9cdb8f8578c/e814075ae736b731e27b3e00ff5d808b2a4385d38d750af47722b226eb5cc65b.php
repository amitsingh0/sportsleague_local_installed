<?php

/* profiles/sportsleague/themes/sportsleague_theme/templates/layout/page--system--404.html.twig */
class __TwigTemplate_3cdb9b82db653adbc1c23119c5e32072a426d6fdca271d2aa30f7c6bd199ab8a extends Twig_Template
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
        $tags = array("if" => 65);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 7
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"header-logo\">  ";
        // line 10
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
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav> 
<!-- Navigation -->

<!-- Page Content -->
<div class=\"container\">

    <!-- /.row -->
    <!-- Intro Content -->
    <div class=\"row\">
        <img src=\"";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/404.png\" style=\"max-width:100%\" alt=\"Image not found\">            
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<div class=\"container\">
    <hr>
</div>
<!-- /.container -->
<!-- Footer -->       

<footer>\t
    <div class=\"col-md-12 top-footer_icon\">
        <div class=\"row\">
            ";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_sponsored", array()), "html", null, true));
        echo "\t
        </div>
    </div>
    <div class=\"footergrid wrap-footer\">
        <div class=\"col-md-12 footer_col\">
            <div class=\"row\">
                ";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
            </div>
        </div>
    </div>\t
</footer>
<div class=\"copyright\">\t\t
    <div class=\"footergrid wrapper\">\t\t\t\t\t
        ";
        // line 65
        if ((isset($context["copyright_text"]) ? $context["copyright_text"] : null)) {
            // line 66
            echo "            <span class=\"\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_text"]) ? $context["copyright_text"] : null), "html", null, true));
            echo "</span>
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
            // line 70
            echo "            <ul class=\"direct-link\">
                ";
            // line 71
            if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                // line 72
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a></li>
                        ";
            }
            // line 74
            echo "                        ";
            if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                // line 75
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a></li>
                        ";
            }
            // line 77
            echo "                        ";
            if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                // line 78
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a></li>
                        ";
            }
            // line 80
            echo "                        ";
            if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                // line 81
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
                        ";
            }
            // line 83
            echo "                        ";
            if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                // line 84
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a></li>
                        ";
            }
            // line 86
            echo "                        ";
            if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                // line 87
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a></li>
                        ";
            }
            // line 88
            echo "\t\t\t\t
            </ul>
        ";
        }
        // line 91
        echo "    </div>\t\t
</div>
<!-- Footer End -->\t";
    }

    public function getTemplateName()
    {
        return "profiles/sportsleague/themes/sportsleague_theme/templates/layout/page--system--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 91,  187 => 88,  181 => 87,  178 => 86,  172 => 84,  169 => 83,  163 => 81,  160 => 80,  154 => 78,  151 => 77,  145 => 75,  142 => 74,  136 => 72,  134 => 71,  131 => 70,  129 => 69,  126 => 68,  120 => 66,  118 => 65,  108 => 58,  99 => 52,  80 => 36,  63 => 22,  48 => 10,  43 => 7,);
    }
}
/* {#*/
/* /***/
/*  * @404 page*/
/*  */
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
/*             </button>                */
/*         </div>*/
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             {{ page.header }}*/
/*         </div>*/
/*         <!-- /.navbar-collapse -->*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </nav> */
/* <!-- Navigation -->*/
/* */
/* <!-- Page Content -->*/
/* <div class="container">*/
/* */
/*     <!-- /.row -->*/
/*     <!-- Intro Content -->*/
/*     <div class="row">*/
/*         <img src="{{ base_path ~ directory }}/images/404.png" style="max-width:100%" alt="Image not found">            */
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/* </div>*/
/* <!-- /.container -->*/
/* */
/* <div class="container">*/
/*     <hr>*/
/* </div>*/
/* <!-- /.container -->*/
/* <!-- Footer -->       */
/* */
/* <footer>	*/
/*     <div class="col-md-12 top-footer_icon">*/
/*         <div class="row">*/
/*             {{ page.footer_sponsored }}	*/
/*         </div>*/
/*     </div>*/
/*     <div class="footergrid wrap-footer">*/
/*         <div class="col-md-12 footer_col">*/
/*             <div class="row">*/
/*                 {{ page.footer }}*/
/*             </div>*/
/*         </div>*/
/*     </div>	*/
/* </footer>*/
/* <div class="copyright">		*/
/*     <div class="footergrid wrapper">					*/
/*         {% if copyright_text %}*/
/*             <span class="">{{ copyright_text }}</span>*/
/*         {% endif %}*/
/* */
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
/* <!-- Footer End -->	*/
