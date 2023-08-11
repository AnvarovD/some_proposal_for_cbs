<?php

namespace App\Filters\EloquentFilter\Transaction;

use App\Filters\Interface\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class TransactionByPaymentMethodKeys implements FilterInterface
{
    public function filter(Builder $builder, mixed $value): Builder
    {
        return $builder->where('payment_method_key', $value);
    }

    public function getBindingName(): string
    {
        return 'payment_method_keys';
    }
}
