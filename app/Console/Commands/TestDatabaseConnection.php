<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TestDatabaseConnection extends Command
{
    protected $signature = 'db:test-connection';
    protected $description = 'Test database connection and log the result';

    public function handle()
    {
        try {
            $this->info('Testing database connection...');
            
            // Test the connection
            DB::connection()->getPdo();
            
            $dbName = DB::connection()->getDatabaseName();
            $host = config('database.connections.mysql.host');
            $port = config('database.connections.mysql.port');
            
            $message = "✅ Database connected successfully! Connected to {$dbName} on {$host}:{$port}";
            $this->info($message);
            Log::info($message);
            
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $error = "❌ Database connection failed: " . $e->getMessage();
            $this->error($error);
            Log::error($error);
            
            // Additional connection details for debugging
            $this->line("\nConnection details:");
            $this->line("Host: " . config('database.connections.mysql.host'));
            $this->line("Port: " . config('database.connections.mysql.port'));
            $this->line("Database: " . config('database.connections.mysql.database'));
            $this->line("Username: " . config('database.connections.mysql.username'));
            
            return Command::FAILURE;
        }
    }
} 