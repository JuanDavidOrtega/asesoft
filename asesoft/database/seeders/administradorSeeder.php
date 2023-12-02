<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\administrador;

class administradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrador1 = new administrador();

        $administrador1->nombre = "Karla";
        $administrador1->apellido = "Contreras";
        $administrador1->correo = "Karlaco@gmail.com";
        $administrador1->password = "Karla123";

        $administrador1->save();

        $administrador2 = new administrador();

        $administrador2->nombre = "Angela";
        $administrador2->apellido = "Orozco";
        $administrador2->correo = "Angelapp09@gamil.com";
        $administrador2->password = "Angela123";

        $administrador2->save();


        $administrador3 = new administrador();

        $administrador3->nombre = "Lina";
        $administrador3->apellido = "Romero";
        $administrador3->correo = "Romero26@gmail.com";
        $administrador3->password = "Lina123";

        $administrador3->save();

    }
}
