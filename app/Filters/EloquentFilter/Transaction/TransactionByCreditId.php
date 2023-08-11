<?php

namespace App\Filters\EloquentFilter\Transaction;

use App\Filters\Interface\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class TransactionByCreditId implements FilterInterface
{
    public function filter(Builder $builder, mixed $value): Builder
    {
        return $builder->where('credit_id', $value);
    }

    public function getBindingName(): string
    {
        return 'credit_id';
    }
}
