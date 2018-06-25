<?php

use Illuminate\Database\Seeder;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $prov= new App\Provincia();
      $prov->nombre = 'San José';
      $prov->save();

      $prov= new App\Provincia();
      $prov->nombre = 'Alajuela';
      $prov->save();

      $prov= new App\Provincia();
      $prov->nombre = 'Heredia';
      $prov->save();

      $prov= new App\Provincia();
      $prov->nombre = 'Cartago';
      $prov->save();

      $prov= new App\Provincia();
      $prov->nombre = 'Guanacaste';
      $prov->save();

      $prov= new App\Provincia();
      $prov->nombre = 'Puntarenas';
      $prov->save();

      $prov= new App\Provincia();
      $prov->nombre = 'Limón';
      $prov->save();
    }
}
