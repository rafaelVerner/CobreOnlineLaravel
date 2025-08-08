<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cobranca;

class CobrancaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cobranca::create([
            'nome' =>'Verner',
            'email' => 'teste@gmail.com',
            'vencimento' =>'2025-12-04',
            'valor' => 2000.0
        ]);
    }
}
