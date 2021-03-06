<?php

namespace DoctrineProxies\__CG__\App\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Motorista extends \App\Entities\Motorista implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'foto', 'cidade', 'instituicoesEnsino', 'id', 'nome', 'sobrenome', 'numeroCelular', 'ativo', 'beta', 'password', 'rememberToken', 'accessToken'];
        }

        return ['__isInitialized__', 'foto', 'cidade', 'instituicoesEnsino', 'id', 'nome', 'sobrenome', 'numeroCelular', 'ativo', 'beta', 'password', 'rememberToken', 'accessToken'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Motorista $proxy) {
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
    public function getFoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoto', []);

        return parent::getFoto();
    }

    /**
     * {@inheritDoc}
     */
    public function getInstituicoesEnsino()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstituicoesEnsino', []);

        return parent::getInstituicoesEnsino();
    }

    /**
     * {@inheritDoc}
     */
    public function getCidade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCidade', []);

        return parent::getCidade();
    }

    /**
     * {@inheritDoc}
     */
    public function setCidade($cidade): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCidade', [$cidade]);

        parent::setCidade($cidade);
    }

    /**
     * {@inheritDoc}
     */
    public function setFoto($foto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoto', [$foto]);

        return parent::setFoto($foto);
    }

    /**
     * {@inheritDoc}
     */
    public function setInstituicoesEnsino($instituicoesEnsino)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstituicoesEnsino', [$instituicoesEnsino]);

        return parent::setInstituicoesEnsino($instituicoesEnsino);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', []);

        return parent::toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getNome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNome', []);

        return parent::getNome();
    }

    /**
     * {@inheritDoc}
     */
    public function setNome($nome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNome', [$nome]);

        return parent::setNome($nome);
    }

    /**
     * {@inheritDoc}
     */
    public function getSobrenome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSobrenome', []);

        return parent::getSobrenome();
    }

    /**
     * {@inheritDoc}
     */
    public function setSobrenome($sobrenome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSobrenome', [$sobrenome]);

        return parent::setSobrenome($sobrenome);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroCelular()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroCelular', []);

        return parent::getNumeroCelular();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroCelular($numeroCelular)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroCelular', [$numeroCelular]);

        return parent::setNumeroCelular($numeroCelular);
    }

    /**
     * {@inheritDoc}
     */
    public function getSenha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSenha', []);

        return parent::getSenha();
    }

    /**
     * {@inheritDoc}
     */
    public function setSenha($senha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSenha', [$senha]);

        return parent::setSenha($senha);
    }

    /**
     * {@inheritDoc}
     */
    public function getAtivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAtivo', []);

        return parent::getAtivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAtivo($ativo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAtivo', [$ativo]);

        return parent::setAtivo($ativo);
    }

    /**
     * {@inheritDoc}
     */
    public function getBeta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBeta', []);

        return parent::getBeta();
    }

    /**
     * {@inheritDoc}
     */
    public function setBeta($beta): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBeta', [$beta]);

        parent::setBeta($beta);
    }

    /**
     * {@inheritDoc}
     */
    public function getKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKey', []);

        return parent::getKey();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthIdentifierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthIdentifierName', []);

        return parent::getAuthIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthIdentifier', []);

        return parent::getAuthIdentifier();
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
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthPassword', []);

        return parent::getAuthPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getRememberToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRememberToken', []);

        return parent::getRememberToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setRememberToken($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRememberToken', [$value]);

        return parent::setRememberToken($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getRememberTokenName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRememberTokenName', []);

        return parent::getRememberTokenName();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailForPasswordReset()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailForPasswordReset', []);

        return parent::getEmailForPasswordReset();
    }

    /**
     * {@inheritDoc}
     */
    public function sendPasswordResetNotification($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'sendPasswordResetNotification', [$token]);

        return parent::sendPasswordResetNotification($token);
    }

    /**
     * {@inheritDoc}
     */
    public function notify($instance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'notify', [$instance]);

        return parent::notify($instance);
    }

    /**
     * {@inheritDoc}
     */
    public function notifyNow($instance, array $channels = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'notifyNow', [$instance, $channels]);

        return parent::notifyNow($instance, $channels);
    }

    /**
     * {@inheritDoc}
     */
    public function routeNotificationFor($driver, $notification = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'routeNotificationFor', [$driver, $notification]);

        return parent::routeNotificationFor($driver, $notification);
    }

    /**
     * {@inheritDoc}
     */
    public function clients()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clients', []);

        return parent::clients();
    }

    /**
     * {@inheritDoc}
     */
    public function tokens()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'tokens', []);

        return parent::tokens();
    }

    /**
     * {@inheritDoc}
     */
    public function token()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'token', []);

        return parent::token();
    }

    /**
     * {@inheritDoc}
     */
    public function tokenCan($scope)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'tokenCan', [$scope]);

        return parent::tokenCan($scope);
    }

    /**
     * {@inheritDoc}
     */
    public function createToken($name, array $scopes = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createToken', [$name, $scopes]);

        return parent::createToken($name, $scopes);
    }

    /**
     * {@inheritDoc}
     */
    public function withAccessToken($accessToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'withAccessToken', [$accessToken]);

        return parent::withAccessToken($accessToken);
    }

    /**
     * {@inheritDoc}
     */
    public function findForPassport($userIdentifier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'findForPassport', [$userIdentifier]);

        return parent::findForPassport($userIdentifier);
    }

}
