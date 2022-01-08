<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return User::class;
    }
    
    public function getUserLogin()
    {
        return $this->model->where('name', 'admin')->first();
    }
}

