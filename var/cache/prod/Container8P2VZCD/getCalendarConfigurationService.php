<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Configuration\CalendarConfiguration' shared autowired service.

include_once $this->targetDirs[3].'/src/Configuration/CalendarConfiguration.php';

return $this->privates['App\\Configuration\\CalendarConfiguration'] = new \App\Configuration\CalendarConfiguration(($this->privates['App\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), $this->parameters['kimai.calendar']);
