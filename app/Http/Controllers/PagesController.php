<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PagesController extends Controller
{
    public function home() {

        return view('welcome', [
            'heading' => 'Žena & Žrádlo',
            'text' => 'Only blog you need!'
        ]);
    }

    public function about() {
        return view('about', [
            'heading' => 'About me',
            'text' => 'some stuff about me ...'
        ]);
    }

//    public function blog() {
//        $articles = Post::all();
//        $user = User::first();
//        return view('show')->with('articles', $articles);
//    }

    public function recipes() {
        return view('recipes', [
            'text' => 'eat it!!'
        ]);
    }

}
