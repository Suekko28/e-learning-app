<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Learning;
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
        return view('home',compact('learning', 'act', 'news'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

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

    public function kegiatan_index(Activity $act)
    {
        $act = Learning::latest()->paginate(8);
        return view('act.index', compact('act'));
    }

    public function kegiatan_show($id)
    {
        $act = Learning::findOrFail($id);
        $latest = DB::table('learnings')->latest('id')->paginate(4);
        return view('act.show', compact('act', 'latest'));
    }

    

}
