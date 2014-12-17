<?php

namespace Todo\Modules\TodoList\RestServices;

use Todo\Modules\TodoList\Models\TodoTask;
use Webiny\Component\Http\HttpTrait;

class Item
{
    use HttpTrait;

    /**
     * @rest.method post
     */
    public function createTask()
    {
        $task = new TodoTask();
        $task->task = $this->httpRequest()->post('task');
        $task->user = $this->httpRequest()->post('user');
        $task->save();

        return $task->toArray('id,task,created');
    }

    /**
     * @rest.method get
     *
     * @param $id
     *
     * @return bool
     */
    public function toggleStatus($id)
    {
        $task = TodoTask::findById($id);
        if ($task) {
            if($task->completed==true){
                $task->completed = false;
            }else{
                $task->completed = true;
            }
            $task->save();

            return ['completed'=>$task->completed];
        }

        return false;
    }

    /**
     * @rest.method get
     *
     * @param $id
     *
     * @return bool
     */
    public function deleteTask($id)
    {
        $task = TodoTask::findById($id);
        if($task){
            $task->delete();

            return true;
        }

        return false;
    }
}