<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HawkamCategory;
use App\Models\Hawkma;

class HawkmaDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Hawkma Categories
        $categories = [
            [
                'name' => 'اللوائح والسياسات',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'التقارير المالية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'التقارير الإدارية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'اللجان والفروع',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'استطلاعات الرضا',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'الجمعية العمومية',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($categories as $category) {
            HawkamCategory::create($category);
        }

        // Get category IDs
        $regulationsCategory = HawkamCategory::where('name', 'اللوائح والسياسات')->first();
        $financialCategory = HawkamCategory::where('name', 'التقارير المالية')->first();
        $adminCategory = HawkamCategory::where('name', 'التقارير الإدارية')->first();
        $committeesCategory = HawkamCategory::where('name', 'اللجان والفروع')->first();
        $surveysCategory = HawkamCategory::where('name', 'استطلاعات الرضا')->first();
        $assemblyCategory = HawkamCategory::where('name', 'الجمعية العمومية')->first();

        // Create Hawkma Items
        $hawkmaItems = [
            // اللوائح والسياسات
            [
                'title' => 'نظام الرقابة الداخلي',
                'description' => 'نظام الرقابة الداخلي الإصدار (1) 1447-2025',
                'version' => '1.0',
                'effective_date' => '2025-07-28',
                'document_type' => 'regulation',
                'status' => 'active',
                'sort_order' => 1,
                'tags' => json_encode(['رقابة', 'داخلية', 'نظام']),
                'published' => true,
                'category_id' => $regulationsCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'سياسة استخدام أنظمة الذكاء الاصطناعي',
                'description' => 'سياسة استخدام أنظمة الذكاء الاصطناعي (الإصدار 1)',
                'version' => '1.0',
                'effective_date' => '2025-07-28',
                'document_type' => 'policy',
                'status' => 'active',
                'sort_order' => 2,
                'tags' => json_encode(['ذكاء اصطناعي', 'سياسة', 'تقنية']),
                'published' => true,
                'category_id' => $regulationsCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'سياسة توجيه مبلغ التبرع',
                'description' => 'سياسة توجيه مبلغ التبرع لمشروع آخر (الإصدار 4)',
                'version' => '4.0',
                'effective_date' => '2025-07-28',
                'document_type' => 'policy',
                'status' => 'active',
                'sort_order' => 3,
                'tags' => json_encode(['تبرع', 'سياسة', 'مالية']),
                'published' => true,
                'category_id' => $regulationsCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'دليل الإجراءات المالية',
                'published' => true,
                'category_id' => $regulationsCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'دليل السياسات المالية',
                'published' => true,
                'category_id' => $regulationsCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'آلية التأكد من استحقاق المستفيد',
                'published' => true,
                'category_id' => $regulationsCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'سياسة إدارة المخاطر',
                'published' => true,
                'category_id' => $regulationsCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'دليل إجراءات الموارد البشرية',
                'published' => true,
                'category_id' => $regulationsCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // التقارير المالية
            [
                'title' => 'التقرير المالي السنوي 2024',
                'published' => true,
                'category_id' => $financialCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'تقرير المراجعة الخارجية 2024',
                'published' => true,
                'category_id' => $financialCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'تقرير الميزانية العمومية 2024',
                'published' => true,
                'category_id' => $financialCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'تقرير التدفقات النقدية 2024',
                'published' => true,
                'category_id' => $financialCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // التقارير الإدارية
            [
                'title' => 'التقرير الإداري السنوي 2024',
                'published' => true,
                'category_id' => $adminCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'تقرير أنشطة الجمعية 2024',
                'published' => true,
                'category_id' => $adminCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'تقرير إنجازات المشاريع 2024',
                'published' => true,
                'category_id' => $adminCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // اللجان والفروع
            [
                'title' => 'دليل اللجان والفروع والمكاتب التعريفية 2024',
                'published' => true,
                'category_id' => $committeesCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'هيكل اللجان التنفيذية',
                'published' => true,
                'category_id' => $committeesCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'دليل فروع الجمعية',
                'published' => true,
                'category_id' => $committeesCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // استطلاعات الرضا
            [
                'title' => 'استطلاع رضا المستفيدين 2024',
                'published' => true,
                'category_id' => $surveysCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'استطلاع رضا المتطوعين 2024',
                'published' => true,
                'category_id' => $surveysCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'استطلاع رضا الشركاء 2024',
                'published' => true,
                'category_id' => $surveysCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // الجمعية العمومية
            [
                'title' => 'محضر الجمعية العمومية العادية (29) 2025',
                'published' => true,
                'category_id' => $assemblyCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'محضر الجمعية العمومية العادية (28) 2024',
                'published' => true,
                'category_id' => $assemblyCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'جدول أعمال الجمعية العمومية 2025',
                'published' => true,
                'category_id' => $assemblyCategory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($hawkmaItems as $item) {
            Hawkma::create($item);
        }
    }
}
