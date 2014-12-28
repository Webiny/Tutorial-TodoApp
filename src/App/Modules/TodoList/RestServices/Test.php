<?php
namespace Todo\Modules\TodoList\RestServices;

class Test
{
    public function enter($name, $id=12)
    {
        return 'enter: '.$name.' id:'.$id;
    }
}