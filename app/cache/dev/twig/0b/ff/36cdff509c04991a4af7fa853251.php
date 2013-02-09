<?php

/* TooterBundle:Profile:profile.html.twig */
class __TwigTemplate_0bff36cdff509c04991a4af7fa853251 extends Twig_Template
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
        echo ": Basic</a></li>
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
        }
        // line 44
        echo "                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"firstName\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.first.name", array(), "array"), "html", null, true);
        echo "</label>
                    <input id=\"firstName\" name=\"firstName\" type=\"text\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"lastName\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.last.name", array(), "array"), "html", null, true);
        echo "</label>
                    <input id=\"lastName\" name=\"lastName\" type=\"text\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"email\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.email", array(), "array"), "html", null, true);
        echo "</label>
                    <input id=\"email\" name=\"email\" type=\"text\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"control-group\">
                    <label class=\"radio inline\" style=\"margin-left: -18px !important;\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "customer.account.type", array(), "array"), "html", null, true);
        echo ":</label>&nbsp;
                    <label class=\"radio inline\">
                        <input id=\"groupUrl1\" name=\"groupUrl\" class=\"radio\" type=\"radio\" value=\"PUT THE REST URL TO A GROUP FOR ADMINISTRATOR LEVEL HERE -- THIS GROUP MUST EXIST IN THE DIRECTORY LISTED ABOVE\"/> Administrator
                    </label>
                    <label class=\"radio inline\">
                        <input id=\"groupUrl2\" name=\"groupUrl\" class=\"radio\" type=\"radio\" value=\"PUT THE REST URL TO A GROUP FOR ADMINISTRATOR LEVEL HERE -- THIS GROUP MUST EXIST IN THE DIRECTORY LISTED ABOVE\"/> Premium
                    </label>
                    <label class=\"radio inline\">
                        <input id=\"groupUrl3\" name=\"groupUrl\" class=\"radio\" type=\"radio\" value=\"\" checked=\"checked\"/> Basic
                    </label>
                </div>
                <div class=\"control-group\">
                    <div class=\"controls\">
                       <button type=\"submit\" class=\"btn btn-primary\">";
        // line 71
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
        // line 97
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52f540c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52f540c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/52f540c_bootstrap.min_1.js");
            // line 98
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
        // line 100
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
        return array (  210 => 100,  196 => 98,  192 => 97,  163 => 71,  147 => 58,  141 => 55,  137 => 54,  131 => 51,  127 => 50,  121 => 47,  117 => 46,  113 => 44,  109 => 42,  103 => 40,  97 => 38,  95 => 37,  88 => 36,  86 => 35,  70 => 22,  64 => 19,  57 => 17,  45 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
