<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert(
            [
                [
                    'name' => '1',
                    'uri' => 'images/1.jpg'
                ],
                [
                    'name' => '2',
                    'uri' => 'images/2.jpg'
                ],
                [
                    'name' => '3',
                    'uri' => 'images/3.jpg'
                ],
                [
                    'name' => '4',
                    'uri' => 'images/4.jpg'
                ],
                [
                    'name' => '5',
                    'uri' => 'images/5.jpg'
                ],
            ]
        );
    }
}
