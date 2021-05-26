<?php
/**
 * Description of CompaniesService.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Companies;


use App\Models\Company;
use App\Services\Companies\DTO\StoreCompanyDTO;
use App\Services\Companies\Exceptions\CompanyNotFoundException;
use App\Services\Companies\Jobs\StoreCompanyJob;
use App\Services\Companies\Repositories\CompanyRepository;
use App\Services\Companies\Resolvers\ActiveCityCompaniesResolver;
use Illuminate\Support\Collection;

class CompaniesService
{

    private ActiveCityCompaniesResolver $activeCityCompaniesResolver;
    private CompanyRepository $companyRepository;

    public function __construct(
        ActiveCityCompaniesResolver $activeCityCompaniesResolver,
        CompanyRepository $companyRepository
    )
    {
        $this->activeCityCompaniesResolver = $activeCityCompaniesResolver;
        $this->companyRepository = $companyRepository;
    }

    public function getCompany(int $id): Company
    {
        $company = $this->findCompany($id);
        if (!$company) {
            throw new CompanyNotFoundException();
        }
        return $company;
    }

    public function findCompany(int $id): ?Company
    {
        return $this->companyRepository->find($id);
    }

    public function storeCompany(StoreCompanyDTO $dto): void
    {
        StoreCompanyJob::dispatch($dto);
    }

    public function getActiveCityCompanies(int $city, int $limit, int $offset = 0): Collection
    {
        return $this->activeCityCompaniesResolver->resolve($city, $limit, $offset);
    }

}
