<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\Projects;
use Carbon\Carbon;

class ProjectsController extends Controller
{
    public function viewProject()
    {
        $projects = Projects::with('tasks')->latest()->get();
        return view('admin.projects.view_project', compact('projects'));
    }

    public function addProject()
    {
        $tasks = Tasks::latest()->get();
        return view('admin.projects.add_project', compact('tasks'));
    }

    public function storeProject(Request $request)
    {
       
        $task1 = $request->tasks;
        $task = implode(',', $task1);

  

        Projects::insert([
            'name'=>$request->name,
            'task'=>$task,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('viewProject');
        // dd($request);
       
    }

    public function editProject($id)
    {
        $project = Projects::findOrFail($id);
        $tasks = Tasks::latest()->get();
        return view('admin.projects.edit_project', compact('project', 'tasks'));
    }

    public function updateProject(Request $request, $id)
    {
        $task1 = $request->tasks;
        if ($task1) {
             $task = implode(',', $task1);

        Projects::findOrFail($id)->update([
            'name'=>$request->name,
            'task'=>$task,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('viewProject');
        } else {
            Projects::findOrFail($id)->update([
            'name'=>$request->name,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('viewProject');
        }
   
    }

    public function deleteProject($id)
    {
        Projects::findOrFail($id)->delete();
        
        return redirect()->route('viewProject');
    }

    public function singleProject($id)
    {
        $project = Projects::findOrFail($id);
        return view('admin.projects.single_project', compact('project'));
    }

}
