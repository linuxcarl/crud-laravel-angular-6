<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
			'name'        => 'El manco',
			'description' => 'el pinche chelelo hace sus chistes.',
			'genre'       => 'indefinido',
			'year'        => '2008',
			'duration'    => '120 minutos',
        ]);
        DB::table('movies')->insert([
			'name'        => 'Vengadores: Infinity War',
			'description' => 'es el gran acontecimiento cinematográfico de Marvel Studios',
			'genre'       => 'indefinido',
			'year'        => '2012',
			'duration'    => '120 minutos',
        ]);
        DB::table('movies')->insert([
			'name'        => 'Iron Man',
			'description' => 'Nace Iron Man',
			'genre'       => 'accion',
			'year'        => '2008',
			'duration'    => '120 minutos',
        ]);
        DB::table('movies')->insert([
			'name'        => 'El Increíble Hulk',
			'description' => 'Nace Hulk el hombre verde',
			'genre'       => 'accion',
			'year'        => '2008',
			'duration'    => '160 minutos',
        ]);
        DB::table('movies')->insert([
			'name'        => '10+2: El gran secreto',
			'description' => ' de Manuel Gil, Miquel Pujol',
			'genre'       => 'accion',
			'year'        => '2001',
			'duration'    => '160 minutos',
        ]);
        DB::table('movies')->insert([
			'name'        => '101 Dálmatas',
			'description' => 'de Stephen Herek, Clyde Geronimi, Wolfgang Reitherman. Con Joely Richardson.',
			'genre'       => 'accion',
			'year'        => '1996',
			'duration'    => '180 minutos',
        ]);
        DB::table('movies')->insert([
			'name'        => 'Amigos para siempre ',
			'description' => 'de Tony Loeser. Con Benno Fürmann, Joachim Król, Christoph Maria Herbst, Katarina Witt, Volker Wolf, Maximiliane Häcke, Hans Bayer.',
			'genre'       => 'accion',
			'year'        => '2009',
			'duration'    => '160 minutos',
        ]);
    }
}
