<?php

namespace App\Repositories\NewRepository\CommentRepository;

use App\Repositories\NewRepository\BaseEloquentRepository\BaseRepository;
use App\Repositories\NewRepository\BaseEloquentRepository\BaseRepositoryInterface;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    public function getDisLikeComment(): BaseRepositoryInterface
    {
       $this->model->where('like','dislike');
       return $this;
    }
}
