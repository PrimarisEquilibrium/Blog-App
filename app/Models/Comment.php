<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'blogs';

    /**
     * A comment belongs to a post
     */
    public function post()
    {
        return $this->belongsTo(Blog::class);
    }
}
