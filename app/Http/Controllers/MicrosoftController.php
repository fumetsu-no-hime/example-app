<?php

namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MicrosoftController extends Controller
{
    public function microsoft()
    {
        // $news = DB::table('news')->get();
        $news = News::get();

        // $q1 = News::where('id','<','4')->get();
        $q1 = News::orderBy('id', 'asc')->take(3)->get();

        // $q2 = News::where('id','>'3')->get();
        $q2 = News::orderBy('id', 'desc')->take(4)->get();

        $q3 = News::inRandomOrder()->take(4)
            ->get();

        //dump and die
        // dd($news, $q1, $q2, $q3);

        // foreach ($q3 as $key => $value) {
        //     dump($value -> content);
        // }

        // dd();

        return view('microsoft.microsoft', ['news' => $q3, 'data' => $q2]);
    }
}
