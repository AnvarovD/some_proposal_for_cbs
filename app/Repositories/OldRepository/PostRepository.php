<?php

namespace App\Repositories\OldRepository;

use App\Models\Post;
use App\Repositories\OldRepository\Interface\IPostRepository;

class PostRepository implements IPostRepository
{

    /**
     * @param Post $post
     * @return void
     */
    public function create(Post $post): void
    {
       $post->save();
    }

    /**
     * @param int $id
     * @return Post
     */
    public function fetchById(int $id): Post
    {
        return Post::query()->find($id);
    }

    /**
     * @param Post $post
     * @return void
     */
    public function update(Post $post): void
    {
        $post->save();
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        Post::query()->find($id)->delete();
    }
}
