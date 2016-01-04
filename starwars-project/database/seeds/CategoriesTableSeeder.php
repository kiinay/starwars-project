<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'title' => 'Lasers',
                    'description' => 'Tout ce qui concerne les lasers'
                ],
                [
                    'title' => 'Casques',
                    'description' => 'Tout ce qui concerne les casques'
                ],
            ]
        );
    }
}
