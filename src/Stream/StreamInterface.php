<?php
declare(strict_types=1);
namespace PHPBinaryStream\Stream;

use PHPBinaryStream\Reader\ReaderInterface;
use PHPBinaryStream\Writer\WriterInterface;

interface StreamInterface
{
    public static function factory(array $options = []);

    /**
     * @return resource
     */
    public function getHandle();

    public function getReader(): ReaderInterface;
    public function getWriter(): WriterInterface;
}