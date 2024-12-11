<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'content'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs';
}
