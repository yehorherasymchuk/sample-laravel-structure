<?php
/**
 * Description of CompaniesCacheKeyGenerator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace App\Services\Companies\Cache;


class CompaniesCacheKeyGenerator
{

    const ACTIVE_CITY_COMPANIES_KEY_PREFIX = 'companies.active_by_city.';

    public function generateActiveCityCompaniesKey(int $city, int $limit, int $offset = 0): string
    {
        return self::ACTIVE_CITY_COMPANIES_KEY_PREFIX . implode('.', [
                $city,
                $limit,
                $offset,
            ]);
    }

}
