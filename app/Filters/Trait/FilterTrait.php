<?php

namespace App\Filters\Trait;

use App\Filters\BaseFilter\BaseFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait FilterTrait
{
    public function scopeFilter($builder, Request $request, array $filters): Builder
    {
        return (new BaseFilter($builder, $request, $filters))->apply();
    }
}
