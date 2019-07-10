<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ProfileController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/ProfileController.php';

$this->services['App\\Controller\\ProfileController'] = $instance = new \App\Controller\ProfileController(($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

$instance->setContainer(($this->privates['.service_locator.OHVJh0X'] ?? $this->load('get_ServiceLocator_OHVJh0XService.php'))->withContext('App\\Controller\\ProfileController', $this));

return $instance;
