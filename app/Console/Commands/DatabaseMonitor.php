<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PDO;
use PDOException;

class DatabaseMonitor extends Command
{
    protected $signature = "db:monitor";
    protected $description = "Monitor database connection";

    public function handle()
    {
        try {
            DB::connection()->getPDO();
            $dbName = DB::connection()->getDatabaseName();
            echo "\n✅ Connected successfully to database: {$dbName}\n";
            $this->info("✅ Connected successfully to database: {$dbName}");
            return Command::SUCCESS;
        } catch (\Exception $e) {
            echo "\n❌ Database connection failed!\n";
            echo "Error: " . $e->getMessage() . "\n";
            echo "Code: " . $e->getCode() . "\n";
            $this->error("❌ Database connection failed!");
            $this->error("Error: " . $e->getMessage());
            $this->error("Code: " . $e->getCode());
            return Command::FAILURE;
        }
    }
} 