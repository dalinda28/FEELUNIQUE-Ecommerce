<?php

namespace ContainerXFn69fw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder955f1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4fe02 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc8522 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getConnection', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getMetadataFactory', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getExpressionBuilder', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'beginTransaction', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getCache', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'transactional', array('func' => $func), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->transactional($func);
    }

    public function commit()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'commit', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->commit();
    }

    public function rollback()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'rollback', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getClassMetadata', array('className' => $className), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'createQuery', array('dql' => $dql), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'createNamedQuery', array('name' => $name), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'createQueryBuilder', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'flush', array('entity' => $entity), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'clear', array('entityName' => $entityName), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->clear($entityName);
    }

    public function close()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'close', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->close();
    }

    public function persist($entity)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'persist', array('entity' => $entity), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'remove', array('entity' => $entity), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'refresh', array('entity' => $entity), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'detach', array('entity' => $entity), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'merge', array('entity' => $entity), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'contains', array('entity' => $entity), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getEventManager', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getConfiguration', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'isOpen', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getUnitOfWork', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getProxyFactory', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'initializeObject', array('obj' => $obj), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'getFilters', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'isFiltersStateClean', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'hasFilters', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return $this->valueHolder955f1->hasFilters();
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

        $instance->initializer4fe02 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder955f1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder955f1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder955f1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, '__get', ['name' => $name], $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        if (isset(self::$publicPropertiesc8522[$name])) {
            return $this->valueHolder955f1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder955f1;

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

        $targetObject = $this->valueHolder955f1;
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
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder955f1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder955f1;
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
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, '__isset', array('name' => $name), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder955f1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder955f1;
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
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, '__unset', array('name' => $name), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder955f1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder955f1;
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
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, '__clone', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        $this->valueHolder955f1 = clone $this->valueHolder955f1;
    }

    public function __sleep()
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, '__sleep', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        return array('valueHolder955f1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4fe02 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4fe02;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'initializeProxy', array(), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder955f1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder955f1;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
