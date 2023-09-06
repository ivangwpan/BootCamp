<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class MicrosoftController extends Controller
{
    //

    public function microsoft()
    {
        // 原型
        // $news = News::get();
        // 找出最新三筆
        // $NewestNews = News::first()->take(3)->get();
        // 找出最舊三筆
        // $OldestNews = News::latest()->take(3)->get();
        // 找出隨機三筆
        $news = News::inRandomOrder()->take(4)->get();
        // foreach ($RandomNews as $key => $value) {
        //     # code...
        //     dump($value->title);
        // }
        // dd();

        // dd($news,$NewestNews,$OldestNews,$RandomNews);
        return view('Microsoft',['name' => $news]);
    }
}
