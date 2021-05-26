<?php

namespace App\Services\Companies\Jobs;

use App\Services\Companies\DTO\StoreCompanyDTO;
use App\Services\Companies\Handlers\StoreCompanyHandler;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;

class StoreCompanyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    private StoreCompanyDTO $dto;

    public function __construct(StoreCompanyDTO $dto)
    {
        $this->dto = $dto;
    }

    private function getStoreCompanyHandler(): StoreCompanyHandler
    {
        return app(StoreCompanyHandler::class);
    }

    public function handle()
    {
        $this->getStoreCompanyHandler()->handle(
            $this->dto,
        );
    }
}
