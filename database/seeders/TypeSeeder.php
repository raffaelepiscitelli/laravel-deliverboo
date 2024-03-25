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
        $restaurants = config ('db.restaurants');
        $typecheck = [];

        foreach ($restaurants as $type) {
            // se ritorna falso, deve aggiungere in typecheck la chiave
            if (in_array($type['type'], $typecheck) != true) {
                array_push($typecheck, $type['type']);
                $newtype = new Type();
                $newtype-> name_type = $type['type'];
                $newtype->save();
            }
        }
    }
}
