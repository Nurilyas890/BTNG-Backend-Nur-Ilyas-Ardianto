<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mobil;

class MobilSeeder extends Seeder
{
    public function run(): void
    {
        $mobils = [
            [
                'nama' => 'Avanza 1.5 G',
                'brand' => 'Toyota',
                'harga' => 275000000,
                'tahun' => 2024,
                'transmisi' => 'CVT',
                'bahan_bakar' => 'Bensin',
                'status' => 'tersedia',
                'foto' => 'https://example.com/avanza.jpg',
            ],

            [
                'nama' => 'Brio Satya E',
                'brand' => 'Honda',
                'harga' => 180000000,
                'tahun' => 2023,
                'transmisi' => 'Manual',
                'bahan_bakar' => 'Bensin',
                'status' => 'tersedia',
                'foto' => 'https://example.com/brio.jpg',
            ],

            [
                'nama' => 'Xpander Ultimate',
                'brand' => 'Mitsubishi',
                'harga' => 320000000,
                'tahun' => 2024,
                'transmisi' => 'Matic',
                'bahan_bakar' => 'Bensin',
                'status' => 'sold',
                'foto' => 'https://example.com/xpander.jpg',
            ],

            [
                'nama' => 'Innova Zenix Hybrid',
                'brand' => 'Toyota',
                'harga' => 470000000,
                'tahun' => 2025,
                'transmisi' => 'CVT',
                'bahan_bakar' => 'Hybrid',
                'status' => 'tersedia',
                'foto' => 'https://example.com/zenix.jpg',
            ],
            
            [
                'nama' => 'Fortuner 2.4 VRZ',
                'brand' => 'Toyota',
                'harga' => 560000000,
                'tahun' => 2023,
                'transmisi' => 'Matic',
                'bahan_bakar' => 'Diesel',
                'status' => 'tersedia',
                'foto' => 'https://example.com/fortuner.jpg',
            ],
        ];

        foreach ($mobils as $mobil) {
            Mobil::create($mobil);
        }
    }
}
