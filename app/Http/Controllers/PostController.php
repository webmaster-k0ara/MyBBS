<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Member;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('index')
            ->with(['posts' => $posts]);
    }
    public function company()
    {
        $members = Member::latest()->get();
        return view('company')
            ->with(['member' => $members]);
    }
    public function show(Post $post)
    {
        return view('posts.show')
            ->with(['post' => $post]);
    }
    public function member(Member $member)
    {
        return view('member.member')
            ->with(['member' => $member]);
    }
}
