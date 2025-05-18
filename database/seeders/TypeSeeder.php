<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = ["E-Commerce", "Vetrina", "Boolean Test", "Portfolio"];

        foreach($types as $type){
            $newType = New Type();

            $newType->name = $type;
            $newType->description = $faker->sentence();

            $newType->save();

        }
    }
}
