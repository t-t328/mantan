<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word() . ' ' . $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(100, 10000),
            // ★ここを修正★
            // 画像ファイルを実際に生成して保存せず、ダミーのパス文字列を生成するように変更
            'image' => 'images/dummy_product_' . $this->faker->numberBetween(1, 10) . '.jpg', // 例: images/dummy_product_1.jpg のように
            // または、よりランダムなファイル名にする場合
            // 'image' => 'images/' . $this->faker->slug() . '.jpg',
            // または、URL形式で保存したい場合
            // 'image' => $this->faker->imageUrl(640, 480, 'products', true, 'Faker'),
        ];
    }
}