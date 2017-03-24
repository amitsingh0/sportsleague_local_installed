<?php

/* profiles/sportsleague/modules/contrib/youtube/templates/youtube-video.html.twig */
class __TwigTemplate_f48b7790da43fb00cc0a4f49c540efe4fcdde1e241ca0954b9935c188e6a953f extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 31
        echo "<figure";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  <iframe";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo " frameborder=\"0\" allowfullscreen>
    ";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["alternative_content"]) ? $context["alternative_content"] : null), "html", null, true));
        echo "
  </iframe>
</figure>
";
    }

    public function getTemplateName()
    {
        return "profiles/sportsleague/modules/contrib/youtube/templates/youtube-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 33,  48 => 32,  43 => 31,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display an embedded YouTube video.*/
/*  **/
/*  * Available variables:*/
/*  * - video_id: The ID of the YouTube video. Used to construct the iframe's src.*/
/*  * - entity_title: The title of the entity with the YouTube video field value.*/
/*  * - settings: An array of settings selected in the module's configuration and*/
/*  *   in the field's display settings.*/
/*  * - content_attributes: array of HTML attributes populated by modules, intended*/
/*  *   to be added to the iframe of the embedded YouTube video player.*/
/*  *   - src: The URL of the YouTube video to be embedded. Contains a query string*/
/*  *     with parameter values derived from options selected in the module's*/
/*  *     configuration and the field's display settings.*/
/*  *   - width: A pixel or percentage value, derived from the display settings.*/
/*  *   - height: A pixel or percentage value, derived from the display settings.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  *   - title: A title value, assigned for accessibility.*/
/*  * - attributes: array of HTML attributes populated by modules, intended to be*/
/*  *   added to the element wrapping the embedded YouTube video player.*/
/*  * - alternative_content: Alternative content for browsers and tools that don't*/
/*  *   understand iframes, such as some screen readers. Defaults to a link to the*/
/*  *   embedded video, whose title is the same as the iframe's title attribute.*/
/*  **/
/*  * @see template_preprocess_youtube_video()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <figure{{ attributes }}>*/
/*   <iframe{{ content_attributes }} frameborder="0" allowfullscreen>*/
/*     {{ alternative_content }}*/
/*   </iframe>*/
/* </figure>*/
/* */
