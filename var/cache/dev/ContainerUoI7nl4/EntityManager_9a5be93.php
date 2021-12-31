<?php

namespace ContainerUoI7nl4;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder89178 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb2332 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties37e4b = [
        
    ];

    public function getConnection()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getConnection', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getMetadataFactory', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getExpressionBuilder', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'beginTransaction', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getCache', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'transactional', array('func' => $func), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->transactional($func);
    }

    public function commit()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'commit', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->commit();
    }

    public function rollback()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'rollback', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getClassMetadata', array('className' => $className), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'createQuery', array('dql' => $dql), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'createNamedQuery', array('name' => $name), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'createQueryBuilder', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'flush', array('entity' => $entity), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'clear', array('entityName' => $entityName), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->clear($entityName);
    }

    public function close()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'close', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->close();
    }

    public function persist($entity)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'persist', array('entity' => $entity), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'remove', array('entity' => $entity), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'refresh', array('entity' => $entity), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'detach', array('entity' => $entity), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'merge', array('entity' => $entity), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'contains', array('entity' => $entity), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getEventManager', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getConfiguration', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'isOpen', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getUnitOfWork', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getProxyFactory', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'initializeObject', array('obj' => $obj), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'getFilters', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'isFiltersStateClean', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'hasFilters', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return $this->valueHolder89178->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb2332 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder89178) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder89178 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder89178->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, '__get', ['name' => $name], $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        if (isset(self::$publicProperties37e4b[$name])) {
            return $this->valueHolder89178->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89178;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder89178;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89178;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder89178;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, '__isset', array('name' => $name), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89178;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder89178;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, '__unset', array('name' => $name), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89178;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder89178;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, '__clone', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        $this->valueHolder89178 = clone $this->valueHolder89178;
    }

    public function __sleep()
    {
        $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, '__sleep', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;

        return array('valueHolder89178');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb2332 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb2332;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb2332 && ($this->initializerb2332->__invoke($valueHolder89178, $this, 'initializeProxy', array(), $this->initializerb2332) || 1) && $this->valueHolder89178 = $valueHolder89178;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder89178;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder89178;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
