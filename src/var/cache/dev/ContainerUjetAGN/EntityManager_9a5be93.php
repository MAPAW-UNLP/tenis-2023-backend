<?php

namespace ContainerUjetAGN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere3d6c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1e378 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseb9c4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getConnection', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getMetadataFactory', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getExpressionBuilder', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'beginTransaction', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getCache', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'transactional', array('func' => $func), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'commit', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->commit();
    }

    public function rollback()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'rollback', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getClassMetadata', array('className' => $className), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'createQuery', array('dql' => $dql), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'createNamedQuery', array('name' => $name), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'createQueryBuilder', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'flush', array('entity' => $entity), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'clear', array('entityName' => $entityName), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->clear($entityName);
    }

    public function close()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'close', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->close();
    }

    public function persist($entity)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'persist', array('entity' => $entity), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'remove', array('entity' => $entity), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'refresh', array('entity' => $entity), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'detach', array('entity' => $entity), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'merge', array('entity' => $entity), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'contains', array('entity' => $entity), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getEventManager', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getConfiguration', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'isOpen', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getUnitOfWork', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getProxyFactory', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'initializeObject', array('obj' => $obj), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'getFilters', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'isFiltersStateClean', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'hasFilters', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return $this->valueHoldere3d6c->hasFilters();
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

        $instance->initializer1e378 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere3d6c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere3d6c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere3d6c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, '__get', ['name' => $name], $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        if (isset(self::$publicPropertieseb9c4[$name])) {
            return $this->valueHoldere3d6c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3d6c;

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

        $targetObject = $this->valueHoldere3d6c;
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
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3d6c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere3d6c;
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
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, '__isset', array('name' => $name), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3d6c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere3d6c;
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
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, '__unset', array('name' => $name), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3d6c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere3d6c;
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
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, '__clone', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        $this->valueHoldere3d6c = clone $this->valueHoldere3d6c;
    }

    public function __sleep()
    {
        $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, '__sleep', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;

        return array('valueHoldere3d6c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1e378 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1e378;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1e378 && ($this->initializer1e378->__invoke($valueHoldere3d6c, $this, 'initializeProxy', array(), $this->initializer1e378) || 1) && $this->valueHoldere3d6c = $valueHoldere3d6c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere3d6c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere3d6c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
