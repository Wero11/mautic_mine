<?php

namespace Proxies\__CG__\Mautic\ChannelBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Channel extends \Mautic\ChannelBundle\Entity\Channel implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'id', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'channel', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'channelId', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'channelName', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'message', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'properties', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'isEnabled', 'changes');
        }

        return array('__isInitialized__', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'id', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'channel', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'channelId', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'channelName', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'message', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'properties', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\Channel' . "\0" . 'isEnabled', 'changes');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Channel $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannel', array());

        return parent::getChannel();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannel($channel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', array($channel));

        return parent::setChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelId', array());

        return parent::getChannelId();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannelId($channelId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannelId', array($channelId));

        return parent::setChannelId($channelId);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelName', array());

        return parent::getChannelName();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannelName($channelName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannelName', array($channelName));

        return parent::setChannelName($channelName);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', array());

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage(\Mautic\ChannelBundle\Entity\Message $message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', array($message));

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getProperties()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProperties', array());

        return parent::getProperties();
    }

    /**
     * {@inheritDoc}
     */
    public function setProperties(array $properties)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProperties', array($properties));

        return parent::setProperties($properties);
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', array());

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsEnabled($isEnabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsEnabled', array($isEnabled));

        return parent::setIsEnabled($isEnabled);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', array($name, $arguments));

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', array());

        return parent::getChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', array());

        return parent::resetChanges();
    }

}
