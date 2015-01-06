<?php
namespace Todo\Modules\TodoList\RestServices;

class Test
{
    /**
     * @rest.method GET
     *
     * @param string $number
     * @param bool   $object
     *
     * @return JsonResponse
     */
    public function searchData($number, $object = false)
    {
        return 'Number:'.$number.' object:'.$object;
        //www.myapp.com/api/TodoList/Test/searchData/100869/
    }
}