<?php

namespace App\UseCase;

use App\Entitys\PostEntity;
use App\Filters\EloquentFilter\Transaction\TransactionByCreditId;
use App\Filters\EloquentFilter\Transaction\TransactionByCreditIdOrRequestedCreditId;
use App\Filters\EloquentFilter\Transaction\TransactionByDate;
use App\Filters\EloquentFilter\Transaction\TransactionByIsCancelled;
use App\Filters\EloquentFilter\Transaction\TransactionByIsTransferred;
use App\Filters\EloquentFilter\Transaction\TransactionByLabel;
use App\Filters\EloquentFilter\Transaction\TransactionByPaid;
use App\Filters\EloquentFilter\Transaction\TransactionByPaymentMethodKeys;
use App\Filters\EloquentFilter\Transaction\TransactionByPaymentType;
use App\Filters\EloquentFilter\Transaction\TransactionByTimeFrom;
use App\Filters\EloquentFilter\Transaction\TransactionByTimeTo;
use App\Filters\EloquentFilter\Transaction\TransactionCreditByContractNumberFilter;
use App\Models\Post;
use App\Modules\Credits\Models\Transaction;
use App\Repositories\NewRepository\BaseEloquentRepository\BaseRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class IndexPostUseCase extends BaseUseCase
{
    protected static $type = "samples";
    protected static $description = 'samples';
    public function __construct(
        private BaseRepositoryInterface $baseRepository,
    )
    {
    }

    public function perform(Request $request): LengthAwarePaginator
    {
        $query = Post::query()
            ->newFilter(
                $request,
                [
                    TransactionByDate::class,
                ]
            )->get();
//        static::$entity = PostEntity::class;
//        static::$payload = 'samples';
//        $this->saveUseActivity();
//
//        return $this->baseRepository
//            ->setModel(PostEntity::getModel())
//            ->all()
//            ->paginate();
    }


}
