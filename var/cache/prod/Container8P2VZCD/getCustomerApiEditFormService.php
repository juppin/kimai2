<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\API\CustomerApiEditForm' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Form/EntityFormTrait.php';
include_once $this->targetDirs[3].'/src/Form/CustomerEditForm.php';
include_once $this->targetDirs[3].'/src/Form/API/CustomerApiEditForm.php';

return $this->privates['App\\Form\\API\\CustomerApiEditForm'] = new \App\Form\API\CustomerApiEditForm();
