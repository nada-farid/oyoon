<?php

return [
    'userManagement' => [
        'title' => 'إدارة المستخدمين',
        'title_singular' => 'إدارة المستخدم',
    ],
    'permission' => [
        'title' => 'الصلاحيات',
        'title_singular' => 'الصلاحية',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'title' => 'العنوان',
            'title_helper' => ' ',
            'created_at' => 'تاريخ الإضافة',
            'created_at_helper' => ' ',
            'updated_at' => 'تاريخ التعديل',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title' => 'الأدوار',
        'title_singular' => 'الدور',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'title' => 'العنوان',
            'title_helper' => ' ',
            'permissions' => 'الصلاحيات',
            'permissions_helper' => ' ',
            'created_at' => 'تاريخ الإضافة',
            'created_at_helper' => ' ',
            'updated_at' => 'تاريخ التعديل',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
        ],
    ],
    'user' => [
        'title' => 'المستخدمين',
        'title_singular' => 'المستخدم',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'email' => 'البريد الإلكتروني',
            'email_helper' => ' ',
            'email_verified_at' => 'تاريخ تأكيد البريد',
            'email_verified_at_helper' => ' ',
            'password' => 'كلمة المرور',
            'password_helper' => ' ',
            'roles' => 'الأدوار',
            'roles_helper' => ' ',
            'remember_token' => 'رمز التذكر',
            'remember_token_helper' => ' ',
            'created_at' => 'تاريخ الإضافة',
            'created_at_helper' => ' ',
            'updated_at' => 'تاريخ التعديل',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
        ],
    ],
    'slider' => [
        'title' => 'السلايدر',
        'title_singular' => 'السلايدر',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'image' => 'الصورة',
            'image_helper' => '( مقاس الصورة  المناسب العرض :1440px  - الطول :850px)',
            'publish' => 'الحالة',
            'publish_helper' => ' ',
            'text' => 'النص',
            'text_helper' => ' ',
            'description' => 'الوصف',
            'description_helper' => ' ',
            'link' => 'الرابط',
            'link_helper' => ' ',
            'created_at' => 'تاريخ الإضافة',
            'created_at_helper' => ' ',
            'updated_at' => 'تاريخ التعديل',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
        ],
    ],
    'aboutAssociation' => [
        'title'          => 'عن الجمعية ',
        'title_singular' => 'عن الجمعية ',
    ],
    'service' => [
        'title' => 'الخدمات',
        'title_singular' => 'الخدمة',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'description' => 'الوصف',
            'description_helper' => ' ',
            'image' => 'الصورة',
            'image_helper' => '( مقاس الصورة  المناسب العرض :500px - الطول :750px)',
            'created_at' => 'تاريخ الإضافة',
            'created_at_helper' => ' ',
            'updated_at' => 'تاريخ التعديل',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
        ],
    ],
    'beneficiary' => [
        'title'          => 'Beneficiaries',
        'title_singular' => 'Beneficiary',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'precentatge'        => 'Precentatge',
            'precentatge_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'project' => [
        'title' => 'المشاريع',
        'title_singular' => 'المشروع',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'title' => 'العنوان',
            'title_helper' => ' ',
            'short_description' => 'الوصف المختصر',
            'short_description_helper' => ' ',
            'description' => 'الوصف',
            'description_helper' => ' ',
            'image' => 'الصورة',
            'image_helper' => '( مقاس الصورة  المناسب العرض :750px - الطول :500px)',
            'inside_image' => '  صورة تفاصيل المشروع',
            'inside_image_helper' => '( مقاس الصورة  المناسب العرض :1920px - الطول :640px)',
            'created_at' => 'تاريخ الإضافة',
            'created_at_helper' => ' ',
            'updated_at' => 'تاريخ التعديل',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
        ],
    ],
    'mediaCenter' => [
        'title'          => ' المركز الأعلامي',
        'title_singular' => ' المركز الأعلامي',
    ],
    'news' => [
        'title' => 'الأخبار',
        'title_singular' => 'الخبر',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'name' => 'العنوان',
            'name_helper' => ' ',
            'image' => 'الصورة',
            'inside_image_helper' => '( مقاس الصورة  المناسب العرض :730px  - الطول :520px)',
            'date' => 'التاريخ',
            'date_helper' => ' ',
            'published' => 'الحالة',
            'published_helper' => ' ',
            'short_description' => 'الوصف المختصر',
            'short_description_helper' => ' ',
            'description' => 'الوصف',
            'description_helper' => ' ',
            'inner_image' => 'الصورة الداخلية',
            'inner_image_helper' => ' ',
            'created_at' => 'تاريخ الإضافة',
            'created_at_helper' => ' ',
            'updated_at' => 'تاريخ التعديل',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
            'inside_image'=>'صورة تفاصيل الخبر',
            'image_helper' => '( مقاس الصورة  المناسب العرض :770px  - الطول :550px)',
            'insideImage'=>'صورة تفاصيل',

        ],
    ],
    'saidAboutUs' => [
        'title' => 'قالوا عنا',
        'title_singular' => 'قال عنا',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'position' => 'المنصب',
            'position_helper' => ' ',
            'review' => 'المراجعة',
            'review_helper' => ' ',
            'image' => 'الصورة',
            'image_helper' => '( مقاس الصورة  المناسب العرض :100px  - الطول :100px)',
            'created_at' => 'تاريخ الإضافة',
            'created_at_helper' => ' ',
            'updated_at' => 'تاريخ التعديل',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
        ],
    ],
    'partner' => [
        'title' => 'الشركاء',
        'title_singular' => 'الشريك',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'link' => 'الرابط',
            'link_helper' => ' ',
            'image' => 'الصورة',
            'image_helper' => '( مقاس الصورة  المناسب العرض :300px  - الطول :200px)',
            'created_at' => 'تاريخ الإضافة',
            'created_at_helper' => ' ',
            'updated_at' => 'تاريخ التعديل',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
        ],
    ],

    'hawkma' => [
        'title' => 'حوكمه',
        'title_singular' => 'حوكمه',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'title' => 'العنوان',
            'title_helper' => ' ',
            'file' => 'الملف',
            'file_helper' => ' ',
            'icon' => 'الأيقونة',
            'icon_helper' => ' ',
            'published' => 'نشر',
            'published_helper' => ' ',
            'created_at' => 'تم الإنشاء في',
            'created_at_helper' => ' ',
            'updated_at' => 'تم التحديث في',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تم الحذف في',
            'deleted_at_helper' => ' ',
            'category' => 'الفئة',
            'category_helper' => ' ',
        ],
    ],
    'hawkamCategory' => [
        'title' => 'فئات الحوكمه',
        'title_singular' => 'فئة الحوكمه',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'created_at' => 'تم الإنشاء في',
            'created_at_helper' => ' ',
            'updated_at' => 'تم التحديث في',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تم الحذف في',
            'deleted_at_helper' => ' ',
        ],
    ],
    'hawkmaMangment' => [
        'title' => 'إدارة الحوكمه',
        'title_singular' => 'إدارة الحوكمه',
    ],
    'reportCategory' => [
        'title' => 'فئات التقارير',
        'title_singular' => 'فئة التقرير',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'type' => 'النوع',
            'type_helper' => ' ',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'published' => 'منشور',
            'published_helper' => ' ',
            'created_at' => 'تم الإنشاء في',
            'created_at_helper' => ' ',
            'updated_at' => 'تم التحديث في',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تم الحذف في',
            'deleted_at_helper' => ' ',
        ],
    ],
    'reportMangment' => [
        'title' => 'إدارة التقارير',
        'title_singular' => 'إدارة التقرير',
    ],
    'report' => [
        'title' => 'التقارير',
        'title_singular' => 'تقرير',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'type' => 'النوع',
            'type_helper' => ' ',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'file' => 'الملف',
            'file_helper' => ' ',
            'image' => 'الصورة',
            'image_helper' => ' ',
            'link' => 'الرابط',
            'link_helper' => ' ',
            'published' => 'منشور',
            'published_helper' => ' ',
            'category' => 'الفئة',
            'category_helper' => ' ',
            'created_at' => 'تم الإنشاء في',
            'created_at_helper' => ' ',
            'updated_at' => 'تم التحديث في',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تم الحذف في',
            'deleted_at_helper' => ' ',
        ],
    ],
    'reportMoney' => [
        'title' => 'التقارير الماليه',
        'title_singular' => 'التقرير المالي',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'part' => 'الجزء',
            'part_helper' => ' ',
            'year' => 'السنة',
            'year_helper' => ' ',
            'link' => 'الرابط',
            'link_helper' => ' ',
            'published' => 'نشر',
            'published_helper' => ' ',
            'file' => 'الملف',
            'file_helper' => ' ',
            'created_at' => 'تم الإنشاء في',
            'created_at_helper' => ' ',
            'updated_at' => 'تم التحديث في',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تم الحذف في',
            'deleted_at_helper' => ' ',
        ],
    ],
    'gallery' => [
        'title' => 'المعرض',
        'title_singular' => 'المعرض',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'image' => 'الصورة',
            'image_helper' => '( مقاس الصورة  المناسب العرض :350px  - الطول :250px)',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'status' => 'الحالة',
            'status_helper' => ' ',
            'created_at' => 'تم الإنشاء في',
            'created_at_helper' => ' ',
            'updated_at' => 'تم التحديث في',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تم الحذف في',
            'deleted_at_helper' => ' ',
        ],
    ],
    'volunteeringManagment' => [
        'title' => 'إدارة التطوع',
        'title_singular' => 'إدارة التطوع',
    ],
    'volunteer' => [
        'title' => 'المتطوع',
        'title_singular' => 'المتطوع',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'email' => 'البريد الإلكتروني',
            'email_helper' => ' ',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'phone' => 'الهاتف',
            'phone_helper' => ' ',
            'identity' => 'الهوية',
            'identity_helper' => ' ',
            'skills' => 'المهارات',
            'skills_helper' => ' ',
            'experience' => 'الخبرة',
            'experience_helper' => ' ',
            'volunteer_befor' => 'تطوع سابقًا',
            'volunteer_befor_helper' => ' ',
            'initiative_name' => 'اسم المبادرة',
            'initiative_name_helper' => ' ',
            'cv' => 'السيرة الذاتية',
            'cv_helper' => ' ',
            'created_at' => 'تم الإنشاء في',
            'created_at_helper' => ' ',
            'updated_at' => 'تم التحديث في',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تم الحذف في',
            'deleted_at_helper' => ' ',
        ],
    ],
    'volunteerGuide' => [
        'title' => 'دليل المتطوعين',
        'title_singular' => 'دليل المتطوع',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'published' => 'منشور',
            'published_helper' => ' ',
            'file' => 'الملف',
            'file_helper' => ' ',
            'title' => 'العنوان',
            'title_helper' => ' ',
            'icon' => 'الأيقونة',
            'icon_helper' => ' ',
            'created_at' => 'تم الإنشاء في',
            'created_at_helper' => ' ',
            'updated_at' => 'تم التحديث في',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تم الحذف في',
            'deleted_at_helper' => ' ',
        ],
    ],
    'membership' => [
        'title'          => 'الأعضاء',
        'title_singular' => 'الأعضاء',
    ],
    'membershipType' => [
        'title'          => 'أنواع العضوية',
        'title_singular' => 'أنواع العضوية',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'العنوان',
            'title_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'description'        => 'الوصف',
            'description_helper' => ' ',
            'file'               => 'الملف',
            'file_helper'        => ' ',
            'image'              =>'الصورة',
            'image_helper'       =>'',
        ],
    ],
    'member' => [
        'title' => 'الأعضاء',
        'title_singular' => 'عضو',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'type' => 'النوع',
            'type_helper' => ' ',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'job' => 'الوظيفة',
            'job_helper' => ' ',
            'nationality' => 'الجنسية',
            'nationality_helper' => ' ',
            'phone_number' => 'رقم الهاتف',
            'phone_number_helper' => ' ',
            'email' => 'البريد الإلكتروني',
            'email_helper' => ' ',
            'civial_registry' => 'رقم الهوية',
            'civial_registry_helper' => ' ',
            'address' => 'العنوان',
            'address_helper' => ' ',
            'facebook' => 'فيسبوك',
            'facebook_helper' => ' ',
            'instagram' => 'إنستاجرام',
            'instagram_helper' => ' ',
            'created_at' => 'تم الإنشاء في',
            'created_at_helper' => ' ',
            'updated_at' => 'تم التحديث في',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تم الحذف في',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contactMangment' => [
        'title'          => ' ادارة التواصل',
        'title_singular' => ' ادارة التواصل',
    ],
    'contact' => [
        'title' => 'جهات الاتصال',
        'title_singular' => 'جهة الاتصال',
        'fields' => [
            'id' => 'المعرف',
            'id_helper' => ' ',
            'name' => 'الاسم',
            'name_helper' => ' ',
            'phone_number' => 'رقم الهاتف',
            'phone_number_helper' => ' ',
            'email' => 'البريد الإلكتروني',
            'email_helper' => ' ',
            'message' => 'الرسالة',
            'message_helper' => ' ',
            'created_at' => 'تم الإنشاء في',
            'created_at_helper' => ' ',
            'updated_at' => 'تم التحديث في',
            'updated_at_helper' => ' ',
            'deleted_at' => 'تم الحذف في',
            'deleted_at_helper' => ' ',
        ],
    ],
    'subscribe' => [
        'title'          => 'الأشتراكات',
        'title_singular' => 'الأشتراك',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'email'             => 'البريد الإلكتروني',
            'email_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'name'              => 'الاسم',
            'name_helper'       => ' ',
            'project'           => 'المشروع',
            'project_helper'    => ' ',
            'phone'             => 'رقم الجوال',
            'phone_helper'      => ' ',
            'type'              => 'نوع الأشتراك المطلوب',
            'type_helper'       => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'الأعدادات العامة',
        'title_singular' => 'الأعدادات العامة',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'description'                   => 'وصف عن الموقع',
            'description_helper'            => ' ',
            'phone'                         => 'الجوال',
            'phone_helper'                  => ' ',
            'address'                       => 'العنوان',
            'address_helper'                => ' ',
            'email'                         => 'البريد الإلكتروني',
            'email_helper'                  => ' ',
            'facebook'                      => 'الفيسبوك',
            'facebook_helper'               => ' ',
            'twitter'                       => 'تويتر',
            'twitter_helper'                => ' ',
            'linkedin'                      => 'لينكد ان',
            'linkedin_helper'               => ' ',
            'youtubte'                      => 'اليوتيوب',
            'youtubte_helper'               => ' ',
            'about_description'             => 'نص أهم مبادرات الجمعية',
            'about_description_helper'      => ' ',
            'about_photo'                   => ' (الصفحة الرئيسية)صورة عن الموقع ',
            'about_photo_helper'            => '( مقاس الصورة  المناسب العرض :670px  - الطول :520px)',
            'about_inner_photo'             => ' (عن الجمعية)صورة عن الموقع ',
            'about_inner_photo_helper'      => '( مقاس الصورة  المناسب العرض :615px  - الطول :616)',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
            'site_name'                     => 'اسم الموقع ',
            'site_name_helper'              => ' ',
            'instagram'                     => 'انستجرام',
            'instagram_helper'              => ' ',
            'logo'                          => 'الشعار',
            'logo_helper'                   => ' ',
            'chairman_description'          => 'كلمة رئيس مجلس الأدارة ',
            'chairman_description_helper'   => ' ',
            'chairman_image'                => 'صورة رئيس مجلس الأدارة ',
            'chairman_image_helper'         => '( مقاس الصورة  المناسب العرض :445px  - الطول :480)',
            'donation_url'                  => ' رابط التبرع',
            'donation_url_helper'           => ' ',
            'counter_1_text'                => ' 1 نص عداد',
            'counter_1_text_helper'         => ' ',
            'counter_1_value'               => ' 1 قيمة عداد',
            'counter_1_value_helper'        => ' ',
            'counter_2_text'                => ' 2 نص عداد',
            'counter_2_text_helper'         => ' ',
            'counter_2_value'               => ' 2 قيمة عداد',
            'counter_2_value_helper'        => ' ',
            'counter_3_text'                =>  ' 3 نص عداد',
            'counter_3_text_helper'         => ' ',
            'counter_3_value'               => ' 3 قيمة عداد',
            'counter_3_value_helper'        => ' ',
            'short_descrption'              => 'وصف مختصر (للصفحة الرئيسية)',
            'short_descrption_helper'       => ' ',
            'inner_image'                   => ' الصورة الداخلية',
            'inner_image_helper'            => '( مقاس الصورة  المناسب العرض :1920px  - الطول :350)',
            'pinterest'                     => 'Pinterest',
            'pinterest_helper'              => ' ',
            'logo_white'                    => ' الشعار بخلفية بيضاء',
            'logo_white_helper'             => ' ',
            'vision'                        => 'الرؤية',
            'vision_helper'                 => ' ',
            'mission'                       => 'الرسالة',
            'mission_helper'                => ' ',
            'values'                        => 'الأهداف',
            'values_helper'                 => ' ',
            'snap_chat'                     => 'Snap Chat',
            'snap_chat_helper'              => ' ',
            'membership_conditions'         => 'Membership Conditions',
            'membership_conditions_helper'  => ' ',
            'loss_membership'               => 'Loss Membership',
            'loss_membership_helper'        => ' ',
            'commitments_membership'        => 'Commitments Membership',
            'commitments_membership_helper' => ' ',
            'scope'                         => 'نطاق الجمعية',
            'scope_helper'                  => ' ',
            'signature_image'               => 'Signature Image',
            'signature_image_helper'        => ' ',
            'initiative'                    => 'مبادراتنا ',
            'initiative_helper'             => ' ',
            'support_text'                  => 'Support Text',
            'support_text_helper'           => ' ',
        ],
    ],
    'director' => [
        'title'          => 'مجلس الأدارة',
        'title_singular' => 'مجلس الأدارة',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'الاسم',
            'name_helper'       => ' ',
            'position'          => 'المنصب',
            'position_helper'   => ' ',
            'image'             => 'الصورة',
            'image_helper'      =>  '( مقاس الصورة  المناسب العرض :230px  - الطول :230px)',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'support' => [
        'title'          => 'لماذا تدعمنا ',
        'title_singular' => 'لماذا تدعمنا ',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'reason'            => 'السبب',
            'reason_helper'     => ' ',
            'icon'              => 'الأيقونة',
            'icon_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'certificate' => [
        'title'          => 'الشهادات',
        'title_singular' => 'الشهادات',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'description'        => 'الوصف',
            'description_helper' => ' ',
            'image'              => 'الصورة',
            'image_helper' => '( مقاس الصورة  المناسب العرض :230px  - الطول :150px)',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'article' => [
        'title'          => 'Article',
        'title_singular' => 'Article',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'title'                    => 'Title',
            'title_helper'             => ' ',
            'short_description'        => 'Short Description',
            'short_description_helper' => ' ',
            'description'              => 'Description',
            'description_helper'       => ' ',
            'description_2'            => 'Description 2',
            'description_2_helper'     => ' ',
            'image'                    => 'Image',
            'image_helper'             => ' ',
            'inner_image'              => 'Inner Image',
            'inner_image_helper'       => ' ',
            'images'                   => 'Images',
            'images_helper'            => ' ',
            'writer_name'              => 'Writer Name',
            'writer_name_helper'       => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],

];
