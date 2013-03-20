<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _assetic_29be3db
        if ($pathinfo === '/css/29be3db.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '29be3db',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_29be3db',);
        }

        // _assetic_29be3db_0
        if ($pathinfo === '/css/29be3db_bootstrap.min_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '29be3db',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_29be3db_0',);
        }

        // _assetic_52f540c
        if ($pathinfo === '/js/52f540c.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '52f540c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_52f540c',);
        }

        // _assetic_52f540c_0
        if ($pathinfo === '/js/52f540c_bootstrap.min_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '52f540c',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_52f540c_0',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Stormpath\\TooterBundle\\Controller\\IndexController::indexAction',  '_route' => '_welcome',);
        }

        // _login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Stormpath\\TooterBundle\\Controller\\IndexController::loginAction',  '_route' => '_login',);
        }

        // _logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Stormpath\\TooterBundle\\Controller\\IndexController::logoutAction',  '_route' => '_logout',);
        }

        // _profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'Stormpath\\TooterBundle\\Controller\\ProfileController::profileAction',  '_route' => '_profile',);
        }

        // _reset_password
        if ($pathinfo === '/reset-password') {
            return array (  '_controller' => 'Stormpath\\TooterBundle\\Controller\\PasswordController::resetPasswordAction',  '_route' => '_reset_password',);
        }

        // _reset_password_msg
        if ($pathinfo === '/reset-password-msg') {
            return array (  '_controller' => 'Stormpath\\TooterBundle\\Controller\\PasswordController::resetPasswordMsgAction',  '_route' => '_reset_password_msg',);
        }

        // _sign_up
        if ($pathinfo === '/sign-up') {
            return array (  '_controller' => 'Stormpath\\TooterBundle\\Controller\\SignUpController::signUpAction',  '_route' => '_sign_up',);
        }

        // _tooter
        if ($pathinfo === '/tooter') {
            return array (  '_controller' => 'Stormpath\\TooterBundle\\Controller\\TootController::tooterAction',  '_route' => '_tooter',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
