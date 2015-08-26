<?php
namespace Ik47\Repositories;

use Ik47\Models\Post;

class PostRepository
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