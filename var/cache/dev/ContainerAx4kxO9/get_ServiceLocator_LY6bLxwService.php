<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.LY6bLxw' shared service.

return $this->privates['.service_locator.LY6bLxw'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('JourRepository' => function (): \App\Repository\JourRepository {
    return ($this->privates['App\Repository\JourRepository'] ?? $this->load('getJourRepositoryService.php'));
}));