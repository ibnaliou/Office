<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.WTvKyHM' shared service.

return $this->privates['.service_locator.WTvKyHM'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('comment' => function (): \App\Repository\CommentaireRepository {
    return ($this->privates['App\Repository\CommentaireRepository'] ?? $this->load('getCommentaireRepositoryService.php'));
}, 'user' => function (): \App\Repository\UserRepository {
    return ($this->privates['App\Repository\UserRepository'] ?? $this->load('getUserRepositoryService.php'));
}));
