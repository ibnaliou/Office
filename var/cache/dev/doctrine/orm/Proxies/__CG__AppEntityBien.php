<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Bien extends \App\Entity\Bien implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'etat', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'nomComplet', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'quartier', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'datePub', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'prixLocation', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'nbreDeplaces', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'cArrondissement', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'typeDeBien', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'proprietaire', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'ouvrables', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'images', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'videos', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'commentaires'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'etat', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'nomComplet', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'quartier', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'datePub', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'prixLocation', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'nbreDeplaces', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'cArrondissement', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'typeDeBien', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'proprietaire', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'ouvrables', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'images', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'videos', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\Bien' . "\0" . 'commentaires'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Bien $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuartier(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuartier', []);

        return parent::getQuartier();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuartier(string $quartier): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuartier', [$quartier]);

        return parent::setQuartier($quartier);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePub(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePub', []);

        return parent::getDatePub();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePub(\DateTimeInterface $datePub): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePub', [$datePub]);

        return parent::setDatePub($datePub);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixLocation(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixLocation', []);

        return parent::getPrixLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixLocation(int $prixLocation): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixLocation', [$prixLocation]);

        return parent::setPrixLocation($prixLocation);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbreDeplaces(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbreDeplaces', []);

        return parent::getNbreDeplaces();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbreDeplaces(int $nbreDeplaces): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbreDeplaces', [$nbreDeplaces]);

        return parent::setNbreDeplaces($nbreDeplaces);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeDeBien(): ?\App\Entity\Typedebien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeDeBien', []);

        return parent::getTypeDeBien();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeDeBien(?\App\Entity\Typedebien $typeDeBien): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeDeBien', [$typeDeBien]);

        return parent::setTypeDeBien($typeDeBien);
    }

    /**
     * {@inheritDoc}
     */
    public function getProprietaire(): ?\App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProprietaire', []);

        return parent::getProprietaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setProprietaire(?\App\Entity\Proprietaire $proprietaire): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProprietaire', [$proprietaire]);

        return parent::setProprietaire($proprietaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\App\Entity\Image $image): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$image]);

        return parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\App\Entity\Image $image): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', [$image]);

        return parent::removeImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideos', []);

        return parent::getVideos();
    }

    /**
     * {@inheritDoc}
     */
    public function addVideo(\App\Entity\Video $video): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVideo', [$video]);

        return parent::addVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVideo(\App\Entity\Video $video): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVideo', [$video]);

        return parent::removeVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservations', []);

        return parent::getReservations();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservation(\App\Entity\Reservation $reservation): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservation', [$reservation]);

        return parent::addReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservation(\App\Entity\Reservation $reservation): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservation', [$reservation]);

        return parent::removeReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getCArrondissement(): ?\App\Entity\CArrondissement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCArrondissement', []);

        return parent::getCArrondissement();
    }

    /**
     * {@inheritDoc}
     */
    public function setCArrondissement(?\App\Entity\CArrondissement $cArrondissement): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCArrondissement', [$cArrondissement]);

        return parent::setCArrondissement($cArrondissement);
    }

    /**
     * {@inheritDoc}
     */
    public function getOuvrables(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOuvrables', []);

        return parent::getOuvrables();
    }

    /**
     * {@inheritDoc}
     */
    public function addOuvrable(\App\Entity\Ouvrable $ouvrable): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOuvrable', [$ouvrable]);

        return parent::addOuvrable($ouvrable);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOuvrable(\App\Entity\Ouvrable $ouvrable): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOuvrable', [$ouvrable]);

        return parent::removeOuvrable($ouvrable);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat(bool $etat): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomComplet(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomComplet', []);

        return parent::getNomComplet();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomComplet(string $nomComplet): \App\Entity\Bien
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomComplet', [$nomComplet]);

        return parent::setNomComplet($nomComplet);
    }

}
