<?php

namespace App\Filters\EloquentFilter\Transaction;

use App\Filters\Interface\FilterInterface;
use App\Helpers\Regexr;
use Illuminate\Database\Eloquent\Builder;

class TransactionCreditByContractNumberFilter implements FilterInterface
{
    public function filter(Builder $builder, mixed $value)
    {
        if (preg_match(Regexr::contractNumber(), $value)) {
            return  $builder->whereHas('credit', function ($query) use ($value) {
                $query->where('contract_number', $value);
            });
        }
    }

    public function getBindingName()
    {
        return 'q';
    }
}
