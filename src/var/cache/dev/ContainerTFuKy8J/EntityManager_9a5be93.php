<?php

namespace ContainerTFuKy8J;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdd909 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8b513 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties01d1c = [
        
    ];

    public function getConnection()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getConnection', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getMetadataFactory', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getExpressionBuilder', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'beginTransaction', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getCache', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'transactional', array('func' => $func), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'commit', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->commit();
    }

    public function rollback()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'rollback', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getClassMetadata', array('className' => $className), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'createQuery', array('dql' => $dql), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'createNamedQuery', array('name' => $name), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'createQueryBuilder', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'flush', array('entity' => $entity), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'clear', array('entityName' => $entityName), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->clear($entityName);
    }

    public function close()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'close', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->close();
    }

    public function persist($entity)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'persist', array('entity' => $entity), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'remove', array('entity' => $entity), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'refresh', array('entity' => $entity), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'detach', array('entity' => $entity), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'merge', array('entity' => $entity), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'contains', array('entity' => $entity), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getEventManager', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getConfiguration', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'isOpen', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getUnitOfWork', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getProxyFactory', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'initializeObject', array('obj' => $obj), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'getFilters', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'isFiltersStateClean', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'hasFilters', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return $this->valueHolderdd909->hasFilters();
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

        $instance->initializer8b513 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderdd909) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdd909 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdd909->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, '__get', ['name' => $name], $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        if (isset(self::$publicProperties01d1c[$name])) {
            return $this->valueHolderdd909->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd909;

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

        $targetObject = $this->valueHolderdd909;
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
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd909;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd909;
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
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, '__isset', array('name' => $name), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd909;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdd909;
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
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, '__unset', array('name' => $name), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd909;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdd909;
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
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, '__clone', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        $this->valueHolderdd909 = clone $this->valueHolderdd909;
    }

    public function __sleep()
    {
        $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, '__sleep', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;

        return array('valueHolderdd909');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8b513 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8b513;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8b513 && ($this->initializer8b513->__invoke($valueHolderdd909, $this, 'initializeProxy', array(), $this->initializer8b513) || 1) && $this->valueHolderdd909 = $valueHolderdd909;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd909;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd909;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
