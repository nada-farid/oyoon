<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VideoCategory;

class VideoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'تغطيات',
                'name_en' => 'Coverage',
                'description' => 'فيديوهات تغطية الأحداث والأنشطة',
                'published' => true,
            ],
            [
                'name' => 'ترويجي',
                'name_en' => 'Promotional',
                'description' => 'فيديوهات ترويجية للخدمات والبرامج',
                'published' => true,
            ],
            [
                'name' => 'تعزيز الصحة',
                'name_en' => 'Health Promotion',
                'description' => 'فيديوهات توعوية لتعزيز الصحة',
                'published' => true,
            ],
            [
                'name' => 'وثائقي',
                'name_en' => 'Documentary',
                'description' => 'فيديوهات وثائقية عن الجمعية وخدماتها',
                'published' => true,
            ],
        ];

        foreach ($categories as $category) {
            VideoCategory::create($category);
        }
    }
}
