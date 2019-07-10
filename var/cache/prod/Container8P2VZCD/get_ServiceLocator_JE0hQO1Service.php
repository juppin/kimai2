<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.jE0hQO1' shared service.

return $this->privates['.service_locator.jE0hQO1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'configuration' => ['privates', 'App\\Configuration\\CalendarConfiguration', 'getCalendarConfigurationService.php', true],
    'dateTime' => ['privates', 'App\\Timesheet\\UserDateTimeFactory', 'getUserDateTimeFactoryService.php', true],
    'service' => ['privates', 'App\\Timesheet\\TrackingModeService', 'getTrackingModeServiceService.php', true],
]);
