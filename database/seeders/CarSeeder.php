<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //DB::table('cars')->insert([
            // 'description' => Str::random(10).'mo ta xe 2',
            // 'model' => Str::random(10).'anh xe 2',
            // 'produce_on' => '2024-02-27',
            // 'image' => 'car2.jpg'
            Car::factory()
            ->count(100)
            ->create();
        //]);

    }
}
