<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'SUBAGEST BOLUS',
            'slug' => 'subagest-bolus',
            'composition' => 'Each Bolus Contains: Saccharomyces cerevisiae 15 billion CFU, Saccharomyces boulardii 
            2.5 billion CFU, Bacillus amyloliquefaciens 2.5 billion CFU, Lactobascillus Sporogenes 100 million CFU, 
            Basillus Subtilis 10 mil CFU, DL-Methionine 500 mg, L.Lysine 200 mg, Fungal Amylase 20 mg, 
            MOS & Betaglucan 1G',
            'benefits' => 'Probiotic improves population of gut microflora, corrects rumen digestion \r\n 
            Improves appetite & improves VFA production by improving helpful microbial population in rumen \r\n
            Aids in suppression of harmful rumen microbes, thereby reduces lactic acid secretion \r\n 
            Reduces ill effects of oral antibiotic therapy \r\n Prebiotics- MOS & Beta Glucan reduces toxin effects on 
            rumen microflora',
            'usage' => 'Large animals: 1 -2 Bolus daily orally; Small animals: 1 Bolus Daily',
            'presentation' => 'Strip of 4 boli',
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'TOXIFIX PLUS Liq.',
            'slug' => 'toxifix-plus-liq',
            'composition' => 'Each ml contains- L-carnitine: 50 gm dl- Methionine 25 gm Choline chloride: 180 gm
             Vitamin B12: 10 mg Inositol: 60gm',
            'benefits' => 'Prevents liver damage & fatty liver condition due to to multiple reasons',
            'usage' => '0.5-1 ml per liter of drinking water',
            'presentation' => '1 liter bottle',
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'SUBACID',
            'slug' => 'subacid',
            'composition' => 'Mix of organic acids – Formic, Malic, Citric, Fumeric, Lactic, Propionic and 
            orthophosphoric acid',
            'benefits' => 'Reduces intestinal pathogen load, Improves villi length, FCR & weight gain, 
            decreases nitrogen excretion',
            'usage' => '1 kg per ton of feed',
            'presentation' => '25 kg bag',
            'category_id' => 2
        ]);

    }
}
