<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestDatabaseConnection extends Command
{
    protected $signature = 'db:test';

    protected $description = 'Test the database connection';

    public function handle()
    {
        try {
            DB::connection()->getPdo();
            $this->info('Connected to the database successfully!');
        } catch (\Exception $e) {
            $this->error('Failed to connect to the database: ' . $e->getMessage());
        }
    }
}
