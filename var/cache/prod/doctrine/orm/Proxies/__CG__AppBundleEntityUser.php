<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \AppBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'accountNonExpired', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'accountNonLocked', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'credentialsNonExpired', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'enabled', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'roles'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'accountNonExpired', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'accountNonLocked', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'credentialsNonExpired', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'enabled', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'roles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
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
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountNonExpired($accountNonExpired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountNonExpired', [$accountNonExpired]);

        return parent::setAccountNonExpired($accountNonExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountNonExpired', []);

        return parent::getAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountNonLocked($accountNonLocked)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountNonLocked', [$accountNonLocked]);

        return parent::setAccountNonLocked($accountNonLocked);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountNonLocked', []);

        return parent::getAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsNonExpired($credentialsNonExpired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsNonExpired', [$credentialsNonExpired]);

        return parent::setCredentialsNonExpired($credentialsNonExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCredentialsNonExpired', []);

        return parent::getCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles($roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($plainPassword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$plainPassword]);

        return parent::setPlainPassword($plainPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountExpired($accountNonExpired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountExpired', [$accountNonExpired]);

        return parent::setAccountExpired($accountNonExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountExpired', []);

        return parent::getAccountExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountLocked($accountNonLocked)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountLocked', [$accountNonLocked]);

        return parent::setAccountLocked($accountNonLocked);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountLocked', []);

        return parent::getAccountLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpired($credentialsNonExpired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpired', [$credentialsNonExpired]);

        return parent::setCredentialsExpired($credentialsNonExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getCredentialsExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCredentialsExpired', []);

        return parent::getCredentialsExpired();
    }

}
