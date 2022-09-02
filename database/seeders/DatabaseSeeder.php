<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admins;
use Illuminate\Database\Seeder;
use App\Models\ProductCategories;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Admins::factory(10)->create();

        // Admins::factory()->create([
        //     'username' => 'Test User',
        //     'password' => bcrypt(''),
        // ]);

        Admins::create([
            'username' => 'Germent',
            'password' => bcrypt('12345')
        ]);

        // ProductCategories::create([
        //     'category' => 'Makanan',
        //     'description' => 'Ikan Goreng'
        // ]);

        // ProductCategories::create([
        //     'category' => 'Makanan',
        //     'description' => 'Ayam Goreng'
        // ]);
        // ProductCategories::create([
        //     'category' => 'Minuman',
        //     'description' => 'Teh Obeng'
        // ]);
        // ProductCategories::create([
        //     'category' => 'Makanan',
        //     'description' => 'Jus Buah'
        // ]);
    }
}
