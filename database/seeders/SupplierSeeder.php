<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'S01', 'supplier_nama' => 'PT. Sumber Rejeki', 'supplier_alamat' => 'Malang'],
            ['supplier_id' => 2, 'supplier_kode' => 'S02', 'supplier_nama' => 'CV. Jaya Abadi', 'supplier_alamat' => 'Surabaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'S03', 'supplier_nama' => 'UD. Berkah', 'supplier_alamat' => 'Sidoarjo'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
