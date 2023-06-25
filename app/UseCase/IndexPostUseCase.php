<?php

namespace App\UseCase;

use App\Entitys\PostEntity;
use App\Repositories\NewRepository\BaseEloquentRepository\BaseRepositoryInterface;
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

    public function perform(): LengthAwarePaginator
    {
        static::$entity = PostEntity::class;
        static::$payload = 'samples';
        $this->saveUseActivity();

        return $this->baseRepository
            ->setModel(PostEntity::getModel())
            ->all()
            ->paginate();
    }


}
