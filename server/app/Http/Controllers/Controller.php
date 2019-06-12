<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Config\Messages;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function removeElements($array, $listUnset)
    {
        foreach ($listUnset as $val) {
            unset($array[$val]);
        }
    }

    protected function response($status = 404, $message = '', $data = [])
    {
        return [
            'status'  => $status,
            'message' => Messages::messages($message, 'en'),
            'data'    => $data
        ];
    }
}
