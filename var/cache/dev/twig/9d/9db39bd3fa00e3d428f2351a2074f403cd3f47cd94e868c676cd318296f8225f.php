<?php

/* default/index.html.twig */
class __TwigTemplate_0b815f0ef9614ea8ce24d3f255319831783f6a333b152d820bf540daba520993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b699a414827fdcaf12716dd7f04e0a23f9dc24c2c702574cb41f9f9250ec6e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b699a414827fdcaf12716dd7f04e0a23f9dc24c2c702574cb41f9f9250ec6e57->enter($__internal_b699a414827fdcaf12716dd7f04e0a23f9dc24c2c702574cb41f9f9250ec6e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_b6877a38178e7c061dd3f149673f031a51292aeb398cea0cb5c18a9fbf0e8963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6877a38178e7c061dd3f149673f031a51292aeb398cea0cb5c18a9fbf0e8963->enter($__internal_b6877a38178e7c061dd3f149673f031a51292aeb398cea0cb5c18a9fbf0e8963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b699a414827fdcaf12716dd7f04e0a23f9dc24c2c702574cb41f9f9250ec6e57->leave($__internal_b699a414827fdcaf12716dd7f04e0a23f9dc24c2c702574cb41f9f9250ec6e57_prof);

        
        $__internal_b6877a38178e7c061dd3f149673f031a51292aeb398cea0cb5c18a9fbf0e8963->leave($__internal_b6877a38178e7c061dd3f149673f031a51292aeb398cea0cb5c18a9fbf0e8963_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d48c794409039b41717d2274df69ba2e35364842f0651f48eeb11313489050a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d48c794409039b41717d2274df69ba2e35364842f0651f48eeb11313489050a->enter($__internal_6d48c794409039b41717d2274df69ba2e35364842f0651f48eeb11313489050a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d91ae5b0dbb786a7f4276a5ed01a0a03e93c323bd16bd5abd5c9ba1332d3d95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91ae5b0dbb786a7f4276a5ed01a0a03e93c323bd16bd5abd5c9ba1332d3d95a->enter($__internal_d91ae5b0dbb786a7f4276a5ed01a0a03e93c323bd16bd5abd5c9ba1332d3d95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hacker News ";
        
        $__internal_d91ae5b0dbb786a7f4276a5ed01a0a03e93c323bd16bd5abd5c9ba1332d3d95a->leave($__internal_d91ae5b0dbb786a7f4276a5ed01a0a03e93c323bd16bd5abd5c9ba1332d3d95a_prof);

        
        $__internal_6d48c794409039b41717d2274df69ba2e35364842f0651f48eeb11313489050a->leave($__internal_6d48c794409039b41717d2274df69ba2e35364842f0651f48eeb11313489050a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8dc9d0131b84f6a4f7551754523e10238ee052ce9100659c9c91df44fe41696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8dc9d0131b84f6a4f7551754523e10238ee052ce9100659c9c91df44fe41696->enter($__internal_c8dc9d0131b84f6a4f7551754523e10238ee052ce9100659c9c91df44fe41696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bad6196c1ba46b9574e594b9514ba69ea9f4f01817c8a5190e942e33a3ef70e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad6196c1ba46b9574e594b9514ba69ea9f4f01817c8a5190e942e33a3ef70e8->enter($__internal_bad6196c1ba46b9574e594b9514ba69ea9f4f01817c8a5190e942e33a3ef70e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container no-pad\">
  <br>

    <div class=\"row\">
    <div class=\"col-8\"><h2 class=\"\">Posts by other Hackers:</h2></div>
    <div class=\"col-4\">
      <div style=\"float:right;\">
        <h6>Sort by: </h6>
        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
          <button type=\"button\" class=\"btn btn-sm
          ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "sort_by"), "method") == "most_recent")) {
            // line 16
            echo "          ";
            echo "active-default-btn";
            echo "
          ";
        }
        // line 18
        echo "          \">
            <a class=\"btn-link\" href=\"?sort_by=most_recent\">Most Recent</a>
          </button>
          <button type=\"button\" class=\"btn btn-sm
          ";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "sort_by"), "method") == "most_liked")) {
            // line 23
            echo "          ";
            echo "active-default-btn";
            echo "
          ";
        }
        // line 25
        echo "          \">
            <a class=\"btn-link\" href=\"?sort_by=most_liked\">Most Liked</a>
          </button>
        </div>
      </div>
    </div>

    </div>
  <br>
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 35
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 36
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
            ";
                // line 37
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
  <div class=\"container main-section\" style=\"padding:0;\">
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 44
            echo "
      <div class=\"row article-panel post\">
      <div class=\"col-lg-12 col-sm-12 col-12\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <h4 class=\"text-primary\"><a class=\"no-under\" href=\"/post/";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostTitle", array(), "method"), "html", null, true);
            echo "</a></h4>
            <p>
              ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostBody", array(), "method"), "html", null, true);
            echo "
              <br>

            </p>
            <span class=\"upvote-count\" id=\"upvote-";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getUpvotesCount", array(), "method"), "html", null, true);
            echo "</span>&nbsp; <span class=\"upvote-count\">Likes</span>&nbsp; <hr>
            <button class=\"btn btn-sm btn-default
            ";
            // line 57
            if ($this->getAttribute($context["post"], "likedByCurrentUser", array(0 => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "getId", array(), "method")), "method")) {
                // line 58
                echo "            unlike
            ";
            } else {
                // line 60
                echo "            like
            ";
            }
            // line 62
            echo "            \" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array(), "method"), "html", null, true);
            echo "\" data-userid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "getId", array(), "method"), "html", null, true);
            echo "\" data-postid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array(), "method"), "html", null, true);
            echo "\">
              <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
            </button>&nbsp;
            <button class=\"btn btn-sm btn-default\">
              <a href=\"/post/";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array(), "method"), "html", null, true);
            echo "#comment\" class=\"btn-link\">
                <i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> &nbsp; Comment
              </a>
            </button>
          </div>
        </div>
        <div class=\"row post-detail\">
          <div class=\"col-lg-12 col-sm-12 col-12\">
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\">
                  <img src=\"https://www.my-opinion.de/online_en/images/icons/profil.png\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getUser", array(), "method"), "getUserName", array(), "method"), "html", null, true);
            echo "</span>
                </li>
                <li class=\"list-inline-item\">
                  <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "getPostedAt", array(), "method"), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</span>
                </li>
                <li class=\"list-inline-item\">
                  <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> <span class=\"text-info\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getCommentsCount", array(), "method"), "html", null, true);
            echo " Comments</span>
                </li>
              </ul>
          </div>
        </div>
      </div>
      </div>
      <br>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
  </div>
  <div class=\"text-center\">
    <br>
    <button class=\"btn btn-primary view-more-button\" role=\"button\">Show more</button>
    <br>
    <br>

  </div>
  <div class=\"page-load-status\">
  <p class=\"infinite-scroll-request\">End of content, no more posts to load.</p>
</div>
<style>
body{
}
.main-section{
\tpadding:15px;
\tbackground-color: #fff;
}
.list-inline-item{
\tborder-right:1px solid black;
\tpadding-right:6px;
\tline-height:0.4em;
}
.list-inline-item:last-child{
\tborder:none;
}
.post-detail ul{
\tmargin-top:15px;
}

.page-load-status {
  display: none; /* hidden by default */
  padding-top: 20px;
  border-top: 1px solid #DDD;
  text-align: center;
  color: #777;
}
</style>

";
        
        $__internal_bad6196c1ba46b9574e594b9514ba69ea9f4f01817c8a5190e942e33a3ef70e8->leave($__internal_bad6196c1ba46b9574e594b9514ba69ea9f4f01817c8a5190e942e33a3ef70e8_prof);

        
        $__internal_c8dc9d0131b84f6a4f7551754523e10238ee052ce9100659c9c91df44fe41696->leave($__internal_c8dc9d0131b84f6a4f7551754523e10238ee052ce9100659c9c91df44fe41696_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 92,  225 => 82,  219 => 79,  213 => 76,  200 => 66,  188 => 62,  184 => 60,  180 => 58,  178 => 57,  171 => 55,  164 => 51,  157 => 49,  150 => 44,  146 => 43,  142 => 41,  136 => 40,  127 => 37,  122 => 36,  117 => 35,  113 => 34,  102 => 25,  96 => 23,  94 => 22,  88 => 18,  82 => 16,  80 => 15,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %} Hacker News {% endblock %}

{% block body %}
<div class=\"container no-pad\">
  <br>

    <div class=\"row\">
    <div class=\"col-8\"><h2 class=\"\">Posts by other Hackers:</h2></div>
    <div class=\"col-4\">
      <div style=\"float:right;\">
        <h6>Sort by: </h6>
        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
          <button type=\"button\" class=\"btn btn-sm
          {% if(app.request.query.get('sort_by') == 'most_recent') %}
          {{ 'active-default-btn' }}
          {% endif %}
          \">
            <a class=\"btn-link\" href=\"?sort_by=most_recent\">Most Recent</a>
          </button>
          <button type=\"button\" class=\"btn btn-sm
          {% if(app.request.query.get('sort_by') == 'most_liked') %}
          {{ 'active-default-btn' }}
          {% endif %}
          \">
            <a class=\"btn-link\" href=\"?sort_by=most_liked\">Most Liked</a>
          </button>
        </div>
      </div>
    </div>

    </div>
  <br>
  {% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
  {% endfor %}
</div>
  <div class=\"container main-section\" style=\"padding:0;\">
    {% for post in posts %}

      <div class=\"row article-panel post\">
      <div class=\"col-lg-12 col-sm-12 col-12\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <h4 class=\"text-primary\"><a class=\"no-under\" href=\"/post/{{ post.getId() }}\">{{ post.getPostTitle() }}</a></h4>
            <p>
              {{ post.getPostBody() }}
              <br>

            </p>
            <span class=\"upvote-count\" id=\"upvote-{{ post.getId() }}\">{{ post.getUpvotesCount() }}</span>&nbsp; <span class=\"upvote-count\">Likes</span>&nbsp; <hr>
            <button class=\"btn btn-sm btn-default
            {% if(post.likedByCurrentUser(app.user.getId())) %}
            unlike
            {% else %}
            like
            {% endif %}
            \" data-id=\"{{ post.getId() }}\" data-userid=\"{{ app.user.getId() }}\" data-postid=\"{{ post.getId() }}\">
              <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i> &nbsp; Like
            </button>&nbsp;
            <button class=\"btn btn-sm btn-default\">
              <a href=\"/post/{{ post.getId() }}#comment\" class=\"btn-link\">
                <i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> &nbsp; Comment
              </a>
            </button>
          </div>
        </div>
        <div class=\"row post-detail\">
          <div class=\"col-lg-12 col-sm-12 col-12\">
              <ul class=\"list-inline\">
                <li class=\"list-inline-item\">
                  <img src=\"https://www.my-opinion.de/online_en/images/icons/profil.png\" class=\"rounded-circle\" width=\"20px\"> <span>by</span> <span class=\"text-info\">{{ post.getUser().getUserName() }}</span>
                </li>
                <li class=\"list-inline-item\">
                  <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>{{ post.getPostedAt()|date('F jS \\\\a\\\\t g:ia') }}</span>
                </li>
                <li class=\"list-inline-item\">
                  <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> <span class=\"text-info\">{{ post.getCommentsCount() }} Comments</span>
                </li>
              </ul>
          </div>
        </div>
      </div>
      </div>
      <br>

    {% endfor %}

  </div>
  <div class=\"text-center\">
    <br>
    <button class=\"btn btn-primary view-more-button\" role=\"button\">Show more</button>
    <br>
    <br>

  </div>
  <div class=\"page-load-status\">
  <p class=\"infinite-scroll-request\">End of content, no more posts to load.</p>
</div>
<style>
body{
}
.main-section{
\tpadding:15px;
\tbackground-color: #fff;
}
.list-inline-item{
\tborder-right:1px solid black;
\tpadding-right:6px;
\tline-height:0.4em;
}
.list-inline-item:last-child{
\tborder:none;
}
.post-detail ul{
\tmargin-top:15px;
}

.page-load-status {
  display: none; /* hidden by default */
  padding-top: 20px;
  border-top: 1px solid #DDD;
  text-align: center;
  color: #777;
}
</style>

{% endblock %}
", "default/index.html.twig", "/home/karim/Desktop/sandbox/hacker-news/app/Resources/views/default/index.html.twig");
    }
}
