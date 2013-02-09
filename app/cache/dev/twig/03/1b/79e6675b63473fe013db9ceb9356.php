<?php

/* TooterBundle:Index:login.html.twig */
class __TwigTemplate_031b79e6675b63473fe013db9ceb9356 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title id=\"pageTitle\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "account.login", array(), "array"), "html", null, true);
        echo "</title>
\t";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "29be3db_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_29be3db_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/29be3db_bootstrap.min_1.css");
            // line 6
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
        // line 8
        echo "    <link rel=\"icon\" type=\"image/vnd.microsoft.icon\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_directory"]) ? $context["base_directory"] : $this->getContext($context, "base_directory")), "html", null, true);
        echo "/assets/img/favicon.ico\"/>
</head>
<body style=\"padding-top: 15px;\">
<div class=\"container-fluid\">
    <div class=\"hero-unit\">
        <h1>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "welcome.message", array(), "array"), "html", null, true);
        echo "
        </h1>

        <h3>
            A <a href=\"http://www.stormpath.com\">Stormpath</a> sample application
        </h3>
        <form action=\"login\" method=\"post\" name=\"customer\" id=\"customer\"> 
            
\t\t\t";
        // line 22
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 23
            echo "\t\t\t\t<div class=\"control-group error\">
\t\t\t\t\t\t<span id=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "id"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "styleClass"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t";
        }
        // line 27
        echo "\t\t\t
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"userName\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.userName", array(), "array"), "html", null, true);
        echo "</label>
                <input name=\"userName\" type=\"text\" id=\"userName\" value=\"\">
\t\t\t\t
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"password\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.password", array(), "array"), "html", null, true);
        echo "</label>
                 <input name=\"password\" type=\"password\" id=\"password\" value=\"\">  
            </div>
            <div id=\"control-group\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "account.login", array(), "array"), "html", null, true);
        echo "</button><br/><br/>
            </div>
            <div id=\"control-group\">
                <a href=\"reset-password\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "password.forgot", array(), "array"), "html", null, true);
        echo "</a><br>
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "account.dont.have.one", array(), "array"), "html", null, true);
        echo "
                <a href=\"sign-up\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "account.signup", array(), "array"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>
</div>
<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
";
        // line 49
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52f540c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52f540c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/52f540c_bootstrap.min_1.js");
            // line 50
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
        // line 52
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TooterBundle:Index:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 52,  128 => 50,  124 => 49,  115 => 43,  111 => 42,  107 => 41,  101 => 38,  94 => 34,  86 => 29,  82 => 27,  72 => 24,  69 => 23,  67 => 22,  56 => 14,  46 => 8,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
