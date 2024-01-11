<?php

namespace Database\Seeders;

use Faker\Provider\ar_EG\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Companies;


class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //se define cuantas "companies" se crearan con los factories
        Companies::factory(10)->create();
    }
}
