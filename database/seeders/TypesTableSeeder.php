<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;


class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Frontend', 'Backend'];

        foreach ($types as $type) {
            $new_type = new Type();

            $new_type->title = $type;
            $new_type->slug = Str::of($type)->slug('-');

            $new_type->save();
        }
    }
}
