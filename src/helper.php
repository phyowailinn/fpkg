<?php 

if (! function_exists('send_pkg')) {
    function send_pkg($to, $message, $test=false, $callback=null)
    {
        $pkg = app()->make(\fiberno\Firstpkg\Pkg::class);
        return $pkg->send($to, $message, $test, $callback);
    }
}