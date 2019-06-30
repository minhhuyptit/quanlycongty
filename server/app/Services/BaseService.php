<?php

namespace App\Services;

use App\Configs\Messages;
use App\Services\Contracts\ServiceInterface;

abstract class BaseService implements ServiceInterface {
    protected $repository;

    public function all() {
        return $this->repository->all();
    }

    public function find($id) {
        $res = $this->repository->find($id);
        if (empty($res)) {
            return $this->response(404, ID_NOT_FOUND);
        }
        return $this->response(200, GET_SUCCESS, $res);
    }
    public function create(array $data = []) {
    }

    public function update($id, array $data = []) {
    }

    public function delete($id) {
    }
    public function removeElements($array, $listUnset) {
        foreach ($listUnset as $val) {
            unset($array[$val]);
        }
    }

    public function response($status = 404, $message = '', $data = []) {
        return [
            'status' => $status,
            'message' => Messages::messages($message, 'en'),
            'data' => $data,
        ];
    }
}