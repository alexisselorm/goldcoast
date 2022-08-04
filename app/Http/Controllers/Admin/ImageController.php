<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;

class ImageController extends Controller
{
    public function store()
    {
        $single_news = new News();
        $single_news->id = 0;
        $single_news->exists = true;
        $image = $single_news->addMediaFromRequest('upload')->toMediaCollection('images');

        return response()->json([
            'url' => $image->getUrl('thumb'),
        ]);
    }
}
