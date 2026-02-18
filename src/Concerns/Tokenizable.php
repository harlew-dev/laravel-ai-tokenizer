<?php

declare(strict_types=1);

namespace HarlewDev\Tokenizer\Concerns;

use HarlewDev\Tokenizer\AgentTokenizer;

trait Tokenizable
{
    /**
     * Estimate token count for a prompt with the agent's context.
     */
    public function tokenize(string $prompt, array $attachments = [], ?string $provider = null, ?string $model = null): int
    {
        $tokenizer = app(AgentTokenizer::class, [
            'agent' => $this,
        ]);

        return $tokenizer->estimate($prompt, $attachments, $provider, $model);
    }
}
