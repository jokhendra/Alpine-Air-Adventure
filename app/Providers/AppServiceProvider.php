<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Log database queries in local environment
        if (config('app.env') === 'local') {
            DB::listen(function($query) {
                Log::info(
                    'DB Query',
                    [
                        'sql' => $query->sql,
                        'bindings' => $query->bindings,
                        'time' => $query->time
                    ]
                );
            });
        }

        // Log database connection status
        try {
            DB::connection()->getPdo();
            $dbName = DB::connection()->getDatabaseName();
            Log::info("✅ Database connected successfully to {$dbName}");
        } catch (\Exception $e) {
            Log::error("❌ Database connection failed: " . $e->getMessage());
        }
    }
}
