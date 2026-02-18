<?php

declare(strict_types=1);

namespace HarlewDev\Tokenizer\Support\Encodings;

interface EncodingInterface
{
    public function encode(string $text): array;

    public function decode(array $tokens): string;

    public function decodeSingle(int $token): string;

    public function getName(): string;
}
