<?php

namespace Todo\Lib;

use Webiny\Component\Rest\Rest;

class RestServices
{
    public static function callRest()
    {
        try {
            $rest = Rest::initRest('TodoServices');
            if ($rest) {
                $rest->processRequest()->sendOutput();
            }
        } catch (RestException $e) {
            throw $e;
        }
    }
}