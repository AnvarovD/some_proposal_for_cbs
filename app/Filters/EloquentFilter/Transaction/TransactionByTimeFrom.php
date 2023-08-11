<?php

namespace App\Filters\EloquentFilter\Transaction;

use App\Filters\Interface\FilterInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class TransactionByTimeFrom implements FilterInterface
{
    public function filter(Builder $builder, mixed $value): Builder
    {
        return $builder->whereDate('date', '>=', Carbon::parse($value));
    }

    public function getBindingName(): string
    {
        return 'time_from';
    }
}
