<?php

namespace App\Models;

use App\Filters\Trait\FilterTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, FilterTrait;
}
