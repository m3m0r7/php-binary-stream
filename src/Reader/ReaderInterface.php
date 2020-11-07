<?php
declare(strict_types=1);
namespace PHPBinaryStream\Reader;

interface ReaderInterface
{
    public function readChar(): string;
    public function readBoolean(): bool;

    public function readInt16(): int;
    public function readInt32(): int;
    public function readInt64(): int;
    public function readInt(int $size): int;
    public function readShort(): int;
    public function readLong(): int;

    public function readUnsignedInt16(): int;
    public function readUnsignedInt32(): int;
    public function readUnsignedInt64(): int;
    public function readUnsignedInt(int $size): int;
    public function readUnsignedShort(): int;
    public function readUnsignedLong(): int;

    public function readFloat(): float;
    public function readDouble(): float;

    public function readString(int $length): string;

    public function tell(): int;
    public function seek(int $offset, int $whence = SEEK_SET): int;
    public function rewind(): self;
    public function terminated(): bool;

    public function enableCapture(): self;
    public function disableCapture(): self;
    public function dump(): string;
}
