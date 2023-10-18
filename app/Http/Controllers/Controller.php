<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Throwable;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function executeService($service, $request = null){
        try {
            if ($request){
                $response = $service->execute($request);
            }
            else {
                $response = $service->execute();
            }

            return $this->successWithData($response);
        }
        catch (Throwable $exception){
            return $this->failed($exception);
        }
    }

    public function failed($data){
        return [
            'success' => false,
            'exeception' => $data
        ];
    }

    public function successWithData($data){
        return [
            'success' => true,
            'data' => $data
        ];
    }
}
