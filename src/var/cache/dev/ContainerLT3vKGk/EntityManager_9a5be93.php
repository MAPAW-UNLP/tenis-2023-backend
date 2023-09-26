<?php

namespace ContainerLT3vKGk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2f99a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1a5c7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa8626 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getConnection', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getMetadataFactory', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getExpressionBuilder', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'beginTransaction', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getCache', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'transactional', array('func' => $func), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'commit', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->commit();
    }

    public function rollback()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'rollback', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getClassMetadata', array('className' => $className), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'createQuery', array('dql' => $dql), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'createNamedQuery', array('name' => $name), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'createQueryBuilder', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'flush', array('entity' => $entity), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'clear', array('entityName' => $entityName), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->clear($entityName);
    }

    public function close()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'close', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->close();
    }

    public function persist($entity)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'persist', array('entity' => $entity), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'remove', array('entity' => $entity), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'refresh', array('entity' => $entity), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'detach', array('entity' => $entity), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'merge', array('entity' => $entity), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'contains', array('entity' => $entity), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getEventManager', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getConfiguration', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'isOpen', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getUnitOfWork', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getProxyFactory', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'initializeObject', array('obj' => $obj), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'getFilters', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'isFiltersStateClean', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'hasFilters', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return $this->valueHolder2f99a->hasFilters();
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

        $instance->initializer1a5c7 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2f99a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2f99a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2f99a->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, '__get', ['name' => $name], $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        if (isset(self::$publicPropertiesa8626[$name])) {
            return $this->valueHolder2f99a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f99a;

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

        $targetObject = $this->valueHolder2f99a;
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
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f99a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2f99a;
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
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, '__isset', array('name' => $name), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f99a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2f99a;
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
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, '__unset', array('name' => $name), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f99a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2f99a;
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
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, '__clone', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        $this->valueHolder2f99a = clone $this->valueHolder2f99a;
    }

    public function __sleep()
    {
        $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, '__sleep', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;

        return array('valueHolder2f99a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1a5c7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1a5c7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1a5c7 && ($this->initializer1a5c7->__invoke($valueHolder2f99a, $this, 'initializeProxy', array(), $this->initializer1a5c7) || 1) && $this->valueHolder2f99a = $valueHolder2f99a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2f99a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2f99a;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
