<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutosSeeder extends Seeder {
    public function run(): void {
        Produto::factory(20)->create();
    }
}
