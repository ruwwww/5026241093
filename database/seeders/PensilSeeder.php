<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PensilSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pensil')->insert([
            [
                'merkpensil' => 'Faber-Castell 2B',
                'stockpensil' => 100,
                'tersedia' => 'Y'
            ],
            [
                'merkpensil' => 'Staedtler Luna',
                'stockpensil' => 50,
                'tersedia' => 'Y'
            ],
            [
                'merkpensil' => 'Joyko 2B',
                'stockpensil' => 0,
                'tersedia' => 'N'
            ]
        ]);
    }
}
