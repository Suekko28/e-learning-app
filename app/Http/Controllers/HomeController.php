<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Learning;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $learning = DB::table('learnings')->latest()->paginate(4);
        $act = DB::table('activities')->latest()->paginate(4);
        $news = DB::table('news')->latest()->paginate(4);
        return view('home', compact('learning', 'act', 'news'));

    }

    //Fungsi untuk Learning
    public function learning_index(Learning $learning)
    {
        $learning = Learning::latest()->paginate(8);
        return view('learning.index', compact('learning'));
    }

    public function learning_show($id)
    {
        $learning = Learning::findOrFail($id);
        $latest = DB::table('learnings')->latest('id')->paginate(4);
        return view('learning.show', compact('learning', 'latest'));
    }

    //Fungsi untuk Kegiatan
    public function kegiatan_index(Activity $act)
    {
        $act = Activity::latest()->paginate(8);
        return view('act.index', compact('act'));
    }

    public function kegiatan_show($id)
    {
        $act = Activity::findOrFail($id);
        $latest = DB::table('activities')->latest('id')->paginate(4);
        return view('act.show', compact('act', 'latest'));
    }

    //Fungsi untuk Berita
    public function berita_index(News $news)
    {
        $news = News::latest()->paginate(8);
        return view('news.index', compact('news'));
    }  

    public function berita_show($id)
    {
        $news = News::findOrFail($id);
        $latest = DB::table('news')->latest('id')->paginate(8);
        return view('news.show', compact('news','latest'));
    }



}
