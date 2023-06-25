<?php

namespace App\Repositories\OldRepository\Interface;


use App\Models\Post;

interface IPostRepository
{
    /**
     * @param Post $post
     */
    public function create(Post $post);

    /**
     * @param int $id
     * @return Post
     */
    public function fetchById(int $id): Post;

    /**
     * @param Post $post
     * @return void
     */
    public function update(Post $post): void;

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void;
}
