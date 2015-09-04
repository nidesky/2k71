<?php
namespace Ik47\Repositories;

use Ik47\Models\Post;
use Ik47\Repositories\Contracts\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function all()
    {
        return $this->post->with('user')->get();
    }
}