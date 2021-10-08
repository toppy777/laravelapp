<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Tag;

class Blog extends Model
{
    use HasFactory;

    public function tags()
    {
        // return $this->hasMany(Tag::class);

        return $this->belongsToMany(Tag::class, 'tag_relations');
    }
}
