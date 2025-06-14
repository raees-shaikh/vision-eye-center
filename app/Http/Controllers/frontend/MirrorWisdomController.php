<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MirrorWisdom;

class MirrorWisdomController extends Controller
{
    public function index(){
        $iframelinks=MirrorWisdom::simplePaginate(9);
        return view('mirror-wisdom-reflected',compact('iframelinks'));
    }
}
