<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.php_collection_handler' shared service.

include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/Handler/SubscribingHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/Handler/PhpCollectionHandler.php';

return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
