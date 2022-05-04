<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class Handler extends ExceptionHandler
{

    // Handle Exception
    public function render($request, Throwable $exception)
    {
    if ($request->expectsJson()){
    if($exception instanceof ModelNotFoundException){
    return response()->json([
        'errors' =>'Product Model Not Found'
    ],Response::HTTP_NOT_FOUND);

    }

    if($exception instanceof NotFoundHttpException){
        return response()->json([
            'errors' =>'Incorrect Route'
        ],Response::HTTP_NOT_FOUND);

        }
    }
    // dd($exception);
    return parent::render($request, $exception);

    }

    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
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
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

}