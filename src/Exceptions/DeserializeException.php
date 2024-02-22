<?php

declare(strict_types=1);

namespace JHService\Singleton\Exceptions;

final class DeserializeException extends SingletonException
{
    protected $message = 'Can Not Deserialize A Singleton Class';
}
