<?php

namespace Acme\DemoBundle;

//use Symfony\Component\HttpFoundation\Session\Session;

class FormatLoggerProcessor
{

    public function processRecord(array $record)
    {
        $trace = $this->backtrace();

        $record['extra']['ip']       = $_SERVER['SERVER_ADDR'];
        $record['extra']['file']     = $trace['file'];
        $record['extra']['class']    = $trace['class'];
        //$record['extra']['function'] = __METHOD__;

        return $record;
    }

    protected function backtrace()
    {
        $debug = debug_backtrace();
        
        $trace ['file']     = $debug [2] ['file'];
        $trace ['class']    = $debug [3] ['class'];
        $trace ['function'] = $debug [3] ['function'];
        
        return $trace;
    }
}