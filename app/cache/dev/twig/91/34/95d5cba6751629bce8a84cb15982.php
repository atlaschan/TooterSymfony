<?php

/* TooterBundle:Toot:tooter.html.twig */
class __TwigTemplate_913495d5cba6751629bce8a84cb15982 extends Twig_Template
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
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "tooter.title", array(), "array"), "html", null, true);
        echo "</title>
\t";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "29be3db_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_29be3db_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/29be3db_bootstrap.min_1.css");
            // line 7
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
        // line 9
        echo "    <link rel=\"icon\" type=\"image/vnd.microsoft.icon\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_directory"]) ? $context["base_directory"] : $this->getContext($context, "base_directory")), "html", null, true);
        echo "/assets/img/favicon.ico\"/>
</head>
<body style=\"padding-top: 55px;\">
<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <a class=\"brand\" style=\"margin-left: 0px;\" href=\"https://www.stormpath.com\">Tooter</a>
        <ul class=\"nav\">
            <li class=\"active\"><a href=\"tooter\">Home</a></li>
            <li><a href=\"profile\">Profile</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\" id=\"showAccountTypes\">";
        // line 21
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
        // line 24
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
            <form id=\"toot\" action=\"tooter\" method=\"POST\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t";
        // line 36
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 37
            echo "\t\t\t\t\t\t\t\t<div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "id"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "styleClass"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 38
            if (twig_in_filter($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), twig_get_array_keys_filter((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))))) {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t</div>

                    <div class=\"control-group\">
                        <textarea id=\"tootMessage\" name=\"tootMessage\" maxlength=\"160\" placeholder=\"Compose your toot here...\" rows=\"3\" value=\"";
        // line 48
        if (((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) && (isset($context["tootMessage"]) ? $context["tootMessage"] : $this->getContext($context, "tootMessage")))) {
            echo twig_escape_filter($this->env, (isset($context["tootMessage"]) ? $context["tootMessage"] : $this->getContext($context, "tootMessage")), "html", null, true);
        }
        echo "\"></textarea>
                    </div>
                    <div class=\"control-group\">
                        <div class=\"controls\">
                            <button type=\"submit\" class=\"btn btn-primary\">Toot!</button>
                        </div>
                    </div>
                
            </form>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"span12\">
            <h3>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "tooter.toots", array(), "array"), "html", null, true);
        echo "</h3>
\t\t\t\t";
        // line 62
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tootList")) != 0)) {
            // line 63
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tootList"));
            foreach ($context['_seq'] as $context["_key"] => $context["toot"]) {
                // line 64
                echo "\t\t\t\t\t\t<div class=\"well well-small basic\" title=\"Poster's Account Type\" data-content=\"Basic\">
\t\t\t\t\t\t\t<code><a href=\"profile\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
                echo "</a>: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["toot"]) ? $context["toot"] : $this->getContext($context, "toot")), "tootMessage"), "html", null, true);
                echo "</code>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toot'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 68
            echo "\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\tThere are no toots!
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t
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
        // line 96
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52f540c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52f540c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/52f540c_bootstrap.min_1.js");
            // line 97
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
        // line 99
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('.close').tooltip();
        \$('.admin, .premium, .basic').popover({trigger: 'hover', placement: 'top'});
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
        return "TooterBundle:Toot:tooter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 99,  212 => 97,  208 => 96,  183 => 73,  177 => 69,  174 => 68,  161 => 65,  158 => 64,  153 => 63,  151 => 62,  147 => 61,  129 => 48,  124 => 45,  120 => 43,  114 => 41,  108 => 39,  106 => 38,  99 => 37,  97 => 36,  82 => 24,  68 => 21,  61 => 19,  47 => 9,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
