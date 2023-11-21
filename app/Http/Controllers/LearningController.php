<?php

namespace App\Http\Controllers;

use App\DataTables\DataDataTable;
use App\Models\Learning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class LearningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, DataDataTable $dataTable)
    {
        $data = Learning::orderBy('id', 'desc')->paginate(5);
        return view('admin.e-learning.materi', compact('data'));

        // if (request()->ajax()) {
        //     $data = Learning::query()    ;
        //     return DataTables::of($data)->make();
        // }
        // return view('admin.e-learning.materi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.e-learning.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'thumbnail' => 'required|min:5|max:200',
            'drive' => 'required|min:5',
        ], [
            'image.required' => 'Gambar wajib diisi',
            'title.required' => 'Judul wajib diisi',
            'content.required' => 'Materi wajib diisi',
            'thumbnail.required' => 'Thumbnail wajib diisi',
            'drive.required' => 'Link Drive wajib diisi',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/images', $image->hashName());

        $data = [
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => $request->thumbnail,
            'drive' => $request->drive,
        ];

        Learning::create($data);
        return redirect()->to('admin/materi')->with('success', 'Berhasil Menambahkan Materi');

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
        $data = Learning::where('id', $id)->first();
        return view('admin.e-learning.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'thumbnail' => 'required|min:5|max:200',
            'drive' => 'required|min:5',
        ]);

        $data = Learning::findOrFail($id);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image->storeAs('public/images', $image->hashName());

            Storage::delete('public/images/' . $data->image);

            $data->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content,
                'thumbnail' => $request->thumbnail,
                'drive' => $request->drive,
            ]);
        } else {
            $data->update([
                'title' => $request->title,
                'content' => $request->content,
                'thumbnail' => $request->thumbnail,
                'drive' => $request->drive,
            ]);
        }

        return redirect()->to('admin/materi')->with('success', 'Berhasil Mengupdate Materi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Learning::findOrFail($id);

        Storage::delete('public/images/' . $data->image);

        $data->delete();

        return redirect()->to('admin/materi')->with('delete', 'Berhasil Menghapus Materi');
    }

    public function search_admin_learning(Request $request)
    {
        $search = $request->search;

        $learning = DB::table('learnings')
        ->where('title','like','%'. $search .'%')
        ->paginate(8);

        if($learning->count()==0){
            return view('admin.e-learning.search_admin', ['kosong'=>true]);
        }

        return view('admin.e-learning.search_admin', compact('learning'),['kosong'=>false]);
    }

   
}
