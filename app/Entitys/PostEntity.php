<?php

namespace App\Entitys;

use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;

class PostEntity
{
    public static function getModel(): Builder
    {
        return Post::query();
    }
}
