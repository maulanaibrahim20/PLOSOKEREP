<?php

namespace Database\Seeders;

use App\Models\Aparatur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 496; $i++) { 
            Aparatur::create([
                'nama'  => 'aparat'.$i,
                'jabatan' => 'aparat'.$i,
                'no_hp'  => '0827226'.$i,
                'gambar' => null
                
                
            ]);
        }

       
    }
}
