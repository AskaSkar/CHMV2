<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;

trait RespondsWithHttpStatus
{
    protected function successResponse($data, int $status = Response::HTTP_OK): JsonResponse
    {
        return response()->json($data, $status);
    }

    protected function fileResponse(string $path, int $status = Response::HTTP_OK): BinaryFileResponse
    {
        return response()->download(storage_path('app/'.$path));
    }

    /**
     * @param string[] $errors
     */
    protected function errorResponse(array $errors, int $status = Response::HTTP_BAD_REQUEST): JsonResponse
    {
        return response()->json(['message' => implode(', ', $errors)], $status);
    }

    protected function emptyResponse(): JsonResponse
    {
        return response()->json('', Response::HTTP_OK);
    }

    protected function accessDenied(): JsonResponse
    {
        return response()->json('', Response::HTTP_FORBIDDEN);
    }
}
