<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'slider_create',
            ],
            [
                'id'    => 18,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 19,
                'title' => 'slider_show',
            ],
            [
                'id'    => 20,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 21,
                'title' => 'slider_access',
            ],
            [
                'id'    => 22,
                'title' => 'about_association_access',
            ],
            [
                'id'    => 23,
                'title' => 'service_create',
            ],
            [
                'id'    => 24,
                'title' => 'service_edit',
            ],
            [
                'id'    => 25,
                'title' => 'service_show',
            ],
            [
                'id'    => 26,
                'title' => 'service_delete',
            ],
            [
                'id'    => 27,
                'title' => 'service_access',
            ],
            [
                'id'    => 28,
                'title' => 'beneficiary_create',
            ],
            [
                'id'    => 29,
                'title' => 'beneficiary_edit',
            ],
            [
                'id'    => 30,
                'title' => 'beneficiary_show',
            ],
            [
                'id'    => 31,
                'title' => 'beneficiary_delete',
            ],
            [
                'id'    => 32,
                'title' => 'beneficiary_access',
            ],
            [
                'id'    => 33,
                'title' => 'project_create',
            ],
            [
                'id'    => 34,
                'title' => 'project_edit',
            ],
            [
                'id'    => 35,
                'title' => 'project_show',
            ],
            [
                'id'    => 36,
                'title' => 'project_delete',
            ],
            [
                'id'    => 37,
                'title' => 'project_access',
            ],
            [
                'id'    => 38,
                'title' => 'media_center_access',
            ],
            [
                'id'    => 39,
                'title' => 'news_create',
            ],
            [
                'id'    => 40,
                'title' => 'news_edit',
            ],
            [
                'id'    => 41,
                'title' => 'news_show',
            ],
            [
                'id'    => 42,
                'title' => 'news_delete',
            ],
            [
                'id'    => 43,
                'title' => 'news_access',
            ],
            [
                'id'    => 44,
                'title' => 'said_about_us_create',
            ],
            [
                'id'    => 45,
                'title' => 'said_about_us_edit',
            ],
            [
                'id'    => 46,
                'title' => 'said_about_us_show',
            ],
            [
                'id'    => 47,
                'title' => 'said_about_us_delete',
            ],
            [
                'id'    => 48,
                'title' => 'said_about_us_access',
            ],
            [
                'id'    => 49,
                'title' => 'partner_create',
            ],
            [
                'id'    => 50,
                'title' => 'partner_edit',
            ],
            [
                'id'    => 51,
                'title' => 'partner_show',
            ],
            [
                'id'    => 52,
                'title' => 'partner_delete',
            ],
            [
                'id'    => 53,
                'title' => 'partner_access',
            ],
            [
                'id'    => 54,
                'title' => 'hawkma_mangment_access',
            ],
            [
                'id'    => 55,
                'title' => 'hawkam_category_create',
            ],
            [
                'id'    => 56,
                'title' => 'hawkam_category_edit',
            ],
            [
                'id'    => 57,
                'title' => 'hawkam_category_show',
            ],
            [
                'id'    => 58,
                'title' => 'hawkam_category_delete',
            ],
            [
                'id'    => 59,
                'title' => 'hawkam_category_access',
            ],
            [
                'id'    => 60,
                'title' => 'hawkma_create',
            ],
            [
                'id'    => 61,
                'title' => 'hawkma_edit',
            ],
            [
                'id'    => 62,
                'title' => 'hawkma_show',
            ],
            [
                'id'    => 63,
                'title' => 'hawkma_delete',
            ],
            [
                'id'    => 64,
                'title' => 'hawkma_access',
            ],
            [
                'id'    => 65,
                'title' => 'report_mangment_access',
            ],
            [
                'id'    => 66,
                'title' => 'report_category_create',
            ],
            [
                'id'    => 67,
                'title' => 'report_category_edit',
            ],
            [
                'id'    => 68,
                'title' => 'report_category_show',
            ],
            [
                'id'    => 69,
                'title' => 'report_category_delete',
            ],
            [
                'id'    => 70,
                'title' => 'report_category_access',
            ],
            [
                'id'    => 71,
                'title' => 'report_create',
            ],
            [
                'id'    => 72,
                'title' => 'report_edit',
            ],
            [
                'id'    => 73,
                'title' => 'report_show',
            ],
            [
                'id'    => 74,
                'title' => 'report_delete',
            ],
            [
                'id'    => 75,
                'title' => 'report_access',
            ],
            [
                'id'    => 76,
                'title' => 'report_money_create',
            ],
            [
                'id'    => 77,
                'title' => 'report_money_edit',
            ],
            [
                'id'    => 78,
                'title' => 'report_money_show',
            ],
            [
                'id'    => 79,
                'title' => 'report_money_delete',
            ],
            [
                'id'    => 80,
                'title' => 'report_money_access',
            ],
            [
                'id'    => 81,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 82,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 83,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 84,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 85,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 86,
                'title' => 'volunteering_managment_access',
            ],
            [
                'id'    => 87,
                'title' => 'volunteer_create',
            ],
            [
                'id'    => 88,
                'title' => 'volunteer_edit',
            ],
            [
                'id'    => 89,
                'title' => 'volunteer_show',
            ],
            [
                'id'    => 90,
                'title' => 'volunteer_delete',
            ],
            [
                'id'    => 91,
                'title' => 'volunteer_access',
            ],
            [
                'id'    => 92,
                'title' => 'volunteer_guide_create',
            ],
            [
                'id'    => 93,
                'title' => 'volunteer_guide_edit',
            ],
            [
                'id'    => 94,
                'title' => 'volunteer_guide_show',
            ],
            [
                'id'    => 95,
                'title' => 'volunteer_guide_delete',
            ],
            [
                'id'    => 96,
                'title' => 'volunteer_guide_access',
            ],
            [
                'id'    => 97,
                'title' => 'membership_access',
            ],
            [
                'id'    => 98,
                'title' => 'membership_type_create',
            ],
            [
                'id'    => 99,
                'title' => 'membership_type_edit',
            ],
            [
                'id'    => 100,
                'title' => 'membership_type_show',
            ],
            [
                'id'    => 101,
                'title' => 'membership_type_delete',
            ],
            [
                'id'    => 102,
                'title' => 'membership_type_access',
            ],
            [
                'id'    => 103,
                'title' => 'member_create',
            ],
            [
                'id'    => 104,
                'title' => 'member_edit',
            ],
            [
                'id'    => 105,
                'title' => 'member_show',
            ],
            [
                'id'    => 106,
                'title' => 'member_delete',
            ],
            [
                'id'    => 107,
                'title' => 'member_access',
            ],
            [
                'id'    => 108,
                'title' => 'contact_mangment_access',
            ],
            [
                'id'    => 109,
                'title' => 'contact_create',
            ],
            [
                'id'    => 110,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 111,
                'title' => 'contact_show',
            ],
            [
                'id'    => 112,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 113,
                'title' => 'contact_access',
            ],
            [
                'id'    => 114,
                'title' => 'subscribe_create',
            ],
            [
                'id'    => 115,
                'title' => 'subscribe_edit',
            ],
            [
                'id'    => 116,
                'title' => 'subscribe_show',
            ],
            [
                'id'    => 117,
                'title' => 'subscribe_delete',
            ],
            [
                'id'    => 118,
                'title' => 'subscribe_access',
            ],
            [
                'id'    => 119,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 120,
                'title' => 'setting_access',
            ],
            [
                'id'    => 121,
                'title' => 'director_create',
            ],
            [
                'id'    => 122,
                'title' => 'director_edit',
            ],
            [
                'id'    => 123,
                'title' => 'director_show',
            ],
            [
                'id'    => 124,
                'title' => 'director_delete',
            ],
            [
                'id'    => 125,
                'title' => 'director_access',
            ],
            [
                'id'    => 126,
                'title' => 'support_create',
            ],
            [
                'id'    => 127,
                'title' => 'support_edit',
            ],
            [
                'id'    => 128,
                'title' => 'support_show',
            ],
            [
                'id'    => 129,
                'title' => 'support_delete',
            ],
            [
                'id'    => 130,
                'title' => 'support_access',
            ],
            [
                'id'    => 131,
                'title' => 'certificate_create',
            ],
            [
                'id'    => 132,
                'title' => 'certificate_edit',
            ],
            [
                'id'    => 133,
                'title' => 'certificate_show',
            ],
            [
                'id'    => 134,
                'title' => 'certificate_delete',
            ],
            [
                'id'    => 135,
                'title' => 'certificate_access',
            ],
            [
                'id'    => 136,
                'title' => 'article_create',
            ],
            [
                'id'    => 137,
                'title' => 'article_edit',
            ],
            [
                'id'    => 138,
                'title' => 'article_show',
            ],
            [
                'id'    => 139,
                'title' => 'article_delete',
            ],
            [
                'id'    => 140,
                'title' => 'article_access',
            ],
            [
                'id'    => 141,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
