<?php

declare(strict_types=1);

namespace JHService\Singleton;

use JHService\Singleton\Exceptions\CloneException;
use JHService\Singleton\Exceptions\DeserializeException;
use JHService\Singleton\Exceptions\SerializeException;

abstract class Singleton
{
    private static array $instances = [];

    final public static function instance(): static
    {
        $class = static::class;
        if (array_key_exists($class, self::$instances) === false) {
            $instance = new $class();
            $instance->initialize();
            self::$instances[$class] = $instance;
        }
        return self::$instances[$class];
    }

    public function initialize(): void
    {
        //
    }

    final private function __construct()
    {
        //
    }

    /**
     * @throws CloneException
     */
    final public function __clone(): void
    {
        throw new CloneException();
    }

    /**
     * @throws SerializeException
     */
    final public function __serialize(): array
    {
        throw new SerializeException();
    }

    /**
     * @throws SerializeException
     */
    final public function __sleep(): array
    {
        throw new SerializeException();
    }

    /**
     * @throws DeserializeException
     */
    final public function __unserialize(array $data): void
    {
        throw new DeserializeException();
    }

    /**
     * @throws DeserializeException
     */
    final public function __wakeup(): void
    {
        throw new DeserializeException();
    }
}
