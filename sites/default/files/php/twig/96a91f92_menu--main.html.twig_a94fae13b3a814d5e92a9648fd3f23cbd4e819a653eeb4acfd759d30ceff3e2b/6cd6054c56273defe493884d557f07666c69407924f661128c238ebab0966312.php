<?php

/* profiles/sportsleague/themes/sportsleague_theme/templates/navigation/menu--main.html.twig */
class __TwigTemplate_6aea14af9843fd2b860fb17c82f42e954b0f84764504e3f124412b0ea3bd86f3 extends Twig_Template
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
        $tags = array("set" => 22, "import" => 23, "macro" => 31, "if" => 33, "for" => 39);
        $filters = array();
        $functions = array("link" => 53);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'import', 'macro', 'if', 'for'),
                array(),
                array('link')
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

        // line 21
        echo "
";
        // line 22
        $context["classes"] = array(0 => "nav", 1 => "navbar-nav", 2 => "navbar-right");
        // line 23
        echo "    ";
        $context["menus"] = $this;
        // line 24
        echo "    ";
        // line 28
        echo "
    ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

    ";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "        ";
            $context["menus"] = $this;
            // line 33
            echo "        ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 34
                echo "            ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 35
                    echo "                <ul class=\"nav navbar-nav navbar-right\">
                ";
                } else {
                    // line 37
                    echo "                    <ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "dropdown-menu"), "method"), "html", null, true));
                    echo ">
                    ";
                }
                // line 39
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "                        ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 41
                        echo "                            ";
                        if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                            // line 42
                            echo "                                <li";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "dropdown"), "method"), "html", null, true));
                            echo ">
                                    <a href=\"";
                            // line 43
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                            echo "\" ";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "dropdown-toggle"), "method"), "html", null, true));
                            echo " data-toggle=\"dropdown\">";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                            echo " <span";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "caret"), "method"), "html", null, true));
                            echo "></span></a>
                                    ";
                            // line 44
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                            echo "
                                </li>
                            ";
                        } else {
                            // line 47
                            echo "                                <li>
                                    <a href=\"";
                            // line 48
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                            echo "\" >";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                            echo "</a>
                                    ";
                            // line 49
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                            echo "
                                </li>
                            ";
                        }
                        // line 52
                        echo "                        ";
                    } else {
                        // line 53
                        echo "                            <li ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "</li>
                            ";
                    }
                    // line 55
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                </ul>
            ";
            }
            // line 58
            echo "        ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "profiles/sportsleague/themes/sportsleague_theme/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 58,  160 => 56,  154 => 55,  146 => 53,  143 => 52,  137 => 49,  131 => 48,  128 => 47,  122 => 44,  112 => 43,  107 => 42,  104 => 41,  101 => 40,  96 => 39,  90 => 37,  86 => 35,  83 => 34,  80 => 33,  77 => 32,  63 => 31,  56 => 29,  53 => 28,  51 => 24,  48 => 23,  46 => 22,  43 => 21,);
    }
}
/* {#*/
/* /***/
/* * @file*/
/* * Theme override to display a menu.*/
/* **/
/* * Available variables:*/
/* * - menu_name: The machine name of the menu.*/
/* * - items: A nested list of menu items. Each menu item contains:*/
/* *   - attributes: HTML attributes for the menu item.*/
/* *   - below: The menu item child items.*/
/* *   - title: The menu link title.*/
/* *   - url: The menu link url, instance of \Drupal\Core\Url*/
/* *   - localized_options: Menu link localized options.*/
/* *   - is_expanded: TRUE if the link has visible children within the current*/
/* *     menu tree.*/
/* *   - is_collapsed: TRUE if the link has children within the current menu tree*/
/* *     that are not currently visible.*/
/* *   - in_active_trail: TRUE if the link is in the active trail.*/
/* *//* */
/* #}*/
/* */
/* {% set classes = ['nav', 'navbar-nav', 'navbar-right']%}*/
/*     {% import _self as menus %}*/
/*     {#*/
/*       We call a macro which calls itself to render the full tree.*/
/*       @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/*     #}*/
/* */
/*     {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/*     {% macro menu_links(items, attributes, menu_level) %}*/
/*         {% import _self as menus %}*/
/*         {% if items %}*/
/*             {% if menu_level == 0 %}*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                 {% else %}*/
/*                     <ul{{attributes.addClass('dropdown-menu')}}>*/
/*                     {% endif %}*/
/*                     {% for item in items %}*/
/*                         {% if item.below %}*/
/*                             {% if menu_level == 0 %}*/
/*                                 <li{{attributes.addClass('dropdown')}}>*/
/*                                     <a href="{{ item.url }}" {{attributes.addClass('dropdown-toggle')}} data-toggle="dropdown">{{ item.title }} <span{{attributes.addClass('caret')}}></span></a>*/
/*                                     {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*                                 </li>*/
/*                             {% else %}*/
/*                                 <li>*/
/*                                     <a href="{{ item.url }}" >{{ item.title }}</a>*/
/*                                     {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*                                 </li>*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <li {{ item.attributes }}>{{ link(item.title, item.url) }}</li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         {% endmacro %}*/
