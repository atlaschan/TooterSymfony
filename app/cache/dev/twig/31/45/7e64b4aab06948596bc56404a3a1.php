<?php

/* TooterBundle:Profile:profile.html.twig */
class __TwigTemplate_31457e64b4aab06948596bc56404a3a1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "profile.title", array(), "array"), "html", null, true);
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
<body style=\"padding-top: 55px;\">
<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <a class=\"brand\" style=\"margin-left: 0px;\" href=\"https://www.stormpath.com\">Tooter</a>
        <ul class=\"nav\">
            <li><a href=\"tooter\">Home</a></li>
            <li class=\"active\"><a href=\"profile\">Profile</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\" id=\"showAccountTypes\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.account.type", array(), "array"), "html", null, true);
        echo ": ";
        if (((isset($context["isAdmin"]) ? $context["isAdmin"] : $this->getContext($context, "isAdmin")) == true)) {
            echo "Administrator ";
        } elseif (((isset($context["isPremium"]) ? $context["isPremium"] : $this->getContext($context, "isPremium")) == true)) {
            echo "Premium ";
        } else {
            echo "Basic";
        }
        echo "</a></li>
                    <li class=\"divider\"></li>
                    <li class=\"nav-header\"></li>
                    <li><a href=\"logout\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "tooter.logout", array(), "array"), "html", null, true);
        echo "</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"span12\">
            
            <form id=\"user\" action=\"profile\" method=\"POST\">
                
                <div class=\"control-group\">
\t\t\t\t\t";
        // line 35
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 36
            echo "\t\t\t\t\t\t\t<div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "id"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "styleClass"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 37
            if (twig_in_filter($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), twig_get_array_keys_filter((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))))) {
                // line 38
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } elseif (((isset($context["updateProfile"]) ? $context["updateProfile"] : $this->getContext($context, "updateProfile")) == true)) {
            // line 44
            echo "\t\t\t\t\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "profile.message.updated", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 46
        echo "                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"firstName\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.first.name", array(), "array"), "html", null, true);
        echo "</label>
                    <input id=\"firstName\" name=\"firstName\" type=\"text\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"lastName\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.last.name", array(), "array"), "html", null, true);
        echo "</label>
                    <input id=\"lastName\" name=\"lastName\" type=\"text\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"email\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.email", array(), "array"), "html", null, true);
        echo "</label>
                    <input id=\"email\" name=\"email\" type=\"text\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"control-group\">
                    <label class=\"radio inline\" style=\"margin-left: -18px !important;\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.account.type", array(), "array"), "html", null, true);
        echo ":</label>&nbsp;
                    <label class=\"radio inline\">
                        <input id=\"groupUrl1\" name=\"groupUrl\" class=\"radio\" type=\"radio\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application_property"]) ? $context["application_property"] : $this->getContext($context, "application_property")), "stormpath.sdk.administrator.rest.url", array(), "array"), "html", null, true);
        echo "\"
\t\t\t\t\t\t";
        // line 63
        if (((isset($context["isAdmin"]) ? $context["isAdmin"] : $this->getContext($context, "isAdmin")) == true)) {
            echo "checked=\"checked\"";
        }
        echo " /> Administrator
                    </label>
                    <label class=\"radio inline\">
                        <input id=\"groupUrl2\" name=\"groupUrl\" class=\"radio\" type=\"radio\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application_property"]) ? $context["application_property"] : $this->getContext($context, "application_property")), "stormpath.sdk.premium.rest.url", array(), "array"), "html", null, true);
        echo "\" 
\t\t\t\t\t\t";
        // line 67
        if (((isset($context["isPremium"]) ? $context["isPremium"] : $this->getContext($context, "isPremium")) == true)) {
            echo "checked=\"checked\"";
        }
        echo "/> Premium
                    </label>
                    <label class=\"radio inline\">
                        <input id=\"groupUrl3\" name=\"groupUrl\" class=\"radio\" type=\"radio\" value=\"\" ";
        // line 70
        if ((((isset($context["isAdmin"]) ? $context["isAdmin"] : $this->getContext($context, "isAdmin")) == false) && ((isset($context["isPremium"]) ? $context["isPremium"] : $this->getContext($context, "isPremium")) == false))) {
            echo "checked=\"checked\"";
        }
        echo "/> Basic
                    </label>
                </div>
                <div class=\"control-group\">
                    <div class=\"controls\">
                       <button type=\"submit\" class=\"btn btn-primary\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "profile.update", array(), "array"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"accountTypeModalContent\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h3 id=\"myModalLabel\">Account Types</h3>
    </div>
    <div class=\"modal-body\">
        <p>
        <ul>
            <li><b>Basic</b>: Create Toot. Toots are not highlighted.</li>
            <li><b>Premium</b>: Create Toot. Toots are highlighted soft yellow.</li>
            <li><b>Admin</b>: Create Toot. Delete Toot. Toots are highlighted soft blue.</li>
        </ul>
        </p>
    </div>
    <div class=\"modal-footer\">
        <button class=\"btn btn-primary\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
    </div>
</div>
<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
";
        // line 101
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52f540c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52f540c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/52f540c_bootstrap.min_1.js");
            // line 102
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
        // line 104
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('#accountTypeModalContent').modal();
        \$('#accountTypeModalContent').modal('hide');
        \$('#showAccountTypes').on('click', function() {
            \$('#accountTypeModalContent').modal('show');
        });
    });
</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TooterBundle:Profile:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 104,  233 => 102,  229 => 101,  200 => 75,  190 => 70,  182 => 67,  178 => 66,  170 => 63,  166 => 62,  161 => 60,  155 => 57,  151 => 56,  145 => 53,  141 => 52,  135 => 49,  131 => 48,  127 => 46,  121 => 44,  117 => 42,  111 => 40,  105 => 38,  103 => 37,  96 => 36,  94 => 35,  78 => 22,  64 => 19,  57 => 17,  45 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
