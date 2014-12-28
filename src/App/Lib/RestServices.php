<?php

namespace Todo\Lib;

use Webiny\Component\Bootstrap\ApplicationTraits\AppTrait;
use Webiny\Component\Rest\Rest;

class RestServices
{
    use AppTrait;

    public static function callRestAction()
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