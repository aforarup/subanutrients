<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Cattle',
            'slug' => 'cattle',
            'description' => 'Striding in high velocity animal health market is possible through development & launch of innovative products. Our success lies in developing new products to mitigate emerging challenges in Animal health sector. We always aspire to develop sustainable competitive advantages & leverage our core strength to develop new innovative products for Cattle, Poultry, Swine  & Companion Animals ',
        ]);
        DB::table('categories')->insert([
            'name' => 'Poultry',
            'slug' => 'poultry',
            'description' => 'Striding in high velocity animal health market is possible through development & launch of innovative products. Our success lies in developing new products to mitigate emerging challenges in Animal health sector. We always aspire to develop sustainable competitive advantages & leverage our core strength to develop new innovative products for Cattle, Poultry, Swine  & Companion Animals ',
        ]);
        DB::table('categories')->insert([
            'name' => 'Swine',
            'slug' => 'swine',
            'description' => 'Striding in high velocity animal health market is possible through development & launch of innovative products. Our success lies in developing new products to mitigate emerging challenges in Animal health sector. We always aspire to develop sustainable competitive advantages & leverage our core strength to develop new innovative products for Cattle, Poultry, Swine  & Companion Animals ',
        ]);
        DB::table('categories')->insert([
            'name' => 'Companion Animals',
            'slug' => 'companion-animals',
            'description' => 'Striding in high velocity animal health market is possible through development & launch of innovative products. Our success lies in developing new products to mitigate emerging challenges in Animal health sector. We always aspire to develop sustainable competitive advantages & leverage our core strength to develop new innovative products for Cattle, Poultry, Swine  & Companion Animals ',
        ]);
    }
}
