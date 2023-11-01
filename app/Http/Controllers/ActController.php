<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Activity::orderBy('id', 'desc')->paginate(5);
        return view('admin.act.act', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.act.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'title'=> 'required|min:5',
            'content' => 'required|min:10',
            'thumbnail' => 'required|min:5|max:200',
        ],[
            'image.required' => 'Gambar wajib diisi',
            'title.required' => 'Judul wajib diisi',
            'content.required' => 'Materi wajib diisi',
            'thumbnail.required' => 'Thumbnail wajib diisi',
            'thumbnail.max' => 'Thumbnail tidak boleh lebih dari 200 karakter'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/act', $image->hashName());

        $data = [
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => $request->thumbnail,
        ];

        Activity::create($data);
        return redirect()->to('admin/kegiatan')->with('success', 'Berhasil Menambahkan Kegiatan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Activity::where('id', $id)->first();
        return view ('admin.act.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'title'=> 'required|min:5',
            'content' => 'required|min:10',
            'thumbnail' => 'required|min:5|max:200',
        ]);

        $data = Activity::findOrFail($id);

        if($request->hasFile('image')){
            
            $image = $request->file('image');
            $image->storeAs('public/act', $image->hashName());

            Storage::delete('public/act/'. $data->image);

            $data->update([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => $request->thumbnail,
            ]);
        } else {
            $data->update([
                'title' => $request->title,
                'content' => $request->content,
                'thumbnail' => $request->thumbnail,
            ]);
        }

        return redirect()->to('admin/kegiatan')->with('success', 'Berhasil Mengupdate Kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Activity::findOrFail($id);

        Storage::delete('public/act/'. $data->image);

        $data->delete();

        return redirect()->to('admin/kegiatan')->with('delete', 'Berhasil Menghapus Kegiatan');
    }
}
