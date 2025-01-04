<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder {
 
    public function run(): void{
        User::create([
            'name' => 'Matheus S Lopes',
            'email' => 'matheusItaipuParquetec@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
