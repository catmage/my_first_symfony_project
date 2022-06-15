<?php

namespace ContainerBY3GXSi;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder507e6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer91d97 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties49c67 = [
        
    ];

    public function getConnection()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getConnection', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getMetadataFactory', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getExpressionBuilder', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'beginTransaction', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getCache', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'transactional', array('func' => $func), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->transactional($func);
    }

    public function commit()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'commit', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->commit();
    }

    public function rollback()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'rollback', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getClassMetadata', array('className' => $className), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'createQuery', array('dql' => $dql), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'createNamedQuery', array('name' => $name), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'createQueryBuilder', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'flush', array('entity' => $entity), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'clear', array('entityName' => $entityName), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->clear($entityName);
    }

    public function close()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'close', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->close();
    }

    public function persist($entity)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'persist', array('entity' => $entity), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'remove', array('entity' => $entity), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'refresh', array('entity' => $entity), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'detach', array('entity' => $entity), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'merge', array('entity' => $entity), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'contains', array('entity' => $entity), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getEventManager', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getConfiguration', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'isOpen', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getUnitOfWork', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getProxyFactory', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'initializeObject', array('obj' => $obj), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'getFilters', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'isFiltersStateClean', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'hasFilters', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return $this->valueHolder507e6->hasFilters();
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

        $instance->initializer91d97 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder507e6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder507e6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder507e6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, '__get', ['name' => $name], $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        if (isset(self::$publicProperties49c67[$name])) {
            return $this->valueHolder507e6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder507e6;

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

        $targetObject = $this->valueHolder507e6;
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
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder507e6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder507e6;
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
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, '__isset', array('name' => $name), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder507e6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder507e6;
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
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, '__unset', array('name' => $name), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder507e6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder507e6;
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
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, '__clone', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        $this->valueHolder507e6 = clone $this->valueHolder507e6;
    }

    public function __sleep()
    {
        $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, '__sleep', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;

        return array('valueHolder507e6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer91d97 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer91d97;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer91d97 && ($this->initializer91d97->__invoke($valueHolder507e6, $this, 'initializeProxy', array(), $this->initializer91d97) || 1) && $this->valueHolder507e6 = $valueHolder507e6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder507e6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder507e6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
