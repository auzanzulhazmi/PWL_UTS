<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'Id' => '1',
            'Kode' => 'PRD001',
            'Nama' => 'Indomie',
            'Kategori' => 'Makanan',
            'Harga' => '3000',
            'Qty' => '100',
        ]);

        DB::table('barangs')->insert([
            'Id' => '2',
            'Kode' => 'PRD002',
            'Nama' => 'Pocari Sweat',
            'Kategori' => 'Minuman',
            'Harga' => '6000',
            'Qty' => '50',
        ]);
        DB::table('barangs')->insert([
            'Id' => '3',
            'Kode' => 'PRD002',
            'Nama' => 'Pocari Sweat',
            'Kategori' => 'Minuman',
            'Harga' => '6000',
            'Qty' => '50',
        ]);
    }
}
