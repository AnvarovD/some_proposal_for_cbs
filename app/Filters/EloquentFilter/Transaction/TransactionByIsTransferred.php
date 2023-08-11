<?php

namespace App\Filters\EloquentFilter\Transaction;

use App\Exceptions\Filter\FilterException;
use App\Filters\Interface\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class TransactionByIsTransferred implements FilterInterface
{
    /**
     * @param Builder $builder
     * @param mixed $value
     * @return Builder
     * @throws FilterException
     */
    public function filter(Builder $builder, mixed $value): Builder
    {
        if ($value === 1) {
            return $builder->whereColumn('credit_id', '!=', 'requested_credit_id');
        } elseif ($value === 0) {
            return $builder->whereColumn('credit_id', '=', 'requested_credit_id');
        }
        throw new FilterException();
    }

    public function getBindingName(): string
    {
        return 'is_transferred';
    }
}
