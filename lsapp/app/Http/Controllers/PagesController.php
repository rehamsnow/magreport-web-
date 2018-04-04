<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to MAG-REPORT!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    //public function about(){
        //$title = 'About Us';
        //return view('pages.about')->with('title', $title);
    //}

    public function newsandannouncements(){
        $data = array(
            'title' => 'News & Announcements',
            'newsandannouncements' => ['Peace & Order', 'Recreation', 'Health', 'Others']
        );
        return view('pages.newsandannouncements')->with($data);
    }
    
}
