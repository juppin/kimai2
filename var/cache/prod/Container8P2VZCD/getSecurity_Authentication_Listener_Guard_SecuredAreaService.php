<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.guard.secured_area' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Guard/Firewall/GuardAuthenticationListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Guard/GuardAuthenticatorHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Session/SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Session/SessionAuthenticationStrategy.php';

$a = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), []);
$a->setSessionAuthenticationStrategy(($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

$this->privates['security.authentication.listener.guard.secured_area'] = $instance = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'secured_area', new RewindableGenerator(function () {
    yield 0 => ($this->privates['App\\Security\\TokenAuthenticator'] ?? $this->load('getTokenAuthenticatorService.php'));
}, 1), ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')));

$instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.secured_area'] ?? $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_SecuredAreaService.php')));

return $instance;
