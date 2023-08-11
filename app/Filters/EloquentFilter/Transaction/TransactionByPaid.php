<?php

namespace App\Filters\EloquentFilter\Transaction;

use App\Filters\Interface\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class TransactionByPaid implements FilterInterface
{
    public function filter(Builder $builder, mixed $value): Builder
    {
        return $builder->where('paid', $value);
    }

    public function getBindingName(): string
    {
        return 'paid';
    }
}
