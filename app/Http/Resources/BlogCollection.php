<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BlogCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection;

        // return [
        //     'id' => $this->collection->id,
        //     'title' => $this->collection->title,
        //     'content' => $this->collection->content,
        //     'created_at' => $this->collection->created_at,
        //     'updated_at' => $this->collection->updated_at,
        //     'tags' => [
        //         'aasdf' => 'asdf',
        //     ]
        // ];
    }
}
