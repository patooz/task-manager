<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;



class TasksController extends Controller
{
    public function addTask()
    {
        return view('admin.tasks.add_task');
    }

    public function viewTask()
    {
        $tasks = Tasks::latest()->get();
        
        return view('admin.tasks.view_task', compact('tasks'));
    }

    public function storeTask(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:tasks,name',
        ]);

        Tasks::insert([
            'name'=>$request->name,
            'priority'=>$request->priority,
            'created_at'=>Carbon::now(),
        ]);
        // dd($request);
        return redirect()->back();
    }

    public function editTask($id)
    {
        $task = Tasks::findOrFail($id);
        return view('admin.tasks.edit_task', compact('task'));
    }

    public function updateTask(Request $request, $id)
    {
        Tasks::findOrFail($id)->update([
            'name'=>$request->name,
            'priority'=>$request->priority,
        ]);
      
        return redirect()->route('viewTask');
    }

    public function deleteTask($id)
    {

        Tasks::findOrFail($id)->delete();
        
        return redirect()->route('viewTask');
    }

    public function sortTable()
    {
        $tasks = Tasks::all();

        foreach ($tasks as $item) {
            foreach ($request->order as $order) {
                if ($order['id'] == $item->id) {
                    $item->update(['order' => $order['position']]);
                }
            }
        }
        
        return response('Update Successfully.', 200);
    }
}
