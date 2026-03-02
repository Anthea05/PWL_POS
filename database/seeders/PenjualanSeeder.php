<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $penjualan_id = DB::table('t_penjualan')->insertGetId([
                'user_id' => 3, // Kasir
                'pembeli' => 'Pelanggan ' . $i,
                'penjualan_kode' => 'PJ' . $i,
                'penjualan_tanggal' => now(),
            ]);

            for ($j = 1; $j <= 3; $j++) {
                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => (($i + $j) % 15) + 1,
                    'harga' => 15000,
                    'jumlah' => $j,
                ]);
            }
        }
    }
}
