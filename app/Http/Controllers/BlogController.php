<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return response('', 201);
    }
    
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return response('', 204);
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return response('', 204);
    }
}
