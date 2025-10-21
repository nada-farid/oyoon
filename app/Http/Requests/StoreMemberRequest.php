<?php

namespace App\Http\Requests;

use App\Models\Member;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMemberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'max:255',
            ],
            'job' => [
                'string',
                'nullable',
                'max:255',
            ],
            'employer' => [
                'string',
                'nullable',
                'max:255',
            ],
            'email' => [
                'email',
                'required',
                'max:255',
            ],
            'phone_number' => [
                'required',
                'regex:/^05\d{8}$/',
            ],
            'identity_number' => [
                'required',
                'regex:/^1[0-9]{9}$/',
            ],
            'identity_date' => [
                'required',
                'date_format:Y-m-d',
            ],
            'type_id' => [
                'required',
                'integer',
                'exists:membership_types,id',
            ],
            'date_of_birth' => [
                'nullable',
                'date_format:Y-m-d',
            ],
            'residence' => [
                'string',
                'nullable',
                'max:255',
            ],
            'neighborhood' => [
                'string',
                'nullable',
                'max:255',
            ],
            'address' => [
                'string',
                'nullable',
                'max:500',
            ],
            'agreement' => [
                'required',
                'accepted',
            ],
            'photo' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048',
            ],
        ];
    }
     public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب',
            'name.max' => 'الاسم يجب أن يكون أقل من 255 حرف',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'البريد الإلكتروني غير صحيح',
            'email.max' => 'البريد الإلكتروني يجب أن يكون أقل من 255 حرف',
            'phone_number.required' => 'رقم الجوال مطلوب',
            'phone_number.regex' => 'رقم الجوال يجب ان يكون 10 أرقام ويبدأ ب 05',
            'identity_number.required' => 'رقم الهوية مطلوب',
            'identity_number.regex' => 'رقم الهوية يجب ان يكون 10 أرقام ويبدأ ب 1',
            'identity_date.required' => 'تاريخ الهوية مطلوب',
            'identity_date.date_format' => 'تاريخ الهوية غير صحيح',
            'type_id.required' => 'نوع العضوية مطلوب',
            'type_id.exists' => 'نوع العضوية المحدد غير موجود',
            'date_of_birth.date_format' => 'تاريخ الميلاد غير صحيح',
            'agreement.required' => 'يجب الموافقة على شروط العضوية',
            'agreement.accepted' => 'يجب الموافقة على شروط العضوية',
            'photo.image' => 'يجب أن يكون الملف صورة',
            'photo.mimes' => 'يجب أن تكون الصورة من نوع: jpeg, png, jpg, gif',
            'photo.max' => 'يجب أن يكون حجم الصورة أقل من 2 ميجابايت',
        ];
    }
}
