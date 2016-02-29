<?php

/* themes/business/templates/page.html.twig */
class __TwigTemplate_8ae1a4ae24500ca549e1e79c190ec9de662c61e375ee0efa1ccc118c1bb94a72 extends Twig_Template
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
        $tags = array("if" => 80, "for" => 83);
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

        // line 73
        echo "<div id=\"page-wrapper\" class=\"container\">

  <header role=\"banner\" id=\"header\" class=\"clearfix\">
    ";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </header>

  ";
        // line 80
        echo "  ";
        if ((isset($context["slider"]) ? $context["slider"] : null)) {
            // line 81
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) ? $context["slider"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 84
                echo "          <li>
            <a href=\"";
                // line 85
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "url", array()), "html", null, true));
                echo "\"><img src=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "src", array()), "html", null, true));
                echo "\"></a>
            <p class=\"flex-caption\">";
                // line 86
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true));
                echo "</p>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "      </ul>
    </div>
  ";
        }
        // line 92
        echo "
  ";
        // line 93
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homequotes", array())) {
            // line 94
            echo "    <div id=\"home-quote\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homequotes", array()), "html", null, true));
            echo "</div>
  ";
        }
        // line 96
        echo "
  ";
        // line 98
        echo "  ";
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_high1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_high2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_high3", array()))) {
            // line 99
            echo "    <div id=\"home-highlights\" class=\"row\">
      ";
            // line 100
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_high1", array())) {
                // line 101
                echo "        <div class=\"home-high-1 col-md-4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_high1", array()), "html", null, true));
                echo "</div>
      ";
            }
            // line 103
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_high2", array())) {
                // line 104
                echo "        <div class=\"home-high-2 col-md-4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_high2", array()), "html", null, true));
                echo "</div>
      ";
            }
            // line 106
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_high3", array())) {
                // line 107
                echo "        <div class=\"home-high-3 col-md-4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_high3", array()), "html", null, true));
                echo "</div>
      ";
            }
            // line 109
            echo "    </div>
  ";
        }
        // line 111
        echo "
  <main id=\"main\" class=\"clearfix\">
    ";
        // line 113
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 114
            echo "      <div id=\"sidebar-first\" class=\"sidebar ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </div> <!-- /#sidebar-first -->
    ";
        }
        // line 118
        echo "
    <div class=\"";
        // line 119
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
        echo "\" role=\"main\">
      ";
        // line 120
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 121
            echo "        <div id=\"content_top\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "</div>
      ";
        }
        // line 123
        echo "
      ";
        // line 124
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

    </div>";
        // line 127
        echo "
    ";
        // line 128
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 129
            echo "      <div id=\"sidebar-second\" class=\"sidebar ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 130
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </div> <!-- /#sidebar-first -->
    ";
        }
        // line 133
        echo "
  </main>

  ";
        // line 137
        echo "  ";
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 138
            echo "    <div id=\"footer-saran\" class=\"row\">
      <div id=\"footer-wrap\">
        ";
            // line 140
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 141
                echo "          <div class=\"footer-1 col-md-3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 143
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 144
                echo "          <div class=\"footer-2 col-md-3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 146
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 147
                echo "          <div class=\"footer-3 col-md-3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 149
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 150
                echo "          <div class=\"footer-4 col-md-3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 152
            echo "      </div>
    </div>
    <div class=\"clear\"></div>
  ";
        }
        // line 156
        echo "
  ";
        // line 157
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 158
            echo "    <footer role=\"contentinfo\">
      ";
            // line 159
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 162
        echo "
  ";
        // line 163
        if ((isset($context["copyright"]) ? $context["copyright"] : null)) {
            // line 164
            echo "    <div class=\"clear\"></div>
    <div id=\"copyright\">
    ";
            // line 166
            if ($this->getAttribute((isset($context["copyright"]) ? $context["copyright"] : null), "footer_copyright", array())) {
                // line 167
                echo "      ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["copyright"]) ? $context["copyright"] : null), "footer_copyright", array()), "html", null, true));
                echo "
    ";
            }
            // line 169
            echo "
    ";
            // line 170
            if ($this->getAttribute((isset($context["copyright"]) ? $context["copyright"] : null), "footer_credits", array())) {
                // line 171
                echo "      <span class=\"credits\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["copyright"]) ? $context["copyright"] : null), "footer_credits", array()), "html", null, true));
                echo "</span>
    ";
            }
            // line 173
            echo "
    </div>
  ";
        }
        // line 176
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/business/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 176,  289 => 173,  283 => 171,  281 => 170,  278 => 169,  272 => 167,  270 => 166,  266 => 164,  264 => 163,  261 => 162,  255 => 159,  252 => 158,  250 => 157,  247 => 156,  241 => 152,  235 => 150,  232 => 149,  226 => 147,  223 => 146,  217 => 144,  214 => 143,  208 => 141,  206 => 140,  202 => 138,  199 => 137,  194 => 133,  188 => 130,  183 => 129,  181 => 128,  178 => 127,  173 => 124,  170 => 123,  164 => 121,  162 => 120,  158 => 119,  155 => 118,  149 => 115,  144 => 114,  142 => 113,  138 => 111,  134 => 109,  128 => 107,  125 => 106,  119 => 104,  116 => 103,  110 => 101,  108 => 100,  105 => 99,  102 => 98,  99 => 96,  93 => 94,  91 => 93,  88 => 92,  83 => 89,  74 => 86,  68 => 85,  65 => 84,  61 => 83,  57 => 81,  54 => 80,  48 => 76,  43 => 73,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
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
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Navigation:*/
/*  * - main_menu: The Main menu links for the site, if they have been configured.*/
/*  * - secondary_menu: The Secondary menu links for the site, if they have been*/
/*  *   configured.*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - feed_icons: All feed icons for the current page.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.homequotes: Home Quotes region*/
/*  * - page.home_high1: Home Highlight 1 region*/
/*  * - page.home_high2: Home Highlight 2 region*/
/*  * - page.home_high3: Home Highlight 3 region*/
/*  * - page.content_top: Content top region*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.footer_first: First Bottom region*/
/*  * - page.footer_second: Second Bottom region*/
/*  * - page.footer_third: Third Bottom region*/
/*  * - page.footer_fourth: Fourth Bottom region*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div id="page-wrapper" class="container">*/
/* */
/*   <header role="banner" id="header" class="clearfix">*/
/*     {{ page.header }}*/
/*   </header>*/
/* */
/*   {# Include a slider. #}*/
/*   {% if slider %}*/
/*     <div class="flexslider">*/
/*       <ul class="slides">*/
/*         {% for slide in slider %}*/
/*           <li>*/
/*             <a href="{{ slide.url }}"><img src="{{ slide.src }}"></a>*/
/*             <p class="flex-caption">{{ slide.title }}</p>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if page.homequotes %}*/
/*     <div id="home-quote">{{ page.homequotes }}</div>*/
/*   {% endif %}*/
/* */
/*   {# Home Highlight regions. #}*/
/*   {% if page.home_high1 or page.home_high2 or page.home_high3 %}*/
/*     <div id="home-highlights" class="row">*/
/*       {% if page.home_high1 %}*/
/*         <div class="home-high-1 col-md-4">{{ page.home_high1 }}</div>*/
/*       {% endif %}*/
/*       {% if page.home_high2 %}*/
/*         <div class="home-high-2 col-md-4">{{ page.home_high2 }}</div>*/
/*       {% endif %}*/
/*       {% if page.home_high3 %}*/
/*         <div class="home-high-3 col-md-4">{{ page.home_high3 }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <main id="main" class="clearfix">*/
/*     {% if page.sidebar_first %}*/
/*       <div id="sidebar-first" class="sidebar {{ sidebarfirst }}" role="complementary">*/
/*         {{ page.sidebar_first }}*/
/*       </div> <!-- /#sidebar-first -->*/
/*     {% endif %}*/
/* */
/*     <div class="{{ contentlayout }}" role="main">*/
/*       {% if page.content_top %}*/
/*         <div id="content_top">{{ page.content_top }}</div>*/
/*       {% endif %}*/
/* */
/*       {{ page.content }}*/
/* */
/*     </div>{# /#post-content #}*/
/* */
/*     {% if page.sidebar_second %}*/
/*       <div id="sidebar-second" class="sidebar {{ sidebarsecond }}" role="complementary">*/
/*         {{ page.sidebar_second }}*/
/*       </div> <!-- /#sidebar-first -->*/
/*     {% endif %}*/
/* */
/*   </main>*/
/* */
/*   {# Bottom regions. #}*/
/*   {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/*     <div id="footer-saran" class="row">*/
/*       <div id="footer-wrap">*/
/*         {% if page.footer_first %}*/
/*           <div class="footer-1 col-md-3">{{ page.footer_first }}</div>*/
/*         {% endif %}*/
/*         {% if page.footer_second %}*/
/*           <div class="footer-2 col-md-3">{{ page.footer_second }}</div>*/
/*         {% endif %}*/
/*         {% if page.footer_third %}*/
/*           <div class="footer-3 col-md-3">{{ page.footer_third }}</div>*/
/*         {% endif %}*/
/*         {% if page.footer_fourth %}*/
/*           <div class="footer-4 col-md-3">{{ page.footer_fourth }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*     <div class="clear"></div>*/
/*   {% endif %}*/
/* */
/*   {% if page.footer %}*/
/*     <footer role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/*   {% if copyright %}*/
/*     <div class="clear"></div>*/
/*     <div id="copyright">*/
/*     {% if copyright.footer_copyright %}*/
/*       {{ copyright.footer_copyright }}*/
/*     {% endif %}*/
/* */
/*     {% if copyright.footer_credits %}*/
/*       <span class="credits">{{ copyright.footer_credits }}</span>*/
/*     {% endif %}*/
/* */
/*     </div>*/
/*   {% endif %}*/
/* */
/* </div>{# /#wrap #}*/
/* */
