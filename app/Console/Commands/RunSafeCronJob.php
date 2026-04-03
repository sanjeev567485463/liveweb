<?php

namespace App\Console\Commands;

use App\Http\Controllers\Web\CronJobsController;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Throwable;

class RunSafeCronJob extends Command
{
    protected $signature = 'app:run-cron-job {method? : Allowed cron job method name}';

    protected $description = 'Run an allowlisted application cron job from the CLI';

    public function handle(): int
    {
        $method = (string) $this->argument('method');

        if ($method === '') {
            $this->components->info('Allowed cron job methods:');

            foreach (CronJobsController::ALLOWED_METHODS as $allowedMethod) {
                $this->line("- {$allowedMethod}");
            }

            return self::SUCCESS;
        }

        try {
            $response = app(CronJobsController::class)->runAllowedMethod($method, new Request());

            if ($response instanceof \Illuminate\Http\JsonResponse) {
                $this->line($response->getContent());
            } elseif (is_string($response)) {
                $this->line($response);
            } elseif ($response !== null) {
                $this->line(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?: 'Command completed.');
            } else {
                $this->info('Command completed.');
            }

            return self::SUCCESS;
        } catch (Throwable $exception) {
            $this->error($exception->getMessage());

            return self::FAILURE;
        }
    }
}
