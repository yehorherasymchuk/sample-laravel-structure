<?php
/**
 * Description of CompanyRepository.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Companies\Repositories;


use App\Models\Company;
use App\Services\Companies\DTO\StoreCompanyDTO;
use Illuminate\Database\Eloquent\Collection;

interface CompanyRepository
{

    public function find(int $id): ?Company;
    public function store(StoreCompanyDTO $dto): Company;
    public function getActiveCityCompanies(int $city, int $limit, int $offset = 0): Collection;

}
