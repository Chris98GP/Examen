<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
 
    public function index()
    {
        return User::all();
    }


    public function store(Request $request)
    {
        
    }


    public function show( $id)
    {
        return User::find($id);
    }

  
    public function update(Request $request, string $id)
    {
        
    }


    public function destroy(string $id)
    {
        
    }
}