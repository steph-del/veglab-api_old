<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\CreateProfileAction' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Controller/CreateProfileAction.php';

return $this->services['App\\Controller\\CreateProfileAction'] = new \App\Controller\CreateProfileAction(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['security.helper'] ?? $this->getSecurity_HelperService()));
