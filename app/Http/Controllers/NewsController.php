<?php
// app/Http/Controllers/NewsController.php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', ['news' => $news]);
    }
    public function apiIndex()
    {
        $news = News::all(); // Obtiene todas las noticias
        return response()->json($news); // Devuelve las noticias en formato JSON
    }
    public function create()
    {
        $news = News::all();
        return view('news.create', compact('news'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $news = new News();
        $news->title = $validated['title'];
        $news->description = $validated['description'];
        $news->image = $imagePath;

        $news->save();

        return redirect()->route('news.create');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        Storage::delete('public/' . $news->image);
        $news->delete();
        return redirect()->route('news.create');
    }
}
