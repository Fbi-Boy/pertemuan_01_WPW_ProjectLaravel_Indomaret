<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stok;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        Stok::create([
            'kode_barang' => 'BRG001',
            'nama_barang' => 'Indomie Goreng',
            'kategori' => 'Makanan',
            'harga' => 3500,
            'stok' => 120,
        ]);

        Stok::create([
            'kode_barang' => 'BRG002',
            'nama_barang' => 'Air Mineral 600ml',
            'kategori' => 'Minuman',
            'harga' => 3000,
            'stok' => 85,
        ]);

        Stok::create([
            'kode_barang' => 'BRG003',
            'nama_barang' => 'Rinso Detergen',
            'kategori' => 'Kebutuhan Rumah',
            'harga' => 16000,
            'stok' => 40,
        ]);

        Stok::create([
            'kode_barang' => 'BRG004',
            'nama_barang' => 'Susu Ultra Milk',
            'kategori' => 'Minuman',
            'harga' => 6000,
            'stok' => 0,
        ]);

        Stok::create([
            'kode_barang' => 'BRG005',
            'nama_barang' => 'Sabun Lifebuoy',
            'kategori' => 'Perawatan',
            'harga' => 4500,
            'stok' => 8,
        ]);

        Stok::create([
            'kode_barang' => 'BRG006',
            'nama_barang' => 'Royco Kaldu Ayam',
            'kategori' => 'Bumbu',
            'harga' => 1500,
            'stok' => 200,
        ]);

        Stok::create([
            'kode_barang' => 'BRG007',
            'nama_barang' => 'Pepsodent',
            'kategori' => 'Perawatan',
            'harga' => 8000,
            'stok' => 25,
        ]);

        Stok::create([
            'kode_barang' => 'BRG008',
            'nama_barang' => 'Tisu Paseo',
            'kategori' => 'Kebutuhan Rumah',
            'harga' => 9000,
            'stok' => 60,
        ]);
    }
}