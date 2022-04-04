<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Member;
use App\Http\Requests\PostRequest;
use App\Http\Requests\Memberrequest;

class PostController extends Controller
{
    // posts
    public function index()
    {
        $posts = Post::latest()->get();

        return view('index')
            ->with(['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show')
            ->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit')
            ->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.show',$post);
    }


    // member
    public function company()
    {
        $members = Member::latest()->get();
        return view('company.index')
            ->with(['member' => $members]);
    }

    public function member(Member $member)
    {
        return view('company.member.index')
            ->with(['member' => $member]);
    }

    public function createMember()
    {
        return view('company.member.createMember');
    }

    public function storeMember(MemberRequest $request)
    {
        $member = new Member();
        $member->name = $request->name;
        $member->profile = $request->profile;
        $member->save();

        return redirect()
            ->route('company');
    }

    public function editMember(Member $member)
    {
        return view('company.member.edit')
            ->with(['member' => $member]);
    }

    public function updateMember(MemberRequest $request, Member $member)
    {
        $member->name = $request->name;
        $member->profile = $request->profile;
        $member->save();

        return redirect()
            ->route('member.member',$member);
    }



}
