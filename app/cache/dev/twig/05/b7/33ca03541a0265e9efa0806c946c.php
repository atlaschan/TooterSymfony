<?php

/* TooterBundle:SignUp:signUp.html.twig */
class __TwigTemplate_05b733ca03541a0265e9efa0806c946c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "signUp.now", array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "signUp.now", array(), "array"), "html", null, true);
        echo "</h3>
        <form id=\"customer\" action=\"sign-up\" method=\"POST\">
\t\t\t<div class=\"control-group\">
\t\t\t\t";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "\t\t\t\t\t\t<div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "id"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "styleClass"), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 17
            if (twig_in_filter($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), twig_get_array_keys_filter((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))))) {
                // line 18
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 20
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t</div>
            
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"firstName\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.first.name", array(), "array"), "html", null, true);
        echo "</label>
                <input id=\"firstName\" name=\"firstName\" type=\"text\" value=\"\"/>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"lastName\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.last.name", array(), "array"), "html", null, true);
        echo "</label>
                <input id=\"lastName\" name=\"lastName\" type=\"text\" value=\"\"/>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"email\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.email", array(), "array"), "html", null, true);
        echo "</label>
                <input id=\"email\" name=\"email\" type=\"text\" value=\"\"/>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"password\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.password", array(), "array"), "html", null, true);
        echo "</label>
                <input id=\"password\" name=\"password\" type=\"password\" value=\"\"/>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"confirmPassword\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.password.confirm", array(), "array"), "html", null, true);
        echo "</label>
                <input id=\"confirmPassword\" name=\"confirmPassword\" type=\"password\" value=\"\"/>
            </div>
            <div class=\"control-group\">
                <label class=\"radio inline\" style=\"margin-left: -18px !important;\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.account.type", array(), "array"), "html", null, true);
        echo ":</label>&nbsp;
                <label class=\"radio inline\">
                    <input id=\"groupUrl1\" name=\"groupUrl\" class=\"radio\" type=\"radio\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application_property"]) ? $context["application_property"] : $this->getContext($context, "application_property")), "stormpath.sdk.administrator.rest.url", array(), "array"), "html", null, true);
        echo "\"/> Administrator
                </label>
                <label class=\"radio inline\">
                    <input id=\"groupUrl2\" name=\"groupUrl\" class=\"radio\" type=\"radio\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application_property"]) ? $context["application_property"] : $this->getContext($context, "application_property")), "stormpath.sdk.premium.rest.url", array(), "array"), "html", null, true);
        echo "\"/> Premium
                </label>
                <label class=\"radio inline\">
                    <input id=\"groupUrl3\" name=\"groupUrl\" class=\"radio\" type=\"radio\" value=\"\" checked=\"checked\"/> Basic
                </label>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <a class=\"btn\" href=\"login\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "return.message", array(), "array"), "html", null, true);
        echo "</a>
                   <button class=\"btn btn-primary\" type=\"submit\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.register", array(), "array"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
";
        // line 69
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52f540c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52f540c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/52f540c_bootstrap.min_1.js");
            // line 70
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
        // line 72
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TooterBundle:SignUp:signUp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 72,  168 => 70,  164 => 69,  153 => 61,  149 => 60,  138 => 52,  132 => 49,  127 => 47,  120 => 43,  113 => 39,  106 => 35,  99 => 31,  92 => 27,  87 => 24,  83 => 22,  77 => 20,  71 => 18,  69 => 17,  62 => 16,  60 => 15,  54 => 12,  45 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
