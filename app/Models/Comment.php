<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        //Le Commentaire appatient a 1 Post
        return $this->belongsTo(Post::class);
    }
}
