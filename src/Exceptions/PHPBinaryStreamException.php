<?php
declare(strict_types=1);
namespace PHPBinaryStream\Exceptions;

class PHPBinaryStreamException extends \RuntimeException
{
    const CODE_WRONG_LENGTH = 1;
    const CODE_WRONG_VALUE = 2;
    const CODE_READ_FAILED = 100;
    const CODE_WRITE_FAILED = 101;
}
