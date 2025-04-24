<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CardConfig;


class CardConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $configs = [
            ['title' => 'Card 1', 'detail' => 'This is the detail for card 1.'],
            ['title' => 'Card 2', 'detail' => 'This is the detail for card 2.'],
            ['title' => 'Card 3', 'detail' => 'This is the detail for card 3.'],
            ['title' => 'Card 4', 'detail' => 'This is the detail for card 4.'],
            ['title' => 'Card 5', 'detail' => 'This is the detail for card 5.'],
        ];

        foreach ($configs as $config) {
            CardConfig::create($config);
        }
    }
}
