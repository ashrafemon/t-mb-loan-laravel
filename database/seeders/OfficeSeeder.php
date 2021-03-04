<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::truncate();

        Office::create([
            'name' => 'Head Office',
            'address' => 'Level 28, 225 George Street Sydney NSW 2000',
            'number' => '02 8297 0000'
        ]);

        Office::create([
            'name' => 'NSW',
            'address' => 'Level 7, 85 George Street, Parramatta NSW 2150',
            'number' => '02 9304 4200'
        ]);

        Office::create([
            'name' => 'ACT',
            'address' => 'Ground Floor, 7 London Circuit, Canberra ACT 2601',
            'number' => '02 6122 1500'
        ]);

        Office::create([
            'name' => 'SA/NT',
            'address' => 'Ground Floor, Shop 2, 151 Pirie Street, Adelaide SA 5000',
            'number' => '08 8205 7888'
        ]);
    }
}
