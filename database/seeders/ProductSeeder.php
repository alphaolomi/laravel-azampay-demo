<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'African Fruti Apple 1 Ltr',
                'image' => 'AFRICAN-FRUTI-n-APPLE-1LTR.jpg',
                'price' => 3000,
                'description' => 'African fruti premium fruit drinks are made from the highest quality fruits, carefully selected and blended to perfection to obtain the unique taste and rich aroma. Most of the fruits used are grown on the rich Tanzania soil with lots of sunshine and rainfall, bringing out the goodness of mother nature in African Fruti premium fruit drinks.'
            ],
            [
                'name' => 'African Fruti Guava 1 Ltr',
                'image' => 'AFRICAN-FRUTI-n-GUAVA-1LTR.jpg',
                'price' => 3000,
                'description' => 'African fruti premium fruit drinks are made from the highest quality fruits, carefully selected and blended to perfection to obtain the unique taste and rich aroma. Most of the fruits used are grown on the rich Tanzania soil with lots of sunshine and rainfall, bringing out the goodness of mother nature in African Fruti premium fruit drinks.'
            ],
            [
                'name' => 'African Fruti Komamanga 1 Ltr',
                'image' => 'AFRICAN-FRUTI-n-KOMAMANGA-1LTR.jpg',
                'price' => 3000,
                'description' => 'African fruti premium fruit drinks are made from the highest quality fruits, carefully selected and blended to perfection to obtain the unique taste and rich aroma. Most of the fruits used are grown on the rich Tanzania soil with lots of sunshine and rainfall, bringing out the goodness of mother nature in African Fruti premium fruit drinks.'
            ],
            [
                'name' => 'African Fruti Litchi 1 Ltr',
                'image' => 'AFRICAN-FRUTI-n-LITCHI-1LTR.jpg',
                'price' => 3000,
                'description' => 'African fruti premium fruit drinks are made from the highest quality fruits, carefully selected and blended to perfection to obtain the unique taste and rich aroma. Most of the fruits used are grown on the rich Tanzania soil with lots of sunshine and rainfall, bringing out the goodness of mother nature in African Fruti premium fruit drinks.'
            ],
            [
                'name' => 'African Fruti Mango 1 Ltr',
                'image' => 'AFRICAN-FRUTI-n-MANGO-1LTR.jpg',
                'price' => 3000,
                'description' => 'African fruti premium fruit drinks are made from the highest quality fruits, carefully selected and blended to perfection to obtain the unique taste and rich aroma. Most of the fruits used are grown on the rich Tanzania soil with lots of sunshine and rainfall, bringing out the goodness of mother nature in African Fruti premium fruit drinks.'
            ],
            [
                'name' => 'African Fruti Orange 1',
                'image' => 'AFRICAN-FRUTI-n-ORANGE_1.jpg',
                'price' => 3000,
                'description' => 'African fruti premium fruit drinks are made from the highest quality fruits, carefully selected and blended to perfection to obtain the unique taste and rich aroma. Most of the fruits used are grown on the rich Tanzania soil with lots of sunshine and rainfall, bringing out the goodness of mother nature in African Fruti premium fruit drinks.'
            ],
            [
                'name' => 'African Fruti Pineapple 1 Ltr',
                'image' => 'AFRICAN-FRUTI-n-PINEAPPLE-1LTR.jpg',
                'price' => 3000,
                'description' => 'African fruti premium fruit drinks are made from the highest quality fruits, carefully selected and blended to perfection to obtain the unique taste and rich aroma. Most of the fruits used are grown on the rich Tanzania soil with lots of sunshine and rainfall, bringing out the goodness of mother nature in African Fruti premium fruit drinks.'
            ],
            [
                'name' => 'African Fruti Tropical Mix',
                'image' => 'AFRICAN-FRUTI-n-TROPICAL-MIX.jpg',
                'price' => 3000,
                'description' => 'African fruti premium fruit drinks are made from the highest quality fruits, carefully selected and blended to perfection to obtain the unique taste and rich aroma. Most of the fruits used are grown on the rich Tanzania soil with lots of sunshine and rainfall, bringing out the goodness of mother nature in African Fruti premium fruit drinks.'
            ],
            [
                'name' => 'Azam Apple Pun 300ml',
                'image' => 'Azam-Apple-Punch-300ml.jpg',
                'price' => 3000,
                'description' => 'Azam Apple Punch is a refreshing drink made from the finest apples. It is a great source of vitamin C and is a perfect drink for any occasion.'
            ],
            [
                'name' => 'Azam Cola',
                'image' => 'AZAM-COLA-CROPPED.png',
                'price' => 3000,
                'description' => 'Azam Cola is a refreshing drink made from the finest ingredients. It is a great source of vitamin C and is a perfect drink for any occasion.'
            ],
            [
                'name' => 'Azam Malti',
                'image' => 'Azam-Malti-Apple-500ml.jpg',
                'price' => 3000,
                'description' => 'Azam Malti Apple is a refreshing drink made from the finest apples. It is a great source of vitamin C and is a perfect drink for any occasion.'
            ],
            [
                'name' => 'Azam Mango',
                'image' => 'Azam-Mango-1Litre.jpg',
                'price' => 3000,
                'description' => 'Azam Mango is a refreshing drink made from the finest mangoes. It is a great source of vitamin C and is a perfect drink for any occasion.'
            ],
            [
                'name' => 'Azam Tangawizi',
                'image' => 'Azam-Tangawizi-300ml.jpg',
                'price' => 3000,
                'description' => 'Azam Tangawizi is a refreshing drink made from the finest ginger. It is a great source of vitamin C and is a perfect drink for any occasion.'
            ],
        ];

        Product::truncate();
        foreach ($products as $product) {
            
            $product['slug'] = \Illuminate\Support\Str::slug(str_replace('.jpg', '', $product['image']));

            Product::factory()->create($product);
        }
    }
}
