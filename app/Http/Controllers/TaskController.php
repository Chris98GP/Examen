<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index()
    {
        //Me retornara todas las tareas de la base de datos
        return Task::all();
    }


    public function store(Request $request)
    {
        
        //Creacion de una nueva tarea
        $Task = new Task;
        $Task->company_id = $request->company_id;
        $Task->name = $request->name;
        $Task->description = $request->description;
        $Task->user_id = $request->user_id;
        $Task->save();

        //Cargar "Companies" para traer la informacion de la misma
        $Task->load('Companies'); 
        $Task->load('Companies');
        $Task->load('user');

        //Mostramos la informacion de la tarea junto con su company que tenga asignada
        return response()->json([
            'id' => $Task->id,
            'name' => $Task->name,
            'name user' => $Task->user->name,
            'description' => $Task->description,
            'Company' => [
                'id' => $Task->company_id,
                'name' => $Task->companies->name,
            ]
        ]);
    }

    public function show($id)
    {
        return Task::find($id);
    }

  
    public function update(Request $request, string $id)
    {
        
    }

 
    public function destroy(string $id)
    {
        
    }
}