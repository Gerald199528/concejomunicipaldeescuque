<?php


namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', ['videos' => $videos]);
    }

    public function create()
    {
        $videos = Video::all();
        return view('videos.create', compact('videos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'video' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime'
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');

        $video = new Video();
        $video->title = $validated['title'];
        $video->description = $validated['description'];
        $video->video = $videoPath;
        $video->save();

        return redirect()->route('videos.create');
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        Storage::delete('public/' . $video->video);
        $video->delete();
        return redirect()->route('videos.create');
    }

    public function apiIndex()
    {
        return Video::all();
    }
}
