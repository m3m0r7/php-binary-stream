<?php
declare(strict_types=1);
namespace PHPBinaryStream\Writer;

interface WriterInterface
{
    public static function factory($handle, array $options = []);

    public function writeChar(string $char): self;
    public function writeBoolean(bool $boolean): self;

    public function writeInt16(int $int): self;
    public function writeInt32(int $int): self;
    public function writeInt64(int $int): self;
    public function writeInt(int $size): self;
    public function writeShort(int $short): self;
    public function writeLong(int $long): self;

    public function writeUnsignedInt16(int $int): self;
    public function writeUnsignedInt32(int $int): self;
    public function writeUnsignedInt64(int $int): self;
    public function writeUnsignedInt(int $int, int $size): self;
    public function writeUnsignedShort(int $short): self;
    public function writeUnsignedLong(int $long): self;

    public function writeFloat(float $float): self;
    public function writeDouble(float $double): self;

    public function writeString(string $string, int $length): self;

    public function tell(): int;
    public function rewind(): self;

    public function enableCapture(): self;
    public function disableCapture(): self;
    public function dump(): string;
}
