<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //En este caso no se crearan task, se usara el metodo de 
        //post para insertar tareas a traves de postman
        Task::factory(0);
    }
}