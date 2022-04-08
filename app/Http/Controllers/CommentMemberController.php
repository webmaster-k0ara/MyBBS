<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\CommentMember;


use Illuminate\Http\Request;

class CommentMemberController extends Controller
{
    public function storeMember(Request $request,Member $member)
    {

        $request->validate([
            'body' => 'required',
        ]);

        $commentMember = new CommentMember;
        $commentMember->member_id = $member->id;
        $commentMember->body = $request->body;
        $commentMember->save();

        return redirect()
        ->route('member.member',$member);
    }
    public function destroyMemberComment(CommentMember $commentMember)
    {
        $commentMember->delete();

        return redirect()
        ->route('member.member',$commentMember->member);
    }
}
