<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface {
    protected $model;

    public function all() {
        return $this->model->all();
    }

    public function find($id) {
        return $this->model->where('id', $id)->first();
    }

    public function create(array $data = []) {
    }

    public function update($id, array $data = []) {
    }

    public function delete($id) {
    }
}