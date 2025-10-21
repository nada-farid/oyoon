<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MembershipType;

class MembershipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $membershipTypes = [
            [
                'title' => 'عضوية عادية',
                'description' => 'عضوية عادية في الجمعية العمومية تمنح العضو الحق في المشاركة في الاجتماعات والتصويت على القرارات المهمة للجمعية.',
            ],
            [
                'title' => 'عضوية مؤسسة',
                'description' => 'عضوية مؤسسة مخصصة للجهات والمؤسسات التي تساهم في دعم أهداف الجمعية وتطوير المجتمع.',
            ],
            [
                'title' => 'عضوية شرفية',
                'description' => 'عضوية شرفية تمنح للأشخاص الذين قدموا إسهامات متميزة في خدمة المجتمع أو في مجال عمل الجمعية.',
            ],
            [
                'title' => 'عضوية داعمة',
                'description' => 'عضوية داعمة للأشخاص الذين يقدمون الدعم المالي أو المعنوي للجمعية ويساهمون في تحقيق أهدافها.',
            ],
            [
                'title' => 'عضوية استشارية',
                'description' => 'عضوية استشارية مخصصة للخبراء والمتخصصين الذين يقدمون المشورة والخبرة في المجالات المختلفة.',
            ],
            [
                'title' => 'عضوية شابة',
                'description' => 'عضوية شابة مخصصة للشباب من سن 18 إلى 35 سنة بهدف تفعيل دورهم في المجتمع وتنمية مهاراتهم.',
            ],
        ];

        foreach ($membershipTypes as $type) {
            MembershipType::create($type);
        }
    }
}