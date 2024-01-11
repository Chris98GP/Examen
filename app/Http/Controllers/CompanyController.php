<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use Illuminate\Http\Request;
use App\Models\Companies;
//use App\Models\Task;

class CompanyController extends Controller
{

    public function index()
    {
       //Me retornara la informacion de la empresa junto con sus tareas usando resource
       return CompanyResource::collection(Companies::with(['task'])->get());
}

    public function store(Request $request)
    {
        
    }

    public function show(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}