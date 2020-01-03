<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCommentary extends Model
{
    protected $fillable = [
        'author_name',
        'author_email',
        'author_comment',
    ];
}
