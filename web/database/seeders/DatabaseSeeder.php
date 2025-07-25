<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ユーザーのシーディング（例として）
        // \App\Models\User::factory(10)->create();

        // ProductSeederを呼び出す
        $this->call(ProductSeeder::class);
    }
}