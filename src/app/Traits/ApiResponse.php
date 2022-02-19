<?php

namespace App\Traits;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

trait ApiResponse
{
    public function sendOk($status = "OK", $code = 200): JsonResponse
    {
        return response()->json(
            [
                "code" => $code,
                "status" => $status,
            ],
            $code,
        );
    }

    public function sendData($data, $status = "OK", $code = 200): JsonResponse
    {
        return response()->json(
            [
                "code" => $code,
                "status" => $status,
                "data" => $data,
            ],
            $code,
        );
    }

    public function sendError(
        $message,
        $status = "Error",
        $code = 400,
    ): JsonResponse {
        return response()->json(
            [
                "code" => $code,
                "status" => $status,
                "message" => $message,
            ],
            $code,
        );
    }

    public function handleException(Exception $e): JsonResponse
    {
        Log::error(date("Y-m-d H:i:s") . " " . (string) $e);

        if ($e instanceof ValidationException) {
            if (is_string($e->validator)) {
                return $this->sendError(
                    $e->validator,
                    "Error",
                    Response::HTTP_UNPROCESSABLE_ENTITY,
                );
            }
            $errors = $e->validator->errors()->getMessages();

            return $this->sendError(
                $errors,
                "Error",
                Response::HTTP_UNPROCESSABLE_ENTITY,
            );
        }

        if ($e instanceof AuthenticationException) {
            return $this->sendError($e->getMessage(), "Error", 401);
        }

        if ($e instanceof ConnectionException) {
            return $this->sendError("Server sedang sibuk #1001", "Error", 500);
        }

        if (env("APP_DEBUG")) {
            return $this->sendError($e->getMessage(), "Error", 500);
        }

        return $this->sendError("Internal Server Error", "Error", 500);
    }
}
