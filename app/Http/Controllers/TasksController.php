<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests; //для валидации

class TasksController extends Controller
{

    use ValidatesRequests;

    public function index(){

        $tasks = Task::all();

        return response()->json([$tasks->all()]);

       // return view('tasks.index', ['tasks'=>$tasks]);
    }
    public function create(){
        return view('tasks.create');
    }
    public function store(Request $request){
//        return view('tasks.store');

        $this->validate($request, [
            'title' => 'required', //обязательный ввод, валидация
            'description' => 'required'
        ]);
        $task = new Task;
//        $task->title = $request->get('title');
//        $task->description = $request->get('description');
        $task->fill($request->all()); //метод fill перед данные из запроса и подставляет в нужные поля


        $task->save();

        return response()->json([$request->all()]);

//        return redirect()->route('tasks.index'); //возврат на главную страницу
    }

    public function edit($id){
        $myTask = Task::find($id);

        return view('tasks.edit', ['task' => $myTask]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required', //обязательный ввод, валидация
            'description' => 'required'
        ]);
        $myTask = Task::find($id);
        $myTask->fill($request->all());
        $myTask->save();

        return response()->json([$request->all()]);
//        return redirect()->route('tasks.index');
    }

    public function show($id)
    {
        $myTask = Task::findOrFail($id);

        return view('tasks.show', ['task'=>$myTask]);

    }

    public function destroy($id)
    {

        Task::find($id)->delete();



        return redirect()->route('tasks.index');
}

}
