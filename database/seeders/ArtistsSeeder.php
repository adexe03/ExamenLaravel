<?php

namespace Database\Seeders;

use App\Models\Artists;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artists = [
            ["id" => 1, "name" => "Led Zeppelin"],
            ["id" => 2, "name" => "Jimi Hendrix"],
            ["id" => 3, "name" => "Paco de Lucía"],
            ["id" => 4, "name" => "Muse"],
            ["id" => 5, "name" => "Pepe Benavente"]
        ];

        Artists::insert($artists);
    }
}
