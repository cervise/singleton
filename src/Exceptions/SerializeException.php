<?php

declare(strict_types=1);

namespace JHService\Singleton\Exceptions;

final class SerializeException extends SingletonException
{
    protected $message = 'Can Not Serialize A Singleton Class';
}
