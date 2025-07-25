<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Productモデルをインポート

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ファクトリーを使って複数のダミー商品を生成する例 (推奨)
        // ProductFactoryをまだ作成していない場合は、php artisan make:factory ProductFactory --model=Product で作成
        Product::factory(50)->create(); // 50件のダミー商品を生成
    }
}