<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
class postController extends Controller
{
    public function index()
    {
        // $channel=Channel::get();
        // return view('post.post',compact('channel'));
        return view('post.post');
    }
}
