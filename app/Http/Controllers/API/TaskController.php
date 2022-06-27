<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Task;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class TaskController extends Controller
{
    //

    public function gettaskbyID($id)
    {
 
       $data = Task::join('tasks_assigned', 'tasks_assigned.tasksassigned_taskid', '=', 'tasks.task_id')
                    ->join('tasks_status' , 'tasks_status.taskstatus_id' , '=' , 'tasks.task_status')
              		->where('tasks_assigned.tasksassigned_userid', $id)
              		->get(['tasks_status.taskstatus_title','tasks_status.taskstatus_id', 'tasks.task_id', 'tasks.task_date_start', 'tasks.task_date_due', 'tasks.task_title','tasks.task_description']);

        $response = [ 
           'success' => true,
           'data' => $data,
        ];
            
        return response()->json($response,200);
    }

    public function updatetask($id,$status)
    {
       if($status == 'New.png')
       {
         $data = Task::where('task_id',$id)->update(['task_status'=>'1']);
       }
      else if($status == 'Completed.png')
      {
         $data = Task::where('task_id',$id)->update(['task_status'=>'2']);
      }
      else if($status == 'In Progress.png')
       {
         $data = Task::where('task_id',$id)->update(['task_status'=>'3']);
       }
      else if($status == 'Awaiting Feedback.png')
       {
         $data = Task::where('task_id',$id)->update(['task_status'=>'4']);
       }

       $response = [ 
         'status' => true,
      ];
          
      return response()->json($response,200);
    }
}
