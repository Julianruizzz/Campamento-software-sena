<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; //Agarramos el modelo de User que ya trae Laravel
use File;
use Illuminate\Support\Facades\Hash; //Para encriptar


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. Leer el archivo users.json utilizando el "file"
        //2. Convertir el contenido JSON a un arreglo en PHP
        //3. Recorrer el arreglo en PHP
        //4. Por cada uno de los elementos del arreglo crear user

        /////////////////////////////////////////////////////////

        //1. Leer el archivo users.json utilizando el "file"
        $json=File::get("database/_data/users.json");
        //2. Convertir el contenido JSON a un arreglo en PHP
        $arreglo=json_decode($json);
        /*var_dump($arreglo); ESTO ES PARA VER LO QUE SE GENERA EN LA CONSOLA*/ 
        //3. Recorrer el arreglo en PHP
        foreach ($arreglo as $usuario) {
            //4. Por cada uno de los elementos del arreglo crear user
            $u = new User();
            $u->name = $usuario->name;
            $u->email = $usuario->email;
            $u->password = Hash::make($usuario->password);
            $u->save();
        }
    }
}
