<?php
/**
 * Description of ActiveCityCompaniesResolver.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Companies\Resolvers;


use App\Services\Companies\Cache\CompaniesCacheKeyGenerator;
use App\Services\Companies\Repositories\CompanyRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class ActiveCityCompaniesResolver
{

    const CACHE_TTL = 300;

    private CompanyRepository $companyRepository;
    private CompaniesCacheKeyGenerator $companiesCacheKeyGenerator;

    public function __construct(
        CompaniesCacheKeyGenerator $companiesCacheKeyGenerator,
        CompanyRepository $companyRepository
    )
    {
        $this->companyRepository = $companyRepository;
        $this->companiesCacheKeyGenerator = $companiesCacheKeyGenerator;
    }

    public function resolve(int $city, int $limit, int $offset = 0): Collection
    {
        $key = $this->companiesCacheKeyGenerator->generateActiveCityCompaniesKey($city, $limit, $offset);
        return Cache::remember($key, self::CACHE_TTL, function () use ($city, $limit, $offset) {
            $companies = $this->companyRepository->getActiveCityCompanies($city, $limit, $offset);
            $companies->loadMissing([
                'city',
            ]);

            return $companies;
        });
    }
}
