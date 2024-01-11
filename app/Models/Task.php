<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;



    //Funcion para que tenga relacion con user y comapanies 
    
    public function user(){
    
        return $this->belongsTo(User::class);

    }

    public function companies(){
        
        return $this->belongsTo(Companies::class, 'company_id');
    }
}