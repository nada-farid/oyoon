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
        $member = Member::create($request->all());

        Alert::success(trans('flash.store.title'),trans('flash.store.body'));

        return redirect()->route('frontend.membership',$request->type);
    }
}
