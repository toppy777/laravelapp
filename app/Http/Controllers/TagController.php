<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tag;

class TagController extends Controller
{
    public function store(Request $request)
    {
        $tag = new Tag;
        $tag->name = $request->name;
        $tag->save();
        return response('', 201);
    }
    
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();
        return response('', 204);
    }

    public function delete($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return response('', 204);
    }

}
