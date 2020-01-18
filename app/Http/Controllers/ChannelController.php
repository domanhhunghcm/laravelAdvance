<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
class ChannelController extends Controller
{
    public function index()
    {
        // $channel=Channel::get();
        // return view('channel.channel',compact('channel'));
        return view('channel.channel');
    }
}
