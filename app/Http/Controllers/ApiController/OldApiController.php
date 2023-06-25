<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Repositories\OldRepository\Interface\ICommentRepository;
use App\Repositories\OldRepository\Interface\IPostRepository;

class OldApiController extends Controller
{

    public function __construct(
        private IPostRepository $IPostRepository,
        private ICommentRepository $ICommentRepository,
    )
    {
    }


    public function show(int $id): Post
    {
        return $this->IPostRepository->fetchById($id);
    }


    public function delete(int $id): void
    {
        $this->IPostRepository->delete($id);
    }


    public function showComment(int $id): Post
    {
        return $this->ICommentRepository->fetchById($id);
    }


    public function deleteComment(int $id): void
    {
        $this->ICommentRepository->delete($id);
    }




}
