<?php
namespace Ik47\Repositories;

use Ik47\Models\User;

class UserRepository
{

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 检测用户是否存在
     *
     * @param array $info
     * @return bool
     */
    public function checkExists(array $info)
    {
        $user = $this->user->where($info)->first();

        if (!$user) {
            return false;
        }

        return $user;
    }

    /**
     * 创建用户
     *
     * @param array $info
     * @return static
     */
    public function create(array $info)
    {
        return $this->user->create($info);
    }

}
