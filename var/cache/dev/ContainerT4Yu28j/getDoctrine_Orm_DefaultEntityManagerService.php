<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerAwareEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ObjectManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

$a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), array(0 => ($this->targetDirs[3].'/src/Entity'))), 'App\\Entity');

$b = new \Doctrine\ORM\Configuration();
$b->setEntityNamespaces(array('App' => 'App\\Entity'));
$b->setMetadataCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php')));
$b->setQueryCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php')));
$b->setResultCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php')));
$b->setMetadataDriverImpl($a);
$b->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$b->setProxyNamespace('Proxies');
$b->setAutoGenerateProxyClasses(true);
$b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$b->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$b->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this));
$b->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Repository\\ArrondissementRepository' => function () {
    return ($this->privates['App\Repository\ArrondissementRepository'] ?? $this->load('getArrondissementRepositoryService.php'));
}, 'App\\Repository\\BienRepository' => function () {
    return ($this->privates['App\Repository\BienRepository'] ?? $this->load('getBienRepositoryService.php'));
}, 'App\\Repository\\CArrondissementRepository' => function () {
    return ($this->privates['App\Repository\CArrondissementRepository'] ?? $this->load('getCArrondissementRepositoryService.php'));
}, 'App\\Repository\\ClientRepository' => function () {
    return ($this->privates['App\Repository\ClientRepository'] ?? $this->load('getClientRepositoryService.php'));
}, 'App\\Repository\\CommentaireRepository' => function () {
    return ($this->privates['App\Repository\CommentaireRepository'] ?? $this->load('getCommentaireRepositoryService.php'));
}, 'App\\Repository\\CommuneRepository' => function () {
    return ($this->privates['App\Repository\CommuneRepository'] ?? $this->load('getCommuneRepositoryService.php'));
}, 'App\\Repository\\DepartementRepository' => function () {
    return ($this->privates['App\Repository\DepartementRepository'] ?? $this->load('getDepartementRepositoryService.php'));
}, 'App\\Repository\\ImageRepository' => function () {
    return ($this->privates['App\Repository\ImageRepository'] ?? $this->load('getImageRepositoryService.php'));
}, 'App\\Repository\\JourRepository' => function () {
    return ($this->privates['App\Repository\JourRepository'] ?? $this->load('getJourRepositoryService.php'));
}, 'App\\Repository\\OuvrableRepository' => function () {
    return ($this->privates['App\Repository\OuvrableRepository'] ?? $this->load('getOuvrableRepositoryService.php'));
}, 'App\\Repository\\PaysRepository' => function () {
    return ($this->privates['App\Repository\PaysRepository'] ?? $this->load('getPaysRepositoryService.php'));
}, 'App\\Repository\\PeriodeRepository' => function () {
    return ($this->privates['App\Repository\PeriodeRepository'] ?? $this->load('getPeriodeRepositoryService.php'));
}, 'App\\Repository\\ProprietaireRepository' => function () {
    return ($this->privates['App\Repository\ProprietaireRepository'] ?? $this->load('getProprietaireRepositoryService.php'));
}, 'App\\Repository\\RegionRepository' => function () {
    return ($this->privates['App\Repository\RegionRepository'] ?? $this->load('getRegionRepositoryService.php'));
}, 'App\\Repository\\ReservationRepository' => function () {
    return ($this->privates['App\Repository\ReservationRepository'] ?? $this->load('getReservationRepositoryService.php'));
}, 'App\\Repository\\TypedebienRepository' => function () {
    return ($this->privates['App\Repository\TypedebienRepository'] ?? $this->load('getTypedebienRepositoryService.php'));
}, 'App\\Repository\\UserRepository' => function () {
    return ($this->privates['App\Repository\UserRepository'] ?? $this->load('getUserRepositoryService.php'));
}, 'App\\Repository\\VideoRepository' => function () {
    return ($this->privates['App\Repository\VideoRepository'] ?? $this->load('getVideoRepositoryService.php'));
}))));

$this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->load('getDoctrine_Dbal_DefaultConnectionService.php')), $b);

(new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array()))->configure($instance);

return $instance;
