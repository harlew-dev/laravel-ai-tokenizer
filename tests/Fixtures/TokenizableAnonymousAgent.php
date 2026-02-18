<?php

declare(strict_types=1);

namespace HarlewDev\Tokenizer\Tests\Fixtures;

use HarlewDev\Tokenizer\Concerns\Tokenizable;
use HarlewDev\Tokenizer\Contracts\HasTokenization;
use Laravel\Ai\AnonymousAgent;

class TokenizableAnonymousAgent extends AnonymousAgent implements HasTokenization
{
    use Tokenizable;
}

