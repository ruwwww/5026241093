<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::table('pegawai')->insert([
            [
                'pegawai_nama' => 'Joni',
                'pegawai_jabatan' => 'Web Designer',
                'pegawai_umur' => 25,
                'pegawai_alamat' => 'Jl. Panglima Polim'
            ],
            [
                'pegawai_nama' => 'Budi',
                'pegawai_jabatan' => 'Web Developer',
                'pegawai_umur' => 26,
                'pegawai_alamat' => 'Jl. Raya'
            ],
            [
                'pegawai_nama' => 'Maliq',
                'pegawai_jabatan' => 'Programmer',
                'pegawai_umur' => 27,
                'pegawai_alamat' => 'Jl. Veteran'
            ]
        ]);
    }
}
