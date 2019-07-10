<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.cache.cache_warmer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/Cache/CacheWarmer.php';

return $this->privates['jms_serializer.cache.cache_warmer'] = new \JMS\SerializerBundle\Cache\CacheWarmer([0 => ($this->targetDirs[3].'/src/Entity/'), 1 => ($this->targetDirs[3].'/src/API/Model/'), 2 => ($this->targetDirs[3].'/src/../vendor/friendsofsymfony/user-bundle/Model')], ($this->privates['jms_serializer.metadata_factory'] ?? $this->getJmsSerializer_MetadataFactoryService()), []);
