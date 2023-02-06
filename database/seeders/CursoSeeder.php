<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$curso = new Curso();
        $curso->name="Laravel";
        $curso->description="El mejor framework de PHP";
        $curso->categoria="Desarrollo Web";

        $curso->save();

        $curso2 = new Curso();
        $curso2->name="Laravel";
        $curso2->description="El mejor framework de PHP";
        $curso2->categoria="Desarrollo Web";

        $curso2->save();

        $curso3 = new Curso();
        $curso3->name="Laravel";
        $curso3->description="El mejor framework de PHP";
        $curso3->categoria="Desarrollo Web";

        $curso3->save();*/
        Curso::factory(50)->create();
    }
}
