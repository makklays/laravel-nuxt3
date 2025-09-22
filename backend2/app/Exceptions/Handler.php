<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    //
    public function render($request, \Throwable $e)
    {
        // Для ошибок валидации
        if ($e instanceof ValidationException) {
            $response = response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);

            // Добавляем CORS заголовки вручную
            return $response
                ->header('Access-Control-Allow-Origin', 'http://localhost:3001')
                ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
                ->header('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With')
                ->header('Access-Control-Allow-Credentials', 'true');
        }

        return parent::render($request, $e);
    }
}
