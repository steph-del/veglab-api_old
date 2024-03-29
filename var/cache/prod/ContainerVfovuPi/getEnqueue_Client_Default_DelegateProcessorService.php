<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'enqueue.client.default.delegate_processor' shared service.

include_once \dirname(__DIR__, 4).'/vendor/queue-interop/queue-interop/src/Processor.php';
include_once \dirname(__DIR__, 4).'/vendor/enqueue/enqueue/Client/DelegateProcessor.php';
include_once \dirname(__DIR__, 4).'/vendor/enqueue/enqueue/ProcessorRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/enqueue/enqueue/Symfony/ContainerProcessorRegistry.php';

return $this->privates['enqueue.client.default.delegate_processor'] = new \Enqueue\Client\DelegateProcessor(new \Enqueue\Symfony\ContainerProcessorRegistry((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'enqueue.client.default.router_processor' => ['privates', 'enqueue.client.default.router_processor', 'getEnqueue_Client_Default_RouterProcessorService.php', true],
    'enqueue_elastica.populate_processor' => ['privates', 'enqueue_elastica.populate_processor', 'getEnqueueElastica_PopulateProcessorService.php', true],
], [
    'enqueue.client.default.router_processor' => '?',
    'enqueue_elastica.populate_processor' => '?',
]))->withContext('enqueue.client.default.processor_registry', $this)));
