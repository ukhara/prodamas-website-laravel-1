<?php

namespace App\Http\Controllers;
use App\Models\Audio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AudioController extends Controller
{
    public function index(){
        // $audios = Audio::all();

        return view('audio.index');
    }
}
