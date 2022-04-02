<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        'Title A',
        'Title B',
        'Title C',
    ];
    private $member = [
        '山田　太郎',
        '鈴木　健太',
        '田中　一郎',
    ];
    public function index()
    {
        return view('index')
            ->with(['posts' => $this->posts]);
    }
    public function company()
    {
        return view('company')
            ->with(['member' => $this->member]);
    }
    public function show($id)
    {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
    public function member($id)
    {
        return view('member.member')
            ->with(['member' => $this->member[$id]]);
    }
}
