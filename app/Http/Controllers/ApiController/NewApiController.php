<?php

namespace App\Http\Controllers\ApiController;

use App\Entitys\PostEntity;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Repositories\NewRepository\BaseEloquentRepository\BaseRepositoryInterface;
use App\UseCase\IndexPostUseCase;

class NewApiController extends Controller
{
    public function __construct(
        private BaseRepositoryInterface $baseRepository,
        private IndexPostUseCase $indexPostUseCase
    )
    {
    }


    public function show(int $id)
    {
       return $this->baseRepository->setModel(PostEntity::getModel())->show($id)->first();
    }

    public function index()
    {
       return $this->indexPostUseCase->perform();
    }

    public function getPost()
    {
        return $this->baseRepository->setModel(PostEntity::getModel())->all()->get();
    }


}
