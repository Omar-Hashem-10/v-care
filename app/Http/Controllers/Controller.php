<?php

namespace App\Http\Controllers;

abstract class Controller
{
    // protected function successResponse($data, $message = "Success", $status = 200)
    // {
    //     return response()->json([
    //         "success" => true,
    //         "message" => $message,
    //         "data" => $data
    //     ], $status);
    // }

    // protected function errorResponse($message = "Error", $status = 400)
    // {
    //     return response()->json([
    //         "success" => false,
    //         "message" => $message
    //     ], $status);
    // }
}
