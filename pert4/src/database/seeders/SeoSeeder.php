<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seo;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seo::create([
            'title' => 'Sample SEO Title',
            'description' => 'This is a sample SEO description.',
            'keywords' => 'sample, seo, keywords',
            'canonical_url' => 'https://example.com',
            'robots' => 'index, follow',
            'og_image' => '',
        ]);
    }
}
