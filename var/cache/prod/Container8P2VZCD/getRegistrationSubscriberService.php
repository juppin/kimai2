<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\EventSubscriber\RegistrationSubscriber' shared autowired service.

include_once $this->targetDirs[3].'/src/EventSubscriber/RegistrationSubscriber.php';

return $this->privates['App\\EventSubscriber\\RegistrationSubscriber'] = new \App\EventSubscriber\RegistrationSubscriber(($this->services['fos_user.user_manager'] ?? $this->load('getFosUser_UserManagerService.php')));
