<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'blog_id', 'content'];

    protected $table = 'comments';

    /**
     * A comment belongs to a blog
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
