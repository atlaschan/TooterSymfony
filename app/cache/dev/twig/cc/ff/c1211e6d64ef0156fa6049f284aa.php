<?php

/* TooterBundle:Index:logout.html.twig */
class __TwigTemplate_ccffc1211e6d64ef0156fa6049f284aa extends Twig_Template
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
        echo "<html>
<head>
    <title id=\"pageTitle\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "tooter.logout", array(), "array"), "html", null, true);
        echo "</title>
\t";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "29be3db_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_29be3db_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/29be3db_bootstrap.min_1.css");
            // line 5
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "29be3db"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_29be3db") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/29be3db.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/vnd.microsoft.icon\" href=\"<?php echo \$base_directory; ?>/assets/img/favicon.ico\"/>

</head>
<body style=\"padding-top: 15px;\">
<div class=\"container-fluid\">
    <div class=\"hero-unit\">
        <h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "logout.message", array(), "array"), "html", null, true);
        echo "</h3>

        <a class=\"btn btn-primary\" href=\"login\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "logout.login.page", array(), "array"), "html", null, true);
        echo "</a>
    </div>
</div>
<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52f540c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52f540c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/52f540c_bootstrap.min_1.js");
            // line 20
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "52f540c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52f540c") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/52f540c.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 22
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TooterBundle:Index:logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  69 => 20,  65 => 19,  58 => 15,  53 => 13,  45 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
