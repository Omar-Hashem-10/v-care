<?php

namespace App;

trait ApiResponseTrait
{
    protected function successResponse($data, $message = "Success", $status = 200)
    {
        return response()->json([
            "success" => true,
            "message" => $message,
            "data" => $data
        ], $status);
    }

    protected function responseNotContent($message = "Not Content Found")
    {
        return response()->json([
            'success' => false,
            'message' => $message
        ], 204);
    }

    protected function responseNotFound($message = "Not Found")
    {
        return response()->json([
            'success' => false,
            'message' => $message
        ], 404);
    }

    protected function responseServerError($message = "Internal Server Error")
    {
        return response()->json([
            'success' => false,
            'message' => $message
        ], 500);
    }

    protected function responseBadRequest($message = "Invalid request", $errors = [])
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors' => $errors,
        ], 400);
    }

    protected function errorResponse($message = "Error", $status = 400)
    {
        return response()->json([
            "success" => false,
            "message" => $message
        ], $status);
    }
}
