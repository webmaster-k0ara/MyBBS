<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Member;

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

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ],[
            'title.required' => 'タイトルは入れてよー',
            'title.min' => 'タイトルすくなっ',
            'body.required' => '内容ないじゃんかー',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.index');
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

    public function storeMember(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'profile' => 'required',
        ],[
            'name.required' => '名前は入れてよー',
            'name.min' => '名前すくなっ',
            'profile.required' => '内容ないじゃんかー',
        ]);

        $member = new Member();
        $member->name = $request->name;
        $member->profile = $request->profile;
        $member->save();

        return redirect()
            ->route('company');
    }


}
