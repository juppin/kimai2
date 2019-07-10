<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'nelmio_api_doc.generator.default' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/ApiDocGenerator.php';

$this->services['nelmio_api_doc.generator.default'] = $instance = new \Nelmio\ApiDocBundle\ApiDocGenerator(new RewindableGenerator(function () {
    yield 0 => ($this->privates['nelmio_api_doc.describers.config'] ?? $this->load('getNelmioApiDoc_Describers_ConfigService.php'));
    yield 1 => ($this->privates['nelmio_api_doc.describers.config.default'] ?? ($this->privates['nelmio_api_doc.describers.config.default'] = new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber([], true)));
    yield 2 => ($this->privates['nelmio_api_doc.describers.swagger_php.default'] ?? $this->load('getNelmioApiDoc_Describers_SwaggerPhp_DefaultService.php'));
    yield 3 => ($this->privates['nelmio_api_doc.describers.route.default'] ?? $this->load('getNelmioApiDoc_Describers_Route_DefaultService.php'));
    yield 4 => ($this->privates['nelmio_api_doc.describers.default'] ?? ($this->privates['nelmio_api_doc.describers.default'] = new \Nelmio\ApiDocBundle\Describer\DefaultDescriber()));
}, 5), new RewindableGenerator(function () {
    yield 0 => ($this->privates['nelmio_api_doc.model_describers.form'] ?? $this->load('getNelmioApiDoc_ModelDescribers_FormService.php'));
    yield 1 => ($this->privates['nelmio_api_doc.model_describers.jms'] ?? $this->load('getNelmioApiDoc_ModelDescribers_JmsService.php'));
    yield 2 => ($this->privates['nelmio_api_doc.model_describers.object'] ?? $this->load('getNelmioApiDoc_ModelDescribers_ObjectService.php'));
}, 3));

$instance->setAlternativeNames(['CustomerEditForm' => ['type' => 'App\\Form\\API\\CustomerApiEditForm', 'groups' => [0 => 'Default', 1 => 'Entity', 2 => 'Customer']], 'CustomerEntity' => ['type' => 'App\\Entity\\Customer', 'groups' => [0 => 'Default', 1 => 'Entity', 2 => 'Customer']], 'CustomerMetaField' => ['type' => 'App\\Entity\\CustomerMeta', 'groups' => [0 => 'Default', 1 => 'Customer']], 'CustomerCollection' => ['type' => 'App\\Entity\\Customer', 'groups' => [0 => 'Default', 1 => 'Collection', 2 => 'Customer']], 'ProjectEditForm' => ['type' => 'App\\Form\\API\\ProjectApiEditForm', 'groups' => [0 => 'Default', 1 => 'Entity', 2 => 'Project']], 'ProjectEntity' => ['type' => 'App\\Entity\\Project', 'groups' => [0 => 'Default', 1 => 'Entity', 2 => 'Project']], 'ProjectMetaField' => ['type' => 'App\\Entity\\ProjectMeta', 'groups' => [0 => 'Default', 1 => 'Project']], 'ProjectCollection' => ['type' => 'App\\Entity\\Project', 'groups' => [0 => 'Default', 1 => 'Collection', 2 => 'Project']], 'ActivityEditForm' => ['type' => 'App\\Form\\API\\ActivityApiEditForm', 'groups' => [0 => 'Default', 1 => 'Entity', 2 => 'Activity']], 'ActivityEntity' => ['type' => 'App\\Entity\\Activity', 'groups' => [0 => 'Default', 1 => 'Entity', 2 => 'Activity']], 'ActivityMetaField' => ['type' => 'App\\Entity\\ActivityMeta', 'groups' => [0 => 'Default', 1 => 'Activity']], 'ActivityCollection' => ['type' => 'App\\Entity\\Activity', 'groups' => [0 => 'Default', 1 => 'Collection', 2 => 'Activity']], 'TimesheetEditForm' => ['type' => 'App\\Form\\API\\TimesheetApiEditForm', 'groups' => [0 => 'Default', 1 => 'Entity', 2 => 'Timesheet']], 'TimesheetEntity' => ['type' => 'App\\Entity\\Timesheet', 'groups' => [0 => 'Default', 1 => 'Entity', 2 => 'Timesheet']], 'TimesheetMeta' => ['type' => 'App\\Entity\\TimesheetMeta', 'groups' => [0 => 'Default', 1 => 'Timesheet']], 'TimesheetCollection' => ['type' => 'App\\Entity\\Timesheet', 'groups' => [0 => 'Default', 1 => 'Collection', 2 => 'Timesheet']], 'TimesheetSubCollection' => ['type' => 'App\\Entity\\Timesheet', 'groups' => [0 => 'Default', 1 => 'Subresource', 2 => 'Timesheet']], 'UserEntity' => ['type' => 'App\\Entity\\User', 'groups' => [0 => 'Default', 1 => 'Entity', 2 => 'User']], 'UserCollection' => ['type' => 'App\\Entity\\User', 'groups' => [0 => 'Default', 1 => 'Collection', 2 => 'User']], 'I18nConfig' => ['type' => 'App\\API\\Model\\I18n', 'groups' => [0 => 'Default']]]);

return $instance;
