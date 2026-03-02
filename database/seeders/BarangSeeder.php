<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'B01', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'B02', 'barang_nama' => 'Mie Ayam', 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'B03', 'barang_nama' => 'Ayam Bakar', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'B04', 'barang_nama' => 'Es Teh', 'harga_beli' => 2000, 'harga_jual' => 5000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'B05', 'barang_nama' => 'Es Jeruk', 'harga_beli' => 3000, 'harga_jual' => 6000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'B06', 'barang_nama' => 'Kopi Hitam', 'harga_beli' => 4000, 'harga_jual' => 7000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'B07', 'barang_nama' => 'Chitato', 'harga_beli' => 9000, 'harga_jual' => 11000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'B08', 'barang_nama' => 'Oreo', 'harga_beli' => 7000, 'harga_jual' => 9000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'B09', 'barang_nama' => 'Silverqueen', 'harga_beli' => 12000, 'harga_jual' => 15000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'B10', 'barang_nama' => 'Panadol', 'harga_beli' => 10000, 'harga_jual' => 13000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'B11', 'barang_nama' => 'Promag', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'B12', 'barang_nama' => 'Bodrex', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'B13', 'barang_nama' => 'Shampoo', 'harga_beli' => 20000, 'harga_jual' => 25000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'B14', 'barang_nama' => 'Sabun Mandi', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'B15', 'barang_nama' => 'Pasta Gigi', 'harga_beli' => 12000, 'harga_jual' => 15000],
        ];
        DB::table('m_barang')->insert($data);
    }
}