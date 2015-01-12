<?php

namespace Todo\Lib;

use Webiny\Component\Bootstrap\ApplicationTraits\AppTrait;
use Webiny\Component\Rest\Rest;

class RestServices
{
    use AppTrait;

    public function callRestAction()
    {
        try {
            $rest = Rest::initRest('TodoServices');
            if ($rest) {
                $rest->processRequest()->sendOutput();
            }
        } catch (\Exception $e) {
            if (self::app()->showErrors()) {
                throw $e;
            }else{
                die(); // silently
            }
        }
    }
}