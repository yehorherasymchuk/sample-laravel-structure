<?php
/**
 * Description of StoreCompanyHandler.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Companies\Handlers;


use App\Services\Companies\DTO\StoreCompanyDTO;
use App\Services\Companies\Repositories\CompanyRepository;

class StoreCompanyHandler
{

    private CompanyRepository $companyRepository;

    public function __construct(
        CompanyRepository $companyRepository
    )
    {
        $this->companyRepository = $companyRepository;
    }

    public function handle(StoreCompanyDTO $dto): void
    {
        $this->companyRepository->store($dto);


    }

}
