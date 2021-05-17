<?php

namespace ContainerXFn69fw;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{

    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        if ($this->valueHolder955f1 === $returnValue = $this->valueHolder955f1->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer4fe02 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder955f1) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder955f1 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer4fe02 && ($this->initializer4fe02->__invoke($valueHolder955f1, $this, '__get', ['name' => $name], $this->initializer4fe02) || 1) && $this->valueHolder955f1 = $valueHolder955f1;

        if (isset(self::$publicPropertiesc8522[$name])) {
            return $this->valueHolder955f1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
