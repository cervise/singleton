<?php

declare(strict_types=1);

namespace JHService\Singleton\Exceptions;

final class CloneException extends SingletonException
{
    protected $message = 'Can Not Clone A Singleton Class';
}
