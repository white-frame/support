<?php

if (!function_exists('wf')) 
{
    function wf() {
        try {
            return app()->make('white-frame.support.helper.manager');
        }
        catch(\ReflectionException $e) {
            return null;
        }
    }
}
