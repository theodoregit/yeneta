<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;

class ToDoController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'todo' => 'required'
        ]);
        
        $todo = new ToDo;
        $todo -> todo = $request->todo;
        $todo->save();

    return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'todo'=>'required'
        ]);

            $todo = ToDo::find($id);
            $todo -> todo = $request -> todo;
            $todo->save();
            
    return redirect()->back();
    }

    public function destroy($id)
    {
        $todo = ToDo::find($id);
        $todo->delete();
    return redirect()->back();
    }

    public function completed($id){
        $todo = ToDo::find($id);
        $todo -> todo = $todo -> todo;
        $todo->completed = 1;
        $todo->save();
    return redirect()->back();
    }
}
