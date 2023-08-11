<?php

namespace App\Filters\EloquentFilter\Transaction;

use App\Filters\Interface\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class TransactionByCreditIdOrRequestedCreditId implements FilterInterface
{
    public function filter(Builder $builder, mixed $value): Builder
    {
        return  $builder->where(function (Builder $query) use ($value) {
            $query->where('credit_id', $value)->orWhere('requested_credit_id', $value);
        });
    }

    public function getBindingName(): string
    {
        return 'credit_id_or_requested_credit_id';
    }
}
