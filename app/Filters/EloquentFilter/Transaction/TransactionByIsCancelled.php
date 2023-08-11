<?php

namespace App\Filters\EloquentFilter\Transaction;

use App\Filters\Interface\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class TransactionByIsCancelled implements FilterInterface
{
    public function filter(Builder $builder, mixed $value): Builder
    {
        return $builder->where('is_cancelled', '=', $value);
    }

    public function getBindingName(): string
    {
        return 'is_cancelled';
    }
}
