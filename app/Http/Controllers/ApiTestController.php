<?php

namespace App\Http\Controllers;

class ApiTestController extends Controller
{
    public function helloworld() {
        return response()->json('hello world');
    }

    public function fibonacci($n)
    {
        $r = $this->fibo($n);
        return response()->json($r);
    }

    private function fibo($n) {
        return(($n < 2) ? 1 : self::fibo($n - 1) + self::fibo($n - 2));
    }
}
