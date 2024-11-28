<?php
namespace App\Repositories;

interface UserRepositoryInterface {
    public function all();
    public function find($id);
}



