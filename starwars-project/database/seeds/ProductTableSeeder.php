<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'title' => 'Sabre Laser Bleu',
                    'category_id' => '1',
                    'image_id' => '2',
                    'abstract' => 'Employé par les Jedi tout comme les Sith, il s\'emploie comme un sabre classique, mais peut traverser de nombreuses matières solides, comme la majorité des métaux. Cependant, son fort effet gyroscopique peut être extrêmement dangereux pour quelqu\'un qui ne maîtrise pas la Force.',
                    'content' => 'Employé par les Jedi tout comme les Sith, il s\'emploie comme un sabre classique, mais peut traverser de nombreuses matières solides, comme la majorité des métaux. Cependant, son fort effet gyroscopique peut être extrêmement dangereux pour quelqu\'un qui ne maîtrise pas la Force.
                    L\'arme s\'avère supérieure à la précédente mais reste toutefois relativement archaïque. Elle se recharge elle-même grâce à des matériaux supra-conducteurs et un système de récupération de l\'énergie constituant la "lame", ce qui lui offre une durabilité presque illimitée. Elle est utilisée par les Jedi lors de la Grande Guerre de l\'Hyperespace, face à l\'Empire Sith de Naga Sadow. Par la suite, l\'utilisation des sabres laser ne cesse de se généraliser parmi les adeptes de la Force, qu\'ils soient Jedi ou Sith. À partir de la Grande Guerre des Sith, plusieurs variantes commencent à faire leur apparition comme le double sabre laser d\'Exar Kun.

Après la Guerre des Clones et la Grande Purge Jedi qui en découle, il ne subsiste presque aucun Jedi. L\'usage du sabre laser a donc pratiquement disparu de la galaxie, car exhiber une arme telle que celle-ci équivaut pour un Jedi à être découvert et traqué par l\'Empire. Ce n\'est qu\'après la résurrection de l\'Ordre Jedi, sous Luke Skywalker, que le sabre laser refait son apparition.',
                    'prix' => '2750',
                    'status' => 'disponible'
                ],
                [
                    'title' => 'Casque de Stromtrooper',
                    'category_id' => '2',
                    'image_id' => '5',
                    'abstract' => 'Les Stormtroopers (littéralement, troupiers d\'assaut, ou Chasseurs impériaux dans la version française) sont les soldats de l\'Empire galactique dans la saga Star Wars.',
                    'content' => 'Les Stormtroopers (littéralement, troupiers d\'assaut, ou Chasseurs impériaux dans la version française) sont les soldats de l\'Empire galactique dans la saga Star Wars.

Dans la trilogie originale, Ils sont sous les ordres de Dark Vador, L\'Empereur, ou Grand Moff Tarkin.

Dans Star Wars, épisode II : L\'Attaque des clones, les Clones Troopers sont des êtres modifiés et clonés par le chasseur de primes Jango Fett afin de livrer bataille comme Armée de la République et de détruire les Jedi.',
                    'prix' => '560',
                    'status' => 'disponible'
                ],
                [
                    'title' => 'Sabre Laser Rouge',
                    'category_id' => '1',
                    'image_id' => '3',
                    'abstract' => 'Employé par les Jedi tout comme les Sith, il s\'emploie comme un sabre classique, mais peut traverser de nombreuses matières solides, comme la majorité des métaux. Cependant, son fort effet gyroscopique peut être extrêmement dangereux pour quelqu\'un qui ne maîtrise pas la Force.',
                    'content' => 'Employé par les Jedi tout comme les Sith, il s\'emploie comme un sabre classique, mais peut traverser de nombreuses matières solides, comme la majorité des métaux. Cependant, son fort effet gyroscopique peut être extrêmement dangereux pour quelqu\'un qui ne maîtrise pas la Force.
                    L\'arme s\'avère supérieure à la précédente mais reste toutefois relativement archaïque. Elle se recharge elle-même grâce à des matériaux supra-conducteurs et un système de récupération de l\'énergie constituant la "lame", ce qui lui offre une durabilité presque illimitée. Elle est utilisée par les Jedi lors de la Grande Guerre de l\'Hyperespace, face à l\'Empire Sith de Naga Sadow. Par la suite, l\'utilisation des sabres laser ne cesse de se généraliser parmi les adeptes de la Force, qu\'ils soient Jedi ou Sith. À partir de la Grande Guerre des Sith, plusieurs variantes commencent à faire leur apparition comme le double sabre laser d\'Exar Kun.

Après la Guerre des Clones et la Grande Purge Jedi qui en découle, il ne subsiste presque aucun Jedi. L\'usage du sabre laser a donc pratiquement disparu de la galaxie, car exhiber une arme telle que celle-ci équivaut pour un Jedi à être découvert et traqué par l\'Empire. Ce n\'est qu\'après la résurrection de l\'Ordre Jedi, sous Luke Skywalker, que le sabre laser refait son apparition.',
                    'prix' => '2900',
                    'status' => 'disponible'
                ],
                [
                    'title' => 'Casque de Dark Vador',
                    'category_id' => '2',
                    'image_id' => '4',
                    'abstract' => 'Anakin Skywalker, ou Dark Vador (en anglais : Darth Vader) est le personnage central de la saga cinématographique Star Wars, conçue par George Lucas.',
                    'content' => 'Anakin Skywalker, ou Dark Vador (en anglais : Darth Vader) est le personnage central de la saga cinématographique Star Wars, conçue par George Lucas. Dans la trilogie originelle, Star Wars, épisode IV : Un nouvel espoir (1977), Star Wars, épisode V : L\'Empire contre-attaque (1980) et Star Wars, épisode VI : Le Retour du Jedi, (1983), il est présenté sous le nom de Dark Vador, un cyborg menaçant vêtu et masqué de noir au service de l\'Empereur Palpatine et le méchant principal de l\'histoire. La trilogie préquelle composée de Star Wars, épisode I : La Menace fantôme (1999), Star Wars, épisode II : L\'Attaque des clones (2002), Star Wars, épisode III : La Revanche des Sith (2005) explore l\'enfance et la jeunesse d\'Anakin Skywalker, et sa transformation en personnage malfaisant.',
                    'prix' => '1200',
                    'status' => 'disponible'
                ],
                [
                    'title' => 'Sabre Laser Vert',
                    'category_id' => '1',
                    'image_id' => '1',
                    'abstract' => 'Employé par les Jedi tout comme les Sith, il s\'emploie comme un sabre classique, mais peut traverser de nombreuses matières solides, comme la majorité des métaux. Cependant, son fort effet gyroscopique peut être extrêmement dangereux pour quelqu\'un qui ne maîtrise pas la Force.',
                    'content' => 'Employé par les Jedi tout comme les Sith, il s\'emploie comme un sabre classique, mais peut traverser de nombreuses matières solides, comme la majorité des métaux. Cependant, son fort effet gyroscopique peut être extrêmement dangereux pour quelqu\'un qui ne maîtrise pas la Force.
                    L\'arme s\'avère supérieure à la précédente mais reste toutefois relativement archaïque. Elle se recharge elle-même grâce à des matériaux supra-conducteurs et un système de récupération de l\'énergie constituant la "lame", ce qui lui offre une durabilité presque illimitée. Elle est utilisée par les Jedi lors de la Grande Guerre de l\'Hyperespace, face à l\'Empire Sith de Naga Sadow. Par la suite, l\'utilisation des sabres laser ne cesse de se généraliser parmi les adeptes de la Force, qu\'ils soient Jedi ou Sith. À partir de la Grande Guerre des Sith, plusieurs variantes commencent à faire leur apparition comme le double sabre laser d\'Exar Kun.

Après la Guerre des Clones et la Grande Purge Jedi qui en découle, il ne subsiste presque aucun Jedi. L\'usage du sabre laser a donc pratiquement disparu de la galaxie, car exhiber une arme telle que celle-ci équivaut pour un Jedi à être découvert et traqué par l\'Empire. Ce n\'est qu\'après la résurrection de l\'Ordre Jedi, sous Luke Skywalker, que le sabre laser refait son apparition.',
                    'prix' => '3150',
                    'status' => 'disponible'
                ],
            ]
        );
    }
}
