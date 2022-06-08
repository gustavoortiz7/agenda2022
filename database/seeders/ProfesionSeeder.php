<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesion;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Profesion::factory(15)->create();
    }
}
