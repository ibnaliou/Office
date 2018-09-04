<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\AccountController::ajouterSalle' => function () {
    return ($this->privates['.service_locator.Ga1WXJk'] ?? $this->load('get_ServiceLocator_Ga1WXJkService.php'));
}, 'App\\Controller\\AccountController::detailSalle' => function () {
    return ($this->privates['.service_locator.LY6bLxw'] ?? $this->load('get_ServiceLocator_LY6bLxwService.php'));
}, 'App\\Controller\\AccountController::editSalle' => function () {
    return ($this->privates['.service_locator.LY6bLxw'] ?? $this->load('get_ServiceLocator_LY6bLxwService.php'));
}, 'App\\Controller\\AccountController::index' => function () {
    return ($this->privates['.service_locator.rzDpQWZ'] ?? $this->load('get_ServiceLocator_RzDpQWZService.php'));
}, 'App\\Controller\\AccountController::listeSalle' => function () {
    return ($this->privates['.service_locator.Ga1WXJk'] ?? $this->load('get_ServiceLocator_Ga1WXJkService.php'));
}, 'App\\Controller\\FrontController::catalogue' => function () {
    return ($this->privates['.service_locator.rzDpQWZ'] ?? $this->load('get_ServiceLocator_RzDpQWZService.php'));
}, 'App\\Controller\\FrontController::index' => function () {
    return ($this->privates['.service_locator.rzDpQWZ'] ?? $this->load('get_ServiceLocator_RzDpQWZService.php'));
}, 'App\\Controller\\FrontController::partagerSalle' => function () {
    return ($this->privates['.service_locator.nR8K082'] ?? $this->load('get_ServiceLocator_NR8K082Service.php'));
}, 'App\\Controller\\FrontController::reserver' => function () {
    return ($this->privates['.service_locator.WTvKyHM'] ?? $this->load('get_ServiceLocator_WTvKyHMService.php'));
}, 'App\\Controller\\RegistrationController::registerAction' => function () {
    return ($this->privates['.service_locator.JPXreA6'] ?? $this->load('get_ServiceLocator_JPXreA6Service.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['.service_locator.UlhrRhb'] ?? $this->load('get_ServiceLocator_UlhrRhbService.php'));
}, 'App\\Controller\\SecurityController::onLogoutSuccess' => function () {
    return ($this->privates['.service_locator.OLaif_L'] ?? $this->load('get_ServiceLocator_OLaifLService.php'));
}, 'App\\Controller\\AccountController:ajouterSalle' => function () {
    return ($this->privates['.service_locator.Ga1WXJk'] ?? $this->load('get_ServiceLocator_Ga1WXJkService.php'));
}, 'App\\Controller\\AccountController:detailSalle' => function () {
    return ($this->privates['.service_locator.LY6bLxw'] ?? $this->load('get_ServiceLocator_LY6bLxwService.php'));
}, 'App\\Controller\\AccountController:editSalle' => function () {
    return ($this->privates['.service_locator.LY6bLxw'] ?? $this->load('get_ServiceLocator_LY6bLxwService.php'));
}, 'App\\Controller\\AccountController:index' => function () {
    return ($this->privates['.service_locator.rzDpQWZ'] ?? $this->load('get_ServiceLocator_RzDpQWZService.php'));
}, 'App\\Controller\\AccountController:listeSalle' => function () {
    return ($this->privates['.service_locator.Ga1WXJk'] ?? $this->load('get_ServiceLocator_Ga1WXJkService.php'));
}, 'App\\Controller\\FrontController:catalogue' => function () {
    return ($this->privates['.service_locator.rzDpQWZ'] ?? $this->load('get_ServiceLocator_RzDpQWZService.php'));
}, 'App\\Controller\\FrontController:index' => function () {
    return ($this->privates['.service_locator.rzDpQWZ'] ?? $this->load('get_ServiceLocator_RzDpQWZService.php'));
}, 'App\\Controller\\FrontController:partagerSalle' => function () {
    return ($this->privates['.service_locator.nR8K082'] ?? $this->load('get_ServiceLocator_NR8K082Service.php'));
}, 'App\\Controller\\FrontController:reserver' => function () {
    return ($this->privates['.service_locator.WTvKyHM'] ?? $this->load('get_ServiceLocator_WTvKyHMService.php'));
}, 'App\\Controller\\RegistrationController:registerAction' => function () {
    return ($this->privates['.service_locator.JPXreA6'] ?? $this->load('get_ServiceLocator_JPXreA6Service.php'));
}, 'App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['.service_locator.UlhrRhb'] ?? $this->load('get_ServiceLocator_UlhrRhbService.php'));
}, 'App\\Controller\\SecurityController:onLogoutSuccess' => function () {
    return ($this->privates['.service_locator.OLaif_L'] ?? $this->load('get_ServiceLocator_OLaifLService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
