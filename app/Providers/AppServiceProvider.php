<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Passport::routes();

        Response::macro('success', function($data, $message = null, $status_code = 200){
            return response()->json([
                'status' => true,
                'data' => $data,
                'message' => $message ?? 'success',
            ], $status_code);
        });

        Response::macro('error', function($data, $message = null, $status_code = 400){
            return response()->json([
                'status' => false,
                'data' => $data,
                'message' => $message ?? 'error',
            ], $status_code);
        });
    }
}
