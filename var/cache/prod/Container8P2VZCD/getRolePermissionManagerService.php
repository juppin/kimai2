<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Security\RolePermissionManager' shared autowired service.

include_once $this->targetDirs[3].'/src/Security/RolePermissionManager.php';

return $this->privates['App\\Security\\RolePermissionManager'] = new \App\Security\RolePermissionManager($this->parameters['kimai.permissions']);
