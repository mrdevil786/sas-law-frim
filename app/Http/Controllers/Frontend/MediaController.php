<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 6;
        $routePrefix = 'site.single-media';
        if ($request->ajax()) {
            $allData = Media::latest()->with('author')->paginate($perPage);
            return view('site.includes.global-card', ['allData' => $allData, 'routePrefix' => $routePrefix])->render();
        }
        $allData = Media::latest()->with('author')->paginate($perPage);
        return view('site.media', compact('allData','routePrefix'));
    }
    public function single_media($slug)
    {
        $media = Media::where('slug', $slug)->firstOrFail();
        return view('site.single-media', compact('media'));
    }
}
