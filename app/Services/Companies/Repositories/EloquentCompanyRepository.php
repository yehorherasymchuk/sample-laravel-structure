<?php
/**
 * Description of EloquentCompanyRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Companies\Repositories;


use App\Models\Company;
use App\Services\Companies\DTO\StoreCompanyDTO;
use Illuminate\Database\Eloquent\Collection;

class EloquentCompanyRepository implements CompanyRepository
{
    public function find(int $id): ?Company
    {
        return Company::find($id);
    }

    public function store(StoreCompanyDTO $dto): Company
    {
        return Company::create($dto->toArray());
    }

    public function getActiveCityCompanies(int $city, int $limit, int $offset = 0): Collection
    {
        $qb = Company::query()
            ->where('city_id', $city)
            ->where('status', Company::STATUS_ACTIVE);
        $qb->take($limit);
        $qb->skip($offset);

        return $qb->get();

    }

}
