<?php

namespace App\Services;

class ApiResponse
{
    public function response($data, $message, $code)
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
            'code' => $code
        ], $code);
    }

    public function created($data = [])
    {
        return $this->response($data, 'created successfully', 201);
    }

    public function success($data = [], $message = 'success', $code = 200)
    {
        return $this->response($data, $message, $code);
    }

    public function error($message = 'error', $code = 500)
    {
        return $this->response([], $message, $code);
    }

    public function validation($message = 'validation error')
    {
        return $this->response([], $message, 422);
    }

    public function notFound($message = 'error', $code = 404)
    {
        return $this->response([], $message, $code);
    }
}
