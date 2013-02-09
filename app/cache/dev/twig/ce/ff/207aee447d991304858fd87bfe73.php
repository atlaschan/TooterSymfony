<?php

/* TooterBundle:Password:resetPassword.html.twig */
class __TwigTemplate_ceff207aee447d991304858fd87bfe73 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "reset.password.title", array(), "array"), "html", null, true);
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
        echo "    <link rel=\"icon\" type=\"image/vnd.microsoft.icon\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_directory"]) ? $context["base_directory"] : $this->getContext($context, "base_directory")), "html", null, true);
        echo "/assets/img/favicon.ico\"/>
</head>
<body style=\"padding-top: 15px;\">
<div class=\"container-fluid\">
    <div class=\"hero-unit\">
        <h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "reset.password.title", array(), "array"), "html", null, true);
        echo "</h3>
\t\t
        <form id=\"user\" action=\"reset-password\" method=\"POST\">
            <div class=\"control-group\">
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "reset.password.message", array(), "array"), "html", null, true);
        echo "
            </div>
            <div class=\"control-group\">
\t\t\t\t";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "\t\t\t\t\t\t<div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "id"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "styleClass"), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 21
            if (twig_in_filter($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), twig_get_array_keys_filter((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))))) {
                // line 22
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 24
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 28
        echo "            </div>
            <div class=\"control-group\">
                <label for=\"email\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.email", array(), "array"), "html", null, true);
        echo "</label>
                <input id=\"email\" name=\"email\" type=\"text\" value=\"\"/>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <a class=\"btn\" href=\"login\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "return.message", array(), "array"), "html", null, true);
        echo "</a>
                   <button class=\"btn btn-primary\" type=\"submit\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.password.reset", array(), "array"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52f540c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52f540c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/52f540c_bootstrap.min_1.js");
            // line 45
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
        // line 47
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TooterBundle:Password:resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 47,  125 => 45,  121 => 44,  110 => 36,  106 => 35,  98 => 30,  94 => 28,  90 => 26,  84 => 24,  78 => 22,  76 => 21,  69 => 20,  67 => 19,  61 => 16,  54 => 12,  45 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
