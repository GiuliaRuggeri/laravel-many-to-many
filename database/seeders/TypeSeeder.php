<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'historical romance',
                'description' => 'lorem ipsum dolor',
            ],
            [
                'name' => 'romantic disaster',
                'description' => 'lorem ipsum dolor',
            ],
            [
                'name' => 'musical comedy',
                'description' => 'lorem ipsum dolor',
            ]
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
    
}
