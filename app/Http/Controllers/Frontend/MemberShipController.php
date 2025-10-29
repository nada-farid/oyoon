<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMemberRequest;
use App\Models\Member;
use App\Models\MembershipType;
use Illuminate\Http\Request;
use Alert;

class MemberShipController extends Controller
{
    //
    public function types()
    {
        $types = MembershipType::get();
        return view('frontend.membership-types', compact('types'));
    }

    public function guides()
    {
        return view('frontend.membership-guides');
    }


    public function membership()
    {
        $types = MembershipType::get();
        return view('frontend.membership',compact('types'));
    }


    public function store(StoreMemberRequest $request)
    {
        // Set is_active to false by default for frontend registrations
        $data = $request->all();
        $data['is_active'] = false;
        
        $member = Member::create($data);

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $member->addMediaFromRequest('photo')
                ->toMediaCollection('photo');
        }

        Alert::success('تم التسجيل بنجاح', 'تم إرسال طلب العضوية بنجاح وسيتم مراجعته قريباً');

        return redirect()->route('frontend.membership');
    }

    public function members()
    {
        $members = Member::with('type')->active()->get();
        return view('frontend.members', compact('members'));
    }
}
