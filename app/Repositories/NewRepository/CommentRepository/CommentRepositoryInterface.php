<?php

namespace App\Repositories\NewRepository\CommentRepository;

use App\Repositories\NewRepository\BaseEloquentRepository\BaseRepositoryInterface;

interface CommentRepositoryInterface extends BaseRepositoryInterface
{
    public function getDisLikeComment(): BaseRepositoryInterface;
}
