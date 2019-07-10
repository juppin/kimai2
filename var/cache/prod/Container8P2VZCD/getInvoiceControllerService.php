<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\InvoiceController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/InvoiceController.php';

$this->services['App\\Controller\\InvoiceController'] = $instance = new \App\Controller\InvoiceController(($this->privates['App\\Invoice\\ServiceInvoice'] ?? $this->load('getServiceInvoiceService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('App\\Entity\\InvoiceTemplate'), ($this->privates['App\\Timesheet\\UserDateTimeFactory'] ?? $this->load('getUserDateTimeFactoryService.php')));

$instance->setContainer(($this->privates['.service_locator.OHVJh0X'] ?? $this->load('get_ServiceLocator_OHVJh0XService.php'))->withContext('App\\Controller\\InvoiceController', $this));

return $instance;
