<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = News::orderBy('id', 'desc')->paginate(5);
        return view('admin.news.news', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
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
        $image->storeAs('public/news', $image->hashName());

        $data = [
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => $request->thumbnail,
        ];

        News::create($data);
        return redirect()->to('admin/berita')->with('success', 'Berhasil Menambahkan Berita');
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
        $data = News::where('id', $id)->first();
        return view ('admin.news.edit')->with('data', $data);
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

        $data = News::findOrFail($id);

        if($request->hasFile('image')){
            
            $image = $request->file('image');
            $image->storeAs('public/news', $image->hashName());

            Storage::delete('public/news/'. $data->image);

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

        return redirect()->to('admin/berita')->with('success', 'Berhasil Mengupdate Berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = News::findOrFail($id);

        Storage::delete('public/news/'. $data->image);

        $data->delete();

        return redirect()->to('admin/berita')->with('delete', 'Berhasil Menghapus Berita');
    }
}
